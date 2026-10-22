<?php
$pagename = "KPMG Payment";
session_start();
// include("admin/include/config.php");
include("admin/include/configpdo.php");

$FirstName = "";
$MiddleName = "";
$LastName = "";
$EmailID = "";
$MobileNumber = "";
$programID = "";
$SpecializationID = "";
$programName = "";
$SpecializationName = "";
$leadid = "";
$StudentID = "";

$searchmsg = "Enter only your Admission ID. Your information will be retrieved from the database.";
if (isset($_GET['studentid'])) {

    $StudentID = trim($_GET['studentid']); // test reg id MIT2023E04739 test for live MIT2023E00097
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
        $MiddleName = $leadDetails['MiddleName'];
        $LastName = $leadDetails['LastName'];
        $EmailID = trim($leadDetails['EmailAddress']);
        $MobileNumber = $leadDetails['MobileNumber'];
        $programID = $leadDetails['ProgramID'];
        $SpecializationID = $leadDetails['SpecializationID'];
        $programName = $leadDetails['ProgramName'];
        $SpecializationName = $leadDetails['SpecializationName'];

    } else {
        $searchmsg = "No learners details found. Kindly contact student support for assistance.";
    }

} //isset close

function generatetransactionid()
{
    return date('dmyhis');
}

$transactionId = generatetransactionid();

$stmt = $conn->prepare("SELECT 1 FROM OtherFeesTransaction WHERE t_process_id = ?");
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
    <title>Online Payment | KPMG Certification Course 3rd Attempt Fee Payment | Pay Online</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="robots" content="noindex, nofollow">
    <link rel="canonical" href="https://mitsde.com/KPMGPayment" />

    <meta property="og:title" content="Online Payment | KPMG Certification Course 3rd Attempt Fee Payment | Pay Online">
    <meta property="og:site_name" content="MIT School of Distance Education">
    <meta property="og:url" content="https://mitsde.com/KPMGPayment">
    <meta property="og:description" content="Earn a Post Graduate Distance Diploma (PGDM) in Project Management which is affordable, industry-relevant and taught by Industry experts in Live sessions.">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://mitsde.com/newmitsdewebsite2024/assets/images/new/logo-mit-school-of-distance-education.png">

    <link rel="icon" type="image/png" href="assets-new/images/favicon-mit.ico" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="css-new/styles.css" />
    <link rel="stylesheet" href="css-new/intlTelInput.css">

    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <script>
        function enableSubmitBtn() {
            document.getElementById("mysubmitBtn").disabled = false;  //enable the submit button
        }
    </script>

    <script language="javascript" type="text/javascript">
        function sendtoreject(value, id) {
            window.location.href = 'KPMGPayment.php?studentid=' + value;
        }
    </script>

    <script type="text/javascript">
        var ck_name = /^[A-Za-z0-9 ]{3,100}$/;

        function validatePayment(OtherFeesPayment) {

            var AdmissionID = OtherFeesPayment.AdmissionID.value;
            var LeadID = OtherFeesPayment.merchant_param3.value;

            var errors = [];

            if (!ck_name.test(AdmissionID) || LeadID == "") {
                errors[errors.length] = "Please Enter Admission ID .";
            }

            if (errors.length > 0) {
                reportPaymentErrors(errors);
                return false;
            }

            return true;
        }

        function reportPaymentErrors(errors) {
            var msg = "Please Enter Valid Data...\n";
            for (var i = 0; i < errors.length; i++) {
                var numError = i + 1;
                msg += "\n" + numError + ". " + errors[i];
            }
            alert(msg);
        }
    </script>

    <script type="application/ld+json">
    {
    "@context": "https://schema.org",
    "@type": "BreadcrumbList",
    "itemListElement": [
        { "@type": "ListItem", "position": 1, "name": "Home", "item": "https://mitsde.com/" },
        { "@type": "ListItem", "position": 2, "name": "KPMG Payment", "item": "https://mitsde.com/KPMGPayment" }
    ]
    }
    </script>

    <?php include "5-common-seo-tag-1.php" ?>
</head>

<body>
<?php include "5-common-seo-tag-2.php" ?>
<?php include "header-new.php" ?>

<script>
    window.onload = function () {
        var d = new Date().getTime();
        document.getElementById("tid").value = d;
    };
</script>

<!-- ═══════════════════════════════════════════════
   HERO
════════════════════════════════════════════════ -->
<section class="hero ph-hero">

    <nav class="page-breadcrumb" aria-label="Breadcrumb">
        <span class="pb-line"></span>
        <a href="./">Home</a>
        <span class="pb-sep">/</span>
        <span class="pb-current">KPMG Payment</span>
    </nav>

    <div class="container">
        <div class="ph-layout py-5">
            <div class="ph-left">
                <h1 class="ph-heading">KPMG Certification Course <span class="text-orange">3rd Attempt Fee Payment</span></h1>
            </div>
            <div class="ph-right">
                <img src="assets-new/images/application-process.webp" alt="KPMG Certification Course 3rd Attempt Fee Payment" />
            </div>
        </div>
    </div>

</section>

<!-- ═══════════════════════════════════════════════
   PAYMENT FORM
