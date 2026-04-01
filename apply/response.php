<!DOCTYPE HTML>
<html>
<head>
    <title>Admissions 2018-19</title>
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
    <td colspan="4"><img src="images/LOGO.jpg" width="1000" height="100"  alt=""/></td>
    </tr>
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
    <td align="left" valign="top"><p style="font-size:16px; color:#FFF;"><a href='register/logout.php' class="logout" >Logout</a></p></td>
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

    include_once 'lib/easepay-lib.php';
    $SALT='VHV44GBVSB';
    $result = response( $_POST, $SALT );


    if($_POST['status']=='success')
    {

    	include "php/db.php";
				
		$username = $_SESSION['username'];		
		$memberid = $_SESSION['memberID'];
	

    	$txnid=$_POST['txnid'];

    	$memberid=$_POST['productinfo'];
    	$query = mysqli_query($connection,"UPDATE `student` SET `terms` = '1', `transactid` = '$txnid',	`colorRadio`='Online payment', `isPayment` = '1', `dddate` = 'NULL', `ddnumber` = 'NULL', `bankname` ='NULL', `paymenttype`='1',formstatus='payment done' WHERE `memberID` = '$memberid'"); 


    	 echo "<p>Congratulations!</p>
    <p>We would like to take this moment to thank you for successfully submitting your application with MIT-School of Distance Education. We wish to confirm the receipt of the payment towards the admission process.</p>
   
    <p>Your Transaction ID for this transaction is ".$_POST['txnid']."
   
    <p>If you have any questions, please contact us at admissions@mitsde.com.</p>
     <p>We have received a payment of Rs. " . $_POST['amount'] . "
    <p>Thank you and see you soon.<br>
    <p> Regards,</p>
    <p><strong>Team MIT-School of Distance Education</strong></p>";
    }
    else
    {
    	echo "Invalid Transaction. Please try again";
    	echo "<h3 class='sucess4'><a href='page5_form.php' ><input type='button' value='Click here to go back'></a></h3>";
    }
    

?>


<link href="css/style.css" rel="stylesheet" type="text/css">
<title>Admissions 2019-20</title>
</body>   
</html>
