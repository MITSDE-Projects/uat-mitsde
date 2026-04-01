<?php include('Crypto.php');
include "php/header2.php";
include_once "php/db.php";


require 'PHPMailer/class.phpmailer.php'; 
require 'PHPMailer/class.smtp.php';

    //$workingKey='8AFD593D347F31B32FFA30D457134633';
	//$workingKey='FF2048EE9548EAE83BF4797292611691';		//Working Key should be provided here.
	$workingKey='DC043516F6F3B974D64CE6970A15D053';		//Working Key should be provided here.
	
	
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
               //echo "</br>SELECT * FROM `tbl_program` WHERE `programcode` = '".$program_id."'";
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


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel='stylesheet' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'>
	<link rel='stylesheet' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css'>
	<link rel='stylesheet' href='https://raw.githubusercontent.com/kartik-v/bootstrap-star-rating/master/css/star-rating.min.css'>

<script>
function myFunction() {
  var checkBox = document.getElementById("myCheck");
  var text = document.getElementById("text");
  if (checkBox.checked == true){
    text.style.display = "block";
  } else {
     text.style.display = "none";
  }
}
</script>
<style>
        .emoji-list {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            margin-top: 20px;
            gap: 10px; /* Adds space between emojis */
        }
        .emoji-item {
            cursor: pointer;
            font-size: 2rem; /* Adjust size for smaller screens */
            padding: 10px;
            border: 2px solid #ddd;
            border-radius: 5px;
            transition: transform 0.2s, border-color 0.2s, background-color 0.2s;
            text-align: center; /* Center text within emoji */
        }
        .emoji-item:hover {
            transform: scale(1.1);
        }
        /* Color coding */
        .emoji-item[data-value="0"]
		{
			
            background-color: #ff0000; /* Light dark red */
           border-color: #004d00; /* Dark green */
			color: white;
        
		}
        .emoji-item[data-value="1"]
		{
		    background-color: #ff1a1a; /* Light dark red */
            border-color: #004d00; /* Dark green */
			color: white;	
		}
        .emoji-item[data-value="2"]
		{
			background-color: #ff3333; /* Light dark red */
            border-color: #004d00; /* Dark green */
			color: white;
		}
		
        .emoji-item[data-value="3"]
	    {
		    background-color: #ff4d4d; /* Light dark red */
            border-color: #004d00; /* Dark green */
			color: white;
	    }
        .emoji-item[data-value="4"]
		{
		    background-color: #ff6666; /* Light dark red */
            border-color: #004d00; /* Dark green */
			color: white;
	    }
        .emoji-item[data-value="5"]
		{
		    background-color: #ff8080; /* Light dark red */
            border-color: #004d00; /* Dark green */
			color: white;
	    }
        .emoji-item[data-value="6"]
		{
		    background-color: #ff9999; /* Light dark red */
            border-color: #004d00; /* Dark green */
			color: white;
	    }
        .emoji-item[data-value="7"]
		{
		    background-color: #ffcccc; /* Light dark red */
            border-color: #004d00; /* Dark green */
			color: white;
	    }
        .emoji-item[data-value="8"] 
		{
            background-color: #ffcccc; /* Light pink */
            border-color: #004d00; /* Dark green */
        }
        .emoji-item[data-value="9"] 
		{
            background-color: #228B22; /* Light green */
            border-color: #004d00; /* Dark green */
        }
        .emoji-item[data-value="10"] 
		{
            background-color: #008000; /* Dark green */
            border-color: #004d00; /* Dark green */
            color: white;
        }
        .selected {
            border-color: yellow;
            background-color: yellow; /* Light blue to highlight selected item */
        }
        .hidden {
            display: none;
        }
        

        /* Responsive design adjustments */
        @media (max-width: 576px) {
            .emoji-item {
                font-size: 1.5rem; /* Smaller emoji size on small screens */
                padding: 8px;
            }
        }
        @media (min-width: 577px) and (max-width: 768px) {
            .emoji-item {
                font-size: 1.75rem; /* Medium emoji size on medium screens */
                padding: 10px;
            }
        }
        @media (min-width: 769px) {
            .emoji-item {
                font-size: 2rem; /* Larger emoji size on large screens */
                padding: 12px;
            }
        }
    </style>

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
			
			//	echo "</br>INSERT INTO `tbl_transactions_details` (`id`, `memberID`, `Name`, `Mobile_no`, `email`, `courseid`, `fees_type`, `ins_1_amt`, `ins_2_amt`, `ins_3_amt`, `ins_1_date`, `ins_2_date`, `ins_3_date`, `pay_type`, `payment_source`, `transaction_id`, `order_id`, `UTR_number`, `payment_verification`) VALUES (NULL, '$LeadID[1]', '$StudentName[1]', '$StudentMob[1]', '$StudentEmailID[1]', '$Studentcours[1]', 'fresh admission', '$dotamt[0]', '0', '0', '$tdate', '0000-00-00', '0000-00-00', 'online', 'ICICI', '$transationID[1]', '$oderID[1]', NULL,'Not_Verified')";		
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

	
            	// echo "</br>INSERT INTO `tbl_transactions_details` (`id`, `memberID`, `ERPLeadID`, `Name`, `Mobile_no`, `email`, `courseid`, `SpecializationID`, `FeeHeadID`, `fees_type`, `ins_1_amt`, `ins_2_amt`, `ins_3_amt`, `ClearedDate`, `ins_1_date`, `ins_2_date`, `ins_3_date`, `pay_type`, `payment_source`, `PayerBankID`, `transaction_id`, `order_id`, `UTR_number`, `payment_verification`, `PayeeInstituteID`, `PayeeBankID`, `PayeeACNo`, `PayeeACName`, `PayeeBranch`, `PayeeBankAddress`, `PayeeIFSCCode`, `UserId`, `CurrencyID`, `S_Flag`, `response`, `F_Flag`) VALUES (NULL, '$LeadID[1]','$ERPLeadID','$StudentName[1]', '$StudentMob[1]', '$StudentEmailID[1]', '$Studentcours[1]', '$s_ID', '60', 'InstallmentI', '$dotamt[0]', '0', '0', '$tdate', '$tdate', '0000-00-00', '0000-00-00', 'online', 'ICICI', '1', '$transationID[1]', '$oderID[1]', NULL, 'Not_Verified', '16', '1', '50100267576292', 'Pune', 'Mayur Colony Kothrud Pune name', 'Mayur Colony Kothrud Pune address', 'HDFC0000149', NULL, NULL, '0', NULL, '1')";
