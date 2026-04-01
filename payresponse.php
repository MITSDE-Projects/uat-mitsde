<?php
$post = file_get_contents('php://input');
$string = $post;
//print_r($string);

//$string = "secureHash=8908843ed29419461bfd520175862c2c20192c19fe7265655ab657eb3dafc37b&respDescription=Transaction+successful&merchantId=T_20233&paymentID=10424644021&merchantTxnNo=7926332255&paymentDateTime=20230822140855&txnID=T008738266784&responseCode=0000";

// Explode the string into an array of key-value pairs
$pairs = explode('&', $string);

// Initialize an empty array to store the converted variables
$variables = [];

foreach ($pairs as $pair) {
    // Split each pair into key and value
    list($key, $value) = explode('=', $pair);

    // URL decode the value
    $value = urldecode($value);

    // Store the key-value pair in the variables array
    $variables[$key] = $value;
}

// Access the converted variables
$secureHash = $variables['secureHash'];
$order_status = $variables['respDescription'];
$merchantId = $variables['merchantId'];
$paymentID = $variables['paymentID'];
$merchantTxnNo = $variables['merchantTxnNo'];
$paymentDateTime = $variables['paymentDateTime'];
$txnID = $variables['txnID'];
$responseCode = $variables['responseCode'];



//die;


include('admin/include/config.php');
 require_once('PHPMailer/class.phpmailer.php');
include("PHPMailer/class.smtp.php"); 
error_reporting(0);
   
   
     
$temp = mysql_query("select * from temp where  tranID='".$merchantTxnNo."'");
	          $temp1=mysql_fetch_array($temp);
		
		   $leadid=$temp1['T_LeadID']; 
		   $tranID=$temp1['tranID']; // order id
		   $student_name=$temp1['student_name'];
		    $email_id=$temp1['email_id'];
		   $phone= $temp1['phone'];
	        $course=$temp1['course'];
	       $SpecializationID=$temp1['SpecializationID'];
		  $fees_type=$temp1['fees_type'];
		    $T_B_Amount=$temp1['T_B_Amount'];
     

?>
<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>

<!-- Meta Tags -->
<!-- Meta Tags -->
<html dir="ltr" lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<!-- Meta Tags -->
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>

<meta name="description" content="" />
<meta name="keywords" content="" />
<meta name="author" content="" />



<!-- Favicon and Touch Icons -->
<link href="media/favicon.png" rel="shortcut icon" type="image/png">
<link href="images/apple-touch-icon.png" rel="apple-touch-icon">


    <!-- Mobile Specific Metas -->
    <title>Online Payment | Other Fees Payment By PayPhi | Pay Online</title>
    <link rel="icon" type="image/png" href="assets/images/favicon-mit.ico" />
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/bootstrap-select.min.css" />
    <link rel="stylesheet" href="assets/css/slick.min.css" />
    <link rel="stylesheet" href="assets/css/fonts.css" type="text/css" />
    <link rel="stylesheet" href="assets/css/style.css" type="text/css" />
    <link rel="stylesheet" href="assets/css/course-common-internal.css" type="text/css" />
	
	<!-- Animation Style -->
    <!-- <link rel="stylesheet" type="text/css" href="stylesheets/animate.css"> -->
	
   <!--API for Queck contact----->
	  <script src="ajax-load/js/jquery-1.10.2.min.js"></script>
      <script type="text/javascript" src="ajax-load/js/validation.js" charset="UTF-8"></script>
	 <!----->


