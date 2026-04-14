<?php ob_start();

require_once('../PHPMailer/class.phpmailer.php');
include("../PHPMailer/class.smtp.php"); // optional, gets called from within class.phpmailer.php if not already loaded
//error_reporting(0);


// Google reCAPTCHA validation

$recaptcha = $_POST['g-recaptcha-response'];

$secret_key = '6Lf1dR4gAAAAAJm1h4pKoaoKG-LtkR9qZEMR-YYb';

$url = 'https://www.google.com/recaptcha/api/siteverify?secret=' . $secret_key . '&response=' . $recaptcha;

$response = file_get_contents($url);

$response = json_decode($response);



// If reCAPTCHA fails, redirect back or show an error

if (!$response->success) {

    die('reCAPTCHA verification failed. Please try again.');

}



// optional, gets called from within class.phpmailer.php if not already loaded



$errors = [];

$IndividualType = trim($_POST['IndividualType'] ?? '');
$TypeOfFeedback = trim($_POST['TypeOfFeedback'] ?? '');
$studentname    = trim($_POST['studentname'] ?? '');
$email          = trim($_POST['Your_Email'] ?? '');
$Mobile_no      = trim($_POST['Mobile_no'] ?? '');
$feedback       = trim($_POST['feedback'] ?? '');

// Regex patterns (same as JS)
$ck_name     = "/^[A-Za-z0-9 ]{3,100}$/";
$ck_email    = "/^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/";
$ck_mob      = "/^[\s()+-]*([0-9][\s()+-]*){10}$/";
$ck_url      = "/\b((https?:\/\/|www\.)[^\s]+|[A-Za-z0-9-]+\.(com|net|org|info|biz|co|in|us|uk)[^\s]*)\b/i";
$ck_special  = "/[@#$%^*()?:{}|<>]/";

// Validation
if ($IndividualType === "") {
    $errors[] = "Please select Individual Type.";
}
if ($TypeOfFeedback === "") {
    $errors[] = "Please select Type of Feedback.";
}
if (!preg_match($ck_name, $studentname)) {
    $errors[] = "Please enter a valid Name.";
}
if (!preg_match($ck_email, $email)) {
    $errors[] = "Please enter a valid Email address.";
}
if (!preg_match($ck_mob, $Mobile_no)) {
    $errors[] = "Please enter a valid 10-digit Mobile number.";
}
if (strlen($feedback) > 500) {
    $errors[] = "Feedback must not exceed 500 characters.";
}
if (preg_match($ck_url, $feedback)) {
    $errors[] = "Feedback cannot contain website links.";
}
if (preg_match($ck_special, $feedback)) {
    $errors[] = "Feedback cannot contain special characters (@#$%^* etc).";
}

// Show errors or proceed
if (!empty($errors)) {
    echo "<ul style='color:red;'>";
    foreach ($errors as $e) {
        echo "<li>" . htmlspecialchars($e) . "</li>";
    }
    echo "</ul>";
	exit();
} else {
	
}

//die;



$owenrMailID = "swati.karande@mitsde.com";

$mail  = new PHPMailer();



//Turn on output buffering



?>



<div style="max-width: 600px; margin: auto; font-family: Arial, sans-serif; border: 1px solid #e0e0e0; border-radius: 10px; overflow: hidden; box-shadow: 0 2px 8px rgba(0,0,0,0.1);">

	<!-- Header -->
	<div style="background-color: #fe9e43; color: #ffffff; padding: 20px; text-align: center; font-size: 22px; font-weight: bold;">
		Student Feedback Submission
	</div>

	<!-- Feedback Table -->
	<table style="width: 100%; border-collapse: collapse;">

		<tr>
			<td style="padding: 15px; background-color: #f5f7fb; font-weight: bold; width: 40%;">Individual Type:</td>
			<td style="padding: 15px;"><?php echo htmlspecialchars($IndividualType); ?></td>
		</tr>

		<tr>
			<td style="padding: 15px; background-color: #f5f7fb; font-weight: bold;">Type of Feedback:</td>
			<td style="padding: 15px;"><?php echo htmlspecialchars($TypeOfFeedback); ?></td>
		</tr>

		<tr>
			<td style="padding: 15px; background-color: #f5f7fb; font-weight: bold;">Student Name:</td>
			<td style="padding: 15px;"><?php echo htmlspecialchars($studentname); ?></td>
		</tr>

		<tr>
			<td style="padding: 15px; background-color: #f5f7fb; font-weight: bold;">Email:</td>
			<td style="padding: 15px;"><?php echo htmlspecialchars($email); ?></td>
		</tr>

		<tr>
			<td style="padding: 15px; background-color: #f5f7fb; font-weight: bold;">Mobile Number:</td>
			<td style="padding: 15px;"><?php echo htmlspecialchars($Mobile_no); ?></td>
		</tr>

		<tr>
			<td style="padding: 15px; background-color: #f5f7fb; font-weight: bold;">Feedback:</td>
			<td style="padding: 15px;"><?php echo nl2br(htmlspecialchars($feedback)); ?></td>
		</tr>

	</table>

	<!-- Footer -->
	<div style="padding: 20px; font-size: 14px; color: #333; background-color: #fefffe; text-align: center;">
		Thank you for your feedback. We appreciate your input.
	</div>

</div>







<?php



$body  = ob_get_clean();
//$mail->Mailer = "mail";
$mail->IsSMTP(); // telling the class to use SMTP
//$mail->IsMail(); // telling the class to use SMTP
$mail->SMTPDebug  = 0;                     // enables SMTP debug information (for testing) // 1 = errors and messages
// $mail->SMTPSecure = "ssl";                 // sets the prefix to the servier                                          // 2 = messages only
$mail->SMTPAuth   = true;                  // enable SMTP authentication
$mail->SMTPSecure = "tls";                 // sets the prefix to the servier
$mail->Host       = "email-smtp.us-east-1.amazonaws.com";      // sets GMAIL as the SMTP server
$mail->Port       = 2587;                   // set the SMTP port for the GMAIL
$mail->Username   = "AKIA5OQ6466FQH7J437A";  // GMAIL username
                        $mail->Password   = "BNuSqYkuMXY6D9OqA7Gp4ABHK3LSIPUBoII+233SV+kC";



$mail->SetFrom('feedback@mitsde.com', 'Student feedback form website');



$mail->AddReplyTo('feedback@mitsde.com', 'Student feedback form website');



$mail->Subject    = "Student feedback form website";



$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test



$mail->MsgHTML($body);

$mail->SetLanguage("en", 'includes/phpMailer/language/');

$address = $owenrMailID;

$mail->AddAddress($address);

$ccList = [
	'sanjay.gaikwad@mitsde.com',
	'raj.marathe@mitsde.com'
];

foreach ($ccList as $ccEmail) {
	$mail->AddCC($ccEmail);
}





//$mail->AddAttachment("sept12120568.pdf");      // attachment

//$mail->AddAttachment("images/phpmailer_mini.gif"); // attachment



$mail->Send();

//print_r($mail);

header('Location: ../thankyou.php');



?>