//die;
   mysqli_query($connection,"INSERT INTO `tbl_transactions_details` (`id`, `memberID`,`ERPLeadID`, `Name`, `Mobile_no`, `email`, `courseid`, `SpecializationID`, `FeeHeadID`, `fees_type`, `ins_1_amt`, `ins_2_amt`, `ins_3_amt`, `ClearedDate`, `ins_1_date`, `ins_2_date`, `ins_3_date`, `pay_type`, `payment_source`, `PayerBankID`, `transaction_id`, `order_id`, `UTR_number`, `payment_verification`, `PayeeInstituteID`, `PayeeBankID`, `PayeeACNo`, `PayeeACName`, `PayeeBranch`, `PayeeBankAddress`, `PayeeIFSCCode`, `UserId`, `CurrencyID`, `S_Flag`, `response`, `F_Flag`) VALUES (NULL, '$LeadID[1]','$ERPLeadID','$StudentName[1]', '$StudentMob[1]', '$StudentEmailID[1]', '$Studentcours[1]', '$s_ID', '60', 'InstallmentI', '$dotamt[0]', '0', '0', '$tdate', '$tdate', '0000-00-00', '0000-00-00', 'online', 'ICICI', '1', '$transationID[1]', '$oderID[1]', NULL, 'Not_Verified', '16', '1', '50100267576292', 'Pune', 'Mayur Colony Kothrud Pune name', 'Mayur Colony Kothrud Pune address', 'HDFC0000149', NULL, NULL, '0', NULL, '1')");
	
	
	
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
                     <p>If you have any questions, please contact us at campussupport@mitsde.com</p>
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
                        
                         /*$body  = ob_get_clean();
						$mail->Mailer = "mail";
						  //$mail->IsSMTP(); // telling the class to use SMTP
						  $mail->SMTPDebug  = 1;                     // enables SMTP debug information (for testing) // 1 = errors and messages
						                                        // 2 = messages only
						 $mail->SMTPAuth   = true;                  // enable SMTP authentication
						$mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
						$mail->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
						$mail->Port       = 465;                   // set the SMTP port for the GMAIL 
						$mail->Username   = "payonline@mitsde.com";  // GMAIL username
						$mail->Password   = "mitsde@123";            // GMAIL password
						//$mail->g_smtp_host = 'smtp.gmail.com:465';
						//$mail->g_smtp_connection_mode = 'ssl';*/
						
						$mail->SetFrom('admissions@mitsde.com', 'MIT-School of Distance Education');
						
						$mail->AddReplyTo('admissions@mitsde.com', 'No-Reply');
						
						$mail->Subject    = "Your application with MIT SDE";
						
						$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test
						
						$mail->MsgHTML($body);
						$mail->SetLanguage("en", 'includes/phpMailer/language/');
						$address = $StudentEmailID[1];
						$mail->AddAddress($address);
				        $mail->AddBCC('abhishek.kalyana@mitsde.com');
						$mail->AddBCC('jayjeet.deshmukh@mitsde.com');
						$mail->AddBCC('sanjay.gaikwad@mitsde.com');
					    $mail->AddBCC('priti.thakre@mitsde.com');
						$mail->AddBCC('nivedita.dawate@mitsde.com');
						$mail->AddBCC('priyanka.kaul@mitsde.com');
						$mail->AddBCC('shivraj.pachawadkar@mitsde.com');
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
		  
			?>
			<script>
			    smartech('contact', 'LIST IDENTIFIER', {

                    'pk^email': "<?php echo $StudentEmailID[1];?>",

  });

                   smartech('identify', "<?php echo $StudentEmailID[1];?>");

                    smartech('dispatch', 'Payment Successful', {

                    'screen_name': 'application',

                    'email': "<?php echo $StudentEmailID[1];?>"

                    

                });
			    
			</script>
			
			<?php
			
				
			
			
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
				  <p>Payment Getway : ICICI </p> </br>	
				  
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
						$address = $StudentEmailID[1];
						$mail->AddAddress($address);
				
						
						$mail->AddBCC('abhishek.kalyana@mitsde.com');
						$mail->AddBCC('jayjeet.deshmukh@mitsde.com');
						$mail->AddBCC('sanjay.gaikwad@mitsde.com');
					    $mail->AddBCC('priti.thakre@mitsde.com');
						$mail->AddBCC('nivedita.dawate@mitsde.com');
						$mail->AddBCC('priyanka.kaul@mitsde.com');
						$mail->AddBCC('william.murmu@mitsde.com');
						
						
						
						
						
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
                  <p>Payment Getway : ICICI </p> <br />
					
			    <p>Thank you and see you soon.<br>
				  Regards,<br>
				  <b>Team MIT-School of Distance Education</b></p>
				 <?php
		            $body  = ob_get_clean();
						$mail->Mailer = "mail";
						  //$mail->IsSMTP(); // telling the class to use SMTP
						  $mail->SMTPDebug  = 1;                     // enables SMTP debug information (for testing) // 1 = errors and messages
						                                        // 2 = messages only
						 $mail->SMTPAuth   = true;                  // enable SMTP authentication
						$mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
						$mail->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
						$mail->Port       = 465;                   // set the SMTP port for the GMAIL 
						$mail->Username   = "payonline@mitsde.com";  // GMAIL username
						$mail->Password   = "mitsde@123";            // GMAIL password
						//$mail->g_smtp_host = 'smtp.gmail.com:465';
						//$mail->g_smtp_connection_mode = 'ssl';
						
						$mail->SetFrom('admissions@mitsde.com', 'MIT-School of Distance Education');
						
						$mail->AddReplyTo('admissions@mitsde.com', 'No-Reply');
						
						$mail->Subject    = "Current Transaction is Failed";
						
						$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test
						
						$mail->MsgHTML($body);
						$mail->SetLanguage("en", 'includes/phpMailer/language/');
						$address = $StudentEmailID[1];
						$mail->AddAddress($address);
				
						
						$mail->AddBCC('abhishek.kalyana@mitsde.com');
						$mail->AddBCC('jayjeet.deshmukh@mitsde.com');
						$mail->AddBCC('sanjay.gaikwad@mitsde.com');
					    $mail->AddBCC('priti.thakre@mitsde.com');
						$mail->AddBCC('nivedita.dawate@mitsde.com');
						$mail->AddBCC('priyanka.kaul@mitsde.com');
						$mail->AddBCC('william.murmu@mitsde.com');
						
						
						
						
						
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
                          <h4>Based on your experience with our admission process, how likely are you to recommend us on a scale from 0 to 10?</h4>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table id="example" class="display nowrap" style="width:100%">
                                    
                                    <tbody>

                                        

	                                       <form action="nps_process.php" method="post">
	                        <tr>
	                         <td>
	                           <input type="hidden" name='leadid' value="<?php echo $LeadID[1]; ; ?>"> 
                             <input type="hidden" name='emailid' value="<?php echo $StudentEmailID[1]; ?>">
                             <input type="hidden" name='phone' value="<?php echo $StudentMob[1];  ?>">
                             <input type="hidden" name='payfees' value="<?php echo $dotamt[0];  ?>">
                             </td>
                             </tr>
             <div class="form-group">
                <label for="npsRating"></label>
                <div id="emojiList" class="emoji-list">
                    <!-- Emoji items from 0 to 10 -->
                    <span class="emoji-item" data-value="0">😠 </br> 0 </br>Poor</span>
                    <span class="emoji-item" data-value="1">😡 </br>1</span>
                    <span class="emoji-item" data-value="2">😞 </br>2</span>
                    <span class="emoji-item" data-value="3">🙁 </br>3</span>
                    <span class="emoji-item" data-value="4">😟 </br>4</span>
                    <span class="emoji-item" data-value="5">😐 </br>5</span>
                    <span class="emoji-item" data-value="6">😕 </br>6</span>
                    <span class="emoji-item" data-value="7">😊 </br>7</span>
                    <span class="emoji-item" data-value="8">😃 </br>8</span>
                    <span class="emoji-item" data-value="9">😁 </br>9</span>
                    <span class="emoji-item" data-value="10">🥳 </br>10 </br>Good</span>
                </div>
                <input type="hidden" id="npsRating" name="npsRating" required>
            </div>

            <!-- Additional Feedback -->
            <div id="feedbackFields" class="hidden">
                <h4 class="mt-4">Areas of improvement ?</h4>
                <div class="form-group">
                    <label><input type="checkbox" name="Communication" value="Communication"> Resolution Accuracy</label>
                </div>
                <div class="form-group">
                    <label><input type="checkbox" name="Applicationform" value="Application form"> Application form</label>
                </div>
                <div class="form-group">
                    <label><input type="checkbox" name="Paymentoptions" value="Payment options" > Payment options</label>
                </div>
                <div class="form-group">
                    <label><input type="checkbox" name="Counselling" value="Counselling">Counselling</label>
                </div>
                <div class="form-group">
                    <label><input type="checkbox" name=chother id="myCheck" onclick="myFunction()"> Other</label>
                    
                    <p id="text" style="display:none"><label>Write your Suggestions:</label><textarea class="form-check-input form-group "  rows="10" cols="50" name="other"></textarea></p>
                </div>
                <button type="submit" name="Submit" class="btn btn-primary btn-block">Submit</button>
            </div>

                                          
                                        </tbody>
                                    </table>
                                    <script>
    $('input[type=radio]').click(function(e)
    {
		var rate_value = $(this).val(); 
        $('.result').html(rate_value);
		
    });
	
</script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        document.querySelectorAll('.emoji-item').forEach(function(item) {
            item.addEventListener('click', function() {
                var value = this.getAttribute('data-value');
                document.getElementById('npsRating').value = value;

                // Remove 'selected' class from all items
                document.querySelectorAll('.emoji-item').forEach(function(emoji) {
                    emoji.classList.remove('selected');
                });

                // Add 'selected' class to the clicked item
                this.classList.add('selected');
                
                // Show additional feedback fields
                document.getElementById('feedbackFields').classList.remove('hidden');
            });
        });
    </script>
                                    </form>
                                </div>
                                
                            </div>
                        </div>
                        </center>
                        <!--End Advanced Tables -->


</body>
</html>





