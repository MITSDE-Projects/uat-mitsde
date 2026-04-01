<p align="center">MIT-SDE Redirect To PaPhi Payment Getway Please Wait Five Minutes</p>
<?php 

include('admin/include/config.php');

 error_reporting(0);
         
       
	 //post value  
	 /*echo "email id-->". $_POST['billing_email'];
	echo "delivery_tel-->". $_POST['delivery_tel'];
	echo "amount-->". $_POST['amount'];*/
    
   //die; 
    if($_SERVER['REQUEST_METHOD'] == 'POST' )
	{
	$_POST['billing_email'];
	$_POST['delivery_tel'];
	$_POST['amount'];
	
	        if( $_POST['billing_email'] != '' AND $_POST['delivery_tel'] != '' AND $_POST['amount']!= '' ) 
	             {
	                  $LeadID = $_POST['merchant_param3'];
                      $student_name = $_POST['delivery_name'];
                      $Email= $_POST['billing_email'];
                      $MobileNo= $_POST['delivery_tel'];
                      $Course= $_POST['merchant_param1'];
                      $S_ID= $_POST['SpecializationID'];
                      $FeesType= $_POST['merchant_param2'];  //feestypeID
                      $totamt=$_POST['amount'];
	                  $transactionId=$_POST['order_id'];
	    
	  
            	}
	         else
	           {
	              echo"Some compulsory fields are missing";
	              echo "</br><a href='https://www.mitsde.com/OtherFeesPaymenPayPhi'>Go Back</a>";
	             die;  
	          }
	          }
	     else
	 {
          $message = 'An <strong>unexpected error</strong> occured. Please Try Again later.';
          echo "</br><a href='https://www.mitsde.com/OtherFeesPaymenPayPhi'>Go Back</a>";
          die;
	   }
	
	
	

     

                     // insert value in database

                       date_default_timezone_set('Asia/Calcutta');
                       $CurrentDateTime=date('Y-m-d : h:i:s');
	
					  
	
        $orchk = mysql_num_rows(mysql_query("select * from OtherFeesTransaction where `t_process_id`='".$transactionId."'"));

	if($orchk>0)
		  {
		  echo "ERROR: Duplicate Order ID<br>";
		  
		  echo "<a href='https://www.mitsde.com/OtherFeesPaymenPayPhi'>Go Back</a>";
		  die;
		  }
		  else
		  {
		      //echo "</br>INSERT INTO `temp` (`T_ID`, `T_LeadID`,`student_name`,`email_id`,`phone`, `course`,`SpecializationID`,`fees_type`, `T_installmentNo`, `T_A_Amount`, `T_B_Amount`, `tranID`, `P_Start_date`, `P_End_date`, `Status`) VALUES (NULL, '".$LeadID."','".$student_name."','".$Email."','".$MobileNo."', '".$Course."','".$S_ID."','".$FeesType."', '0', '0', '".$totamt."', '".$transactionId."', '".$CurrentDateTime."', NULL, 'processing')";
		     // die;
               $query= "INSERT INTO `temp` (`T_ID`, `T_LeadID`,`student_name`,`email_id`,`phone`, `course`,`SpecializationID`,`fees_type`, `T_installmentNo`, `T_A_Amount`, `T_B_Amount`, `tranID`, `P_Start_date`, `P_End_date`, `Status`,`gateway_name`) VALUES (NULL, '".$LeadID."','".$student_name."','".$Email."','".$MobileNo."', '".$Course."','".$S_ID."','".$FeesType."', '0', '0', '".$totamt."', '".$transactionId."', '".$CurrentDateTime."', NULL, 'processing','PayPhi')";
               $storeintemp = mysql_query($query) or die(mysql_error);
               
               
               //---------------------------API code below-----------------------------------
//echo "</br>--------------------------POST Value------------------------------";
$merchantId="P_50002";
$merchantTxnNo=$transactionId;
$amount=$totamt;
$currencyCode="356";
$payType="0";
$customerEmailID=$Email;
$customerName=$_POST['delivery_name'];
$customerMobileNo=$_POST['delivery_tel'];
$transactionType="SALE";
date_default_timezone_set('Asia/Kolkata');
$txnDate=date('Ymdhis');
$returnURL="https://mitsde.com/payresponse.php";
//echo "</br>";


//echo "</br>--------------------------Gegerate SecureHash------------------------------";
//echo "</br>";
//hashKey = amount currencyCode customerEmailID merchantId merchantTxnNo payType returnURL transactionType txnDate
//--------------------Gegerate SecureHash-------------------------------------
$hashText = "$amount$currencyCode$customerEmailID$customerMobileNo$customerName$merchantId$merchantTxnNo$payType$returnURL$transactionType$txnDate";

// Secret Key
$secretKey = '10ba8f8f0ac14cf3b4fe947517cd3d80';

// Generate the secure hash using HMAC-SHA256 algorithm
$hash = hash_hmac('sha256', $hashText, $secretKey);

//echo "</br>Generated Hash: " . $hash;

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
/*echo "</br>";
echo "</br>--------------------------API Request----------------------------";
echo "</br>";
print_r($data);*/
$response = json_decode($resp, true);
//echo "</br>";

/*echo "</br>--------------------------API Response----------------------------";
echo "</br>";
print_r($response);*/
$redirectURI   = $response['redirectURI'];
$tranCtx   = $response['tranCtx'];
//echo "</br>error_code-->".$error_code   = $response['secureHash'];

$redirectURL=$redirectURI."?"."tranCtx=".$tranCtx;
 //die;    
		  }
		  
		?>
          
<script type="text/javascript">
  window.location.href='<?php echo $redirectURL;?>';
</script>          
	               
</body>
</html>

