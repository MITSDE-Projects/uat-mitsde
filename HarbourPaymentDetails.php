<?php
include("admin/include/configpdo.php"); // must create $conn PDO object

error_reporting(E_ALL);
ini_set('display_errors', 0); // set 1 only in testing
?>
<!DOCTYPE html>
<html>
<head>

<title>Payment Details</title>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js"></script>

<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css">

<script>
$(document).ready(function() {
    $('#example').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5'
        ]
    });
});
</script>

</head>

<body>

<div align="center">
    <h1>MITSDE - Harbour Payment Details</h1>
</div>

<table id="example" class="display" style="width:100%">
    <thead>
        <tr>
            <th>Sr No</th>
            <th>Lead ID (ERP)</th>
            <th>Name</th>
            <th>Email ID</th>
            <th>Mobile No</th>
            <th>Amount</th>
            <th>Payment ID</th>
            <th>Learner Status</th>
            <th>Harbour Offerings</th>
            <th>Specialization</th>
            <th>Transaction Date</th>
            <th>API Response</th>
            <th>API Date</th>
        </tr>
    </thead>

    <tbody>

<?php
$i = 1;

try {

    $sql = "SELECT 
                othr_id,
                name,
                email,
                phone,
                CourseName,
                amount,
                PayU_ID,
                transationDate,
                leadID,
                harbouroffering,
                learnerstatus,
                response,
                API_DT
            FROM OtherFeesTransactionN
            WHERE FeeHeadID = :feehead
            ORDER BY othr_id DESC";

    $stmt = $conn->prepare($sql);

    $feehead = 19;
    $stmt->bindParam(':feehead', $feehead, PDO::PARAM_INT);

    $stmt->execute();

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

        // 🔥 NULL SAFE + XSS SAFE (PHP 5 + PHP 8 compatible)
        foreach ($row as $key => $value) {
            $row[$key] = htmlentities($value !== null ? $value : '', ENT_QUOTES, 'UTF-8');
        }
?>

        <tr>
            <td><?php echo $i; ?></td>
            <td><?php echo $row['leadID']; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['phone']; ?></td>
            <td><?php echo $row['amount']; ?></td>
            <td><?php echo $row['PayU_ID']; ?></td>
            <td><?php echo $row['learnerstatus']; ?></td>
            <td><?php echo $row['harbouroffering']; ?></td>
            <td><?php echo $row['CourseName']; ?></td>
            <td><?php echo $row['transationDate']; ?></td>
            <td><?php echo $row['response']; ?></td>
            <td><?php echo $row['API_DT']; ?></td>
        </tr>

<?php
        $i++;
    }

} catch (PDOException $e) {
    echo "<tr><td colspan='13'>Database Error</td></tr>";
}
?>

    </tbody>
</table>

</body>
</html>
