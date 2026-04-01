<?php 
include "php/header2.php";


require 'class.phpmailer.php'; 
require 'class.smtp.php';

$post = file_get_contents('php://input');
$string = $post;

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

// Print the converted variables
/*echo "</br>secureHash: " . $secureHash . "\n";
echo "</br>respDescription: " . $order_status . "\n";
echo "</br>merchantId: " . $merchantId . "\n";
echo "</br>paymentID: " . $paymentID . "\n";
echo "</br>merchantTxnNo: " . $merchantTxnNo . "\n";
echo "</br>paymentDateTime: " . $paymentDateTime . "\n";
echo "</br>txnID: " . $txnID . "\n";
echo "</br>responseCode: " . $responseCode . "\n";*/

include_once "php/db.php";

//echo "</br>select * from temp where tranID='".$merchantTxnNo."'";

$temp1 = mysqli_fetch_array(mysqli_query($connection,"select * from temp where tranID='".$merchantTxnNo."'"));
//$getTemprow=mysqli_fetch_array($temp1);

$LeadID=$temp1['T_LeadID'];
$StudentName=$temp1['student_name'];
$email_id=$temp1['email_id'];
$phone=$temp1['phone'];
$course=$temp1['course'];
$fees_type=$temp1['fees_type'];
$T_installmentNo=$temp1['T_installmentNo'];
$T_B_Amount=$temp1['T_B_Amount'];
$tranID=$temp1['tranID'];


$getcourse=mysqli_query($connection,"SELECT ERPLeadID,CourseID,SpecializationID,desciplines FROM `student` WHERE `memberID` = '".$LeadID."'");
                 $row=mysqli_fetch_array($getcourse);
                
                 $courses_name=$row['desciplines'];
                 $s_ID=$row['SpecializationID'];
                 $ERPLeadID=$row['ERPLeadID'];
                 
                 
              $getcourseprice=mysqli_query($connection,"SELECT program_id,lumpsum_amount FROM `tbl_courses` WHERE `courses_name` = '".$courses_name."'");
              $row1=mysqli_fetch_array($getcourseprice);
              $lumpsumFees=$row1['lumpsum_amount'];
              $program_id=$row1['program_id'];
              
              if($Fee1<>$lumpsumFees)
              {
               $feetype="Instalment";
               //$installmentinformation="Next Instalment needs to be paid within 3 months duration from first payment.";
              }
              else
              {
                $feetype="Lump Sum";
              }
               
              $getprogramdetails=mysqli_query($connection,"SELECT * FROM `tbl_program` WHERE `programcode` = '".$program_id."'");
              $row2=mysqli_fetch_array($getprogramdetails);
             $duration=$row2['duration'];

//die;
?>
<!DOCTYPE html>
<html dir="ltr" lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">


<title>Payment Status</title>

<!-- Favicon and Touch Icons -->
<link href="../media/favicon.png" rel="shortcut icon" type="image/png">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<style>


.rate-area {
    float:left;
    border-style: none;
}

.rate-area:not(:checked) > input {
    position:absolute;
    top:-9999px;
    clip:rect(0,0,0,0);
}

.rate-area:not(:checked) > label {
    float: right;
    width: .80em;
    overflow: hidden;
    white-space: nowrap;
    cursor: pointer;
    font-size: 40px;
    line-height: 32px;
    color: lightgrey;
    margin-bottom: 10px !important;
}

.rate-area:not(:checked) > label:before {
    content: '★';
}

.rate-area > input:checked ~ label {
    color: #e8262d;
    text-shadow: none;
}

.rate-area:not(:checked) > label:hover,
.rate-area:not(:checked) > label:hover ~ label {
    color: #e8262d;
    
}

.rate-area > input:checked + label:hover,
.rate-area > input:checked + label:hover ~ label,
.rate-area > input:checked ~ label:hover,
.rate-area > input:checked ~ label:hover ~ label,
.rate-area > label:hover ~ input:checked ~ label {
    color: #e8262d;
    text-shadow: none;
    
}

.rate-area > label:active {
    position:relative;
    top:0px;
    left:0px; 
}
</style>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel='stylesheet' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'>
	<link rel='stylesheet' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css'>
	<link rel='stylesheet' href='https://raw.githubusercontent.com/kartik-v/bootstrap-star-rating/master/css/star-rating.min.css'>



