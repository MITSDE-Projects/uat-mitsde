<?php
session_start();
$sessionid=session_id();
if($_SESSION['logincheck'] != $sessionid.$_SESSION['salt']){
	header('Location:index.php');
	die;
}
include_once '../php/config.php';

$setCounter = 0; 
$setExcelName = "Enquiry_Form"; 
$setSql = "SELECT * FROM tbl_enquiry_avantika order by id desc"; 
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
 header("Content-Disposition: attachment; filename=".$setExcelName."_Reoprt.csv"); 
 header("Pragma: no-cache"); header("Expires: 0");
  //It will print all the Table row as Excel file row with selected column name as header. 
  echo ucwords($setMainHeader)."\n".$setData."\n";
?>