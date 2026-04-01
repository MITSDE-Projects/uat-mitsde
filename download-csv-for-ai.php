<?php
include("admin/include/configpdo.php");

header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename=payment-tracker-workshops-ai.csv');

/* ==============================
   🔥 UTF-8 BOM (Fix Excel Black ? Issue)
============================== */
echo "\xEF\xBB\xBF";

$output = fopen('php://output', 'w');

/* ==============================
   Column Headers
============================== */
fputcsv(
    $output,
    array(
        'ID',
        'Payment Date',
        'Name',
        'Email',
        'Phone',
        'Institution/Domain of Expertise',
        'Role',
        'Pagename',
        'Reg ID',
        'Experience',
        'Amount',
        'PayU_ID',
        't_process_id',
        'Type'
    ),
    ',',
    '"',
    '\\'
);

/* ==============================
   Query
============================== */
$sql = "SELECT 
            othr_id,
            DT,
            name,
            email,
            phone,
            institution,
            Role,
            pagename,
            reg_id,
            experience,
            amount,
            PayU_ID,
            t_process_id,
            type
        FROM ai_transaction";

$stmt = $conn->prepare($sql);
$stmt->execute();

/* ==============================
   Output Data Row by Row
============================== */
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

    fputcsv(
        $output,
        array(
            (string)$row['othr_id'],
            (string)$row['DT'],
            (string)$row['name'],
            (string)$row['email'],
            (string)$row['phone'],
            (string)$row['institution'],
            (string)$row['Role'],
            (string)$row['pagename'],
            (string)$row['reg_id'],
            (string)$row['experience'],
            (string)$row['amount'],
            (string)$row['PayU_ID'],
            (string)$row['t_process_id'],
            (string)$row['type']
        ),
        ',',
        '"',
        '\\'
    );
}

fclose($output);
exit;
?>