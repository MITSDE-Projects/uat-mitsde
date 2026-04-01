<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />

    <title>Refer Friend - MIT School of Distance Education</title>
    <meta name="description"
        content="Invite your friend to join MIT SDE’s distance learning programs. Refer now and enjoy rewards when they register and enroll."/>

    <!-- CANONICAL TAG -->


    <link rel="canonical" href="https://mitsde.com/refer-friend" />

    <!-- CANONICAL TAG -->

    <?php include "5-common-seo-tag-1.php" ?>

    <!-- OGP TAG -->

    <meta property="og:title" content="Refer Friend - MIT School of Distance Education">
    <meta property="og:site_name" content="MIT School of Distance Education">
    <meta property="og:url" content="https://mitsde.com/refer-friend.php">
    <meta property="og:description" content="Invite your friend to join MIT SDE’s distance learning programs. Refer now and enjoy rewards when they register and enroll.">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://mitsde.com/assets/images/course/common/Refer-Banner.png">

    <!-- / OG TAG -->

    <!-- Page Title -->
    <link rel="icon" type="image/png" href="assets/images/favicon-mit.ico" />
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/bootstrap-select.min.css" />
    <link rel="stylesheet" href="assets/css/slick.min.css" />
    <link rel="stylesheet" href="assets/css/fonts.css" type="text/css" />
    <link rel="stylesheet" href="assets/css/style.css" type="text/css" />
    <link rel="stylesheet" href="assets/fontawesome/css/all.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/course-common-internal.css" type="text/css" />
    <link rel="stylesheet" href="assets/css/form-new.css" type="text/css" />
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <!--API for Queck contact----->
    <!-- <script src="assets/js/api/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="assets/js/api/validation.js" charset="UTF-8"></script> -->

    <script type="text/javascript">
        var ck_name = /^[A-Za-z0-9 ]{3,100}$/;
        var ck_email = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/;
        var ck_username = /^[A-Za-z0-9_]{1,20}$/;
        var ck_password = /^[A-Za-z0-9!@#$%^&*()_]{6,20}$/;
        var ck_mob = /^[\s()+-]*([0-9][\s()+-]*){10}$/;


        function validate(Refer_frend) {
            //alert('hi');

            var Registration_no = Refer_frend.Registration_no.value;
            var form_name = Refer_frend.form_name.value;
            var Your_Email = Refer_frend.Your_Email.value;
            var Mobile_no = Refer_frend.Mobile_no.value;
            var form_name_candidate = Refer_frend.form_name_candidate.value;
            //var student_email = Refer_frend.student_email.value;
            //var student_mob = Refer_frend.student_mob.value;


            //var FeesType = stories.FeesType.value;


            var errors = [];

            if (!ck_name.test(Registration_no)) {
                errors[errors.length] = "Please Enter your Registration number .";
            }
            if (!ck_name.test(form_name)) {
                errors[errors.length] = "Please Enter your Name .";
            }

            if (!ck_email.test(Your_Email)) {
                errors[errors.length] = "You must enter a valid email address.";
            }
            if (!ck_mob.test(Mobile_no)) {
                errors[errors.length] = "You must enter a valid Mobile.";
            }

            if (!ck_name.test(form_name_candidate)) {
                errors[errors.length] = "Please Enter candidate name";
            }

            if (!ck_email.test(Your_Email)) {
                errors[errors.length] = "You must enter a valid email address.";
            }

            /*if (!ck_email.test(student_email)) {
             errors[errors.length] = "You must enter a valid email address of student.";
            }

            if (!ck_email.test(student_mob)) {
             errors[errors.length] = "You must enter a valid email address of student.";
            }*/

            /*if (FeesType==0) {
             errors[errors.length] = "Select Fees Type";
            }
            */

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
    <script>
        function enableSubmitBtn() {
            document.getElementById("mysubmitBtn").disabled = false;  //enable the submit button

        }
    </script>
   


    <!----->


    <!----->

</head>

<body class="bg-pic" style="margin-top:-2px;margin-bottom:8px;" onload="createCaptcha()">
    <?php include "5-common-seo-tag-2.php" ?>
    <!-- Header Nav Start -->
    <?php include "header.php" ?>
    <!-- Header Nav End --->
    <main class="main-body">
        <?php include "announcementUpdate.php" ?>

        <section class="banner inner-banner">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-6 main-banner">
                        <h1>Earn Big Rewards By Simply Referring A Friend</h1>
                        <p>(4000 benefit to you & 2000 benefit to your friend)*
                        </p>

                        <div class="page-btn mt-3">


                            <button type="button" class="btn btn-primary mit-button cus-btn inner-cus ms-0"
                                data-bs-toggle="modal" data-bs-target="#enquiryModal-download-form"><span
                                    class="mtsk-download"></span> &nbsp; Refer & Earn Today
                            </button>


                        </div>
                        <nav>

                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="https://mitsde.com">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Refer Friend</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-md-12 col-lg-6">
                        <div class="css-details">
                            <div class="stc-det student-sec inner-sec">
                                <img src="assets/images/progress.svg" alt="Progress indicator icon">
                            </div>
                            <img src="assets/images/course/common/Refer-Banner.png" class="banner-img" alt="Placements">
                            <div class="stc-det course-sec inner-sec">
                                <img src="assets/images/walet.svg" alt="Wallet icon for payment">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>




        <div class="container-fluid px-1 py-5 mx-auto">
            <div class="row d-flex justify-content-center">
                <div class="col-xl-7 col-lg-8 col-md-9 col-11 text-center">

                    <div class="card">
                        <!-- <h5 class="text-center mb-4">Powering world-class companies</h5> -->
                        <h3>Referral Policy</h3>
                        <p class="blue-text"><b>Get a Course Discount by Referring</b></p>
                        <form class="form-card" id="Refer_frend" name="Refer_frend"
                            action="includes/sendreferfriend.php" method="post" enctype="multipart/form-data"
                            onSubmit="return validate(this);">
                            <div class="row justify-content-between text-left">
                                <div class="form-group col-sm-6 flex-column d-flex"> <label
                                        class="form-control-label px-3">Registration No</label>
                                    <input type="text" id="Registration_no" name="Registration_no"
                                        placeholder="Registration No" class="form-control">
                                </div>


                                <div class="form-group col-sm-6 flex-column d-flex"> <label
                                        class="form-control-label px-3"> Name<span class="text-danger">
                                            *</span></label> <input type="text" name="form_name" id="form_name"
                                        placeholder="Enter Name" class="form-control">


                                </div>
                            </div>

                            <div class="row justify-content-between text-left">
                                <div class="form-group col-sm-6 flex-column d-flex"> <label
                                        class="form-control-label px-3">Your Email<span class="text-danger">
                                            *</span></label> <input name="Your_Email" id="Your_Email"
                                        class="form-control required email" type="email" placeholder="Enter Email">
                                </div>


                                <div class="form-group col-sm-6 flex-column d-flex"> <label>Mobile No
                                        <small>*</small></label>
                                    <input type="text" name="Mobile_no" id="Mobile_no" placeholder="Mobile No"
                                        class="form-control">
                                </div>
                                <div class="form-group col-sm-6 flex-column d-flex mt-1">
                                    <label class="form-control-label ">Relation<span class="text-danger">
                                            *</span></label>
                                    <select name="Relation" class="form-select form-select-md" aria-label="Small select example">
                                        <option value="">Select One</option>
                                        <option value="Friend">Friend</option>
                                        <option value="Relative">Relative</option>
                                        <option value="Colleague">Colleague</option>
                                    </select>
                                </div>
                                <div class="form-group col-sm-6 flex-column d-flex mt-1 "> <label
                                        class="form-control-label ">
                                        Name of Student<span class="text-danger">
                                            *</span></label> <input type="text" id="form_name_candidate"
                                        name="form_name_candidate" placeholder="Name of Student" class="form-control">




                                </div>
                                <div class="form-group col-sm-6 flex-column d-flex mt-1">
                                    <label class="form-control-label ">Program Interested<span class="text-danger">
                                            *</span></label>
                                    <select name="Program_Interested" class="form-select form-select-md " aria-label="Small select example">
                                        <!-- <option selected>Open this select menu</option> -->
                                        <option value="">Select Course</option>
                                        <option value="PGDM in Project Management">PGDM in Project Management</option>
                                        <option value="PGDM in Operations Management">PGDM in Operations Management</option>
                                        <option value="PGDM in Human Resource Management">PGDM in Human Resource Management</option>
                                        <option value="PGDM in Information Technology">PGDM in Information Technology</option>
                                        <option value="PGDM in Marketing Management">PGDM in Marketing Management</option>
                                        <option value="PGDM in Finance Management">PGDM in Finance Management</option>
                                        <option value="PGDM in Logistics and Supply Chain Management">PGDM in Logistics and Supply Chain Management</option>
                                        <option value="PGDM in Material Management">PGDM in Material Management</option>
                                        <option value="PGDM in Banking & Financial Services">PGDM in Banking & Financial Services</option>
                                        <option value="PGDM in Construction And Project Management">PGDM in Construction And Project Management</option>
                                        <option value="PGCM in Business Analytics">PGCM in Business Analytics</option>
                                        <option value="PGCM in Digital Marketing">PGCM in Digital Marketing</option>
                                        <option value="PGDM (Ex.) in Modern Project Management">PGDM (Ex.) in Modern Project Management</option>
                                        <option value="PGDM (Ex.) in Technology & Operations">PGDM (Ex.) in Technology & Operations</option>
                                        <option value="PGDM (Ex.) in Human Capital Management">PGDM (Ex.) in Human Capital Management</option>
                                        <option value="PGDM (Ex.) in Banking & Financial Services">PGDM (Ex.) in Banking & Financial Services</option>
                                        <option value="PGDM (Ex.) in Strategic Marketing Management">PGDM (Ex.) in Strategic Marketing Management</option>
                                        <option value="PGDM (Ex.) in Global Logistics & Supply Chain">PGDM (Ex.) in Global Logistics & Supply Chain</option>
                                        <option value="PGDM (Ex.) in Construction and Project">PGDM (Ex.) in Construction and Project</option>
                                        <option value="PGDBA in Operations Management">PGDBA in Operations Management</option>
                                        <option value="PGDBA in Finance Management">PGDBA in Finance Management</option>
                                        <option value="PGDBA in Human Resource Management">PGDBA in Human Resource Management</option>
                                        <option value="PGDBA in Information Technology">PGDBA in Information Technology</option>
                                        <option value="PGDBA in Marketing Management">PGDBA in Marketing Management</option>
                                        <option value="SQL Power BI Certification">SQL Power BI Certification</option>
                                        <option value="Advanced Certificate In UI UX">Advanced Certificate In UI UX</option>
                                        <option value="AI in Digital Marketing">AI in Digital Marketing</option>
                                        <option value="Certification in Project Management">Certification in Project Management</option>
                                        <option value="Certification in Marketing Management">Certification in Marketing Management</option>
                                        <option value="Certification in Human Resource Management">Certification in Human Resource Management</option>
                                        <option value="Certification in Operations Management">Certification in Operations Management</option>
                                        <option value="Certification in Material Management">Certification in Material Management</option>
                                        <option value="Certification in Logistics and Supply Chain">Certification in Logistics and Supply Chain</option>
                                        <option value="Certification in Finance Management">Certification in Finance Management</option>

                                    </select>
                                </div>
                                <div class="form-group col-sm-6 flex-column d-flex mt-1"> <label
                                        class="form-control-label ">
                                        Email<span class="text-danger">
                                            *</span></label> <input type="text" id="student_email" name="student_email"
                                        placeholder="Enter Email" class="form-control">


                                </div>
                                <div class="form-group col-sm-6 flex-column d-flex"> <label>Mobile No
                                        <small>*</small></label>
                                    <input type="text" name="student_mob" id="student_mob" placeholder="Mobile No"
                                        class="form-control">
                                </div>
                            </div>
                            <div><label id="label-password" style="left: 80%;">Captcha <sanp style="color:red;">*</sanp></label>
                            </div>
                            <div class="row">

                                <div class="col-sm-4">

                                </div>
                                <div class="col-sm-8">

                                    <div class="g-recaptcha" data-sitekey="6Lf1dR4gAAAAAJXXpTYVhawIuElj2l7XXvd2FRsJ" required="" data-callback="enableSubmitBtn"></div>
                                </div>
                            </div>


                            <div class="row justify-content-center mt-2">
                                <div class="form-group col-sm-6">
                                    <input name="form_botcheck" class="form-control" type="hidden" value="" />
                                    <button type="submit" class="btn btn" id="mysubmitBtn" disabled="disabled"
                                        style="background: #f47521;width: 70%;color: #fff;">Submit</button>


                                </div>

                        </form>
                        <script type="text/javascript">
                            $("#Refer_frend").validate({
                                submitHandler: function(form) {
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
                                        success: function(data) {
                                            if (data.status == 'true') {
                                                $(form).find('.form-control').val('');
                                            }
                                            form_btn.prop('disabled', false).html(
                                                form_btn_old_msg);
                                            $(form_result_div).html(data.message).fadeIn(
                                                'slow');
                                            setTimeout(function() {
                                                $(form_result_div).fadeOut('slow')
                                            }, 6000);
                                        }
                                    });
                                }
                            });
                        </script>
                        <div class="submitbtn123"></div><!-- /.comment-form -->
                    </div>
                </div>
            </div>
        </div>
















        <?php //  include "learner-support.php" 
        ?>

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