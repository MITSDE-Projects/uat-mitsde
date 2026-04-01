<?php
session_start();
// include("admin/include/config.php");
include("admin/include/configpdo.php");

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
    <title>Online Payment | Other Fees Payment By ICICI | Pay Online</title>
    <meta name="robots" content="noindex, nofollow">
    <!-- CANONICAL TAG -->

    <link rel="canonical" href="https://mitsde.com/sign-up-for-mocs-career-services" />

    <!-- CANONICAL TAG -->

    <?php include "5-common-seo-tag-1.php" ?>

    <!-- OGP TAG -->

    <meta property="og:title" content="Online Payment | Other Fees Payment By ICICI | Pay Online">
    <meta property="og:site_name" content="MIT School of Distance Education">
    <meta property="og:url" content="https://mitsde.com/sign-up-for-mocs-career-services">
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

    <script type="text/javascript">
        var ck_name = /^[A-Za-z0-9 ]{3,100}$/;
        var ck_email = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/;
        var ck_username = /^[A-Za-z0-9_]{1,20}$/;
        var ck_password = /^[A-Za-z0-9!@#$%^&*()_]{6,20}$/;
        var ck_mob = /^[\s()+-]*([0-9][\s()+-]*){10}$/;


        function validate(form) {

            var FirstName = form.firstName.value.trim();
            var LastName = form.lastName.value.trim();
            var email = form.billing_email.value.trim();
            var MobileNo = form.delivery_tel.value.trim();
            var Experience = form.experience.value.trim();
            var Amount = form.amount.value.trim();

            var errors = [];

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

            if (Experience == 0) {
                errors[errors.length] = "Select Experience";
            }

            if (Amount === "" || isNaN(Amount)) {
                errors.push("Please enter a valid Amount.");
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
                        <h3>Payment For Admission</h3>
                        <!-- <p class="blue-text"><b>Enter Only Admission ID. We Will get your information from database.</b> -->
                        </p>
                        <form action="mocsRequestHandler.php" name="mocsFeesPayment" id="mocsFeesPayment"
                            onsubmit="return validate(this);" method="post">


                            <input type="hidden" name="tid" id="tid" />
                            <!--<input type="hidden" name="merchant_id" id="merchant_id" value="193023"/>-->
                            <input type="hidden" name="merchant_id" id="merchant_id" value="2874274" />
                            <input type="hidden" name="order_id" value="<?php echo htmlspecialchars($transactionId, ENT_QUOTES, 'UTF-8'); ?>" />
                            <input type="hidden" name="currency" value="INR" />
                            <input type="hidden" name="redirect_url" id="redirect_url"
                                value="https://mitsde.com/mocsResponseHandler.php" />
                            <input type="hidden" name="cancel_url" id="cancel_url"
                                value="https://mitsde.com/mocsResponseHandler.php" />
                            <input type="hidden" name="language" value="EN" />



                            <div class="row justify-content-between text-left">

                                <div class="form-group col-sm-6 d-flex mt-2 gap-1">
                                    <input type="text" class="form-control" name="firstName" id="firstName" value=""
                                        placeholder="First Name">
                                    <input type="text" class="form-control" name="lastName" id="lastName" value=""
                                        placeholder="Last Name">
                                </div>
                                <div class="form-group col-sm-6 flex-column d-flex mt-2">
                                    <input type="text" class="form-control" name="billing_email" id="EmailID" value=""
                                        placeholder="Email ID">
                                </div>
                                <input type="hidden" name="delivery_address" value="Pune" />
                            </div>


                            <div class="row justify-content-between text-left">

                                <div class="form-group col-sm-6 flex-column d-flex mt-2">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="delivery_tel" id="MobileNo"
                                            value="" placeholder="Mobile No">
                                    </div>
                                </div>

                                <div class="form-group col-sm-6 flex-column d-flex mt-2">
                                    <div class="w-100">
                                        <select class="form-select form-select-md" name="experience" id="experience">
                                            <option value="" selected disabled>Select Experience</option>
                                            <option value="Fresher">Fresher</option>
                                            <option value="0-1 years">0-1 years</option>
                                            <option value="1-2 years">1-2 years</option>
                                            <option value="2-3 years">2-3 years</option>
                                            <option value="3-5 years">3-5 years</option>
                                            <option value="5-7 years">5-7 years</option>
                                            <option value="7-10 years">7-10 years</option>
                                            <option value="10+ years">10+ years</option>
                                        </select>
                                    </div>
                                </div>

                                <input type="hidden" name="delivery_address" value="" /></td>
                                <input type="hidden" name="delivery_city" value="" /></td>
                                <input type="hidden" name="delivery_state" value="" /></td>
                                <input type="hidden" name="delivery_zip" value="" /></td>
                                <input type="hidden" name="delivery_country" value="" /></td>

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
                                    <input name="form_botcheck" class="form-control" type="hidden" value="" />
                                    <button type="submit" id="mysubmitBtn" disabled="disabled"
                                        style="background: #f47521;width: 50%;color: #fff;"
                                        class="btn btn-primary mit-button">Pay
                                        Now</button>
                                </div>




                        </form>

                        <script type="text/javascript">
                            $("#mocsFeesPayment").validate({
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


    <!-- footer end  -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/bootstrap-select.min.js"></script>
    <script src="assets/js/slick.min.js"></script>
    <script src="assets/js/common.js"></script>
    <script src="assets/js/course-slider.js"></script>

</body>

</html>