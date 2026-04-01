<h2 aling="center">New ERP Data Push</h1>
<?php //include "apply/php/header.php";
include_once "administrator/include/connection.php";
 
//echo"</br>connection-->".$conn;
 

    
//die;    
  //  echo"</br>connection-->".$conn;
                    // echo "select * from student where S_Flag<>1 AND all_verified<>0 AND amount<>'' AND transactid<>'' AND ERPLeadID<>'' AND `CourseID`<>'0' AND `SpecializationID`<>'0'";
    $sql=mysqli_query($conn,"select * from student where S_Flag_camu<>1 AND enroll_bucket<>0 AND amount<>'' AND transactid<>'' AND ExtraEdgeID<>'' AND `CourseID`<>'0' AND `SpecializationID`<>'0'");
    
    //$sql=mysqli_query($conn,"select * from student where memberID='524180'");
     
	
    $count= mysqli_num_rows($sql);

    while($data = mysqli_fetch_array($sql))
	{
	    
		//if($k != 0)
		//{
$LeadID=$data['memberID']; // Extrage ID
echo "</br>EE-ID--->".$ExtraEdgeID=$data['ExtraEdgeID']; // Extrage ID
echo "</br>";
//die;
$FirstName=$data['name'];
$MiddleName=$data['middlename'];    // payment source id
$LastName=$data['lastname'];
$getcount=strlen($LastName);
     if($getcount<=2) { $LastName=$FirstName;} else { $LastName; }
//die;	 
$Gender=$data['gender'];
$getderapi=substr($Gender,0,1);
$DateOfBirth=$data['dateofbirth'];

$old_date = explode('-', $DateOfBirth); 
$converdata = $old_date[2].'-'.$old_date[1].'-'.$old_date[0];
//die;
$MobileNumber=$data['phonenumber'];
echo "</br>email--->".$EmailAddress=$data['email'];    // other payment or I or II instrallment
echo "</br>";
$CourseID=$data['CourseID'];
$spid=$data['SpecializationID'];

             $getids=mysqli_query($conn,"SELECT new_erp_p_id,new_erp_s_id FROM `SpecializationERP` WHERE `CourseID` = $CourseID AND `SpecializationID` = $spid");
             $getrow=mysqli_fetch_array($getids);
             $newCourseID=$getrow['new_erp_p_id'];
             $newspid=$getrow['new_erp_s_id'];


$SpecializationID=$data['SpecializationID'];
$AadhaarNumber=$data['aadhar'];
$AadhaarName=$data['passport_no'];
$FatherFullName=$data['parentfname'];
$MotherFullName=$data['mothername'];
$ParentMobile=$data['parentmobilenumber'];
$CAddress1=$data['caddress']; // new added
$PAddress1=$data['address']; // new added
$ParentEmail=$data['parentemail'];
$CMobileCountryId="55";
//-----------------------------address-------------------------------
$CCountryId=$data['CcountryID'];  // 100 india
$CStateId=$data['CstateID'];  //   745 maha
$CCityId=$data['CcityID'];   //  3488 pune
$PCountryId=$data['PcountryID']; // 100
$PStateId=$data['PstateID']; // 745 maha
$PCityId=$data['PcityID']; //  3496
$PPincode=$data['ppincode'];
$cpincode=$data['cpincode'];

//-----------------------------acadmic-------------------------------
$graduation=$data['graduation'];
$University=$data['examgraduation'];
$PassingYear=$data['yearofpassinggraduation'];
$Marks=$data['scoregraduation'];
//-----------------------------companyname-------------------------------
$CompanyName=$data['companyname'];
$Companywebsite=$data['Companywebsite'];
$Designation=$data['designation'];
$CompanyPhone=$data['HRContactNo'];
$CompanyEmail=$data['cemail'];
$experience=$data['experience'];
$counsellor_name=$data['counsellor_name'];
$book_status=$data['book_status'];

if(isset($book_status))
{
   $book=0; 
}
else
{
  $book=$data['book_status'];  
}
	

//---------------------------------------------------------------------------Get Value frm student table-----------------------------------
//	die;
$url = "https://mitpro.mitsde.com/webapi/api/CRM/UpdateLeadDetails";

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$headers = array(
   "Authorization: Bearer KIb2WIYA-z1HWObQdHUK6-aHZdNMK_kqL0VmNfvc2vPjfq4hS_PFwxH113HH9zJwp64NAl4-eH_yCletMq4jxz6e6OJJ7B23a2Q_aV4qhKJ1NWGbXvlsAMYYqveHC-XOzKHC1vq5wHTfWiVRQwebeJPnTCTjm1XR2ae7I0OS3Nnzw2hAsQvijeG7crET1QVWxN2srpvsZeg6vSAizI2xOqvhPYTiLyXz1zi4GIjl9mU4XVKfO50Ev4JNexJE1sAjb8i-_GFPuoLnNEl_arBIF-4u7h88OSbvQUmSVkJEnUptKss1SrPkQw8vR8iwCDgTOoHxugjZC_sxcUOGarFQ-JzFwoN62gGsA3gl6dN5iaTDBKxxXKn-9JzdkWNp9wezC1r6SfU07XFuAqWFKMHWnIbaULZeMIM8Mu2vnjII4JyDzczmvNCLZL8joN7XCsLCcYFYa6JmIwYmKstMVldu57mKlzhZDePsWggM1vsVdoGfyYrrhxCdXLLRiUhhnq15",
   "Content-Type: application/json",
);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
		
		
$data = <<<DATA
{

    "LeadID":"$ExtraEdgeID",
    "CategoryId":1,
    "SalutaionId":1,
    "InstituteId":1,
    "FirstName":"$FirstName",
    "MiddleName":"$MiddleName",
    "LastName":"$LastName",
    "Gender":"$getderapi",
    "DateOfBirth":"$DateOfBirth",
    "MobileNumber":"$MobileNumber",
    "EmailAddress":"$EmailAddress",
    "ParentProgramId":$newCourseID,
    "SpecializationID":$newspid,
    "AadhaarNumber":"$AadhaarNumber",
    "AadhaarName":"$AadhaarName",
    "FatherFullName":"$FatherFullName",
    "MotherFullName":"$MotherFullName",
    "ParentMobile":"$ParentMobile",
    "ParentEmail":"$ParentEmail",
    "CAddress1":"$CAddress1",
    "CCountryId":"$CCountryId",
    "CStateId":"$CStateId",
    "CCityId":"$CCityId",
    "CPincode":"$cpincode",
    "PAddress1":"$PAddress1",
    "PCountryId":"$PCountryId",
    "PStateId":"$PStateId",
    "PCityId":"$PCityId",
    "PPincode":"$PPincode",
    "ExaminationId":3,
    "AdacemicStatusId":1,
    "DegreeName": "$graduation",
    "University":"$University",
    "PassingYear":"$PassingYear",
    "Score":$Marks,
    "CompanyName":"$CompanyName",
    "Designation":"$Designation",
    "CompanyPhone":"$CompanyPhone",
    "CompanyWebSite":"$Companywebsite",
    "CompanyEmail":"hr@mitsde.com",
    "YearsOfExperience":1,
    "CallStatusId":"1",
    "CounsellorName":"$counsellor_name",
    "CounsellorEmailId":"abc@mitsde.com",
    "IsReferral":0,
    "Referredby":"",
    "BookDiscount":$book,
    "PaymentMode":null,
    "LeadType":"MIT"
}

DATA;
  

curl_setopt($curl, CURLOPT_POSTFIELDS,$data);

//for debug only!
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

$resp = curl_exec($curl);
print($data);
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
//-----------------------------------------------------API Response---------------------------
$response = json_decode($resp, true);


$error_code   = $response['ErrorCode'];
$error_mes   = $response['ResultMessage'];

//print_r($response);
echo "<br>Error code:".$error_code;
echo "<br>Message:".$error_mes ;
echo "<br>Message:". $msg=trim($error_mes);
echo "</br><-----------------------------------------------------------------></br>";

		
		if ($error_mes=="Lead saved successfully and Failed To Send login details." || $error_mes=="Student Details  updated successfully." ||  $error_mes=="Lead updated successfully.")
		{
		   
		   // echo "</br>S-->";
		    date_default_timezone_set('Asia/Kolkata');
	$apidataTime=date("Y-m-d H:i:s");
	$Erolleddata=date("Y-m-d");
	 //////echo "</br>UPDATE student SET `S_Flag_camu`='1',`is_enroll_date`='$Erolleddata',`API_Response_camu`='$error_mes', `API_DT_cam`='$apidataTime' where `ExtraEdgeID`='$ExtraEdgeID' AND `memberID`='$LeadID' ";
		 
		$update_flag=mysqli_query($conn,"UPDATE student SET `S_Flag_camu`='1',`is_enroll_date`='$Erolleddata',`API_Response_camu`='$error_mes', `API_DT_cam`='$apidataTime' where `ExtraEdgeID`='$ExtraEdgeID' AND `memberID`='$LeadID'");
                                      if(!$update_flag)
										{
											echo "</br>Error in Mysql Query Update Flag".mysqli_error();
										}
										else
										{
										   //echo "</br>Flag Updated As success </br>";
										} 
										//echo "</br>Lead Updated"; 
		}
		else
		{
		     
		     date_default_timezone_set('Asia/Kolkata');
	       $apidataTime=date("Y-m-d H:i:s");
	       $Erolleddata=date("Y-m-d");
		  // echo "</br>F-->";
		//echo "</br>UPDATE student SET `F_Flag_cam`='2',`API_Response_camu`='$error_mes',`API_DT_cam`='$apidataTime' where  `ExtraEdgeID`='$ExtraEdgeID' AND `memberID`='$LeadID'";
		  
		$update_flag=mysqli_query($conn,"UPDATE student SET `F_Flag_cam`='2',`API_Response_camu`='$error_mes',`API_DT_cam`='$apidataTime' where  `ExtraEdgeID`='$ExtraEdgeID' AND `memberID`='$LeadID'");
                                      if(!$update_flag)
										{
											echo "</br>Error in Mysql Query Update Flag".mysqli_error();
										}
										else
										{
										  // echo "</br>Flag Updated As Failed </br>";
										}  
										//echo "</br>Lead No Updated";
		     
		      
				
		}
	}
	
 
 ?>   
 
 
             