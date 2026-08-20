<?php
$pagename = "Payment Response";
include('Crypto_new.php');
// include('admin/include/config.php');
include("admin/include/configpdo.php");
require_once('PHPMailer/class.phpmailer.php');
include("PHPMailer/class.smtp.php"); // optional, gets called from within class.phpmailer.php if not already loaded
error_reporting(0);

//	$workingKey='FF2048EE9548EAE83BF4797292611691';		//testing
$workingKey = '277C1DEFA1388ACD68B11FE6A467A577';		//Working Key should be provided here.

$encResponse = $_POST["encResp"];			//This is the response sent by the CCAvenue Server
$rcvdString = decrypt($encResponse, $workingKey);		//Crypto Decryption used as per the specified working key.

$order_status = "";

$decryptValues = explode('&', $rcvdString);
$dataSize = sizeof($decryptValues);

$orderID = explode('=', $decryptValues[0]);
$orderID[1];

$transationID = explode('=', $decryptValues[1]);
$transationID[1];

$LeadID = explode('=', $decryptValues[28]);
$LeadID[1];

$consellername = explode('=', $decryptValues[29]); //$decryptValues[27] consellername id merchant_param5 but for test now merchant_param4
$consellername[1];

$amt = explode('=', $decryptValues[10]);
$amt[1];

$dotamt = explode('.', $amt[1]);
$dotamt[0];

date_default_timezone_set('Asia/Kolkata');
$DT = date('Y-m-d H:i:s');
$apidataTime = date("Y-m-d H:i:s");

