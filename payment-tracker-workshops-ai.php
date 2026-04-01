<?php
include("admin/include/configpdo.php");

/* ===============================
   Pagination & Search Settings
=================================*/

$results_per_page = isset($_GET['show']) ? (int) $_GET['show'] : 10;
$page = isset($_GET['page']) ? (int) $_GET['page'] : 1;

$search = isset($_GET['search']) ? trim($_GET['search']) : '';
$pagename = isset($_GET['pagename']) ? trim($_GET['pagename']) : '';

$sort = isset($_GET['sort']) ? $_GET['sort'] : 'othr_id';
$order = isset($_GET['order']) ? strtoupper($_GET['order']) : 'DESC';

/* ===============================
   Secure Sorting (Whitelist)
=================================*/

$allowed_sort_columns = array(
    'leadID',
    'DT',
    'name',
    'email',
    'phone',
    'institution',
    'Role',
    'reg_id',
    'experience',
    'pagename',
    'amount',
    'PayU_ID',
    'othr_id'
);

if (!in_array($sort, $allowed_sort_columns)) {
    $sort = 'othr_id';
}

if ($order !== 'ASC' && $order !== 'DESC') {
    $order = 'DESC';
}

/* ===============================
   WHERE Conditions
=================================*/

$where = " WHERE 1 ";
$params = array();

if ($search !== '') {
    $where .= " AND (email LIKE ? OR phone LIKE ?) ";
    $params[] = "%$search%";
    $params[] = "%$search%";
}

if ($pagename !== '') {
    $where .= " AND pagename = ? ";
    $params[] = $pagename;
}

/* ===============================
   Total Records
=================================*/

$count_sql = "SELECT COUNT(*) FROM ai_transaction $where";
$count_stmt = $conn->prepare($count_sql);
$count_stmt->execute($params);
$total_records = $count_stmt->fetchColumn();

$total_pages = ceil($total_records / $results_per_page);

/* ===============================
   Pagination Offset
=================================*/

$start = ($page - 1) * $results_per_page;

/* ===============================
   Fetch Data
=================================*/

$data_sql = "SELECT * FROM ai_transaction 
             $where 
             ORDER BY $sort $order 
             LIMIT ?, ?";

$data_params = $params;
$data_params[] = (int) $start;
$data_params[] = (int) $results_per_page;

$data_stmt = $conn->prepare($data_sql);

$i = 1;
foreach ($data_params as $param) {
    if (is_int($param)) {
        $data_stmt->bindValue($i, $param, PDO::PARAM_INT);
    } else {
        $data_stmt->bindValue($i, $param, PDO::PARAM_STR);
    }
    $i++;
}

$data_stmt->execute();
$result = $data_stmt->fetchAll(PDO::FETCH_ASSOC);

/* ===============================
   Distinct Pagenames
=================================*/

$pagename_stmt = $conn->prepare("SELECT DISTINCT pagename FROM ai_transaction ORDER BY pagename ASC");
$pagename_stmt->execute();
$pagename_result = $pagename_stmt->fetchAll(PDO::FETCH_ASSOC);

/* ===============================
   Safe Output Function
=================================*/

