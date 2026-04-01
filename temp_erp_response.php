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
<html dir="ltr" lang="en">

<head>
    <html dir="ltr" lang="en">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <!-- Meta Tags -->
        <meta name="viewport" content="width=device-width,initial-scale=1.0" />
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <meta name="author" content="" />

        <!-- Page Title -->
        <title>Online Payment</title>

        <!-- Favicon and Touch Icons -->
        <link href="media/favicon.png" rel="shortcut icon" type="image/png">
        <link href="images/apple-touch-icon.png" rel="apple-touch-icon">

        <!-- Mobile Specific Metas -->
        <title>Online Payment | Other Fees Payment By PayPhi | Pay Online</title>
        <link rel="icon" type="image/png" href="assets/images/favicon-mit.ico" />
        <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
        <link rel="stylesheet" href="assets/css/bootstrap-select.min.css" />
        <link rel="stylesheet" href="assets/css/slick.min.css" />
        <link rel="stylesheet" href="assets/css/fonts.css" type="text/css" />
        <link rel="stylesheet" href="assets/css/style.css" type="text/css" />
        <link rel="stylesheet" href="assets/css/course-common-internal.css" type="text/css" />

        <!--API for Queck contact----->
        <script src="ajax-load/js/jquery-1.10.2.min.js"></script>
        <script type="text/javascript" src="ajax-load/js/validation.js" charset="UTF-8"></script>
        <!----->
    </head>

