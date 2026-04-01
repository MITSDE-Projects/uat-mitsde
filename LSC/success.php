<?php ob_start();
session_start();
require 'class.phpmailer.php'; 
require 'class.smtp.php'; 

//echo '<pre>'; print_r($_POST); exit; 


include("php/db.php");

$status=$_POST["status"];
$firstname=$_POST["firstname"];
$amount = $_POST["amount"];
$txnid=$_POST["txnid"];
$posted_hash=$_POST["hash"];
$key=$_POST["key"];
$productinfo=$_POST["productinfo"];
$email=$_POST["email"];
$tempid=$_POST["udf1"];
$salt="BQagJjLna7";
$transaction = $_POST["bank_ref_num"];
$pyarr = $_POST["payuMoneyId"];
$memberid = $_SESSION['memberID'];

     $Fee1 = rtrim(rtrim($amount, '0'), '.');//$Fees[1];
   
    //echo "</br>SELECT * FROM `student` WHERE `email` = '".$email."'";
        $getcourse=mysqli_query($connection,"SELECT * FROM `student` WHERE `email` = '".$email."'");
        $row=mysqli_fetch_array($getcourse);
       
       $memberID=$row['memberID'];
       $ERPLeadID=$row['ERPLeadID'];
       $Studentcours=$row['desciplines'];
       $s_ID=$row['SpecializationID']; 
       $phonenumber=$row['phonenumber'];
       $name=$row['name'];
       $lastname=$row['lastname'];
       $studentname=$row['name']." ".$row['lastname'];


         $getcourseprice=mysqli_query($connection,"SELECT program_id,lumpsum_amount FROM `tbl_courses` WHERE `courses_name` = '".$Studentcours."'");
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

//echo '<pre>'; print_r($_POST); 
//echo '<pre>'; print_r($_SESSION);



//echo '<pre>'; print_r($_SESSION); 
//echo $_POST["productinfo"]."pro";
//echo $memberid; exit; 

$json_content = json_decode($pyarr, true);

