<?php ini_set('max_execution_time', '7000');
 
 include('admin/include/config.php');
 



 
    date_default_timezone_set('Asia/Kolkata');
	echo "</br>DATE-->".$apidataTime=date("Y-m-d H:i:s");
    
    
  // $sql=mysql_query("select * from OtherFeesTransaction where S_Flag<>1 AND email<>'' AND PayU_ID<>'' AND transationDate<>''");
  echo "</br>select * from OtherFeesTransaction where S_Flag<>1 AND email<>'' AND transationDate<>'' AND `PayU_ID`='113684051344'";
	$sql=mysql_query("select * from OtherFeesTransaction where S_Flag<>1 AND email<>'' AND transationDate<>'' AND `PayU_ID`='113684051344'");
	
    echo "</br>Total count-->".$count= mysql_num_rows($sql);
//die;
    while($data = mysql_fetch_array($sql))
	{
		//if($k != 0)
		//{
	  echo "</br>lead id-->".$leadid=$data['leadID'];
	  echo "</br>PayU_ID-->". $InstruNo=$data['PayU_ID'];
	  echo "</br>PayerBankID-->".$PayerBankID=$data['PayerBankID'];    // payment source id
	  echo "</br>transationDate-->".$InstruDate1=$data['transationDate'];
	  echo "</br>amount-->".$PaidAmount=$data['amount'];
	  echo "</br>FeeHeadID-->".$FeeHeadID=$data['FeeHeadID'];
	  echo "</br>ReceiptType-->".$ReceiptType=$data['ReceiptType'];    // other payment or I or II instrallment
	  
	  echo "</br>SpecializationID-->".$SpecializationID=$data['SpecializationID'];
	   echo "</br>course_id-->".$course_id=$data['course_id'];
	   
	   if($ReceiptType=="OC")
	   {
	      echo "</br>InstallmentRule-->". $InstallmentRule="";
	      echo "</br>InstallmentNo-->". $InstallmentNo=0;
	   }
	   else
	   {
	       $get_installment_rul=mysql_query("SELECT InstallmentRule,InstallmentNo FROM `No_Of_Installment_NewERP` WHERE `ProgramId` = $course_id");
	       $rul_detail = mysql_fetch_array($get_installment_rul);
	       echo "</br>InstallmentRule-->".$InstallmentRule=$rul_detail['InstallmentRule'];
	       echo "</br>InstallmentNo-->".$InstallmentNo=$rul_detail['InstallmentNo'];
	   }
	   
	 
	die;	
	$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://uat.mitpro.mitsde.com/Webapi/api/CRM/PaymenttAPI',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS =>'{  
"CRMLeadId":"$leadid",
"FeeType":"OC",
"PaymentType":"Lumpsum",
"PaymentMode":"Online Payment",
"TransactionNo":"$InstruNo",
"ReceiptAmount":200,
"ReceiptDate":"2025-02-19",
"FeeHeadId":6,
"UserId": 1,
"CurrencyID":1,
"InstallmentRule":"$InstallmentRule",
"InstallmentNo":$InstallmentNo,
}',
  CURLOPT_HTTPHEADER => array(
    'Authorization: Bearer wAv_UAYeyq_8nOfmih43AJOyqP_De1ZNka2xfE-fIQ54HMnqV4_gseai_dFWjegdELawl25iLhq-xFetIdZ4NaZ8M13gp7dxe4jFbWBZII3YBOKWJYigyYFNNhEdM_30imwBbEfq6ekSrOyzRzLSQUqRcpc03ptyuofvGKZA40VPzlB8cC7PwI-GTdb6E_QPWvslwrwkI0bAxKAttRMSjtAosz76XcqLnt2VL65zVE8lKcPy8ibBKVmFB8arqtA8fTs5Y8Qqf8y3XG9sUDlQ8QS9Y7BsNo8CDqOGmYYNUhgD5u-UK93faTX3kluEok6DL-K-3kPuUTgYSv2KorNXm8IhIw9UXwJp5_t8H7mpAFsWGxEK0U8R3I8KbJNFtJS88R8aTp_vU9FMl1ZyIwX6cOiu400qhCTvUBolFdbJo8AU0wRoQHQ0JSd_SthG_LRXlPiNp6egcmlfyvGbSls8QTIIgHrP1DxcU7i9YBH1obN9Wx6lXGV-oSN-hwJlGPCP',
    'Content-Type: application/json'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;

$error_code   = $response['Error code'];
$error_mes   = $response['d'];

//print_r($response);
echo "<br>Error code:".$error_code;
echo "<br>Message:".$error_mes;
echo "</br>";
echo "</br>";
die;		
		
		if ($error_mes!="")
		{
		 //echo "</br>UPDATE OtherFeesTransaction SET `S_Flag`='1',`response`='$error_mes', `API_DT`='$apidataTime' where `PayU_ID`='$InstruNo' and transationDate= '$InstruDate1' AND `leadID`='$leadid'";
		 
		$update_flag=mysql_query("UPDATE OtherFeesTransaction SET `S_Flag`='1',`response`='$error_mes', `API_DT`='$apidataTime' where `PayU_ID`='$InstruNo' and transationDate= '$InstruDate1' AND `leadID`='$leadid'");
                                      if(!$update_flag)
										{
											echo "</br>Error in Mysql Query Update Flag".mysql_error();
										}
										else
										{
										   echo "</br>Flag Updated As success </br>";
										}  
		}
		else
		{
		               //echo "</br>UPDATE OtherFeesTransaction SET `F_Flag`='2',`response`='$error_mes',`API_DT`='$apidataTime' where `PayU_ID`='$InstruNo' AND transationDate= '$InstruDate1' AND `leadID`='$leadid'";
		  
		$update_flag=mysql_query("UPDATE OtherFeesTransaction SET `F_Flag`='2',`response`='$error_mes',`API_DT`='$apidataTime' where `PayU_ID`='$InstruNo' AND transationDate= '$InstruDate1' AND `leadID`='$leadid'");
                                      if(!$update_flag)
										{
											echo "</br>Error in Mysql Query Update Flag".mysql_error();
										}
										else
										{
										   echo "</br>Flag Updated As Failed </br>";
										}  
		}
	}
	
 
 ?>   
 
 
             