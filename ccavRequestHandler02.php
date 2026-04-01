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

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
	die("Invalid request method.");
}

$LeadID = trim($_POST['merchant_param3']);
$student_name = trim($_POST['delivery_name']);
$Email = trim($_POST['billing_email']);
$MobileNo = trim($_POST['delivery_tel']);
$Course = trim($_POST['merchant_param1']);
$FeesType = $_POST['merchant_param2'];
$totamt = trim($_POST['amount']);
$transactionId = trim($_POST['order_id']);
$S_ID = 0;

if ($Email == '' || $MobileNo == '' || $totamt == '') {
	die("Required fields missing.");
}

if (!filter_var($Email, FILTER_VALIDATE_EMAIL)) {
	die("Invalid email.");
}

$stmt = $conn->prepare("SELECT 1 FROM old_student_transaction WHERE t_process_id = ?");
$stmt->execute(array($transactionId));

if ($stmt->fetch()) {
	die("ERROR: Duplicate Order ID");
}

$stmt = $conn->prepare("
INSERT INTO temp 
(T_LeadID, student_name, email_id, phone, course, SpecializationID, 
fees_type, T_installmentNo, T_A_Amount, T_B_Amount, tranID, P_Start_date, Status, gateway_name)
VALUES (?, ?, ?, ?, ?, ?, ?, 0, 0, ?, ?, ?, 'processing', 'HDFC')
");

$stmt->execute(array(
	$LeadID,
	$student_name,
	$Email,
	$MobileNo,
	$Course,
	$S_ID,
	$FeesType,
	$totamt,
	$transactionId,
	$CurrentDateTime
));

# =====================================================
# 5. CCAVENUE ENCRYPT
# =====================================================

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

	<input type="hidden" name="encRequest"
		value="<?php echo htmlspecialchars($encrypted_data, ENT_QUOTES, 'UTF-8'); ?>">
	<input type="hidden" name="access_code" value="<?php echo htmlspecialchars($access_code, ENT_QUOTES, 'UTF-8'); ?>">

</form>

<script>document.redirect.submit();</script>

</body>

</html>