for ($i = 0; $i < $dataSize; $i++) {
    $information = explode('=', $decryptValues[$i]);
    if ($i == 3)
        $order_status = $information[1];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <title>Online Payment | Payment Response | MITSDE</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="robots" content="noindex, nofollow">
    <link rel="canonical" href="https://mitsde.com/new-erp-ResponseHandler" />

    <link rel="icon" type="image/png" href="assets-new/images/favicon-mit.ico" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="css-new/styles.css" />
    <link rel="stylesheet" href="css-new/intlTelInput.css">

    <script type="application/ld+json">
    {
    "@context": "https://schema.org",
    "@type": "BreadcrumbList",
    "itemListElement": [
        { "@type": "ListItem", "position": 1, "name": "Home", "item": "https://mitsde.com/" },
        { "@type": "ListItem", "position": 2, "name": "Payment Response", "item": "https://mitsde.com/new-erp-ResponseHandler" }
    ]
    }
    </script>

    <?php include "5-common-seo-tag-1.php" ?>
</head>

<body>
<?php include "5-common-seo-tag-2.php" ?>
<?php include "header-new.php" ?>

<!-- ═══════════════════════════════════════════════
   HERO
════════════════════════════════════════════════ -->
<section class="hero ph-hero">

    <nav class="page-breadcrumb" aria-label="Breadcrumb">
        <span class="pb-line"></span>
        <a href="./">Home</a>
        <span class="pb-sep">/</span>
        <span class="pb-current">Payment Response</span>
    </nav>

    <div class="container">
        <div class="ph-layout py-5">
            <div class="ph-left">
                <h1 class="ph-heading">Payment <span class="text-orange">Response</span></h1>
            </div>
            <div class="ph-right">
                <img src="assets-new/images/application-process.webp" alt="Payment Response" />
            </div>
        </div>
    </div>

</section>

<!-- ═══════════════════════════════════════════════
   RESPONSE CONTENT
════════════════════════════════════════════════ -->
<section class="about-section">
    <div class="container">

        <?php if ($order_status === "Success") :

            $stmt = $conn->prepare("SELECT * FROM temp_erp WHERE tranID = ?");
            $stmt->execute(array($orderID[1]));
            $temp1 = $stmt->fetch(PDO::FETCH_ASSOC);

            if (!$temp1) {
                die("Invalid Transaction");
            }

            $fullname = explode(' ', $temp1['student_name']);
            $firstname = isset($fullname[0]) ? $fullname[0] : '';
            $lastname = isset($fullname[1]) ? $fullname[1] : '';

            $gender = $temp1['gender'];
            $salutationid = ($gender == "M") ? 1 : 2;

            $courseinfo = explode('_', $temp1['course']);
            $course_id = $courseinfo[0];

            $specialization_id = !empty($temp1['SpecializationID']) ? $temp1['SpecializationID'] : null;

            /* ================= COURSE DETAILS ================= */
            if ($specialization_id === null || $specialization_id == '' || $specialization_id == 0) {
                $stmt = $conn->prepare("SELECT c.CourseName, c.duration, s.SpecializationName
                               FROM NewCourseERP c
                               JOIN NewERPSpecialization s ON c.CourseID = s.CourseID
                               WHERE c.CourseID = ? AND s.SpecializationID IS NULL");
                $stmt->execute(array($course_id));
            } else {
                $stmt = $conn->prepare("SELECT c.CourseName, c.duration, s.SpecializationName
                               FROM NewCourseERP c
                               JOIN NewERPSpecialization s ON c.CourseID = s.CourseID
                               WHERE c.CourseID = ? AND s.SpecializationID = ?");
                $stmt->execute(array($course_id, $specialization_id));
            }

            $scourse = $stmt->fetch(PDO::FETCH_ASSOC);

            $course_Name = $scourse['CourseName'];
            $Specialization_Name = $scourse['SpecializationName'];
            $D_Specializationinfo = explode('_', $temp1['dual_SpecializationID']);
            $D_Specialization_ID = isset($D_Specializationinfo[0]) ? $D_Specializationinfo[0] : '';
            $D_Specialization_Name = isset($D_Specializationinfo[1]) ? $D_Specializationinfo[1] : '';

            /* ================= COURSE OVERRIDE FOR EX PROGRAM ================= */
            if ($course_id == "52" && $specialization_id == "31") {
                $course_id = "46";
            }
            if ($course_id == "52" && $specialization_id == "33") {
                $course_id = "55";
            }
            if ($course_id == "52" && $specialization_id == "34") {
                $course_id = "55";
            }
            if ($course_id == "53" && $specialization_id == "17") {
                $course_id = "49";
            }
            $duration = $scourse['duration'];

            /* ================= FEES INFO ================= */
            $x = explode('_', $temp1['fees_type']);
            $feeheadid = $x[0];
            $description = $x[1];

            /* ----------uat lead insertion-----------*/
            $postFields = json_encode(array(
                "LeadID" => $temp1['T_LeadID'],
                "CategoryId" => 1,
                "SalutaionId" => $salutationid,
                "InstituteId" => 1,
                "FirstName" => $firstname,
                "LastName" => $lastname,
                "Gender" => $temp1['gender'],
                "MobileNumber" => $temp1['phone'],
                "EmailAddress" => $temp1['email_id'],
                "ParentProgramId" => $course_id,
                "SpecializationID" => $temp1['SpecializationID'],
                "CallStatusId" => 1,
                "CounsellorName" => $temp1['new_counselorName'],
                "CounsellorEmailId" => $consellername[1],
                "LeadType" => "EE",
                "LoginPassword" => $temp1['password'],
                "PaymentType" => $feeheadid
            ));

            $curl = curl_init();

            curl_setopt_array($curl, array(
                CURLOPT_URL => 'https://mitpro.mitsde.com/Webapi/api/CRM/UpdateLeadDetails',
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'POST',
                CURLOPT_POSTFIELDS => $postFields,
                CURLOPT_HTTPHEADER => array(
                    'Authorization: Bearer ' . $accessToken,
                    'Content-Type: application/json'
                ),
                // CURLOPT_CAINFO => '/home/mitsde/ssl/cacert.pem',
            ));

            $resp = curl_exec($curl);
            $response1 = json_decode($resp, true);

            $leadMessage = isset($response1['ResultMessage']) ? $response1['ResultMessage'] : '';
            curl_close($curl);

            $stmt = $conn->prepare("SELECT COUNT(*) FROM New_erp_student_admission_transaction WHERE PayU_ID = ?");
            $stmt->execute(array($transationID[1]));
            $trchk = $stmt->fetchColumn();

            $stmt = $conn->prepare("SELECT COUNT(*) FROM New_erp_student_admission_transaction WHERE t_process_id = ?");
            $stmt->execute(array($orderID[1]));
            $orchk = $stmt->fetchColumn();

            if ($orchk > 0 || $trchk > 0) {
                die("ERROR: Duplicate Entry");
            }

            if ($temp1['tranID'] != $orderID[1] || $temp1['T_B_Amount'] != $dotamt[0]) {
                die("ERROR: Invalid Response");

            } else {
                $leadid = $temp1['T_LeadID'];
                $PaidAmount = $temp1['T_B_Amount'];
                $curdate = date('Y-m-d');

                $postfeeData = json_encode(array(
                    "CRMLeadId" => $leadid,
                    "FeeType" => "PRF",
                    "TransactionNo" => $transationID[1],
                    "ReceiptAmount" => $PaidAmount,
                    "ReceiptDate" => $curdate,
                    "FeeHeadId" => "",
                    "UserId" => 1,
                    "CurrencyID" => 1
                ));

                $curl = curl_init();

                curl_setopt_array($curl, [
                    CURLOPT_URL => 'https://mitpro.mitsde.com/Webapi/api/CRM/PaymenttAPI',
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_TIMEOUT => 0,
                    CURLOPT_CUSTOMREQUEST => 'POST',
                    CURLOPT_POSTFIELDS => $postfeeData,
                    CURLOPT_HTTPHEADER => [
                        'Authorization: Bearer ' . $accessToken,
                        'Content-Type: application/json'
                    ],
                    // CURLOPT_CAINFO => '/home/mitsde/ssl/cacert.pem',
                ]);

                $response = curl_exec($curl);
                $responseData = json_decode($response, true);
                curl_close($curl);

                if ($responseData) {

                    $apiResult = !empty($responseData['Result']);
                    $paymentMessage = !empty($responseData['ResultMessage']) ? $responseData['ResultMessage'] : "Receipt saved successfully.";

                    /* ================= INSERT TRANSACTION ================= */
                    try {
                        $stmt = $conn->prepare("INSERT INTO New_erp_student_admission_transaction
                    (leadID,name,email,phone,gender,CourseName,SpecializationID,dual_SpecializationID,password,
                    FeeHeadID,FeesType,ReceiptType,amount,PayU_ID,payment_source,PayerBankID,transationDate,
                    t_process_id,payment_confirmation_status,PayeeInstituteID,PayeeBankID,PayeeACNo,PayeeACName,PayeeBranch,PayeeBankAddress,PayeeIFSCCode,S_Flag,response,response2,F_Flag,API_DT,old_counselorName,new_counselorName,
                    flag,counseller_email,DT,json_rs_lead,json_rs_payment)
                    VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");

                        $stmt->execute(array(
                            $leadid,
                            $temp1['student_name'],
                            $temp1['email_id'],
                            $temp1['phone'],
                            $temp1['gender'],
                            $temp1['course'],
                            $temp1['SpecializationID'],
                            $temp1['dual_SpecializationID'],
                            $temp1['password'],
                            $feeheadid,
                            $description,
                            "PRF",
                            $dotamt[0],
                            $transationID[1],
                            "HDFC",
                            1,
                            $curdate,
                            $orderID[1],
                            "Not Verify",
                            "16",
                            "1",
                            "50100267576292",
                            "Pune",
                            "Mayur Colony Kothrud Pune name",
                            "Mayur Colony Kothrud Pune address",
                            "HDFC0000149",
                            $apiResult ? 1 : 0,
                            $paymentMessage,
                            $leadMessage,
                            $apiResult ? 1 : 0,
                            $apidataTime,
                            $temp1['old_counselorName'],
                            $temp1['new_counselorName'],
                            $apiResult ? 1 : 0,
                            $consellername[1],
                            $DT,
                            $postFields,
                            $postfeeData
                        ));
                        $stmt = null;

                    } catch (PDOException $e) {
                        die("Insert Failed: " . $e->getMessage());
                    }
                } else {
                    echo "Error: Invalid API response.";
                }

                $StudentName = explode('=', $decryptValues[19]);
                $StudentEmailID = explode('=', $decryptValues[18]);
                $StudentMob = explode('=', $decryptValues[25]);
                $StudentFeesType = explode('=', $decryptValues[27]);
                $Fees = explode('=', $decryptValues[35]);
                $Payment_status = explode('=', $decryptValues[3]);
            ?>

            <h3 class="fw-bold text-success mb-4">Thank You for Payment.</h3>
            <p class="fw-bold mb-3">New Admission Fee Payment Details</p>
            <div class="tbl-wrap">
                <table class="tbl">
                    <tbody>
                        <tr><td class="tbl-label">Student Name</td><td><?php echo htmlspecialchars($StudentName[1]); ?></td></tr>
                        <tr><td class="tbl-label">Email ID</td><td><?php echo htmlspecialchars($StudentEmailID[1]); ?></td></tr>
                        <tr><td class="tbl-label">Mobile No</td><td><?php echo htmlspecialchars($StudentMob[1]); ?></td></tr>
                        <tr><td class="tbl-label">Fees Type</td><td>New Admission</td></tr>
                        <tr><td class="tbl-label">Pay Fee</td><td><?php echo htmlspecialchars($Fees[1]); ?></td></tr>
                        <tr><td class="tbl-label">Payment ID</td><td><?php echo htmlspecialchars($transationID[1]); ?></td></tr>
                        <tr><td class="tbl-label">Payment Status</td><td style="color:#4AD300;"><?php echo htmlspecialchars($Payment_status[1]); ?></td></tr>
                    </tbody>
                </table>
            </div>

            <?php
                //------------------------------Success Mail----------------------------------------
                $mail = new PHPMailer();
                ob_start(); //Turn on output buffering
                ?>
                <p>Hello <?php echo $StudentName[1]; ?>,<br>
                    Congratulations!</p>
                <p>We would like to take this moment to thank you for successfully submitting your application
                    with MIT-School of Distance Education.
                    We wish to confirm the receipt of the payment towards the admission process.</p>
                <p>Your Transaction ID for this payment is <?php echo $transationID[1]; ?>
                <p>If you have any questions, please contact your counselor at <?php echo $consellername[1]; ?>
                </p>
                <p><b>Please Find below details confirmed by you before making the payment:-</b></p>
                <table border="1">
                    <tr>
                        <td>
                            <p>
                                1) Course & Specialization -
                                <b>
                                    <?php
                                    if ($course_Name == "Dual Program") {
                                        echo $course_Name . " - PGDM Executive Specializations: " . $Specialization_Name . ", EMBA Specializations: " . $D_Specialization_Name . " ";
                                    } elseif ($course_id == "38" || $course_id == "47") {
                                        echo $course_Name;
                                    } else {
                                        echo $course_Name . " in " . $Specialization_Name . " ";
                                    }
                                    ?>
                                    (<?php echo $duration; ?>)
                                </b>
                            </p>
                            <p>2) Amount Paid –INR <b><?php echo $Fees[1]; ?> /-</b></p>
                            <p>3) Payment Option -
                                <b><?php echo $description;
                                if ($description == "Installment")
                                    echo "\x20(Next Installment needs to be paid within 3 months duration from first payment.)"; ?></b>
                            </p>
                            <p>4) Exam fees – INR 750 per paper (if applicable for the course, payable at the
                                time of examination)</p>
                            <p>5) Project fees- INR 2000 (If applicable for the course, payable at the time of
                                submitting the project)</p>

                            <p>Referral Policy*</p>
                            <p>When you refer your friend to take any program at MITSDE, then you are eligible
                                for a referral benefit of INR 4,000 and your friend is eligible for INR 2,000/-
                            </p>
                        </td>
                    </tr>
                </table>
                <p>Thank you and see you soon.<br>
                    Regards,<br>
                    <b>Team MIT-School of Distance Education</b>
                </p>
                <?php
                $body = ob_get_clean();
                //$mail->Mailer = "mail";
                $mail->IsSMTP(); // telling the class to use SMTP
                $mail->SMTPDebug = 0;
                $mail->SMTPAuth = true;
                $mail->SMTPSecure = "tls";
                $mail->Host = "email-smtp.us-east-1.amazonaws.com";
                $mail->Port = 2587;
                $mail->Username = "AKIA5OQ6466FQH7J437A";
                $mail->Password = "BNuSqYkuMXY6D9OqA7Gp4ABHK3LSIPUBoII+233SV+kC";

                $mail->SetFrom('admissions@mitsde.com', 'MIT-School of Distance Education');
                $mail->AddReplyTo('admissions@mitsde.com', 'No-Reply');
                $mail->Subject = "Your application with MIT SDE";
                $mail->AltBody = "To view the message, please use an HTML compatible email viewer!";
                $mail->MsgHTML($body);
                $mail->SetLanguage("en", 'includes/phpMailer/language/');
                $address = $StudentEmailID[1];
                $mail->AddAddress($address);

                $mail->AddBCC('sanjay.gaikwad@mitsde.com');
                $mail->AddBCC('raj.marathe@mitsde.com');
                $mail->AddBCC('abhishek.kalyana@mitsde.com');
                $mail->AddBCC('jayjeet.deshmukh@mitsde.com');
                $mail->AddBCC('priyanka.kaul@mitsde.com');
                $mail->AddBCC('nivedita.dawate@mitsde.com');
                $mail->AddBCC('priti.thakre@mitsde.com');
                $mail->AddBCC('umesh.ghatale@mitsde.com');
                $mail->AddBCC('vrushali.bansode@mitsde.com');
                //$mail->AddBCC('accounts.mitsde@mitpune.edu.in');
                $mail->AddBCC('shivraj.pachawadkar@mitsde.com');
                $mail->AddBCC('tejas.meshram@mitsde.com');
                $mail->AddBCC($consellername[1]);

                $mail->Send();
                //------------------------------Success Mail END----------------------------------------
                $stmt = $conn->prepare("INSERT INTO email_tracker (emailid, pagename, email_status, data_time) VALUES (?, ?, ?, ?)");
                $email_page = 'new-admission-form-payment';
                $email_stat = 'success';
                $stmt->execute([
                    $StudentEmailID[1],
                    $email_page,
                    $email_stat,
                    $DT
                ]);
                // --------------------------------------- DELETE FROM TEMP TABLE ----------------------
                $stmt = $conn->prepare("DELETE FROM temp_erp WHERE T_LeadID = ? AND tranID = ?");
                $stmt->execute([
                    $LeadID[1],
                    $orderID[1]
                ]);
            } // end else (valid response)

        elseif ($order_status === "Aborted") :

            $StudentName = explode('=', $decryptValues[19]);
            $StudentEmailID = explode('=', $decryptValues[18]);
            $StudentMob = explode('=', $decryptValues[25]);
            $StudentFeesType = explode('=', $decryptValues[27]);
            $Fees = explode('=', $decryptValues[35]);
            $Payment_status = explode('=', $decryptValues[3]);
        ?>

            <h3 class="fw-bold mb-4">Thank You for Payment.</h3>
            <p class="fw-bold mb-3">Fee Payment Details</p>
            <div class="tbl-wrap">
                <table class="tbl">
                    <tbody>
                        <tr><td class="tbl-label">Student Name</td><td><?php echo htmlspecialchars($StudentName[1]); ?></td></tr>
                        <tr><td class="tbl-label">Email ID</td><td><?php echo htmlspecialchars($StudentEmailID[1]); ?></td></tr>
                        <tr><td class="tbl-label">Mobile No</td><td><?php echo htmlspecialchars($StudentMob[1]); ?></td></tr>
                        <tr><td class="tbl-label">Fees Type</td><td>New Admission</td></tr>
                        <tr><td class="tbl-label">Pay Fee</td><td><?php echo htmlspecialchars($Fees[1]); ?></td></tr>
                        <tr><td class="tbl-label">Payment Status</td><td style="color:red;"><?php echo htmlspecialchars($Payment_status[1]); ?></td></tr>
                    </tbody>
                </table>
            </div>

            <?php
            //------------------------------Aborted Mail----------------------------------------
            $mail = new PHPMailer();
            ob_start(); //Turn on output buffering
            ?>
                <p>Hello <?php echo $StudentName[1]; ?>,</p><br>

                <p>You Have Canceled This Transaction,please verify your course fee
                    information and resend payment <?php echo $Fees[1]; ?>.</p>

                <p>Your Transaction ID <?php echo $transationID[1]; ?> for this fee is <?php echo $Fees[1]; ?>
                </p>

                <p>Payment Getway : HDFC </p> </br>
                <p>Payment Type : New Admission </p> </br>

                <p>Thank you and see you soon.<br>
                    Regards,<br>
                    <b>Team MIT-School of Distance Education</b>
                </p>
                <?php
                $body = ob_get_clean();
                //$mail->Mailer = "mail";
                $mail->IsSMTP();
                $mail->SMTPDebug = 0;
                $mail->SMTPAuth = true;
                $mail->SMTPSecure = "tls";
                $mail->Host = "email-smtp.us-east-1.amazonaws.com";
                $mail->Port = 2587;
                $mail->Username = "AKIA5OQ6466FQH7J437A";
                $mail->Password = "BNuSqYkuMXY6D9OqA7Gp4ABHK3LSIPUBoII+233SV+kC";

                $mail->SetFrom('admissions@mitsde.com', 'MIT-School of Distance Education');
                $mail->AddReplyTo('admissions@mitsde.com', 'No-Reply');
                $mail->Subject = "Canceled This Transaction";
                $mail->AltBody = "To view the message, please use an HTML compatible email viewer!";
                $mail->MsgHTML($body);
                $mail->SetLanguage("en", 'includes/phpMailer/language/');
                $address = $StudentEmailID[1];
                $mail->AddAddress($address);

                $mail->AddBCC('sanjay.gaikwad@mitsde.com');
                $mail->AddBCC('raj.marathe@mitsde.com');
                $mail->AddBCC('jayjeet.deshmukh@mitsde.com');
                //$mail->AddBCC('teamfeecollections@mitsde.com');

                $mail->Send();

                $stmt = $conn->prepare("INSERT INTO email_tracker (emailid, pagename, email_status, data_time) VALUES (?, ?, ?, ?)");
                $email_page = 'new-admission-form-payment';
                $email_stat = 'abort';
                $stmt->execute([
                    $StudentEmailID[1],
                    $email_page,
                    $email_stat,
                    $DT
                ]);

                // --------------------------------------- DELETE FROM TEMP TABLE ----------------------
                $stmt = $conn->prepare("DELETE FROM temp_erp WHERE T_LeadID = ? AND tranID = ?");
                $stmt->execute([
                    $LeadID[1],
                    $orderID[1]
                ]);

        elseif ($order_status === "Failure") :

            $StudentName = explode('=', $decryptValues[19]);
            $StudentEmailID = explode('=', $decryptValues[18]);
            $StudentMob = explode('=', $decryptValues[25]);
            $StudentFeesType = explode('=', $decryptValues[27]);
            $Fees = explode('=', $decryptValues[35]);
            $Payment_status = explode('=', $decryptValues[3]);
        ?>

            <h3 class="fw-bold mb-4">Thank You for Payment.</h3>
            <h5 class="text-danger mb-4">The transaction has been declined. Please try again</h5>
            <p class="fw-bold mb-3">Fee Payment Details</p>
            <div class="tbl-wrap">
                <table class="tbl">
                    <tbody>
                        <tr><td class="tbl-label">Student Name</td><td><?php echo htmlspecialchars($StudentName[1]); ?></td></tr>
                        <tr><td class="tbl-label">Email ID</td><td><?php echo htmlspecialchars($StudentEmailID[1]); ?></td></tr>
                        <tr><td class="tbl-label">Mobile No</td><td><?php echo htmlspecialchars($StudentMob[1]); ?></td></tr>
                        <tr><td class="tbl-label">Fees Type</td><td><?php echo htmlspecialchars($StudentFeesType[1]); ?></td></tr>
                        <tr><td class="tbl-label">Pay Fee</td><td><?php echo htmlspecialchars($Fees[1]); ?></td></tr>
                        <tr><td class="tbl-label">Payment Status</td><td style="color:red;"><?php echo htmlspecialchars($Payment_status[1]); ?></td></tr>
                    </tbody>
                </table>
            </div>

            <?php
            //------------------------------Failure Mail----------------------------------------
            $mail = new PHPMailer();
            ob_start(); //Turn on output buffering
            ?>
                    <p>Hello <?php echo $StudentName[1]; ?>,</p><br>

                    <p>Unfortunately your most recent invoice payment id was declined. This could be due to a change
                        in your card number or your card expiring, cancelation of your credit card / debit card, or
                        the bank not recognizing the payment and taking action to prevent it,
                        please verify your billing information and resend payment <?php echo $Fees[1]; ?>.</p>

                    <p>Your Transaction ID <?php echo $transationID[1]; ?> for this fee is <?php echo $Fees[1]; ?>
                    </p>
                    <!-- <p>Course Name : <?php echo $Studentcours[1]; ?> </p> -->
                    <p>Payment Getway : HDFC </p> <br />
                    <p>Payment Type : New Admission </p> </br>

                    <p>Thank you and see you soon.<br>
                        Regards,<br>
                        <b>Team MIT-School of Distance Education</b>
                    </p>
                <?php
                $body = ob_get_clean();
                $mail->IsSMTP();
                $mail->SMTPDebug = 0;
                $mail->SMTPAuth = true;
                $mail->SMTPSecure = "tls";
                $mail->Host = "email-smtp.us-east-1.amazonaws.com";
                $mail->Port = 2587;
                $mail->Username = "AKIA5OQ6466FQH7J437A";
                $mail->Password = "BNuSqYkuMXY6D9OqA7Gp4ABHK3LSIPUBoII+233SV+kC";

                $mail->SetFrom('admissions@mitsde.com', 'MIT-School of Distance Education');
                $mail->AddReplyTo('admissions@mitsde.com', 'No-Reply');
                $mail->Subject = "Current Transaction is Failed";
                $mail->AltBody = "To view the message, please use an HTML compatible email viewer!";
                $mail->MsgHTML($body);
                $mail->SetLanguage("en", 'includes/phpMailer/language/');
                $address = $StudentEmailID[1];
                $mail->AddAddress($address);

                $mail->AddBCC('sanjay.gaikwad@mitsde.com');
                $mail->AddBCC('raj.marathe@mitsde.com');
                $mail->AddBCC('jayjeet.deshmukh@mitsde.com');
                //$mail->AddBCC('teamfeecollections@mitsde.com');

                $mail->Send();
                //------------------------------Failure Mail END----------------------------------------
                $stmt = $conn->prepare("INSERT INTO email_tracker (emailid, pagename, email_status, data_time) VALUES (?, ?, ?, ?)");
                $email_page = 'new-admission-form-payment';
                $email_stat = 'failure';
                $stmt->execute([
                    $StudentEmailID[1],
                    $email_page,
                    $email_stat,
                    $DT
                ]);

                // --------------------------------------- DELETE FROM TEMP TABLE ----------------------
                $stmt = $conn->prepare("DELETE FROM temp_erp WHERE T_LeadID = ? AND tranID = ?");
                $stmt->execute([
                    $LeadID[1],
                    $orderID[1]
                ]);

        else : ?>

            <p class="text-danger fw-bold">Security Error. Illegal access detected</p>

        <?php endif; ?>

    </div>
</section>

<!-- ═══════════════════════════════════════════════
   SITE FOOTER
════════════════════════════════════════════════ -->
<?php include "footer-new.php" ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