</head>
<body class="">
<div id="wrapper" class="clearfix">
  <!-- preloader -->
 
  
  <!-- Header -->
  

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
	      // echo "</br>select * from temp where email_id='".$StudentEmailID[1]."' and tranID='".$oderID[1]."'";
		  
		 
		   //$temp1 = mysqli_fetch_array(mysqli_query($connection,"select * from temp where email_id='".$StudentEmailID[1]."' and tranID='".$oderID[1]."'"));
	       	$trchk = mysqli_num_rows(mysqli_query($connection,"select * from tbl_transactions_details where `transaction_id`='".$paymentID."'"));
			
			$orchk = mysqli_num_rows(mysqli_query($connection,"select * from tbl_transactions_details where `order_id`='".$merchantTxnNo ."'"));
			
			//	echo "</br>INSERT INTO `tbl_transactions_details` (`id`, `memberID`, `Name`, `Mobile_no`, `email`, `courseid`, `fees_type`, `ins_1_amt`, `ins_2_amt`, `ins_3_amt`, `ins_1_date`, `ins_2_date`, `ins_3_date`, `pay_type`, `payment_source`, `transaction_id`, `order_id`, `UTR_number`, `payment_verification`) VALUES (NULL, '$LeadID[1]', '$StudentName[1]', '$StudentMob[1]', '$StudentEmailID[1]', '$Studentcours[1]', 'fresh admission', '$dotamt[0]', '0', '0', '$tdate', '0000-00-00', '0000-00-00', 'online', 'HDFC', '$transationID[1]', '$oderID[1]', NULL,'Not_Verified')";		
		if($orchk>0 || $trchk >0 )
		  {
		  echo "</br>ERROR: Duplicate Entry<br>";
		  }
		  elseif($tranID !=$merchantTxnNo )
		     {
			   echo "</br>ERROR: Invalid Response (orderID or Amount not matching)<br>";
		 
		     }
		     else
		     {
		     echo "<br><h3>Thank You for Payment.</h3>.";
		            $tdate= date("Y/m/d");
		            
		            
		            
		            
	 mysqli_query($connection,"UPDATE `student` SET `terms` = '1', `transactid` = '$paymentID',	amount='".$T_B_Amount."', `isPayment` = '1', `dddate` = 'NULL', `ddnumber` = 'NULL', `bankname` ='NULL', `paymenttype`='3',formstatus='payment done',lastPage='printformvalue.php',paydate=NOW() WHERE `email` = '".$email_id."'");

	
            	// echo "</br>INSERT INTO `tbl_transactions_details` (`id`, `memberID`, `ERPLeadID`, `Name`, `Mobile_no`, `email`, `courseid`, `SpecializationID`, `FeeHeadID`, `fees_type`, `ins_1_amt`, `ins_2_amt`, `ins_3_amt`, `ClearedDate`, `ins_1_date`, `ins_2_date`, `ins_3_date`, `pay_type`, `payment_source`, `PayerBankID`, `transaction_id`, `order_id`, `UTR_number`, `payment_verification`, `PayeeInstituteID`, `PayeeBankID`, `PayeeACNo`, `PayeeACName`, `PayeeBranch`, `PayeeBankAddress`, `PayeeIFSCCode`, `UserId`, `CurrencyID`, `S_Flag`, `response`, `F_Flag`) VALUES (NULL, '$LeadID[1]','$ERPLeadID','$StudentName[1]', '$StudentMob[1]', '$StudentEmailID[1]', '$Studentcours[1]', '$s_ID', '60', 'InstallmentI', '$dotamt[0]', '0', '0', '$tdate', '$tdate', '0000-00-00', '0000-00-00', 'online', 'HDFC', '1', '$transationID[1]', '$oderID[1]', NULL, 'Not_Verified', '16', '1', '50100267576292', 'Pune', 'Mayur Colony Kothrud Pune name', 'Mayur Colony Kothrud Pune address', 'HDFC0000149', NULL, NULL, '0', NULL, '1')";
//die;
   mysqli_query($connection,"INSERT INTO `tbl_transactions_details` (`id`, `memberID`,`ERPLeadID`, `Name`, `Mobile_no`, `email`, `courseid`, `SpecializationID`, `FeeHeadID`, `fees_type`, `ins_1_amt`, `ins_2_amt`, `ins_3_amt`, `ClearedDate`, `ins_1_date`, `ins_2_date`, `ins_3_date`, `pay_type`, `payment_source`, `PayerBankID`, `transaction_id`, `order_id`, `UTR_number`, `payment_verification`, `PayeeInstituteID`, `PayeeBankID`, `PayeeACNo`, `PayeeACName`, `PayeeBranch`, `PayeeBankAddress`, `PayeeIFSCCode`, `UserId`, `CurrencyID`, `S_Flag`, `response`, `F_Flag`) VALUES (NULL, '$LeadID','$ERPLeadID','$StudentName', '$phone', '$email_id', '$course', '$s_ID', '60', 'InstallmentI', '$T_B_Amount', '0', '0', '$tdate', '$tdate', '0000-00-00', '0000-00-00', 'online', 'HDFC', '1', '$paymentID', '$merchantTxnNo', NULL, 'Not_Verified', '16', '1', '50100267576292', 'Pune', 'Mayur Colony Kothrud Pune name', 'Mayur Colony Kothrud Pune address', 'HDFC0000149', NULL, NULL, '0', NULL, '1')");
	
	

				  
				  
		
		           echo "<table cellspacing=4 cellpadding=4>";
		          
		            echo "</br>------------------Fee Payment Details----------------------";
		            
		          
                  
		            echo '</br><tr><td>Student Name :</td><td>'.$StudentName.'</td></tr>';
		            echo '<tr><td>Email ID :</td><td>'.$email_id.'</td></tr>';
		            echo '<tr><td>Mobile No :</td><td>'.$phone.'</td></tr>';
		            echo '<tr><td>Course :</td><td>'.$course.'</td></tr>';
		            echo '<tr><td>Transation ID :</td><td>'. $paymentID.'</td></tr>';
		            echo '<tr><td>Pay Fee :</td><td>'.$T_B_Amount.'</td></tr>';
		            echo '<tr><td>Payment Status :</td><td style="color:#4AD300;">'.$order_status.'</td></tr>';
		            echo "</table><br>";
		            
		           
		            
		            //------------------------------Success Mail----------------------------------------
		       $mail  = new PHPMailer();
                 ob_start(); //Turn on output buffering
				 ?>
				 <p>Hello <?php echo $StudentName; ?>,<br>
                 Congratulations!</p>
                  <p>We would like to take this moment to thank you for successfully submitting your application with MIT-School of Distance Education. 
				        We wish to confirm the receipt of the payment towards the admission process.</p>
                     <p>Your Transaction ID for this payment is <?php echo $paymentID; ?>
                     
                     <p>If you have any questions, please contact us at admissions@mitsde.com or on campussupport@mitsde.com or call us on +91-772-201-7705</p>
					 <p><b>Please Find below details confirmed by you before making the payment:-</b></p>
                     <table border="1">
                         <tr>
                             <td>
                     <p>1) Course & Specialization- <b><?php echo  $course;?> (<?php echo $duration; ?>)</b></p>
                     <p>2) Amount Paid –INR <b><?php echo $T_B_Amount; ?> /-</b></p>
                     <p>3) Payment Option - <b><?php echo $feetype;   if ($feetype=="Instalment") echo "\x20(Next Instalment needs to be paid within 3 months duration from first payment.)"; ?></b></p>
                     <p>4) Exam fees – INR 500 per paper (applicable at the time of examination)</p>
                     <p>5) Project fees- INR 1,500 (applicable at the time of submitting project)</p>
                     
                     <p>Referral Policy*</p>
                     <p>When you refer your friend to take any program at MITSDE, then you & your friend are eligible for a referral benefit of INR 3,000 /- each</p>
                     </td>
                     </tr>
                     </table>
				<p>Thank you and see you soon.<br>
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
						
						$mail->SetFrom('admissions@mitsde.com', 'MIT-School of Distance Education');
						
						$mail->AddReplyTo('admissions@mitsde.com', 'No-Reply');
						
						$mail->Subject    = "Your application with MIT SDE";
						
						$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test
						
						$mail->MsgHTML($body);
						$mail->SetLanguage("en", 'includes/phpMailer/language/');
						$address = $email_id;
						$mail->AddAddress($address);
				
						
						
						$mail->AddBCC('umesh.ghatale@mitsde.com');
						
						$mail->AddBCC('william.murmu@mitsde.com');
						
						
						$mail->AddBCC('sanjay.gaikwad@mitsde.com');
						
						//$mail->AddAttachment("sept12120568.pdf");      // attachment
						//$mail->AddAttachment("images/phpmailer_mini.gif"); // attachment
						
						$mail->Send();
		  //------------------------------Success Mail END----------------------------------------
		            
		            
					
					//---------------------------------------FOR DELETE FORM TEMP TABLE----------------------
		$deletetemp=mysqli_query($connection,"DELETE FROM `temp` WHERE T_LeadID='".$LeadID."' and tranID='".$merchantTxnNo."'");
		             //---------------------------------------FOR DELETE FORM TEMP TABLE------END----------------
			   //exit();
			    }
		  
			
				
			
			
	}
	else if($order_status==="Transaction Rejected")
	{
		
		echo "<br><h3>You Have Canceled This Transaction.</h3>.";
		
		 echo "<table cellspacing=4 cellpadding=4>";
		          
		            echo "</br>------------------Fee Payment Details----------------------";
		            
		          echo '</br><tr><td>Student Name :</td><td>'.$StudentName.'</td></tr>';
		            echo '<tr><td>Email ID :</td><td>'.$email_id.'</td></tr>';
		            echo '<tr><td>Mobile No :</td><td>'.$phone.'</td></tr>';
		            echo '<tr><td>Course :</td><td>'.$course.'</td></tr>';
		            echo '<tr><td>Transation ID :</td><td>'. $paymentID.'</td></tr>';
		            echo '<tr><td>Pay Fee :</td><td>'.$T_B_Amount.'</td></tr>';
		            echo '<tr><td>Payment Status :</td><td style="color:#4AD300;">'.$order_status.'</td></tr>';
		            echo "</table><br>";
		            
		             //------------------------------Aborted Mail----------------------------------------
		         $mail  = new PHPMailer();
                 ob_start(); //Turn on output buffering
				 ?>
				 <p>Hello <?php echo $StudentName; ?>,</p><br>
                
                  <p>You Have Canceled This Transaction,please verify your course fee 
                  information and resend payment <?php echo $T_B_Amount; ?>.</p>
                  
                  <p>Your Transaction ID <?php echo $paymentID; ?> for this fee is <?php echo $T_B_Amount; ?></p>
                  <p>Course Name : <?php echo $course; ?> </p> 
				  <p>Payment Getway : PayPhi </p> </br>	
				  
			    <p>Thank you and see you soon.<br>
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
						
						$mail->SetFrom('admissions@mitsde.com', 'MIT-School of Distance Education');
						
						$mail->AddReplyTo('admissions@mitsde.com', 'No-Reply');
						
						$mail->Subject    = "Canceled This Transaction";
						
						$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test
						
						$mail->MsgHTML($body);
						$mail->SetLanguage("en", 'includes/phpMailer/language/');
						$address = $email_id;
						$mail->AddAddress($address);
				
						
						
						$mail->AddBCC('abhishek.kalyana@mitsde.com');
						$mail->AddBCC('umesh.ghatale@mitsde.com');
						
						$mail->AddBCC('sanjay.gaikwad@mitsde.com');
						
						
						
						
						
						//$mail->AddAttachment("sept12120568.pdf");      // attachment
						//$mail->AddAttachment("images/phpmailer_mini.gif"); // attachment
						
						$mail->Send();
		  //------------------------------Aborted Mail END----------------------------------------
		
		//---------------------------------------FOR DELETE FORM TEMP TABLE----------------------
		$deletetemp=mysqli_query($connection,"DELETE FROM `temp` WHERE T_LeadID='".$LeadID."' and tranID='".$merchantTxnNo."'");
		//---------------------------------------FOR DELETE FORM TEMP TABLE------END----------------
	
	}
	else if($order_status!="Transaction Rejected" || $order_status!="Transaction successful")
	{
		echo "<br><h3>Payment is Failure .</h3>.";
		
		echo "<br><h5 style='color:red'>The transaction has been declined. Please try again</h5>";
		
		
		 echo "<table cellspacing=4 cellpadding=4>";
		          
		            echo "</br>------------------Fee Payment Details----------------------";
		            
		           echo '</br><tr><td>Student Name :</td><td>'.$StudentName.'</td></tr>';
		            echo '<tr><td>Email ID :</td><td>'.$email_id.'</td></tr>';
		            echo '<tr><td>Mobile No :</td><td>'.$phone.'</td></tr>';
		            echo '<tr><td>Course :</td><td>'.$course.'</td></tr>';
		            echo '<tr><td>Transation ID :</td><td>'. $paymentID.'</td></tr>';
		            echo '<tr><td>Pay Fee :</td><td>'.$T_B_Amount.'</td></tr>';
		            echo '<tr><td>Payment Status :</td><td style="color:#4AD300;">'.$order_status.'</td></tr>';
		            echo "</table><br>";
		
		      
		      
		      //------------------------------Failure Mail----------------------------------------
		         $mail  = new PHPMailer();
                 ob_start(); //Turn on output buffering
				 ?>
				 <p>Hello <?php echo $StudentName; ?>,</p>
                
                  <p>Unfortunately your most recent invoice payment id was declined. This could be due to a change in your card number or your card expiring, cancelation of your credit card / debit card, or the bank not recognizing the payment and taking action to prevent it,
                  please verify your billing information and resend payment <?php echo $T_B_Amount; ?>.</p>
                  
                  <p>Your Transaction ID <?php echo $paymentID; ?> for this fee is <?php echo $T_B_Amount; ?></p>
                  <p>Course Name : <?php echo $course; ?> </p> 
                  <p>Payment Getway : PayPhi </p> <br />
					
			    <p>Thank you and see you soon.<br>
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
						
						$mail->SetFrom('admissions@mitsde.com', 'MIT-School of Distance Education');
						
						$mail->AddReplyTo('admissions@mitsde.com', 'No-Reply');
						
						$mail->Subject    = "Current Transaction is Failed";
						
						$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test
						
						$mail->MsgHTML($body);
						$mail->SetLanguage("en", 'includes/phpMailer/language/');
						$address = $email_id;
						$mail->AddAddress($address);
				
						
						
						$mail->AddBCC('abhishek.kalyana@mitsde.com');
						$mail->AddBCC('umesh.ghatale@mitsde.com');
						
						$mail->AddBCC('sanjay.gaikwad@mitsde.com');
						
						
						
						
						
						//$mail->AddAttachment("sept12120568.pdf");      // attachment
						//$mail->AddAttachment("images/phpmailer_mini.gif"); // attachment
						
						$mail->Send();
		  //------------------------------Failure Mail END----------------------------------------
		      
		
		
		
		//---------------------------------------FOR DELETE FORM TEMP TABLE----------------------
		
		$deletetemp=mysqli_query($connection,"DELETE FROM `temp` WHERE T_LeadID='".$LeadID."' and tranID='".$merchantTxnNo."'");
		//---------------------------------------FOR DELETE FORM TEMP TABLE------END----------------
		      
		      
	}
	else
	{
		echo "<br>Security Error. Illegal access detected";
	
	}

	

	echo "</table><br>";
	echo "</center>";
