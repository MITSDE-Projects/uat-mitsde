<p align="center">MIT-SDE Redirect To HDFC Payment Getway Please Wait Five Minutes</p>

<?php

include('Crypto_new.php');
// include("admin/include/config.php");
include("admin/include/configpdo.php");
error_reporting(E_ALL);
ini_set('display_errors', 0);

date_default_timezone_set('Asia/Kolkata');
$CurrentDateTime = date('Y-m-d H:i:s');

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

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    die("Invalid request.");
}
$required = ['billing_email', 'delivery_tel', 'amount'];

foreach ($required as $field) {
    if (empty($_POST[$field])) {
        die("Missing required fields.");
    }
}

$firstName = isset($_POST['firstName']) ? trim($_POST['firstName']) : '';
$lastName = isset($_POST['lastName']) ? trim($_POST['lastName']) : '';
$_POST['delivery_name'] = $firstName . ' ' . $lastName;
$student_name = $_POST['delivery_name'];
$Email = filter_var($_POST['billing_email'], FILTER_VALIDATE_EMAIL);
$MobileNo = preg_replace('/[^0-9]/', '', $_POST['delivery_tel']);
$Pagename = trim($_POST['merchant_param3']);
$expertise = trim($_POST['expertise']);
$regid = trim($_POST['regid']);
$experience = trim($_POST['experience']);
$totamt = (int) $_POST['amount'];
$transactionId = trim($_POST['order_id']);

if (!$Email)
	die("Invalid email.");
if (strlen($MobileNo) < 10)
	die("Invalid mobile number.");

$stmt = $conn->prepare("SELECT 1 FROM ai_transaction WHERE t_process_id = ? LIMIT 1");
$stmt->execute([$transactionId]);

if ($stmt->fetch()) {
	die("Duplicate Order ID");
}

$stmt = $conn->prepare("INSERT INTO temp_ai_transaction 
(name, email, phone, institution, pagename, reg_id, experience, amount, t_process_id, DT, type)
VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, 'workshop')");

$stmt->execute([
    $student_name,
    $Email,
    $MobileNo,
    $expertise,
    $Pagename,
    $regid,
    $experience,
    $totamt,
    $transactionId,
    $CurrentDateTime
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