<body class="header-sticky">
    <div class="boxed">
        <?php include "header.php"; ?>
        <div class="main-content">
            <section>
                <div class="container">
                    <div class="row">

                        <?php
                        echo "<center>";

                        date_default_timezone_set('Asia/Kolkata');
                        $DT = date('Y-m-d H:i:s');
                        $apidataTime = date("Y-m-d H:i:s");

                        $stmt = $conn->prepare("SELECT * FROM temp_erp WHERE tranID = ?");
                        $stmt->execute(array($oid));
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

                        if (empty($specialization_id)) {
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
                        if ($course_id == "10" && $specialization_id == "31") {
                            $course_id = "46";
                        }
                        $duration = $scourse['duration'];

                        /* ================= FEES INFO ================= */
                        $x = explode('_', $temp1['fees_type']);
                        $feeheadid = $x[0];
                        $description = $x[1];

                        $stmt = $stmt = $conn->prepare("SELECT email FROM tbl_counselor WHERE full_name = ?");
                        $stmt->execute([$temp1['new_counselorName']]);
                        $row = $stmt->fetch(PDO::FETCH_ASSOC);
                        $new_counselorEmail = $row ? $row['email'] : '';

                        /* ----------uat lead insertion-----------*/
                        $postFields = json_encode([
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
                            "CounsellorEmailId" => $new_counselorEmail,
                            "LeadType" => "EE",
                            "LoginPassword" => $temp1['password'],
                            "PaymentType" => $feeheadid
                        ]);

                        // Debugging: Print the JSON body before making the request
                        //echo "<br>Request Body:<br>";
                        //echo "<pre>" . htmlspecialchars($postFields) . "</pre>";
                        
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
                            CURLOPT_POSTFIELDS => $postFields, // Use JSON encoded data
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
                        $stmt->execute(array($refno));
                        $trchk = $stmt->fetchColumn();

                        $stmt = $conn->prepare("SELECT COUNT(*) FROM New_erp_student_admission_transaction WHERE t_process_id = ?");
                        $stmt->execute(array($oid));
                        $orchk = $stmt->fetchColumn();

                        if ($orchk > 0 || $trchk > 0) {
                            die("ERROR: Duplicate Entry");
                        }

                        if ($temp1['tranID'] != $oid || $temp1['T_B_Amount'] != $dotamt[0]) {
                            die("ERROR: Invalid Response");

                        } else {

                            $leadid = $temp1['T_LeadID'];
                            $PaidAmount = $temp1['T_B_Amount'];
                            $curdate = date('Y-m-d');

                            $postfeeData = json_encode(array(
                                "CRMLeadId" => $leadid,
                                "FeeType" => "PRF",
                                "TransactionNo" => $refno,
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
                                        $temp1['T_B_Amount'],
                                        $refno,
                                        "HDFC",
                                        1,
                                        $curdate,
                                        $oid,
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
                                        $new_counselorEmail,
                                        $DT,
                                        $postFields,
                                        $postfeeData
                                    ));
                                    $stmt = null; // close PDO statement
                        
                                } catch (PDOException $e) {
                                    die("Insert Failed: " . $e->getMessage());
                                }
                            } else {
                                echo "Error: Invalid API response.";
                            }
                            echo "<br><h3>Thank You for Payment.</h3>";

                            /*-----------------------update in database------------------------ */


                            echo "<table cellspacing=4 cellpadding=4>";

                            echo "</br>------------------New Admission Fee Payment Details----------------------";

                            echo '</br><tr><td>Student Name :</td><td>' . $temp1['student_name'] . '</td></tr>';

                            echo '<tr><td>Email ID :</td><td>' . $temp1['email_id'] . '</td></tr>';

                            echo '<tr><td>Mobile No :</td><td>' . $temp1['phone'] . '</td></tr>';

                            // $Studentcours = explode('=', $decryptValues[26]);
                        
                            // echo '<tr><td>Selected Program :</td><td>' . $Studentcours[1] . '</td></tr>';
                        
                            echo '<tr><td>Fees Type :</td><td>New Admission</td></tr>';

                            echo '<tr><td>Pay Fee :</td><td>' . $temp1['T_B_Amount'] . '</td></tr>';

                            echo '<tr><td>Payment ID :</td><td>' . $refno . '</td></tr>';

                            echo '<tr><td>Payment Status :</td><td style="color:#4AD300;"> Success </td></tr>';

                            echo "</table><br>";

                            //------------------------------Success Mail----------------------------------------
                            $mail = new PHPMailer();
                            ob_start(); //Turn on output buffering
                            ?>
                        <p>Hello
                            <?php echo $temp1['student_name']; ?>,<br>
                            Congratulations!
                        </p>
                        <p>We would like to take this moment to thank you for successfully submitting your application
                            with MIT-School of Distance Education.
                            We wish to confirm the receipt of the payment towards the admission process.</p>
                        <p>Your Transaction ID for this payment is
                            <?php echo $refno; ?>
                        <p>If you have any questions, please contact your counselor at
                            <?php echo $new_counselorEmail; ?>
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
                                            } elseif ($course_id == "38") {
                                                echo $course_Name;
                                            } else {
                                                echo $course_Name . " in " . $Specialization_Name . " ";
                                            }
                                            ?>
                                            (
                                            <?php echo $duration; ?>)
                                        </b>
                                    </p>
                                    <p>2) Amount Paid –INR <b>
                                            <?php echo $temp1['T_B_Amount']; ?> /-
                                        </b></p>
                                    <p>3) Payment Option -
                                        <b>
                                            <?php echo $description;
                                            if ($description == "Installment")
                                                echo "\x20(Next Installment needs to be paid within 3 months duration from first payment.)"; ?>
                                        </b>
                                    </p>
                                    <p>4) Exam fees – INR 500 per paper (if applicable for the course, payable at the
                                        time of examination)</p>
                                    <p>5) Project fees- INR 1500 (If applicable for the course, payable at the time of
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
                        $mail->Subject = "Your application with MIT SDE";
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
                        $email_page = 'temp_erp_payment_tracker';
                        $email_stat = 'success';
                        $stmt->execute([
                            $temp1['email_id'],
                            $email_page,
                            $email_stat,
                            $DT
                        ]);
                        // --------------------------------------- DELETE FROM TEMP TABLE ----------------------
                        $stmt = $conn->prepare("DELETE FROM temp_erp WHERE T_LeadID = ? AND tranID = ?");
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
            </section>
        </div>
        <!-- end main-content -->

        <!-- Footer -->
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