<?php ob_start();

require_once('phpMailer/class.phpmailer.php');

require_once('phpMailer/class.smtp.php');



// optional, gets called from within class.phpmailer.php if not already loaded



$Fname=$_POST['YourName'];

$Cname=$_POST['CampanyName'];

$email=$_POST['YourEmail'];

$Phone=$_POST['MobileNumber'];

$Designation=$_POST['DesigNation'];



//die;



$owenrMailID="mahajbin.khan@mitsde.com";

$mail  = new PHPMailer();



 //Turn on output buffering



?>



<table border='1'>

	    <tr>

			<th colspan='2'>Form corporate Page</th>

			</tr>

				        <tr>

					    <td style='font-weight:bold'>Name :</td>

						<td><?php echo $Fname; ?></td>

						</tr>

						

						  <tr>

					    <td style='font-weight:bold'>Designation :</td>

						<td><?php echo $Designation; ?></td>

						</tr>

						

						<tr>

					   <td style='font-weight:bold'>Organization Name :</td>

						<td><?php echo $Cname; ?></td>

						</tr>

						

						 <tr>

							  <td style='font-weight:bold'>Email : </td>

							  <td><?php echo $email; ?></td>

						</tr>	 

						<tr>

						   <td style='font-weight:bold'>Contact No : </td>

						   <td><?php echo $Phone; ?></td>

						</tr>

					 <table>







<?php



$body  = ob_get_clean();





$mail->IsSMTP(); // telling the class to use SMTP



$mail->SMTPDebug  = 0;                     // enables SMTP debug information (for testing)

                                           // 1 = errors and messages

// $mail->SMTPSecure = "ssl";                 // sets the prefix to the servier                                          // 2 = messages only

 $mail->SMTPAuth   = true;                  // enable SMTP authentication

                        $mail->SMTPSecure = "tls";                 // sets the prefix to the servier

                        $mail->Host       = "email-smtp.us-east-1.amazonaws.com";      // sets GMAIL as the SMTP server

                        $mail->Port       = 2587;                   // set the SMTP port for the GMAIL

                       $mail->Username   = "AKIA5OQ6466FQH7J437A";  // GMAIL username
                        $mail->Password   = "BNuSqYkuMXY6D9OqA7Gp4ABHK3LSIPUBoII+233SV+kC";   



$mail->SetFrom('feedback@mitsde.com', 'MITSDE');



$mail->AddReplyTo('feedback@mitsde.com', 'MITSDE');



$mail->Subject    = "Corporate Contact Page";



$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test



$mail->MsgHTML($body);

$mail->SetLanguage("en", 'includes/phpMailer/language/');

$address = $owenrMailID;

$mail->AddAddress($address);

$mail->AddCC('sanjay.gaikwad@mitsde.com');



//$mail->AddAttachment("sept12120568.pdf");      // attachment

//$mail->AddAttachment("images/phpmailer_mini.gif"); // attachment



$mail->Send();



header('Location: ../thankyou.php');



?>