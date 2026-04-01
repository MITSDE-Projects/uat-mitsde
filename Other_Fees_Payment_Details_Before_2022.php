<?php
$conn = mysql_connect("localhost", "mitsde_onlinepay", "jNq%,6!)0RmK");
if (!$conn) {
    echo "Mysql Connection Error" . die(mysql_error);
} else {
    // echo "connected";
}

$db = mysql_select_db('mitsde_onlinepayment', $conn);
if (!$db) {
    echo "Database Not Selected" . die(mysql_error);
} {
    // echo "connected";
}
?>
<!DOCTYPE html>
<html>

<head>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js"></script>

    <script>
        $(document).ready(function () {
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
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css">
    <link type="text/css" rel="shortcut icon" href="media/favicon.ico" type="image/x-icon">
    <link type="text/css" rel="icon" href="media/favicon.ico" type="image/x-icon">
</head>
<title>Other Fees Payment Details Before 2022</title>

<body>
    <div align="center">
        <h1>Other Fees Payment Details Before 2022</h1>
    </div>
    <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Sr No</th>
                <th>Registration ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Course</th>
                <th>Specialization</th>
                <th>Fee Type</th>
                <th>Pay ID</th>
                <th>Amount</th>
                <th>Transaction Date</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $i = 1;
            $serch = mysql_query("SELECT * FROM `old_student_transaction` ORDER BY `old_student_transaction`.`othr_id` ASC");
            while ($row = mysql_fetch_array($serch)) {
                ?>
                <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $row['leadID']; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['phone']; ?></td>
                    <td><?php echo $row['CourseName']; ?></td>
                    <td><?php echo $row['SpecializationID']; ?></td>
                    <td><?php echo $row['FeesType']; ?></td>
                    <td><?php echo $row['PayU_ID']; ?></td>
                    <td><?php echo $row['amount']; ?></td>
                    <td><?php echo $row['transationDate']; ?></td>
                </tr>
                <?php
                $i++;
            }

            ?>
        </tbody>
        <tfoot>
            <tr>
            <th>Sr No</th>
                <th>Registration ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Course</th>
                <th>Specialization</th>
                <th>Fee Type</th>
                <th>Pay ID</th>
                <th>Amount</th>
                <th>Transaction Date</th>
            </tr>
        </tfoot>
    </table>

    <body>

</html>