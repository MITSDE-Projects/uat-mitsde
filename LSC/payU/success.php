<?php ob_start();
require_once('class.phpmailer.php');
include("class.smtp.php"); // optional, gets called from within class.phpmailer.php if not already loaded

include("admin/include/config.php");

$status=$_POST["status"];
$firstname=$_POST["firstname"];
$amount=$_POST["amount"];
$txnid=$_POST["txnid"];
$posted_hash=$_POST["hash"];
$key=$_POST["key"];
$productinfo=$_POST["productinfo"];
$email=$_POST["email"];
$tempid=$_POST["udf1"];
$salt="BQagJjLna7";
$transaction = $_POST["bank_ref_num"];
$pyarr = $_POST["payuMoneyId"];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
			<title> Payment Status </title>
		<meta name='description' content='Thank You for contacting us. We will get back to you soon.' />
		<meta name='keywords' content='' />
<meta name="robots" content="INDEX,FOLLOW" />
<link rel="icon" href="favicon.ico" type="image/x-icon" />
<link type="text/css" rel="stylesheet" href="application/themes/mit/style/global.css" media="screen" />
<link type="text/css" rel="stylesheet" href="application/themes/mit/style/font-awesome.css" media="screen" />
<link type="text/css" rel="stylesheet" href="application/themes/mit/style/structure.css" media="screen" />
<link type="text/css" rel="stylesheet" href="application/themes/mit/style/theme.css" media="screen" />
<link type="text/css" rel="stylesheet" href="media/banner_10.css" media="screen" />
<script type="text/javascript" src="application/themes/mit/js/jquery-1.10.2.min.js" charset="UTF-8"></script>
<script type="text/javascript" src="application/themes/mit/js/jquery.flexslider-min.js" charset="UTF-8"></script>
			<meta name="viewport" content="width=device-width, initial-scale=1.0" />
									
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<?php
  include"GoogleAnalytics.html";
  include"fbpixel.html";

 ?>
</head>
<body>
<div class="site-corner"></div>
<div id="bodywrapper">
  <?php include"header.php"; ?>

  <div id="bodycontent">
    <div class="wrapper_width">
      <div class="single_column">
       <?php
       if ($status == "success")
	    {
	  ?>
        <div class="breadcrum"><a rel="canonical" href="index.php">Home</a><span><i class='fa fa-angle-double-right'></i></span><strong class='act'>Thank you</strong></div>  
        <?php
		}
		else
		{
		?>
        <div class="breadcrum"><a rel="canonical" href="index.php">Home</a><span><i class='fa fa-angle-double-right'></i></span><strong class='act'>Failed Payment</strong></div> 
		 <?php
         }
$json_content = json_decode($pyarr, true);

$obj = json_decode($pyarr, true);
$payID=$obj['paymentId'];

