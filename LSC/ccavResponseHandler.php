<?php include('Crypto.php');
include "php/header2.php";
include_once "php/db.php";


require 'class.phpmailer.php'; 
require 'class.smtp.php';

    //$workingKey='8AFD593D347F31B32FFA30D457134633';
	//$workingKey='FF2048EE9548EAE83BF4797292611691';		//Working Key should be provided here.
	$workingKey='277C1DEFA1388ACD68B11FE6A467A577';		//Working Key should be provided here.
	
	
	$encResponse=$_POST["encResp"];			//This is the response sent by the CCAvenue Server
	$rcvdString=decrypt($encResponse,$workingKey);		//Crypto Decryption used as per the specified working key.
	
	$order_status="";
	
	$decryptValues=explode('&', $rcvdString);
	$dataSize=sizeof($decryptValues);

  
     $oderID=explode('=',$decryptValues[0]);
    $oderID[1];
     //echo "Order ID= ".$oderID[1]."<br>";

    $transationID=explode('=',$decryptValues[1]);
     $transationID[1];

     $LeadID=explode('=',$decryptValues[28]);
     $LeadID[1];
	 
	 $amt=explode('=',$decryptValues[10]);
     $amt[1];
	  
     $dotamt=explode('.',$amt[1]);
 	$dotamt[0];
     
     
     $StudentName=explode('=',$decryptValues[19]);
         $StudentName[1];
		           
	 $StudentEmailID=explode('=',$decryptValues[18]);
       $StudentEmailID[1];
		
	$StudentMob=explode('=',$decryptValues[25]);
        $StudentMob[1];
		
	$Studentcours=explode('=',$decryptValues[26]);
            $Studentcours[1];
		
	$Fees=explode('=',$decryptValues[35]);
     $Fees[1];
		$Fee1 = rtrim(rtrim($Fees[1], '0'), '.');//$Fees[1];
	$Payment_status=explode('=',$decryptValues[3]);
            $Payment_status[1];

                 $getcourse=mysqli_query($connection,"SELECT ERPLeadID,CourseID,SpecializationID FROM `student` WHERE `memberID` = '".$LeadID[1]."'");
                 $row=mysqli_fetch_array($getcourse);
                 //$row['CourseID'];
                 $s_ID=$row['SpecializationID'];
                 $ERPLeadID=$row['ERPLeadID'];
                 
                 
              $getcourseprice=mysqli_query($connection,"SELECT program_id,lumpsum_amount FROM `tbl_courses` WHERE `courses_name` = '".$Studentcours[1]."'");
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

	for($i = 0; $i < $dataSize; $i++) 
	{
		$information=explode('=',$decryptValues[$i]);
		if($i==3)	$order_status=$information[1];
	}
      	


       if($order_status==="Success")
	{
	      // echo "</br>select * from temp where email_id='".$StudentEmailID[1]."' and tranID='".$oderID[1]."'";
		  
		 
		   $temp1 = mysqli_fetch_array(mysqli_query($connection,"select * from temp where email_id='".$StudentEmailID[1]."' and tranID='".$oderID[1]."'"));
	       	$trchk = mysqli_num_rows(mysqli_query($connection,"select * from tbl_transactions_details where `transaction_id`='".$transationID[1]."'"));
			
			$orchk = mysqli_num_rows(mysqli_query($connection,"select * from tbl_transactions_details where `order_id`='".$oderID[1]."'"));
			
			//	echo "</br>INSERT INTO `tbl_transactions_details` (`id`, `memberID`, `Name`, `Mobile_no`, `email`, `courseid`, `fees_type`, `ins_1_amt`, `ins_2_amt`, `ins_3_amt`, `ins_1_date`, `ins_2_date`, `ins_3_date`, `pay_type`, `payment_source`, `transaction_id`, `order_id`, `UTR_number`, `payment_verification`) VALUES (NULL, '$LeadID[1]', '$StudentName[1]', '$StudentMob[1]', '$StudentEmailID[1]', '$Studentcours[1]', 'fresh admission', '$dotamt[0]', '0', '0', '$tdate', '0000-00-00', '0000-00-00', 'online', 'HDFC', '$transationID[1]', '$oderID[1]', NULL,'Not_Verified')";		
		if($orchk>0 || $trchk >0 )
		  {
		  echo "</br>ERROR: Duplicate Entry<br>";
		  }
		  elseif($temp1['tranID'] !=$oderID[1] || $temp1['T_B_Amount'] != $dotamt[0] )
		     {
			   echo "</br>ERROR: Invalid Response (orderID or Amount not matching)<br>";
		 
		     }
		     else
		     {
		     echo "<br><h3>Thank You for Payment.</h3>.";
		            $tdate= date("Y/m/d");
		            
		            
		            
		            
	 mysqli_query($connection,"UPDATE `student` SET `terms` = '1', `transactid` = '$transationID[1]',	amount='".$dotamt[0]."', `isPayment` = '1', `dddate` = 'NULL', `ddnumber` = 'NULL', `bankname` ='NULL', `paymenttype`='3',formstatus='payment done',lastPage='printformvalue.php',paydate=NOW() WHERE `email` = '".$StudentEmailID[1]."'");

	
            	// echo "</br>INSERT INTO `tbl_transactions_details` (`id`, `memberID`, `ERPLeadID`, `Name`, `Mobile_no`, `email`, `courseid`, `SpecializationID`, `FeeHeadID`, `fees_type`, `ins_1_amt`, `ins_2_amt`, `ins_3_amt`, `ClearedDate`, `ins_1_date`, `ins_2_date`, `ins_3_date`, `pay_type`, `payment_source`, `PayerBankID`, `transaction_id`, `order_id`, `UTR_number`, `payment_verification`, `PayeeInstituteID`, `PayeeBankID`, `PayeeACNo`, `PayeeACName`, `PayeeBranch`, `PayeeBankAddress`, `PayeeIFSCCode`, `UserId`, `CurrencyID`, `S_Flag`, `response`, `F_Flag`) VALUES (NULL, '$LeadID[1]','$ERPLeadID','$StudentName[1]', '$StudentMob[1]', '$StudentEmailID[1]', '$Studentcours[1]', '$s_ID', '60', 'InstallmentI', '$dotamt[0]', '0', '0', '$tdate', '$tdate', '0000-00-00', '0000-00-00', 'online', 'HDFC', '1', '$transationID[1]', '$oderID[1]', NULL, 'Not_Verified', '16', '1', '50100267576292', 'Pune', 'Mayur Colony Kothrud Pune name', 'Mayur Colony Kothrud Pune address', 'HDFC0000149', NULL, NULL, '0', NULL, '1')";
//die;
   mysqli_query($connection,"INSERT INTO `tbl_transactions_details` (`id`, `memberID`,`ERPLeadID`, `Name`, `Mobile_no`, `email`, `courseid`, `SpecializationID`, `FeeHeadID`, `fees_type`, `ins_1_amt`, `ins_2_amt`, `ins_3_amt`, `ClearedDate`, `ins_1_date`, `ins_2_date`, `ins_3_date`, `pay_type`, `payment_source`, `PayerBankID`, `transaction_id`, `order_id`, `UTR_number`, `payment_verification`, `PayeeInstituteID`, `PayeeBankID`, `PayeeACNo`, `PayeeACName`, `PayeeBranch`, `PayeeBankAddress`, `PayeeIFSCCode`, `UserId`, `CurrencyID`, `S_Flag`, `response`, `F_Flag`) VALUES (NULL, '$LeadID[1]','$ERPLeadID','$StudentName[1]', '$StudentMob[1]', '$StudentEmailID[1]', '$Studentcours[1]', '$s_ID', '60', 'InstallmentI', '$dotamt[0]', '0', '0', '$tdate', '$tdate', '0000-00-00', '0000-00-00', 'online', 'HDFC', '1', '$transationID[1]', '$oderID[1]', NULL, 'Not_Verified', '16', '1', '50100267576292', 'Pune', 'Mayur Colony Kothrud Pune name', 'Mayur Colony Kothrud Pune address', 'HDFC0000149', NULL, NULL, '0', NULL, '1')");
	
	
	
//	mysqli_query($connection,"INSERT INTO `tbl_transactions_details` (`id`, `memberID`, `Name`, `Mobile_no`, `email`, `courseid`, `fees_type`, `ins_1_amt`, `ins_2_amt`, `ins_3_amt`, `ins_1_date`, `ins_2_date`, `ins_3_date`, `pay_type`, `payment_source`, `transaction_id`, `order_id`, `UTR_number`, `payment_verification`) VALUES (NULL, '$LeadID[1]', '$StudentName[1]', '$StudentMob[1]', '$StudentEmailID[1]', '$Studentcours[1]', 'fresh admission', '$dotamt[0]', '0', '0', '$tdate', '0000-00-00', '0000-00-00', 'online', 'HDFC', '$transationID[1]', '$oderID[1]', NULL,'Not_Verified')");
		  
		                        
		 			  
		/*	$insertO_tras= "INSERT INTO `OtherFeesTransaction` (`othr_id`,
				   `leadID`,`name`,`email`,`phone`,`CourseName`,`FeesType`,`amount`,`PayU_ID`,`transationDate`,`t_process_id`,`UTRNO`,  `payment_confirmation_status`)VALUES (NULL,'".$temp1['T_LeadID']."','".$temp1['student_name']."','".$temp1['email_id']."','".$temp1['phone']."', 
				   '".$temp1['course']."','".$temp1['fees_type']."','".$dotamt[0]."','".$transationID[1]."','".$tdate."','".$oderID[1]."',NULL,'Not Verify')";

                           mysqli_query($connection,$insertO_tras) or die('</br>Error, insert query failed222');*/
				  
				  
		
		           echo "<table cellspacing=4 cellpadding=4>";
		          
		            echo "</br>------------------Fee Payment Details----------------------";
		            
		          $StudentName=explode('=',$decryptValues[19]);
                  
		            echo '</br><tr><td>Student Name :</td><td>'.$StudentName[1].'</td></tr>';
		           
		            $StudentEmailID=explode('=',$decryptValues[18]);
                   
		            echo '<tr><td>Email ID :</td><td>'.$StudentEmailID[1].'</td></tr>';
		
		            $StudentMob=explode('=',$decryptValues[25]);
                   
		            echo '<tr><td>Mobile No :</td><td>'.$StudentMob[1].'</td></tr>';
		
		            $Studentcours=explode('=',$decryptValues[26]);
                   
		            echo '<tr><td>Course :</td><td>'.$Studentcours[1].'</td></tr>';
		
		            //$StudentFeesType=explode('=',$decryptValues[27]);
                   
		            echo '<tr><td>Transation ID :</td><td>'. $transationID[1].'</td></tr>';
		
		            $Fees=explode('=',$decryptValues[35]);
                   
		            echo '<tr><td>Pay Fee :</td><td>'.$Fees[1].'</td></tr>';
		
		            $Payment_status=explode('=',$decryptValues[3]);
                   
		            echo '<tr><td>Payment Status :</td><td style="color:#4AD300;">'.$Payment_status[1].'</td></tr>';
		          
		            echo "</table><br>";
		            
		           
		            
		            //------------------------------Success Mail----------------------------------------
		       $mail  = new PHPMailer();
                 ob_start(); //Turn on output buffering
				 ?>
				 <p>Hello <?php echo $StudentName[1]; ?>,<br>
                 Congratulations!</p>
                  <p>We would like to take this moment to thank you for successfully submitting your application with MIT-School of Distance Education. 
				        We wish to confirm the receipt of the payment towards the admission process.</p>
                     <p>Your Transaction ID for this payment is <?php echo $transationID[1]; ?>
                     
                     <p>If you have any questions, please contact us at admissions@mitsde.com or on campussupport@mitsde.com or call us on +91-772-201-7705</p>
					 <p><b>Please Find below details confirmed by you before making the payment:-</b></p>
                     <table border="1">
                         <tr>
                             <td>
                     <p>1) Course & Specialization- <b><?php echo  $Studentcours[1];?> (<?php echo $duration; ?>)</b></p>
                     <p>2) Amount Paid –INR <b><?php echo $Fees[1]; ?> /-</b></p>
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
		           /*$body  = ob_get_clean();
                          //$mail->Mailer = "mail";
                          $mail->IsSMTP(); // telling the class to use SMTP
                          //$mail->IsMail(); // telling the class to use SMTP
                          $mail->SMTPDebug  = 1;                     // enables SMTP debug information (for testing) // 1 = errors and messages
                        // $mail->SMTPSecure = "ssl";                 // sets the prefix to the servier                                          // 2 = messages only
                          $mail->SMTPAuth   = true;                  // enable SMTP authentication
                        $mail->SMTPSecure = "tls";                 // sets the prefix to the servier
                        $mail->Host       = "email-smtp.us-east-1.amazonaws.com";      // sets GMAIL as the SMTP server
                        $mail->Port       = 2587;                   // set the SMTP port for the GMAIL
                        $mail->Username   = "AKIA5OQ6466FZWEYNNVJ";  // GMAIL username
                        $mail->Password   = "BB8uQenn6fCEjW791mFxeUgQ39xwI/9PEBDPz7uasG58";  */          // GMAIL password
                        
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
                        $mail->Username   = "payonline@mitsde.com";  // GMAIL username
						$mail->Password   = "mitsde@123";            // GMAIL password
						
						$mail->SetFrom('admissions@mitsde.com', 'MIT-School of Distance Education');
						
						$mail->AddReplyTo('admissions@mitsde.com', 'No-Reply');
						
						$mail->Subject    = "Your application with MIT SDE";
						
						$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test
						
						$mail->MsgHTML($body);
						$mail->SetLanguage("en", 'includes/phpMailer/language/');
						$address = $StudentEmailID[1];
						$mail->AddAddress($address);
				
						
						
						$mail->AddBCC('umesh.ghatale@mitsde.com');
						$mail->AddBCC('sanjay.gaikwad@mitsde.com');
						$mail->AddBCC('william.murmu@mitsde.com');
						
					
						
						
						
						//$mail->AddAttachment("sept12120568.pdf");      // attachment
						//$mail->AddAttachment("images/phpmailer_mini.gif"); // attachment
						
						$mail->Send();
		  //------------------------------Success Mail END----------------------------------------
		            
		            
					
					//---------------------------------------FOR DELETE FORM TEMP TABLE----------------------
		$deletetemp=mysqli_query($connection,"DELETE FROM `temp` WHERE T_LeadID='".$LeadID[1]."' and tranID='".$oderID[1]."'");
		             //---------------------------------------FOR DELETE FORM TEMP TABLE------END----------------
			   //exit();
			    }
		  
			
				
			
			
	}
	else if($order_status==="Aborted")
	{
		
		echo "<br><h3>You Have Canceled This Transaction.</h3>.";
		
		 echo "<table cellspacing=4 cellpadding=4>";
		          
		            echo "</br>------------------Fee Payment Details----------------------";
		            
		          $StudentName=explode('=',$decryptValues[19]);
                  
		            echo '</br><tr><td>Student Name :</td><td>'.$StudentName[1].'</td></tr>';
		           
		            $StudentEmailID=explode('=',$decryptValues[18]);
                   
		            echo '<tr><td>Email ID :</td><td>'.$StudentEmailID[1].'</td></tr>';
		
		            $StudentMob=explode('=',$decryptValues[25]);
                   
		            echo '<tr><td>Mobile No :</td><td>'.$StudentMob[1].'</td></tr>';
		
		            $Studentcours=explode('=',$decryptValues[26]);
                   
		            echo '<tr><td>Course :</td><td>'.$Studentcours[1].'</td></tr>';
		
		            //$StudentFeesType=explode('=',$decryptValues[27]);
                   
		            //echo '<tr><td>Fees Type :</td><td>'.$StudentFeesType[1].'</td></tr>';
		             echo '<tr><td>Transation ID :</td><td>'. $transationID[1].'</td></tr>';
		
		            $Fees=explode('=',$decryptValues[35]);
                   
		            echo '<tr><td>Pay Fee :</td><td>'.$Fees[1].'</td></tr>';
		
		            $Payment_status=explode('=',$decryptValues[3]);
                   
		            echo '<tr><td>Payment Status :</td><td style="color:red">'.$Payment_status[1].'</td></tr>';
		          
		            echo "</table><br>";
		            
		             //------------------------------Aborted Mail----------------------------------------
		         $mail  = new PHPMailer();
                 ob_start(); //Turn on output buffering
				 ?>
				 <p>Hello <?php echo $StudentName[1]; ?>,</p><br>
                
                  <p>You Have Canceled This Transaction,please verify your course fee 
                  information and resend payment <?php echo $Fees[1]; ?>.</p>
                  
                  <p>Your Transaction ID <?php echo $transationID[1]; ?> for this fee is <?php echo $Fees[1]; ?></p>
                  <p>Course Name : <?php echo $Studentcours[1]; ?> </p> 
				  <p>Payment Getway : HDFC </p> </br>	
				  
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
                        $mail->Username   = "payonline@mitsde.com";  // GMAIL username
						$mail->Password   = "mitsde@123";            // GMAIL password
						
						$mail->SetFrom('admissions@mitsde.com', 'MIT-School of Distance Education');
						
						$mail->AddReplyTo('admissions@mitsde.com', 'No-Reply');
						
						$mail->Subject    = "Canceled This Transaction";
						
						$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test
						
						$mail->MsgHTML($body);
						$mail->SetLanguage("en", 'includes/phpMailer/language/');
						$address = $StudentEmailID[1];
						$mail->AddAddress($address);
				
						
						
						$mail->AddBCC('abhishek.kalyana@mitsde.com');
						$mail->AddBCC('sanjay.gaikwad@mitsde.com');
						$mail->AddBCC('umesh.ghatale@mitsde.com');
						
						
						
						
						
						//$mail->AddAttachment("sept12120568.pdf");      // attachment
						//$mail->AddAttachment("images/phpmailer_mini.gif"); // attachment
						
						$mail->Send();
		  //------------------------------Aborted Mail END----------------------------------------
		
		//---------------------------------------FOR DELETE FORM TEMP TABLE----------------------
		$deletetemp=mysqli_query($connection,"DELETE FROM `temp` WHERE T_LeadID='".$LeadID[1]."' and tranID='".$oderID[1]."'");
		//---------------------------------------FOR DELETE FORM TEMP TABLE------END----------------
	
	}
	else if($order_status==="Failure")
	{
		echo "<br><h3>Payment is Failure .</h3>.";
		
		echo "<br><h5 style='color:red'>The transaction has been declined. Please try again</h5>";
		
		
		 echo "<table cellspacing=4 cellpadding=4>";
		          
		            echo "</br>------------------Fee Payment Details----------------------";
		            
		          $StudentName=explode('=',$decryptValues[19]);
                  
		            echo '</br><tr><td>Student Name :</td><td>'.$StudentName[1].'</td></tr>';
		           
		            $StudentEmailID=explode('=',$decryptValues[18]);
                   
		            echo '<tr><td>Email ID :</td><td>'.$StudentEmailID[1].'</td></tr>';
		
		            $StudentMob=explode('=',$decryptValues[25]);
                   
		            echo '<tr><td>Mobile No :</td><td>'.$StudentMob[1].'</td></tr>';
		
		            $Studentcours=explode('=',$decryptValues[26]);
                   
		            echo '<tr><td>Course :</td><td>'.$Studentcours[1].'</td></tr>';
		
		            //$StudentFeesType=explode('=',$decryptValues[27]);
                   
		             echo '<tr><td>Transation ID :</td><td>'. $transationID[1].'</td></tr>';
		
		            $Fees=explode('=',$decryptValues[35]);
                   
		            echo '<tr><td>Pay Fee :</td><td>'.$Fees[1].'</td></tr>';
		
		            $Payment_status=explode('=',$decryptValues[3]);
                   
		            echo '<tr><td>Payment Status :</td><td style="color:red">'.$Payment_status[1].'</td></tr>';
		          
		            echo "</table><br>";
		
		      
		      
		      //------------------------------Failure Mail----------------------------------------
		         $mail  = new PHPMailer();
                 ob_start(); //Turn on output buffering
				 ?>
				 <p>Hello <?php echo $StudentName[1]; ?>,</p><br>
                
                  <p>Unfortunately your most recent invoice payment id was declined. This could be due to a change in your card number or your card expiring, cancelation of your credit card / debit card, or the bank not recognizing the payment and taking action to prevent it,
                  please verify your billing information and resend payment <?php echo $Fees[1]; ?>.</p>
                  
                  <p>Your Transaction ID <?php echo $transationID[1]; ?> for this fee is <?php echo $Fees[1]; ?></p>
                  <p>Course Name : <?php echo $Studentcours[1]; ?> </p> 
                  <p>Payment Getway : HDFC </p> <br />
					
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
                        $mail->Username   = "payonline@mitsde.com";  // GMAIL username
						$mail->Password   = "mitsde@123";            // GMAIL password
						
						$mail->SetFrom('admissions@mitsde.com', 'MIT-School of Distance Education');
						
						$mail->AddReplyTo('admissions@mitsde.com', 'No-Reply');
						
						$mail->Subject    = "Current Transaction is Failed";
						
						$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test
						
						$mail->MsgHTML($body);
						$mail->SetLanguage("en", 'includes/phpMailer/language/');
						$address = $StudentEmailID[1];
						$mail->AddAddress($address);
				
						
						
						$mail->AddBCC('william.murmu@mitsde.com');
						$mail->AddBCC('sanjay.gaikwad@mitsde.com');
						$mail->AddBCC('umesh.ghatale@mitsde.com');
						
						
						
						
						
						//$mail->AddAttachment("sept12120568.pdf");      // attachment
						//$mail->AddAttachment("images/phpmailer_mini.gif"); // attachment
						
						$mail->Send();
		  //------------------------------Failure Mail END----------------------------------------
		      
		
		
		
		//---------------------------------------FOR DELETE FORM TEMP TABLE----------------------
		
		$deletetemp=mysqli_query($connection,"DELETE FROM `temp` WHERE T_LeadID='".$LeadID[1]."' and tranID='".$oderID[1]."'");
		//---------------------------------------FOR DELETE FORM TEMP TABLE------END----------------
		      
		      
	}
	else
	{
		echo "<br>Security Error. Illegal access detected";
	
	}

	echo "<br><br>";

	echo "<table cellspacing=4 cellpadding=4>";
	for($i = 0; $i < $dataSize; $i++) 
	{
		$information=explode('=',$decryptValues[$i]);
	    //	echo '<tr><td>'.$information[0].'</td><td>'.urldecode($information[1]).'</td></tr>';
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





