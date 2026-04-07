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

// =====================================================
// 2. REQUEST CHECK
// =====================================================
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
	die("Invalid request.");
}
$required = ['billing_email', 'delivery_tel', 'amount'];

foreach ($required as $field) {
	if (empty($_POST[$field])) {
		die("Missing required fields.");
	}
}
// =====================================================
// 3. SANITIZE INPUT (NO mysqli_real_escape_string needed)
// =====================================================
$LeadID = trim($_POST['merchant_param3']);
$student_name = trim($_POST['delivery_name']);
$Email = filter_var($_POST['billing_email'], FILTER_VALIDATE_EMAIL);
$MobileNo = preg_replace('/[^0-9]/', '', $_POST['delivery_tel']);
$Course = trim($_POST['merchant_param1']);
$S_ID = (int) $_POST['SpecializationID'];
$FeesheadID = trim($_POST['merchant_param2']);  //feestypeID
$FeesheadType = trim($_POST['merchant_param4']);  //feestypeID
$LearnerStatus = trim($_POST['merchant_param5']);  //feestypeID
$totamt = (int) $_POST['amount'];
$transactionId = trim($_POST['order_id']);

if (!$Email)
	die("Invalid email.");
if (strlen($MobileNo) < 10)
	die("Invalid mobile number.");


// =====================================================
// 5. DUPLICATE TRANSACTION CHECK (PDO)
// =====================================================
$stmt = $conn->prepare("SELECT 1 FROM OtherFeesTransaction WHERE t_process_id = ? LIMIT 1");
$stmt->execute([$transactionId]);

if ($stmt->fetch()) {
	die("Duplicate Order ID");
}

// =====================================================
// 6. INSERT INTO TEMP TABLE (PDO)
// =====================================================
$stmt = $conn->prepare("
INSERT INTO temp
(T_LeadID, student_name, email_id, phone, course, SpecializationID, fees_type,
T_installmentNo, T_A_Amount, T_B_Amount, tranID, P_Start_date, Status, gateway_name)
VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, 'processing', 'HDFC')
");

$installmentNo = 0;
$amountA = 0;
$amountB = $totamt;

$stmt->execute([
	$LeadID,
	$student_name,
	$Email,
	$MobileNo,
	$Course,
	$S_ID,
	$FeesheadType,
	$installmentNo,
	$amountA,
	$amountB,
	$transactionId,
	$CurrentDateTime
]);
// =====================================================
// 7 & 8 PAYMENT PART (UNCHANGED)
// =====================================================
unset($_POST['amount']);
$_POST['amount'] = $totamt;

$merchant_data = '2874274';
foreach ($_POST as $key => $value) {
	$merchant_data .= $key . '=' . urlencode($value) . '&';
}
$merchant_data = rtrim($merchant_data, '&');

$working_key = 'DC043516F6F3B974D64CE6970A15D053';
$access_code = 'AVZO14KI67BP49OZPB';

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