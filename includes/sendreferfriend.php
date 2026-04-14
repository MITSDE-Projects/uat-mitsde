<?php

ob_start();



require_once('../PHPMailer/class.phpmailer.php');

include("../PHPMailer/class.smtp.php"); // optional, gets called from within class.phpmailer.php if not already loaded



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



// Retrieving form data

$Registration_no = $_POST['Registration_no'];

$name = $_POST['form_name'];

$Your_Email = $_POST['Your_Email'];

$Mobile = $_POST['Mobile_no'];

$Relation = $_POST['Relation'];

$form_name_candidate = $_POST['form_name_candidate'];

$Program_Interested = $_POST['Program_Interested'];

$student_email = $_POST['student_email'];

$student_mob = $_POST['student_mob'];



$owenrMailID = "sanjay.gaikwad@mitsde.com";



$mail  = new PHPMailer();

$mail->IsSMTP();

$mail->SMTPDebug  = 0;

$mail->SMTPAuth   = true;

$mail->SMTPSecure = "tls";

$mail->Host       = "email-smtp.us-east-1.amazonaws.com";

$mail->Port       = 2587;

$mail->Username   = "AKIA5OQ6466FQH7J437A";  // GMAIL username

$mail->Password   = "BNuSqYkuMXY6D9OqA7Gp4ABHK3LSIPUBoII+233SV+kC";



$mail->SetFrom('referral@mitsde.com', 'MITSDE');

$mail->AddReplyTo('referral@mitsde.com', 'MITSDE');

$mail->Subject    = "Referral";



ob_start();

?>

<table border='1'>

    <tr><th colspan='2'>Referral Policy</th></tr>

    <tr><td style='font-weight:bold'>Registration No :</td><td><?php echo $Registration_no; ?></td></tr>

    <tr><td style='font-weight:bold'>Existing Student Name :</td><td><?php echo $name; ?></td></tr>

    <tr><td style='font-weight:bold'>Email :</td><td><?php echo $Your_Email; ?></td></tr>

    <tr><td style='font-weight:bold'>Mobile No :</td><td><?php echo $Mobile; ?></td></tr>

    <tr><td style='font-weight:bold'>Relation :</td><td><?php echo $Relation; ?></td></tr>

    <tr><td style='font-weight:bold'>Name of Student :</td><td><?php echo $form_name_candidate; ?></td></tr>

    <tr><td style='font-weight:bold'>Program Interested :</td><td><?php echo $Program_Interested; ?></td></tr>

    <tr><td style='font-weight:bold'>Email :</td><td><?php echo $student_email; ?></td></tr>

    <tr><td style='font-weight:bold'>Mobile No :</td><td><?php echo $student_mob; ?></td></tr>

</table>

<?php

$body = ob_get_clean();



$mail->MsgHTML($body);

$mail->SetLanguage("en", 'includes/phpMailer/language/');

$mail->AddAddress($owenrMailID);



$ccEmails = ['sanjay.gaikwad@mitsde.com'];

foreach ($ccEmails as $ccEmail) {

    $mail->AddCC($ccEmail);

}



if ($mail->Send()) {

    header('Location: ../thankyou.php');

} else {

    echo "Email sending failed.";

}

?>

