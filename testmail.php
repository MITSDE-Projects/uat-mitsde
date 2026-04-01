<?php require_once('class.phpmailer.php');
include("class.smtp.php"); // optional, gets called from within class.phpmailer.php if not already loaded
$date = Date('Y-m-d');
    
     $conn=mysql_connect("localhost","mitsde_studentda","Custom@123");
	  	if(!$conn)
		{
		     echo "Mysql Connection Error".die(mysql_error);
		}
		
		$db=mysql_select_db('mitsde_studentdata',$conn);
		if(!$db)
		 {
			  echo "Database Not Selected".die(mysql_error);
		 }
		 $date = Date('Y-m-d');
		 $t=time();
         

 

      
     
   
	
	 $regid="MITSDE2021";
	$studentName="Sanjay Gaikwad";
	$emailID="sanjay.gaikwad@mitsde.com";
  //------------------------------Success Mail----------------------------------------
		      $mail  = new PHPMailer();
                 ob_start(); //Turn on output buffering
				 ?>
				 <p>Dear <?php echo $studentName; ?></p>
				 <h1>MITSDE</h1>
				<br>
				  Regards,<br>
				  <b>Team MIT-School of Distance Education</b></p>
				 <?php
		           $body  = ob_get_clean();
                          //$mail->Mailer = "mail";
                          //$mail->IsSMTP(); // telling the class to use SMTP
                          $mail->IsMail(); // telling the class to use SMTP
                          $mail->SMTPDebug  = 2;                     // enables SMTP debug information (for testing) // 1 = errors and messages
                         //$mail->SMTPSecure = "ssl";                 // sets the prefix to the servier                                          // 2 = messages only
                          $mail->SMTPAuth   = true;                  // enable SMTP authentication
                        $mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
                        $mail->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
                        $mail->Port       = 465;                   // set the SMTP port for the GMAIL
                        $mail->Username   = "no-replay@mitsde.com";  // GMAIL username
                        $mail->Password   = "No@mitsde";            // GMAIL password
                
                       
                        $mail->SetFrom('admissions@mitsde.com', 'TEST MIT School of Distance Education');
                       
                        $mail->AddReplyTo('no-replay@mitsde.com', 'No-Reply');
                       
                        $mail->Subject = "TEST Mail";
                       
                        $mail->AltBody = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test
                       
                        $mail->MsgHTML($body);
						$mail->SetLanguage("en", 'includes/phpmailer/language/');
						
						$address = $emailID;
						$mail->AddAddress($address);
				
						$mail->AddBCC('sanjay.gaikwad@mitsde.com');
						
					
						
						//$mail->AddAttachment("sept12120568.pdf");      // attachment
						//$mail->AddAttachment("images/brochure-download-icon.png"); // attachment
						
						//$mail->AddEmbeddedImage("https://mitsde.com/Emailers/placementmailer.png", "placementmailer", "placementmailer.png", "base64", "application/octet-stream");
						$mail->Send();
		  //------------------------------Success Mail END----------------------------------------
		  //$getdp=mysql_query("update canvas_data_for_mail set mail_send='1' where regno='".$getdata['regno']."'");
 
 
  
  
  


 echo $data;
 exit();

?>