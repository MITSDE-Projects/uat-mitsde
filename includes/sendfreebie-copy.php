<?php
ob_start();

require_once('../PHPMailer/class.phpmailer.php');
include("../PHPMailer/class.smtp.php");

$recaptcha = $_POST['g-recaptcha-response'];
$secret_key = '6Lf1dR4gAAAAAJm1h4pKoaoKG-LtkR9qZEMR-YYb';

$url = 'https://www.google.com/recaptcha/api/siteverify?secret=' . $secret_key . '&response=' . $recaptcha;
$response = file_get_contents($url);
$response = json_decode($response);

if (!$response->success) {
	die('reCAPTCHA verification failed. Please try again.');
}

$studentname   = $_POST['studentname'];
$last_institute = $_POST['last_institute'];
$email         = $_POST['Your_Email'];
$Mobile_no     = $_POST['Mobile_no'];
$recommendation = isset($_POST['recommendation']) ? $_POST['recommendation'] : 'Not Selected';


$owenrMailID = "mocs@mitsde.com";

$mail  = new PHPMailer();
?>

<div style="max-width: 600px; margin: auto; font-family: Arial, sans-serif; border: 1px solid #e0e0e0; border-radius: 10px; overflow: hidden; box-shadow: 0 2px 8px rgba(0,0,0,0.1);">
	<div style="background-color: #fe9e43; color: #ffffff; padding: 20px; text-align: center; font-size: 22px; font-weight: bold;">
        MOCS : Freebie Download
	</div>

	<table style="width: 100%; border-collapse: collapse;">
		<tr>
			<td style="padding: 15px; background-color: #f5f7fb; font-weight: bold;">Your Name:</td>
			<td style="padding: 15px;"><?php echo htmlspecialchars($studentname); ?></td>
		</tr>

		<tr>
			<td style="padding: 15px; background-color: #f5f7fb; font-weight: bold;">Last Attended Institute:</td>
			<td style="padding: 15px;"><?php echo htmlspecialchars($last_institute); ?></td>
		</tr>

		<tr>
			<td style="padding: 15px; background-color: #f5f7fb; font-weight: bold;">Email ID:</td>
			<td style="padding: 15px;"><?php echo htmlspecialchars($email); ?></td>
		</tr>

		<tr>
			<td style="padding: 15px; background-color: #f5f7fb; font-weight: bold;">Contact Number:</td>
			<td style="padding: 15px;"><?php echo htmlspecialchars($Mobile_no); ?></td>
		</tr>
		<!-- ✅ Nayi row for Recommendation -->
		<tr>
			<td style="padding: 15px; background-color: #f5f7fb; font-weight: bold;">Recommendation (1-10):</td>
			<td style="padding: 15px;"><?php echo htmlspecialchars($recommendation); ?></td>
		</tr>
	</table>

	<div style="padding: 20px; font-size: 14px; color: #333; background-color: #fefffe; text-align: center;">
		Thank you. Details received successfully.
	</div>
</div>

<?php
$body  = ob_get_clean();

$mail->IsSMTP();
$mail->SMTPDebug  = 0;
$mail->SMTPAuth   = true;
$mail->SMTPSecure = "tls";
$mail->Host       = "email-smtp.us-east-1.amazonaws.com";
$mail->Port       = 2587;
$mail->Username   = "AKIA5OQ6466FZWEYNNVJ";
$mail->Password   = "BB8uQenn6fCEjW791mFxeUgQ39xwI/9PEBDPz7uasG58";

$mail->SetFrom('mocs@mitsde.com', 'MOCS : Freebie Download');
$mail->AddReplyTo('mocs@mitsde.com', 'MOCS : Freebie Download');
$mail->Subject    = "MOCS : Freebie Download";
$mail->AltBody    = "Please use an HTML compatible email viewer!";
$mail->MsgHTML($body);
$mail->SetLanguage("en", 'includes/phpMailer/language/');
$mail->AddAddress($owenrMailID);

$ccList = [
	'sanjay.gaikwad@mitsde.com',
	'mocs@mitsde.com',
	'kushal.kamble@mitsde.com',
	'raj.marathe@mitsde.com'
];
foreach ($ccList as $ccEmail) {
	$mail->AddBCC($ccEmail);  // 👈 AddCC ko AddBCC kar do
}

$mail->Send();

// ✅ Redirect to new page
// header("Location: https://mitsde.com/top_10_skills_employers_want_in_2025");
exit();
?>