<?php 
header("Location: https://mitsde.com/OtherFeesPaymenticici.php");
exit;

session_start();

include("admin/include/config.php");

$url = "https://erp.mitsde.com/OnlineApplicationAPI/OnlineApplicationAPI.asmx/GetLeadDetails";

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$headers = array(
   "Authorization: MITEsd7CqK6enn8aANDTMlNkBBJhPYN31dAIhHDRT01zK3rteZ9t8ffid6XpCUkjX1S85KkYLIHTRRn0TwLGG4S7SqxwlZ2",
   "Content-Type: application/json",
);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

/*188677 */
//$_GET[studentid]="188677";
 if(isset($_GET[studentid]))
{
    
    
 $studentID=$_GET[studentid];
 
 $getstr= substr("$studentID",0,3);
   $stud="MIT";
  // $stud="mit";
   if($stud==$getstr)
   {
     // echo "</br>i am in stduent id";
     // die;
       $data_array = <<<DATA
 {"API_Parameters": {"StudentID": '$studentID'}} 
DATA;
   }
   else
   {
    //extract($_POST);
    $data_array = <<<DATA
 {"API_Parameters": {"LeadID": '$studentID'}} 
DATA;
  
   } 

curl_setopt($curl, CURLOPT_POSTFIELDS, $data_array);

//for debug only!
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

$resp = curl_exec($curl);
curl_close($curl);
//var_dump($resp);
$response = json_decode($resp, true);
//echo "Response<br>";
//print_r($response);

$error_code   = $response['ErrorCode'];
$error_mes   = $response['d'];
if($error_mes<>"There are no records found for above search criteria.")
$leadid     = $response['d']["LeadID"];
else
{
echo "<script language='javascript' type='text/javascript'> alert('invalid Reg ID')</script>";
echo "<script language='javascript' type='text/javascript'>window.location.href='OtherFeesPaymentByEasebuzz.php</script>";
}
//$leadid     = $response['d']["LeadID"];
$StudentID     = $response['d']["StudentID"];
$FirstName     = $response['d']["FirstName"];
$MiddleName     = $response['d']["MiddleName"];
$LastName     = $response['d']["LastName"];

$EmailID     = $response['d']["EmailAddress"];  //sales
$MobileNumber     = $response['d']["MobileNumber"];  //sales

$EmailID     = $response['d']["CEmail"];    //enrollment
$MobileNumber = $response['d']["CMobile"];  //enrollment

$SpecializationID = $response['d']["SpecializationID"];
$CourseID = $response['d']["CourseID"];
//print_r($response);

 $getspecialization=mysql_query("SELECT * FROM `SpecializationQuick` WHERE `CourseID` = '".$CourseID."' AND `SpecializationID` ='".$SpecializationID."'");
          $getrecord=mysql_fetch_array($getspecialization);
          
         $SpecializationName = $getrecord['SpecializationName'];
}
function generatetransactionid()
           {
           $transactionId=date('dmyhis');
           return $transactionId;  
           }
  $transactionId=generatetransactionid();
 
 //echo "</br>Normal-->".$transactionId="051218082426";
 
//echo "</br>SELECT * FROM OtherFeesTransaction WHERE t_process_id = '".$transactionId."'";

$result1 = mysql_query("SELECT * FROM OtherFeesTransaction WHERE t_process_id = '".$transactionId."'");
       
		
        if(mysql_num_rows($result1)>0)
        { 
          //echo "</br>not zero 1";
           function generatetransactionid1()
           {
           $transactionId=date('dmyhis');
           return $transactionId;  
           }
            $transactionId=generatetransactionid1(); 
           
           }
        else
          {
           $transactionId=generatetransactionid();
          }
          
         

?>
<script language="javascript" type="text/javascript">
function sendtoreject(value, id) {
    // alert(id);
    // alert(value);
    window.location.href = 'OtherFeesPaymentByEasebuzz.php?studentid=' + value;
    /*var conf = confirm("Are you sure reg.id is correct?");
    
     if(conf==true)
     {
        
       window.location.href='OtherFeesPaymentByEasebuzz.php?studentid='+value;    
        
    }*/

}
</script>
<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<!--<![endif]-->

