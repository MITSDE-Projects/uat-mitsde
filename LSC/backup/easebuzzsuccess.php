<?php session_start();

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
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Admissions 2020-21</title>
     	 <link rel="stylesheet" href="css/style.css"/> 
         <link href='https://fonts.googleapis.com/css?family=Roboto:300,300' rel='stylesheet' type='text/css'>
         <style>
		 .logout{ color:#FFF;}
		  .logout link{ color:#FFF;}
		 </style>




</head>
<body class="bg-pic">

<table width="1000" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><div class="mheader">
		
	   <table width="100%" border="0" cellpadding="0" cellspacing="0">
 
  <tr>
    <td width="1%">&nbsp;</td>
    <td width="38%">&nbsp;</td>
    <td width="44%">&nbsp;</td>
    <td width="17%">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td align="left" valign="top"><h2><?php //echo $_SESSION['username']; ?></h2>
				<?php $_SESSION['memberID']; ?></td>
    <td></td>
    <td align="left" valign="top"><p style="font-size:16px; color:#FFF;"><a href='register/logout.php' class="logout">Logout</a></p></td>
  </tr>
</table>
	 </div></td>
  </tr>
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

//echo "IN";

    include_once 'lib/easepay-lib.php';
    $SALT='VHV44GBVSB';
    $result = response( $_POST, $SALT );
    
    
    //echo '<pre>'; print_r($_POST); 
    
    
    
    
    
//echo "IN2";    
    
    //echo '<pre>'; print_r($_POST); 
    
    //echo '<pre>'; print_r($result); 
    
   //$result = response( $_POST, $SALT );
    
    
   


    if($_POST['status']=='success')
    {

           // echo "IN SUCCESS"; exit; 

    	include "php/db.php";
				
		$username = $_SESSION['username'];		
		$memberid = $_SESSION['memberID'];
	

    	$txnid=$_POST['easepayid'];
    	$memberid=$_POST['productinfo'];
    	
    	$studentname=$_POST['firstname'].''.$_POST['lastname'];
    	$phonenumber=$_POST['phone'];
    	$emailid=$_POST['email'];
    	
    	$getcourse=mysqli_query($connection,"SELECT ERPLeadID,CourseID,SpecializationID,desciplines FROM `student` WHERE `memberID` = '".$memberid."'");
        $row=mysqli_fetch_array($getcourse);
        $Studentcours=$row['desciplines'];
        $s_ID=$row['SpecializationID'];
        $ERPLeadID=$row['ERPLeadID'];
    	$Fees=$_POST['amount'];
    	
    	 $getcourseprice=mysqli_query($connection,"SELECT program_id,lumpsum_amount FROM `tbl_courses` WHERE `courses_name` = '".$Studentcours."'");
              $row1=mysqli_fetch_array($getcourseprice);
              $lumpsumFees=$row1['lumpsum_amount'];
              $program_id=$row1['program_id'];
             
             
             $getprogramdetails=mysqli_query($connection,"SELECT * FROM `tbl_program` WHERE `programcode` = '".$program_id."'");
              $row2=mysqli_fetch_array($getprogramdetails);
              $duration=$row2['duration'];
              
              
    	
    	
    	
    	
        $crdate = date('Y-m-d');

    	$query = mysqli_query($connection,"UPDATE `student` SET `terms` = '1', amount='".$_POST['amount']."', `transactid` = '$txnid',	`colorRadio`='Online payment', `isPayment` = '1', `dddate` = 'NULL', `ddnumber` = 'NULL', `bankname` ='NULL', `paymenttype`='1',formstatus='payment done',lastPage='printformvalue.php',paydate='".$crdate."' WHERE `memberID` = '$memberid'");

        $gettestcenter = mysqli_fetch_array(mysqli_query($connection,"SELECT * FROM student WHERE memberID='".$memberid."'"));        
        
         mysqli_query($connection,"INSERT INTO transaction (T_LeadID,T_A_Amount,T_date,PayU_transationNo,payment_source,email) VALUES('".$memberid."','".$_POST['amount']."',NOW(),'".$_POST['txnid']."','EaseBuzz','".$_POST['email']."')");
        // This is to insert for further processing!...
        
         //echo "</br>INSERT INTO `tbl_transactions_details` (`id`, `memberID`,`ERPLeadID`, `Name`, `Mobile_no`, `email`, `courseid`, `SpecializationID`, `FeeHeadID`, `fees_type`, `ins_1_amt`, `ClearedDate`, `ins_1_date`,`payment_source`, `PayerBankID`, `transaction_id`, `payment_verification`, `PayeeInstituteID`, `PayeeBankID`, `PayeeACNo`, `PayeeACName`, `PayeeBranch`, `PayeeBankAddress`, `PayeeIFSCCode`, `UserId`, `CurrencyID`, `S_Flag`, `response`, `F_Flag`) VALUES (NULL, '$memberid','$ERPLeadID','$studentname', '$phonenumber', '".$_POST['email']."', '$Studentcours', '$s_ID', '60', 'InstallmentI', '".$_POST['amount']."',NOW(),NOW(),'EaseBuzz','113','$txnid', 'Not_Verified', '16', '91', '15000200013178', 'Pune', 'Kothrud Pune', 'Kothrud Pune Maharashtra India', 'FDRL0001500', NULL, NULL, '0', NULL, '1')";
                 
        mysqli_query($connection,"INSERT INTO `tbl_transactions_details` (`id`, `memberID`,`ERPLeadID`, `Name`, `Mobile_no`, `email`, `courseid`, `SpecializationID`, `FeeHeadID`, `fees_type`, `ins_1_amt`, `ClearedDate`, `ins_1_date`,`payment_source`, `PayerBankID`, `transaction_id`, `payment_verification`, `PayeeInstituteID`, `PayeeBankID`, `PayeeACNo`, `PayeeACName`, `PayeeBranch`, `PayeeBankAddress`, `PayeeIFSCCode`, `UserId`, `CurrencyID`, `S_Flag`, `response`, `F_Flag`) VALUES (NULL, '$memberid','$ERPLeadID',$studentname', '$phonenumber', '".$_POST['email']."', '$Studentcours', '$s_ID', '60', 'InstallmentI', '".$_POST['amount']."',NOW(),NOW(),'EaseBuzz','113','$txnid', 'Not_Verified', '16', '91', '15000200013178', 'Pune', 'Kothrud Pune', 'Kothrud Pune Maharashtra India', 'FDRL0001500', NULL, NULL, '0', NULL, '1')");
        
        
        
        //mysqli_query($connection,"INSERT INTO tbl_transactions_details(email,ins_1_amt,ins_1_date,payment_source,transaction_id)VALUES('".$_POST['email']."','".$_POST['amount']."',NOW(),'EaseBuzz','$txnid')");
        
  
  
  echo "<p>Congratulations!</p>
    <p>We would like to take this moment to thank you for successfully submitting your application with MIT-School of Distance Education. We wish to confirm the receipt of the payment towards the admission process.</p>
   
    <p>Your Transaction ID for this transaction is ".$_POST['easepayid']."
   
    <p>If you have any questions, please contact us at admissions@mitsde.com.</p>
     <p>We have received a payment of Rs. " . $_POST['amount'] . "
    <p>Thank you and see you soon.<br>
    <p> Regards,</p>
    <p><strong>Team MIT-School of Distance Education</strong></p>";
   
    




    $body="<p>Congratulations!</p>
    
    <p>We would like to take this moment to thank you for successfully submitting your application with MIT-School of Distance Education. We wish to confirm the receipt of the payment towards the admission process.</p>
   
    <p>Your Transaction ID for this transaction is ".$_POST['easepayid']."
    <p>We have received a payment of Rs. " . $_POST['amount'] . "</p>
    <p>Use Fee Payment Getway For This transation is  : EaseBuzz </p>
    <p>If you have any questions, please contact us at admissions@mitsde.com or on campussupport@mitsde.com or call us on 020 67871801</p>
    
    
    
    
    
    
    <p>Thank you and see you soon.<br>
    <p>Regards,</p>
    <p><strong>Team MIT-School of Distance Education</strong></p>";



    $subject = "Your application with MIT SDE";
   
    
    
      $headers = "MIME-Version: 1.0" . "\r\n";
      $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
      $headers .= 'From: MIT SDE<admissions@mitsde.com>' . "\r\n";
      $headers .= 'To: <'.$_POST['email'].'>' . "\r\n";
      $headers .= 'bcc: abhishek.kalyana@mitsde.com' ."\r\n";
      $headers .= 'bcc: jayjeet.deshmukh@mitsde.com' ."\r\n";
      $headers .= 'bcc: sanjay.gaikwad@mitsde.com' ."\r\n";
      $headers .= 'bcc: pravin.patare@mitsde.com' ."\r\n";
      $headers .= 'bcc: accounts.mitsde@mitpune.edu.in' ."\r\n";
      $headers .= 'bcc: william.murmu@mitsde.com' ."\r\n";
      $headers .= 'bcc: geeta.shravage@mitsde.com' ."\r\n";

     
      mail($email,$subject,$body,$headers);?>
      

			
      <?php

    }
    else
    {
       // echo "IN VALID"; exit; 
        
    	echo "Invalid Transaction. Please try again";
    	echo "<h3 class='sucess4'><a href='page5_form.php' ><input type='button' value='Click here to go back'></a></h3>";
    }
    

?>


<link href="css/style.css" rel="stylesheet" type="text/css">

</td>
  </tr>
</table>




</body>   
</html>
