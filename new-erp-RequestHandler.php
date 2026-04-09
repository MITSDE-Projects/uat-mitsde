<p align="center">MIT-SDE Redirect To HDFC Payment Getway Please Wait Five Minutes</p>

<?php

include('Crypto_new.php');
// include('admin/include/config.php');
include("admin/include/configpdo.php");

error_reporting(E_ALL);
ini_set('display_errors', 0);

date_default_timezone_set('Asia/Kolkata');
$CurrentDateTime = date('Y-m-d H:i:s');

// =====================================================
// 1. GOOGLE reCAPTCHA VERIFICATION (UNCHANGED)
// =====================================================

$secret_key = '6Lf1dR4gAAAAAJm1h4pKoaoKG-LtkR9qZEMR-YYb'; // Production key
// $secret_key = '6LeIxAcTAAAAAGG-vFI1TnRWxMZNFuojJ4WifJWe'; // Test key
//$recaptcha  = $_POST['g-recaptcha-response'] ?? '';
$recaptcha = isset($_POST['g-recaptcha-response'])
    ? $_POST['g-recaptcha-response']
    : '';

$ch = curl_init();
curl_setopt_array($ch, [
    CURLOPT_URL => "https://www.google.com/recaptcha/api/siteverify",
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => http_build_query([
        'secret' => $secret_key,
        'response' => $recaptcha,
        'remoteip' => $_SERVER['REMOTE_ADDR']
    ]),
    CURLOPT_RETURNTRANSFER => true
]);

$verify = json_decode(curl_exec($ch), true);
curl_close($ch);

if (empty($verify['success'])) {
    die("reCAPTCHA verification failed.");
}

$ip = $_SERVER['REMOTE_ADDR'];

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    die("Invalid request.");
}

if (empty($_POST['billing_email']) || empty($_POST['delivery_tel']) || empty($_POST['amount'])) {
    die("Required fields missing.");
}

$LeadID = trim($_POST['merchant_param3']);
$firstName = isset($_POST['firstName']) ? trim($_POST['firstName']) : '';
$lastName = isset($_POST['lastName']) ? trim($_POST['lastName']) : '';
$_POST['delivery_name'] = $firstName . ' ' . $lastName;
$student_name = $_POST['delivery_name'];
$Email = filter_var($_POST['billing_email'], FILTER_VALIDATE_EMAIL);
$MobileNo = preg_replace('/[^0-9]/', '', $_POST['delivery_tel']);
$gender = trim($_POST['gender']);
$Course = trim($_POST['merchant_param1']);  //merchant_param2

// echo "</br>c_name-->".$counsellername= $_POST['merchant_param2'];

$S_ID = isset($_POST['SpecializationID']) ? trim($_POST['SpecializationID']) : 0;
$dual_S_ID = trim($_POST['SecondSpecializationID']);
$counselleremailid = filter_var($_POST['merchant_param4'], FILTER_VALIDATE_EMAIL);
$stmt = $conn->prepare("SELECT full_name FROM tbl_counselor WHERE email = ?");
$stmt->execute([$counselleremailid]);
$row = $stmt->fetch(PDO::FETCH_ASSOC);
$new_counselorName = $row ? $row['full_name'] : '';
$FeesType = trim($_POST['merchant_param2']);  //feestypeID
$Password = trim($_POST['password']);
$totamt = trim($_POST['amount']);
$transactionId = trim($_POST['order_id']);

if (!$Email)
    die("Invalid email.");
if (strlen($MobileNo) < 10)
    die("Invalid mobile number.");

//die;
$url = "https://prodivrapi.extraaedge.com/api/WebHook/addLead";

// Prepare request data
$data = [

    "AuthToken" => "MITSDE-11-06-2020",
    "Source" => "mitsde",
    "FirstName" => $student_name,
    "MobileNumber" => $MobileNo,
    //"Email" => $Email,
    "LeadSource" => "newadmission",
    "LeadName" => "admission-mitsde",
    "LeadType" => "Online",
    "Textb7" => $ip
];
//print_r($data);
//die;
// Initialize cURL session
$curl = curl_init();

// Set cURL options
curl_setopt_array($curl, [
    CURLOPT_URL => $url,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => json_encode($data),
    CURLOPT_HTTPHEADER => [
        'Content-Type: application/json',
        'Accept: application/json'
    ]
]);

// Execute cURL request
$resp = curl_exec($curl);

// Check for cURL errors
if (curl_errno($curl)) {
    curl_close($curl);
    return [
        'status' => 'error',
        'message' => 'API connection failed: ' . curl_error($curl)
    ];
}

// Close cURL session
curl_close($curl);

// Parse API response
$response = json_decode($resp, true);
//print_r($response);
//echo "</br>leadid-->" . $LeadID;
$EELeadID = "E" . $response['userId'];
$old_counselorName = $response['counselorName'];
//die();

//-------------------uat api------------------

if ($LeadID != $EELeadID) {
    echo "</br></br><center><h1 style='color:red;'>No record found. Check your Admission ID ($LeadID)</h1></center>";
    echo "</br><center><a href='https://www.mitsde.com/new-admission-form-payment'>Go Back</a></center>";
    die;
}

$stmt = $conn->prepare("SELECT COUNT(*) FROM New_erp_student_admission_transaction WHERE t_process_id = ?");
$stmt->execute([$transactionId]);

if ($stmt->fetchColumn() > 0) {
    die("Duplicate Order ID");
}

$stmt = $conn->prepare("INSERT INTO temp_erp 
(T_LeadID, student_name, email_id, phone, gender, course, SpecializationID, dual_SpecializationID, password, fees_type, T_installmentNo, T_A_Amount, T_B_Amount, tranID, P_Start_date, Status, gateway_name, old_counselorName, new_counselorName, flag)
VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, 0, 0, ?, ?, ?, 'processing', 'HDFC', ?, ?, 0)");

$stmt->execute([
    $LeadID,
    $student_name,
    $Email,
    $MobileNo,
    $gender,
    $Course,
    $S_ID,
    $dual_S_ID,
    $Password,
    $FeesType,
    $totamt,
    $transactionId,
    $CurrentDateTime,
    $old_counselorName,
    $new_counselorName
]);


$merchant_data = '236596';
foreach ($_POST as $key => $value) {
    $merchant_data .= $key . '=' . urlencode($value) . '&';
}
$merchant_data = rtrim($merchant_data, '&');

$working_key = '277C1DEFA1388ACD68B11FE6A467A577';
$access_code = 'AVYD88GJ48CA97DYAC';

$encrypted_data = encrypt($merchant_data, $working_key);
?>

<form method="post" name="redirect"
    action="https://secure.ccavenue.com/transaction/transaction.do?command=initiateTransaction">
    <input type="hidden" name="encRequest" value="<?php echo $encrypted_data; ?>">
    <input type="hidden" name="access_code" value="<?php echo $access_code; ?>">
</form>

<script>document.redirect.submit();</script>

</body>
</html>