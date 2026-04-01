<?php session_start();

include('admin/include/config.php');

error_reporting(0);

if (isset($_GET['leadid'])) {
    $StudentID = mysql_real_escape_string($_GET['leadid']);

    // Step 1: Check local DB
    $query = "SELECT * FROM New_erp_student_admission_transaction WHERE leadID = '$StudentID'";
    $result = mysql_query($query);

    if (mysql_num_rows($result) > 0) {
        $row = mysql_fetch_array($result);

        $leadID = $row['leadID'];
        $fullname = explode(' ', $row['name']);
        $firstName = $fullname[0];
        $lastName = $fullname[1];
        $email = $row['email'];
        $mobile = $row['phone'];
        $gender = $row['gender'];
        $course = $row['CourseName'];
        $specialization = $row['SpecializationID'];
        $counselor = $row['counseller_email'];
        $password = $row['password'];
    }
} else {
    $leadID = trim($_POST['merchant_param3']);
    $firstName = trim($_POST['firstName']);
    $lastName = trim($_POST['lastName']);
    $fullname = $firstName . " " . $lastName;
    $email = trim($_POST['billing_email']);
    $mobile = trim($_POST['delivery_tel']);
    $gender = trim($_POST['gender']);
    $course = trim($_POST['merchant_param1']);
    $specialization = trim($_POST['SpecializationID']);
    $counselor = trim($_POST['merchant_param4']);
    $password = trim($_POST['password']);

    $url = "https://prodivrapi.extraaedge.com/api/WebHook/addLead";

    // Prepare request data
    $data = [

        "AuthToken" => "MITSDE-11-06-2020",
        "Source" => "mitsde",
        "FirstName" => $fullname,
        "MobileNumber" => $mobile,
        //"Email" => $Email,
        "LeadSource" => "newadmission",
        "LeadName" => "admission-mitsde",
        "LeadType" => "Online"
    ];
    //print_r($data);
    //die;
    // Initialize cURL session
    $curl = curl_init();

    // Set cURL options
    curl_setopt_array($curl, [
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_POST => true,
        CURLOPT_POSTFIELDS => json_encode($data),
        CURLOPT_HTTPHEADER => [
            'Content-Type: application/json',
            'Accept: application/json'
        ]
    ]);

    // Execute cURL request
    $resp = curl_exec($curl);

    // Check for cURL errors
    if (curl_errno($curl)) {
        curl_close($curl);
        return [
            'status' => 'error',
            'message' => 'API connection failed: ' . curl_error($curl)
        ];
    }

    // Close cURL session
    curl_close($curl);

    // Parse API response
    $response = json_decode($resp, true);
    //print_r($response);
    //echo "</br>leadid-->" . $LeadID;
    $EELeadID = "E" . $response['userId'];
    $old_counselorName = $response['counselorName'];
    //die();

    //-------------------uat api------------------

    if ($leadID != $EELeadID) {

        echo "</br></br><center><h1 style='color:red;'>No record found. Check your Admission ID ($leadID)</h1></center>";

        echo "</br><center><a href='https://www.mitsde.com/newform-test'>Go Back</a></center>";

        die;

    } else {
        $DT = date('Y-m-d H:i:s');
        //echo "INSERT INTO `New_erp_student_admission_transaction` (`othr_id`, `leadID`, `name`, `email`, `phone`, `gender`, `CourseName`,`SpecializationID`,`password`,`old_counselorName`,`counseller_email`,`DT`) VALUES (NULL, '" . $leadID . "', '" . $fullname . "', '" . $email . "','" . $mobile . "','" . $gender . "', '" . $course . "','" . $specialization . "','" . $password . "','" . $old_counselorName . "','" . $counselor . "','" . $DT . "')";
        $insert = "INSERT INTO `New_erp_student_admission_transaction` (`othr_id`, `leadID`, `name`, `email`, `phone`, `gender`, `CourseName`,`SpecializationID`,`password`,`old_counselorName`,`counseller_email`,`DT`) VALUES (NULL, '" . $leadID . "', '" . $fullname . "', '" . $email . "','" . $mobile . "','" . $gender . "', '" . $course . "','" . $specialization . "','" . $password . "','" . $old_counselorName . "','" . $counselor . "','" . $DT . "')";
        mysql_query($insert);
    }
}

