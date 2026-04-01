<?php
$email=$_POST['subscribeEmail'];
?>
<script src='//cdnt.netcoresmartech.com/smartechclient.js'></script>      
<script>        
smartech('create', 'ADGMOT35CHFLVDHBJNIG50K9684NKLUBTHIPB5R89RGQ434FC7L0' );        smartech('register', '80a04087e7a8030b1878063ecc627703');      
  smartech('identify', '');
smartech('dispatch',1,{});  

smartech('contact', 'LIST IDENTIFIER', {
                    'pk^email': "<?php echo $email;?>",
  });
                   smartech('identify', "<?php echo $email;?>");
                    smartech('dispatch', 'Subscribe', {
                    'screen_name': 'homepage',
                    'email': "<?php echo $email;?>"
                    
                });
</script> 

<?php ob_start();
require_once('phpMailer/class.phpmailer.php');
require_once('phpMailer/class.smtp.php');
include("../admin/include/connection.php");


$email=$_POST['subscribeEmail'];


if(empty($email))
  {
    echo("</br>Please Enter Correct Mail ID.");
    ?>
	
    </br><button onclick="history.back()">Go Back</button>
 <?php
 //die;
     }
	 else{


    date_default_timezone_set('Asia/Kolkata');
    		 $curdateTime = date("Y-m-d h:i:s");
	
	$GetDuplicatLead=mysql_query("SELECT * FROM `newsletter` WHERE `email_id` = '".$email."'");
				$num_rows = mysql_num_rows($GetDuplicatLead);
					$num_rows;
					
					if($num_rows!=1)  // Check Duplicate Lead No
					{
				//	echo "</br>INSERT INTO `newsletter` (`nid`, `email_id`, `DT`) VALUES (NULL, '".$email."', '".$curdateTime."')";
				//die;
	       $insert=mysql_query("INSERT INTO `newsletter` (`nid`, `email_id`, `DT`) VALUES (NULL, '".$email."', '".$curdateTime."')");
	
	    
	 
	 $owenrMailID="swati.karande@mitsde.com";
$mail  = new PHPMailer();

 //Turn on output buffering

?>

<!--<table border='1'>
	    <tr>
			<th colspan='2'>Form corporate Page</th>
			</tr>
				 <tr>
					 <td style='font-weight:bold'>Name :</td>
						<td><?php //echo $Fname; ?></td>
						</tr>
						
						<tr>
					   <td style='font-weight:bold'>Campanay Name :</td>
						<td><?php //echo $Cname; ?></td>
						</tr>
						
						 <tr>
							  <td style='font-weight:bold'>Email : </td>
							  <td><?php //echo $email; ?></td>
						</tr>	 
						<tr>
						   <td style='font-weight:bold'>Contact No : </td>
						   <td><?php //echo $Phone; ?></td>
						</tr>
					 </table>-->

                <p>Dear Student</p>
				 <p>Welcome to MIT School of Distance Education (MITSDE)</p></br>
                 <p>You Have Successfully Subscribe on <b><?php echo $email; ?></b> to MITSDE Newsletter service</p>  </br>
                 
				
				<p>If you have any questions, raise a support ticket by clicking the <b>Generate ticket</b> in the E-Library system.</p>
				<b>Please do not reply to this email, as this is a system generated email.</b>
				<br>
				  Regards,<br>
				  <b>Team MIT-School of Distance Education</b></p>

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
                        $mail->Username   = "AKIA5OQ6466FZWEYNNVJ";  // GMAIL username
                        $mail->Password   = "BB8uQenn6fCEjW791mFxeUgQ39xwI/9PEBDPz7uasG58";   

$mail->SetFrom('newsletter@mitsde.com', 'MITSDE Newsletter');

$mail->AddReplyTo('newsletter@mitsde.com', 'MITSDE Newsletter');

$mail->Subject    = "Newsletter MITSDE";

$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test

$mail->MsgHTML($body);
$mail->SetLanguage("en", 'includes/phpMailer/language/');
$address = $email;
$mail->AddAddress($address);
//$mail->AddCC('sanjay.gaikwad@mitsde.com');
$mail->AddCC($owenrMailID);

//$mail->AddAttachment("sept12120568.pdf");      // attachment
//$mail->AddAttachment("images/phpmailer_mini.gif"); // attachment

//$mail->Send();

header('Location: ../thankyoufornewsletter.php');

?>
	<? 
	 }
	 else{
	     echo "</br>You have already subscribed to our newsletter.";
	     ?>
	     </br><button onclick="history.back()">Go Back</button>
	     <?php
	 }
	 }
	 header('Location: ../thankyoufornewsletter.php');
	 ?>
 


