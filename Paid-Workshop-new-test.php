<?php
session_start();
// include("admin/include/config.php");
include("admin/include/configpdo.php");

$_SESSION['erpstud'] = isset($_GET['mitStud_amt']) ? $_GET['mitStud_amt'] : '';
$_SESSION['nonStudAmt'] = isset($_GET['nonStud_amt']) ? $_GET['nonStud_amt'] : '';
$_SESSION['pagename'] = isset($_GET['pagename']) ? $_GET['pagename'] : '';
$searchmsg = "Enter only your Admission ID if you are MITSDE student.";

$leadid = "";
$FirstName = "";
$LastName = "";
$EmailID = "";
$MobileNumber = "";
$StudentID = isset($_GET['studentid']) ? trim($_GET['studentid']) : ''; // test reg id MIT2023E04739 test for live MIT2023E00097

if ($StudentID != "") {

    //die;
    $url = "https://mitpro.mitsde.com/WebAPI/api/CRM/GetLeadDetailAPI?StudentId=" . urlencode($StudentID);

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
    if (isset($data['Object']['GetLeadDetailList'][0])) {
        $leadDetails = $data['Object']['GetLeadDetailList'][0];

        // Extract values into PHP variables
        $leadid = $leadDetails['CRMLeadID'];
        $FirstName = $leadDetails['FirstName'];
        $LastName = $leadDetails['LastName'];
        $EmailID = $leadDetails['EmailAddress'];
        $MobileNumber = $leadDetails['MobileNumber'];
    } else {
        $searchmsg = "No learners details found. Kindly contact student support for assistance.";
        $leadid = "";
    }
}
if($leadid!="")
{
$workshop_amt = $_SESSION['erpstud'];
}
else
{
$workshop_amt = $_SESSION['nonStudAmt'];
}
if (empty($StudentID)) {  
    $workshop_amt = $_SESSION['nonStudAmt'];
}
function generatetransactionid()
{
    return date('dmyhis');
}

$transactionId = generatetransactionid();

$stmt = $conn->prepare("SELECT 1 FROM ai_transaction WHERE t_process_id = ?");
$stmt->execute([$transactionId]);

if ($stmt->fetch()) {
    $transactionId = generatetransactionid();
}
?>

