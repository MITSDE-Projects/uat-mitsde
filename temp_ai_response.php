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
        <title>Online Payment | Pay Online</title>
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
        <div class="main-content">
            <section>
                <div class="container">
                    <div class="row">
                        <?php

                        echo "<center>";

                        date_default_timezone_set('Asia/Kolkata');
                        $DT = date('Y-m-d H:i:s');
                        $apidataTime = date("Y-m-d H:i:s");

                        $stmt = $conn->prepare("SELECT * FROM temp_ai_transaction WHERE t_process_id = ?");
                        $stmt->execute(array($oid));
                        $temp1 = $stmt->fetch(PDO::FETCH_ASSOC);

                        if (!$temp1) {
                            die("Invalid Transaction");
                        }

                        $temp1['reg_id'];

                        if (isset($temp1['reg_id'])) {


                            $StudentID = trim($temp1['reg_id']); // test reg id MIT2023E04739 test for live MIT2023E00097
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
                            ));

                            $response = curl_exec($curl);
                            $httpCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
                            $curlError = curl_error($curl);

                            curl_close($curl);
                            //print_r($response);
                            // // Check for cURL errors
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
                            }
                        }

                        $temp1['experience'];
                        $temp1['amount'];
                        $oid;

                        $stmt = $conn->prepare("SELECT COUNT(*) FROM ai_transaction WHERE PayU_ID = ?");
                        $stmt->execute(array($refno));
                        $trchk = $stmt->fetchColumn();

                        $stmt = $conn->prepare("SELECT COUNT(*) FROM ai_transaction WHERE t_process_id = ?");
                        $stmt->execute(array($oid));
                        $orchk = $stmt->fetchColumn();

                        if ($orchk > 0 || $trchk > 0) {
                            die("ERROR: Duplicate Entry");
                        }

                        if ($temp1['t_process_id'] != $oid || $temp1['amount'] != $temp1['amount']) {
                            die("ERROR: Invalid Response");

                        } else {

                            $feeheadid = 66; // feeheadid
                            $ReceiptType = "OC";
                            $InstruNo = $refno;
                            $PaidAmount = $temp1['amount'];

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



                            // ✅ Handle API Response
                        
                            $responseData = json_decode($response, true);

                            /*-----------------------update in database------------------------ */

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

                                try {
                                    $stmt = $conn->prepare("INSERT INTO ai_transaction
                                    (name,email,phone,institution,pagename,reg_id,experience,amount,PayU_ID,t_process_id,DT,type,S_Flag,response,F_Flag,API_DT,json_rs_payment)
                                    VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");

                                    $stmt->execute(array(
                                        $temp1['name'],
                                        $temp1['email'],
                                        $temp1['phone'],
                                        $temp1['institution'],
                                        $temp1['pagename'],
                                        $temp1['reg_id'],
                                        $temp1['experience'],
                                        $dotamt[0],
                                        $transationID[1],
                                        $orderID[1],
                                        $curdate,
                                        "workshop",
                                        $s_flag,
                                        $paymentMessage,
                                        $f_flag,
                                        $apidataTime,
                                        $postfeeData
                                    ));

                                    $stmt = null; // close PDO statement
                        
                                } catch (PDOException $e) {
                                    die("Insert Failed: " . $e->getMessage());
                                }
                            } else {
                                echo "Error: Invalid API response.";
                            }

                            /*-----------------------update in database------------------------ */
                            echo "<br><h3>Thank You for Payment.</h3>";

                            echo "<table cellspacing=4 cellpadding=4>";

                            echo "</br>------------------New Admission Fee Payment Details----------------------";


                            echo '</br><tr><td>Student Name :</td><td>' . $temp1['name'] . '</td></tr>';


                            echo '<tr><td>Email ID :</td><td>' . $temp1['email'] . '</td></tr>';


                            echo '<tr><td>Mobile No :</td><td>' . $temp1['phone'] . '</td></tr>';

                            // $Studentcours = explode('=', $decryptValues[26]);
                        
                            // echo '<tr><td>Selected Program :</td><td>' . $Studentcours[1] . '</td></tr>';
                        
                            echo '<tr><td>Fees Type :</td><td>New Admission</td></tr>';

                            echo '<tr><td>Pay Fee :</td><td>' . $temp1['amount'] . '</td></tr>';

                            echo '<tr><td>Payment ID :</td><td>' . $refno . '</td></tr>';

                            echo '<tr><td>Payment Status :</td><td style="color:#4AD300;"> Success </td></tr>';

                            echo "</table><br>";

                            //------------------------------Success Mail----------------------------------------
                            $mail = new PHPMailer();
                            ob_start(); //Turn on output buffering
                            ?>
                        <p>Hello
                            <?php echo $temp1['name']; ?>
                        </p>

                        <p>Thank you for making your payment. It will take two working days to credit your payment into
                            our system.</p> </br>

                        <p>Your Transaction ID for this payment is
                            <?php echo $refno; ?>
                        <p>Your Fee Paid Amount is :
                            <?php echo $temp1['amount']; ?>
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
                        $mail->Subject = "Your application with MIT SDE";
                        $mail->AltBody = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test
                    
                        $mail->MsgHTML($body);
                        $mail->SetLanguage("en", 'includes/phpMailer/language/');
                        $address = $temp1['email'];
                        $mail->AddAddress($address);

                        $mail->AddBCC('sanjay.gaikwad@mitsde.com');
                        $mail->AddBCC('raj.marathe@mitsde.com');
                        // $mail->AddBCC('bhagyashree.p@mitsde.com');
                        // $mail->AddBCC('nikhil.bhillare@mitsde.com');
                        // $mail->AddBCC('bonnie.rajesh@mitsde.com');
                    
                        $mail->Send();
                        //------------------------------Success Mail END----------------------------------------
                    
                        $stmt = $conn->prepare("INSERT INTO email_tracker (emailid, pagename, email_status, data_time) VALUES (?, ?, ?, ?)");
                                $email_page = 'temp_ai_payment_tracker';
                                $email_stat = 'success';
                                $stmt->execute([
                                    $temp1['email'],
                                    $email_page,
                                    $email_stat,
                                    $DT
                                ]);
                                // --------------------------------------- DELETE FROM TEMP TABLE ----------------------
                                $stmt = $conn->prepare("DELETE FROM temp_ai_transaction WHERE email = ? AND t_process_id = ?");
                                $stmt->execute([
                                    $temp1['email'],
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

        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/bootstrap-select.min.js"></script>
        <script src="assets/js/slick.min.js"></script>
        <script src="assets/js/common.js"></script>
        <script src="assets/js/course-slider.js"></script>
</body>
</html>