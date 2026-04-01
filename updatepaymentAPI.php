<?php ini_set('max_execution_time', '7000');
 
 include('admin/include/config.php');
 



 
    date_default_timezone_set('Asia/Kolkata');
	echo "</br>DATE-->".$apidataTime=date("Y-m-d H:i:s");
    
    
   $sql=mysql_query("select * from OtherFeesTransaction where S_Flag<>1 AND email<>'' AND PayU_ID<>'' AND transationDate<>''");
//	$sql=mysql_query("select * from OtherFeesTransaction where S_Flag<>1 AND email<>'' AND transationDate<>'' AND `PayU_ID`='110294590899'");
	
  //  echo "</br>Total count-->".$count= mysql_num_rows($sql);
//die;
    while($data = mysql_fetch_array($sql))
	{
		//if($k != 0)
		//{
	  echo "</br>lead id-->".$leadid=$data['leadID'];
	  $InstruNo=$data['PayU_ID'];
	  $PayerBankID=$data['PayerBankID'];    // payment source id
	  $InstruDate1=$data['transationDate'];
	  $ClearedDate1=$data['transationDate'];
	  //$old_date = explode('-', $DateOfBirth); 
    //$converdata = $old_date[2].'-'.$old_date[1].'-'.$old_date[0];
	  
	  $PaidAmount=$data['amount'];
	  $FeeHeadID=$data['FeeHeadID'];
	  $ReceiptType=$data['ReceiptType'];    // other payment or I or II instrallment
	  
	  $SpecializationID=$data['SpecializationID'];
	  $PayeeInstituteID=$data['PayeeInstituteID'];
	  $PayeeBankID=$data['PayeeBankID'];
	  
	  $PayeeACNo=$data['PayeeACNo'];
	  $PayeeACName=$data['PayeeACName'];
	  $PayeeBranch=$data['PayeeBranch'];
	  $PayeeBankAddress=$data['PayeeBankAddress'];
	  $PayeeIFSCCode=$data['PayeeIFSCCode'];
	  
	  
		
		$timestamp1 = strtotime($InstruDate1);
		$InstruDate = date("d-m-Y", $timestamp1);
		
		$timestamp2 = strtotime($ClearedDate1);
		$ClearedDate = date("d-m-Y", $timestamp2);
//	die;	
		//extract($_POST);
	/*	$data_array =  array("API_Parameters" => array(
           "LeadID" => $leadid,
           "ReceiptType" => $ReceiptType,
           "PaymentType" => "L",
           "PaymentModeID" => 10,
           "InstruNo" => $InstruNo,
           "InstruDate" => $InstruDate,
           "ClearedDate" => $ClearedDate,
           "PaidAmount" => $PaidAmount,
           "FeeHeadID" => $FeeHeadID,
           "PayerBankID" => $PayerBankID,
           "PayerBranch" => "",
           "PayerBankAddress" => "",
           "PayerIFSCcode" => "",
           "PayeeInstituteID" => $PayeeInstituteID,
           "PayeeBankID" => $PayeeBankID,
           "PayeeACNo" => $PayeeACNo,
           "PayeeACName" => $PayeeACName,
           "PayeeBranch" => $PayeeBranch,
           "PayeeBankAddress" => $PayeeBankAddress,
           "PayeeIFSCCode" => $PayeeIFSCCode,
           "UserId" => "8",
           "CurrencyID" => "1",
           "InstallmentRuleID" => "",
           "SpecializationID" => $SpecializationID

      ),
    
           
);*/

$url = "https://erp.mitsde.com/OnlineApplicationAPI/OnlineApplicationAPI.asmx/UpdatePaymentDetails";

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$headers = array(
   "Authorization: MITEsd7CqK6enn8aANDTMlNkBBJhPYN31dAIhHDRT01zK3rteZ9t8ffid6XpCUkjX1S85KkYLIHTRRn0TwLGG4S7SqxwlZ2",
   "Content-Type: application/json",
);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
  
  $data = <<<DATA
{
"API_Parameters": {
"LeadID":'$leadid',
"ReceiptType":"$ReceiptType",
"PaymentType":"L",
"PaymentModeID":10,
"InstruNo":"$InstruNo",
"InstruDate":"$InstruDate",
"ClearedDate":"$ClearedDate",
"PaidAmount":'$PaidAmount',
"FeeHeadID":'$FeeHeadID',
"PayerBankID":'$PayerBankID',
"PayerBranch":"",
"PayerBankAddress":"",
"PayerIFSCcode":"",
"PayeeInstituteID":'$PayeeInstituteID',
"PayeeBankID":'$PayeeBankID',
"PayeeACNo":" $PayeeACNo",
"PayeeACName":"$PayeeACName",
"PayeeBranch":"$PayeeBranch",
"PayeeBankAddress":"$PayeeBankAddress",
"PayeeIFSCCode":"$PayeeIFSCCode",
"UserId":8,
"CurrencyID":1,
"InstallmentRuleID":"",
"SpecializationID":'$SpecializationID'
}
}
DATA;

curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

//for debug only!
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

$resp = curl_exec($curl);
curl_close($curl);
if(curl_exec($curl) === false)
{
    echo 'Curl error: ' . curl_error($curl);
}
else
{
    echo 'Operation completed without any errors';
}
//var_dump($resp);

$response = json_decode($resp, true);

$error_code   = $response['Error code'];
$error_mes   = $response['d'];

//print_r($response);
echo "<br>Error code:".$error_code;
echo "<br>Message:".$error_mes;
echo "</br>";
echo "</br>";
//die;		
		
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
 
 
             