════════════════════════════════════════════════ -->
<section class="rf-section">
    <div class="container">
        <div class="rf-card">
            <h2 class="rf-heading">Fee Payment</h2>
            <p class="text-orange"><b><?php echo htmlspecialchars($searchmsg, ENT_QUOTES, 'UTF-8'); ?></b></p>

            <form action="ccavRequestHandlerKpmg.php" name="OtherFeesPayment" id="OtherFeesPayment"
                onsubmit="return validatePayment(this);" method="post">

                <input type="hidden" name="tid" id="tid" />
                <input type="hidden" name="merchant_id" id="merchant_id" value="2874274" />
                <input type="hidden" name="order_id" value="<?php echo htmlspecialchars($transactionId, ENT_QUOTES, 'UTF-8'); ?>" />
                <input type="hidden" name="currency" value="INR" />
                <input type="hidden" name="redirect_url" id="redirect_url"
                    value="https://mitsde.com/ccavResponseHandlerKpmg.php" />
                <input type="hidden" name="cancel_url" id="cancel_url"
                    value="https://mitsde.com/ccavResponseHandlerKpmg.php" />
                <input type="hidden" name="language" value="EN" />
                <input type="hidden" name="delivery_address" value="Pune" />
                <input type="hidden" name="delivery_city" value="" />
                <input type="hidden" name="delivery_state" value="" />
                <input type="hidden" name="delivery_zip" value="" />
                <input type="hidden" name="delivery_country" value="" />

                <div class="row justify-content-between text-start">

                    <div class="form-group col-sm-6 d-flex flex-column mt-2">
                        <input type="text" class="form-control" name="AdmissionID" id="AdmissionID"
                            onchange="sendtoreject(this.value, this.id);"
                            value="<?php echo htmlspecialchars($StudentID, ENT_QUOTES, 'UTF-8'); ?>"
                            placeholder="Admission ID" style="text-transform:uppercase">
                        <input type="hidden" class="form-control" name="merchant_param3" id="merchant_param3"
                            value="<?php echo htmlspecialchars($leadid, ENT_QUOTES, 'UTF-8'); ?>"
                            placeholder="Admission ID" style="text-transform:uppercase">
                    </div>

                    <div class="form-group col-sm-6 d-flex flex-column mt-2">
                        <input type="text" class="form-control" name="delivery_name" readonly id="StudentName"
                            value="<?php echo htmlspecialchars(trim($FirstName . ' ' . $LastName), ENT_QUOTES, 'UTF-8'); ?>"
                            placeholder="Student Name">
                    </div>

                    <div class="form-group col-sm-6 d-flex flex-column mt-2">
                        <input type="text" class="form-control" name="billing_email" readonly id="EmailID"
                            value="<?php echo htmlspecialchars($EmailID, ENT_QUOTES, 'UTF-8'); ?>"
                            placeholder="Email ID">
                    </div>

                    <div class="form-group col-sm-6 d-flex flex-column mt-2">
                        <input type="text" class="form-control" name="delivery_tel" readonly id="MobileNo"
                            value="<?php echo htmlspecialchars($MobileNumber, ENT_QUOTES, 'UTF-8'); ?>"
                            placeholder="Mobile No">
                    </div>

                    <div class="form-group col-sm-6 d-flex flex-column mt-2">
                        <input type="text" class="form-control" name="merchant_param1" readonly id="merchant_param1"
                            value="<?php echo htmlspecialchars($SpecializationName, ENT_QUOTES, 'UTF-8'); ?>"
                            placeholder="Course Name">
                    </div>

                    <input type="hidden" name="SpecializationID" id="SpecializationID"
                        value="<?php echo htmlspecialchars($SpecializationID, ENT_QUOTES, 'UTF-8'); ?>" />

                    <div class="form-group col-sm-6 d-flex flex-column mt-2">
                        <input type="text" readonly class="form-control" name="amount" value="1000"
                            id="exampleInputPassword1" placeholder="Amount">
                        <input type="hidden" id="merchant_param2" name="merchant_param2" value="140">
                        <input type="hidden" id="merchant_param4" name="merchant_param4" value="">
                    </div>

                    <div id="emi_div" style="display: none">
                        <table border="1" width="100%">
                            <tr>
                                <td colspan="2">EMI Section</td>
                            </tr>
                            <tr>
                                <td>Emi plan id:</td>
                                <td><input readonly type="text" id="emi_plan_id" name="emi_plan_id" value="" /></td>
                            </tr>
                            <tr>
                                <td>Emi tenure id:</td>
                                <td><input readonly type="text" id="emi_tenure_id" name="emi_tenure_id" value="" /></td>
                            </tr>
                            <tr>
                                <td>Pay Through</td>
                                <td>
                                    <select name="emi_banks" id="emi_banks"></select>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <div id="emi_duration" class="span12">
                                        <span class="span12 content-text emiDetails">EMI Duration</span>
                                        <table id="emi_tbl" cellpadding="0" cellspacing="0" border="1"></table>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td id="processing_fee" colspan="2"></td>
                            </tr>
                        </table>
                    </div>

                    <div class="d-flex justify-content-center mt-3">
                        <div class="g-recaptcha" data-sitekey="6Lf1dR4gAAAAAJXXpTYVhawIuElj2l7XXvd2FRsJ"
                            required="" data-callback="enableSubmitBtn">
                        </div>
                    </div>

                    <div class="d-flex justify-content-center mt-3">
                        <button type="submit" id="mysubmitBtn" disabled="disabled"
                            class="btn btn-primary" style="background:var(--primary-orange);min-width:200px;color:#fff;border:none;">Pay Now</button>
                    </div>

                </div>
            </form>

        </div>
    </div>
</section>

<!-- ═══════════════════════════════════════════════
   SITE FOOTER
════════════════════════════════════════════════ -->
<?php include "footer-new.php" ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