//$catIds = array_map(create_function('$o', 'return $o->id;'), $objects);
//$payID = array_map(Functions::extract()->paymentId, $pyarr);



          if(isset($_POST["additionalCharges"])) 
           {
       $additionalCharges=$_POST["additionalCharges"];
	  
	   if($addtionalcharges > 0)
	   echo  "dekdasdhasld".$additionalCharges;
        $retHashSeq = $additionalCharges.'|'.$salt.'|'.$status.'||||||||||'.$tempid.'|'.$email.'|'.$firstname.'|'.$productinfo.'|'.$amount.'|'.$txnid.'|'.$key;
        
                  }
	else {	  

        $retHashSeq = $salt.'|'.$status.'||||||||||'.$tempid.'|'.$email.'|'.$firstname.'|'.$productinfo.'|'.$amount.'|'.$txnid.'|'.$key;

         }
		 
		 $hash = hash("sha512", $retHashSeq);
		 
      if ($status == "success")
	  {
	   if ($hash == $posted_hash)
	    {
	        echo "<h3>Thank You for Payment.</h3>";
            echo "<h4>Please Note down the Payment ID for this Transaction <strong>".$payID."</strong></h4>";
            echo "<h4>Mention this ID in further communication.</h4>";
		
		    $result1 = mysql_query( "select * from temp where T_LeadID='".$tempid."' and tranID= '".$txnid."'");
            $row1=mysql_fetch_array($result1);
            $instno=$row1['T_installmentNo'];

                $query ="UPDATE `transaction` set PayU_transationNo='".$payID."', T_date= '".date('Y-m-d')."',`payment_source`='PayU' where T_LeadID='".$tempid."' and  T_installmentNo=".$instno;
                 mysql_query($query) or die('Error, insert query failed222');
          // echo "hash rcd = ".$posted_hash."<br> hash sent= ".$hash." <br> Status=".$status;
		  
		                         //------------------------------Success Mail----------------------------------------
		       $mail  = new PHPMailer();
                 ob_start(); //Turn on output buffering
				 ?>
				 <p>Hello <?php echo $firstname; ?>,<br>
                 Congratulations!</p>
                  <p>We would like to take this moment to thank you for successfully submitting your application with MIT-School of Distance Education. 
				        We wish to confirm the receipt of the payment towards the admission process.</p>
                     <p>Your Transaction ID for this transaction is <?php echo $payID; ?>
                     <p>If you have any questions, please contact us at admissions@mitsde.com.</p>
					<p>Your Fee Paid Amount is : <?php echo $amount; ?> </p> <br />
				<p>Thank you and see you soon.<br>
				  Regards,<br>
				  <b>Team MIT-School of Distance Education</b></p>
				 <?php
		           $body  = ob_get_clean();
						  $mail->IsSMTP(); // telling the class to use SMTP
						  $mail->SMTPDebug  = 0;                     // enables SMTP debug information (for testing) // 1 = errors and messages
						// $mail->SMTPSecure = "ssl";                 // sets the prefix to the servier                                          // 2 = messages only
						 $mail->SMTPAuth   = true;                  // enable SMTP authentication
						$mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
						$mail->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
						$mail->Port       = 465;                   // set the SMTP port for the GMAIL 
						$mail->Username   = "payonline@mitsde.com";  // GMAIL username
						$mail->Password   = "mitsde@123";            // GMAIL password
						//$mail->g_smtp_host = 'smtp.gmail.com:465';
						//$mail->g_smtp_connection_mode = 'ssl';
						
						$mail->SetFrom('payonline@mitsde.com', 'MIT-School of Distance Education');
						
						$mail->AddReplyTo('payonline@mitsde.com', 'No-Reply');
						
						$mail->Subject    = "Payment Made Successfully";
						
						$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test
						
						$mail->MsgHTML($body);
						$mail->SetLanguage("en", 'includes/phpMailer/language/');
						$address = $email;
						$mail->AddAddress($address);
						//$mail->AddCC('anees.shaikh@avantika.edu.in');
						//$mail->AddBCC('anees.shaikh@mitsde.com');
						
						$mail->AddBCC('azma.solkar@mitsde.com');
						$mail->AddBCC('jayjeet.deshmukh@mitsde.com ');
						$mail->AddBCC('prathamesh.gawas@mitsde.com');
						//$mail->AddBCC('sameer.gorde@mitsde.com');
						
						//$mail->AddAttachment("sept12120568.pdf");      // attachment
						//$mail->AddAttachment("images/phpmailer_mini.gif"); // attachment
						
						$mail->Send();
		  //------------------------------Success Mail END----------------------------------------
		   
		   }
		   }
		   else
		   {
		          echo "Invalid Transaction. Please try again<br>";
		          echo "or Contact With MITSDE Accounts team<br>";

                 //------------------------------Feild Mail----------------------------------------      
		        $mail  = new PHPMailer();
                 ob_start(); //Turn on output buffering
				 ?>
				 <p>Hello <?php echo $firstname; ?>,<br>
                 
				<p> Unfortunately your most recent invoice payment id <?php echo $payID; ?> was declined.
				  This could be due to a change in your card number or your card expiring, cancelation of your credit card / debit card,
				  or the bank not recognizing the payment and taking action to prevent it,please verify your billing information and resend payment <?php echo $amount; ?>.
			   </p>
					<p>Your Failed Transaction ID For This Transaction Is <?php echo $payID; ?>
					 <p>If You Have Any Questions, Please Contact Your Student Counsoller.</p><br>
        		<p>Thank you and see you soon.<br>
          	      Regards,<br>
           		  <b>Team MIT-School of Distance Education</b></p>
				 <?php
				 
		           $body  = ob_get_clean();
						  $mail->IsSMTP(); // telling the class to use SMTP
						  $mail->SMTPDebug  = 0;                     // enables SMTP debug information (for testing) // 1 = errors and messages
						// $mail->SMTPSecure = "ssl";                 // sets the prefix to the servier                                          // 2 = messages only
						 $mail->SMTPAuth   = true;                  // enable SMTP authentication
						$mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
						$mail->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
						$mail->Port       = 465;                   // set the SMTP port for the GMAIL 
						$mail->Username   = "payonline@mitsde.com";  // GMAIL username
						$mail->Password   = "mitsde@123";            // GMAIL password
						//$mail->g_smtp_host = 'smtp.gmail.com:465';
						//$mail->g_smtp_connection_mode = 'ssl';
						
						$mail->SetFrom('payonline@mitsde.com', 'MIT-School of Distance Education');
						
						$mail->AddReplyTo('payonline@mitsde.com', 'No-Reply');
						
						$mail->Subject    = "Current Transaction is Failed";
						
						$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test
						
						$mail->MsgHTML($body);
						$mail->SetLanguage("en", 'includes/phpMailer/language/');
						$address = $email;
						$mail->AddAddress($address);
						//$mail->AddCC('anees.shaikh@avantika.edu.in ');
						//$mail->AddBCC('anees.shaikh@mitsde.com');
						//$mail->AddBCC('vivek.pawar@mitsde.com');
						$mail->AddBCC('azma.solkar@mitsde.com');
						$mail->AddBCC('jayjeet.deshmukh@mitsde.com');
						$mail->AddBCC('prathamesh.gawas@mitsde.com');
						//$mail->AddBCC('sameer.gorde@mitsde.com');
						//$mail->AddAttachment("sept12120568.pdf");      // attachment
						//$mail->AddAttachment("images/phpmailer_mini.gif"); // attachment
						
						$mail->Send();
			//------------------------------Feild Mail END----------------------------------------       
        

	}
	                    date_default_timezone_set('Asia/Calcutta');
                         $CurrentDateTime=date('Y-m-d : h:i:s');
						 
		      $query= "UPDATE `temp` set status='".$status."',P_End_date='".$CurrentDateTime."' where T_LeadID='".$tempid."' and tranID= '".$txnid."'";
              mysql_query($query) or die('Error, insert query failed111');



















