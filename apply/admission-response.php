<?php
ob_start();
session_start();

$DB_Server = "localhost"; // MySQL Server
$DB_Username = "mitsde_studentda"; // MySQL Username
$DB_Password = "Custom@123"; // MySQL Password
$DB_DBName = "mitsde_studentdata"; // MySQL Database Name

$connection = mysqli_connect($DB_Server, $DB_Username, $DB_Password,$DB_DBName);


//echo "IN"; exit; 

?>
<!DOCTYPE HTML>
<html>
<head>

</head>
<body class="bg-pic">
  <div class="wrapper-640">
<div class="mheader">
		<div class="formheading" style="text-align: center;"><h3>MIT School of Distance Education </h3><h2>Admission - 2018</h2>
		<div class="userloginmsg">

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

$memberid = $_SESSION['memberID'];	
$status=$_POST["status"];
$firstname=$_POST["firstname"];
$amount=$_POST["amount"];
$txnid=$_POST["txnid"];
$posted_hash=$_POST["hash"];
$key=$_POST["key"];
$productinfo=$_POST["productinfo"];
$email=$_POST["email"];
$pyarr = $_POST["payuMoneyId"];
$salt="BQagJjLna7";


//echo "ASter"; exit; 

// Herer we will fetch details from table!....



 $getdtls = mysqli_fetch_assoc(mysqli_query($connection,"SELECT * FROM student WHERE email='".$email."'"));


//echo '<pre>'; print_r($_POST);


//exit; 


	   if($status=='success') {
	       
	       $json_content = json_decode($pyarr, true);
             $obj = json_decode($pyarr, true);
           $payID=$obj['paymentId'];
		   
		    $body="<p>Hello ".$firstname.",<br>
		    
		Congratulations! <p>We wish to confirm the receipt of the payment towards the admission process.</p>
        <p>Your Transaction ID for this transaction is ".$txnid."
        <p>If you have any questions, please contact us at admissions@mitsde.com or campussupport@mitsde.com</p>
        <p>We have received a payment of Rs. " . $amount . "
        <p>Thank you and see you soon.<br>
        <p>Regards,</p>
        <p><strong>Team MIT-School of Distance Education</strong></p>";
	 	$subject = "Admission Fees Installment Received MITSDE 2018";
	
		
		    $headers = "MIME-Version: 1.0" . "\r\n";
			$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
			$headers .= 'From:  MIT SDE - 2019<admissions@mitsde.com>' . "\r\n";
			$headers .= 'To: <'.$email.'>' . "\r\n";
		   
            
            $headers .= 'bcc: umesh.ghatale@mitsde.com ' ."\r\n";
            $headers .= 'bcc: abhishek.kalyana@mitsde.com ' ."\r\n";
            $headers .= 'bcc: jayjeet.deshmukh@mitsde.com' ."\r\n";
            $headers .= 'bcc: azma.solkar@mitsde.com' ."\r\n";
            $headers .= 'bcc: pravin.patare@mitsde.com' ."\r\n";
             $headers .= 'bcc: william.murmu@mitsde.com ' ."\r\n";
			mail($email,$subject,$body,$headers);
			
			
		
		   
        mysqli_query($connection,"INSERT INTO tbl_transactions_details(email,ins_2_amt,ins_2_date,payment_source,transaction_id)VALUES('".$_POST['email']."','".$_POST['amount']."',NOW(),'PayU','$payID')");			
		
			
				
		
		
		
	     echo "<p>Hello ".$firstname.",<br>
		Congratulations! <p>We wish to confirm the receipt of the payment towards the admission process.</p>
        <p>Your Transaction ID for this transaction is ".$txnid."
        <p>If you have any questions, please contact us at admissions@mitsde.com or on campussupport@mitsde.com.</p>
        <p>We have received a payment of Rs. " . $amount . "
        <p>Thank you and see you soon.<br>
        <p>Regards,</p>
        <p><strong>Team MIT-School of Distance Education</strong></p>";
			
		
		header('location:admission-payuform.php?msg=payment_success');
		
 }         
 
 
 
 else {
     
     echo "<h3 style='text-align:center;'>Transaction Failed!. <a href='admission-payuform.php'>Please Try Again</a></h3>";
     
 }
 
 
?>	
</div>
</body>   
</html>