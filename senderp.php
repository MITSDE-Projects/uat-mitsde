<?php session_start();
// include("admin/include/config.php");
include("admin/include/configpdo.php");
?>

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
    <link rel="canonical" href="https://mitsde.com/referfrend" />

    <!-- Page Title -->
    <title>Online Payment | Other Fees Payment By HDFC | Pay Online</title>
    <meta name="robots" content="noindex, nofollow">
    <!-- CANONICAL TAG -->

    <link rel="canonical" href="https://mitsde.com/OtherFeesPayment02" />

    <!-- CANONICAL TAG -->

    <?php include "5-common-seo-tag-1.php" ?>

    <!-- OGP TAG -->

    <meta property="og:title" content="Online Payment | Other Fees Payment By HDFC | Pay Online">
    <meta property="og:site_name" content="MIT School of Distance Education">
    <meta property="og:url" content="https://mitsde.com/OtherFeesPayment02">
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

    </script>

    <script type="text/javascript">
        var ck_name = /^[A-Za-z0-9 ]{3,100}$/;
        var ck_email = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/;
        var ck_username = /^[A-Za-z0-9_]{1,20}$/;
        var ck_password = /^[A-Za-z0-9!@#$%^&*()_]{6,20}$/;
        var ck_mob = /^[\s()+-]*([0-9][\s()+-]*){10}$/;


        function validate(form) {

            var LeadID = form.merchant_param3.value.trim();
            //var StudentName = form.delivery_name.value.trim();
            var FirstName = form.firstName.value.trim();
            var LastName = form.lastName.value.trim();
            var email = form.billing_email.value.trim();
            var MobileNo = form.delivery_tel.value.trim();
            var Gender = form.gender.value.trim();
            //var FeesType = form.merchant_param2.value.trim();
            var Course = form.merchant_param1.value.trim();
            var Specialization = form.SpecializationID.value.trim();
            var Counselor = form.merchant_param4.value.trim();
            /*var Password = form.password.value.trim();
            var Amount = form.amount.value.trim();*/


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

            /*if (FeesType == 0) {
                errors[errors.length] = "Select Fees Type";
            }*/

            if (Course == 0) {
                errors[errors.length] = "Select Course";
            }

            if (Specialization == 0) {
                errors[errors.length] = "Select Specialization";
            }

            if (Counselor == 0) {
                errors[errors.length] = "Select Counselor";
            }

            /*if (!ck_password.test(Password)) {
                errors[errors.length] = "Password should contain at least 6 characters.";
            }

            if (Amount === "" || isNaN(Amount)) {
                errors.push("Please enter a valid Amount.");
            }*/


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
                        <!-- <h5 class="text-center mb-4">Powering world-class companies</h5> -->
                        <h3>Payment For Admission</h3>
                        <!-- <p class="blue-text"><b>Enter Only Admission ID. We Will get your information from database.</b> -->
                        </p>
                        <form action="senderprequest.php" name="OtherFeesPayment" id="OtherFeesPayment"
                            onsubmit="return validate(this);" method="post">

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
                                    <!-- <div class="form-group"><input type="text" class="form-control"
                                            name="merchant_param1" id="merchant_param1" value=""
                                            placeholder="Course Name"> </div> -->

                                    <select class="form-select form-select-md" name="merchant_param1"
                                        id="merchant_param1" onchange="getSpecializations(this.value)">
                                        <option value="">Select Course</option>
                                        <?php
                                        $stmt = $conn->prepare("SELECT * FROM `NewCourseERP`");
                                        $stmt->execute();
                                        $courses = $stmt->fetchAll();

                                        foreach ($courses as $row) {
                                            $CourseID = $row['CourseID'];
                                            $CourseName = $row['CourseName'];
                                            echo "<option value='" . htmlspecialchars($CourseID) . "'>" . htmlspecialchars($CourseName) . "</option>";
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




                                <input type="hidden" name="delivery_address" value="" /></td>
                                <input type="hidden" name="delivery_city" value="" /></td>
                                <input type="hidden" name="delivery_state" value="" /></td>
                                <input type="hidden" name="delivery_zip" value="" /></td>
                                <input type="hidden" name="delivery_country" value="" /></td>




                                <div class="form-group col-sm-6 flex-column d-flex mt-2">
                                    <select class="form-select form-select-md" name="merchant_param4"
                                        id="merchant_param4">
                                        <option value="">Select Counselor</option>
                                        <option value="sanjay.gaikwad@mitsde.com">Sanjay</option>
                                        <?php
                                        $stmt = $conn->prepare("SELECT * FROM `tbl_counselor`");
                                        $stmt->execute();
                                        $counselors = $stmt->fetchAll();

                                        foreach ($counselors as $row) {
                                            $counselorEmail = $row['email'];
                                            $counselorName = $row['full_name'];
                                            echo "<option value='" . htmlspecialchars($counselorEmail) . "'>" . htmlspecialchars($counselorName) . "</option>";
                                        }
                                        ?>
                                    </select>
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
                                        class="btn btn-primary mit-button">Send
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

        <?php //  include "learner-support.php" ?>

    </main>
    <!-- Footer Start -->

    <?php include "footer.php" ?>

    <script>
        function getSpecializations(courseName) {
            if (courseName == "") {
                document.getElementById("SpecializationID").innerHTML = "<option value=''>Select Specialization</option>";
                return;
            }

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