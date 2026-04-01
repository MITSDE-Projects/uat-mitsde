<?php
include("admin/include/configpdo.php");

// ================= GET PayU_ID SAFELY =================
$payuid = isset($_GET['PayU_ID']) ? $_GET['PayU_ID'] : '';

if (empty($payuid)) {
    die("Invalid PayU_ID");
}

// ================= FETCH RECORD =================
$stmt = $conn->prepare(
    "SELECT * FROM New_erp_student_admission_transaction WHERE PayU_ID = ?"
);

$stmt->execute(array($payuid));
$row = $stmt->fetch(PDO::FETCH_ASSOC);

if ($row) {

    $leadID = $row['leadID'];
    $amount = $row['amount'];
    $PayU_ID = $row['PayU_ID'];
    $transationDate = $row['transationDate'];

    // ================= CREATE JSON =================
    $postfeeData = json_encode(array(

        "CRMLeadId" => $leadID,
        "FeeType" => "PRF",
        "TransactionNo" => $PayU_ID,
        "ReceiptAmount" => $amount,
        "ReceiptDate" => $transationDate,
        "FeeHeadId" => "",
        "UserId" => 1,
        "CurrencyID" => 1

    ));

    echo "<pre>";
    print_r($postfeeData);
    echo "</pre>";

    // ================= CALL API =================
    $curl = curl_init();

    curl_setopt_array($curl, [

        CURLOPT_URL => 'https://mitpro.mitsde.com/Webapi/api/CRM/PaymenttAPI',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => $postfeeData,
        CURLOPT_HTTPHEADER => [
            'Authorization: Bearer ' . $accessToken,
            'Content-Type: application/json'
        ],
        // CURLOPT_CAINFO => '/home/mitsde/ssl/cacert.pem',
    ]);
    
    $response = curl_exec($curl);

    if (curl_errno($curl)) {
        die("cURL Error: " . curl_error($curl));
    }

    curl_close($curl);

    // ================= HANDLE RESPONSE =================
    $responseData = json_decode($response, true);

    if ($responseData) {

        $apiResult = isset($responseData['Result']) ? $responseData['Result'] : false;

        $paymentMessage = isset($responseData['ResultMessage'])
            ? $responseData['ResultMessage']
            : "Receipt saved successfully.";

        echo "</br>Payment response message ----> " . htmlspecialchars($paymentMessage);

        if ($apiResult === true) {

            $update_stmt = $conn->prepare(
                "UPDATE New_erp_student_admission_transaction 
                 SET response = ?, S_Flag = 1, F_Flag = 1 
                 WHERE PayU_ID = ?"
            );

            $update_stmt->execute(array($paymentMessage, $payuid));

        } else {
            echo "</br>No record updated in database.";
        }

    } else {
        echo "</br>Error: Invalid API response.";
    }

} else {
    echo "</br>No record found.";
}
?>
