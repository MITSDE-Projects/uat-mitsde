<?php session_start();
// include('admin/include/config.php');
include("admin/include/configpdo.php");

function generatetransactionid()
{
    return date('dmyhis');
}

$transactionId = generatetransactionid();

$stmt = $conn->prepare("SELECT 1 FROM New_erp_student_admission_transaction WHERE t_process_id = ?");
$stmt->execute([$transactionId]);

if ($stmt->fetch()) {
    $transactionId = generatetransactionid();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />

    <title>Online Payment | Other Fees Payment By HDFC | Pay Online</title>

    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="robots" content="noindex, nofollow">
    <link rel="canonical" href="https://mitsde.com/new-admission-form-payment" />

    <?php include "5-common-seo-tag-1.php" ?>

    <!-- OGP TAG -->

    <meta property="og:title" content="Online Payment | Other Fees Payment By HDFC | Pay Online">
    <meta property="og:site_name" content="MIT School of Distance Education">
    <meta property="og:url" content="https://mitsde.com/new-admission-form-payment">
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
            var strURL = "FindOtherFeeHDFCERP.php?FeesType=" + encodeURIComponent(FeesType);
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
        var ck_password = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d!@#$%^&*()_]{6,20}$/;
        var ck_mob = /^[\s()+-]*([0-9][\s()+-]*){10}$/;


        function validate(form) {

            var LeadID = form.merchant_param3.value.trim();
            //var StudentName = form.delivery_name.value.trim();
            var FirstName = form.firstName.value.trim();
            var LastName = form.lastName.value.trim();
            var email = form.billing_email.value.trim();
            var MobileNo = form.delivery_tel.value.trim();
            var Gender = form.gender.value.trim();
            var FeesType = form.merchant_param2.value.trim();
            var Course = form.merchant_param1.value.trim();
            var Specialization = form.SpecializationID.value.trim();
            var SecondSpecializationID = form.SecondSpecializationID.value.trim();
            var Counselor = form.merchant_param4.value.trim();
            var Password = form.password.value.trim();
            var Amount = form.amount.value.trim();


            var errors = [];

            if (!ck_name.test(LeadID)) {
                errors[errors.length] = "Please Enter Admission ID .";
            }

            // if (!ck_name.test(StudentName)) {
            //     errors[errors.length] = "Please Enter Your Name";
            // }

            if (!ck_name.test(FirstName)) {
                errors[errors.length] = "Please Enter Your First Name";
            }

            if (!ck_name.test(LastName)) {
                errors[errors.length] = "Please Enter Your Last Name";
            }

            if (!ck_email.test(email)) {
                errors[errors.length] = "You must enter a valid email address.";
            }
            if (!ck_mob.test(MobileNo)) {
                errors[errors.length] = "You must enter a valid Mobile.";
            }

            if (Gender == 0) {
                errors[errors.length] = "Select Gender";
            }

            if (FeesType == 0) {
                errors[errors.length] = "Select Fees Type";
            }

            if (Course == 0) {
                errors[errors.length] = "Select Course";
            }

            if (Specialization == 0) {
                if (Course == "38_SQL Power Bi Certification") {

                }
                else if (Course == "47_Gen AI for Educators Program") {

                }
                else {
                    errors[errors.length] = "Select Specialization";
                }
            }

            if (Course == "35_Dual Program" && SecondSpecializationID == 0) {
                errors[errors.length] = "Select Dual Program Specialization";
            }

            if (Counselor == 0) {
                errors[errors.length] = "Select Counselor";
            }

            if (!ck_password.test(Password)) {
                errors[errors.length] = "Password should contain at least 1 letter, 1 number and 6 characters.";
            }

            if (!/^\d+$/.test(Amount) || parseInt(Amount) <= 0) {
                errors.push("Enter a valid Amount.");
            }

            if (errors.length > 0) {
                reportErrors(errors);
                return false;
            }

            return true;
        }

        function reportErrors(errors) {
            var msg = "Please address the following issues before submitting your form:\n\n";
            for (var i = 0; i < errors.length; i++) {
                var numError = i + 1;
                msg += "\n" + numError + ". " + errors[i];
            }
            alert(msg);
        }
    </script>

    <script>
        function enableSubmitBtn() {
            document.getElementById("mysubmitBtn").disabled = false;  //enable the submit button

        }
    </script>


    <!----->


    <!----->
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
                        <h3>Payment For Admission</h3>
                        </p>
                        <form action="new-erp-RequestHandler.php" name="OtherFeesPayment" id="OtherFeesPayment"
                            onsubmit="return validate(this);" method="post">


                            <input type="hidden" name="tid" id="tid" />
                            <input type="hidden" name="merchant_id" id="merchant_id" value="236596" />
                            <input type="hidden" name="order_id" value="<?php echo $transactionId; ?>" />
                            <input type="hidden" name="currency" value="INR" />
                            <input type="hidden" name="redirect_url" id="redirect_url"
                                value="https://uat.mitsde.com/new-erp-ResponseHandler.php" />
                            <input type="hidden" name="cancel_url" id="cancel_url"
                                value="https://uat.mitsde.com/new-erp-ResponseHandler.php" />
                            <input type="hidden" name="language" value="EN" />

                            <div class="row justify-content-between text-left">
                                <div class="form-group col-sm-6 flex-column d-flex mt-2">

                                    <input type="text" class="form-control" name="merchant_param3" id="merchant_param3"
                                        value="" placeholder="Enter Admission ID" style="text-transform:uppercase">
                                </div>

                                <div class="form-group col-sm-6 d-flex mt-2 gap-1">
                                    <input type="text" class="form-control" name="firstName" id="firstName" value=""
                                        placeholder="First Name">
                                    <input type="text" class="form-control" name="lastName" id="lastName" value=""
                                        placeholder="Last Name">
                                </div>
                                <input type="hidden" name="delivery_address" value="Pune" />
                            </div>

                            <div class="row justify-content-between text-left">
                                <div class="form-group col-sm-6 flex-column d-flex mt-2">
                                    <input type="text" class="form-control" name="billing_email" id="EmailID" value=""
                                        placeholder="Email ID">
                                </div>

                                <div class="form-group col-sm-6 flex-column d-flex mt-2">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="delivery_tel" id="MobileNo"
                                            value="" placeholder="Mobile No">
                                    </div>
                                </div>

                                <div class="form-group col-sm-6 flex-column d-flex mt-2">
                                    <div class="form-control d-flex gap-2">
                                        <label>Gender</label>
                                        <div class="radio-group">
                                            <label>
                                                <input type="radio" name="gender" value="M"> Male
                                            </label>
                                            <label>
                                                <input type="radio" name="gender" value="F"> Female
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group col-sm-6 flex-column d-flex mt-2">
                                    <select class="form-select form-select-md" name="merchant_param1"
                                        id="merchant_param1"
                                        onchange="getSpecializations(this.value); toggleSecondDropdown(this.value);">
                                        <option value="">Select Course</option>
                                        <?php
                                        $stmt = $conn->prepare("SELECT * FROM NewCourseERP ORDER BY courseno ASC");
                                        $stmt->execute();
                                        $getCourses = $stmt->fetchAll(PDO::FETCH_ASSOC);

                                        foreach ($getCourses as $row) {
                                            $CourseID = $row['CourseID'];
                                            $CourseName = $row['CourseName'];
                                            echo "<option value='{$CourseID}_{$CourseName}'>$CourseName</option>";
                                        }
                                        ?>
                                    </select>
                                </div>

                                <div class="form-group col-sm-6 flex-column d-flex mt-2">
                                    <select class="form-select form-select-md" name="SpecializationID"
                                        id="SpecializationID">
                                        <option value="">Select Specialization</option>
                                    </select>
                                </div>

                                <!-- Secondary Specialization (shown only for Dual MBA) -->
                                <div class="form-group col-sm-6 flex-column mt-2" id="secondSpecializationDiv"
                                    style="display: none;">
                                    <select class="form-select form-select-md" name="SecondSpecializationID"
                                        id="SecondSpecializationID">
                                        <option value="">Select EMBA Specializations</option>
                                        <option value="1_EMBA in Finance Management">EMBA in Finance Management</option>
                                        <option value="2_EMBA in Human Resource Management">EMBA in Human Resource
                                            Management</option>
                                        <option value="3_EMBA in Marketing Management">EMBA in Marketing Management
                                        </option>
                                        <option value="4_EMBA in Operations Management">EMBA in Operations Management
                                        </option>
                                        <option value="5_EMBA in Project Management">EMBA in Project Management</option>
                                        <option value="6_EMBA in Business Analytics & AI">EMBA in Business Analytics &
                                            AI</option>
                                    </select>
                                </div>

                                <script>
                                    // When course is selected
                                    function toggleSecondDropdown(courseValue) {
                                        const courseParts = courseValue.split("_");
                                        const courseName = courseParts[1] || '';

                                        // Show secondary specialization only for Dual Program
                                        if (courseName.toLowerCase().includes("dual program")) {
                                            document.getElementById('secondSpecializationDiv').style.display = 'flex';
                                        } else {
                                            document.getElementById('secondSpecializationDiv').style.display = 'none';
                                            document.getElementById('SecondSpecializationID').value = ''; // reset
                                        }
                                    }
                                </script>

                                <input type="hidden" name="delivery_address" value="" /></td>
                                <input type="hidden" name="delivery_city" value="" /></td>
                                <input type="hidden" name="delivery_state" value="" /></td>
                                <input type="hidden" name="delivery_zip" value="" /></td>
                                <input type="hidden" name="delivery_country" value="" /></td>

                                <div class="form-group col-sm-6 flex-column d-flex mt-2">

                                    <select class="form-select form-select-md " aria-label="Small select example"
                                        onChange="geturlval(this.value,this.id);" class="form-control"
                                        name="merchant_param2" id="merchant_param2" onChange="getState(this.value)">
                                        <option value="">Select Fees type</option>
                                        <option value="1_Lumpsum">Lumpsum</option>
                                        <option value="2_Installment">Installment</option>
                                        <option value="3_NBFC">NBFC Part Payment</option>
                                    </select>
                                </div>

                                <div class="form-group col-sm-6 flex-column d-flex mt-2">
                                    <select class="form-select form-select-md" name="merchant_param4"
                                        id="merchant_param4">
                                        <option value="">Select Counselor</option>
                                        <?php
                                        $stmt = $conn->prepare("SELECT * FROM tbl_counselor WHERE active = 1 ORDER BY full_name");
                                        $stmt->execute();
                                        $getCounselors = $stmt->fetchAll(PDO::FETCH_ASSOC);

                                        foreach ($getCounselors as $row) {
                                            $counselorEmail = $row['email'];
                                            $counselorName = $row['full_name'];
                                            echo "<option value='{$counselorEmail}'>{$counselorName}</option>";
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
                                    <input type="text" class="form-control" name="password" id="password" value=""
                                        placeholder="New Password">
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
                                    <input name="form_botcheck" class="form-control" type="hidden" value="" />
                                    <button type="submit" id="mysubmitBtn" disabled="disabled"
                                        style="background: #f47521;width: 50%;color: #fff;"
                                        class="btn btn-primary mit-button">Pay
                                        Now</button>
                                </div>
                        </form>

                        <script type="text/javascript">
                            $("#OtherFeesPayment").validate({
                                submitHandler: function (form) {
                                    var form_btn = $(form).find('button[type="submit"]');
                                    var form_result_div = '#form-result';
                                    $(form_result_div).remove();
                                    form_btn.before(
                                        '<div id="form-result" class="alert alert-success" role="alert" style="display: none;"></div>'
                                    );
                                    var form_btn_old_msg = form_btn.html();
                                    form_btn.html(form_btn.prop('disabled', true).data("loading-text"));
                                    $(form).ajaxSubmit({
                                        dataType: 'json',
                                        success: function (data) {
                                            if (data.status == 'true') {
                                                $(form).find('.form-control').val('');
                                            }
                                            form_btn.prop('disabled', false).html(
                                                form_btn_old_msg);
                                            $(form_result_div).html(data.message).fadeIn(
                                                'slow');
                                            setTimeout(function () {
                                                $(form_result_div).fadeOut('slow')
                                            }, 6000);
                                        }
                                    });
                                }
                            });
                        </script>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <li class="section hero10 p-3" style="list-style-type: none;">
                        <h4 class="section-title">Our RBI Registered NBFC Partners</h4>
                        <ul class="curriculum me-1">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>S.No</th>
                                        <th>NBFC NAME</th>
                                        <th>Official Website</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>FIBE</td>
                                        <td>
                                            <a href="https://www.fibe.in/" target="_blank">
                                                https://www.fibe.in/
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Propelld</td>
                                        <td>
                                            <a href="https://propelld.com/signin" target="_blank">
                                                https://propelld.com/signin
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Grayquest</td>
                                        <td>
                                            <a href="https://customer.grayquest.com/" target="_blank">
                                                https://customer.grayquest.com/
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </ul>
                    </li>
                </div>
            </div>
        </div>

        <?php //  include "learner-support.php" ?>

    </main>
    <!-- Footer Start -->

    <?php include "footer.php" ?>

    <script>
        function getSpecializations(courseValue) {
            if (courseValue == "") {
                document.getElementById("SpecializationID").innerHTML = "<option value=''>Select Specialization</option>";
                return;
            }

            // Split the value on the first hyphen
            var parts = courseValue.split("_", 2);
            var courseName = parts[0]; // Get the CourseID part

            var xhr = new XMLHttpRequest();
            xhr.open("GET", "get_specializations_erp.php?CourseName=" + courseName, true);
            xhr.onreadystatechange = function () {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    document.getElementById("SpecializationID").innerHTML = xhr.responseText;
                }
            };
            xhr.send();
        }
    </script>

    <!-- footer end  -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/bootstrap-select.min.js"></script>
    <script src="assets/js/slick.min.js"></script>
    <script src="assets/js/common.js"></script>
    <script src="assets/js/course-slider.js"></script>
</body>
</html>