$obj = json_decode($pyarr, true);
$payID=$obj['paymentId'];

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	
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
	        
	        //echo "IN SUCCES";  exit; 
	        
	  ?>
        <div class="breadcrum" style="text-align:center;">
            <a rel="canonical" href="printformvalue.php">Home</a>&nbsp;<span><i class='fa fa-angle-double-right'></i></span><strong class='act'>Thank you</strong>
        </div>  
        <?php
		}
		else
		{
		    
		    //echo "IN ELSE"; exit; 
		?>
        <div class="breadcrum" style="text-align:center;">
            <a rel="canonical" href="page5_form.php">Home</a>&nbsp;<span><i class='fa fa-angle-double-right'></i></span><strong class='act'>Failed Payment</strong>
        </div> 
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
	        echo "<h3 style='text-align:center'>Thank You for Payment.</h3>";
            echo "<h4 style='text-align:center'>Please Note down the Payment ID for this Transaction <strong>".$payID."</strong></h4>";
            echo "<h4 style='text-align:center'>Mention this ID in further communication.</h4>";
		    
	//	echo "</br>INSERT INTO tbl_transactions_details(email,ins_1_amt,ins_1_date,payment_source,transaction_id)VALUES('".$email."','".$amount."',NOW(),'PayU','$payID')";
		
		     mysqli_query($connection,"UPDATE `student` SET `terms` = '1', `transactid` = '$payID',	amount='".$_POST['amount']."', `isPayment` = '1', `dddate` = 'NULL', `ddnumber` = 'NULL', `bankname` ='NULL', `paymenttype`='1',formstatus='payment done',lastPage='printformvalue.php',paydate=NOW() WHERE `email` = '".$email."'");

		     mysqli_query($connection,"INSERT INTO transaction(T_LeadID,T_A_Amount,T_date,PayU_transationNo,payment_source,memberID,email) VALUES ('".$tempid."','".$amount."',NOW(),'".$payID."','PayU','".$memberid."','".$email."')");
  // echo "</br>INSERT INTO `tbl_transactions_details` (`id`, `memberID`,`ERPLeadID`, `Name`, `Mobile_no`, `email`, `courseid`, `SpecializationID`, `FeeHeadID`, `fees_type`, `ins_1_amt`, `ClearedDate`, `ins_1_date`,`payment_source`, `PayerBankID`, `transaction_id`, `payment_verification`, `PayeeInstituteID`, `PayeeBankID`, `PayeeACNo`, `PayeeACName`, `PayeeBranch`, `PayeeBankAddress`, `PayeeIFSCCode`, `UserId`, `CurrencyID`, `S_Flag`, `response`, `F_Flag`) VALUES (NULL, '$memberID','$ERPLeadID','$studentname', '$phonenumber', '".$_POST['email']."', '$Studentcours', '$s_ID', '60', 'InstallmentI', '".$_POST['amount']."',NOW(),NOW(),'PayU','102','$txnid', 'Not_Verified', '16', '91', '15000200013178', 'Pune', 'Kothrud Pune', 'Kothrud Pune Maharashtra India', 'FDRL0001500', NULL, NULL, '0', NULL, '1')";
		    
		    
		    
		     mysqli_query($connection,"INSERT INTO `tbl_transactions_details` (`id`, `memberID`,`ERPLeadID`, `Name`, `Mobile_no`, `email`, `courseid`, `SpecializationID`, `FeeHeadID`, `fees_type`, `ins_1_amt`, `ClearedDate`, `ins_1_date`,`payment_source`, `PayerBankID`, `transaction_id`, `payment_verification`, `PayeeInstituteID`, `PayeeBankID`, `PayeeACNo`, `PayeeACName`, `PayeeBranch`, `PayeeBankAddress`, `PayeeIFSCCode`, `UserId`, `CurrencyID`, `S_Flag`, `response`, `F_Flag`) VALUES (NULL, '$memberID','$ERPLeadID','$studentname', '$phonenumber', '".$_POST['email']."', '$Studentcours', '$s_ID', '60', 'InstallmentI', '".$_POST['amount']."',NOW(),NOW(),'PayU','102','$payID', 'Not_Verified', '16', '91', '15000200013178', 'Pune', 'Kothrud Pune', 'Kothrud Pune Maharashtra India', 'FDRL0001500', NULL, NULL, '0', NULL, '1')");

	 
		  
		                         //------------------------------Success Mail----------------------------------------
		       $mail  = new PHPMailer();
                 ob_start(); //Turn on output buffering
				 ?>
				 <p>Hello <?php echo $firstname; ?>,<br>
                 Congratulations!</p>
                  <p>We would like to take this moment to thank you for successfully submitting your application with MIT-School of Distance Education. 
				        We wish to confirm the receipt of the payment towards the admission process.</p>
                     
                     <p>Your Payment ID for this payment is <?php echo $payID; ?></p>
                     <p>Use payment getway for this transaction is : PayUMoney </p> <br />
					 <p>If you have any questions, please contact us at admissions@mitsde.com or on campussupport@mitsde.com or call us on +91-772-201-7705</p>
					
					<p><b>Please Find below details confirmed by you before making the payment:-</b></p>
                     <table border="1">
                         <tr>
                             <td>
                     <p>1) Course & Specialization- <b><?php echo  $Studentcours;?> (<?php echo $duration; ?>)</b></p>
                     <p>2) Amount Paid –INR <b><?php echo $amount; ?> /-</b></p>
                     <p>3) Payment Option - <b><?php echo $feetype;   if ($feetype=="Instalment") echo "\x20(Next Instalment needs to be paid within 3 months duration from first payment.)"; ?></b></p>
                     <p>4) Exam fees – INR 500 per paper (applicable at the time of examination)</p>
                     <p>5) Project fees- INR 1,500 (applicable at the time of submitting project)</p>
                     <p>6) Cancellation policy- Students are eligible for cancellation/ refund only if applied within 5 days from enrolment.</p>
                     <p>Referral Policy*</p>
                     <p>When you refer your friend to take any program at MITSDE, then you & your friend are eligible for a referral benefit of INR 1,500 /- each</p>
                     </td>
                     </tr>
                     </table>
					
					
					
					
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
						$mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
						$mail->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
						$mail->Port       = 465;                   // set the SMTP port for the GMAIL 
						$mail->Username   = "payonline@mitsde.com";  // GMAIL username
						$mail->Password   = "mitsde@123";            // GMAIL password
						//$mail->g_smtp_host = 'smtp.gmail.com:465';
						//$mail->g_smtp_connection_mode = 'ssl';
						
						$mail->SetFrom('admissions@mitsde.com', 'MIT-School of Distance Education');
						
						$mail->AddReplyTo('admissions@mitsde.com', 'No-Reply');
						
						$mail->Subject    = "Your application with MIT SDE";
						
						$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test
						
						$mail->MsgHTML($body);
						$mail->SetLanguage("en", 'includes/phpMailer/language/');
						$address = $email;
						$mail->AddAddress($address);
				
						
					    $mail->AddBCC('sanjay.gaikwad@mitsde.com');
						$mail->AddBCC('abhishek.kalyana@mitsde.com');
						$mail->AddBCC('william.murmu@mitsde.com');
						$mail->AddBCC('umesh.ghatale@mitsde.com');
						$mail->AddBCC('pravin.patare@mitsde.com');
						$mail->AddBCC('jayjeet.deshmukh@mitsde.com');
						$mail->AddBCC('priti.thakre@mitsde.com');
						$mail->AddBCC('nivedita.dawate@mitsde.com');
						$mail->AddBCC('priyanka.kaul@mitsde.com');
						

						//$mail->AddAttachment("sept12120568.pdf");      // attachment
						//$mail->AddAttachment("images/phpmailer_mini.gif"); // attachment
						
						$mail->Send();
		  //------------------------------Success Mail END----------------------------------------
		   
		   }
		   }
		   else
		   {
		       $json_content = json_decode($pyarr, true);

$obj = json_decode($pyarr, true);
$payID=$obj['paymentId'];
		         //echo "IN ELSE"; exit; 
		       
		          echo "<br/><center>Invalid Transaction. Please try again</center><br>";
		          echo "<center>or Please Contact Your Student Counsoller.</center><br>";

                 //------------------------------Failed Mail----------------------------------------      
		        $mail  = new PHPMailer();
                 ob_start(); //Turn on output buffering
				 ?>
				 <p>Hello <?php echo $firstname; ?>,<br>
                 
				<p> Unfortunately your most recent invoice payment id <?php echo $payID; ?> was declined.
				  This could be due to a change in your card number or your card expiring, cancelation of your credit card / debit card,
				  or the bank not recognizing the payment and taking action to prevent it,please verify your billing information and resend payment <?php echo $amount; ?>.
			    </p>
					<p>
					 > Your Failed Transaction ID For This Transaction Is <?php echo $payID; ?><br />
					 > Your Fee Paid Amount is : <?php echo $amount; ?>  <br />
				     > Use payment getway for this transaction is : PayUMoney</p>
				    <p> If You Have Any Questions, Please Contact Your Student Counsoller.</p><br> 
        		<p>Thank you and see you soon.<br>
          	      Regards,<br>
           		  <b>Team MIT-School of Distance Education</b></p>
				 <?php
				 
		              $body  = ob_get_clean();
					  //$mail->Mailer = "mail";
					  $mail->IsSMTP(); // telling the class to use SMTP
					  $mail->SMTPDebug  = 0;                     // enables SMTP debug information (for testing) // 1 = errors and messages
				      $mail->SMTPSecure = "ssl";                 // sets the prefix to the servier                                          // 2 = messages only
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
						$address = $email;
						$mail->AddAddress($address);
						
						$mail->AddBCC('sanjay.gaikwad@mitsde.com');
						$mail->AddBCC('abhishek.kalyana@mitsde.com');
						$mail->AddBCC('umesh.ghatale@mitsde.com');
						
						//$mail->AddAttachment("sept12120568.pdf");      // attachment
						//$mail->AddAttachment("images/phpmailer_mini.gif"); // attachment
						
						$mail->Send();
			//------------------------------Feild Mail END----------------------------------------       
        

	}
	                    date_default_timezone_set('Asia/Calcutta');
                         $CurrentDateTime=date('Y-m-d : h:i:s');
						 
		      $query= "UPDATE `temp` set status='".$status."',P_End_date='".$CurrentDateTime."' where T_LeadID='".$tempid."' and tranID= '".$payID."'";
		      
              mysql_query($query);
              //or die('Error, insert query failed111');



?>

	   
	      </div>
    </div>
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
	                         <td><input type="hidden" name='leadid' value="<?php echo $memberID; ; ?>"> 
                             <input type="hidden" name='emailid' value="<?php echo $email; ?>">
                             <input type="hidden" name='phone' value="<?php echo $phonenumber;  ?>">
                             <input type="hidden" name='payfees' value="<?php echo $amount;  ?>"></td>
                             </tr>
<tr>
    <td>
<ul class="rate-area" style="padding-right: 468px;">
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