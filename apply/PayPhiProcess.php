<p align="center">MIT-SDE Redirect To PayPhi Payment Getway Please Wait Five Minutes</p>
<?php 

include "php/header.php";
include_once "php/db.php";

 error_reporting(0);
         
//echo "</br>--------------------------POST Value------------------------------";
$merchantId="P_50002";
$merchantTxnNo=rand(1000000000,9999999999);
$amount=$_POST['amount'];
$currencyCode="356";
$payType="0";
$customerEmailID=$_POST['billing_email'];
$customerName=$_POST['delivery_name'];
$customerMobileNo=$_POST['delivery_tel'];
$transactionType="SALE";
date_default_timezone_set('Asia/Kolkata');
$txnDate=date('Ymdhis');
$returnURL="https://mitsde.com/apply/payresponse.php";

//echo "</br>";




//echo "</br>----------------------------------------------------------POST----------------------------------";



  $LeadID = $_POST['merchant_param3'];
  $student_name = $_POST['delivery_name'];
  $Email= $_POST['billing_email'];
   $MobileNo= $_POST['delivery_tel'];
  $Course= $_POST['merchant_param1'];
  $totamt=$_POST['amount'];
  $transactionId=$merchantTxnNo;




		
	//die;	
		
	  			// insert value in database

                       date_default_timezone_set('Asia/Calcutta');
                       $CurrentDateTime=date('Y-m-d : h:i:s');
	
					  
	
        $orchk = mysqli_num_rows(mysqli_query($connection,"select * from tbl_transactions_details where `order_id`='".$transactionId."'"));

	if($orchk>0)
		  {
		  echo "ERROR: Duplicate transation ID<br>";
		  
		  echo "<a href='https://www.mitsde.com/apply/index.php'>Go Back</a>";
		  die;
		  }
		  else
		  {
		    //  echo "</br>INSERT INTO `temp` (`T_ID`, `T_LeadID`,`student_name`,`email_id`,`phone`, `course`, `T_installmentNo`, `T_A_Amount`, `T_B_Amount`, `tranID`, `P_Start_date`, `P_End_date`, `Status`) VALUES (NULL, '".$LeadID."','".$student_name."','".$Email."','".$MobileNo."', '".$Course."','0', '0', '".$totamt."', '".$transactionId."', '".$CurrentDateTime."', NULL, 'processing')";
              $query= "INSERT INTO `temp` (`T_ID`, `T_LeadID`,`student_name`,`email_id`,`phone`, `course`, `T_installmentNo`, `T_A_Amount`, `T_B_Amount`, `tranID`, `P_Start_date`, `P_End_date`, `Status`) VALUES (NULL, '".$LeadID."','".$student_name."','".$Email."','".$MobileNo."', '".$Course."','0', '0', '".$totamt."', '".$transactionId."', '".$CurrentDateTime."', NULL, 'processing')";
               $storeintemp = mysqli_query($connection,$query) or die('</br>Error, Insert In TEMP');
               
               //echo "</br>--------------------------Gegerate SecureHash------------------------------";
//echo "</br>";
//hashKey = amount currencyCode customerEmailID merchantId merchantTxnNo payType returnURL transactionType txnDate
//--------------------Gegerate SecureHash-------------------------------------
$hashText = "$amount$currencyCode$customerEmailID$customerMobileNo$customerName$merchantId$merchantTxnNo$payType$returnURL$transactionType$txnDate";

// Secret Key
$secretKey = '10ba8f8f0ac14cf3b4fe947517cd3d80';

// Generate the secure hash using HMAC-SHA256 algorithm
$hash = hash_hmac('sha256', $hashText, $secretKey);

//echo "Generated Hash: " . $hash;


//---------------------------API code below-----------------------------------

$url = "https://secure-ptg.payphi.com/pg/api/v2/initiateSale";

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$headers = array(
"Content-Type: application/json",
);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

$data = <<<DATA
{
"merchantId":"$merchantId",
"merchantTxnNo":"$merchantTxnNo",
"amount":"$amount",
"currencyCode":"356",
"payType":"0",
"customerEmailID":"$customerEmailID",
"customerName":"$customerName",
"customerMobileNo":"$customerMobileNo",
"transactionType":"SALE",
"txnDate":"$txnDate",
"returnURL": "$returnURL",
"secureHash":"$hash"
}
DATA;

curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
//print_r($data);
//for debug only!
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

$resp = curl_exec($curl);
curl_close($curl);
//var_dump($resp);
//echo "</br>";
//echo "</br>--------------------------API Request----------------------------";
//echo "</br>";
//print_r($data);
$response = json_decode($resp, true);
//echo "</br>";

//echo "</br>--------------------------API Response----------------------------";
//echo "</br>";
//print_r($response);
$redirectURI   = $response['redirectURI'];
$tranCtx   = $response['tranCtx'];

$redirectURL=$redirectURI."?"."tranCtx=".$tranCtx;
    
     ?>
     
     <script type="text/javascript">
  window.location.href='<?php echo $redirectURL;?>';
</script>
<?php
     exit();
  }
		  
?>
     

</form>
</center>

</body>
</html>

