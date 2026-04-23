<?php
// ============================================
// MITSDE - OLD ERP Student Dashboard
// API Endpoint — PDO version
// ============================================

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

require_once 'config.php';

$action = $_GET['action'] ?? '';

switch ($action) {
    case 'stats':                getStats();               break;
    case 'datatable':            getDatatable();           break;
    case 'chart_program':        getChartProgram();        break;
    case 'chart_specialization': getChartSpecialization(); break;
    case 'chart_status':         getChartStatus();         break;
    case 'chart_admission_year': getChartAdmissionYear();  break;
    default: echo json_encode(['error' => 'Invalid action']);
}

// ─── STATS ────────────────────────────────────────────────────────────────────
function getStats() {
    $db = getDB();
    $stats = [];

    $stats['total']           = (int) $db->query("SELECT COUNT(*) FROM old_student")->fetchColumn();
    $stats['confirmed']       = (int) $db->query("SELECT COUNT(*) FROM old_student WHERE Status = 'Confirmed Enrolled'")->fetchColumn();
    $stats['programs']        = (int) $db->query("SELECT COUNT(DISTINCT Course) FROM old_student WHERE Course IS NOT NULL AND Course != ''")->fetchColumn();
    $stats['specializations'] = (int) $db->query("SELECT COUNT(DISTINCT Specialization) FROM old_student WHERE Specialization IS NOT NULL AND Specialization != ''")->fetchColumn();
    $stats['with_dues']       = (int) $db->query("SELECT COUNT(*) FROM old_student WHERE DueAmount IS NOT NULL AND DueAmount != '' AND DueAmount != '0' AND DueAmount != '0.00'")->fetchColumn();

    // Payment mode
    $rows = $db->query("SELECT LumpsumInstallment, COUNT(*) as cnt FROM old_student WHERE LumpsumInstallment IS NOT NULL AND LumpsumInstallment != '' GROUP BY LumpsumInstallment")->fetchAll();
    $stats['payment_mode'] = [];
    foreach ($rows as $row) {
        $stats['payment_mode'][$row['LumpsumInstallment']] = (int) $row['cnt'];
    }

    // Category wise
    $rows = $db->query("SELECT Category, COUNT(*) as cnt FROM old_student WHERE Category IS NOT NULL AND Category != '' GROUP BY Category ORDER BY cnt DESC")->fetchAll();
    $stats['category'] = [];
    foreach ($rows as $row) {
        $stats['category'][$row['Category']] = (int) $row['cnt'];
    }

    echo json_encode($stats);
}

