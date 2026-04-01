<h2 aling="center">OLD ERP Data Push</h1>
<?php //include "apply/php/header.php";
include_once "administrator/include/connection.php";
 
//echo"</br>connection-->".$conn;
 

    
//die;    
  //  echo"</br>connection-->".$conn;
                    // echo "select * from student where S_Flag<>1 AND all_verified<>0 AND amount<>'' AND transactid<>'' AND ERPLeadID<>'' AND `CourseID`<>'0' AND `SpecializationID`<>'0'";
    $sql=mysqli_query($conn,"select * from student where S_Flag<>1 AND enroll_bucket<>0 AND amount<>'' AND transactid<>'' AND ERPLeadID<>'' AND `CourseID`<>'0' AND `SpecializationID`<>'0'");
    //$sql=mysqli_query($conn,"select * from student where ERPLeadID='401460'");
     
	
    echo "</br>count-->".$count= mysqli_num_rows($sql);

    while($data = mysqli_fetch_array($sql))
	{
	    
		//if($k != 0)
		//{
echo "</br>leadid-->".$LeadID=$data['ERPLeadID'];
//die;
$FirstName=$data['name'];
$MiddleName=$data['middlename'];    // payment source id
$LastName=$data['lastname'];
$getcount=strlen($LastName);
     if($getcount<=2) { $LastName=$FirstName;}else{ $LastName; }
//die;	 
$Gender=$data['gender'];
$getderapi=substr($Gender,0,1);
$DateOfBirth=$data['dateofbirth'];

$old_date = explode('-', $DateOfBirth); 
$converdata = $old_date[2].'-'.$old_date[1].'-'.$old_date[0];
//die;
$MobileNumber=$data['phonenumber'];
echo "</br>Email ID-->".$EmailAddress=trim($data['email']);    // other payment or I or II instrallment
echo "</br>";
$desciplines=$data['desciplines'];
 $CourseID=$data['CourseID'];
 $SpecializationID=$data['SpecializationID'];   
if($desciplines=="PGDM in Construction and Project Management")
{
   $CourseID=131;
   $SpecializationID=1;
}


if($desciplines=="PGDM in Marketing Management")
{
   $CourseID=136;
   $SpecializationID=2;
}


if($desciplines=="PGDM in Human Resource Management")
{
   $CourseID=136;
   $SpecializationID=3;
}


if($desciplines=="PGDM in Operations Management")
{
  $CourseID=136;
 $SpecializationID=4;
}


if($desciplines=="PGDM in Project Management")
{
   $CourseID=136;
   $SpecializationID=5;
}


if($desciplines=="PGDM in Finance Management")
{
   $CourseID=136;
   $SpecializationID=6;
}


$AadhaarNumber=$data['aadhar'];
$FatherFullName=$data['parentfname'];
$MotherFullName=$data['mothername'];
$ParentMobile=$data['parentmobilenumber'];
$CAddress1=$data['caddress']; // new added
$PAddress1=$data['address']; // new added
$ParentEmail=$data['parentemail'];
$CMobileCountryId="55";
$CCountryId=$data['CcountryID'];  // 100 india
$CStateId=$data['CstateID'];  //   745 maha
$CCityId=$data['CcityID'];   //  3488 pune
$PCountryId=$data['PcountryID']; // 100
$PStateId=$data['PstateID']; // 745 maha
$PCityId=$data['PcityID']; //  3496
$PPincode=$data['ppincode'];
$cpincode=$data['cpincode'];
$ExamName="Graduation";
$graduation=$data['graduation'];
$University=$data['exampostgraduation'];
$PassingYear=$data['yearofpassing10'];
$Marks=$data['score10'];
$CompanyName=$data['companyname'];
$Designation=$data['designation'];
$CompanyPhone=$data['cphonenumber'];
$CompanyEmail=$data['cemail'];
$transactid=$data['transactid'];
$paydate=$data['paydate'];
	 //echo "</br>industrysector-->". $SectorID=$data['industrysector'];
	  //$PaymentType=$data['PayeeIFSCCode']; I
	  //$UserId=$data['PayeeIFSCCode'];   10
	 // $CallStatusId=$data['PayeeIFSCCode'];  6= inprocess 8= enrolled
	
		
		$timestamp2 = strtotime($DateOfBirth);
		$BDate = date("d-m-Y", $timestamp2);
$url = "https://erp.mitsde.com/OnlineApplicationAPI/OnlineApplicationAPI.asmx/UpdateLeadDetails";

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
"LeadID": "$LeadID",
"FirstName": "$FirstName",
"MiddleName": "$MiddleName",
"LastName":"$LastName",
"Gender": "$getderapi",
"DateOfBirth": "$converdata",
"MobileNumber": "$MobileNumber",
"EmailAddress": "$EmailAddress",
"CourseID": "$CourseID",
"SpecializationID":"$SpecializationID",
"AadhaarNumber": "$AadhaarNumber",
"FatherFullName": "$FatherFullName",
"MotherFullName": "$MotherFullName",
"ParentMobile": "",
"ParentEmail": "$ParentEmail",
"CAddress1": "$CAddress1",
"CAddress2": "",
"CCountryId": "$CCountryId",
"CStateId": "$CStateId",
"CCityId": "$CCityId",
"CPincode": "$cpincode",
"CMobileCountryId": "$CMobileCountryId",
"CMobile":"$MobileNumber",
"CEmail": "$EmailAddress",
"PAddress1" : "$PAddress1",
"PAddress2" : "",
"PCountryId": "$PCountryId",
"PStateId": "$PStateId",
"PCityId": "$PCityId",
"PPincode": "$PPincode",
"ExamName": "$ExamName",
"University": "$University",
"PassingYear": "$PassingYear",
"Marks": "$Marks",
"Specialization": "$graduation",
"CompanyName": "$CompanyName",
"Designation": "$Designation",
"CompanyPhone": "$CompanyPhone",
"CompanyEmail": "$CompanyEmail",
"SectorID": "2",
"PaymentType": "I",
"UserId":"10",
"CallStatusId":"8"
}
}
DATA;
  

