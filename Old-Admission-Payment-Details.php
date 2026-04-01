<?php
include("admin/include/configpdo.php");

/* ===============================
   PAGINATION & SEARCH SETTINGS
================================= */

$results_per_page = isset($_GET['show']) ? (int)$_GET['show'] : 10;
$page   = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$search = isset($_GET['search']) ? $_GET['search'] : '';
$sort   = isset($_GET['sort']) ? $_GET['sort'] : 'transationDate';
$order  = isset($_GET['order']) ? $_GET['order'] : 'DESC';

if ($page < 1) $page = 1;
if ($results_per_page < 1) $results_per_page = 10;

/* ===== Secure Sorting ===== */
$allowed_columns = array(
    'leadID',
    'transationDate',
    'name',
    'email',
    'phone',
    'amount',
    'FeesType',
    'PayU_ID',
    'CourseName',
    'SpecializationID'
);

if (!in_array($sort, $allowed_columns)) {
    $sort = 'leadID';
}

$order = strtoupper($order) === 'DESC' ? 'DESC' : 'ASC';

/* ===============================
   TOTAL RECORD COUNT
================================= */

$count_sql = "SELECT COUNT(*) FROM old_student_transaction
              WHERE email LIKE :search";

$count_stmt = $conn->prepare($count_sql);
$count_stmt->execute(array(':search' => "%$search%"));
$total_records = $count_stmt->fetchColumn();

$total_pages = ceil($total_records / $results_per_page);
$start = ($page - 1) * $results_per_page;

/* ===============================
   FETCH DATA
================================= */

$sql = "SELECT * FROM old_student_transaction
        WHERE email LIKE :search
        ORDER BY $sort $order
        LIMIT :start, :limit";

$stmt = $conn->prepare($sql);
$stmt->bindValue(':search', "%$search%", PDO::PARAM_STR);
$stmt->bindValue(':start', (int)$start, PDO::PARAM_INT);
$stmt->bindValue(':limit', (int)$results_per_page, PDO::PARAM_INT);
$stmt->execute();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Old Admission Payment Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        .sortable { cursor: pointer; }
        .sortable:hover { background-color: #f1f1f1; }
    </style>
</head>

<body>
<div class="container-fluid mt-5">
    <div class="row mb-3">
        <h1 class="text-center mb-3">Old Admission Payment Details</h1>
        <div class="col-md-6">
            <form method="GET" class="d-flex align-items-center">
                <input type="text" name="search" class="form-control me-2"
                    placeholder="Search by Email"
                    value="<?php echo htmlspecialchars($search); ?>">

                <select name="show" class="form-select w-auto me-2" onchange="this.form.submit()">
                    <option value="10" <?php if($results_per_page==10) echo 'selected'; ?>>10</option>
                    <option value="25" <?php if($results_per_page==25) echo 'selected'; ?>>25</option>
                    <option value="50" <?php if($results_per_page==50) echo 'selected'; ?>>50</option>
                    <option value="100" <?php if($results_per_page==100) echo 'selected'; ?>>100</option>
                </select>

                <button type="submit" class="btn btn-primary">Search</button>
            </form>
        </div>
    </div>

    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <span>Data Table</span>
            <span class="text-muted">Total Records: <?php echo $total_records; ?></span>
        </div>

        <div class="card-body overflow-auto text-nowrap p-0">
            <table class="table table-striped table-hover mb-0">
                <thead>
                    <tr>
                        <th class="sortable" onclick="sortTable('leadID')">ID <i class="bi bi-arrow-down-up"></i></th>
                        <th class="sortable" onclick="sortTable('transationDate')">Payment Date <i class="bi bi-arrow-down-up"></i></th>
                        <th class="sortable" onclick="sortTable('name')">Name <i class="bi bi-arrow-down-up"></i></th>
                        <th class="sortable" onclick="sortTable('email')">Email <i class="bi bi-arrow-down-up"></i></th>
                        <th>Phone</th>
                        <th>Amount</th>
                        <th>Fee Type</th>
                        <th>PayU_ID</th>
                        <th>Course Name</th>
                        <th>Specialization</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = $stmt->fetch(PDO::FETCH_ASSOC)): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($row['leadID']); ?></td>
                            <td><?php echo htmlspecialchars($row['transationDate']); ?></td>
                            <td><?php echo htmlspecialchars($row['name']); ?></td>
                            <td><?php echo htmlspecialchars($row['email']); ?></td>
                            <td><?php echo htmlspecialchars($row['phone']); ?></td>
                            <td><?php echo htmlspecialchars($row['amount']); ?></td>
                            <td><?php echo htmlspecialchars($row['FeesType']); ?></td>
                            <td><?php echo htmlspecialchars($row['PayU_ID']); ?></td>
                            <td><?php echo htmlspecialchars($row['CourseName']); ?></td>
                            <td><?php echo htmlspecialchars($row['SpecializationID']); ?></td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>

        <div class="card-footer d-flex justify-content-between align-items-center">
            <div>
                Showing <?php echo ($start + 1); ?> to 
                <?php echo min($start + $results_per_page, $total_records); ?> 
                of <?php echo $total_records; ?> entries
            </div>

            <?php if($total_pages > 1): ?>
            <nav>
                <ul class="pagination mb-0">

                    <li class="page-item <?php if($page<=1) echo 'disabled'; ?>">
                        <a class="page-link"
                           href="?page=<?php echo max(1,$page-1); ?>&search=<?php echo urlencode($search); ?>&show=<?php echo $results_per_page; ?>">
                            Previous
                        </a>
                    </li>

                    <?php
                    $start_page = max(1, $page - 2);
                    $end_page   = min($total_pages, $page + 2);

                    for($i=$start_page; $i<=$end_page; $i++): ?>
                        <li class="page-item <?php if($page==$i) echo 'active'; ?>">
                            <a class="page-link"
                               href="?page=<?php echo $i; ?>&search=<?php echo urlencode($search); ?>&show=<?php echo $results_per_page; ?>">
                               <?php echo $i; ?>
                            </a>
                        </li>
                    <?php endfor; ?>

                    <li class="page-item <?php if($page>=$total_pages) echo 'disabled'; ?>">
                        <a class="page-link"
                           href="?page=<?php echo min($total_pages,$page+1); ?>&search=<?php echo urlencode($search); ?>&show=<?php echo $results_per_page; ?>">
                            Next
                        </a>
                    </li>

                </ul>
            </nav>
            <?php endif; ?>
        </div>
    </div>
</div>

<script>
function sortTable(column) {
    const url = new URL(window.location.href);
    const currentSort = url.searchParams.get('sort');
    const currentOrder = url.searchParams.get('order');

    let newOrder = 'ASC';
    if (currentSort === column) {
        newOrder = (currentOrder === 'ASC') ? 'DESC' : 'ASC';
    }

    url.searchParams.set('sort', column);
    url.searchParams.set('order', newOrder);
    window.location.href = url.toString();
}
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>