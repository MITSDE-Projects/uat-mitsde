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
<title>Refer Friend - MIT School of Distance Education</title>
    <link rel="icon" type="image/png" href="assets/images/favicon-mit.ico" />
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/bootstrap-select.min.css" />
    <link rel="stylesheet" href="assets/css/slick.min.css" />
    <link rel="stylesheet" href="assets/css/fonts.css" type="text/css" />
    <link rel="stylesheet" href="assets/css/style.css" type="text/css" />
    <link rel="stylesheet" href="assets/css/course-common-internal.css" type="text/css" />

    <style>
        
    </style>
    <!--API for Queck contact----->
    <script src="assets/js/api/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="assets/js/api/validation.js" charset="UTF-8"></script>
    

    
    <!----->

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
    <!----->
    <?php // include"google_code.html";?>

</head>

<body>
    <!-- Header Nav Start -->
    <?php include "header.php"?>
    <!-- Header Nav End --->
    <main class="main-body">
        <section class="admissionbanner admissioninner-banner">
            <div class="container">
                <div class="row">
                    <!-- <div class="col-md-12 col-lg-6 main-banner">
                        <h2>Dual Degree Program <br> PGDM + EMBA</h2>
                        <p>Transform your career from a beginner to a domain expert with a Dual Degree Program</p>
                        <div class="page-btn">

                            <button type="button" class="btn btn-primary mit-button cus-btn inner-cus"><span class="mtsk-download"></span> &nbsp; Download BROCHURE</button>
                            <button type="button" class="btn btn-primary mit-button cus-btn inner-cus ms-0"
                                data-bs-toggle="modal" data-bs-target="#enquiryModal-download-form"><span
                                    class="mtsk-download"></span> &nbsp; Download BROCHURE
                            </button>

                        </div>
                    </div>
                    <div class="col-md-12 col-lg-6">
                        <div class="css-details">
                            <div class="stc-det student-sec inner-sec">
                                <img src="assets/images/progress.svg" alt="">
                            </div>
                            <img src="assets/images/fin-banner.png" class="banner-img" alt="Banner 1">
                            <div class="stc-det course-sec inner-sec">
                                <img src="assets/images/walet.svg" alt="">
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </section>
        <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="col-md-6 col-md-push-3">

                        <h3 class="text-theme-colored2 mt-0 pt-5" align="center">Referral Policy</h3>
                        <p align="center"><b>Get a Course Discount by Referring</b></p>
                        <div class="row">
                            <div class="col-md-12">
                                <form id="Refer_frend" name="Refer_frend" action="includes/sendreferfriend.php"
                                    method="post" enctype="multipart/form-data" onSubmit="return validate(this);">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Registration No</label>
                                                <input name="Registration_no" id="Registration_no" type="text"
                                                    placeholder="Registration No" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Name <small>*</small></label>
                                                <input name="form_name" id="form_name" class="form-control" type="text"
                                                    placeholder="Enter Name">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Your Email <small>*</small></label>
                                                <input name="Your_Email" id="Your_Email"
                                                    class="form-control required email" type="email"
                                                    placeholder="Enter Email">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Mobile No <small>*</small></label>
                                                <input type="text" name="Mobile_no" id="Mobile_no"
                                                    placeholder="Mobile No" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Relation </label>
                                                <select name="Relation" id="Relation" class="form-control required"
                                                    required>
                                                    <option value="#">Select One</option>
                                                    <option value="Friend">Friend</option>
                                                    <option value="Relative">Relative</option>
                                                    <option value="Colleague">Colleague</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Name of Student<small>*</small></label>
                                                <input name="form_name_candidate" id="form_name_candidate" type="text"
                                                    placeholder="Name of Student" class="form-control">
                                            </div>
                                        </div>

                                    </div>

                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Program Interested </label>
                                                <select name="Program_Interested" id="Program_Interested"
                                                    class="form-control">
                                                    <option value="">Select Course</option>
                                                    <option value="PGCM in Business Analytics">PGCM in Business
                                                        Analytics</option>
                                                    <option value="PGCM in Digital Marketing">PGCM in Digital Marketing
                                                    </option>
                                                    <option value="PGDM in Information Technology">PGDM in Information
                                                        Technology</option>
                                                    <option value="PGDM in Infrastructure Management">PGDM in
                                                        Infrastructure Management</option>
                                                    <option value="PGDM in Marketing Management">PGDM in Marketing
                                                        Management</option>
                                                    <option value="PGDM in Material Management">PGDM in Material
                                                        Management</option>
                                                    <option value="PGDM in Logistics and Supply Chain Management">PGDM
                                                        in Logistics and Supply Chain Management</option>
                                                    <option value="PGDM in Telecom Management">PGDM in Telecom
                                                        Management</option>
                                                    <option value="PGDM in Financial Services">PGDM in Financial
                                                        Services</option>
                                                    <option value="PGDM in Operations Management">PGDM in Operations
                                                        Management</option>
                                                    <option value="PGDM in Retail Management">PGDM in Retail Management
                                                    </option>
                                                    <option value="PGDM in Finance Management">PGDM in Finance
                                                        Management</option>
                                                    <option value="PGDM in Human Resource Management">PGDM in Human
                                                        Resource Management</option>
                                                    <option value="PGDM in Project Management">PGDM in Project
                                                        Management</option>
                                                    <option value="PGDM in Insurance and Risk Management">PGDM in
                                                        Insurance and Risk Management</option>
                                                    <option value="PGDM in Energy Management">PGDM in Energy Management
                                                    </option>
                                                    <option value="PGDBA in Finance Management">PGDBA in Finance
                                                        Management</option>
                                                    <option value="PGDBA in Human Resource Management">PGDBA in Human
                                                        Resource Management</option>
                                                    <option value="PGDM Executive In Modern Project Management">PGDM
                                                        (Executive) in Modern Project Management</option>
                                                    <option
                                                        value="PGDM Executive In Technology and Operations Management">
                                                        PGDM (Executive) in Technology & Operations Management</option>
                                                    <option value="PGDM Executive In Human Capital Management">PGDM
                                                        (Executive) in Human Capital Management</option>
                                                    <option value="PGDM Executive In Strategic Marketing Management">
                                                        PGDM (Executive) in Strategic Marketing Management</option>
                                                    <option value="PGDM Executive In Financial Engineering">PGDM
                                                        (Executive) in Financial Engineering</option>
                                                    <option
                                                        value="PGDM Executive In Global Logistics And Supply Chain Management">
                                                        PGDM (Executive) in Global Logistics & Supply Chain Management
                                                    </option>
                                                    <option value="PGDM Executive in Banking And Financial Services">
                                                        PGDM (Executive) in Banking & Financial Services</option>
                                                    <option
                                                        value="PGDM Executive In Construction And Project Management">
                                                        PGDM (Executive) in Construction and Project Management</option>
                                                    <option value="PGDM Executive In E-commerce Retail Management">PGDM
                                                        (Executive) in E-commerce Retail Management</option>
                                                    <option value="PGDBA in Information Technology">PGDBA in Information
                                                        Technology</option>
                                                    <option value="PGDBA in Marketing Management">PGDBA in Marketing
                                                        Management</option>
                                                    <option value="PGDBA in Material Management">PGDBA in Material
                                                        Management</option>
                                                    <option value="PGDBA in Operations Management">PGDBA in Operations
                                                        Management</option>
                                                    <option value="PGDBA in Supply Chain Management">PGDBA in Supply
                                                        Chain Management</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input name="student_email" id="student_email" type="text"
                                                    placeholder="Enter Email" class="form-control">
                                            </div>
                                        </div>

                                    </div>

                                    <div class="row">

                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Mobile No<small>*</small></label>
                                                <input name="student_mob" id="student_mob" type="text"
                                                    placeholder="Enter Mobile" class="form-control">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="form-group">
                                        <input name="form_botcheck" class="form-control" type="hidden" value="" />
                                        <button type="submit">Submit</button>
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
                            </div><!-- /.col-md-12 -->
                        </div>

                        
                    </div>
                </div>

            </div><!-- /.container -->

            



      












        <?php  include "learner-support.php" ?>

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