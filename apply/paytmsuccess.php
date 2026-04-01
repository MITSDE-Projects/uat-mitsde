<?php

session_start();

include_once "php/db.php";
include_once "php/populate.php";
$memberid= $_SESSION['memberID'];
$pieces = explode(".", basename($_SERVER['PHP_SELF']));
$segments = explode('/', trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/'));
$pid=$segments[count($segments)-1];
$_SESSION["lastpage"]=$pid;



 ?>
 <!DOCTYPE HTML>
<html>
<head>
    <title>Admissions 2017-18</title>
     	 <link rel="stylesheet" href="css/style.css"/>
         <link href='https://fonts.googleapis.com/css?family=Roboto:300,300' rel='stylesheet' type='text/css'>
         <style>
		 .logout{ color:#FFF;}
		  .logout link{ color:#FFF;}
		 </style>
<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '300649950136876', {
em: 'insert_email_variable,'
});
fbq('track', 'PageView');
fbq('track', 'Purchase', {
value: 1.00,
currency: 'INR'
});
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=300649950136876&ev=PageView&noscript=1"
/></noscript>
<!-- DO NOT MODIFY -->
<!-- End Facebook Pixel Code -->
</head>
<body class="bg-pic">
  <div class="wrapper-640">
<div class="mheader">
		<div class="formheading" style="text-align: left;"><h3>MIT Pune Campus at Ujjain | MP</h3><h2>Application Form for Admission - 2017</h2>
		<img src="images/avantika-logo.svg" width=100 height=100 />
		<div class="userloginmsg">
<span id="logout"><a href='register/logout.php?pid=<?php echo $pid;?>&id=<?php echo $memberid;?>'>Logout</a></span>
<span class="welcomeuser">Welcome <?php echo $_SESSION['username'];  $_SESSION['memberID'];?></span>
		</div>
		</div>
		
		</div>

  <table>
  <tr>
    <td>  <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="5%" style="background:#FFF;">&nbsp;</td>
    <td width="95%" style="background:#FFF;"><div style="color:#F60; width:700px; text-align:right; font-weight:bold; margin:0 auto; padding:10px">
        
        </div></td>
  </tr>
</table>
</td>
  </tr>
 
  <tr>
    <td style="background:#FFF; padding:10px;">
<?php
session_start();
$memberid = $_SESSION['memberID'];	

if (isset($_POST["TXNID"]) && isset($_POST["STATUS"]) && isset($_POST["TXNID"]))
{
     $status=$_POST["STATUS"];
     $txnid=$_POST["TXNID"];
     $amnt=$_POST["TXNAMOUNT"];
       if ($status=="TXN_SUCCESS")
       {
	       $body="<p>Hello ".$firstname.",<br>
		Congratulations!</p>
		<p>We would like to take this moment to thank you for successfully submitting your application with Avantika University. We wish to confirm the receipt of the payment towards the admission process.</p>
		<p>Below are your login credentials as per our records. You can check for your details, and flag off any discrepancy you may notice. </p>
		<p>Application ID: ".$aid."</p>
		<p>Email :".$email."</p>
		<p>Your Transaction ID for this transaction is ".$txnid."
		<p>We have received a payment of Rs. 1000
		<p>If you have any questions, please contact us at admissions@avantikauniversity.edu.in.</p>
		<p>Thank you and see you soon.<br>
Regards,<br>
Team Avantika</p>";
		$subject = "Your application with Avantika University";
		
		//SendMailAvantika($email,$body,$subject);
		
		$headers = "MIME-Version: 1.0" . "\r\n";
			$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
			$headers .= 'From: Avantika Admissions - 2017<admissions@avantikauniversity.edu.in>' . "\r\n";
			$headers .= 'To: <'.$email.'>' . "\r\n";
			$headers .= 'bcc: anees.shaikh@avantika.edu.in' ."\r\n";
			//$headers .= 'cc: aneess@utsglobal.edu.in' ."\r\n";
			$headers .= 'cc: malhar@avantika.edu.in' ."\r\n";
			mail($email,$subject,$body,$headers);
			
				$query = mysqli_query($connection,"UPDATE `student` SET `colorRadio` = 'Online Payment',paymenttype=2,formstatus='payment done',transactid='$txnid',lastPage='printformvalue.php',isPayment=1 WHERE `memberID` = '$memberid'");
				//send email
		
			
		$username = $_SESSION['username'];		
		$memberid = $_SESSION['memberID'];		
		
		
		
		echo "<p>Congratulations!</p>
		<p>We would like to take this moment to thank you for successfully submitting your application with Avantika University. We wish to confirm the receipt of the payment towards the admission process.</p>
		<p>Below are your login credentials as per our records. You can check for your details, and flag off any discrepancy you may notice. </p>
		<p>Application ID: ".$aid."</p>
		<p>Email :".$email."</p>
		<p>Your Transaction ID for this transaction is ".$txnid."
		<p>We have received a payment of Rs. " . $amount . "
		<p>If you have any questions, please contact us at admissions@avantikauniversity.edu.in.</p>
		<p>Thank you and see you soon.<br>";
		
		echo "<h3 class='sucess4'><a href='printformvalue.php' ><input type='button' value='Click here to Print your form for your reference'></a></h3>";  ?>
		<?php 
			include_once "hallticket.php";
			
			 if($programmesugpg=="B.Des" || $programmesugpg=="M.Des")
			{
			
			
			GenerateHallTicket($memberid);
			$rno=6000+$memberid."hallticket.pdf";
			
			?>
	
		<div style="width:200px;height:50px;font-size:15px;text-align: center;font-weight:bold;border:1px solid #ccc;line-height:50px;"><a href="dat_halltickets/<?php echo $rno;?>" target="_blank" style="width:200px;height:50px;font-size:15px;text-align: center;font-weight:bold;line-height:50px;text-decoration:none;color:#000;" class="printicard">Print Hall Ticket</a></div>

			<?php
			}
			?>
		<?php
		   }
	   else {
		   echo "Invalid Transaction. Please try again";
		  	header("location:".$lastpage);
		 
 }
}
 else {
		   echo "Invalid Transaction. Please try again";
		  	header("location:".$lastpage);
 }
?>	
<!-- Google Code for Avantika Paid Count Conversion Page -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 929232991;
var google_conversion_language = "en";
var google_conversion_format = "3";
var google_conversion_color = "ffffff";
var google_conversion_label = "4ocvCNnUsmwQ3_CLuwM";
var google_remarketing_only = false;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/929232991/?label=4ocvCNnUsmwQ3_CLuwM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>
</body>   
</html>