</head>
<body class="header-sticky">
    <div class="boxed">
        <?php include "header.php"; ?>

  <!-- Start main-content -->
  <div class="main-content">
    <!-- Section: inner-header -->
    

	<section>
	         <div class="container">
			   <div class="row">
			     
			       <?php 
  


	echo "<center>";

	


       if($order_status==="Transaction successful")
	{
	     //  echo "</br>select * from temp where T_LeadID='".$LeadID[1]."' and tranID='".$oderID[1]."'";
		  
		   $temp = mysql_query("select * from temp where  tranID='".$merchantTxnNo."'");
	          $temp1=mysql_fetch_array($temp);
		
		    $leadid=$temp1['T_LeadID']; 
		    $tranID=$temp1['tranID']; // order id
		   $student_name=$temp1['student_name'];
		   $email_id=$temp1['email_id'];
		 $phone= $temp1['phone'];
	      $course=$temp1['course'];
	       $SpecializationID=$temp1['SpecializationID'];
		  $fees_type=$temp1['fees_type'];
		   $T_B_Amount=$temp1['T_B_Amount'];
		   
					    
					    
					    
			//$trchk = mysql_num_rows(mysql_query("select * from OtherFeesTransaction where `PayU_ID`='".$transationID[1]."'"));
			$orchk = mysql_num_rows(mysql_query("select * from OtherFeesTransaction where `t_process_id`='".$merchantTxnNo."'"));
			
						
		if($orchk>0)
		  {
		  echo "ERROR: Duplicate Entry<br>";
		  }
		  elseif($temp1['tranID'] !=$merchantTxnNo)
		     {
			   echo "ERROR: Invalid Response (orderID or Amount not matching)<br>";
		 
		     }
		     else
		     {
		         $GetFeeType = mysql_query("SELECT * FROM `feehead_erp` WHERE `description` = '".$temp1['fees_type']."'");
	              $getname=mysql_fetch_array($GetFeeType);
	              $feeheadid=$getname['feedheadcode']; // feeheadid
	              
	              if($feeheadid=='60' || $feeheadid=="61")
	              {
	                  $ReceiptType="CF";
	              }
	              else
	              {
	                  $ReceiptType="OC";  
	              }
	              
		     echo "<br><h3>Thank You for Payment.</h3>.";
		            $tdate= date("Y/m/d");
		 			  date_default_timezone_set('Asia/Kolkata');
	                  $curdate = date('Y-m-d');
	                  
	                 // echo "</br>INSERT INTO `OtherFeesTransaction` (`othr_id`, `leadID`, `name`, `email`, `phone`, `CourseName`,`SpecializationID`, `FeeHeadID`, `FeesType`, `ReceiptType`, `amount`, `PayU_ID`, `payment_source`, `PayerBankID`, `transationDate`, `t_process_id`, `UTRNO`, `payment_confirmation_status`, `PayeeInstituteID`, `PayeeBankID`, `PayeeACNo`, `PayeeACName`, `PayeeBranch`, `PayeeBankAddress`, `PayeeIFSCCode`, `S_Flag`, `response`, `F_Flag`) VALUES (NULL, '".$leadid."', '".$temp1['student_name']."', '".$temp1['email_id']."','".$temp1['phone']."', '".$temp1['course']."', '".$temp1['SpecializationID']."', '".$feeheadid."', '".$temp1['fees_type']."','".$ReceiptType."','".$dotamt[0]."','".$transationID[1]."', 'HDFC', '1','".$tdate."','".$oderID[1]."', NULL, 'Not Verify', '16', '1', '50100267576292', 'Pune', 'Mayur Colony Kothrud Pune name', 'Mayur Colony Kothrud Pune address', 'HDFC0000149', '0', NULL, '1')";
				   $insertO_tras= "INSERT INTO `OtherFeesTransaction` (`othr_id`, `leadID`, `name`, `email`, `phone`, `CourseName`,`SpecializationID`, `FeeHeadID`, `FeesType`, `ReceiptType`, `amount`, `PayU_ID`, `payment_source`, `PayerBankID`, `transationDate`, `t_process_id`, `UTRNO`, `payment_confirmation_status`, `PayeeInstituteID`, `PayeeBankID`, `PayeeACNo`, `PayeeACName`, `PayeeBranch`, `PayeeBankAddress`, `PayeeIFSCCode`, `S_Flag`, `response`, `F_Flag`) VALUES (NULL, '".$leadid."', '".$temp1['student_name']."', '".$temp1['email_id']."','".$temp1['phone']."', '".$temp1['course']."','".$temp1['SpecializationID']."', '".$feeheadid."', '".$temp1['fees_type']."','".$ReceiptType."','".$T_B_Amount."','".$paymentID."', 'PayPhi','1', '".$tdate."','".$merchantTxnNo."', NULL, 'Not Verify', '16', '1', '50100267576292', 'Pune', 'Mayur Colony Kothrud Pune name', 'Mayur Colony Kothrud Pune address', 'HDFC0000149', '0', NULL, '1')";
				   
			 //$insertO_tras= "INSERT INTO `updpayment` (`id`, `LeadID`, `ReceiptType`, `PaymentType`, `PaymentModeID`, `InstruNo`, `InstruDate`, `ClearedDate`, `PaidAmount`, `FeeHeadID`, `PayerBankID`, `PayerBranch`, `PayerBankAddress`, `PayerIFSCcode`, `PayeeInstituteID`, `PayeeBankID`, `PayeeACNo`, `PayeeACName`, `PayeeBranch`,`PayeeBankAddress`, `PayeeIFSCCode`, `UserId`, `CurrencyID`) VALUES (NULL, '".$LeadID[1]."', 'OC', 'L','10', '".$transationID[1]."', '".$curdate."', '".$curdate."', '".".$dotamt[0]."."', '59', '10', NULL, NULL, NULL, '16', '1', '50100267576292', 'Pune','Mayur Colony Kothrud Pune name', 'Mayur Colony Kothrud Pune address', 'HDFC0000149', '8', '1')";

                           mysql_query($insertO_tras) or die('</br>Error, insert query failed222');
				  
				
				
		
		           echo "<table cellspacing=4 cellpadding=4>";
		          
		            echo "</br>------------------Fee Payment Details----------------------";
		            
		          
		            echo '</br><tr><td>Student Name :</td><td>'.$student_name.'</td></tr>';
		            echo '<tr><td>Email ID :</td><td>'.$temp1['email_id'].'</td></tr>';
		            echo '<tr><td>Mobile No :</td><td>'.$temp1['phone'].'</td></tr>';
		            echo '<tr><td>Course :</td><td>'.$temp1['course'].'</td></tr>';
		            echo '<tr><td>Fees Type :</td><td>'.$temp1['fees_type'].'</td></tr>';
		            echo '<tr><td>Pay Fee :</td><td>'.$T_B_Amount.'</td></tr>';
			    	echo '<tr><td>Payment ID :</td><td>'.$paymentID.'</td></tr>';
		            echo '<tr><td>Payment Status :</td><td style="color:#4AD300;">'.$order_status.'</td></tr>';
		            echo "</table><br>";
					
					//------------------------------Success Mail----------------------------------------
		       $mail  = new PHPMailer();
                 ob_start(); //Turn on output buffering
				 ?>
				 <p>Hello <?php echo $student_name; ?></p>
				 
                  <p>Thank you for making your payment. It will take two working days to credit your payment into our system.</p>  </br>
                  
                    <p>Your Transaction ID for this payment is <?php echo $paymentID; ?>
                    <p>Your Fee Paid Amount is : <?php echo $T_B_Amount; ?> </p> 
					<p>Course Name : <?php echo $temp1['course']; ?> </p>
					<p>Fees Type : <?php echo $temp1['fees_type']; ?> </p>
					
					<p>Used Payment Gateway : PayPhi </p>
					
					<p>If you have any questions, please contact us at campussupport@mitsde.com or <a href="https://elibrary.mitsde.com/callmeback.php" traget="_blnack">Click here</a> to call back</p>
				<p>Thank you and see you soon.<br>
				  Regards,<br>
				  <b>Team MIT-School of Distance Education</b></p>
				 <?php
		           $body  = ob_get_clean();
						//$mail->Mailer = "mail";
						  $mail->IsSMTP(); // telling the class to use SMTP
						  $mail->SMTPDebug  = 0;                     // enables SMTP debug information (for testing) // 1 = errors and messages
						// $mail->SMTPSecure = "ssl";                 // sets the prefix to the servier                                          // 2 = messages only
						 $mail->SMTPAuth   = true;                  // enable SMTP authentication
						 $mail->SMTPSecure = "tls";                 // sets the prefix to the servier
                        $mail->Host       = "email-smtp.us-east-1.amazonaws.com";      // sets GMAIL as the SMTP server
                        $mail->Port       = 2587;                   // set the SMTP port for the GMAIL
                        $mail->Username   = "AKIA5OQ6466FZWEYNNVJ";  // GMAIL username
                        $mail->Password   = "BB8uQenn6fCEjW791mFxeUgQ39xwI/9PEBDPz7uasG58";   
                        
                        /*$body  = ob_get_clean();
                          //$mail->Mailer = "mail";
                          //$mail->IsSMTP(); // telling the class to use SMTP
                          $mail->IsMail(); // telling the class to use SMTP
                          $mail->SMTPDebug  = 2;                     // enables SMTP debug information (for testing) // 1 = errors and messages
                        // $mail->SMTPSecure = "ssl";                 // sets the prefix to the servier                                          // 2 = messages only
                          $mail->SMTPAuth   = true;                  // enable SMTP authentication
                        $mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
                        $mail->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
                        $mail->Port       = 465;                   // set the SMTP port for the GMAIL
                        $mail->Username   = "payonline@mitsde.com";  // GMAIL username
						$mail->Password   = "mitsde@123";            // GMAIL password*/
						
						$mail->SetFrom('admissions@mitsde.com', 'MIT-School of Distance Education');
						
						$mail->AddReplyTo('admissions@mitsde.com', 'No-Reply');
						
						$mail->Subject    = "Payment Made Successfully";
						
						$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test
						
						$mail->MsgHTML($body);
						$mail->SetLanguage("en", 'includes/phpMailer/language/');
						$address = $email_id;
						$mail->AddAddress($address);
				
						$mail->AddBCC('sanjay.gaikwad@mitsde.com');
						$mail->AddBCC('teamfeecollections@mitsde.com');
					    $mail->AddBCC('accounts.mitsde@mitpune.edu.in');
						$mail->AddBCC('shivraj.pachawadkar@mitsde.com');
						
						
						
						//$mail->AddAttachment("sept12120568.pdf");      // attachment
						//$mail->AddAttachment("images/phpmailer_mini.gif"); // attachment
						
						$mail->Send();
		  //------------------------------Success Mail END----------------------------------------
					
					
					//---------------------------------------FOR DELETE FORM TEMP TABLE----------------------
		$deletetemp=mysql_query("DELETE FROM `temp` WHERE T_LeadID='".$LeadID[1]."' and tranID='".$oderID[1]."'");
		             //---------------------------------------FOR DELETE FORM TEMP TABLE------END----------------
			    }
		  
			
				
			
			
	}
	else if($order_status==="Transaction Rejected")
	{
		
		echo "<br><h3>Thank You for Payment.</h3>.";
		
		 echo "<table cellspacing=4 cellpadding=4>";
		          
		            echo "</br>------------------Fee Payment Details----------------------";
		            
		            echo '</br><tr><td>Student Name :</td><td>'.$student_name.'</td></tr>';
		            echo '<tr><td>Email ID :</td><td>'.$email_id.'</td></tr>';
		            echo '<tr><td>Mobile No :</td><td>'.$phone.'</td></tr>';
		            echo '<tr><td>Course :</td><td>'.$course.'</td></tr>';
		            echo '<tr><td>Fees Type :</td><td>'.$fees_type.'</td></tr>';
		            echo '<tr><td>Pay Fee :</td><td>'.$T_B_Amount.'</td></tr>';
			    	echo '<tr><td>Payment ID :</td><td>'.$paymentID.'</td></tr>';
		            echo '<tr><td>Payment Status :</td><td style="color:#4AD300;">'.$order_status.'</td></tr>';
		            echo "</table><br>";
		            
		            
		            	//------------------------------Aborted Mail----------------------------------------
		         $mail  = new PHPMailer();
                 ob_start(); //Turn on output buffering
				 ?>
				 <p>Hello <?php echo $student_name; ?>,</p><br>
                
                  <p>You Have Canceled This Transaction,please verify your course fee 
                  information and resend payment <?php echo $T_B_Amount; ?>.</p>
                  
                  <p>Your Transaction ID for this payment is <?php echo $paymentID; ?>
                    <p>Your Fee Paid Amount is : <?php echo $T_B_Amount; ?> </p> 
					<p>Course Name : <?php echo $course; ?> </p>
					<p>Fees Type : <?php echo $temp1['fees_type']; ?> </p>
					
					<p>Used Payment Gateway : PayPhi </p>
				  
			    <p>Thank you and see you soon.<br>
				  Regards,<br>
				  <b>Team MIT-School of Distance Education</b></p>
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
						
						$mail->SetFrom('admissions@mitsde.com', 'MIT-School of Distance Education');
						
						$mail->AddReplyTo('admissions@mitsde.com', 'No-Reply');
						
						$mail->Subject    = "Canceled This Transaction";
						
						$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test
						
						$mail->MsgHTML($body);
						$mail->SetLanguage("en", 'includes/phpMailer/language/');
						$address = $email_id;
						$mail->AddAddress($address);
				
						
						
						$mail->AddBCC('sanjay.gaikwad@mitsde.com');
							$mail->AddBCC('teamfeecollections@mitsde.com');
					    $mail->AddBCC('accounts.mitsde@mitpune.edu.in');
						$mail->AddBCC('shivraj.pachawadkar@mitsde.com');
						
						
						
						
						
						//$mail->AddAttachment("sept12120568.pdf");      // attachment
						//$mail->AddAttachment("images/phpmailer_mini.gif"); // attachment
						
						$mail->Send();
		  //------------------------------Aborted Mail END----------------------------------------
		
		//---------------------------------------FOR DELETE FORM TEMP TABLE----------------------
		$deletetemp=mysql_query("DELETE FROM `temp` WHERE T_LeadID='".$LeadID[1]."' and tranID='".$oderID[1]."'");
		//---------------------------------------FOR DELETE FORM TEMP TABLE------END----------------
	
	}
	else if($order_status!="Transaction Rejected" || $order_status!="Transaction successful")
	{
		echo "<br><h3>Thank You for Payment.</h3>.";
		
		echo "<br><h5 style='color:red'>The transaction has been declined. Please try again</h5>";
		
		
		 echo "<table cellspacing=4 cellpadding=4>";
		          
		            echo "</br>------------------Fee Payment Details----------------------";
		            
		          echo '</br><tr><td>Student Name :</td><td>'.$student_name.'</td></tr>';
		            echo '<tr><td>Email ID :</td><td>'.$temp1['email_id'].'</td></tr>';
		            echo '<tr><td>Mobile No :</td><td>'.$temp1['phone'].'</td></tr>';
		            echo '<tr><td>Course :</td><td>'.$temp1['course'].'</td></tr>';
		            echo '<tr><td>Fees Type :</td><td>'.$temp1['fees_type'].'</td></tr>';
		            echo '<tr><td>Pay Fee :</td><td>'.$T_B_Amount.'</td></tr>';
			    	echo '<tr><td>Payment ID :</td><td>'.$paymentID.'</td></tr>';
		            echo '<tr><td>Payment Status :</td><td style="color:#4AD300;">'.$order_status.'</td></tr>';
		            echo "</table><br>";
		            
		            //------------------------------Failure Mail----------------------------------------
		         $mail  = new PHPMailer();
                 ob_start(); //Turn on output buffering
				 ?>
				 <p>Hello <?php echo $student_name; ?>,</p><br>
                
                  <p>Unfortunately your most recent invoice payment id was declined. This could be due to a change in your card number or your card expiring, cancelation of your credit card / debit card, or the bank not recognizing the payment and taking action to prevent it,
                  please verify your billing information and resend payment <?php echo $T_B_Amount; ?>.</p>
                  
                  <p>Your Transaction ID <?php echo $paymentID; ?> for this fee is <?php echo $T_B_Amount; ?></p>
                  <p>Course Name : <?php echo $temp1['course']; ?> </p> 
                  <p>Payment Getway : PayPhi </p> <br />
					
			    <p>Thank you and see you soon.<br>
				  Regards,<br>
				  <b>Team MIT-School of Distance Education</b></p>
				 <?php
		           $body  = ob_get_clean();
						  $mail->IsSMTP(); // telling the class to use SMTP
						 // $mail->Mailer = "mail";
						  $mail->SMTPDebug  = 0;                     // enables SMTP debug information (for testing) // 1 = errors and messages
						// $mail->SMTPSecure = "ssl";                 // sets the prefix to the servier                                          // 2 = messages only
						 $mail->SMTPAuth   = true;                  // enable SMTP authentication
						 $mail->SMTPSecure = "tls";                 // sets the prefix to the servier
                        $mail->Host       = "email-smtp.us-east-1.amazonaws.com";      // sets GMAIL as the SMTP server
                        $mail->Port       = 2587;                   // set the SMTP port for the GMAIL
                        $mail->Username   = "AKIA5OQ6466FZWEYNNVJ";  // GMAIL username
                        $mail->Password   = "BB8uQenn6fCEjW791mFxeUgQ39xwI/9PEBDPz7uasG58";            // GMAIL password
						
						$mail->SetFrom('admissions@mitsde.com', 'MIT-School of Distance Education');
						
						$mail->AddReplyTo('admissions@mitsde.com', 'No-Reply');
						
						$mail->Subject    = "Current Transaction is Failed";
						
						$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test
						
						$mail->MsgHTML($body);
						$mail->SetLanguage("en", 'includes/phpMailer/language/');
						$address = $email_id;
						$mail->AddAddress($address);
				
						
						
						$mail->AddBCC('sanjay.gaikwad@mitsde.com');
							$mail->AddBCC('teamfeecollections@mitsde.com');
					    $mail->AddBCC('accounts.mitsde@mitpune.edu.in');
						$mail->AddBCC('shivraj.pachawadkar@mitsde.com');
						
						
						
						
						
						//$mail->AddAttachment("sept12120568.pdf");      // attachment
						//$mail->AddAttachment("images/phpmailer_mini.gif"); // attachment
						
						$mail->Send();
		  //------------------------------Failure Mail END----------------------------------------
		
		//---------------------------------------FOR DELETE FORM TEMP TABLE----------------------
		
		$deletetemp=mysql_query("DELETE FROM `temp` WHERE T_LeadID='".$LeadID[1]."' and tranID='".$oderID[1]."'");
		//---------------------------------------FOR DELETE FORM TEMP TABLE------END----------------
		      
		      
	}
	else
	{
		echo "<br>Security Error. Illegal access detected";
	
	}

	
?>
  
      

			       
			   </div>
			     
			 </div>
	</section>
  </div>
  <!-- end main-content -->

  <?php include "footer.php"?>


<!-- footer end  -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/bootstrap-select.min.js"></script>
<script src="assets/js/slick.min.js"></script>
<script src="assets/js/common.js"></script>
<script src="assets/js/course-slider.js"></script>

</body>
</html>
