<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />

    <title>Feedback - MIT School of Distance Education</title>

    <!-- CANONICAL TAG -->


    <link rel="canonical" href="https://mitsde.com/feedback" />

    <!-- CANONICAL TAG -->

    <?php include "5-common-seo-tag-1.php" ?>




    <!-- OGP TAG -->

    <meta property="og:title" content="Feedback - MIT School of Distance Education">
    <meta property="og:site_name" content="MIT School of Distance Education">
    <meta property="og:url" content="https://mitsde.com/feedback.php">
    <meta property="og:description" content="">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://mitsde.com/feedback">

    <!-- / OG TAG -->




    <link rel="icon" type="image/png" href="assets/images/favicon-mit.ico" />
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/bootstrap-select.min.css" />
    <link rel="stylesheet" href="assets/css/slick.min.css" />
    <link rel="stylesheet" href="assets/css/fonts.css" type="text/css" />
    <link rel="stylesheet" href="assets/css/style.css" type="text/css" />
    <link rel="stylesheet" href="assets/fontawesome/css/all.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/course-common-internal.css" type="text/css" />
    <link rel="stylesheet" href="assets/css/form-new.css" type="text/css" />

    <!--API for Queck contact----->
    <script src="assets/js/api/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="assets/js/api/validation.js" charset="UTF-8"></script>

    <script type="text/javascript">
        var ck_name = /^[A-Za-z0-9 ]{3,100}$/;
        var ck_email = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/;
        var ck_username = /^[A-Za-z0-9_]{1,20}$/;
        var ck_password = /^[A-Za-z0-9!@#$%^&*()_]{6,20}$/;
        var ck_mob = /^[\s()+-]*([0-9][\s()+-]*){10}$/;
        var ck_url = /\b((https?:\/\/|www\.)[^\s]+|[A-Za-z0-9-]+\.(com|net|org|info|biz|co|in|us|uk)[^\s]*)\b/gi; // Detect web links
        var ck_special = /[@#$%^*()?:{}|<>]/g; // Detect special characters


        function validate(form) {
            var IndividualType = form.IndividualType.value.trim();
            var TypeOfFeedback = form.TypeOfFeedback.value.trim();
            var studentname = form.studentname.value.trim();
            var Your_Email = form.Your_Email.value.trim();
            var Mobile_no = form.Mobile_no.value.trim();
            var feedback = form.feedback.value.trim();

            var errors = [];

            if (IndividualType === "") {
                errors.push("Please select Individual Type.");
            }
            if (TypeOfFeedback === "") {
                errors.push("Please select Type of Feedback.");
            }

            if (!ck_name.test(studentname)) {
                errors.push("Please enter a valid Name.");
            }
            if (!ck_email.test(Your_Email)) {
                errors.push("Please enter a valid Email address.");
            }
            if (!ck_mob.test(Mobile_no)) {
                errors.push("Please enter a valid 10-digit Mobile number.");
            }
            if (feedback.length > 500) {
                errors.push("Feedback must not exceed 500 characters.");
            }
            if (ck_url.test(feedback)) {
                errors.push("Feedback cannot contain website links.");
            }
            if (ck_special.test(feedback)) {
                errors.push("Feedback cannot contain special characters (@#$%^* etc).");
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

    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <script>
        function enableSubmitBtn() {
            document.getElementById("mysubmitBtn").disabled = false; //enable the submit button

        }
    </script>


    <!----->


    <!----->

</head>

<body>
    <?php include "5-common-seo-tag-2.php" ?>
    <!-- Header Nav Start -->
    <?php include "header.php" ?>
    <!-- Header Nav End --->
    <main class="main-body">



        <div class="container-fluid px-1 py-5 mx-auto">
            <div class="row d-flex justify-content-center">
                <div class="col-xl-7 col-lg-8 col-md-9 col-11 text-center">

                    <div class="card">

                        <h1>Feedback</h1>

                        <form class="form-card" id="Refer_frend" name="Refer_frend" action="includes/sendfeedback.php" method="post"
                            enctype="multipart/form-data" onSubmit="return validate(this);" novalidate>

                            <div class="row justify-content-between text-left">
                                <div class="form-group col-sm-6 flex-column d-flex mt-1">
                                    <label class="form-control-label ">Individual Type <span class="text-danger">
                                            *</span></label>
                                    <select class="form-select form-select-md" name="IndividualType"
                                        aria-label="Small select example" required>


                                        <option value="">Choose Type</option>
                                        <option value="Existing Student ">Existing Student</option>
                                        <option value="Alumni">Alumni</option>
                                        <option value="Prospective Student">Prospective Student</option>
                                        <option value="Site Visitor">Site Visitor</option>
                                        <option value="Other">Other</option>
                                    </select>
                                </div>




                                <div class="form-group col-sm-6 flex-column d-flex mt-1">
                                    <label class="form-control-label ">Type of Feedback<span class="text-danger">
                                            *</span></label>
                                    <select class="form-select form-select-md" name="TypeOfFeedback"
                                        aria-label="Small select example" required>

                                        <option value="">Choose Type</option>
                                        <option value="Website Navigation">Website Navigation</option>
                                        <option value="Contact Details">Contact Details</option>
                                        <option value="Course Information">Course Information</option>
                                        <option value="Student Service">Student Service</option>
                                        <option value="Academics">Academics</option>
                                        <option value="Admission Process">Admission Process</option>
                                        <option value="Fee Payment">Fee Payment</option>
                                        <option value="Certification">Certification</option>
                                        <option value="Examination">Examination</option>
                                        <option value="Other">Other </option>
                                    </select>
                                </div>

                                <div class="form-group col-sm-6 flex-column d-flex"> <label
                                        class="form-control-label px-3">Name<span class="text-danger">
                                            *</span></label> <input type="text" name="studentname"
                                        class="form-control required name" id="form_name" placeholder="Enter Name"
                                        required>


                                </div>
                                <!--  -->


                                <div class="form-group col-sm-6 flex-column d-flex"> <label
                                        class="form-control-label px-3">Your Email<span class="text-danger">
                                            *</span></label> <input name="Your_Email" id="Your_Email"
                                        class="form-control required email" type="email" placeholder="Enter Email"
                                        required>
                                </div>
                            </div>

                            <div class="row justify-content-between text-left">
                                <div class="form-group col-sm-6 flex-column d-flex"> <label>Mobile No
                                        <small>*</small></label>
                                    <input type="number" name="Mobile_no" id="Mobile_no" placeholder="Mobile No"
                                        class="form-control" required>
                                </div>



                                <div class="form-group col-sm-12 flex-column d-flex"> <label
                                        for="exampleFormControlTextarea1" class="form-label">Write Your Feedback
                                        Here</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" name="feedback"
                                        rows="3" required></textarea>
                                </div>

                                <div class="col-12 mt-3 d-flex justify-content-center">
                                    <div class="g-recaptcha" data-sitekey="6Lf1dR4gAAAAAJXXpTYVhawIuElj2l7XXvd2FRsJ"
                                        required data-callback="enableSubmitBtn">
                                    </div>
                                </div>

                            </div>




                            <div class="row justify-content-center mt-2">
                                <div class="form-group col-sm-6">
                                    <input name="form_botcheck" class="form-control" type="hidden" value="" />
                                    <button type="submit" id="mysubmitBtn" disabled="disabled" class="btn btn"
                                        style="background: #f47521;width: 70%;color: #fff;">Submit</button>




                                </div>

                        </form>
                        <script type="text/javascript">
                            $("#Refer_frend").validate({
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