function e($value)
{
    return htmlspecialchars((string) $value, ENT_QUOTES, 'UTF-8');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Payment Tracker for workshop & AI</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet">
</head>

<body>
    <div class="container-fluid mt-5">

        <h1 class="text-center mb-3">Payment Tracker for workshop & AI</h1>

        <form method="GET" class="d-flex flex-wrap gap-2 mb-3">

            <input type="text" name="search" class="form-control w-50" placeholder="Search by Email / Mobile No"
                value="<?php echo e($search); ?>">

            <select name="show" class="form-select w-auto" onchange="this.form.submit()">
                <option value="10" <?php echo ($results_per_page == 10) ? 'selected' : ''; ?>>10</option>
                <option value="25" <?php echo ($results_per_page == 25) ? 'selected' : ''; ?>>25</option>
                <option value="50" <?php echo ($results_per_page == 50) ? 'selected' : ''; ?>>50</option>
                <option value="100" <?php echo ($results_per_page == 100) ? 'selected' : ''; ?>>100</option>
            </select>

            <button type="submit" class="btn btn-primary">Search</button>

            <select name="pagename" class="form-select w-auto" onchange="this.form.submit()">
                <option value="">Select Workshop Type</option>
                <?php foreach ($pagename_result as $row_p): ?>
                    <option value="<?php echo e($row_p['pagename']); ?>" <?php echo ($pagename == $row_p['pagename']) ? 'selected' : ''; ?>>
                        <?php echo e($row_p['pagename']); ?>
                    </option>
                <?php endforeach; ?>
            </select>

        </form>

        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <span>Total Records: <?php echo (int) $total_records; ?></span>
                <a href="download-csv-for-ai.php?t=<?php echo time(); ?>" class="btn btn-primary">
                    <i class="bi bi-download"></i> Download All
                </a>
            </div>

            <div class="card-body overflow-auto text-nowrap p-0">
                <table class="table table-striped table-hover mb-0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Payment Date</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Mobile</th>
                            <th>Institution</th>
                            <th>Role</th>
                            <th>Reg ID</th>
                            <th>Experience</th>
                            <th>Pagename</th>
                            <th>Amount</th>
                            <th>Payment ID</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php foreach ($result as $row): ?>
                            <tr>
                                <td><?php echo e($row['othr_id']); ?></td>
                                <td><?php echo e($row['DT']); ?></td>
                                <td><?php echo e($row['name']); ?></td>
                                <td><?php echo e($row['email']); ?></td>
                                <td><?php echo e($row['phone']); ?></td>
                                <td><?php echo e($row['institution']); ?></td>
                                <td><?php echo e($row['Role']); ?></td>
                                <td><?php echo e($row['reg_id']); ?></td>
                                <td><?php echo e($row['experience']); ?></td>
                                <td><?php echo e($row['pagename']); ?></td>
                                <td><?php echo e($row['amount']); ?></td>
                                <td><?php echo e($row['PayU_ID']); ?></td>
                            </tr>
                        <?php endforeach; ?>

                    </tbody>
                </table>
                <div class="card-footer d-flex justify-content-between align-items-center">

                    <div>
                        Showing
                        <?php
                        if ($total_records > 0) {
                            echo ($start + 1) . ' to ' . min($start + $results_per_page, $total_records) . ' of ' . $total_records;
                        } else {
                            echo '0 entries';
                        }
                        ?>
                        entries
                    </div>

                    <nav>
                        <ul class="pagination mb-0">

                            <!-- Previous -->
                            <li class="page-item <?php echo ($page <= 1) ? 'disabled' : ''; ?>">
                                <a class="page-link" href="?page=<?php echo max(1, $page - 1); ?>
                   &search=<?php echo urlencode($search); ?>
                   &show=<?php echo $results_per_page; ?>
                   &pagename=<?php echo urlencode($pagename); ?>
                   &sort=<?php echo $sort; ?>
                   &order=<?php echo $order; ?>">
                                    Previous
                                </a>
                            </li>

                            <?php
                            $start_page = max(1, $page - 2);
                            $end_page = min($total_pages, $page + 2);

                            for ($i = $start_page; $i <= $end_page; $i++):
                                ?>
                                <li class="page-item <?php echo ($page == $i) ? 'active' : ''; ?>">
                                    <a class="page-link" href="?page=<?php echo $i; ?>
                       &search=<?php echo urlencode($search); ?>
                       &show=<?php echo $results_per_page; ?>
                       &pagename=<?php echo urlencode($pagename); ?>
                       &sort=<?php echo $sort; ?>
                       &order=<?php echo $order; ?>">
                                        <?php echo $i; ?>
                                    </a>
                                </li>
                            <?php endfor; ?>

                            <!-- Next -->
                            <li class="page-item <?php echo ($page >= $total_pages) ? 'disabled' : ''; ?>">
                                <a class="page-link" href="?page=<?php echo min($total_pages, $page + 1); ?>
                   &search=<?php echo urlencode($search); ?>
                   &show=<?php echo $results_per_page; ?>
                   &pagename=<?php echo urlencode($pagename); ?>
                   &sort=<?php echo $sort; ?>
                   &order=<?php echo $order; ?>">
                                    Next
                                </a>
                            </li>

                        </ul>
                    </nav>
                </div>
            </div>

        </div>
    </div>
</body>

</html>