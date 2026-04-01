<?php
include("admin/include/configpdo.php"); // must create $conn connection

if (isset($_POST['draw'])) {

    $columns = [
        0 => 'T_ID',
        1 => 'T_LeadID',
        2 => 'student_name',
        3 => 'email_id',
        4 => 'phone',
        5 => 'T_B_Amount',
        6 => 'tranID',
        7 => 'Status',
        8 => 'P_Start_date'
    ];

    $limit  = isset($_POST['length']) ? intval($_POST['length']) : 10;
    $start  = isset($_POST['start']) ? intval($_POST['start']) : 0;
    $orderColumnIndex = $_POST['order'][0]['column'];
    $order = $columns[$orderColumnIndex];
    $dir   = $_POST['order'][0]['dir'] === 'asc' ? 'ASC' : 'DESC';
    $search = $_POST['search']['value'];

    // ✅ Total records
    $totalStmt = $conn->query("SELECT COUNT(*) as total FROM temp_erp");
    $totalData = $totalStmt->fetch(PDO::FETCH_ASSOC)['total'];
    $totalFiltered = $totalData;

    // ✅ Base query
    $sql = "SELECT * FROM temp_erp WHERE 1=1";
    $params = [];

    // ✅ Search
    if (!empty($search)) {
        $sql .= " AND (
            student_name LIKE ?
            OR email_id LIKE ?
            OR phone LIKE ?
            OR T_LeadID LIKE ?
            OR Status LIKE ?
        )";

        for ($i = 0; $i < 5; $i++) {
            $params[] = "%$search%";
        }
    }

    // ✅ Count filtered properly
    $countSql = str_replace("SELECT *", "SELECT COUNT(*) as total", $sql);
    $stmtFiltered = $conn->prepare($countSql);
    $stmtFiltered->execute($params);
    $totalFiltered = $stmtFiltered->fetch(PDO::FETCH_ASSOC)['total'];

    // ✅ Order + Limit
    $sql .= " ORDER BY $order $dir LIMIT ?, ?";
    $params[] = $start;
    $params[] = $limit;

    $stmt = $conn->prepare($sql);
    $stmt->execute($params);

    $data = [];

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

        $nestedData = [];
        $nestedData['T_ID'] = $row['T_ID'];
        $nestedData['T_LeadID'] = $row['T_LeadID'];
        $nestedData['student_name'] = $row['student_name'];
        $nestedData['email_id'] = $row['email_id'];
        $nestedData['phone'] = $row['phone'];
        $nestedData['T_B_Amount'] = $row['T_B_Amount'];
        $nestedData['tranID'] = $row['tranID'];
        $nestedData['Status'] = $row['Status'];
        $nestedData['P_Start_date'] = $row['P_Start_date'];

        if (strtolower($row['Status']) == "processing") {
            $nestedData['action'] = "<a href='ccavenue_test.php?process_id=" 
                                    . $row['tranID'] . 
                                    "' class='btn btn-sm btn-primary'>Process</a>";
        } else {
            $nestedData['action'] = "-";
        }

        $data[] = $nestedData;
    }

    echo json_encode([
        "draw" => intval($_POST['draw']),
        "recordsTotal" => intval($totalData),
        "recordsFiltered" => intval($totalFiltered),
        "data" => $data
    ]);

    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ERP Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
</head>
<body class="bg-light">

<div class="col-12 mt-4 p-4">
    <h3 class="mb-4">Temp ERP Records</h3>

    <div class="card shadow-sm">
        <div class="card-body">
            <div class="table-responsive" style="width:100%; overflow-y:auto;">
                <table id="erpTable" class="table table-striped table-bordered mb-0">
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
    $('#erpTable').DataTable({
        processing: true,
        serverSide: true,
        ajax: {
            url: "temp_erp_payment_tracker.php",
            type: "POST"
        },
        order: [[8, "desc"]],
        columns: [
            { data: "T_ID" },
            { data: "T_LeadID" },
            { data: "student_name" },
            { data: "email_id" },
            { data: "phone" },
            { data: "T_B_Amount" },
            { data: "tranID" },
            { data: "Status" },
            { data: "P_Start_date" },
            { data: "action", orderable: false, searchable: false }
        ]
    });
});
</script>

</body>
</html>
