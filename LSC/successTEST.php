<?php
ob_start();
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
//$email=$_POST["email"];
$email="test1111@mitsde.com";
$tempid=$_POST["udf1"];
$salt="BQagJjLna7";
$transaction = $_POST["bank_ref_num"];
$pyarr = $_POST["payuMoneyId"];
$memberid = $_SESSION['memberID'];


//echo '<pre>'; print_r($_POST); 
//echo '<pre>'; print_r($_SESSION);



//echo '<pre>'; print_r($_SESSION); 
//echo $_POST["productinfo"]."pro";
//echo $memberid; exit; 
   echo "</br>SELECT CourseID,SpecializationID FROM `student` WHERE `email` = '".$email."'";
   
    $getcourse=mysqli_query($connection,"SELECT CourseID,SpecializationID FROM `student` WHERE `email` = '".$email."'");
                 $row=mysqli_fetch_array($getcourse);
              echo "</br>course id-->".  $row['CourseID'];
              echo "</br>sid-->".  $s_ID=$row['SpecializationID'];

$json_content = json_decode($pyarr, true);

$obj = json_decode($pyarr, true);
echo "pay-->".$payID=$obj['paymentId'];
//die;
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
echo"</br>INSERT INTO tbl_transactions_details(email,ins_1_amt,ins_1_date,payment_source,PayerBankID,transaction_id,PayeeInstituteID,PayeeBankID,PayeeACNo,PayeeACName,PayeeBranch,PayeeBankAddress,PayeeIFSCCode,S_Flag,response,F_Flag)VALUES('".$email."','".$amount."',NOW(),'PayU','102',$payID','16', '91', '15000200013178', 'Pune', 'Kothrud Pune', 'Kothrud Pune Maharashtra India', 'FDRL0001500', '0', NULL, '1')";
		     mysqli_query($connection,"INSERT INTO tbl_transactions_details(email,ins_1_amt,ins_1_date,payment_source,PayerBankID,transaction_id,PayeeInstituteID,PayeeBankID,PayeeACNo,PayeeACName,PayeeBranch,PayeeBankAddress,PayeeIFSCCode,S_Flag,response,F_Flag)VALUES('".$email."','".$amount."',NOW(),'PayU','102',$payID','16', '91', '15000200013178', 'Pune', 'Kothrud Pune', 'Kothrud Pune Maharashtra India', 'FDRL0001500', '0', NULL, '1')");

	 
		  
		                         //------------------------------Success Mail----------------------------------------
		       $mail  = new PHPMailer();
                 ob_start(); //Turn on output buffering
				 ?>
				 <p>Hello <?php echo $firstname; ?>,<br>
                 Congratulations!</p>
                  <p>We would like to take this moment to thank you for successfully submitting your application with MIT-School of Distance Education. 
				        We wish to confirm the receipt of the payment towards the admission process.</p>
                     <!--<p>Your Transaction ID for this payment is <?php //echo $payID; ?></p>-->
                     <p>Your Payment ID for this payment is <?php echo $payID; ?></p>
                     
					<p>Your Fee Paid Amount is : <?php echo $amount; ?> </p>
					<p>Use payment getway for this transaction is : PayUMoney </p> <br />
					<p>If you have any questions, please contact us at admissions@mitsde.com or on campussupport@mitsde.com or call us on +91-772-201-7705</p>
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
						
						$mail->SetFrom('admissions@mitsde.com', 'MIT-School of Distance Education');
						
						$mail->AddReplyTo('admissions@mitsde.com', 'No-Reply');
						
						$mail->Subject    = "Your application with MIT SDE";
						
						$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test
						
						$mail->MsgHTML($body);
						$mail->SetLanguage("en", 'includes/phpMailer/language/');
						$address = $email;
						$mail->AddAddress($address);
				
						
					$mail->AddBCC('sanjay.gaikwad@mitsde.com');
						/*$mail->AddBCC('abhishek.kalyana@mitsde.com');
						$mail->AddBCC('william.murmu@mitsde.com');
						$mail->AddBCC('priti.Thakre@mitsde.com');
						$mail->AddBCC('priyanka.tyagi@mitsde.com');
						$mail->AddBCC('pravin.patare@mitsde.com');
						$mail->AddBCC('jayjeet.deshmukh@mitsde.com');
						$mail->AddBCC('accounts.mitsde@mitpune.edu.in');
						$mail->AddBCC('umesh.ghatale@mitsde.com');
						$mail->AddBCC('nivedita.dawate@mitsde.com');
						$mail->AddBCC('priyanka.kaul@mitsde.com');
						$mail->AddBCC('jagannath.lande@mitsde.com');
						$mail->AddBCC('iteesha.pandagre@mitsde.com');
						$mail->AddBCC('priyanka.verma@mitsde.com');
						$mail->AddBCC('dnyaneshwar.nimje@mitsde.com');
						$mail->AddBCC('vaibhav.kumar@mitsde.com');
						$mail->AddBCC('praveen.shukla@mitsde.com');
						$mail->AddBCC('kader.sk@mitsde.com');
						$mail->AddBCC('rani.deshmukh@mitsde.com');
						$mail->AddBCC('shwetal.kolhe@mitsde.com');*/

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

</body>
</html>