function generatetransactionid()
{
    $transactionId = date('dmyhis');
    return $transactionId;
}
$transactionId = generatetransactionid();

$result1 = mysql_query("SELECT * FROM New_erp_student_admission_transaction WHERE t_process_id = '" . $transactionId . "'");


if (mysql_num_rows($result1) > 0) {
    function generatetransactionid1()
    {
        $transactionId = date('dmyhis');
        return $transactionId;
    }
    $transactionId = generatetransactionid1();

} else {
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

            var FeesType = form.merchant_param2.value.trim();
            var Amount = form.amount.value.trim();
            var errors = [];


            if (FeesType == 0) {
                errors[errors.length] = "Select Fees Type";
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
                        <!-- <p class="blue-text"><b>Enter Only Admission ID. We Will get your information from database.</b> 
                        </p>-->
                        <p><strong>Review Your Details</strong></p>
                        <ul class="text-start">
                            <li><strong>Lead ID:</strong> <?= $leadID ?></li>
                            <li><strong>Name:</strong> <?= $firstName . ' ' . $lastName ?></li>
                            <li><strong>Email:</strong> <?= $email ?></li>
                            <li><strong>Mobile:</strong> <?= $mobile ?></li>
                            <li><strong>Gender:</strong> <?= $gender ?></li>
                            <li><strong>Counselor:</strong> <?= $counselor ?></li>
                            <li><strong>Password:</strong> <?= $password ?></li>
                        </ul>
                        <form action="newform-test-RequestHandler" name="OtherFeesPayment" id="OtherFeesPayment"
                            onsubmit="return validate(this);" method="post">


                            <input type="hidden" name="tid" id="tid" />
                            <!--<input type="hidden" name="merchant_id" id="merchant_id" value="193023"/>-->
                            <input type="hidden" name="merchant_id" id="merchant_id" value="236596" />
                            <input type="hidden" name="order_id" value="<?php echo $transactionId; ?>" />
                            <input type="hidden" name="currency" value="INR" />
                            <input type="hidden" name="redirect_url" id="redirect_url"
                                value="https://mitsde.com/newform-test-ResponseHandler.php" />
                            <input type="hidden" name="cancel_url" id="cancel_url"
                                value="https://mitsde.com/newform-test-ResponseHandler.php" />
                            <input type="hidden" name="language" value="EN" />

                            <input type="hidden" name="merchant_param3" value="<?= $leadID ?>">
                            <input type="hidden" name="firstName" value="<?= $firstName ?>">
                            <input type="hidden" name="lastName" value="<?= $lastName ?>">
                            <input type="hidden" name="delivery_address" value="Pune" />
                            <input type="hidden" name="billing_email" value="<?= $email ?>">
                            <input type="hidden" name="delivery_tel" value="<?= $mobile ?>">
                            <input type="hidden" name="gender" value="<?= $gender ?>">
                            <input type="hidden" name="merchant_param1" value="<?= $course ?>">
                            <input type="hidden" name="SpecializationID" value="<?= $specialization ?>">


                            <div class="row justify-content-between text-left">

                                <input type="hidden" name="delivery_address" value="" /></td>
                                <input type="hidden" name="delivery_city" value="" /></td>
                                <input type="hidden" name="delivery_state" value="" /></td>
                                <input type="hidden" name="delivery_zip" value="" /></td>
                                <input type="hidden" name="delivery_country" value="" /></td>

                                <div class="form-group col-sm-6 flex-column d-flex mt-2">

                                    <select class="form-select form-select-md " aria-label="Small select example"
                                        class="form-control" name="merchant_param2" id="merchant_param2">
                                        <option value="">Select Fees type</option>
                                        <option value="1_Lumpsum">Lumpsum</option>
                                        <option value="2_Installment">Installment</option>
                                        <option value="3_NBFC">NBFC Part Payment</option>
                                    </select>
                                </div>

                                <input type="hidden" name="merchant_param4" value="<?= $counselor ?>">

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

                                <input type="hidden" name="password" value="<?= $password ?>">

                                <div class="form-group col-sm-6 flex-column d-flex mt-2">
                                    <div id="statediv"><input type="text" class="form-control" name="amount"
                                            id="exampleInputPassword1" placeholder="Amount" value=""></div>
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