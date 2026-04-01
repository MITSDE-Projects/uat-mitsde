<?php ob_start();
//require_once('phpmailer/class.phpmailer.php');
//require_once('phpmailer/class.smtp.php');
 require __DIR__.'/phpMailer/class.phpmailer.php';
 require __DIR__.'/phpMailer/class.smtp.php';
// optional, gets called from within class.phpmailer.php if not already loaded

$name=$_POST['first_name'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$Course=$_POST['Course'];
$YearofPassing=$_POST['Year-of-Passing'];
$CurrentOrganization=$_POST['Current_Organization'];
$Designation=$_POST['Designation'];
$Story=$_POST['Story'];

//die;

$mail  = new PHPMailer();

 //Turn on output buffering

?>

<table border='1' bgcolor="#CCCCCC">
	    <tr>
			<th colspan='2'>Student Sucess Story</th>
			</tr>
				 <tr>
					 <td style='font-weight:bold'>First Name :</td>
						<td><?php echo $name; ?></td>
						</tr>
						
							 
						<tr>
						   <td style='font-weight:bold'>Contact No : </td>
						   <td><?php echo $mobile; ?></td>
						</tr>
						 <tr>
							  <td style='font-weight:bold'>Email : </td>
							  <td><?php echo $email; ?></td>
						</tr>
						
						<tr>
					    <td style='font-weight:bold'>Course :</td>
						<td><?php echo $Course; ?></td>
						</tr>
							
						<tr>
						
						<tr>
					    <td style='font-weight:bold'>Year of Passing :</td>
						<td><?php echo $YearofPassing; ?></td>
						</tr>
						
						<tr>
					    <td style='font-weight:bold'>Current Organisation :</td>
						<td><?php echo $CurrentOrganization; ?></td>
						</tr>
						
						<tr>
					    <td style='font-weight:bold'>Designation :</td>
						<td><?php echo $Designation; ?></td>
						</tr>
						
						<tr>
					    <td style='font-weight:bold'>Story :</td>
						<td><?php echo $Story; ?></td>
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

$mail->SetFrom('feedback@mitsde.com', 'MITSDE - Student Success Story');

$mail->AddReplyTo('feedback@mitsde.com', 'MITSDE - Student Success Story');

$mail->Subject    = "Student Success Story";

$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test

$mail->MsgHTML($body);
$mail->SetLanguage("en", 'includes/phpMailer/language/');
//$address = "campussupport@mitsde.com";
$address = "sanjay.gaikwad@mitsde.com";
$mail->AddAddress($address);
//$mail->AddCC('sanjay.gaikwad@mitsde.com');

//$mail->AddAttachment("sept12120568.pdf");      // attachment
//$mail->AddAttachment("images/phpmailer_mini.gif"); // attachment

$mail->Send();

header('Location: ../thankyou.php');

?>