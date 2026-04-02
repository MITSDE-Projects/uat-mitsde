<?php
include('Crypto_new.php');
// include("admin/include/config.php");
include("admin/include/configpdo.php");

require_once('PHPMailer/class.phpmailer.php');
include("PHPMailer/class.smtp.php"); // optional, gets called from within class.phpmailer.php if not already loaded
error_reporting(0);

if (isset($_GET['oid'])) {
    $oid = htmlspecialchars($_GET['oid']); // keep as string
    $refno = htmlspecialchars($_GET['refno']);
    $odt = htmlspecialchars($_GET['odt']);
    $curdate = (new DateTime($odt))->format("Y-m-d");
    //die();
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
    <title>Online Payment | Other Fees Payment By ICICI | Pay Online</title>
    <link rel="icon" type="image/png" href="assets/images/favicon-mit.ico" />
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/bootstrap-select.min.css" />
    <link rel="stylesheet" href="assets/css/slick.min.css" />
    <link rel="stylesheet" href="assets/css/fonts.css" type="text/css" />
    <link rel="stylesheet" href="assets/css/style.css" type="text/css" />
    <link rel="stylesheet" href="assets/css/course-common-internal.css" type="text/css" />

    <!--API for Queck contact----->
    <script src="assets/js/api/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="assets/js/api/validation.js" charset="UTF-8"></script>




    <!----->


    <!----->
    <?php // include"google_code.html"; ?>
</head>

<body>
    <!-- Header Nav Start -->
    <?php include "header.php" ?>


    <!-- Header Nav End --->
    <main class="main-body">

        <div class="container">
            <div class="row">
                <?php

                echo "<center>";

                date_default_timezone_set('Asia/Kolkata');
                $DT = date('Y-m-d H:i:s');
                $apidataTime = date("Y-m-d H:i:s");

                $stmt = $conn->prepare("SELECT * FROM temp WHERE tranID = ?");
                $stmt->execute(array($oid));
                $temp1 = $stmt->fetch(PDO::FETCH_ASSOC);

                if (!$temp1) {
                    die("Invalid Transaction");
                }

                $stmt = $conn->prepare("SELECT COUNT(*) FROM OtherFeesTransactionN WHERE PayU_ID = ?");
                $stmt->execute(array($refno));
                $trchk = $stmt->fetchColumn();

                $stmt = $conn->prepare("SELECT COUNT(*) FROM OtherFeesTransactionN WHERE t_process_id = ?");
                $stmt->execute(array($oid));
                $orchk = $stmt->fetchColumn();

                if ($orchk > 0 || $trchk > 0) {
                    die("ERROR: Duplicate Entry");
                }

                if ($temp1['tranID'] != $oid || $temp1['T_B_Amount'] != $temp1['T_B_Amount']) {
                    die("ERROR: Invalid Response");

                } else {
                    $stmt = $conn->prepare("SELECT FeeHeadId FROM feeshead_new_erp WHERE description = ?");
                    $stmt->execute([$temp1['fees_type']]);
                    $getname = $stmt->fetch(PDO::FETCH_ASSOC);
                    $feeheadid = isset($getname['FeeHeadId']) ? $getname['FeeHeadId'] : '';


                    if ($feeheadid == '2' || $feeheadid == "3" || $feeheadid == "7") {
                        $ReceiptType = "PRF";
                        $feeheadid = "";
                    } else {
                        $ReceiptType = "OC";
                    }

                    $leadid = $temp1['T_LeadID'];
                    $InstruNo = $refno;
                    $PaidAmount = $temp1['T_B_Amount'];

                    echo "<br><h3>Thank You for Payment.</h3>";
                    $tdate = date("Y/m/d");
                    date_default_timezone_set('Asia/Kolkata');
                    $curdate = date('Y-m-d');

                    // ✅ Prepare API Request
                
                    $postfeeData = json_encode([

                        "CRMLeadId" => $leadid,
                        "FeeType" => $ReceiptType,
                        "TransactionNo" => $InstruNo,
                        "ReceiptAmount" => $PaidAmount,
                        "ReceiptDate" => $curdate,
                        "FeeHeadId" => $feeheadid,
                        "UserId" => 1, //1 is supper admin and 7 is sanjay
                        "CurrencyID" => 1

                    ]);
                    //echo "</br>$postfeeData---------->";
                    //print_r($postfeeData);
                

                    // ✅ Initialize cURL
                
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
                    curl_close($curl);

                    $responseData = json_decode($response, true);

                    // echo "<br>ResponseData--->";
                    // print_r($responseData);
                
                    if ($responseData) {
                        $apiResult = $responseData['Result'] ?: false;
                        $paymentMessage = $responseData['ResultMessage'] ?: "Receipt saved successfully.";

                        if ($apiResult === true) {
                            $s_flag = '1';
                            $f_flag = '1';
                        } else {
                            $s_flag = '0';
                            $f_flag = '2';
                        }

                        // Using prepared statement for insert
                        try {

                            $stmt = $conn->prepare("INSERT INTO OtherFeesTransactionN (
                                        leadID, name, email, phone, CourseName, SpecializationID, 
                                        FeeHeadID, FeesType, ReceiptType, amount, PayU_ID, 
                                        payment_source, PayerBankID, transationDate, t_process_id, 
                                        payment_confirmation_status, PayeeInstituteID, PayeeBankID, 
                                        PayeeACNo, PayeeACName, PayeeBranch, PayeeBankAddress, 
                                        PayeeIFSCCode, S_Flag, response, F_Flag, API_DT, course_id, json_rs_payment
                                    ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

                            $payment_source = 'ICICI';
                            $payer_bank = '1';
                            $payment_status = 'Not Verify';
                            $payee_institute = '16';
                            $payee_bank = '1';
                            $payee_ac = '50100267576292';
                            $payee_name = 'Pune';
                            $payee_branch = 'Mayur Colony Kothrud Pune name';
                            $payee_address = 'Mayur Colony Kothrud Pune address';
                            $payee_ifsc = 'HDFC0000149';

                            $stmt->execute([
                                $leadid,
                                $temp1['student_name'],
                                $temp1['email_id'],
                                $temp1['phone'],
                                $temp1['course'],
                                $temp1['SpecializationID'],
                                $feeheadid,
                                $temp1['fees_type'],
                                $ReceiptType,
                                $temp1['T_B_Amount'],
                                $refno,
                                $payment_source,
                                $payer_bank,
                                $tdate,
                                $oid,
                                $payment_status,
                                $payee_institute,
                                $payee_bank,
                                $payee_ac,
                                $payee_name,
                                $payee_branch,
                                $payee_address,
                                $payee_ifsc,
                                $s_flag,
                                $paymentMessage,
                                $f_flag,
                                $apidataTime,
                                0,
                                $postfeeData
                            ]);

                            $stmt = null; // close PDO statement
                
                        } catch (PDOException $e) {
                            die("Insert Failed: " . $e->getMessage());
                        }

                    } else {

                        echo "Error: Invalid API response.";

                    }

                    echo "<table cellspacing=4 cellpadding=4>";

                    echo "</br>------------------Fee Payment Details----------------------";

                    echo '</br><tr><td>Student Name :</td><td>' . $temp1['student_name'] . '</td></tr>';

                    echo '<tr><td>Email ID :</td><td>' . $temp1['email_id'] . '</td></tr>';

                    echo '<tr><td>Mobile No :</td><td>' . $temp1['phone'] . '</td></tr>';

                    echo '<tr><td>Course :</td><td>' . $temp1['course'] . '</td></tr>';

                    echo '<tr><td>Fees Type :</td><td>' . $temp1['fees_type'] . '</td></tr>';

                    echo '<tr><td>Pay Fee :</td><td>' . $temp1['T_B_Amount'] . '</td></tr>';

                    echo '<tr><td>Payment ID :</td><td>' . $refno . '</td></tr>';

                    echo '<tr><td>Payment Status :</td><td style="color:#4AD300;"> Success </td></tr>';

                    echo "</table><br>";

                    //------------------------------Success Mail----------------------------------------
                    $mail = new PHPMailer();
                    ob_start(); //Turn on output buffering
                    ?>
                <p>Hello
                    <?php echo $temp1['student_name']; ?>
                </p>

                <p>Thank you for making your payment. It will take two working days to credit your payment into our
                    system.</p> </br>

                <p>Your Transaction ID for this payment is
                    <?php echo $refno; ?>
                <p>Your Fee Paid Amount is :
                    <?php echo $temp1['T_B_Amount']; ?>
                </p>
                <p>Course Name :
                    <?php echo $temp1['course']; ?>
                </p>
                <p>Fees Type :
                    <?php echo $temp1['fees_type']; ?>
                </p>

                <p>Used Payment Gateway : ICICI </p>

                <p>If you have any questions, please contact us at admissions@mitsde.com or on campussupport@mitsde.com
                    or <a href="https://elibrary.mitsde.com/callmeback.php" traget="_blank">Click here</a> to call back
                </p>
                <p>Thank you and see you soon.<br>
                    Regards,<br>
                    <b>Team MIT-School of Distance Education</b>
                </p>
                <?php

                $body = ob_get_clean();
                $mail->IsSMTP(); // telling the class to use SMTP
                $mail->SMTPDebug = 0;                     // enables SMTP debug information (for testing) // 1 = errors and messages
                $mail->SMTPAuth = true;                  // enable SMTP authentication
                $mail->SMTPSecure = "tls";                 // sets the prefix to the servier
                $mail->Host = "email-smtp.us-east-1.amazonaws.com";      // sets GMAIL as the SMTP server
                $mail->Port = 2587;                   // set the SMTP port for the GMAIL
                $mail->Username = "AKIA5OQ6466FQH7J437A";  // GMAIL username
                $mail->Password = "BNuSqYkuMXY6D9OqA7Gp4ABHK3LSIPUBoII+233SV+kC";
            
                $mail->SetFrom('admissions@mitsde.com', 'MIT-School of Distance Education');
                $mail->AddReplyTo('admissions@mitsde.com', 'No-Reply');
                $mail->Subject = "Payment Made Successfully";
                $mail->AltBody = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test
            
                $mail->MsgHTML($body);
                $mail->SetLanguage("en", 'includes/phpMailer/language/');
                $address = $temp1['email_id'];
                $mail->AddAddress($address);

                $mail->AddBCC('sanjay.gaikwad@mitsde.com');
                $mail->AddBCC('raj.marathe@mitsde.com');
            
                $mail->Send();
                //------------------------------Success Mail END----------------------------------------
            
                $stmt = $conn->prepare("INSERT INTO email_tracker (emailid, pagename, email_status, data_time) VALUES (?, ?, ?, ?)");
                $email_page = 'temp_otherfees_payment_tracker';
                $email_stat = 'success';
                $stmt->execute([
                    $temp1['email_id'],
                    $email_page,
                    $email_stat,
                    $DT
                ]);

                // --------------------------------------- DELETE FROM TEMP TABLE ----------------------
                $stmt = $conn->prepare("DELETE FROM temp WHERE T_LeadID = ? AND tranID = ?");
                $stmt->execute([
                    $leadid,
                    $oid
                ]);
                    //---------------------------------------FOR DELETE FORM TEMP TABLE------END----------------
                }
                echo "</center>";
                ?>
            </div>
        </div>
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