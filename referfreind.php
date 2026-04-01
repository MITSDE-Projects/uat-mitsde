<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />

    <title>Refer Friend - MIT School of Distance Education</title>

    <!-- CANONICAL TAG -->

   
    <link rel="canonical" href="https://mitsde.com/referfrend" />

    <!-- CANONICAL TAG -->

    <?php  include "5-common-seo-tag-1.php" ?>

    <!-- OGP TAG -->

    <meta property="og:title" content="Refer Friend - MIT School of Distance Education">
    <meta property="og:site_name" content="MIT School of Distance Education">
    <meta property="og:url" content="https://mitsde.com/referfrend">
    <meta property="og:description"
        content="">
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
    <link  rel="stylesheet" href="assets/fontawesome/css/all.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/course-common-internal.css" type="text/css" />
    <link rel="stylesheet" href="assets/css/form-new.css" type="text/css" />
    
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


    <!----->


    <!----->
   
</head>

<body>
    <?php include "5-common-seo-tag-2.php" ?>
    <!-- Header Nav Start -->
    <?php include "header.php"?>
    <!-- Header Nav End --->
    <main class="main-body">
        


        <div class="container-fluid px-1 py-5 mx-auto">
            <div class="row d-flex justify-content-center">
                <div class="col-xl-7 col-lg-8 col-md-9 col-11 text-center">
                    
                    <div class="card">
                        <!-- <h5 class="text-center mb-4">Powering world-class companies</h5> -->
                        <h3>Referral Policy</h3>
                    <p class="blue-text"><b>Get a Course Discount by Referring</b></p>
                        <form class="form-card" id="Refer_frend" name="Refer_frend" action="includes/sendreferfriend.php"
                                    method="post" enctype="multipart/form-data" onSubmit="return validate(this);">
                            <div class="row justify-content-between text-left">
                                <div class="form-group col-sm-6 flex-column d-flex"> <label
                                        class="form-control-label px-3">Registration No</label>
                                    <input type="text" id="Registration_no" name="Registration_no" placeholder="Registration No"
                                        class="form-control">
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
                                            *</span></label>  <input name="Your_Email" id="Your_Email"
                                                    class="form-control required email" type="email"
                                                    placeholder="Enter Email">
                                </div>


                                <div class="form-group col-sm-6 flex-column d-flex"> <label>Mobile No
                                        <small>*</small></label>
                                    <input type="text" name="Mobile_no" id="Mobile_no" placeholder="Mobile No"
                                        class="form-control">
                                </div>
                                <div class="form-group col-sm-6 flex-column d-flex mt-1">
                                    <label class="form-control-label ">Relation<span class="text-danger">
                                            *</span></label>
                                    <select class="form-select form-select-md " aria-label="Small select example">
                                        <!-- <option selected>Open this select menu</option> -->
                                        <option value="#">Select One</option>
                                        <option value="Friend">Friend</option>
                                        <option value="Relative">Relative</option>
                                        <option value="Colleague">Colleague</option>
                                    </select>
                                </div>
                                <div class="form-group col-sm-6 flex-column d-flex mt-1 "> <label class="form-control-label ">
                                        Name of Student<span class="text-danger">
                                            *</span></label> <input type="text" id="form_name_candidate"
                                        name="form_name_candidate" placeholder="Name of Student" class="form-control">




                                </div>
                                <div class="form-group col-sm-6 flex-column d-flex mt-1">
                                    <label class="form-control-label ">Program Interested<span class="text-danger">
                                            *</span></label>
                                    <select class="form-select form-select-md " aria-label="Small select example">
                                        <!-- <option selected>Open this select menu</option> -->
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
                                <div class="form-group col-sm-6 flex-column d-flex mt-1"> <label class="form-control-label ">
                                Email<span class="text-danger">
                                            *</span></label> <input type="text" id="student_email"
                                        name="student_email" placeholder="Enter Email" class="form-control">


                                </div>
                                <div class="form-group col-sm-6 flex-column d-flex"> <label>Mobile No
                                        <small>*</small></label>
                                    <input type="text" name="Mobile_no" id="Mobile_no" placeholder="Mobile No"
                                        class="form-control">
                                </div>
                            </div>


                            <div class="row justify-content-center mt-2">
                                <div class="form-group col-sm-6"> 
                                    <input name="form_botcheck" class="form-control" type="hidden" value="" />
                                        <button type="submit" class="btn btn" style="background: #f47521;width: 70%;color: #fff;">Submit</button>

                                       

                                       
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