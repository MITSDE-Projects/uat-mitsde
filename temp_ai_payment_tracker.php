<?php
include("admin/include/configpdo.php"); // must create $conn connection

if (isset($_POST['draw'])) {

    $columns = array(
        0 => 'othr_id',
        1 => 'reg_id',
        2 => 'name',
        3 => 'email',
        4 => 'phone',
        5 => 'amount',
        6 => 't_process_id',
        7 => 'Status',
        8 => 'DT'
    );

    $limit  = isset($_POST['length']) ? intval($_POST['length']) : 10;
    $start  = isset($_POST['start']) ? intval($_POST['start']) : 0;
    $orderColumnIndex = $_POST['order'][0]['column'];
    $order = $columns[$orderColumnIndex];
    $dir   = $_POST['order'][0]['dir'] === 'asc' ? 'ASC' : 'DESC';
    $search = $_POST['search']['value'];

    // ✅ Total Records
    $totalStmt = $conn->query("SELECT COUNT(*) as total FROM temp_ai_transaction");
    $totalData = $totalStmt->fetch(PDO::FETCH_ASSOC);
    $totalData = $totalData['total'];
    $totalFiltered = $totalData;

    // ✅ Base Query
    $sql = "SELECT * FROM temp_ai_transaction WHERE 1=1";
    $params = array();

    // ✅ Search
    if (!empty($search)) {
        $sql .= " AND (
            name LIKE ?
            OR email LIKE ?
            OR phone LIKE ?
            OR reg_id LIKE ?
            OR Status LIKE ?
        )";

        for ($i = 0; $i < 5; $i++) {
            $params[] = "%$search%";
        }
    }

    // ✅ Proper Filter Count
    $countSql = str_replace("SELECT *", "SELECT COUNT(*) as total", $sql);
    $stmtFiltered = $conn->prepare($countSql);
    $stmtFiltered->execute($params);
    $countResult = $stmtFiltered->fetch(PDO::FETCH_ASSOC);
    $totalFiltered = $countResult['total'];

    // ✅ Order + Limit
    $sql .= " ORDER BY $order $dir LIMIT ?, ?";
    $params[] = $start;
    $params[] = $limit;

    $stmt = $conn->prepare($sql);
    $stmt->execute($params);

    $data = array();

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

        $nestedData = array();
        $nestedData['othr_id'] = $row['othr_id'];
        $nestedData['reg_id'] = $row['reg_id'];
        $nestedData['name'] = $row['name'];
        $nestedData['email'] = $row['email'];
        $nestedData['phone'] = $row['phone'];
        $nestedData['amount'] = $row['amount'];
        $nestedData['t_process_id'] = $row['t_process_id'];
        $nestedData['Status'] = $row['Status'];
        $nestedData['DT'] = $row['DT'];

        if (strtolower($row['Status']) == "processing") {
            $nestedData['action'] = "<a href='ccavenue_ai_test.php?process_id=" 
                                    . $row['t_process_id'] . 
                                    "' class='btn btn-sm btn-primary'>Process</a>";
        } else {
            $nestedData['action'] = "-";
        }

        $data[] = $nestedData;
    }

    echo json_encode(array(
        "draw" => intval($_POST['draw']),
        "recordsTotal" => intval($totalData),
        "recordsFiltered" => intval($totalFiltered),
        "data" => $data
    ));

    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Workshop Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
</head>
<body class="bg-light">

<div class="col-12 mt-4 p-4">
    <h3 class="mb-4">Temp Workshop Records</h3>

    <div class="card shadow-sm">
        <div class="card-body">
            <div class="table-responsive" style="width:100%; overflow-y:auto;">
                <table id="aiTable" class="table table-striped table-bordered mb-0">
                    <thead class="table-dark">
                        <tr>
                            <th>ID</th>
                            <th>LeadID</th>
                            <th>Student Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Amount</th>
                            <th>OrderID</th>
                            <th>Status</th>
                            <th>Payment Start DT</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>

<script>
$(document).ready(function () {
    $('#aiTable').DataTable({
        processing: true,
        serverSide: true,
        ajax: {
            url: "temp_ai_payment_tracker.php",
            type: "POST"
        },
        order: [[8, "desc"]],
        columns: [
            { data: "othr_id" },
            { data: "reg_id" },
            { data: "name" },
            { data: "email" },
            { data: "phone" },
            { data: "amount" },
            { data: "t_process_id" },
            { data: "Status" },
            { data: "DT" },
            { data: "action", orderable: false, searchable: false }
        ]
    });
});
</script>

</body>
</html>
