<?php
session_start();
$sessionid=session_id();
if($_SESSION['logincheck'] != $sessionid.$_SESSION['salt']){
	header('Location:index.php');
	die;
}
include_once '../php/config.php';

$setCounter = 0; 
$setExcelName = "application_form".time(); 
$setSql = "SELECT applicationid,memberID,username,active,programmesugpg,aadhar,gender,name,middlename,lastname,dateofbirth,nationality,category,country,photo_image,address,city,state,pincode,phonenumber,email,caddress,ccity,cstate,cpincode,cphonenumber,cemail,relationshipwithapplicant,professionoftheparent,annualincome,parentmobilenumber,parentemail,bloodgroup,physicallychallenged,examboardname10,percentage10,yearofpassing10,yeargap10,examboardname12,percentage12,yearofpassing12,yeargap12,testcenter,colorRadio,dddate,ddnumber,bankname,branchname,transactid,isPayment,terms,Is_Active,board10,board12,ccountry,englishread,englishwrite,englishspeak,examname,examnumber,examrank,examscore,examyear,examname2,examnumber2,examrank2,examscore2,examyear2,examapplicationnumber,examapplicationnumber2,mpdomicile,organizationdetails,parentfname,parentlname,pcity,pcountry,ppincode,pstate,school10,school12,score10,score12,stream12,year10,year12,totaloutof10,totaloutof12,isComplete,lastPage,sop,degree1,degree2,inst1,inst2,university1,university2,yearofpassingd1,yearofpassingd2,scoredegree1,scoredegree2,studentisdcode,parentisdcode,formstatus,paymenttype FROM student order by memberID"; 
$setRec = mysqli_query($conn,$setSql); 
$setCounter = mysqli_num_fields($setRec); 


for ($i = 0; $i < $setCounter; $i++) 
{ 
	$colObj = mysqli_fetch_field_direct($setRec,$i);                            
	$col = $colObj->name;
	$setMainHeader.=$col.",";
 } 
 $setMainHeader."\n";
 while($rec = mysqli_fetch_row($setRec)) 
 { 
 	$rowLine = ''; 
 	foreach($rec as $value) 
 	{ 
 		if(!isset($value) || $value == "") 
 		{ 
 			$value = ",";
 		} else 
 		{
 			 //It escape all the special charactor, quotes from the data. 
 		 	$value = strip_tags(str_replace('"', '""', $value));
 		 	$value = '"' . $value . '"' . ",";
 		} 
 			$rowLine .= $value; 
 	} 
 		
 	$setData .= trim($rowLine)."\n"; 
} 
$setData = str_replace("r", "", $setData);
if ($setData == "") 
{
 $setData = "no matching records foundn";
}
$setCounter = mysqli_num_fields($setRec);
 //This Header is used to make data download instead of display the data 
 header("Content-type: application/csv");
 header("Content-Disposition: attachment; filename=".$setExcelName."_Report.csv"); 
 header("Pragma: no-cache"); header("Expires: 0");
  //It will print all the Table row as Excel file row with selected column name as header. 
  echo ucwords($setMainHeader)."\n".$setData."\n";
?>