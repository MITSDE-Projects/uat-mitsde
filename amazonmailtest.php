<?php require_once('PHPMailer/class.phpmailer.php');
include("PHPMailer/class.smtp.php"); // optional, gets called from within class.phpmailer.php if not already loaded

	
echo "reg id-->".	 $regid="MITSDE2021";
	$studentName="Sanjay Test";
	$emailID="sanjaygaikwad2009@gmail.com";
  //------------------------------Success Mail----------------------------------------
		      $mail  = new PHPMailer();
                 ob_start(); //Turn on output buffering
				 ?>
				 <p>Dear <?php echo $studentName; ?></p>
				 <p>Test Email</p></br>
                 
				<br>
				  Regards,<br>
				  <b>Team MIT-School of Distance Education</b></p>
				 <?php
		           $body  = ob_get_clean();
                         
                          $mail->IsSMTP(); // telling the class to use SMTP
                          //$mail->IsMail(); // telling the class to use SMTP
                          $mail->SMTPDebug  = 1;                     // enables SMTP debug information (for testing) // 1 = errors and messages
                        // $mail->SMTPSecure = "ssl";                 // sets the prefix to the servier                                          // 2 = messages only
                          $mail->SMTPAuth   = true;                  // enable SMTP authentication
                        $mail->SMTPSecure = "tls";                 // sets the prefix to the servier
                        $mail->Host       = "email-smtp.us-east-1.amazonaws.com";      // sets GMAIL as the SMTP server
                        $mail->Port       = 587;                   // set the SMTP port for the GMAIL
                        //$mail->Username   = "AKIA5OQ6466FZWEYNNVJ";  // 
                        //$mail->Password   = "BB8uQenn6fCEjW791mFxeUgQ39xwI/9PEBDPz7uasG58";          

						$mail->Username   = "AKIA5OQ6466FQH7J437A";  // GMAIL username
                        $mail->Password   = "BNuSqYkuMXY6D9OqA7Gp4ABHK3LSIPUBoII+233SV+kC";
                         
                          /* $mail->IsSMTP(); // telling the class to use SMTP
                            $mail->SMTPDebug  = 1;                     // enables SMTP debug information (for testing) // 1 = errors and messages
                        // $mail->SMTPSecure = "ssl";                 // sets the prefix to the servier                                          // 2 = messages only
                          $mail->SMTPAuth   = true;                  // enable SMTP authentication
                        $mail->SMTPSecure = "tls";                 // sets the prefix to the servier
                        $mail->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
                        $mail->Port       = 587;                   // set the SMTP port for the GMAIL
                        
                        //$mail->Username   = "tms@mitsde.com";  // GMAIL username
                        //$mail->Password   = "karb tkaf rqbg civp";           // TML
                        
                        //$mail->Username   = "erp@mitsde.com";  // GMAIL username
                        //$mail->Password   = "kwgpfovauzumwrwv";           // New Admission
                        
                        $mail->Username   = "no-reply@mitsde.com";  // GMAIL username
                        $mail->Password   = "tzhvcfkeyugvrtae";           // Other Fees pages*/
                       
                        $mail->SetFrom('sanjay.gaikwad@mitsde.com', 'TEST MIT School of Distance Education');
                       
                        $mail->AddReplyTo('no-replay@mitsde.com', 'No-Reply');
                       
                        $mail->Subject = "TEST Mail";
                       
                        $mail->AltBody = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test
                       
                        $mail->MsgHTML($body);
						$mail->SetLanguage("en", 'includes/phpMailer/language/');
						
						$address = $emailID;
						$mail->AddAddress($address);
				
						$mail->AddBCC('sanjay.gaikwad@mitsde.com');
						$mail->AddBCC('raj.marathe@mitsde.com');
					
						
					
						
						//$mail->AddAttachment("sept12120568.pdf");      // attachment
						//$mail->AddAttachment("images/brochure-download-icon.png"); // attachment
						
						//$mail->AddEmbeddedImage("https://mitsde.com/Emailers/placementmailer.png", "placementmailer", "placementmailer.png", "base64", "application/octet-stream");
						$mail->Send();
		  //------------------------------Success Mail END----------------------------------------
		  //$getdp=mysql_query("update canvas_data_for_mail set mail_send='1' where regno='".$getdata['regno']."'");
 
 
  
  
  


 echo $data;
 exit();

?>