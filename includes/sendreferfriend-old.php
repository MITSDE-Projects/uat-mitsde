<?php ob_start();

   require_once('../PHPMailer/class.phpmailer.php');
   include("../PHPMailer/class.smtp.php"); // optional, gets called from within class.phpmailer.php if not already loaded
//error_reporting(0);



// optional, gets called from within class.phpmailer.php if not already loaded



      $Registration_no = $_POST['Registration_no'];
	  $name = $_POST['form_name'];
	  $Your_Email = $_POST['Your_Email'];
      $Mobile = $_POST['Mobile_no'];
      $Relation = $_POST['Relation'];
      $form_name_candidate = $_POST['form_name_candidate'];
      $Program_Interested = $_POST['Program_Interested'];
      $student_email = $_POST['student_email'];
	  $student_mob = $_POST['student_mob'];



//die;



// $owenrMailID="sanjay.gaikwad@mitsde.com";
$owenrMailID="kushal.kamble@mitsde.com";

$mail  = new PHPMailer();



 //Turn on output buffering



?>



<table border='1'>

	    <tr>

			<th colspan='2'>Referral Policy</th>

			</tr>

				        <tr>

					    <td style='font-weight:bold'>Registration No :</td>

						<td><?php echo $Registration_no; ?></td>

						</tr>

						

						  <tr>

					    <td style='font-weight:bold'>Existing Student Name :</td>

						<td><?php echo $name; ?></td>

						</tr>

						

						<tr>

					   <td style='font-weight:bold'>Email  :</td>

						<td><?php echo $Your_Email; ?></td>

						</tr>

						

						 <tr>

							  <td style='font-weight:bold'>Mobile No : </td>

							  <td><?php echo $Mobile; ?></td>

						</tr>	 

						<tr>

						   <td style='font-weight:bold'>Relation : </td>

						   <td><?php echo $Relation; ?></td>

						</tr>
						<tr style='font-weight:bold'>New Student Details : </tr>
                         
                         <tr>

						   <td style='font-weight:bold'>Name of Student : </td>

						   <td><?php echo $form_name_candidate; ?></td>

						</tr>
						<tr>

						   <td style='font-weight:bold'>Program Interested : </td>

						   <td><?php echo $Program_Interested; ?></td>

						</tr>
						<tr>

						   <td style='font-weight:bold'>Email : </td>

						   <td><?php echo $student_email; ?></td>

						</tr>
						<tr>

						   <td style='font-weight:bold'>Mobile No : </td>

						   <td><?php echo $student_mob; ?></td>

						</tr>
</table>







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
                        $mail->Username   = "AKIA5OQ6466FZWEYNNVJ";  // GMAIL username
                        $mail->Password   = "BB8uQenn6fCEjW791mFxeUgQ39xwI/9PEBDPz7uasG58";            // GMAIL password 



$mail->SetFrom('referral@mitsde.com', 'MITSDE');



$mail->AddReplyTo('referral@mitsde.com', 'MITSDE');



$mail->Subject    = "Referral";



$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test



$mail->MsgHTML($body);

$mail->SetLanguage("en", 'includes/phpMailer/language/');

$address = $owenrMailID;

$mail->AddAddress($address);

// $mail->AddCC('kushal.kamble@mitsde.com');

$ccEmails = ['kushal.kamble@mitsde.com'];

foreach ($ccEmails as $ccEmail) {
    $mail->AddCC($ccEmail);
}




//$mail->AddAttachment("sept12120568.pdf");      // attachment

//$mail->AddAttachment("images/phpmailer_mini.gif"); // attachment



$mail->Send();

print_r($mail);

header('Location: ../thankyou.php');



?>