<?php ob_start();
require_once('phpMailer/class.phpmailer.php');
require_once('phpMailer/class.smtp.php');

// optional, gets called from within class.phpmailer.php if not already loaded

$name=$_POST['form_name'];
$email=$_POST['form_email'];
$mobile=$_POST['form_phone'];
$subject=$_POST['form_subject'];
$message=$_POST['form_message'];

$page=$_POST['form_subject'];

if($page=="Admissions")
{
$owenrMailID="admissions@mitsde.com";  //admissions@mitsde.com
}
else
{
$owenrMailID="campussupport@mitsde.com";  // campussupport@mitsde.com
}


$mail  = new PHPMailer();

 //Turn on output buffering

?>

<table border='1' bgcolor='#999999'>
	    <tr>
			<th colspan='2'>Form Contact Page</th>
			</tr>
				 <tr>
					 <td style='font-weight:bold'>First Name :</td>
						<td><?php echo $name; ?></td>
						</tr>
						
						 <tr>
							  <td style='font-weight:bold'>Email : </td>
							  <td><?php echo $email; ?></td>
						</tr>	 
						<tr>
						   <td style='font-weight:bold'>Contact No : </td>
						   <td><?php echo $mobile; ?></td>
						</tr>
						
						<tr>
					   <td style='font-weight:bold'>Subject :</td>
						<td><?php echo $subject; ?></td>
						</tr>
							
						<tr>
							  <td style='font-weight:bold'>Message : </td>
							  <td><?php echo $message ?></td>
							</tr>
						 <table>



<?php

$body  = ob_get_clean();


$mail->IsSMTP(); // telling the class to use SMTP

$mail->SMTPDebug  = 0;                     // enables SMTP debug information (for testing)
                                           // 1 = errors and messages
// $mail->SMTPSecure = "ssl";                 // sets the prefix to the servier                                          // 2 = messages only
$mail->SMTPAuth   = true;                  // enable SMTP authentication
$mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
$mail->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
$mail->Port       = 465;                   // set the SMTP port for the GMAIL 
$mail->Username   = "feedback@mitsde.com";  // GMAIL username
$mail->Password   = "feedback@123";            // GMAIL password
//$mail->g_smtp_host = 'smtp.gmail.com:465';
//$mail->g_smtp_connection_mode = 'ssl';

$mail->SetFrom('feedback@mitsde.com', 'MITSDE');

$mail->AddReplyTo('feedback@mitsde.com', 'MITSDE');

$mail->Subject    = "Student Information on Website Contact Page";

$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test

$mail->MsgHTML($body);
$mail->SetLanguage("en", 'includes/phpMailer/language/');
$address = $owenrMailID;
$mail->AddAddress($address);
//$mail->AddCC('sanjay.gaikwad@mitsde.com');

//$mail->AddAttachment("sept12120568.pdf");      // attachment
//$mail->AddAttachment("images/phpmailer_mini.gif"); // attachment

$mail->Send();

header('Location: ../thankyou.php');

?>