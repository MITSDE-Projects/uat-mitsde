<?php
session_start();
// include("admin/include/config.php");
include("admin/include/configpdo.php");

$FirstName = "";
$MiddleName = "";
$LastName = "";
$EmailID = "";
$MobileNumber = "";
$programID = "";
$SpecializationID = "";
$programName = "";
$SpecializationName = "";
$leadid = "";
$StudentID = "";

$searchmsg="Enter only your Admission ID. Your information will be retrieved from the database.";
if(isset($_GET['studentid']))
{
    
    
$StudentID = trim($_GET['studentid']); // test reg id MIT2023E04739 test for live MIT2023E00097
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
    // CURLOPT_CAINFO => '/home/mitsde/ssl/cacert.pem',
    // CURLOPT_CAINFO => 'D:/wamp64/bin/php/php8.5.0/extras/ssl/cacert.pem',
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
   echo $searchmsg="No lead details found.";
    
}

} //isset close
function generatetransactionid()
{
    return date('dmyhis');
}

$transactionId = generatetransactionid();

$stmt = $conn->prepare("SELECT 1 FROM OtherFeesTransactionN WHERE t_process_id = ?");
$stmt->execute([$transactionId]);

if ($stmt->fetch()) {
    $transactionId = generatetransactionid();
}

