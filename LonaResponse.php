<?php include('Crypto_new.php');
include('apply/php/db.php');
irequire_once('PHPMailer/class.phpmailer.php');
include("PHPMailer/class.smtp.php"); // optional, gets called from within class.phpmailer.php if not already loaded
error_reporting(0);
   
	 //$workingKey='FF2048EE9548EAE83BF4797292611691';		//testing
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

    // $LeadID=explode('=',$decryptValues[28]);
     //$LeadID[1];
	 
	   $amt=explode('=',$decryptValues[10]);
       $amt[1];
       
       
	  
	  
	  
     $dotamt=explode('.',$amt[1]);
	 $dotamt[0];
	
	$emailid=explode('=',$decryptValues[18]);
     $emailid=$emailid[1];
     

     //die;

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

<!-- Page Title -->
<title>Online Payment</title>

<!-- Favicon and Touch Icons -->
<link href="media/favicon.png" rel="shortcut icon" type="image/png">
<link href="images/apple-touch-icon.png" rel="apple-touch-icon">


    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Bootstrap  -->
    <link rel="stylesheet" type="text/css" href="stylesheets/bootstrap.css" >

    <!-- Theme Style -->
    <link rel="stylesheet" type="text/css" href="stylesheets/style.css">

    <!-- Responsive -->
    <link rel="stylesheet" type="text/css" href="stylesheets/responsive.css">

    <!-- Colors -->
    <link rel="stylesheet" type="text/css" href="stylesheets/colors/color1.css" id="colors">
	
	<!-- Animation Style -->
    <!-- <link rel="stylesheet" type="text/css" href="stylesheets/animate.css"> -->
	
   <!--API for Queck contact----->
	  <script src="ajax-load/js/jquery-1.10.2.min.js"></script>
      <script type="text/javascript" src="ajax-load/js/validation.js" charset="UTF-8"></script>
	 <!----->