curl_setopt($curl, CURLOPT_POSTFIELDS,$data);

//for debug only!
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

$resp = curl_exec($curl);
print($data);
//curl_close($curl);
echo curl_errno($curl);
echo curl_error($curl);
curl_close($curl);


//var_dump($resp);
$response = json_decode($resp, true);


$error_code   = $response['ErrorCode'];
$error_mes   = $response['d'];

//print_r($response);
echo "<br>Error code:".$error_code;
echo "<br>Message:".$error_mes ;
echo "<br>Message:". $msg=trim($error_mes,'"');
echo "</br><-----------------------------------------------------------------></br>";
date_default_timezone_set('Asia/Kolkata');
	$apidataTime=date("Y-m-d H:i:s");
	$Erolleddata=date("Y-m-d");
//die;		
		
		if ($msg!="Lead details updated successfully.")
		{
		  // echo "</br>F-->";
		//echo "</br>UPDATE student SET `F_Flag`='2',`API_Response`='$msg',`API_DT`='$apidataTime' where `transactid`='$transactid' AND `memberID`='$LeadID'";
		  
		$update_flag=mysqli_query($conn,"UPDATE student SET `F_Flag`='2',`API_Response`='$msg',`API_DT`='$apidataTime' where `transactid`='$transactid'  AND `ERPLeadID`='$LeadID'");
                                      if(!$update_flag)
										{
											echo "</br>Error in Mysql Query Update Flag".mysqli_error();
										}
										else
										{
										   echo "</br>Flag Updated As Failed </br>";
										}  
		}
		else
		{
		      
				// echo "</br>S-->";
		    
		// echo "</br>UPDATE student SET `S_Flag`='1', `is_enroll_date`='$Erolleddata',`API_Response`='$msg', `API_DT`='$apidataTime' where `transactid`='$transactid' AND `ERPLeadID`='$LeadID'";
		 
		$update_flag=mysqli_query($conn,"UPDATE student SET `S_Flag`='1',`is_enroll_date`='$Erolleddata',`API_Response`='$msg', `API_DT`='$apidataTime' where `transactid`='$transactid' AND `ERPLeadID`='$LeadID'");
                                      if(!$update_flag)
										{
											echo "</br>Error in Mysql Query Update Flag".mysqli_error();
										}
										else
										{
										   echo "</br>Flag Updated As success </br>";
										} 
		}
	}
	
 
 ?>   
 
 
             