?>
<script language="javascript" type="text/javascript">
    function sendtoreject(value, id) {
        // alert(id);
        // alert(value);
        window.location.href = 'mit-office-of-career-services-registration.php?studentid=' + value;
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


    <title>Online Payment | Other Fees Payment By ICICI | Pay Online</title>

    <meta name="robots" content="noindex, nofollow">
    <!-- CANONICAL TAG -->

    <link rel="canonical" href="https://mitsde.com/mit-office-of-career-services-registration" />

    <!-- CANONICAL TAG -->

    <?php include "5-common-seo-tag-1.php" ?>

    <!-- OGP TAG -->

    <meta property="og:title" content="Online Payment | Other Fees Payment By ICICI | Pay Online">
    <meta property="og:site_name" content="MIT School of Distance Education">
    <meta property="og:url" content="https://mitsde.com/mit-office-of-career-services-registration">
    <meta property="og:description"
        content="Earn a Post Graduate Distance Diploma (PGDM) in Project Management which is affordable, industry-relevant and taught by Industry experts in Live sessions.">
    <meta property="og:type" content="website">
    <meta property="og:image"
        content="https://mitsde.com/newmitsdewebsite2024/assets/images/new/logo-mit-school-of-distance-education.png">

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

    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script>
        function enableSubmitBtn() {
            document.getElementById("mysubmitBtn").disabled = false;  //enable the submit button

        }
    </script>

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

                req.onreadystatechange = function () {
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

        function myFunction(e) {

            //alert(e.target.value);
            document.getElementById("merchant_param4").value = e.target.value

            if (e.target.value == 'Coping Workshops + Study Plans') {
                document.getElementById("exampleInputPassword1").value = e.target.value = 499

            }
            if (e.target.value == 'Mentoring Program') {
                document.getElementById("exampleInputPassword1").value = e.target.value = 499
            }

            if (e.target.value == 'All 5 Services Bundle (Excluding Placement Training)') {
                document.getElementById("exampleInputPassword1").value = e.target.value = 1599
            }
            if (e.target.value == 'Alumni (Coping Workshops + MOCS Archives)') {
                document.getElementById("exampleInputPassword1").value = e.target.value = 599
            }
            if (e.target.value == 'Prarambh') {
                document.getElementById("exampleInputPassword1").value = e.target.value = 799
            }
            if (e.target.value == '5-Services Bundle + Placement Training') {
                document.getElementById("exampleInputPassword1").value = e.target.value = 2099
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

            var LeadID = OtherFeesPayment.merchant_param3.value;
            var FeesType = OtherFeesPayment.FeesType.value;

            var errors = [];

            if (!ck_name.test(LeadID)) {
                errors[errors.length] = "Please Enter Admission ID .";
            }

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


    <!----->


    <!----->

</head>

<body>

    <?php include "5-common-seo-tag-2.php" ?>
    <!-- Header Nav Start -->

    <?php include "header.php" ?>

    <script>
        window.onload = function () {
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
                        <p class="blue-text"><b>Enter Only Admission ID. We Will get your information from database.</b>
                        </p>
                        <form action="ccavRequestHandlerH.php" name="OtherFeesPayment" id="OtherFeesPayment"
                            onSubmit="return validate(this);" method="post">

                            <input type="hidden" name="tid" id="tid" />
                            <!--<input type="hidden" name="merchant_id" id="merchant_id" value="193023"/>-->
                            <input type="hidden" name="merchant_id" id="merchant_id" value="2874274" />
                            <input type="hidden" name="order_id" value="<?php echo htmlspecialchars($transactionId, ENT_QUOTES, 'UTF-8'); ?>" />
                            <input type="hidden" name="currency" value="INR" />
                            <input type="hidden" name="redirect_url" id="redirect_url"
                                value="https://mitsde.com/ccavResponseHandlerH.php" />
                            <input type="hidden" name="cancel_url" id="cancel_url"
                                value="https://mitsde.com/ccavResponseHandlerH.php" />
                            <input type="hidden" name="language" value="EN" />


                            <div class="row justify-content-between text-left">
                                <div class="form-group col-sm-6 flex-column d-flex">
                                    <input type="text" class="form-control" name="AdmissionID" id="AdmissionID"
                                        onChange="sendtoreject(this.value,this.id);" value="<?php echo htmlspecialchars($StudentID, ENT_QUOTES, 'UTF-8'); ?>"
                                        placeholder="Admission ID" style="text-transform:uppercase">
                                    <input type="hidden" class="form-control" name="merchant_param3"
                                        id="merchant_param3" value="<?php echo htmlspecialchars($leadid, ENT_QUOTES, 'UTF-8'); ?>" placeholder="Admission ID"
                                        style="text-transform:uppercase">
                                </div>


                                <div class="form-group col-sm-6 flex-column d-flex">
                                    <input type="text" class="form-control" name="delivery_name" readonly
                                        id="StudentName" value="<?php echo htmlspecialchars($FirstName . ' ' . $LastName, ENT_QUOTES, 'UTF-8'); ?>"
                                        placeholder="Student Name">


                                </div><input type="hidden" name="delivery_address" value="Pune" />
                            </div>

                            <div class="row justify-content-between text-left mt-2">
                                <div class="form-group col-sm-6 flex-column d-flex"> <input type="text"
                                        class="form-control" name="billing_email" readonly id="EmailID"
                                        value="<?php echo htmlspecialchars($EmailID, ENT_QUOTES, 'UTF-8'); ?>" placeholder="Email ID">
                                </div>


                                <div class="form-group col-sm-6 flex-column d-flex mt-2">
                                    <div class="form-group"><input type="text" class="form-control" name="delivery_tel"
                                            readonly id="MobileNo" value="<?php echo htmlspecialchars($MobileNumber, ENT_QUOTES, 'UTF-8'); ?>"
                                            placeholder="Mobile No"> </div>
                                </div>
                                <div class="form-group col-sm-6 flex-column d-flex mt-2">
                                    <input type="text" class="form-control" name="merchant_param1" readonly
                                        id="merchant_param1" value="<?php echo htmlspecialchars($SpecializationName, ENT_QUOTES, 'UTF-8'); ?>"
                                        placeholder="Specialization Name">
                                </div>
                                <input type="hidden" class="form-control" name="SpecializationID" readonly
                                    id="SpecializationID" value="<?php echo htmlspecialchars($SpecializationID, ENT_QUOTES, 'UTF-8'); ?>"
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



                                    <select class="form-select form-select-md" name="Service Type" id="Service Type"
                                        onchange="myFunction(event)">
                                        <option disabled selected>Service Type</option>
                                        <option value="5-Services Bundle + Placement Training">5-Services Bundle + Placement Training</option>
                                        <option value="All 5 Services Bundle (Excluding Placement Training)">All 5 Services Bundle (Excluding Placement Training)</option>
                                        <option value="Prarambh">Placement training registration</option>
                                        <option value="Alumni (Coping Workshops + MOCS Archives)">Alumni (Coping Workshops + MOCS Archives)</option>
                                        <option value="Coping Workshops + Study Plans">Coping Workshops + Study Plans</option>
                                        <option value="Mentoring Program">Mentoring Program</option>
                                    </select>
                                </div>

                                <div class="form-group col-sm-6 flex-column d-flex mt-2">



                                    <select class="form-select form-select-md mt-2" id="merchant_param5"
                                        name="merchant_param5">
                                        <option disabled selected>Learner Status</option>
                                        <option value="Alumni">Alumni</option>
                                        <option value="Current Student">Current Student</option>
                                    </select>
                                </div>

                                <div class="form-group mt-2">
                                    <div>
                                        <input type="text" readonly class="form-control" name="amount" value=""
                                            id="exampleInputPassword1" placeholder="Amount">
                                        <input type="hidden" readonly class="form-control" id="merchant_param2"
                                            name="merchant_param2" value="136">
                                        <input type="hidden" readonly class="form-control" id="merchant_param4"
                                            name="merchant_param4" value="">

                                    </div>
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

                                <div class="d-flex justify-content-center mt-2">
                                    <div class="g-recaptcha" data-sitekey="6Lf1dR4gAAAAAJXXpTYVhawIuElj2l7XXvd2FRsJ"
                                        required="" data-callback="enableSubmitBtn">
                                    </div>
                                </div>

                                <div class="center mt-2">
                                    <button type="submit" onclick="myfunction()"
                                        style="background: #f47521;width: 50%;color: #fff;" id="mysubmitBtn"
                                        disabled="disabled" class="btn btn-primary mit-button">Pay Now</button>
                                </div>



                        </form>
                    </div>
                </div>
            </div>
        </div>

        <?php //  include "learner-support.php" ?>

    </main>
    <!-- Footer Start -->

    <?php include "footer.php" ?>


    <!-- footer end  -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/bootstrap-select.min.js"></script>
    <script src="assets/js/slick.min.js"></script>
    <script src="assets/js/common.js"></script>
    <script src="assets/js/course-slider.js"></script>

</body>

</html>