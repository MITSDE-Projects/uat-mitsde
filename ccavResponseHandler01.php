<?php
$pagename = "Payment Response";
include('Crypto_new.php');
// include('admin/include/config.php');
include("admin/include/configpdo.php");
require_once('PHPMailer/class.phpmailer.php');
include("PHPMailer/class.smtp.php");
error_reporting(E_ALL);
ini_set('display_errors', 0);

$workingKey = '277C1DEFA1388ACD68B11FE6A467A577';		//Working Key should be provided here.

$encResponse = $_POST["encResp"];			//This is the response sent by the CCAvenue Server
$rcvdString = decrypt($encResponse, $workingKey);		//Crypto Decryption used as per the specified working key.

$order_status = "";

$decryptValues = explode('&', $rcvdString);
$dataSize = sizeof($decryptValues);

$oderID = explode('=', $decryptValues[0]);
$oderID[1];

$transationID = explode('=', $decryptValues[1]);
$transationID[1];

$LeadID = explode('=', $decryptValues[28]);
$LeadID[1];

$Specialization = explode('=', $decryptValues[29]); // specilizaiton id merchant_param4
$Specialization[1];

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
    <title>Online Payment | Other Fees Payment By HDFC | Pay Online</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="robots" content="noindex, nofollow">
    <link rel="canonical" href="https://mitsde.com/ccavResponseHandler01" />

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
        { "@type": "ListItem", "position": 2, "name": "Payment Response", "item": "https://mitsde.com/ccavResponseHandler01" }
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

            $stmt = $conn->prepare("SELECT * FROM temp WHERE T_LeadID = ? AND tranID = ?");
            $stmt->execute([$LeadID[1], $oderID[1]]);
            $temp1 = $stmt->fetch(PDO::FETCH_ASSOC);

            if (!$temp1) :
        ?>
            <p class="text-danger fw-bold">ERROR: Invalid transaction data</p>
        <?php else :

                // Check for duplicate PayU_ID
                $stmt = $conn->prepare("SELECT COUNT(*) FROM old_student_transaction WHERE PayU_ID = ?");
                $stmt->execute([$transationID[1]]);
                $trchk = $stmt->fetchColumn();

                // Check for duplicate order ID
                $stmt = $conn->prepare("SELECT COUNT(*) FROM old_student_transaction WHERE t_process_id = ?");
                $stmt->execute([$oderID[1]]);
                $orchk = $stmt->fetchColumn();

                if ($orchk > 0 || $trchk > 0) {
                    die("ERROR: Duplicate Entry");
                } elseif ($temp1['tranID'] != $oderID[1] || $temp1['T_B_Amount'] != $dotamt[0]) {
                    die("ERROR: Invalid Response (orderID or Amount not matching)");
                } else {

                    // Get fee type using prepared statement
                    $stmt = $conn->prepare("SELECT feedheadcode FROM feehead_erp WHERE description = ?");
                    $stmt->execute([$temp1['fees_type']]);
                    $fee = $stmt->fetch(PDO::FETCH_ASSOC);
                    $feeheadid = $fee['feedheadcode'];

                    $ReceiptType = ($feeheadid == '60' || $feeheadid == '61') ? 'CF' : 'OC';

                    try {
                        $stmt = $conn->prepare("INSERT INTO old_student_transaction (
                            leadID, name, email, phone, CourseName, SpecializationID,
                            FeeHeadID, FeesType, ReceiptType, amount, PayU_ID,
                            payment_source, PayerBankID, transationDate, t_process_id,
                            payment_confirmation_status, PayeeInstituteID, PayeeBankID,
                            PayeeACNo, PayeeACName, PayeeBranch, PayeeBankAddress,
                            PayeeIFSCCode, S_Flag, F_Flag, API_DT, course_id
                        ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

                        $stmt->execute([
                            $LeadID[1],
                            $temp1['student_name'],
                            $temp1['email_id'],
                            $temp1['phone'],
                            $temp1['course'],
                            $Specialization[1],
                            $feeheadid,
                            $temp1['fees_type'],
                            $ReceiptType,
                            $dotamt[0],
                            $transationID[1],
                            'HDFC',
                            1,
                            date('Y-m-d'),
                            $oderID[1],
                            'Not Verify',
                            "16",
                            "1",
                            "50100267576292",
                            "Pune",
                            "Mayur Colony Kothrud Pune name",
                            "Mayur Colony Kothrud Pune address",
                            "HDFC0000149",
                            "0",
                            "1",
                            $apidataTime,
                            0
                        ]);

                        $stmt = null; // close PDO statement

                    } catch (PDOException $e) {
                        die("Insert Failed: " . $e->getMessage());
                    }

                    $StudentName = explode('=', $decryptValues[19]);
                    $StudentEmailID = explode('=', $decryptValues[18]);
                    $StudentMob = explode('=', $decryptValues[25]);
                    $Studentcours = explode('=', $decryptValues[26]);
                    $StudentFeesType = explode('=', $decryptValues[27]);
                    $Fees = explode('=', $decryptValues[35]);
                    $Payment_status = explode('=', $decryptValues[3]);
        ?>

            <h3 class="fw-bold text-success mb-4">Thank You for Payment.</h3>
            <p class="fw-bold mb-3">Fee Payment Details</p>
            <div class="tbl-wrap">
                <table class="tbl">
                    <tbody>
                        <tr><td class="tbl-label">Student Name</td><td><?php echo htmlspecialchars($StudentName[1]); ?></td></tr>
                        <tr><td class="tbl-label">Email ID</td><td><?php echo htmlspecialchars($StudentEmailID[1]); ?></td></tr>
                        <tr><td class="tbl-label">Mobile No</td><td><?php echo htmlspecialchars($StudentMob[1]); ?></td></tr>
                        <tr><td class="tbl-label">Course</td><td><?php echo htmlspecialchars($Studentcours[1]); ?></td></tr>
                        <tr><td class="tbl-label">Fees Type</td><td><?php echo htmlspecialchars($temp1['fees_type']); ?></td></tr>
                        <tr><td class="tbl-label">Pay Fee</td><td><?php echo htmlspecialchars($Fees[1]); ?></td></tr>
                        <tr><td class="tbl-label">Payment ID</td><td><?php echo htmlspecialchars($transationID[1]); ?></td></tr>
                        <tr><td class="tbl-label">Payment Status</td><td style="color:#4AD300;"><?php echo htmlspecialchars($Payment_status[1]); ?></td></tr>
                    </tbody>
                </table>
            </div>

            <?php
                    //------------------------------Success Mail----------------------------------------
                    $mail = new PHPMailer();
                    ob_start();
                    ?>
                    <p>Hello <?php echo htmlspecialchars($StudentName[1]); ?></p>

                    <p>Thank you for making your payment. It will take two working days to credit your payment into our
                        system.</p> </br>

                    <p>Your Transaction ID for this payment is <?php echo htmlspecialchars($transationID[1]); ?>
                    <p>Your Fee Paid Amount is : <?php echo htmlspecialchars($Fees[1]); ?> </p>
                    <p>Course Name : <?php echo htmlspecialchars($Studentcours[1]); ?> </p>
                    <p>Fees Type : <?php echo htmlspecialchars($temp1['fees_type']); ?> </p>

                    <p>Used Payment Gateway : HDFC </p>

                    <p>If you have any questions, please contact us at campussupport@mitsde.com or <a
                            href="https://elibrary.mitsde.com/callmeback.php" traget="_blnack">Click here</a> to
                        call back</p>
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
                    $mail->Username = "AKIA5OQ6466FQH7J437A";  // GMAIL username
                    $mail->Password = "BNuSqYkuMXY6D9OqA7Gp4ABHK3LSIPUBoII+233SV+kC";

                    $mail->SetFrom('admissions@mitsde.com', 'MIT-School of Distance Education');
                    $mail->AddReplyTo('admissions@mitsde.com', 'No-Reply');
                    $mail->Subject = "Payment Made Successfully";
                    $mail->AltBody = "To view the message, please use an HTML compatible email viewer!";
                    $mail->MsgHTML($body);
                    $mail->SetLanguage("en", 'includes/phpMailer/language/');
                    $address = $StudentEmailID[1];
                    $mail->AddAddress($address);

                    $mail->AddBCC('sanjay.gaikwad@mitsde.com');
                    $mail->AddBCC('teamfeecollections@mitsde.com');
                    $mail->AddBCC('accounts.mitsde@mitpune.edu.in');
                    $mail->AddBCC('shivraj.pachawadkar@mitsde.com');

                    $mail->Send();
                    //------------------------------Success Mail END----------------------------------------

                    // Insert into email_tracker
                    $stmt = $conn->prepare("INSERT INTO email_tracker (emailid, pagename, email_status, data_time) VALUES (?, ?, ?, ?)");
                    $email_page = 'OtherFeesPayment03';
                    $email_stat = 'success';
                    $stmt->execute([
                        $StudentEmailID[1],
                        $email_page,
                        $email_stat,
                        $DT
                    ]);

                    // --------------------------------------- DELETE FROM TEMP TABLE ----------------------
                    $stmt = $conn->prepare("DELETE FROM temp WHERE T_LeadID = ? AND tranID = ?");
                    $stmt->execute([
                        $LeadID[1],
                        $oderID[1]
                    ]);
                }
            endif; // end else (!$temp1)

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
                        <tr><td class="tbl-label">Fees Type</td><td><?php echo htmlspecialchars($StudentFeesType[1]); ?></td></tr>
                        <tr><td class="tbl-label">Pay Fee</td><td><?php echo htmlspecialchars($Fees[1]); ?></td></tr>
                        <tr><td class="tbl-label">Payment Status</td><td style="color:red;"><?php echo htmlspecialchars($Payment_status[1]); ?></td></tr>
                    </tbody>
                </table>
            </div>

            <?php
            //------------------------------Aborted Mail----------------------------------------
            $mail = new PHPMailer();
            ob_start();
            ?>
                <p>Hello <?php echo htmlspecialchars($StudentName[1]); ?>,</p><br>

                <p>You Have Canceled This Transaction,please verify your course fee
                    information and resend payment <?php echo htmlspecialchars($Fees[1]); ?>.</p>

                <p>Your Transaction ID <?php echo htmlspecialchars($transationID[1]); ?> for this fee is <?php echo htmlspecialchars($Fees[1]); ?>
                </p>

                <p>Payment Getway : HDFC </p> </br>

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
            $mail->Username = "AKIA5OQ6466FQH7J437A";  // GMAIL username
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
            $mail->AddBCC('teamfeecollections@mitsde.com');

            $mail->Send();
            //------------------------------Aborted Mail END----------------------------------------

            // Email tracker insert
            $stmt = $conn->prepare("INSERT INTO email_tracker (emailid, pagename, email_status, data_time) VALUES (?, ?, ?, ?)");
            $email_page = 'OtherFeesPayment03';
            $email_stat = 'abort';
            $stmt->execute([
                $StudentEmailID[1],
                $email_page,
                $email_stat,
                $DT
            ]);

            // --------------------------------------- DELETE FROM TEMP TABLE ----------------------
            $stmt = $conn->prepare("DELETE FROM temp WHERE T_LeadID = ? AND tranID = ?");
            $stmt->execute([
                $LeadID[1],
                $oderID[1]
            ]);

        elseif ($order_status === "Failure") :

            $StudentName = explode('=', $decryptValues[19]);
            $StudentEmailID = explode('=', $decryptValues[18]);
            $StudentMob = explode('=', $decryptValues[25]);
            $Studentcours = explode('=', $decryptValues[26]);
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
                        <tr><td class="tbl-label">Course</td><td><?php echo htmlspecialchars($Studentcours[1]); ?></td></tr>
                        <tr><td class="tbl-label">Fees Type</td><td><?php echo htmlspecialchars($StudentFeesType[1]); ?></td></tr>
                        <tr><td class="tbl-label">Pay Fee</td><td><?php echo htmlspecialchars($Fees[1]); ?></td></tr>
                        <tr><td class="tbl-label">Payment Status</td><td style="color:red;"><?php echo htmlspecialchars($Payment_status[1]); ?></td></tr>
                    </tbody>
                </table>
            </div>

            <?php
            //------------------------------Failure Mail----------------------------------------
            $mail = new PHPMailer();
            ob_start();
            ?>
                <p>Hello <?php echo htmlspecialchars($StudentName[1]); ?>,</p><br>

                <p>Unfortunately your most recent invoice payment id was declined. This could be due to a change
                    in your card number or your card expiring, cancelation of your credit card / debit card, or
                    the bank not recognizing the payment and taking action to prevent it,
                    please verify your billing information and resend payment <?php echo htmlspecialchars($Fees[1]); ?>.</p>

                <p>Your Transaction ID <?php echo htmlspecialchars($transationID[1]); ?> for this fee is <?php echo htmlspecialchars($Fees[1]); ?>
                </p>
                <p>Course Name : <?php echo htmlspecialchars($Studentcours[1]); ?> </p>
                <p>Payment Getway : HDFC </p> <br />

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
            $mail->Username = "AKIA5OQ6466FQH7J437A";  // GMAIL username
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
            $mail->AddBCC('teamfeecollections@mitsde.com');

            $mail->Send();
            //------------------------------Failure Mail END----------------------------------------

            // Email tracker insert
            $stmt = $conn->prepare("INSERT INTO email_tracker (emailid, pagename, email_status, data_time) VALUES (?, ?, ?, ?)");
            $email_page = 'OtherFeesPayment03';
            $email_stat = 'failure';
            $stmt->execute([
                $StudentEmailID[1],
                $email_page,
                $email_stat,
                $DT
            ]);

            // --------------------------------------- DELETE FROM TEMP TABLE ----------------------
            $stmt = $conn->prepare("DELETE FROM temp WHERE T_LeadID = ? AND tranID = ?");
            $stmt->execute([
                $LeadID[1],
                $oderID[1]
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
