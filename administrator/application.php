<?php
ob_start();
session_start();

if($_SESSION['user_id'] == ''){
	header('Location:index.php');
	die;
}
include_once 'include/connection.php';

$setCounter = 0; 
$setExcelName = "application_form".time(); 

$_GET['formstatus'];
//die;

if(isset($_GET['formstatus']) && $_GET['enroll_bucket']!='1'){


$setSql = "SELECT applicationid,memberID,programmesugpg,amount,transactid,aadhar,gender,name,middlename,mothername,lastname,dateofbirth,nationality,institute,mpdomicile,address,pcity,ppincode,pstate,pcountry,phonenumber,email,caddress,ccity,cpincode,cstate,ccountry,relationshipwithapplicant,parentfname,parentlname,parentmobilenumber,parentemail,organizationdetails,school10,yearofpassing10,examboardname10,score10,school12,yearofpassing12,examboardname12,score12,stream12,examscore,examyear,examname2,examnumber2,examrank2,examscore2,examyear2,examapplicationnumber,examapplicationnumber2,year10,year12,totaloutof10,totaloutof12,transactid,isPayment,lastPage,degree1,degree2,inst1,inst2,university1,university2,yearofpassingd1,yearofpassingd2,scoredegree1,scoredegree2,studentisdcode,parentisdcode,formstatus,created,paydate,enroll_bucket_date,book_status FROM student WHERE formstatus = '".$_GET['formstatus']."' order by memberID"; 



}

else if(isset($_GET['enroll_bucket']) && $_GET['enroll_bucket']=='1'){
    
    $setSql = "SELECT applicationid,memberID,programmesugpg,aadhar,amount,transactid,gender,name,middlename,mothername,lastname,alternate_no,companyname,designation,Companywebsite,experience,graduation,dateofbirth,nationality,institute,mpdomicile,address,pcity,ppincode,pstate,pcountry,phonenumber,email,caddress,ccity,cpincode,cstate,ccountry,relationshipwithapplicant,parentfname,parentlname,parentmobilenumber,parentemail,organizationdetails,school10,yearofpassing10,examboardname10,score10,school12,yearofpassing12,examboardname12,score12,stream12,examscore,examyear,examname2,examnumber2,examrank2,examscore2,examyear2,examapplicationnumber,examapplicationnumber2,year10,year12,totaloutof10,totaloutof12,transactid,isPayment,lastPage,degree1,degree2,inst1,inst2,university1,university2,yearofpassingd1,yearofpassingd2,scoredegree1,scoredegree2,studentisdcode,parentisdcode,formstatus,created,paydate,enroll_bucket_date,book_status FROM student WHERE enroll_bucket='1' order by memberID"; 

}

else {
$setSql = "SELECT applicationid,memberID,programmesugpg,aadhar,amount,transactid,gender,name,middlename,mothername,lastname,dateofbirth,nationality,institute,mpdomicile,address,pcity,ppincode,pstate,pcountry,phonenumber,email,caddress,ccity,cpincode,cstate,ccountry,relationshipwithapplicant,parentfname,parentlname,parentmobilenumber,parentemail,organizationdetails,school10,yearofpassing10,examboardname10,score10,school12,yearofpassing12,examboardname12,score12,stream12,examscore,examyear,examname2,examnumber2,examrank2,examscore2,examyear2,examapplicationnumber,examapplicationnumber2,year10,year12,totaloutof10,totaloutof12,transactid,isPayment,lastPage,degree1,degree2,inst1,inst2,university1,university2,yearofpassingd1,yearofpassingd2,scoredegree1,scoredegree2,studentisdcode,parentisdcode,formstatus,created,paydate,enroll_bucket_date,book_status FROM student order by memberID"; 

}





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
//$setData = str_replace("r", "", $setData);
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