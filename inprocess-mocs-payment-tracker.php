<?php
include("admin/include/configpdo.php");

/* ===============================
   Safe Output Function (Fix null warning PHP 8.2+)
=================================*/
function e($value) {
    return htmlspecialchars((string)$value, ENT_QUOTES, 'UTF-8');
}

/* ===============================
   Pagination & Search
=================================*/
$results_per_page = isset($_GET['show']) ? (int)$_GET['show'] : 10;
$page   = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$search = isset($_GET['search']) ? trim($_GET['search']) : '';

$sort  = isset($_GET['sort']) ? $_GET['sort'] : 'T_ID';
$order = isset($_GET['order']) ? strtoupper($_GET['order']) : 'DESC';

/* ===============================
   Allowed Sort Columns (Security)
=================================*/
$allowed_sort_columns = array(
    'T_LeadID','P_Start_date','student_name',
    'email_id','phone','course',
    'fees_type','tranID','T_B_Amount','T_ID'
);

if (!in_array($sort, $allowed_sort_columns)) {
    $sort = 'T_ID';
}

if ($order !== 'ASC' && $order !== 'DESC') {
    $order = 'DESC';
}

/* ===============================
   Allowed fees_type values
=================================*/
$allowed_fees_types = array(
    "MIT Harbour Subscription",
    "Coping Workshops + Study Plans",
    "Mentoring Program",
    "Group Therapy + Counselling Sessions + Harbour Archives",
    "All 6 Offerings",
    "Alumni (Coping Workshops + Harbour Archives)",
    "Prarambh",
    "All 5 Services Bundle (Excluding Placement Training)",
    "Alumni (Coping Workshops + MOCS Archives)",
    "5-Services Bundle + Placement Training"
);

/* ===============================
   Build WHERE Clause
=================================*/
$where = " WHERE (";
$params = array();

/* Fees Type LIKE Conditions */
$fees_conditions = array();
foreach ($allowed_fees_types as $val) {
    $fees_conditions[] = "fees_type LIKE ?";
    $params[] = "%$val%";
}
$where .= implode(" OR ", $fees_conditions);
$where .= ")";

/* Search Condition */
if ($search !== '') {
    $where .= " AND (email_id LIKE ? OR phone LIKE ?)";
    $params[] = "%$search%";
    $params[] = "%$search%";
}

/* ===============================
   Total Records
=================================*/
$count_sql = "SELECT COUNT(*) FROM temp $where";
$count_stmt = $conn->prepare($count_sql);
$count_stmt->execute($params);
$total_records = $count_stmt->fetchColumn();

$total_pages = ceil($total_records / $results_per_page);

if ($page > $total_pages && $total_pages > 0) {
    $page = 1;
}

/* ===============================
   Pagination Offset
=================================*/
$start = ($page - 1) * $results_per_page;

/* ===============================
   Fetch Data
=================================*/
$data_sql = "SELECT * FROM temp 
             $where 
             ORDER BY $sort $order 
             LIMIT ?, ?";

$data_params = $params;
$data_params[] = (int)$start;
$data_params[] = (int)$results_per_page;

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
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>In process MOCS Payment Tracker</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet">
<style>
.sortable { cursor:pointer; }
.sortable:hover { background:#f1f1f1; }
</style>
</head>

<body>
<div class="container-fluid mt-5">

<h1 class="text-center mb-3">In process MOCS Payment Tracker</h1>

<form method="GET" class="d-flex align-items-center mb-3">
<input type="text" name="search" class="form-control me-2"
placeholder="Search by Email / Mobile No"
value="<?php echo e($search); ?>">

<select name="show" class="form-select w-auto me-2" onchange="this.form.submit()">
<option value="10" <?php echo ($results_per_page==10)?'selected':''; ?>>10</option>
<option value="25" <?php echo ($results_per_page==25)?'selected':''; ?>>25</option>
<option value="50" <?php echo ($results_per_page==50)?'selected':''; ?>>50</option>
<option value="100" <?php echo ($results_per_page==100)?'selected':''; ?>>100</option>
</select>

<button type="submit" class="btn btn-primary">Search</button>
</form>

<div class="card">
<div class="card-header d-flex justify-content-between">
<span>Total Records: <?php echo (int)$total_records; ?></span>
</div>

<div class="card-body overflow-auto text-nowrap p-0">
<table class="table table-striped table-hover mb-0">
<thead>
<tr>
<th>Sr No.</th>
<th class="sortable" onclick="sortTable('T_LeadID')">Lead ID</th>
<th class="sortable" onclick="sortTable('P_Start_date')">Payment Start Date</th>
<th class="sortable" onclick="sortTable('student_name')">Name</th>
<th class="sortable" onclick="sortTable('email_id')">Email</th>
<th>Mobile</th>
<th>Course</th>
<th>Service Type</th>
<th>Transaction ID</th>
<th>Amount</th>
</tr>
</thead>
<tbody>

<?php
$srno = $start + 1;
foreach ($result as $row):
?>
<tr>
<td><?php echo $srno++; ?></td>
<td><?php echo e($row['T_LeadID']); ?></td>
<td><?php echo e($row['P_Start_date']); ?></td>
<td><?php echo e($row['student_name']); ?></td>
<td><?php echo e($row['email_id']); ?></td>
<td><?php echo e($row['phone']); ?></td>
<td><?php echo e($row['course']); ?></td>
<td><?php echo e($row['fees_type']); ?></td>
<td><?php echo e($row['tranID']); ?></td>
<td><?php echo e($row['T_B_Amount']); ?></td>
</tr>
<?php endforeach; ?>

</tbody>
</table>
</div>

<div class="card-footer d-flex justify-content-between">

<div>
Showing
<?php
if ($total_records > 0) {
echo ($start+1)." to ".min($start+$results_per_page,$total_records)." of ".$total_records;
} else {
echo "0";
}
?>
entries
</div>

<nav>
<ul class="pagination mb-0">

<li class="page-item <?php echo ($page<=1)?'disabled':''; ?>">
<a class="page-link"
href="?page=<?php echo max(1,$page-1); ?>&search=<?php echo urlencode($search); ?>&show=<?php echo $results_per_page; ?>&sort=<?php echo $sort; ?>&order=<?php echo $order; ?>">
Previous
</a>
</li>

<?php
$start_page=max(1,$page-2);
$end_page=min($total_pages,$page+2);
for($i=$start_page;$i<=$end_page;$i++):
?>
<li class="page-item <?php echo ($page==$i)?'active':''; ?>">
<a class="page-link"
href="?page=<?php echo $i; ?>&search=<?php echo urlencode($search); ?>&show=<?php echo $results_per_page; ?>&sort=<?php echo $sort; ?>&order=<?php echo $order; ?>">
<?php echo $i; ?>
</a>
</li>
<?php endfor; ?>

<li class="page-item <?php echo ($page>=$total_pages)?'disabled':''; ?>">
<a class="page-link"
href="?page=<?php echo min($total_pages,$page+1); ?>&search=<?php echo urlencode($search); ?>&show=<?php echo $results_per_page; ?>&sort=<?php echo $sort; ?>&order=<?php echo $order; ?>">
Next
</a>
</li>

</ul>
</nav>

</div>
</div>
</div>

<script>
function sortTable(column){
const url=new URL(window.location.href);
const currentSort=url.searchParams.get('sort');
const currentOrder=url.searchParams.get('order');

let newOrder='ASC';
if(currentSort===column){
newOrder=(currentOrder==='ASC')?'DESC':'ASC';
}

url.searchParams.set('sort',column);
url.searchParams.set('order',newOrder);
window.location.href=url.toString();
}
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>