// ─── DATATABLE ────────────────────────────────────────────────────────────────
function getDatatable() {
    $db = getDB();

    $draw   = (int) ($_GET['draw']   ?? 1);
    $start  = (int) ($_GET['start']  ?? 0);
    $length = (int) ($_GET['length'] ?? 25);
    if ($length < 1 || $length > 500) $length = 25;

    $search          = trim($_GET['search']          ?? '');
    $filter_course   = trim($_GET['filter_course']   ?? '');
    $filter_spec     = trim($_GET['filter_spec']     ?? '');
    $filter_status   = trim($_GET['filter_status']   ?? '');
    $filter_category = trim($_GET['filter_category'] ?? '');
    $filter_duration = trim($_GET['filter_duration'] ?? '');

    // Build WHERE
    $where_parts = [];
    $params      = [];

    if ($search !== '') {
        $like = '%' . $search . '%';
        $where_parts[] = "(RegistrationNo LIKE ? OR StudentName LIKE ? OR DisplayName LIKE ? OR Email LIKE ? OR ContactNo LIKE ? OR Specialization LIKE ? OR Course LIKE ?)";
        array_push($params, $like, $like, $like, $like, $like, $like, $like);
    }
    if ($filter_course   !== '') { $where_parts[] = "Course = ?";         $params[] = $filter_course; }
    if ($filter_spec     !== '') { $where_parts[] = "Specialization = ?"; $params[] = $filter_spec; }
    if ($filter_status   !== '') { $where_parts[] = "Status = ?";         $params[] = $filter_status; }
    if ($filter_category !== '') { $where_parts[] = "Category = ?";       $params[] = $filter_category; }
    if ($filter_duration !== '') { $where_parts[] = "Duration = ?";       $params[] = $filter_duration; }

    $where_sql = count($where_parts) > 0 ? 'WHERE ' . implode(' AND ', $where_parts) : '';

    // Total (unfiltered)
    $total_records = (int) $db->query("SELECT COUNT(*) FROM old_student")->fetchColumn();

    // Total filtered
    $filtered_records = $total_records;
    if ($where_sql !== '') {
        $stmt = $db->prepare("SELECT COUNT(*) FROM old_student $where_sql");
        $stmt->execute($params);
        $filtered_records = (int) $stmt->fetchColumn();
    }

    // Sorting — whitelist only
    $columns = [
        0 => 'id',          1 => 'RegistrationNo',     2 => 'StudentName',
        3 => 'ContactNo',   4 => 'Email',               5 => 'Category',
        6 => 'Status',      7 => 'Course',              8 => 'Specialization',
        9 => 'Duration',   10 => 'DateOfAdmisssion',   11 => 'CourseLastDate',
       12 => 'LumpsumInstallment', 13 => 'TotalCourseFee',
       14 => 'TotalCourseFeePaid', 15 => 'DueAmount',
    ];
    $order_col_index = (int) ($_GET['order_col'] ?? 0);
    $order_dir       = strtoupper($_GET['order_dir'] ?? 'ASC');
    if (!in_array($order_dir, ['ASC', 'DESC'])) $order_dir = 'ASC';
    $order_col = $columns[$order_col_index] ?? 'id';

    // Data query — use positional ? for filters, named for LIMIT/OFFSET
    $data_params = $params;
    $data_params[] = $length;
    $data_params[] = $start;

    $sql = "SELECT id, RegistrationNo, StudentName, DisplayName, ContactNo, Email,
                   Category, SubCategory, Status, DateOfAdmisssion, CourseLastDate,
                   CCourseCompletedOn, University, Course, Specialization,
                   AdditionalSpecialization, AdmissionType, Duration,
                   LumpsumInstallment, TotalCourseFee, TotalCourseFeePaid,
                   TotalOtherCharges, BillingAmount, DueAmount
            FROM old_student
            $where_sql
            ORDER BY `$order_col` $order_dir
            LIMIT ? OFFSET ?";

    $stmt = $db->prepare($sql);
    $stmt->execute($data_params);

    echo json_encode([
        'draw'            => $draw,
        'recordsTotal'    => $total_records,
        'recordsFiltered' => $filtered_records,
        'data'            => $stmt->fetchAll(),
    ]);
}

// ─── CHART: PROGRAM WISE ──────────────────────────────────────────────────────
function getChartProgram() {
    $db   = getDB();
    $rows = $db->query("SELECT Course, COUNT(*) as cnt FROM old_student WHERE Course IS NOT NULL AND Course != '' GROUP BY Course ORDER BY cnt DESC LIMIT 15")->fetchAll();
    echo json_encode([
        'labels' => array_column($rows, 'Course'),
        'values' => array_map('intval', array_column($rows, 'cnt')),
    ]);
}

// ─── CHART: SPECIALIZATION WISE ───────────────────────────────────────────────
function getChartSpecialization() {
    $db   = getDB();
    $rows = $db->query("SELECT Specialization, COUNT(*) as cnt FROM old_student WHERE Specialization IS NOT NULL AND Specialization != '' GROUP BY Specialization ORDER BY cnt DESC LIMIT 20")->fetchAll();
    echo json_encode([
        'labels' => array_column($rows, 'Specialization'),
        'values' => array_map('intval', array_column($rows, 'cnt')),
    ]);
}

// ─── CHART: STATUS WISE ───────────────────────────────────────────────────────
function getChartStatus() {
    $db   = getDB();
    $rows = $db->query("SELECT Status, COUNT(*) as cnt FROM old_student WHERE Status IS NOT NULL AND Status != '' GROUP BY Status ORDER BY cnt DESC")->fetchAll();
    echo json_encode([
        'labels' => array_column($rows, 'Status'),
        'values' => array_map('intval', array_column($rows, 'cnt')),
    ]);
}

// ─── CHART: ADMISSION YEAR TREND ─────────────────────────────────────────────
function getChartAdmissionYear() {
    $db   = getDB();
    $rows = $db->query("
        SELECT
            CASE
                WHEN DateOfAdmisssion REGEXP '[0-9]{2}-[A-Za-z]{3}-[0-9]{2}\$'
                THEN CONCAT('20', SUBSTRING(DateOfAdmisssion, -2))
                ELSE 'Unknown'
            END as yr,
            COUNT(*) as cnt
        FROM old_student
        WHERE DateOfAdmisssion IS NOT NULL AND DateOfAdmisssion != ''
        GROUP BY yr
        ORDER BY yr ASC
    ")->fetchAll();
    echo json_encode([
        'labels' => array_column($rows, 'yr'),
        'values' => array_map('intval', array_column($rows, 'cnt')),
    ]);
}