?>
  
      

			       
			   </div>
			     
			 </div>
	</section>
  </div>
 
</div>
<!-- Advanced Tables Feedback -->
  <center>
                    <div class="panel panel-default" >
                        <div class="panel-heading">
                          <h4>Your Valuable Feedback is needed above service request</h4>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table id="example" class="display nowrap" style="width:100%">
                                    
                                    <tbody>

                                        

	                                       <form action="feedd.php" method="post">
	                        <tr>
	                         <td>
	                           <input type="hidden" name='leadid' value="<?php echo $LeadID[1]; ; ?>"> 
                             <input type="hidden" name='emailid' value="<?php echo $StudentEmailID[1]; ?>">
                             <input type="hidden" name='phone' value="<?php echo $StudentMob[1];  ?>">
                             <input type="hidden" name='payfees' value="<?php echo $dotamt[0];  ?>">
                             </td>
                             </tr>
<tr>
    <td>
<ul class="rate-area" style="padding-right: 268px;">
  <input type="radio" id="1" name="crating" value="5"  >
<label for="1" title="Amazing">5 stars</label>
<input type="radio" id="2" name="crating" value="4" >
<label for="2" title="Good">4 stars</label>
<input type="radio" id="3" name="crating" value="3" >
<label for="3" title="Average">3 stars</label>
<input type="radio" id="4" name="crating" value="2">
<label for="4" title="Not Good">2 stars</label>
 <input type="radio" id="5" required="" name="crating" value="1" aria-required="true"  >
<label for="5" title="Bad">1 star</label>
              </ul>
              </td>
  </tr>            



<script>
    $('input[type=radio]').click(function(e) {
		
        var rate_value = $(this).val(); 
        $('.result').html(rate_value);
		
    });
	
</script>
 <tr align="center">
	       <td><input type="submit" class="btn btn-info" name="feedback" value="submit feedback"></td>

</tr>

                                          
                                        </tbody>
                                    </table>
                                    </form>
                                </div>
                                
                            </div>
                        </div>
                        </center>
                        <!--End Advanced Tables -->


</body>
</html>