</head>
<body class="header-sticky">
    <div class="boxed">
        <?php include"header.php"; ?>

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
	       //echo "</br>select * from temp where email_id='".$emailid."' and tranID='".$oderID[1]."'";
		  
		   $temp = mysqli_query($connection,"select * from temp where email_id='".$emailid."' and tranID='".$oderID[1]."'");
	          $temp1=mysqli_fetch_array($temp);
		
		      
		      $temp1['tranID']; // order id
		      $temp1['student_name'];
		      $temp1['email_id'];
		      $temp1['phone'];
	          $temp1['T_B_Amount'];
	          
	          //   die;
		   // echo "</br>select PayU_ID,t_process_id,amount from OtherFeesTransaction where leadID='".$LeadID[1]."'";
		
		/*  $transation = mysql_query("select PayU_ID,t_process_id,amount from OtherFeesTransaction where `leadID`='".$LeadID[1]."'");
	                $transatio1=mysql_fetch_array($transation);
		        
				    $transatio1['PayU_ID'];    // get frm database for validation
				    echo "payu id=". $transatio1['PayU_ID']."<br>";
	              	$transatio1['t_process_id']; // get order id frm database for validation
	              	    echo "porder id=". $transatio1['t_process_id']."<br>";
					$transatio1['amount'];   // get frm database for validation
					    echo "amount=". $transatio1['amount']."<br>";*/
		
			$trchk = mysqli_num_rows(mysqli_query($connection,"select * from loan_registration where `lr_traction_id`='".$transationID[1]."'"));
			$orchk = mysqli_num_rows(mysqli_query($connection,"select * from loan_registration where `lr_order_id`='".$oderID[1]."'"));
			
						
		if($orchk>0 || $trchk >0 )
		  {
		  echo "ERROR: Duplicate Entry<br>";
		  }
		  elseif($temp1['tranID'] !=$oderID[1] || $temp1['T_A_Amount'] != $dotamt[0] )
		     {
			   echo "</br>ERROR: Invalid Response (orderID or Amount not matching)<br>";
		 
		     }
		     else
		     {
		         
	              
	              
		     echo "<br><h3>Thank You for Payment.</h3>.";
		            $tdate= date("Y/m/d");
		 			  date_default_timezone_set('Asia/Kolkata');
	$curdate = date('Y-m-d : h:i:s');
	//$curdateTime = date("Y-m-d h:i:s");
			/*$insertO_tras= "INSERT INTO `OtherFeesTransaction` (`othr_id`,
				   `leadID`,`name`,`email`,`phone`,`CourseName`,`FeesType`,`amount`,`PayU_ID`,`payment_source`,`transationDate`,`t_process_id`,`UTRNO`,`payment_confirmation_status`)VALUES (NULL,'".$temp1['T_LeadID']."','".$temp1['student_name']."','".$temp1['email_id']."','".$temp1['phone']."', 
				   '".$temp1['course']."','".$temp1['fees_type']."','".$dotamt[0]."','".$transationID[1]."','HDFC','".$tdate."','".$oderID[1]."',NULL,'Not Verify')";*/
				          //echo "</br>INSERT INTO `loan_registration` (`lr_id`, `lr_name`, `lr_mob`, `lr_email`, `lr_amount`, `lr_order_id`,`lr_traction_id`, `lr_data_time`, `lr_status`) VALUES (NULL, '".$temp1['student_name']."','".$temp1['phone']."','".$temp1['email_id']."','".$dotamt[0]."','".$oderID[1]."','".$transationID[1]."', '".$curdate."','Payment Done')";  
				   $insertO_tras= "INSERT INTO `loan_registration` (`lr_id`, `lr_name`, `lr_mob`, `lr_email`, `lr_amount`, `lr_order_id`,`lr_traction_id`, `lr_data_time`, `lr_status`) VALUES (NULL, '".$temp1['student_name']."','".$temp1['phone']."','".$temp1['email_id']."','".$dotamt[0]."','".$oderID[1]."','".$transationID[1]."', '".$curdate."','Payment Done')";
				   
			 //$insertO_tras= "INSERT INTO `updpayment` (`id`, `LeadID`, `ReceiptType`, `PaymentType`, `PaymentModeID`, `InstruNo`, `InstruDate`, `ClearedDate`, `PaidAmount`, `FeeHeadID`, `PayerBankID`, `PayerBranch`, `PayerBankAddress`, `PayerIFSCcode`, `PayeeInstituteID`, `PayeeBankID`, `PayeeACNo`, `PayeeACName`, `PayeeBranch`,`PayeeBankAddress`, `PayeeIFSCCode`, `UserId`, `CurrencyID`) VALUES (NULL, '".$LeadID[1]."', 'OC', 'L','10', '".$transationID[1]."', '".$curdate."', '".$curdate."', '".".$dotamt[0]."."', '59', '10', NULL, NULL, NULL, '16', '1', '50100267576292', 'Pune','Mayur Colony Kothrud Pune name', 'Mayur Colony Kothrud Pune address', 'HDFC0000149', '8', '1')";

                           mysqli_query($connection,$insertO_tras) or die('</br>Error, insert query failed222');
				  
				
				  
		
		           echo "<table cellspacing=4 cellpadding=4>";
		          
		            echo "</br>------------------EMI Process Registration Payment Details----------------------";
		            
		          $StudentName=explode('=',$decryptValues[19]);
                  
		            echo '</br><tr><td>Student Name :</td><td>'.$StudentName[1].'</td></tr>';
		           
		            $StudentEmailID=explode('=',$decryptValues[18]);
                   
		            echo '<tr><td>Email ID :</td><td>'.$StudentEmailID[1].'</td></tr>';
		
		            $StudentMob=explode('=',$decryptValues[25]);
                   
		            echo '<tr><td>Mobile No :</td><td>'.$StudentMob[1].'</td></tr>';
		
		            $Fees=explode('=',$decryptValues[35]);
                   
		            echo '<tr><td>Pay Fee :</td><td>'.$Fees[1].'</td></tr>';
		
		            $Payment_status=explode('=',$decryptValues[3]);
                   
		            echo '<tr><td>Payment Status :</td><td style="color:#4AD300;">'.$Payment_status[1].'</td></tr>';
		            
		            
		          
		            echo "</table><br>";
					
					//------------------------------Success Mail----------------------------------------
		       $mail  = new PHPMailer();
                 ob_start(); //Turn on output buffering
				 ?>
				 <p>Hello <?php echo $StudentName[1]; ?></p>
				 
                  <p>Thank you for make a transaction for EMI Process</p> </br>
                  
                    <p>Your Transaction ID for this payment is <?php echo $transationID[1]; ?>
                    <p>Your Process Fee Paid Amount is : <?php echo $Fees[1]; ?> </p> 
					<p>Fees Type : EMI Process </p>
					<p>Used Payment Gateway : HDFC </p>
					
					<p>If you have any questions, please contact us at admissions@mitsde.com or on campussupport@mitsde.com or call us on +91-772-201-7705</p>
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
						
						$mail->SetFrom('payonline@mitsde.com', 'MIT-School of Distance Education');
						
						$mail->AddReplyTo('payonline@mitsde.com', 'No-Reply');
						
						$mail->Subject    = "EMI Process Payment Made Successfully";
						
						$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test
						
						$mail->MsgHTML($body);
						$mail->SetLanguage("en", 'includes/phpMailer/language/');
						$address = $StudentEmailID[1];
						$mail->AddAddress($address);
				
						$mail->AddBCC('umesh.ghatale@mitsde.com');
						$mail->AddBCC('pravin.patare@mitsde.com');
						$mail->AddBCC('jayjeet.deshmukh@mitsde.com');
						$mail->AddBCC('sanjay.gaikwad@mitsde.com');
						$mail->AddBCC('abhishek.kalyana@mitsde.com');
						$mail->AddBCC('priti.thakre@mitsde.com');
						$mail->AddBCC('nivedita.dawate@mitsde.com');
						$mail->AddBCC('priyanka.kaul@mitsde.com');
						$mail->AddBCC('william.murmu@mitsde.com');
						$mail->AddBCC('shivraj.pachawadkar@mitsde.com');
						$mail->AddBCC('dnyaneshwar.nimje@mitsde.com');
						$mail->AddBCC('kader.sk@mitsde.com');
						$mail->AddBCC('vrushali.bansode@mitsde.com');
					
						
						
						//$mail->AddAttachment("sept12120568.pdf");      // attachment
						//$mail->AddAttachment("images/phpmailer_mini.gif"); // attachment
						
						$mail->Send();
		  //------------------------------Success Mail END----------------------------------------
					
					
					//---------------------------------------FOR DELETE FORM TEMP TABLE----------------------
		$deletetemp=mysqli_query($connection,"DELETE FROM `temp` WHERE email_id='".$emailid."' and tranID='".$oderID[1]."'");
		             //---------------------------------------FOR DELETE FORM TEMP TABLE------END----------------
			    }
		  
			
				
			
			
	}
	else if($order_status==="Aborted")
	{
		
		echo "<br><h3>Thank You for Payment.</h3>.";
		
		 echo "<table cellspacing=4 cellpadding=4>";
		          
		            echo "</br>------------------Fee Payment Details----------------------";
		            
		          $StudentName=explode('=',$decryptValues[19]);
                  
		            echo '</br><tr><td>Student Name :</td><td>'.$StudentName[1].'</td></tr>';
		           
		            $StudentEmailID=explode('=',$decryptValues[18]);
                   
		            echo '<tr><td>Email ID :</td><td>'.$StudentEmailID[1].'</td></tr>';
		
		            $StudentMob=explode('=',$decryptValues[25]);
                   
		            echo '<tr><td>Mobile No :</td><td>'.$StudentMob[1].'</td></tr>';
		
		           
		
		            
		            $Fees=explode('=',$decryptValues[35]);
                   
		            echo '<tr><td>Pay Fee :</td><td>'.$Fees[1].'</td></tr>';
		
		            $Payment_status=explode('=',$decryptValues[3]);
                   
		            echo '<tr><td>Payment Status :</td><td style="color:red">'.$Payment_status[1].'</td></tr>';
		          
		            echo "</table><br>";
		
		//---------------------------------------FOR DELETE FORM TEMP TABLE----------------------
		$deletetemp=mysqli_query($connection,"DELETE FROM `temp` WHERE email_id='".$emailid."' and tranID='".$oderID[1]."'");
		//---------------------------------------FOR DELETE FORM TEMP TABLE------END----------------
	
	}
	else if($order_status==="Failure")
	{
		echo "<br><h3>Thank You for Payment.</h3>.";
		
		echo "<br><h5 style='color:red'>The transaction has been declined. Please try again</h5>";
		
		
		 echo "<table cellspacing=4 cellpadding=4>";
		          
		            echo "</br>------------------Fee Payment Details----------------------";
		            
		          $StudentName=explode('=',$decryptValues[19]);
                  
		            echo '</br><tr><td>Student Name :</td><td>'.$StudentName[1].'</td></tr>';
		           
		            $StudentEmailID=explode('=',$decryptValues[18]);
                   
		            echo '<tr><td>Email ID :</td><td>'.$StudentEmailID[1].'</td></tr>';
		
		            $StudentMob=explode('=',$decryptValues[25]);
                   
		            echo '<tr><td>Mobile No :</td><td>'.$StudentMob[1].'</td></tr>';
		
		            
		            $Fees=explode('=',$decryptValues[35]);
                   
		            echo '<tr><td>Pay Fee :</td><td>'.$Fees[1].'</td></tr>';
		
		            $Payment_status=explode('=',$decryptValues[3]);
                   
		            echo '<tr><td>Payment Status :</td><td style="color:red">'.$Payment_status[1].'</td></tr>';
		          
		            echo "</table><br>";
		
		//---------------------------------------FOR DELETE FORM TEMP TABLE----------------------
		
		$deletetemp=mysqli_query($connection,"DELETE FROM `temp` WHERE email_id='".$emailid."' and tranID='".$oderID[1]."'");
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
	    	//echo '<tr><td>'.$information[0].'</td><td>'.urldecode($information[1]).'</td></tr>';
	}

	echo "</table><br>";
	echo "</center>";
?>
  
      

			       
			   </div>
			     
			 </div>
	</section>
  </div>
  <!-- end main-content -->

  <!-- Footer -->
  <?php include"footer.php"; ?>
  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</div>
<!-- end wrapper -->

<!-- Footer Scripts -->
<!-- JS | Custom script for all pages -->
<script src="js/custom.js"></script>

</body>
</html>





