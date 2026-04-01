<?php
require_once('./PHPMailertest/mailtest2/smtp/class.phpmailer.php');
include("./PHPMailertest/mailtest2/smtp/class.smtp.php");

$date = Date('Y-m-d');

$conn = mysql_connect("localhost", "mitsde_studentda", "Custom@123");
if (!$conn) {
    echo "Mysql Connection Error" . die(mysql_error);
}

$db = mysql_select_db('mitsde_studentdata', $conn);
if (!$db) {
    echo "Database Not Selected" . die(mysql_error);
}

$date = Date('Y-m-d');
$t = time();

$regid = "MITSDE2021";
$studentName = "Sanjay Gaikwad";
$emailID = "sanjay.gaikwad@mitsde.com";

$mail = new PHPMailer();

ob_start(); // Turn on output buffering
?>
<p>Dear <?php echo $studentName; ?></p>
<p>Welcome to MIT School of Distance Education (MITSDE)</p>
<p>Following is the username and password for your Canvas and Elibrary account.</p>
<p>User Name: <?php echo $emailID; ?></p>
<p>Password: <?php echo $regid; ?></p>
<p>You can login to Canvas at <a href='https://mitsde.instructure.com/'>Click Here</a></p>
<p>and E-library at <a href='https://elibrary.mitsde.com/'>Click Here</a></p>
<hr>
<p><b>MITSDE TRAINING & PLACEMENT DEPARTMENT</b></p>
<p>Are you looking for Placement Assistance?</p>
<p><a href="https://forms.gle/fNuUbAAfhaaGhWPr5"><l>Yes</l></a> || <a href="https://forms.gle/fNuUbAAfhaaGhWPr5"><l>No</l></a></p>
<p><img src='https://mitsde.com/Emailers/placementmailer.png' alt='placementmailer' border='0' width='50%' height='50%'/></p>
<p>We can give you opportunities but you have to turn these opportunities into Appointment Letters.</p>
<p>We wish you good luck in all your future endeavors!!</p>
<p>If you have any questions, raise a support ticket by clicking the <b>Help button</b> in the E-Library system.</p>
<b>Please do not reply to this email, as this is a system-generated email.</b>
<br>
Regards,<br>
<b>Team MIT-School of Distance Education</b>
<?php
$body = ob_get_clean();

$mail->IsSMTP();
$mail->SMTPDebug = 2;
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'tls';
$mail->Host = "email-smtp.us-east-1.amazonaws.com";
$mail->Port = 2587;
$mail->Username = "AKIA5OQ6466FZWEYNNVJ";
$mail->Password = "BB8uQenn6fCEjW791mFxeUgQ39xwI/9PEBDPz7uasG58";
$mail->IsHTML(true);
$mail->CharSet = 'UTF-8';

$mail->SetFrom('admissions@mitsde.com', 'TEST MIT School of Distance Education');
$mail->AddReplyTo('no-replay@mitsde.com', 'No-Reply');
$mail->Subject = "TEST Mail";
$mail->AltBody = "To view the message, please use an HTML compatible email viewer!";

$mail->MsgHTML($body);

$address = $emailID;
$mail->AddAddress($address);
$mail->AddBCC('sanjay.gaikwad@mitsde.com');

if (!$mail->Send()) {
    echo "Message could not be sent. Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message has been sent";
}

?>
