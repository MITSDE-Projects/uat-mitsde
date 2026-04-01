<?php
// include("admin/include/config.php");
include("admin/include/configpdo.php");

// Get PayU_ID safely
$payuid = isset($_GET['PayU_ID']) ? $_GET['PayU_ID'] : '';

if (empty($payuid)) {
    die("Invalid PayU_ID");
}

// ================= FETCH RECORD =================
$stmt = $conn->prepare("
    SELECT * 
    FROM New_erp_student_admission_transaction 
    WHERE PayU_ID LIKE ?
");

$stmt->execute([$payuid]);

if ($stmt->rowCount() > 0) {

    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    $leadID = $row['leadID'];

    $name = explode(' ', $row['name']);
    $firstname = isset($name[0]) ? $name[0] : '';
    $lastname  = isset($name[1]) ? $name[1] : '';

    $email = $row['email'];
    $phone = $row['phone'];

    $gender = $row['gender'];
    $salutationid = null;

    if ($gender == "M") {
        $salutationid = 1;
    } elseif ($gender == "F") {
        $salutationid = 2;
    }

    $CourseName = $row['CourseName'];
    $courseinfo = explode('_', $CourseName);
    $course_id = isset($courseinfo[0]) ? $courseinfo[0] : '';

    $SpecializationID = $row['SpecializationID'];
    $student_pass = $row['password'];
    $FeeHeadID = $row['FeeHeadID'];
    $PayU_ID = $row['PayU_ID'];
    $new_counselorName = $row['new_counselorName'];
    $counseller_email = $row['counseller_email'];

    // ================= CREATE JSON =================
    $postFields = json_encode([
        "LeadID" => $leadID,
        "CategoryId" => 1,
        "SalutaionId" => $salutationid,
        "InstituteId" => 1,
        "FirstName" => $firstname,
        "LastName" => $lastname,
        "Gender" => $gender,
        "MobileNumber" => $phone,
        "EmailAddress" => $email,
        "ParentProgramId" => $course_id,
        "SpecializationID" => $SpecializationID,
        "CallStatusId" => 1,
        "CounsellorName" => $new_counselorName,
        "CounsellorEmailId" => $counseller_email,
        "LeadType" => "EE",
        "LoginPassword" => $student_pass,
        "PaymentType" => $FeeHeadID
    ]);

    echo "<pre>";
    print_r($postFields);
    echo "</pre>";

    // ================= CALL API =================
    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://mitpro.mitsde.com/Webapi/api/CRM/UpdateLeadDetails',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => $postFields, // Use JSON encoded data
        CURLOPT_HTTPHEADER => array(
            'Authorization: Bearer ' . $accessToken,
            'Content-Type: application/json'
        ),
        // CURLOPT_CAINFO => '/home/mitsde/ssl/cacert.pem',
    ));

    $resp = curl_exec($curl);

    if (curl_errno($curl)) {
        die("cURL Error: " . curl_error($curl));
    }

    curl_close($curl);

    $response1 = json_decode($resp, true);
    $leadMessage = $response1['ResultMessage'];

    echo "</br>Lead response message ----> " . htmlspecialchars($leadMessage);

    // ================= UPDATE RESPONSE =================
    $update_stmt = $conn->prepare("
        UPDATE New_erp_student_admission_transaction
        SET response2 = ?
        WHERE PayU_ID = ?
    ");

    $update_stmt->execute([
        $leadMessage,
        $payuid
    ]);

} else {
    echo "</br>No record found.";
}
?>