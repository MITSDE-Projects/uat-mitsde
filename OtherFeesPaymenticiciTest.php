<?php session_start();
include("admin/include/config.php");
$searchmsg="Enter only your Admission ID. Your information will be retrieved from the database.";
if(isset($_GET[studentid]))
{
    
    
$StudentID=$_GET[studentid]; // test reg id MIT2023E04739 test for live MIT2023E00097
 //die;
$url = "https://mitpro.mitsde.com/WebAPI/api/CRM/GetLeadDetailAPI?StudentId=" . urlencode($StudentID);

//$accessToken = "v9dEO3dhr3nInA2y3eUyCytD1l3WCl-Js0GLv89XCVdZYZeKZgTesLy1W9ywbaYzgUR0rIVQZPCtE8LnmXd5imVFbYnYbC1_aF9DSThVLUP6Q1NLN0uYyvEOXnDDfYr8_O6imLZPkyXhej0667hfVmXtGGiyNWUUTAStT5tihb7XD3a24DZd1FlV5zOXTtR_ilsB59zq-6_KpvaedNbqhUZKmDyJmaZhttG6xXmHHQ9CpUf-71gGjfk75ZeY18eDFwLPNH73BxnAvgHTzyGoCQgmf_SF9vPnnPnmFacWJpFp5C8T_PrsbqEkdG5oWsQalu7zXUV715ZYRfJ3lRzn-HbJdP0IxTdo7lmBdSyI0lZyYCJwHiX2nME-h2FHCm2uECHoYn4QK5uLuzfpAjMu_7ACKXHAObpisUgAxJcZLJlwZ_TJmDAYbLFhYGetp2VDnKqL7_Zm876DCtaWp5Wec47hBYsCAE_X3sObmsw1FGicXmnNzWQ4OlDRRDHlU5_Q"; // Replace with your actual token

$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => $url,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_HTTPHEADER => array(
        "Authorization: Bearer " . $accessToken,
        "Content-Type: application/json",
        "Accept: application/json"
    ),
    CURLOPT_CAINFO => '/home/mitsde/ssl/cacert.pem',
));

$response = curl_exec($curl);
$httpCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
$curlError = curl_error($curl);

curl_close($curl);
//print_r($response);
// Check for cURL errors
if ($curlError) {
    die("cURL Error: " . $curlError);
}

// Decode the JSON response
$data = json_decode($response, true);

// Check if decoding was successful
if ($data === null) {
    die("Error decoding JSON response");
}

// Check if the API response contains expected data
if (isset($data['Object']['GetLeadDetailList'][0])) 
{
    $leadDetails = $data['Object']['GetLeadDetailList'][0];

    // Extract values into PHP variables
    $leadid = $leadDetails['CRMLeadID'];
    $FirstName = $leadDetails['FirstName'];
    $MiddleName = $leadDetails['MiddleName'];
    $LastName = $leadDetails['LastName'];
    $EmailID = $leadDetails['EmailAddress'];
    $MobileNumber = $leadDetails['MobileNumber'];
    $programID = $leadDetails['ProgramID'];
    $SpecializationID = $leadDetails['SpecializationID'];
    $programName = $leadDetails['ProgramName'];
    $SpecializationName = $leadDetails['SpecializationName'];


} 
else
{
   echo $searchmsg="No learners details found. Kindly contact student support for assistance.";
    
}

} //isset close
function generatetransactionid()
           {
           $transactionId=date('dmyhis');
           return $transactionId;  
           }
  $transactionId=generatetransactionid();
 
 //echo "</br>Normal-->".$transactionId="051218082426";
 
//echo "</br>SELECT * FROM OtherFeesTransactionN WHERE t_process_id = '".$transactionId."'";