<script language="javascript" type="text/javascript">
function sendtoreject(value, id) {
    const url = 'Paid-Workshop-new-test.php?mitStud_amt=<?php echo $_SESSION["erpstud"]; ?>' +
                '&nonStud_amt=<?php echo $_SESSION["nonStudAmt"]; ?>' +
                '&pagename=<?php echo $_SESSION["pagename"]; ?>' +
                '&studentid=' + value;

    window.location.href = url;
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
    <meta name="robots" content="noindex, nofollow">

    <!-- Page Title -->
    <title>Paid Workshop</title>
    <!-- CANONICAL TAG -->
    <link rel="canonical" href="https://mitsde.com/Paid-Workshop-new-test" />
    <!-- CANONICAL TAG -->

    <?php include "5-common-seo-tag-1.php" ?>


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
        var ck_mob = /^[6-9]\d{9}$/;

        function isRepeatingNumber(num) {
            return /^(\d)\1{9}$/.test(num);
        }

        function validate(form) {
            var FirstName = form.firstName.value.trim();
            var LastName = form.lastName.value.trim();
            var email = form.billing_email.value;
            var MobileNo = form.delivery_tel.value;
            var Expertise = form.expertise.value.trim();
            var Regid = form.regid.value.trim();
            var Experience = form.experience.value.trim();
            var Amount = form.amount.value.trim();


            var errors = [];

            if (!ck_name.test(FirstName)) {
                errors.push("Please Enter Your First Name");
            }

            if (!ck_name.test(LastName)) {
                errors.push("Please Enter Your Last Name");
            }
            // Check for spaces in email
            if (/\s/.test(email)) {
                errors.push("Please remove extra spaces in your Email.");
            } else if (!ck_email.test(email)) {
                errors.push("You must enter a valid email address.");
            }

            // Check for spaces in mobile
            if (/\s/.test(MobileNo)) {
                errors.push("Please remove extra spaces in your Mobile.");
            }
            else if (!ck_mob.test(MobileNo)) {
                errors.push("Mobile must start with 6,7,8, or 9 and be exactly 10 digits.");
            }
            else if (isRepeatingNumber(MobileNo)) {
                errors.push("Mobile number cannot have all digits the same.");
            }

            if (!ck_name.test(Expertise)) {
                errors.push("Please Enter Your Domain of Expertise");
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
    <?php //include "header.php" ?>

    <script>
        window.onload = function () {
            var d = new Date().getTime();
            document.getElementById("tid").value = d;
        };
    </script>
    <!-- Header Nav End --->
    <main class="">
        <div class="container-fluid px-1 py-5 mx-auto">
            <div class="row d-flex justify-content-center">
                <div class="col-xl-7 col-lg-8 col-md-9 col-11 text-center">

                    <div class="card">
                        <!-- <h5 class="text-center mb-4">Powering world-class companies</h5> -->
                        <h3>Payment For Workshop</h3>
                        <p><b><?php echo htmlspecialchars($searchmsg); ?></b></p>
                        <form action="paid-workshop-RequestHandler-test.php" name="PaidWorkshopFeesPayment"
                            id="PaidWorkshopFeesPayment" onsubmit="return validate(this);" method="post">

                            <input type="hidden" name="tid" id="tid" />
                            <!--<input type="hidden" name="merchant_id" id="merchant_id" value="193023"/>-->
                            <input type="hidden" name="merchant_id" id="merchant_id" value="236596" />
                            <input type="hidden" name="order_id" value="<?php echo htmlspecialchars($transactionId); ?>" />
                            <input type="hidden" name="currency" value="INR" />
                            <input type="hidden" name="redirect_url" id="redirect_url"
                                value="https://mitsde.com/paid-workshop-ResponseHandler-test.php" />
                            <input type="hidden" name="cancel_url" id="cancel_url"
                                value="https://mitsde.com/paid-workshop-ResponseHandler-test.php" />
                            <input type="hidden" name="language" value="EN" />



                            <div class="w-50">
                                        <input type="text" class="form-control" name="regid" id="regid" onChange="sendtoreject(this.value,this.id);" value="<?php echo htmlspecialchars($StudentID);  ?>"
                                        placeholder="Admission ID" style="text-transform:uppercase">
                                        <small class="text-muted">Only for MITSDE Student</small>
                                    </div>
                            <div class="row">

                                <div class="form-group d-flex gap-2 mb-3">
                                    <input type="text" class="form-control" name="firstName" id="firstName" value="<?php echo htmlspecialchars($FirstName); ?>"
                                        placeholder="First Name">
                                    <input type="text" class="form-control" name="lastName" id="lastName" value="<?php echo htmlspecialchars($LastName); ?>"
                                        placeholder="Last Name">
                                </div>
                                <input type="hidden" name="delivery_address" value="Pune" />
                            </div>


                            <div class="row">
                                <div class="form-group d-flex gap-2 mb-3">
                                    <input type="text" class="form-control" name="billing_email" id="EmailID" value="<?php echo htmlspecialchars($EmailID); ?>"
                                        placeholder="Email ID">

                                    <input type="text" class="form-control" name="delivery_tel" id="MobileNo" value="<?php echo htmlspecialchars($MobileNumber); ?>"
                                        placeholder="Mobile No">
                                </div>

                            </div>

                            <div class="row">
                                <div class="form-group d-flex flex-column flex-md-row gap-2 mb-3">
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
                                    <div class="w-100">
                                <input type="text" class="form-control" name="expertise" id="expertise" value=""
                                    placeholder="Domain of Expertise">
                            </div>
                                </div>
                            </div>

                            <input type="hidden" name="delivery_address" value="" /></td>
                            <input type="hidden" name="delivery_city" value="" /></td>
                            <input type="hidden" name="delivery_state" value="" /></td>
                            <input type="hidden" name="delivery_zip" value="" /></td>
                            <input type="hidden" name="delivery_country" value="" /></td>

                            <div class="form-group">
                                <div id="statediv">
                                    <input type="hidden" class="form-control" name="amount" id="exampleInputPassword1"
                                        placeholder="Amount" value="<?php echo htmlspecialchars($workshop_amt); ?>">
                                </div>
                            </div>
                            <input type="hidden" class="form-control" name="merchant_param3" id="merchant_param3"
                                value="<?php echo $_SESSION['pagename']; ?>">

                            <div class="d-flex justify-content-center mt-2">
                                <div class="g-recaptcha" data-sitekey="6Lf1dR4gAAAAAJXXpTYVhawIuElj2l7XXvd2FRsJ"
                                    required="" data-callback="enableSubmitBtn">
                                </div>
                            </div>


                            <div class="center mt-2">
                                <input name="form_botcheck" class="form-control" type="hidden" value="" />
                                <button type="submit" id="mysubmitBtn" disabled="disabled"
                                    style="background: #f47521;width: 50%;color: #fff;" class="btn btn-primary">Register
                                    Now</button>
                            </div>
                        </form>

                        <script type="text/javascript">
                            $("#PaidWorkshop").validate({
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

    <?php //include "footer.php" ?>

    <!-- footer end  -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/bootstrap-select.min.js"></script>
    <script src="assets/js/slick.min.js"></script>
    <script src="assets/js/common.js"></script>
    <script src="assets/js/course-slider.js"></script>

</body>

</html>