<?php include('Crypto_new.php');
include('admin/include/config.php');

require_once('PHPMailer/class.phpmailer.php');
include("PHPMailer/class.smtp.php"); // optional, gets called from within class.phpmailer.php if not already loaded
error_reporting(0);

//	$workingKey='FF2048EE9548EAE83BF4797292611691';		//testing
$workingKey = 'DC043516F6F3B974D64CE6970A15D053';		//Working Key should be provided here.

$encResponse = $_POST["encResp"];			//This is the response sent by the CCAvenue Server
$rcvdString = decrypt($encResponse, $workingKey);		//Crypto Decryption used as per the specified working key.

$order_status = "";

$decryptValues = explode('&', $rcvdString);
$dataSize = sizeof($decryptValues);


$oderID = explode('=', $decryptValues[0]);
$oderID[1];
//echo "Order ID= ".$oderID[1]."<br>";

$transationID = explode('=', $decryptValues[1]);
$transationID[1];

$LeadID = explode('=', $decryptValues[28]);
$LeadID[1];

$amt = explode('=', $decryptValues[10]);
$amt[1];

$dotamt = explode('.', $amt[1]);
$dotamt[0];




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

                for ($i = 0; $i < $dataSize; $i++) {
                    $information = explode('=', $decryptValues[$i]);
                    if ($i == 3)
                        $order_status = $information[1];
                }

                date_default_timezone_set('Asia/Kolkata');
                $DT = date('Y-m-d H:i:s');
                $apidataTime = date("Y-m-d H:i:s");

                if ($order_status === "Success") {
                    //  echo "</br>select * from temp where T_LeadID='".$LeadID[1]."' and tranID='".$oderID[1]."'";
                
                    $temp = mysql_query("select * from temp where T_LeadID='" . $LeadID[1] . "' and tranID='" . $oderID[1] . "'");
                    $temp1 = mysql_fetch_array($temp);

                    $temp1['T_LeadID'];
                    $temp1['tranID']; // order id
                    $temp1['student_name'];
                    $temp1['email_id'];
                    $temp1['phone'];
                    $temp1['course'];
                    $temp1['SpecializationID'];
                    $temp1['fees_type'];
                    $temp1['T_B_Amount'];
                    //   die;
                    // echo "</br>select PayU_ID,t_process_id,amount from OtherFeesTransactionN where leadID='".$LeadID[1]."'";
                
                    /*  $transation = mysql_query("select PayU_ID,t_process_id,amount from OtherFeesTransactionN where `leadID`='".$LeadID[1]."'");
                                $transatio1=mysql_fetch_array($transation);

                                $transatio1['PayU_ID'];    // get frm database for validation
                                echo "payu id=". $transatio1['PayU_ID']."<br>";
                                  $transatio1['t_process_id']; // get order id frm database for validation
                                      echo "porder id=". $transatio1['t_process_id']."<br>";
                                $transatio1['amount'];   // get frm database for validation
                                    echo "amount=". $transatio1['amount']."<br>";*/



                    $trchk = mysql_num_rows(mysql_query("select * from OtherFeesTransactionN where `PayU_ID`='" . $transationID[1] . "'"));
                    $orchk = mysql_num_rows(mysql_query("select * from OtherFeesTransactionN where `t_process_id`='" . $oderID[1] . "'"));


                    if ($orchk > 0 || $trchk > 0) {
                        echo "ERROR: Duplicate Entry<br>";
                    } elseif ($temp1['tranID'] != $oderID[1] || $temp1['T_B_Amount'] != $dotamt[0]) {
                        echo "ERROR: Invalid Response (orderID or Amount not matching)<br>";

                    } else {
                        $GetFeeType = mysql_query("SELECT * FROM `feeshead_new_erp` WHERE `description` = '" . $temp1['fees_type'] . "'");
                        $getname = mysql_fetch_array($GetFeeType);
                        $feeheadid = $getname['FeeHeadId']; // feeheadid
                
                        if ($feeheadid == '2' || $feeheadid == "3" || $feeheadid == "7") {
                            $ReceiptType = "PRF";
                            $feeheadid = "";
                        } else {
                            $ReceiptType = "OC";
                        }

                        $leadid = $temp1['T_LeadID'];

                        $InstruNo = $transationID[1];



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

                                'Authorization: Bearer '. $accessToken,

                                'Content-Type: application/json'

                            ],
                            CURLOPT_CAINFO => '/home/mitsde/ssl/cacert.pem',
                        ]);



                        $response = curl_exec($curl);

                        curl_close($curl);



                        // ✅ Handle API Response
                
                        $responseData = json_decode($response, true);

                        //echo "</br>response payment---------->";
                        //print_r($responseData);
                
                        // if ($responseData['Message'] == "Authorization has been denied for this request.") {
                        //     $leadMessage = $responseData['Message'];
                        //     echo "</br></br><center>Authorization has been denied for this request.</center>";
                        // }
                
                        //print_r($paymentMessage);
                

                        /*-----------------------crm payment api------------------------ */

                        /*-----------------------update in database------------------------ */

                        if ($responseData) {

                            $apiResult = $responseData['Result'] ?: false;  // Default to false
                
                            // $paymentMessage = $responseData['ResultMessage'] ?: "Receipt saved successfully.";
                
                            if ($responseData['Result'] === true) {
                                // Transaction success → message is inside Object[0]['Message']['ResultMessage']
                                $paymentMessage = $responseData['Object'][0]['Message']['ResultMessage'];
                            } else {
                                // Transaction failed → message comes from root ResultMessage
                                $paymentMessage = $responseData['ResultMessage'];
                            }



                            if ($apiResult === true) {
                                //echo "</br>INSERT INTO `OtherFeesTransactionN` (`othr_id`, `leadID`, `name`, `email`, `phone`, `CourseName`,`SpecializationID`, `FeeHeadID`, `FeesType`, `ReceiptType`, `amount`, `PayU_ID`, `payment_source`, `PayerBankID`, `transationDate`, `t_process_id`, `UTRNO`, `payment_confirmation_status`, `PayeeInstituteID`, `PayeeBankID`, `PayeeACNo`, `PayeeACName`, `PayeeBranch`, `PayeeBankAddress`, `PayeeIFSCCode`, `S_Flag`, `response`, `F_Flag`, API_DT, `json_rs_payment`) VALUES (NULL, '".$LeadID[1]."', '".$temp1['student_name']."', '".$temp1['email_id']."','".$temp1['phone']."', '".$temp1['course']."','".$temp1['SpecializationID']."', '".$feeheadid."', '".$temp1['fees_type']."','".$ReceiptType."','".$dotamt[0]."','".$transationID[1]."', 'ICICI','1', '".$tdate."','".$oderID[1]."', NULL, 'Not Verify', '16', '1', '50100267576292', 'Pune', 'Mayur Colony Kothrud Pune name', 'Mayur Colony Kothrud Pune address', 'HDFC0000149', '1', '" . $paymentMessage . "', '1','" . $apidataTime . "','" . $postfeeData . "')";
                                $updateQuery = "INSERT INTO `OtherFeesTransactionN` (`othr_id`, `leadID`, `name`, `email`, `phone`, `CourseName`,`SpecializationID`, `FeeHeadID`, `FeesType`, `ReceiptType`, `amount`, `PayU_ID`, `payment_source`, `PayerBankID`, `transationDate`, `t_process_id`, `UTRNO`, `payment_confirmation_status`, `PayeeInstituteID`, `PayeeBankID`, `PayeeACNo`, `PayeeACName`, `PayeeBranch`, `PayeeBankAddress`, `PayeeIFSCCode`, `S_Flag`, `response`, `F_Flag`, API_DT, `json_rs_payment`) VALUES (NULL, '" . $LeadID[1] . "', '" . $temp1['student_name'] . "', '" . $temp1['email_id'] . "','" . $temp1['phone'] . "', '" . $temp1['course'] . "','" . $temp1['SpecializationID'] . "', '" . $feeheadid . "', '" . $temp1['fees_type'] . "','" . $ReceiptType . "','" . $dotamt[0] . "','" . $transationID[1] . "', 'ICICI','1', '" . $tdate . "','" . $oderID[1] . "', NULL, 'Not Verify', '16', '1', '50100267576292', 'Pune', 'Mayur Colony Kothrud Pune name', 'Mayur Colony Kothrud Pune address', 'HDFC0000149', '1', '" . $paymentMessage . "', '1','" . $apidataTime . "','" . $postfeeData . "')";
                                mysql_query($updateQuery) or die('</br>Error, insert query failed');

                            } else {
                                // echo "</br>INSERT INTO `OtherFeesTransactionN` (`othr_id`, `leadID`, `name`, `email`, `phone`, `CourseName`,`SpecializationID`, `FeeHeadID`, `FeesType`, `ReceiptType`, `amount`, `PayU_ID`, `payment_source`, `PayerBankID`, `transationDate`, `t_process_id`, `UTRNO`, `payment_confirmation_status`, `PayeeInstituteID`, `PayeeBankID`, `PayeeACNo`, `PayeeACName`, `PayeeBranch`, `PayeeBankAddress`, `PayeeIFSCCode`, `S_Flag`, `response`, `F_Flag`, API_DT, `json_rs_payment`) VALUES (NULL, '".$LeadID[1]."', '".$temp1['student_name']."', '".$temp1['email_id']."','".$temp1['phone']."', '".$temp1['course']."','".$temp1['SpecializationID']."', '".$feeheadid."', '".$temp1['fees_type']."','".$ReceiptType."','".$dotamt[0]."','".$transationID[1]."', 'ICICI','1', '".$tdate."','".$oderID[1]."', NULL, 'Not Verify', '16', '1', '50100267576292', 'Pune', 'Mayur Colony Kothrud Pune name', 'Mayur Colony Kothrud Pune address', 'HDFC0000149', '0', '" . $paymentMessage . "', '2','" . $apidataTime . "','" . $postfeeData . "')";
                                $updateQuery = "INSERT INTO `OtherFeesTransactionN` (`othr_id`, `leadID`, `name`, `email`, `phone`, `CourseName`,`SpecializationID`, `FeeHeadID`, `FeesType`, `ReceiptType`, `amount`, `PayU_ID`, `payment_source`, `PayerBankID`, `transationDate`, `t_process_id`, `UTRNO`, `payment_confirmation_status`, `PayeeInstituteID`, `PayeeBankID`, `PayeeACNo`, `PayeeACName`, `PayeeBranch`, `PayeeBankAddress`, `PayeeIFSCCode`, `S_Flag`, `response`, `F_Flag`, API_DT, `json_rs_payment`) VALUES (NULL, '" . $LeadID[1] . "', '" . $temp1['student_name'] . "', '" . $temp1['email_id'] . "','" . $temp1['phone'] . "', '" . $temp1['course'] . "','" . $temp1['SpecializationID'] . "', '" . $feeheadid . "', '" . $temp1['fees_type'] . "','" . $ReceiptType . "','" . $dotamt[0] . "','" . $transationID[1] . "', 'ICICI','1', '" . $tdate . "','" . $oderID[1] . "', NULL, 'Not Verify', '16', '1', '50100267576292', 'Pune', 'Mayur Colony Kothrud Pune name', 'Mayur Colony Kothrud Pune address', 'HDFC0000149', '0', '" . $paymentMessage . "', '2','" . $apidataTime . "','" . $postfeeData . "')";
                                mysql_query($updateQuery) or die('</br>Error, insert query failed');

                            }

                        } else {

                            echo "Error: Invalid API response.";

                        }

                        echo "<table cellspacing=4 cellpadding=4>";

                        echo "</br>------------------Fee Payment Details----------------------";

                        $StudentName = explode('=', $decryptValues[19]);

                        echo '</br><tr><td>Student Name :</td><td>' . $StudentName[1] . '</td></tr>';

                        $StudentEmailID = explode('=', $decryptValues[18]);

                        echo '<tr><td>Email ID :</td><td>' . $StudentEmailID[1] . '</td></tr>';

                        $StudentMob = explode('=', $decryptValues[25]);

                        echo '<tr><td>Mobile No :</td><td>' . $StudentMob[1] . '</td></tr>';

                        $Studentcours = explode('=', $decryptValues[26]);

                        echo '<tr><td>Course :</td><td>' . $Studentcours[1] . '</td></tr>';

                        $StudentFeesType = explode('=', $decryptValues[27]);

                        echo '<tr><td>Fees Type :</td><td>' . $temp1['fees_type'] . '</td></tr>';

                        $Fees = explode('=', $decryptValues[35]);

                        echo '<tr><td>Pay Fee :</td><td>' . $Fees[1] . '</td></tr>';



                        echo '<tr><td>Payment ID :</td><td>' . $transationID[1] . '</td></tr>';

                        $Payment_status = explode('=', $decryptValues[3]);

                        echo '<tr><td>Payment Status :</td><td style="color:#4AD300;">' . $Payment_status[1] . '</td></tr>';

                        echo "</table><br>";

                        //------------------------------Success Mail----------------------------------------
                        $mail = new PHPMailer();
                        ob_start(); //Turn on output buffering
                        ?>
                <p>Hello
                    <?php echo $StudentName[1]; ?>
                </p>

                <p>Thank you for making your payment. It will take two working days to credit your payment into our
                    system.</p> </br>

                <p>Your Transaction ID for this payment is
                    <?php echo $transationID[1]; ?>
                <p>Your Fee Paid Amount is :
                    <?php echo $Fees[1]; ?>
                </p>
                <p>Course Name :
                    <?php echo $Studentcours[1]; ?>
                </p>
                <p>Fees Type :
                    <?php echo $temp1['fees_type']; ?>
                </p>

                <p>Used Payment Gateway : ICICI </p>

                <p>If you have any questions, please contact us at admissions@mitsde.com or on campussupport@mitsde.com
                    or <a href="https://elibrary.mitsde.com/callmeback.php" traget="_blnack">Click here</a> to call back
                </p>
                <p>Thank you and see you soon.<br>
                    Regards,<br>
                    <b>Team MIT-School of Distance Education</b>
                </p>
                <?php
                /*$body  = ob_get_clean();
                     $mail->Mailer = "mail";
                       //$mail->IsSMTP(); // telling the class to use SMTP
                       $mail->SMTPDebug  = 1;                     // enables SMTP debug information (for testing) // 1 = errors and messages
                                                             // 2 = messages only
                      $mail->SMTPAuth   = true;                  // enable SMTP authentication
                     $mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
                     $mail->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
                     $mail->Port       = 465;                   // set the SMTP port for the GMAIL 
                     $mail->Username   = "payonline@mitsde.com";  // GMAIL username
                     $mail->Password   = "mitsde@123";            // GMAIL password*/

                $body = ob_get_clean();
                //$mail->Mailer = "mail";
                $mail->IsSMTP(); // telling the class to use SMTP
                //$mail->IsMail(); // telling the class to use SMTP
                $mail->SMTPDebug = 0;                     // enables SMTP debug information (for testing) // 1 = errors and messages
                // $mail->SMTPSecure = "ssl";                 // sets the prefix to the servier                                          // 2 = messages only
                $mail->SMTPAuth = true;                  // enable SMTP authentication
                $mail->SMTPSecure = "tls";                 // sets the prefix to the servier
                $mail->Host = "email-smtp.us-east-1.amazonaws.com";      // sets GMAIL as the SMTP server
                $mail->Port = 2587;                   // set the SMTP port for the GMAIL
                $mail->Username   = "AKIA5OQ6466FQH7J437A";  // GMAIL username
                        $mail->Password   = "BNuSqYkuMXY6D9OqA7Gp4ABHK3LSIPUBoII+233SV+kC";
        

                $mail->SetFrom('admissions@mitsde.com', 'MIT-School of Distance Education');

                $mail->AddReplyTo('admissions@mitsde.com', 'No-Reply');

                $mail->Subject = "Payment Made Successfully";

                $mail->AltBody = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test
        
                $mail->MsgHTML($body);
                $mail->SetLanguage("en", 'includes/phpMailer/language/');
                $address = $StudentEmailID[1];
                $mail->AddAddress($address);

                $mail->AddBCC('sanjay.gaikwad@mitsde.com');
                $mail->AddBCC('raj.marathe@mitsde.com');
                // $mail->AddBCC('teamfeecollections@mitsde.com');
                // $mail->AddBCC('accounts.mitsde@mitpune.edu.in');
                // $mail->AddBCC('shivraj.pachawadkar@mitsde.com');
                // $mail->AddBCC('teamenrollment@mitsde.com');


                //$mail->AddAttachment("sept12120568.pdf");      // attachment
                //$mail->AddAttachment("images/phpmailer_mini.gif"); // attachment
        
                $mail->Send();
                //------------------------------Success Mail END----------------------------------------
        
                $emailquery = mysql_query("INSERT INTO email_tracker (id, emailid, pagename, email_status, data_time) VALUES (NULL, '" . $StudentEmailID[1] . "', 'OtherFeesPaymenticici', 'success', '" . $DT . "')");
                //---------------------------------------FOR DELETE FORM TEMP TABLE----------------------
                $deletetemp = mysql_query("DELETE FROM `temp` WHERE T_LeadID='" . $LeadID[1] . "' and tranID='" . $oderID[1] . "'");
                        //---------------------------------------FOR DELETE FORM TEMP TABLE------END----------------
                    }





                } else if ($order_status === "Aborted") {

                    echo "<br><h3>Thank You for Payment.</h3>.";

                    echo "<table cellspacing=4 cellpadding=4>";

                    echo "</br>------------------Fee Payment Details----------------------";

                    $StudentName = explode('=', $decryptValues[19]);

                    echo '</br><tr><td>Student Name :</td><td>' . $StudentName[1] . '</td></tr>';

                    $StudentEmailID = explode('=', $decryptValues[18]);

                    echo '<tr><td>Email ID :</td><td>' . $StudentEmailID[1] . '</td></tr>';

                    $StudentMob = explode('=', $decryptValues[25]);

                    echo '<tr><td>Mobile No :</td><td>' . $StudentMob[1] . '</td></tr>';

                    /*$Studentcours=explode('=',$decryptValues[26]);

                    echo '<tr><td>Course :</td><td>'.$Studentcours[1].'</td></tr>';*/

                    $StudentFeesType = explode('=', $decryptValues[27]);

                    echo '<tr><td>Fees Type :</td><td>' . $StudentFeesType[1] . '</td></tr>';

                    $Fees = explode('=', $decryptValues[35]);

                    echo '<tr><td>Pay Fee :</td><td>' . $Fees[1] . '</td></tr>';

                    $Payment_status = explode('=', $decryptValues[3]);

                    echo '<tr><td>Payment Status :</td><td style="color:red">' . $Payment_status[1] . '</td></tr>';

                    echo "</table><br>";


                    //------------------------------Aborted Mail----------------------------------------
                    $mail = new PHPMailer();
                    ob_start(); //Turn on output buffering
                    ?>
                <p>Hello
                    <?php echo $StudentName[1]; ?>,
                </p><br>

                <p>You Have Canceled This Transaction,please verify your course fee
                    information and resend payment
                    <?php echo $Fees[1]; ?>.
                </p>

                <p>Your Transaction ID
                    <?php echo $transationID[1]; ?> for this fee is
                    <?php echo $Fees[1]; ?>
                </p>

                <p>Payment Getway : ICICI </p> </br>

                <p>Thank you and see you soon.<br>
                    Regards,<br>
                    <b>Team MIT-School of Distance Education</b>
                </p>
                <?php
                $body = ob_get_clean();
                //$mail->Mailer = "mail";
                $mail->IsSMTP(); // telling the class to use SMTP
                //$mail->IsMail(); // telling the class to use SMTP
                $mail->SMTPDebug = 0;                     // enables SMTP debug information (for testing) // 1 = errors and messages
                // $mail->SMTPSecure = "ssl";                 // sets the prefix to the servier                                          // 2 = messages only
                $mail->SMTPAuth = true;                  // enable SMTP authentication
                $mail->SMTPSecure = "tls";                 // sets the prefix to the servier
                $mail->Host = "email-smtp.us-east-1.amazonaws.com";      // sets GMAIL as the SMTP server
                $mail->Port = 2587;                   // set the SMTP port for the GMAIL
                $mail->Username = "AKIA5OQ6466FZWEYNNVJ";  // GMAIL username
                $mail->Password = "BB8uQenn6fCEjW791mFxeUgQ39xwI/9PEBDPz7uasG58";            // GMAIL password
            
                $mail->SetFrom('admissions@mitsde.com', 'MIT-School of Distance Education');

                $mail->AddReplyTo('admissions@mitsde.com', 'No-Reply');

                $mail->Subject = "Canceled This Transaction";

                $mail->AltBody = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test
            
                $mail->MsgHTML($body);
                $mail->SetLanguage("en", 'includes/phpMailer/language/');
                $address = $StudentEmailID[1];
                $mail->AddAddress($address);



                $mail->AddBCC('sanjay.gaikwad@mitsde.com');
                
                



                //$mail->AddAttachment("sept12120568.pdf");      // attachment
                //$mail->AddAttachment("images/phpmailer_mini.gif"); // attachment
            
                $mail->Send();
                //------------------------------Aborted Mail END----------------------------------------
            
                $emailquery = mysql_query("INSERT INTO email_tracker (id, emailid, pagename, email_status, data_time) VALUES (NULL, '" . $StudentEmailID[1] . "', 'OtherFeesPaymenticici', 'abort', '" . $DT . "')");
                //---------------------------------------FOR DELETE FORM TEMP TABLE----------------------
                $deletetemp = mysql_query("DELETE FROM `temp` WHERE T_LeadID='" . $LeadID[1] . "' and tranID='" . $oderID[1] . "'");
                    //---------------------------------------FOR DELETE FORM TEMP TABLE------END----------------
                
                } else if ($order_status === "Failure") {
                    echo "<br><h3>Thank You for Payment.</h3>.";

                    echo "<br><h5 style='color:red'>The transaction has been declined. Please try again</h5>";


                    echo "<table cellspacing=4 cellpadding=4>";

                    echo "</br>------------------Fee Payment Details----------------------";

                    $StudentName = explode('=', $decryptValues[19]);

                    echo '</br><tr><td>Student Name :</td><td>' . $StudentName[1] . '</td></tr>';

                    $StudentEmailID = explode('=', $decryptValues[18]);

                    echo '<tr><td>Email ID :</td><td>' . $StudentEmailID[1] . '</td></tr>';

                    $StudentMob = explode('=', $decryptValues[25]);

                    echo '<tr><td>Mobile No :</td><td>' . $StudentMob[1] . '</td></tr>';

                    $Studentcours = explode('=', $decryptValues[26]);

                    echo '<tr><td>Course :</td><td>' . $Studentcours[1] . '</td></tr>';

                    $StudentFeesType = explode('=', $decryptValues[27]);

                    echo '<tr><td>Fees Type :</td><td>' . $StudentFeesType[1] . '</td></tr>';

                    $Fees = explode('=', $decryptValues[35]);

                    echo '<tr><td>Pay Fee :</td><td>' . $Fees[1] . '</td></tr>';

                    $Payment_status = explode('=', $decryptValues[3]);

                    echo '<tr><td>Payment Status :</td><td style="color:red">' . $Payment_status[1] . '</td></tr>';

                    echo "</table><br>";

                    //------------------------------Failure Mail----------------------------------------
                    $mail = new PHPMailer();
                    ob_start(); //Turn on output buffering
                    ?>
                <p>Hello
                    <?php echo $StudentName[1]; ?>,
                </p><br>

                <p>Unfortunately your most recent invoice payment id was declined. This could be due to a change in your
                    card number or your card expiring, cancelation of your credit card / debit card, or the bank not
                    recognizing the payment and taking action to prevent it,
                    please verify your billing information and resend payment
                    <?php echo $Fees[1]; ?>.
                </p>

                <p>Your Transaction ID
                    <?php echo $transationID[1]; ?> for this fee is
                    <?php echo $Fees[1]; ?>
                </p>
                <p>Course Name :
                    <?php echo $Studentcours[1]; ?>
                </p>
                <p>Payment Getway : ICICI </p> <br />

                <p>Thank you and see you soon.<br>
                    Regards,<br>
                    <b>Team MIT-School of Distance Education</b>
                </p>
                <?php
                $body = ob_get_clean();
                $mail->IsSMTP(); // telling the class to use SMTP
                // $mail->Mailer = "mail";
                $mail->SMTPDebug = 0;                     // enables SMTP debug information (for testing) // 1 = errors and messages
                // $mail->SMTPSecure = "ssl";                 // sets the prefix to the servier                                          // 2 = messages only
                $mail->SMTPAuth = true;                  // enable SMTP authentication
                $mail->SMTPSecure = "tls";                 // sets the prefix to the servier
                $mail->Host = "email-smtp.us-east-1.amazonaws.com";      // sets GMAIL as the SMTP server
                $mail->Port = 2587;                   // set the SMTP port for the GMAIL
                $mail->Username   = "AKIA5OQ6466FQH7J437A";  // GMAIL username
                        $mail->Password   = "BNuSqYkuMXY6D9OqA7Gp4ABHK3LSIPUBoII+233SV+kC";
            
                $mail->SetFrom('admissions@mitsde.com', 'MIT-School of Distance Education');

                $mail->AddReplyTo('admissions@mitsde.com', 'No-Reply');

                $mail->Subject = "Current Transaction is Failed";

                $mail->AltBody = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test
            
                $mail->MsgHTML($body);
                $mail->SetLanguage("en", 'includes/phpMailer/language/');
                $address = $StudentEmailID[1];
                $mail->AddAddress($address);



                $mail->AddBCC('sanjay.gaikwad@mitsde.com');
                $mail->AddBCC('roshan.more@mitsde.com');
                $mail->AddBCC('accounts.mitsde@mitpune.edu.in');
                $mail->AddBCC('aishwarya.more@mitsde.com');
                $mail->AddBCC('shivraj.pachawadkar@mitsde.com');
                $mail->AddBCC('ashvini.zarbade@mitsde.com');
                $mail->AddBCC('mayur.rikame@mitsde.com');
                $mail->AddBCC('suyash.pande@mitsde.com');
                $mail->AddBCC('teamenrollment@mitsde.com');




                //$mail->AddAttachment("sept12120568.pdf");      // attachment
                //$mail->AddAttachment("images/phpmailer_mini.gif"); // attachment
            
                $mail->Send();
                //------------------------------Failure Mail END----------------------------------------
                $emailquery = mysql_query("INSERT INTO email_tracker (id, emailid, pagename, email_status, data_time) VALUES (NULL, '" . $StudentEmailID[1] . "', 'OtherFeesPaymenticici', 'failure', '" . $DT . "')");
                //---------------------------------------FOR DELETE FORM TEMP TABLE----------------------
            
                $deletetemp = mysql_query("DELETE FROM `temp` WHERE T_LeadID='" . $LeadID[1] . "' and tranID='" . $oderID[1] . "'");
                    //---------------------------------------FOR DELETE FORM TEMP TABLE------END----------------
                

                } else {
                    echo "<br>Security Error. Illegal access detected";

                }

                echo "<br><br>";

                echo "<table cellspacing=4 cellpadding=4>";
                for ($i = 0; $i < $dataSize; $i++) {
                    $information = explode('=', $decryptValues[$i]);
                    //echo '<tr><td>'.$information[0].'</td><td>'.urldecode($information[1]).'</td></tr>';
                }

                echo "</table><br>";
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