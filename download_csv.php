<?php
include("admin/include/configpdo.php");

// Headers
header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename=learners.csv');

// 🔥 Add UTF-8 BOM (VERY IMPORTANT for Excel)
echo "\xEF\xBB\xBF";

$output = fopen('php://output', 'w');

// Column headers
fputcsv(
    $output,
    array(
        'ERP ID',
        'Name',
        'Transaction ID',
        'Payment Date',
        'Email',
        'Phone',
        'Amount',
        'Fee Type',
        'Course Name'
    ),
    ',',
    '"',
    '\\'
);

// Query
$sql = "SELECT 
            leadID,
            name,
            PayU_ID,
            transationDate,
            email,
            phone,
            amount,
            FeesType,
            CourseName
        FROM OtherFeesTransactionN";

$stmt = $conn->prepare($sql);
$stmt->execute();

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

    fputcsv(
        $output,
        array(
            $row['leadID'],
            $row['name'],
            $row['PayU_ID'],
            $row['transationDate'],
            $row['email'],
            $row['phone'],
            $row['amount'],
            $row['FeesType'],
            $row['CourseName']
        ),
        ',',
        '"',
        '\\'
    );
}

fclose($output);
exit;