$result1 = mysql_query("SELECT * FROM OtherFeesTransactionN WHERE t_process_id = '".$transactionId."'");
       
		
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
    window.location.href = 'OtherFeesPaymenticiciTest.php?studentid=' + value;
    /*var conf = confirm("Are you sure reg.id is correct?");
    
     if(conf==true)
     {
        
       window.location.href='OtherFeesPaymentHDFC0.php?studentid='+value;    
        
    }*/

}
</script>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />


    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="robots" content="noindex, nofollow">
    <link rel="canonical" href="https://mitsde.com/OtherFeesPaymenticiciTest" />

    <!-- Page Title -->
    <title>Online Payment | Other Fees Payment By ICICI | Pay Online</title>
    <meta name="robots" content="index, follow">

    <?php  include "5-common-seo-tag-1.php" ?>

    <!-- OGP TAG -->

    <meta property="og:title" content="Online Payment | Other Fees Payment By ICICI | Pay Online">
    <meta property="og:site_name" content="MIT School of Distance Education">
    <meta property="og:url" content="https://mitsde.com/harbourPayment">
    <meta property="og:description"
        content="Earn a Post Graduate Distance Diploma (PGDM) in Project Management which is affordable, industry-relevant and taught by Industry experts in Live sessions.">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://mitsde.com/newmitsdewebsite2024/assets/images/new/logo-mit-school-of-distance-education.png">

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
        alert(FeesType);
        var strURL = "FindOtherFeeHDFCERP.php?FeesType=" + FeesType;
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

        var AdmissionID = OtherFeesPayment.AdmissionID.value;
        //var StudentName = OtherFeesPayment.StudentName.value;
        //var email = OtherFeesPayment.EmailID.value;
        //var StudentName = OtherFeesPayment.StudentName.value;
        //var MobileNo = OtherFeesPayment.MobileNo.value;


        var FeesType = OtherFeesPayment.FeesType.value;


        var errors = [];

        if (!ck_name.test(AdmissionID)) {
            errors[errors.length] = "Please Enter Admission ID .";
        }

        /*if (!ck_name.test(StudentName)) {
         errors[errors.length] = "Please Enter Your Name";
        }*/

        /*if (!ck_email.test(email)) {
         errors[errors.length] = "You must enter a valid email address.";
        }*/
        /*if (!ck_mob.test(MobileNo)) {
         errors[errors.length] = "You must enter a valid Mobile.";
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
        var msg = "Please Enter Valid Data...\n";
        for (var i = 0; i < errors.length; i++) {
            var numError = i + 1;
            msg += "\n" + numError + ". " + errors[i];
        }
        alert(msg);
    }
    </script>


    <!----->


    <!----->
    <?php // include"google_code.html";?>
</head>

<body>
    <!-- Header Nav Start -->
    <?php include "header.php"?>

    <script>
    window.onload = function() {
        var d = new Date().getTime();
        document.getElementById("tid").value = d;
    };
    </script>
    <!-- Header Nav End --->
    <main class="main-body">
        <!-- <section class="admissionbanner admissioninner-banner">
            <div class="container">
                <div class="row">
                    
                </div>
            </div>
        </section> -->


        <div class="container-fluid px-1 py-5 mx-auto">
            <div class="row d-flex justify-content-center">
                <div class="col-xl-7 col-lg-8 col-md-9 col-11 text-center">

                    <div class="card">
                        <!-- <h5 class="text-center mb-4">Powering world-class companies</h5> -->
                        <h3>Fee Payment</h3>
                        <p class="blue-text"><b>For Learners Enrolled after December 2022 only</b></p>
                        <p><b><?php echo $searchmsg; ?></b>
                        </p>
                        <form action="ccavRequestHandlericiciTest.php" name="OtherFeesPayment" id="OtherFeesPayment"
                            onSubmit="return validate(this);" method="post">

                            <input type="hidden" name="tid" id="tid" />
                            <!--<input type="hidden" name="merchant_id" id="merchant_id" value="193023"/>-->
                            <input type="hidden" name="merchant_id" id="merchant_id" value="2874274" />
                            <input type="hidden" name="order_id" value="<?php echo $transactionId; ?>" />
                            <input type="hidden" name="currency" value="INR" />
                            <input type="hidden" name="redirect_url" id="redirect_url"
                                value="https://mitsde.com/ccavResponseHandlericiciTest.php" />
                            <input type="hidden" name="cancel_url" id="cancel_url"
                                value="https://mitsde.com/ccavResponseHandlericiciTest.php" />
                            <input type="hidden" name="language" value="EN" />


                            <div class="row justify-content-between text-left">
                                <div class="form-group col-sm-6 flex-column d-flex">
                                    <input type="text" class="form-control" name="AdmissionID" id="AdmissionID"
                                        onChange="sendtoreject(this.value,this.id);" value="<?php echo $StudentID;  ?>"
                                        placeholder="Admission ID" style="text-transform:uppercase">
                                    <input type="hidden" class="form-control" name="merchant_param3"
                                        id="merchant_param3" value="<?php echo $leadid;  ?>" placeholder="Admission ID"
                                        style="text-transform:uppercase">
                                </div>


                                <div class="form-group col-sm-6 flex-column d-flex">
                                    <input type="text" class="form-control" name="delivery_name" readonly
                                        id="StudentName" value="<?php echo $FirstName.' '.$LastName; ?>"
                                        placeholder="Name">


                                </div><input type="hidden" name="delivery_address" value="Pune" />
                            </div>

                            <div class="row justify-content-between text-left mt-2" >
                                <div class="form-group col-sm-6 flex-column d-flex"> <input type="hidden"
                                        class="form-control" name="billing_email" readonly id="EmailID"
                                        value="<?php echo $EmailID; ?>" placeholder="Email ID">
                                </div>


                                <div class="form-group col-sm-6 flex-column d-flex mt-2">
                                    <div class="form-group"><input type="hidden" class="form-control" name="delivery_tel"
                                            readonly id="MobileNo" value="<?php echo $MobileNumber; ?>"
                                            placeholder="Mobile No"> </div>
                                </div>
                                <div class="form-group col-sm-6 flex-column d-flex mt-2">
                                    <input type="text" class="form-control" name="merchant_param1" readonly
                                        id="merchant_param1" value="<?php echo $SpecializationName; ?>"
                                        placeholder="Course Name">
                                </div>
                                <input type="hidden" class="form-control" name="SpecializationID" readonly
                                    id="SpecializationID" value="<?php echo $SpecializationID; ?>"
                                    placeholder="Course Name">



                                <input type="hidden" name="delivery_address" value="" /></td>
                                <input type="hidden" name="delivery_city" value="" /></td>
                                <input type="hidden" name="delivery_state" value="" /></td>
                                <input type="hidden" name="delivery_zip" value="" /></td>
                                <input type="hidden" name="delivery_country" value="" /></td>
                                <!-- <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label ">
                                        Name of Student<span class="text-danger">
                                            *</span></label> <input type="text" id="form_name_candidate"
                                        name="form_name_candidate" placeholder="Name of Student">




                                </div> -->
                                <div class="form-group col-sm-6 flex-column d-flex mt-2">

                                    <select class="form-select form-select-md " aria-label="Small select example"
                                        onChange="geturlval(this.value,this.id);" class="form-control"
                                        name="merchant_param2" id="FeesType" onChange="getState(this.value)">
                                        <option value="">Select Fees type</option>


                                        <?php
                                              $getstudentinfo = mysql_query("SELECT description FROM `feeshead_new_erp`");
                                               while ($row = mysql_fetch_array($getstudentinfo)) {
                                                   $FeesHead = $row['description'];
                                                   
                                                   ?>

                                        <option value="<?php echo $FeesHead; ?>"><?php echo $FeesHead; ?></option>
                                        <?php
                                               }
                                              ?>

                                    </select>
                                </div>
                                <div id="emi_div" style="display: none">
                                    <table border="1" width="100%">
                                        <tr>
                                            <td colspan="2">EMI Section </td>
                                        </tr>
                                        <tr>
                                            <td> Emi plan id: </td>
                                            <td><input readonly type="text" id="emi_plan_id" name="emi_plan_id"
                                                    value="" /> </td>
                                        </tr>
                                        <tr>
                                            <td> Emi tenure id: </td>
                                            <td><input readonly type="text" id="emi_tenure_id" name="emi_tenure_id"
                                                    value="" /> </td>
                                        </tr>
                                        <tr>
                                            <td>Pay Through</td>
                                            <td>
                                                <select name="emi_banks" id="emi_banks">
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                <div id="emi_duration" class="span12">
                                                    <span class="span12 content-text emiDetails">EMI Duration</span>
                                                    <table id="emi_tbl" cellpadding="0" cellspacing="0" border="1">
                                                    </table>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td id="processing_fee" colspan="2">
                                            </td>
                                        </tr>
                                    </table>
                                </div>





                                <div class="form-group mt-2">
                                    <div id="statediv"><input type="text" class="form-control" name="amount"
                                            id="exampleInputPassword1" placeholder="Amount"></div>
                                </div>






                                <div class="center mt-2">
                                    <button type="submit" onclick="myfunction()" style="width: 50%;"
                                        class="btn btn-primary mit-button">Pay Now</button>
                                </div>



                        </form>

                        <!-- <div class="row" style="padding-top: 15px;">
                            <div class="col-sm-4"><a href="terms-and-conditions" target="_blank">Terms and condition</a>
                            </div>
                            <div class="col-sm-4"><a href="images/onlinepaymentpolicy/Terms of Use-pdf.pdf"
                                    target="_blank">Terms of use</a></div>
                            <div class="col-sm-4"><a href="images/onlinepaymentpolicy/Privacy Policy.pdf"
                                    target="_blank">Privacy policy</a></div>


                            <div>
                            </div>

                        </div> -->
                        <div class="row" style="padding-top: 15px;">
                            <p style="margin-top: 1rem;"><b>Learners enrolled before December 2022,&nbsp;<a href="OtherFeesPayment03">Click Here</a>&nbsp;to make payment</b></p>
                        </div>

                        <div class="submitbtn123"></div><!-- /.comment-form -->
                    </div>
                    
                </div>
            </div>
            
        </div>



        <?php //  include "learner-support.php" ?>

    </main>
    <!-- Footer Start -->

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