<?php session_start();
include('Crypto.php');
include "php/header2.php";
include_once "php/db.php";


require 'class.phpmailer.php'; 
require 'class.smtp.php';
 error_reporting(0);
 


              $getcourse=mysqli_query($connection,"SELECT CourseID,SpecializationID FROM `student` WHERE `memberID` = '1234'");
              $row=mysqli_fetch_array($getcourse);
              $row['CourseID'];
              $s_ID=$row['SpecializationID'];
              $ERPLeadID=$row['ERPLeadID'];
              
              $getcourseprice=mysqli_query($connection,"SELECT program_id, lumpsum_amount FROM `tbl_courses` WHERE `courses_name` = '12345'");
              $row1=mysqli_fetch_array($getcourseprice);
              $lumpsumFees=$row1['lumpsum_amount'];
            $courses_name=$row1['courses_name'];
             $program_id=$row1['program_id'];
             
              if($Fee1<>$lumpsumFees)
              {
               $feetype="Instalment";
               //$installmentinformation="Next Instalment needs to be paid within 3 months duration from first payment.";
              }
              else
              {
                $feetype="Lump Sum";
              }
              //echo "</br>--->SELECT * FROM `tbl_program` WHERE `programcode` = '".$program_id."'";
              
              $getprogramdetails=mysqli_query($connection,"SELECT * FROM `tbl_program` WHERE `programcode` = '".$program_id."'");
              $row2=mysqli_fetch_array($getprogramdetails);
              $duration=$row2['duration'];
    //die;

?>
<!DOCTYPE html>
<html dir="ltr" lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">


<title>Thank You Your Fee</title>

<!-- Favicon and Touch Icons -->
<link href="../media/favicon.png" rel="shortcut icon" type="image/png">



<body class="">
<div id="wrapper" class="clearfix">
  <!-- preloader -->
 
  
  <!-- Header -->
  

  <!-- Start main-content -->
  <div class="main-content">
    <!-- Section: inner-header -->
    

	<section>
	         <div class="container">
			   <div class="row" >
			     <h1>Thank You for your feedback.</h1>
			 </div>

              </div>
 	</section>
</div>
 </div>

</body>
</html>
