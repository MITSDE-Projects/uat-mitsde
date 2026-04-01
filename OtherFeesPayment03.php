<?php
session_start();
// include("admin/include/config.php");
include("admin/include/configpdo.php");

$StudentID = "";
$StudentName = "";
$EmailID = "";
$MobileNumber = "";
$Specialization = "";
$Course = "";

$searchmsg = "Enter only your Admission ID. Your information will be retrieved from the database.";

if (isset($_GET['studentid'])) {
    $studentID = trim($_GET['studentid']);

    // FETCH STUDENT DETAILS
    $stmt = $conn->prepare("SELECT RegistrationNo, DisplayName, Email, ContactNo, Specialization, Course 
                            FROM old_student 
                            WHERE RegistrationNo = ?");
    $stmt->execute([$studentID]);
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($row) {
        $StudentID = $row["RegistrationNo"];
        $StudentName = $row["DisplayName"];
        $EmailID = $row["Email"];
        $MobileNumber = $row["ContactNo"];
        $Specialization = $row["Specialization"];
        $Course = $row["Course"];
    } else {
        $searchmsg = "No learners details found. Kindly contact student support for assistance.";
    }
}

function generatetransactionid()
{
    return date('dmyhis');
}

$transactionId = generatetransactionid();

$stmt = $conn->prepare("SELECT 1 FROM old_student_transaction WHERE t_process_id = ?");
$stmt->execute([$transactionId]);

if ($stmt->fetch()) {
    $transactionId = generatetransactionid();
}
?>
<script language="javascript" type="text/javascript">
    function sendtoreject(value, id) {
        window.location.href = 'OtherFeesPayment03.php?studentid=' + value;
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
    <!-- Page Title -->
    <title>Online Payment | Other Fees Payment By HDFC | Pay Online</title>
    <meta name="robots" content="noindex, nofollow">
    <!-- CANONICAL TAG -->
    <link rel="canonical" href="https://mitsde.com/OtherFeesPayment03" />
    <!-- CANONICAL TAG -->
    <?php include "5-common-seo-tag-1.php" ?>

    <!-- OGP TAG -->
    <meta property="og:title" content="Online Payment | Other Fees Payment By HDFC | Pay Online">
    <meta property="og:site_name" content="MIT School of Distance Education">
    <meta property="og:url" content="https://mitsde.com/OtherFeesPayment03">
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
    <link rel="stylesheet" href="assets/css/form-new.css" type="text/css" />
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
    </script>

    <script type="text/javascript">
        var ck_name = /^[A-Za-z0-9 ]{3,100}$/;
        var ck_email = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/;
        var ck_username = /^[A-Za-z0-9_]{1,20}$/;
        var ck_password = /^[A-Za-z0-9!@#$%^&*()_]{6,20}$/;
        var ck_mob = /^[\s()+-]*([0-9][\s()+-]*){10}$/;

        function validate(OtherFeesPayment) {

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
            var msg = "Please Enter Valid Data...\n";
            for (var i = 0; i < errors.length; i++) {
                var numError = i + 1;
                msg += "\n" + numError + ". " + errors[i];
            }
            alert(msg);
        }
    </script>

    <?php // include"google_code.html"; ?>
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
        <div class="container-fluid px-1 py-5 mx-auto">
            <div class="row d-flex justify-content-center">
                <div class="col-xl-7 col-lg-8 col-md-9 col-11 text-center">

                    <div class="card">
                        <h3>Fee Payment</h3>
                        <p class="blue-text"><b>
                                <?php echo htmlspecialchars($searchmsg, ENT_QUOTES, 'UTF-8'); ?>
                            </b>
                        </p>
                        <form action="ccavRequestHandler02.php" name="OtherFeesPayment" id="OtherFeesPayment"
                            onsubmit="return validate(this);" method="post">


                            <input type="hidden" name="tid" id="tid" />
                            <!--<input type="hidden" name="merchant_id" id="merchant_id" value="193023"/>-->
                            <input type="hidden" name="merchant_id" id="merchant_id" value="236596" />
                            <input type="hidden" name="order_id"
                                value="<?php echo htmlspecialchars($transactionId, ENT_QUOTES, 'UTF-8'); ?>" />
                            <input type="hidden" name="currency" value="INR" />
                            <input type="hidden" name="redirect_url" id="redirect_url"
                                value="https://uat.mitsde.com/ccavResponseHandler01.php" />
                            <input type="hidden" name="cancel_url" id="cancel_url"
                                value="https://uat.mitsde.com/ccavResponseHandler01.php" />
                            <input type="hidden" name="language" value="EN" />

                            <div class="row justify-content-between text-left">
                                <div class="form-group col-sm-6 flex-column d-flex">
                                    <input type="text" class="form-control" name="AdmissionID" id="AdmissionID"
                                        onchange="sendtoreject(this.value,this.id);"
                                        value="<?php echo htmlspecialchars($StudentID, ENT_QUOTES, 'UTF-8'); ?>"
                                        placeholder="Admission ID" style="text-transform:uppercase">
                                    <input type="hidden" class="form-control" name="merchant_param3"
                                        id="merchant_param3"
                                        value="<?php echo htmlspecialchars($StudentID, ENT_QUOTES, 'UTF-8'); ?>"
                                        placeholder="Admission ID" style="text-transform:uppercase">
                                </div>
                                <div class="form-group col-sm-6 flex-column d-flex">
                                    <input type="text" class="form-control" name="delivery_name" readonly
                                        id="StudentName"
                                        value="<?php echo htmlspecialchars($StudentName, ENT_QUOTES, 'UTF-8'); ?>"
                                        placeholder="Name">


                                </div><input type="hidden" name="delivery_address" value="Pune" />
                            </div>

                            <div class="row justify-content-between text-left mt-2">
                                <div class="form-group col-sm-6 flex-column d-flex"> <input type="text"
                                        class="form-control" name="billing_email" readonly id="EmailID"
                                        value="<?php echo htmlspecialchars($EmailID, ENT_QUOTES, 'UTF-8'); ?>"
                                        placeholder="Email ID">
                                </div>
                                <div class="form-group col-sm-6 flex-column d-flex">
                                    <div class="form-group"><input type="text" class="form-control" name="delivery_tel"
                                            readonly id="MobileNo"
                                            value="<?php echo htmlspecialchars($MobileNumber, ENT_QUOTES, 'UTF-8'); ?>"
                                            placeholder="Mobile No"> </div>
                                </div>
                                <div class="form-group col-sm-6 flex-column d-flex mt-2">
                                    <input type="text" class="form-control" name="merchant_param1" readonly
                                        id="merchant_param1"
                                        value="<?php echo htmlspecialchars($Course, ENT_QUOTES, 'UTF-8'); ?>"
                                        placeholder="Course Name">
                                </div>
                                <div class="form-group col-sm-6 flex-column d-flex mt-2">
                                    <input type="text" class="form-control" name="merchant_param4" readonly
                                        id="merchant_param4"
                                        value="<?php echo htmlspecialchars($Specialization, ENT_QUOTES, 'UTF-8'); ?>"
                                        placeholder="Specialization Name">
                                </div>
                                <input type="hidden" name="delivery_address" value="" /></td>
                                <input type="hidden" name="delivery_city" value="" /></td>
                                <input type="hidden" name="delivery_state" value="" /></td>
                                <input type="hidden" name="delivery_zip" value="" /></td>
                                <input type="hidden" name="delivery_country" value="" /></td>
                                <div class="form-group col-sm-6 flex-column d-flex mt-2">

                                    <select class="form-select form-select-md " aria-label="Small select example"
                                        onChange="geturlval(this.value,this.id);" class="form-control"
                                        name="merchant_param2" id="FeesType" onChange="getState(this.value)">
                                        <option value="">Select Fees type</option>
                                        <?php
                                        $stmt = $conn->prepare("SELECT description, feedheadcode FROM feehead_erp ORDER BY description ASC");
                                        $stmt->execute();
                                        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                            $FeesHead = htmlspecialchars($row['description'], ENT_QUOTES, 'UTF-8');
                                            echo '<option value="' . $FeesHead . '">' . $FeesHead . '</option>';
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
                                <div class="form-group col-sm-6 flex-column d-flex mt-2">
                                    <div id="statediv"><input type="text" class="form-control" name="amount"
                                            id="exampleInputPassword1" placeholder="Amount"></div>
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