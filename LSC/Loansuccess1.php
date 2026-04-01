<?php		
	include "php/header.php";
    include_once "php/db.php";
?>
<!DOCTYPE HTML>
<html>
<head>
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
    <td colspan="4"><img src="#" width="1000" height="100"  alt=""/></td>
    </tr>
  <tr>
    <td width="1%">&nbsp;</td>
    <td width="38%">&nbsp;</td>
    <td width="44%">&nbsp;</td>
    <td width="17%">&nbsp;</td>
  </tr>
  
</table>
	 </div></td>
  </tr>
  <tr>
    <td>  
    
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
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

    


    if(isset($_GET['loanuniqid']))
    {
    
    $loanuniqid=$_GET['loanuniqid'];
    $leadid=$_GET['leadid'];
    $providercode=$_GET['providercode'];
   // echo "</br>SELECT * FROM `tbl_transactions_details` WHERE `transaction_id` = '$loanuniqid' AND `LoanProvider` = '$providercode'";
    $checktransationid=mysqli_query($connection,"SELECT * FROM `tbl_transactions_details` WHERE `transaction_id` = '$loanuniqid' AND `LoanProvider` = '$providercode'");
   
    $getdetails=mysqli_fetch_array($checktransationid);
    
    $memberID=$getdetails['memberID'];
    $LoanProvider=$getdetails['LoanProvider'];
    $transaction_id=$getdetails['transaction_id'];
   // die;
    
    if($loanuniqid!==$transaction_id)
    {
        
    	//echo "Uniqe ID Not Match";
    	 echo "<p><b>Thank you</b></p>
               <p><i>Your Application is registred</p>
               <p>Allow us 24 to 48 hrs to process to it</p>
               <p>please check your mail for further updates</i></p>
               <p> Regards,</p>
               <p><strong>Team MIT-School of Distance Education</strong></p>";
               
    	echo "</br><h3 class='sucess4'><a href='page5_form.php' ><input type='button' value='Click here to go back'></a></h3>";
    }

    else
    {
        
    	
    $tdate= date("Y/m/d");
       
       $querystudent = mysqli_query($connection,"UPDATE `student` SET `terms` = '1',`transactid` = '$transaction_id',`colorRadio`='Loan', `isPayment` = '1', `dddate` = 'NULL', `ddnumber` = 'NULL', `bankname` ='NULL', `paymenttype`='1',lastPage='printformvalue.php',formstatus='payment done',paydate='.$tdate.' WHERE `memberID` = '$memberID'");
   // echo "</br>UPDATE `tbl_transactions_details` SET `loanStatus` = 'processing' WHERE transaction_id='$transaction_id' And `memberID` = '$memberID'";	
    	$querytras = mysqli_query($connection,"UPDATE `tbl_transactions_details` SET `loanStatus` = 'processing'  WHERE transaction_id='$transaction_id' And `memberID` = '$memberID'"); 
    
               echo "<p><b>Thank you</b></p>
               <p><i>Your Application is registred</p>
               <p>Allow us 24 to 48 hrs to process to it</p>
               <p>please check your mail for further updates</i></p>
               <p> Regards,</p>
               <p><strong>Team MIT-School of Distance Education</strong></p>";
    	 
    	
    }
    
}
?>


<link href="css/style.css" rel="stylesheet" type="text/css">

</body>   
</html>
