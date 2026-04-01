<p align="center">MIT-SDE Redirect To HDFC Payment Getway Please Wait Five Minutes</p>
<?php
include('Crypto_new.php');
include('admin/include/config.php');
//include(__DIR__ . '/Crypto_new.php');
//include(__DIR__ . '/admin/include/config.php');
error_reporting(0);

//echo "</br>first-->";     //post value  
/*$LeadID = $_POST['merchant_param3']; 
$student_name = $_POST['delivery_name'];
$Email= $_POST['billing_email'];
$MobileNo= $_POST['delivery_tel'];
$Course= $_POST['merchant_param1'];
$S_ID= $_POST['SpecializationID'];
$FeesType= $_POST['merchant_param2'];  //feestypeID
$totamt=$_POST['amount'];
$transactionId=$_POST['order_id'];
*/
//post value  

// Google reCAPTCHA validation

$recaptcha = $_POST['g-recaptcha-response'];

$secret_key = '6Lf1dR4gAAAAAJm1h4pKoaoKG-LtkR9qZEMR-YYb';

$url = 'https://www.google.com/recaptcha/api/siteverify?secret=' . $secret_key . '&response=' . $recaptcha;

$response = file_get_contents($url);

$response = json_decode($response);



// If reCAPTCHA fails, redirect back or show an error

if (!$response->success) {

	die('reCAPTCHA verification failed. Please try again.');

}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	if ($_POST['billing_email'] != '' and $_POST['delivery_tel'] != '' and $_POST['amount'] != '') {
		$LeadID = $_POST['merchant_param3'];
		$student_name = $_POST['delivery_name'];
		$Email = $_POST['billing_email'];
		$MobileNo = $_POST['delivery_tel'];
		$Course = $_POST['merchant_param1'];
		$S_ID = $_POST['SpecializationID'];
		$FeesheadID = $_POST['merchant_param2'];  //feestypeID
		$FeesheadType = $_POST['merchant_param4'];  //feestypeID
		$LearnerStatus = $_POST['merchant_param5'];  //feestypeID
		$totamt = $_POST['amount'];
		$transactionId = $_POST['order_id'];

		//die;
	} else {
		echo "Some compulsory fields are missing";
		echo "</br><a href='https://www.mitsde.com/mit-office-of-career-services-registration'>Go Back</a>";
		die;
	}
} else {
	$message = 'An <strong>unexpected error</strong> occured. Please Try Again later.';
	echo "</br><a href='https://www.mitsde.com/mit-office-of-career-services-registration'>Go Back</a>";
	die;
}




//	die;
//echo "</br>-----------------------------END-------------------------------------</br>";
//  end

// check Fees Type of Reguler Fees Payment Or Other Fees Payment

/*if($FeesType=="Second Installment" OR $FeesType=="Third Installment")
{
 $getpaydetails = mysql_query("select * from pay_getway_courses_list where `ME_Name`='".$Course."'");
			  $get_details=mysql_fetch_array($getpaydetails);

			   // echo "</br>Fees Type-->". $FeesType;  // get for testing perpose  
	 //echo "</br>-------------><------------------------------------";
			   $merchant_data = $get_details['Mercahnt_id'];  // marchentID
			   $working_key = $get_details['Working_Key'];  // Access Key
			   $access_code = $get_details['Accesscode'];  // Working Key
			  //echo "</br>PostURL-->". $Post_URL = $get_details['Post_Action_URL'];  // Post Action URL						
	// die;
}
else
{
					// for other fees payment

				 //echo "</br>Fees Type-->". $FeesType;    // get for testing perpose 
				 //echo "</br>post mrchID-->". $mt = $_POST['merchant_id'];						

			$merchant_data='204968';
			$working_key ='2514B9149393ED37B3E06F916BAC03B0'; //Shared by CCAVENUES
			$access_code ='AVWR82GA85BC71RWCB'; //Shared by CCAVENUES 

			  // die;
}
*/


// insert value in database

date_default_timezone_set('Asia/Calcutta');
$CurrentDateTime = date('Y-m-d : h:i:s');



$orchk = mysql_num_rows(mysql_query("select * from OtherFeesTransactionN where `t_process_id`='" . $transactionId . "'"));

if ($orchk > 0) {
	echo "ERROR: Duplicate Order ID<br>";

	echo "<a href='https://www.mitsde.com/mit-office-of-career-services-registration'>Go Back</a>";
	die;
} else {
	//echo "</br>INSERT INTO `temp` (`T_ID`, `T_LeadID`,`student_name`,`email_id`,`phone`, `course`,`SpecializationID`,`fees_type`, `T_installmentNo`, `T_A_Amount`, `T_B_Amount`, `tranID`, `P_Start_date`, `P_End_date`, `Status`) VALUES (NULL, '".$LeadID."','".$student_name."','".$Email."','".$MobileNo."', '".$Course."','".$S_ID."','".$FeesType."', '0', '0', '".$totamt."', '".$transactionId."', '".$CurrentDateTime."', NULL, 'processing')";
	// die;
	$query = "INSERT INTO `temp` (`T_ID`, `T_LeadID`,`student_name`,`email_id`,`phone`, `course`,`SpecializationID`,`fees_type`, `T_installmentNo`, `T_A_Amount`, `T_B_Amount`, `tranID`, `P_Start_date`, `P_End_date`, `Status`,`gateway_name`) VALUES (NULL, '" . $LeadID . "','" . $student_name . "','" . $Email . "','" . $MobileNo . "', '" . $Course . "','" . $S_ID . "','" . $FeesheadType . "', '0', '0', '" . $totamt . "', '" . $transactionId . "', '" . $CurrentDateTime . "', NULL, 'processing', 'HDFC')";
	$storeintemp = mysql_query($query) or die(mysql_error);

}


// END

/*$merchant_data='193023';
$working_key ='FF2048EE9548EAE83BF4797292611691'; //Shared by CCAVENUES
$access_code ='AVNW80FJ85AH78WNHA'; //Shared by CCAVENUES */   // testing


$merchant_data = '2874274';
$working_key = 'DC043516F6F3B974D64CE6970A15D053'; //Shared by CCAVENUES
$access_code = 'AVZO14KI67BP49OZPB'; //Shared by CCAVENUES 


foreach ($_POST as $key => $value) {
	$merchant_data .= $key . '=' . urlencode($value) . '&';
}

//print_r($merchant_data.=$key.'='.urlencode($value).'&');

$encrypted_data = encrypt($merchant_data, $working_key); // Method for encrypting the data.

?>
<!--<form method="post" name="redirect" action="https://test.ccavenue.com/transaction/transaction.do?command=initiateTransaction"> test url -->

<form method="post" name="redirect"
	action="https://secure.ccavenue.com/transaction/transaction.do?command=initiateTransaction">
	<?php
	echo "<input type=hidden name=encRequest value=$encrypted_data>";
	echo "<input type=hidden name=access_code value=$access_code>";
	?>
</form>
</center>
<script language='javascript'>document.redirect.submit();</script>
</body>

</html>