/*
date_default_timezone_set('America/Toronto');

require_once('class.phpmailer.php');
include("class.smtp.php"); // optional, gets called from within class.phpmailer.php if not already loaded

$mail             = new PHPMailer();

ob_start(); //Turn on output buffering

?>


MIT School of Telecom & Management Studies<br />


Dear <?php echo $rtsFirstName." ".$rtsSurName ?> <br /><br />

Thanks of applying for admission.<br />
Our Admission team will contact soon.<br /><br />



For more information please contact :<br />
 Mr. Malhar Pagrikar   09850811405<br /><br />

The Admission Office<br />

MIT  SCHOOL OF TELECOM  MANAGEMENT<br />
s2,MIT College Campus,<br />
Paud Road, Kothrud,<br />
Pune-411 038, India.<br /><br /><br />






 Thanking you<br />

 Team MITSOT<br />



<?php

$body  = ob_get_clean();


$mail->IsSMTP(); // telling the class to use SMTP

$mail->SMTPDebug  = 0;                     // enables SMTP debug information (for testing)
                                           // 1 = errors and messages
// $mail->SMTPSecure = "ssl";                 // sets the prefix to the servier                                          // 2 = messages only
$mail->SMTPAuth   = true;                  // enable SMTP authentication
$mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
$mail->Host       = "box689.bluehost.com";      // sets GMAIL as the SMTP server
$mail->Port       = 465;                   // set the SMTP port for the GMAIL server
$mail->Username   = "admin+mitsot.com";  // GMAIL username
$mail->Password   = "!o^C*dA70Cd_";            // GMAIL password
//$mail->g_smtp_host = 'smtp.gmail.com:465';
//$mail->g_smtp_connection_mode = 'ssl';

$mail->SetFrom('admission@mitsot.com', 'Team MITSOT');

$mail->AddReplyTo('admission@mitsot.com', 'Team MITSOT');

$mail->Subject    = "Application Received....MITSOT";

$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test

$mail->MsgHTML($body);
$mail->SetLanguage("en", 'includes/phpMailer/language/');
$address = $reeEmail;
$mail->AddAddress($address, $rtsFirstName." ".$rtsSurName);

//$mail->AddAttachment("sept12120568.pdf");      // attachment
//$mail->AddAttachment("images/phpmailer_mini.gif"); // attachment

//$mail->Send();

///mail2
//error_reporting(E_STRICT);

date_default_timezone_set('America/Toronto');

//require_once('class.phpmailer.php');
//include("class.smtp.php"); // optional, gets called from within class.phpmailer.php if not already loaded

$mail             = new PHPMailer();

ob_start(); //Turn on output buffering

?>



Name :<?php echo $rtsFirstName." ".$rtsSurName; echo "\n" ?> <br />
City : <?php echo $rtsCity ?>
Contact info  :<?php echo $rnpPhone." -- ".$rnpmob."  --  ".$reeEmail; echo "\n" ?><br />
Specialization :<?php echo $rtsSpecialization; echo "\n"  ?> <br />
Qualification : <?php echo $rtsEduQualification; echo "\n"  ?><br />

SSC  : <?php echo $rtssscbrd."      ".$rtssscper; echo "\n" ?><br />
HSC  :<?php echo  $rtshscbrd."      ".$rtshscper; echo "\n" ?><br />
1st year :<?php echo $rts1stbrd."    ".$rts1stper; echo "\n" ?><br />
2nd year :<?php echo $rts2ndbrd."    ".$rts2ndper; echo "\n" ?><br />
3rd year :   <?php echo $s3rdbrd."    ".$s3rdper; echo "\n"   ?><br />
4th year :   <?php echo $s4thbrd."    ".$s4thper; echo "\n"   ?><br />
Exam Center :<?php echo $rtsExamcenter; echo "\n"    ?><br />





$mail->SMTPDebug  = 0;                     // enables SMTP debug information (for testing)
                                           // 1 = errors and messages
// $mail->SMTPSecure = "ssl";                 // sets the prefix to the servier                                          // 2 = messages only
$mail->SMTPAuth   = true;                  // enable SMTP authentication
$mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
$mail->Host       = "box689.bluehost.com";      // sets GMAIL as the SMTP server
$mail->Port       = 465;                   // set the SMTP port for the GMAIL server
$mail->Username   = "admin+mitsot.com";  // GMAIL username
$mail->Password   = "!o^C*dA70Cd_";            // GMAIL password
//$mail->g_smtp_host = 'smtp.gmail.com:465';
//$mail->g_smtp_connection_mode = 'ssl';

$mail->SetFrom('admission@mitsot.com', 'Team MITSOT');

$mail->AddReplyTo('admission@mitsot.com', 'Team MITSOT');

$mail->Subject    = "Application Received....MITSOT";

$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test

$mail->MsgHTML($body);
$mail->SetLanguage("en", 'includes/phpMailer/language/');
$address = 'admission@mitsot.com';
$mail->AddAddress($address, "Admission MITSOT ");

//$mail->AddAttachment("sept12120568.pdf");      // attachment
//$mail->AddAttachment("images/phpmailer_mini.gif"); // attachment

//$mail->Send();





echo "<script  language='javascript' >document.location='thanks_app.php'; </script>";*/
?>
<!-- Google Code for Course enrolled query Conversion Page --> <script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 955978584;
var google_conversion_language = "en";
var google_conversion_format = "3";
var google_conversion_color = "ffffff";
var google_conversion_label = "RXwXCMWq01sQ2KbsxwM";
var google_remarketing_only = false;
/* ]]> */
</script> <script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script> <noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/955978584/?label=RXwXCMWq01sQ2KbsxwM&amp;guid=ON&amp;script=0"/>
</div>
</noscript> 
	   
	      </div>
    </div>
  </div>
  <div class="clear"></div>
</div>
<script>
fbq('track', 'Lead');
</script>
<?php include"footer.php"; ?>
<script type="text/javascript" src="media/banner_10.js" charset="UTF-8"></script>
<script type="text/javascript" src="application/themes/mit/js/menu_static.js" charset="UTF-8"></script>
<script type="text/javascript" src="application/themes/mit/js/scroll.js" charset="UTF-8"></script>
<script type="text/javascript" src="application/themes/mit/js/custom.js" charset="UTF-8"></script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-22814456-1', 'auto');
  ga('send', 'pageview');

</script>

<!-- Google Code for Remarketing Tag -->
<!--------------------------------------------------
Remarketing tags may not be associated with personally identifiable information or placed on pages related to sensitive categories. See more information and instructions on how to setup the tag on: http://google.com/ads/remarketingsetup
--------------------------------------------------->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 955978584;
var google_custom_params = window.google_tag_params;
var google_remarketing_only = true;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/955978584/?value=0&amp;guid=ON&amp;script=0"/>
</div>
</noscript>
<!-- Created by Sourav Dey -->
</body>
</html>