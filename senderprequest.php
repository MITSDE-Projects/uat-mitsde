<?php

include('Crypto_new.php');
// include('admin/include/config.php');
include("admin/include/configpdo.php");

/* =====================================================
   GOOGLE reCAPTCHA VERIFICATION
===================================================== */

$secret_key = '6Lf1dR4gAAAAAJm1h4pKoaoKG-LtkR9qZEMR-YYb'; // Production key
// $secret_key = '6LeIxAcTAAAAAGG-vFI1TnRWxMZNFuojJ4WifJWe'; // Test key
//$recaptcha  = $_POST['g-recaptcha-response'] ?? '';

$recaptcha = isset($_POST['g-recaptcha-response']) 
    ? $_POST['g-recaptcha-response'] 
    : '';

$ch = curl_init();
curl_setopt_array($ch, array(
    CURLOPT_URL => "https://www.google.com/recaptcha/api/siteverify",
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => http_build_query(array(
        'secret'   => $secret_key,
        'response' => $recaptcha,
        'remoteip' => $_SERVER['REMOTE_ADDR']
    )),
    CURLOPT_RETURNTRANSFER => true
));

$verify = json_decode(curl_exec($ch), true);
curl_close($ch);

if (empty($verify['success'])) {
    die('reCAPTCHA verification failed. Please try again.');
}

/* =====================================================
   MAIN POST LOGIC
===================================================== */

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (!empty($_POST['billing_email']) && !empty($_POST['delivery_tel'])) {

        $LeadID = trim($_POST['merchant_param3']);
        $firstName = isset($_POST['firstName']) ? trim($_POST['firstName']) : '';
        $lastName = isset($_POST['lastName']) ? trim($_POST['lastName']) : '';

        $_POST['delivery_name'] = $firstName . ' ' . $lastName;
        $student_name = $_POST['delivery_name'];

        $Email = filter_var($_POST['billing_email'], FILTER_VALIDATE_EMAIL);
        $MobileNo = preg_replace('/[^0-9]/', '', $_POST['delivery_tel']);
        $gender = trim($_POST['gender']);

        if ($gender == "M") {
            $salutationid = 1;
        } elseif ($gender == "F") {
            $salutationid = 2;
        } else {
            $salutationid = 0;
        }

        $Course = trim($_POST['merchant_param1']);
        $courseinfo = explode('_', $Course);
        $course_id = $courseinfo[0];
        echo "</br>course_id-->" . $course_id;
        $S_ID = trim($_POST['SpecializationID']);
        echo "</br>S_ID-->" . $S_ID;
        $dual_S_ID = trim($_POST['SecondSpecializationID']);
        $counselleremailid = filter_var($_POST['merchant_param4'], FILTER_VALIDATE_EMAIL);

        /* ============================
           PDO QUERY (Converted)
        ============================ */

        $stmt = $conn->prepare("SELECT full_name FROM tbl_counselor WHERE email = ?");
        $stmt->execute(array($counselleremailid));
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        $new_counselorName = $row ? $row['full_name'] : '';

        $Password = isset($_POST['password']) ? trim($_POST['password']) : '';

        /* ============================
           API REQUEST BODY
        ============================ */

        $postFields = json_encode(array(
            "LeadID"            => $LeadID,
            "CategoryId"        => 1,
            "SalutaionId"       => $salutationid,
            "InstituteId"       => 1,
            "FirstName"         => $firstName,
            "LastName"          => $lastName,
            "Gender"            => $gender,
            "MobileNumber"      => $MobileNo,
            "EmailAddress"      => $Email,
            "ParentProgramId"   => $course_id,
            "SpecializationID"  => $S_ID,
            "CallStatusId"      => 1,
            "CounsellorName"    => $new_counselorName,
            "CounsellorEmailId" => $counselleremailid,
            "LeadType"          => "EE",
            "LoginPassword"     => "mitsde@123"
        ));

        /* ============================
           CURL API CALL
        ============================ */

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://mitpro.mite.com/Webapi/api/CRM/UpdateLeadDetails',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => $postFields,
            CURLOPT_HTTPHEADER => array(
                'Authorization: Bearer ' . $accessToken,
                'Content-Type: application/json'
            ),
            // CURLOPT_CAINFO => '/home/mitsde/ssl/cacert.pem'
        ));

        $resp = curl_exec($curl);
        curl_close($curl);

        $response1 = json_decode($resp, true);

        echo "</br>result_msg1----->" . $response1['ResultMessage'];
        echo "</br><center><a href='https://www.mite.com/senderp'>Go Back</a></center>";

    } else {

        echo "</br></br><center>Some compulsory fields are missing</center>";
        echo "</br><center><a href='https://www.mite.com/senderp'>Go Back</a></center>";
        die;
    }

} else {

    $message = 'An <strong>unexpected error</strong> occured. Please Try Again later.';

    echo "</br><a href='https://www.mitsde.com/senderp'>Go Back</a>";

    die;
}

?>