<head>
    <!-- Meta Tags -->
    <html dir="ltr" lang="en">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

        <!-- Meta Tags -->
        <meta name="viewport" content="width=device-width,initial-scale=1.0" />

      

        <!-- Page Title -->
        <title>Online Payment | Other Fees Payment By Easebuzz | Pay Online</title>

        <meta name="robots" content="noindex, nofollow">
    <!-- CANONICAL TAG -->

    <link rel="canonical" href="https://mitsde.com/OtherFeesPaymentByEasebuzz" />

    <!-- CANONICAL TAG -->

    <?php  include "5-common-seo-tag-1.php" ?>

    <!-- OGP TAG -->

    <meta property="og:title" content="Online Payment | Other Fees Payment By Easebuzz | Pay Online">
    <meta property="og:site_name" content="MIT School of Distance Education">
    <meta property="og:url" content="https://mitsde.com/OtherFeesPaymentByEasebuzz">
    <meta property="og:description"
        content="Earn a Post Graduate Distance Diploma (PGDM) in Project Management which is affordable, industry-relevant and taught by Industry experts in Live sessions.">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://mitsde.com/assets/images/new/logo-mit-school-of-distance-education.png">

    <!-- / OG TAG -->

    <!-- Page Title -->
    <link rel="icon" type="image/png" href="assets/images/favicon-mit.ico" />
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/bootstrap-select.min.css" />
    <link rel="stylesheet" href="assets/css/slick.min.css" />
    <link rel="stylesheet" href="assets/css/fonts.css" type="text/css" />
    <link rel="stylesheet" href="assets/css/style.css" type="text/css" />
    <link rel="stylesheet" href="assets/css/course-common-internal.css" type="text/css" />
    <link rel="stylesheet" href="assets/css//form-new.css" type="text/css" />
    <!--API for Queck contact----->
    <script src="assets/js/api/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="assets/js/api/validation.js" charset="UTF-8"></script>
        <!----->

        <script language="javascript" type="text/javascript">
        function getXMLHTTP() { //fuction to return the xml http object
            var xmlhttp = false;
            try {
                xmlhttp = new XMLHttpRequest();
            } catch (e) {
                try {
                    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                } catch (e) {
                    try {
                        xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
                    } catch (e1) {
                        xmlhttp = false;
                    }
                }
            }

            return xmlhttp;
        }

        function getState(FeesType) {
            //alert(FeesType);
            var strURL = "FindOtherFee.php?FeesType=" + FeesType;
            //alert(strURL)
            var req = getXMLHTTP();

            if (req) {

                req.onreadystatechange = function() {
                    if (req.readyState == 4) {
                        // only if "OK"
                        if (req.status == 200) {
                            document.getElementById('statediv').innerHTML = req.responseText;
                            //alert(req.responseText);

                        } else {
                            alert("Problem while using XMLHTTP:\n" + req.statusText);
                        }
                    }
                }
                req.open("GET", strURL, true);
                req.send(null);
            }
        }
        </script>


        <script type="text/javascript">
        var ck_name = /^[A-Za-z0-9 ]{3,100}$/;
        var ck_email = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/;
        var ck_username = /^[A-Za-z0-9_]{1,20}$/;
        var ck_password = /^[A-Za-z0-9!@#$%^&*()_]{6,20}$/;
        var ck_mob = /^[\s()+-]*([0-9][\s()+-]*){10}$/;


        function validate(OtherFeesPayment) {
            //alert('hi');

            var LeadID = OtherFeesPayment.LeadID.value;
            var StudentName = OtherFeesPayment.StudentName.value;
            var email = OtherFeesPayment.EmailID.value;
            //var StudentName = OtherFeesPayment.StudentName.value;
            //var MobileNo = OtherFeesPayment.MobileNo.value;
            //var Course = OtherFeesPayment.Course.value;

            var FeesType = OtherFeesPayment.FeesType.value;


            var errors = [];

            if (!ck_name.test(LeadID)) {
                errors[errors.length] = "Please Enter Admission ID .";
            }

            if (!ck_name.test(StudentName)) {
                errors[errors.length] = "Please Enter Your Name";
            }

            if (!ck_email.test(email)) {
                errors[errors.length] = "You must enter a valid email address.";
            }
            /*if (!ck_mob.test(MobileNo)) {
             errors[errors.length] = "You must enter a valid Mobile.";
            }
            if (Course==0) {
             errors[errors.length] = "Select Course";
            }*/

            if (FeesType == 0) {
                errors[errors.length] = "Select Fees Type";
            }


            if (errors.length > 0) {
                reportErrors(errors);
                return false;
            }

            return true;
        }

        function reportErrors(errors) {
            var msg = "Please Enter Valide Data...\n";
            for (var i = 0; i < errors.length; i++) {
                var numError = i + 1;
                msg += "\n" + numError + ". " + errors[i];
            }
            alert(msg);
        }
        </script>
    </head>

<body class="header-sticky">
    <div class="boxed">
    <?php include "5-common-seo-tag-2.php" ?>
        <?php include "header.php"; ?>
        <!-- /.header -->
        <script>
        window.onload = function() {
            var d = new Date().getTime();
            document.getElementById("tid").value = d;
        };
        </script>
        <!--<div class="page-title parallax canvas"> 
        	<div class=""></div>            
            <div class="container">
                <div class="row">
                    <div class="col-md-12">                    
                        <div class="page-title-heading">
                            <h2 class="title">Canvas</h2>
                        </div>
                        <div class="breadcrumbs">
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li>About us</li>
                            </ul>                   
                        </div>
						
						
                    </div>
                </div>
            </div>        
        </div>-->

        <!-- About -->
        <section>

            <div class="container-fluid px-1 py-5 mx-auto mt-5">
                <div class="row d-flex justify-content-center">
                    <div class="col-xl-7 col-lg-8 col-md-9 col-11 text-center">

                        <!-- card -->

                        <div class="card">
                            <h3>Fee Payment</h3>
                            <p class="blue-text"><b>Enter Only Admission ID. We Will get your information from
                                    database.</b> </p>

                            <form action="EasebuzzPaymentProcess.php" name="OtherFeesPayment" id="OtherFeesPayment"
                                onSubmit="return validate(this);" method="post">

                                <div class="row justify-content-between text-left">
                                    <div class="form-group col-sm-6 flex-column d-flex"><input type="text"
                                            class="form-control" name="AdmissionID"
                                            onChange="sendtoreject(this.value,this.id);"
                                            value="<?php echo $StudentID;  ?>" id="AdmissionID"
                                            placeholder="Admission ID">
                                        <input type="hidden" class="form-control" name="LeadID"
                                            value="<?php echo $leadid;  ?>" id="LeadID" placeholder="Admission ID">
                                    </div>

                                    <input type="hidden" class="form-control" name="orderid"
                                        value="<?php echo $transactionId ?>" id="orderid" placeholder="Admission ID"
                                        style="text-transform:uppercase">

                                        <div class="form-group col-sm-6 flex-column d-flex"><input type="text"
                                        class="form-control" name="StudentName" readonly id="StudentName"
                                        value="<?php echo $FirstName.' '.$LastName; ?>" placeholder="Student Name">
                                </div>
                                </div>

                              



                                <div class="row justify-content-between text-left mt-2">
                                    <div class="form-group col-sm-6 flex-column d-flex"><input type="hidden"
                                            class="form-control" readonly name="EmailID" id="EmailID"
                                            value="<?php echo $EmailID; ?>" placeholder="Email ID"></div>


                                    <div class="form-group col-sm-6 flex-column d-flex">
                                        <div class="form-group"><input type="hidden" class="form-control" readonly
                                                name="MobileNo" id="MobileNo" value="<?php echo $MobileNumber; ?>"
                                                placeholder="Mobile No"> </div>
                                    </div>

                                    <div class="form-group col-sm-6 flex-column d-flex mt-1">
                                    <div class="form-group"><input type="hidden" class="form-control" name="Course"
                                            readonly id="Course" value="Management" placeholder="Course Name"> </div>
                                </div>
                                <input type="hidden" class="form-control" name="SpecializationID" readonly
                                    id="SpecializationID" value="<?php echo $SpecializationID; ?>"
                                    placeholder="Course Name">

                                <div class="form-group col-sm-6 flex-column d-flex mt-2">
                                   
                                        <select class="form-select form-select-md " aria-label="Small select example" name="FeesType" id="FeesType"
                                            onChange="getState(this.value)">
                                            <option value="">Fee Type</option>


                                            <?php 
				                                  $getstudentinfo=mysql_query("SELECT * FROM `feehead_erp` ORDER BY `description` ASC"); 
                                                  while($row=mysql_fetch_array($getstudentinfo))
	                                         {
	                                                      $FeesHead= $row['description'];
					                                $FeesID = $row['feedheadcode'];  
			                                                  ?>

                                            <option value="<?php echo $FeesHead; ?>"><?php echo $FeesHead; ?></option>
                                            <?php
				                                 }
				                               ?>

                                        </select> 
                                </div>

                                <div class="form-group mt-2">
                                    <div id="statediv"> <input type="text" class="form-control" readonly
                                            id="exampleInputPassword1" placeholder="Amount"></div>
                                </div>

                                <div class="center mt-2">

                                    <button type="submit" class="btn btn-primary mit-button" style="width: 50%;">Pay Now</button>
                                </div>

                                
                            </form>
                       
                    </div>
                                </div>




                                <!--<div class="col-sm-6"> <div class="form-group"><select name="Course" id="Course" class="form-control" id="exampleSelect1">
                  <option value="">Select Course</option>
				                       
				   <option value="PGCM in Modern Office Management">PGCM in Modern Office Management</option>
				  
                  
                  
            </select>	</div></div>-->




                                <!--  -->









                                <!-- Job Form Validation-->

                        </div>


                    </div>
                </div>

            </div><!-- /.container -->
        </section>








        <?php include "footer.php"?>


        <!-- footer end  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/bootstrap-select.min.js"></script>
        <script src="assets/js/slick.min.js"></script>
        <script src="assets/js/common.js"></script>
        <script src="assets/js/course-slider.js"></script>
</body>

</html>