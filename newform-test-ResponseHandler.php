<?php
include('Crypto_new.php');
include('admin/include/config.php');
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
//echo "Order ID= ".$orderID[1]."<br>";

$transationID = explode('=', $decryptValues[1]);
$transationID[1];

$LeadID = explode('=', $decryptValues[28]);
$LeadID[1];

//  $Specialization=explode('=',$decryptValues[29]); // specilizaiton id merchant_param4
//  $Specialization[1];

$consellername = explode('=', $decryptValues[29]); //$decryptValues[27] consellername id merchant_param5 but for test now merchant_param4
$consellername[1];

$amt = explode('=', $decryptValues[10]);
$amt[1];

$dotamt = explode('.', $amt[1]);
$dotamt[0];




?>
<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>

    <!-- Meta Tags -->
    <!-- Meta Tags -->
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

        <!-- Start main-content -->
        <div class="main-content">
            <!-- Section: inner-header -->


            <section>
                <div class="container">
                    <div class="row">

                        <?php



                        echo "<center>";

                        for ($i = 0; $i < $dataSize; $i++) {
                            $information = explode('=', $decryptValues[$i]);
                            if ($i == 3) {
                                $order_status = $information[1];

                            }

                        }
                        $DT = date('Y-m-d H:i:s');
                                $apidataTime = date("Y-m-d H:i:s");

                        //$order_status = "Success";
                        

                        if ($order_status === "Success") {

                            $leadMessage;

                            //echo "</br>result_msg-----> success function";
                            //  echo "</br>select * from temp where T_LeadID='".$LeadID[1]."' and tranID='".$orderID[1]."'";
                            // echo "</br>select * from temp_erp where tranID='" . $orderID[1] . "'";
                            $temp = mysql_query("select * from temp_erp where tranID='" . $orderID[1] . "'");
                            $temp1 = mysql_fetch_array($temp);

                           
                            $temp1['T_LeadID'];
                            $temp1['tranID']; // order id
                            $temp1['student_name'];
                            $fullname = explode(' ', $temp1['student_name']);
                                $firstname = $fullname[0]; //first name
                                $lastname = $fullname[1];  // last name
                            $temp1['email_id'];
                            $temp1['phone'];
                            $temp1['gender'];
                            $gender = $temp1['gender'];

                            if ($gender == "M") {
                                $salutationid = 1;
                            } else if ($gender == "F") {
                                $salutationid = 2;
                            }

                            $temp1['course'];
                            $courseinfo = explode('_', $temp1['course']);
                            $course_id = $courseinfo[0]; //course id
                            
                            $temp1['SpecializationID'];
                            
                            $coursequery = mysql_query("select NewCourseERP.CourseName, NewCourseERP.duration, NewERPSpecialization.SpecializationName from NewCourseERP,NewERPSpecialization where NewCourseERP.CourseID ='" . $course_id . "' AND NewERPSpecialization.CourseID ='" . $course_id . "' AND NewERPSpecialization.SpecializationID ='" . $temp1['SpecializationID'] . "'");
                            $scourse = mysql_fetch_array($coursequery);
                            $course_Name=$scourse['CourseName'];
                            $Specialization_Name=$scourse['SpecializationName'];
                            $duration=$scourse['duration'];

                            $temp1['password'];
                            
                            $temp1['fees_type'];
                            $x = explode('_', $temp1['fees_type']);
                            $feeheadid = $x[0]; //fee head id
                            $description = $x[1];  // description
                            $temp1['T_B_Amount'];
                            $orderID[1];
                            $dotamt[0];
                            $temp1['old_counselorName'];
                            $temp1['new_counselorName'];
                            $temp1['flag'];

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
                                "CounsellorEmailId" => $consellername[1],
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
                                    'Authorization: Bearer ZW4zzvH3fXC6EjK3ckB-0hUzhSa6N483ysOvJzlCen4mRmwTGscXLbWRCcb8KTQrFX6GNt5g4bVTDIpUrBcGvs16Dv54yh9W4GT9lEfLj119q4jvqoR9lDEHxJYPIdmB-AfSRixDUCR5ljWYUAXzoGgCl8K6Qml8hdt5JL_hYeAv2X2r-SZ4XsXKf2XmV7Qy67aQXviDYucY6DSCLTZ6ZuozIhJP1vGgbwpkzcoU1NhfP5I1BZZuUETxDjYibW7KwQMK_3uIvSmyu_NczyWN5JrQDTE8DJHzMhyr2jvtFrWvbcYE6KlVrdD1PiflGvvNTw1_dszR_MYHD2MUgkTUlVo6_LBhgFVRSlCVCdUiI6-TMwXWxWx9DwjYvU8W8edydR1lM3pkl1_Yef-HGiP-Zqsj01sbTBPTgA3YYK9s0X4W0T2C5u77lQVwMNeaxhtsWxY6QOumk6ulmUVyiBvSGlFS0rS-jzjD9JsYStzG0Z0',
                                    'Content-Type: application/json'
                                ),
                            ));

                            $resp = curl_exec($curl);
                            $response1 = json_decode($resp, true);

                            // if ($response1['Message'] == "Authorization has been denied for this request.") {
                            //     $leadMessage = $response1['Message'];
                            //     echo "</></br><center>Authorization has been denied for this request.</center>";
                            // }
                         // echo "</br>result_msg lead push----->";
                            // print_r($response1);
                            // echo "</br>ResultMessage----->" . $response1['ResultMessage'];
                        
                            // //die();
                        
                            // if ($response1['ResultMessage'] != "Lead saved successfully and login details sent on your registered email id.") {
                                
                            //     $leadMessage = $response1['ResultMessage'];
                            //     echo "</br></br><center>" . $response1['ResultMessage'] . "</center>";
                            // }

                            $leadMessage = $response1['ResultMessage'];

                            /* ----------uat lead insertion-----------*/

                            //die();
                        
                            $trchk = mysql_num_rows(mysql_query("select * from New_erp_student_admission_transaction where `PayU_ID`='" . $transationID[1] . "'"));
                            $orchk = mysql_num_rows(mysql_query("select * from New_erp_student_admission_transaction where `t_process_id`='" . $orderID[1] . "'"));


                            if ($orchk > 0 || $trchk > 0) {
                                echo "ERROR: Duplicate Entry<br>";
                            } elseif ($temp1['tranID'] != $orderID[1] || $temp1['T_B_Amount'] != $dotamt[0]) {
                                echo "ERROR: Invalid Response (orderID or Amount not matching)<br>";

                            } else {

                                /*$temp1['fees_type'];
                                $x = explode('_', $temp1['fees_type']);
                                $feeheadid = $x[0]; //fee head id
                                $description = $x[1];  // description
                                $ReceiptType = "PRF";*/
                                
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
                                    "FeeType" => "PRF",
                                    "TransactionNo" => $InstruNo,
                                    "ReceiptAmount" => $PaidAmount,
                                    "ReceiptDate" => $curdate,
                                    "FeeHeadId" => "",
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

                                        'Authorization: Bearer ZW4zzvH3fXC6EjK3ckB-0hUzhSa6N483ysOvJzlCen4mRmwTGscXLbWRCcb8KTQrFX6GNt5g4bVTDIpUrBcGvs16Dv54yh9W4GT9lEfLj119q4jvqoR9lDEHxJYPIdmB-AfSRixDUCR5ljWYUAXzoGgCl8K6Qml8hdt5JL_hYeAv2X2r-SZ4XsXKf2XmV7Qy67aQXviDYucY6DSCLTZ6ZuozIhJP1vGgbwpkzcoU1NhfP5I1BZZuUETxDjYibW7KwQMK_3uIvSmyu_NczyWN5JrQDTE8DJHzMhyr2jvtFrWvbcYE6KlVrdD1PiflGvvNTw1_dszR_MYHD2MUgkTUlVo6_LBhgFVRSlCVCdUiI6-TMwXWxWx9DwjYvU8W8edydR1lM3pkl1_Yef-HGiP-Zqsj01sbTBPTgA3YYK9s0X4W0T2C5u77lQVwMNeaxhtsWxY6QOumk6ulmUVyiBvSGlFS0rS-jzjD9JsYStzG0Z0',

                                        'Content-Type: application/json'

                                    ],

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
                        
                                    $paymentMessage = $responseData['ResultMessage'] ?: "Receipt saved successfully.";



                                    if ($apiResult === true) {
                                       //echo "</br>INSERT INTO `New_erp_student_admission_transaction` (`othr_id`, `leadID`, `name`, `email`, `phone`, `gender`, `CourseName`,`SpecializationID`,`password`, `FeeHeadID`, `FeesType`, `ReceiptType`, `amount`, `PayU_ID`, `payment_source`, `PayerBankID`, `transationDate`, `t_process_id`, `UTRNO`, `payment_confirmation_status`, `PayeeInstituteID`, `PayeeBankID`, `PayeeACNo`, `PayeeACName`, `PayeeBranch`, `PayeeBankAddress`, `PayeeIFSCCode`, `S_Flag`, `response`, `response2`, `F_Flag`,`API_DT`, `old_counselorName`, `new_counselorName`, `flag`,`counseller_email`,`DT`) VALUES (NULL, '" . $leadid . "', '" . $temp1['student_name'] . "', '" . $temp1['email_id'] . "','" . $temp1['phone'] . "','" . $temp1['gender'] . "', '" . $temp1['course'] . "','" . $temp1['SpecializationID'] . "','" . $temp1['password'] . "', '" . $feeheadid . "', '" . $description . "','PRF','" . $dotamt[0] . "','" . $transationID[1] . "', 'HDFC','1', '" . $curdate . "','" . $orderID[1] . "', NULL, 'Not Verify', '16', '1', '50100267576292', 'Pune', 'Mayur Colony Kothrud Pune name', 'Mayur Colony Kothrud Pune address', 'HDFC0000149', '1', '" . $paymentMessage . "', '" . $leadMessage . "', '1','" . $apidataTime . "','" . $temp1['old_counselorName'] . "','" . $temp1['new_counselorName'] . "','1','" . $consellername[1] . "','" . $DT . "')";
                                        //$updateQuery = "INSERT INTO `New_erp_student_admission_transaction` (`othr_id`, `leadID`, `name`, `email`, `phone`, `gender`, `CourseName`,`SpecializationID`,`password`, `FeeHeadID`, `FeesType`, `ReceiptType`, `amount`, `PayU_ID`, `payment_source`, `PayerBankID`, `transationDate`, `t_process_id`, `UTRNO`, `payment_confirmation_status`, `PayeeInstituteID`, `PayeeBankID`, `PayeeACNo`, `PayeeACName`, `PayeeBranch`, `PayeeBankAddress`, `PayeeIFSCCode`, `S_Flag`, `response`, `response2`, `F_Flag`,`API_DT`, `old_counselorName`, `new_counselorName`, `flag`,`counseller_email`,`DT`) VALUES (NULL, '" . $leadid . "', '" . $temp1['student_name'] . "', '" . $temp1['email_id'] . "','" . $temp1['phone'] . "','" . $temp1['gender'] . "', '" . $temp1['course'] . "','" . $temp1['SpecializationID'] . "','" . $temp1['password'] . "', '" . $feeheadid . "', '" . $description . "','PRF','" . $dotamt[0] . "','" . $transationID[1] . "', 'HDFC','1', '" . $curdate . "','" . $orderID[1] . "', NULL, 'Not Verify', '16', '1', '50100267576292', 'Pune', 'Mayur Colony Kothrud Pune name', 'Mayur Colony Kothrud Pune address', 'HDFC0000149', '1', '" . $paymentMessage . "', '" . $leadMessage . "', '1','" . $apidataTime . "','" . $temp1['old_counselorName'] . "','" . $temp1['new_counselorName'] . "','1','" . $consellername[1] . "','" . $DT . "')";
                                        //echo "</br>UPDATE `New_erp_student_admission_transaction` SET `FeeHeadID`='".$feeheadid."',`FeesType`= '".$description."' ,`ReceiptType`='PRF',`amount`='".$dotamt[0]."',`PayU_ID`= '".$transationID[1]."',`payment_source`='HDFC',`PayerBankID`='1',`transationDate`='".$curdate."',`t_process_id`='".$orderID[1]."',`UTRNO`=NULL,`payment_confirmation_status`='Not Verify',`PayeeInstituteID`='16',`PayeeBankID`='1',`PayeeACNo`='50100267576292',`PayeeACName`='Pune',`PayeeBranch`='Mayur Colony Kothrud Pune name',`PayeeBankAddress`='Mayur Colony Kothrud Pune address',`PayeeIFSCCode`='HDFC0000149',`S_Flag`='1',`response`= '".$paymentMessage."',`response2`= '".$leadMessage."',`F_Flag`='1',`API_DT`= '".$apidataTime."',`old_counselorName`= '".$temp1['old_counselorName']."',`new_counselorName`= '".$temp1['new_counselorName']."',`flag`='1',`DT`= '".$DT."' WHERE `leadID` = '".$leadid."'";
                                        $updateQuery = "UPDATE `New_erp_student_admission_transaction` SET `FeeHeadID`='".$feeheadid."',`FeesType`= '".$description."' ,`ReceiptType`='PRF',`amount`='".$dotamt[0]."',`PayU_ID`= '".$transationID[1]."',`payment_source`='HDFC',`PayerBankID`='1',`transationDate`='".$curdate."',`t_process_id`='".$orderID[1]."',`UTRNO`=NULL,`payment_confirmation_status`='Not Verify',`PayeeInstituteID`='16',`PayeeBankID`='1',`PayeeACNo`='50100267576292',`PayeeACName`='Pune',`PayeeBranch`='Mayur Colony Kothrud Pune name',`PayeeBankAddress`='Mayur Colony Kothrud Pune address',`PayeeIFSCCode`='HDFC0000149',`S_Flag`='1',`response`= '".$paymentMessage."',`response2`= '".$leadMessage."',`F_Flag`='1',`API_DT`= '".$apidataTime."',`old_counselorName`= '".$temp1['old_counselorName']."',`new_counselorName`= '".$temp1['new_counselorName']."',`flag`='1',`DT`= '".$DT."' WHERE `leadID` = '".$leadid."'";
                                        mysql_query($updateQuery) or die('</br>Error, insert query failed True');

                                    } else {
                                        // echo "</br>INSERT INTO `New_erp_student_admission_transaction` (`othr_id`, `leadID`, `name`, `email`, `phone`, `gender`, `CourseName`,`SpecializationID`,`password`, `FeeHeadID`, `FeesType`, `ReceiptType`, `amount`, `PayU_ID`, `payment_source`, `PayerBankID`, `transationDate`, `t_process_id`, `UTRNO`, `payment_confirmation_status`, `PayeeInstituteID`, `PayeeBankID`, `PayeeACNo`, `PayeeACName`, `PayeeBranch`, `PayeeBankAddress`, `PayeeIFSCCode`, `S_Flag`, `response`, `response2`, `F_Flag`,`API_DT`, `old_counselorName`, `new_counselorName`, `flag`,`counseller_email`,`DT`) VALUES (NULL, '" . $leadid . "', '" . $temp1['student_name'] . "', '" . $temp1['email_id'] . "','" . $temp1['phone'] . "','" . $temp1['gender'] . "', '" . $temp1['course'] . "','" . $temp1['SpecializationID'] . "','" . $temp1['password'] . "', '" . $feeheadid . "', '" . $description . "','PRF','" . $dotamt[0] . "','" . $transationID[1] . "', 'HDFC','1', '" . $curdate . "','" . $orderID[1] . "', NULL, 'Not Verify', '16', '1', '50100267576292', 'Pune', 'Mayur Colony Kothrud Pune name', 'Mayur Colony Kothrud Pune address', 'HDFC0000149', '0', '" . $paymentMessage . "', '" . $leadMessage . "', '0','" . $apidataTime . "','" . $temp1['old_counselorName'] . "','" . $temp1['new_counselorName'] . "','0','" . $consellername[1] . "','" . $DT . "')";
                                        //$updateQuery = "INSERT INTO `New_erp_student_admission_transaction` (`othr_id`, `leadID`, `name`, `email`, `phone`, `gender`, `CourseName`,`SpecializationID`,`password`, `FeeHeadID`, `FeesType`, `ReceiptType`, `amount`, `PayU_ID`, `payment_source`, `PayerBankID`, `transationDate`, `t_process_id`, `UTRNO`, `payment_confirmation_status`, `PayeeInstituteID`, `PayeeBankID`, `PayeeACNo`, `PayeeACName`, `PayeeBranch`, `PayeeBankAddress`, `PayeeIFSCCode`, `S_Flag`, `response`, `response2`, `F_Flag`,`API_DT`, `old_counselorName`, `new_counselorName`, `flag`,`counseller_email`,`DT`) VALUES (NULL, '" . $leadid . "', '" . $temp1['student_name'] . "', '" . $temp1['email_id'] . "','" . $temp1['phone'] . "','" . $temp1['gender'] . "', '" . $temp1['course'] . "','" . $temp1['SpecializationID'] . "','" . $temp1['password'] . "', '" . $feeheadid . "', '" . $description . "','PRF','" . $dotamt[0] . "','" . $transationID[1] . "', 'HDFC','1', '" . $curdate . "','" . $orderID[1] . "', NULL, 'Not Verify', '16', '1', '50100267576292', 'Pune', 'Mayur Colony Kothrud Pune name', 'Mayur Colony Kothrud Pune address', 'HDFC0000149', '0', '" . $paymentMessage . "', '" . $leadMessage . "', '0','" . $apidataTime . "','" . $temp1['old_counselorName'] . "','" . $temp1['new_counselorName'] . "','0','" . $consellername[1] . "','" . $DT . "')";
                                        //echo "</br>UPDATE `New_erp_student_admission_transaction` SET `FeeHeadID`='".$feeheadid."',`FeesType`= '".$description."' ,`ReceiptType`='PRF',`amount`='".$dotamt[0]."',`PayU_ID`= '".$transationID[1]."',`payment_source`='HDFC',`PayerBankID`='1',`transationDate`='".$curdate."',`t_process_id`='".$orderID[1]."',`UTRNO`=NULL,`payment_confirmation_status`='Not Verify',`PayeeInstituteID`='16',`PayeeBankID`='1',`PayeeACNo`='50100267576292',`PayeeACName`='Pune',`PayeeBranch`='Mayur Colony Kothrud Pune name',`PayeeBankAddress`='Mayur Colony Kothrud Pune address',`PayeeIFSCCode`='HDFC0000149',`S_Flag`='1',`response`= '".$paymentMessage."',`response2`= '".$leadMessage."',`F_Flag`='1',`API_DT`= '".$apidataTime."',`old_counselorName`= '".$temp1['old_counselorName']."',`new_counselorName`= '".$temp1['new_counselorName']."',`flag`='0',`DT`= '".$DT."' WHERE `leadID` = '".$leadid."'";
                                        $updateQuery = "UPDATE `New_erp_student_admission_transaction` SET `FeeHeadID`='".$feeheadid."',`FeesType`= '".$description."' ,`ReceiptType`='PRF',`amount`='".$dotamt[0]."',`PayU_ID`= '".$transationID[1]."',`payment_source`='HDFC',`PayerBankID`='1',`transationDate`='".$curdate."',`t_process_id`='".$orderID[1]."',`UTRNO`=NULL,`payment_confirmation_status`='Not Verify',`PayeeInstituteID`='16',`PayeeBankID`='1',`PayeeACNo`='50100267576292',`PayeeACName`='Pune',`PayeeBranch`='Mayur Colony Kothrud Pune name',`PayeeBankAddress`='Mayur Colony Kothrud Pune address',`PayeeIFSCCode`='HDFC0000149',`S_Flag`='1',`response`= '".$paymentMessage."',`response2`= '".$leadMessage."',`F_Flag`='1',`API_DT`= '".$apidataTime."',`old_counselorName`= '".$temp1['old_counselorName']."',`new_counselorName`= '".$temp1['new_counselorName']."',`flag`='1',`DT`= '".$DT."' WHERE `leadID` = '".$leadid."'";
                                        mysql_query($updateQuery) or die('</br>Error, insert query failed f');

                                    }

                                } else {

                                    echo "Error: Invalid API response.";

                                }

                                die();

                                /*-----------------------update in database------------------------ */


                                echo "<table cellspacing=4 cellpadding=4>";

                                echo "</br>------------------New Admission Fee Payment Details----------------------";

                                $StudentName = explode('=', $decryptValues[19]);

                                echo '</br><tr><td>Student Name :</td><td>' . $StudentName[1] . '</td></tr>';

                                $StudentEmailID = explode('=', $decryptValues[18]);

                                echo '<tr><td>Email ID :</td><td>' . $StudentEmailID[1] . '</td></tr>';

                                $StudentMob = explode('=', $decryptValues[25]);

                                echo '<tr><td>Mobile No :</td><td>' . $StudentMob[1] . '</td></tr>';

                                // $Studentcours = explode('=', $decryptValues[26]);
                        
                                // echo '<tr><td>Selected Program :</td><td>' . $Studentcours[1] . '</td></tr>';
                        
                                $StudentFeesType = explode('=', $decryptValues[27]);

                                echo '<tr><td>Fees Type :</td><td>New Admission</td></tr>';

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
                                <p>Hello <?php echo $StudentName[1]; ?>,<br>
                                    Congratulations!</p>
                                <p>We would like to take this moment to thank you for successfully submitting your application
                                    with MIT-School of Distance Education.
                                    We wish to confirm the receipt of the payment towards the admission process.</p>
                                <p>Your Transaction ID for this payment is <?php echo $transationID[1]; ?>
                                <p>If you have any questions, please contact your counselor at <?php echo $consellername[1]; ?></p>
                                <p><b>Please Find below details confirmed by you before making the payment:-</b></p>
                                <table border="1">
                                    <tr>
                                        <td>
                                            <p>1) Course & Specialization- <b><?php echo $course_Name." in ".$Specialization_Name." " ?> (<?php echo $duration; ?>)</b></p>
                                            <p>2) Amount Paid –INR <b><?php echo $Fees[1]; ?> /-</b></p>
                                            <p>3) Payment Option -
                                                <b><?php echo $description;
                                                if ($description == "Installment")
                                                    echo "\x20(Next Installment needs to be paid within 3 months duration from first payment.)"; ?></b>
                                            </p>
                                            <p>4) Exam fees – INR 500 per paper (if applicable for the course, payable at the time of examination)</p>
                                            <p>5) Project fees- INR 1500 (If applicable for the course, payable at the time of submitting the project)</p>

                                            <p>Referral Policy*</p>
                                            <p>When you refer your friend to take any program at MITSDE, then you are eligible for a referral benefit of INR 4,000 and your friend is eligible for INR 2,000/-</p>
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
                                //$mail->IsMail(); // telling the class to use SMTP
                                $mail->SMTPDebug = 0;                     // enables SMTP debug information (for testing) // 1 = errors and messages
                                // $mail->SMTPSecure = "ssl";                 // sets the prefix to the servier                                          // 2 = messages only
                                $mail->SMTPAuth = true;                  // enable SMTP authentication
                                $mail->SMTPSecure = "tls";                 // sets the prefix to the servier
                                $mail->Host = "email-smtp.us-east-1.amazonaws.com";      // sets GMAIL as the SMTP server
                                $mail->Port = 2587;                   // set the SMTP port for the GMAIL
                                $mail->Username = "AKIA5OQ6466FZWEYNNVJ";  // GMAIL username
                                $mail->Password = "BB8uQenn6fCEjW791mFxeUgQ39xwI/9PEBDPz7uasG58";            // GMAIL password
                                
                              /*  $mail->IsSMTP(); // telling the class to use SMTP
                            $mail->SMTPDebug  = 0;                     // enables SMTP debug information (for testing) // 1 = errors and messages
                        // $mail->SMTPSecure = "ssl";                 // sets the prefix to the servier                                          // 2 = messages only
                          $mail->SMTPAuth   = true;                  // enable SMTP authentication
                        $mail->SMTPSecure = "tls";                 // sets the prefix to the servier
                        $mail->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
                        $mail->Port       = 587;                   // set the SMTP port for the GMAIL
                       $mail->Username   = "erp@mitsde.com";  // GMAIL username
                        $mail->Password   = "kwgpfovauzumwrwv";      */     // GMAIL password           // GMAIL password
                        
                                $mail->SetFrom('admissions@mitsde.com', 'MIT-School of Distance Education');

                                $mail->AddReplyTo('admissions@mitsde.com', 'No-Reply');

                                $mail->Subject = "Your application with MIT SDE";

                                $mail->AltBody = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test
                        
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




                                //$mail->AddAttachment("sept12120568.pdf");      // attachment
                                // //$mail->AddAttachment("images/phpmailer_mini.gif"); // attachment
                        
                                $mail->Send();
                                //------------------------------Success Mail END----------------------------------------
                        $emailquery = mysql_query("INSERT INTO email_tracker (id, emailid, pagename, email_status, data_time) VALUES (NULL, '" . $StudentEmailID[1] . "', 'new-admission-form-payment', 'success', '" . $DT . "')");

                                //---------------------------------------FOR DELETE FORM TEMP TABLE----------------------
                                $deletetemp = mysql_query("DELETE FROM `temp_erp` WHERE T_LeadID='" . $LeadID[1] . "' and tranID='" . $orderID[1] . "'");
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

                            echo '<tr><td>Fees Type :</td><td>New Admission</td></tr>';

                            $Fees = explode('=', $decryptValues[35]);

                            echo '<tr><td>Pay Fee :</td><td>' . $Fees[1] . '</td></tr>';

                            $Payment_status = explode('=', $decryptValues[3]);

                            echo '<tr><td>Payment Status :</td><td style="color:red">' . $Payment_status[1] . '</td></tr>';

                            echo "</table><br>";


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
                                $mail->AddBCC('raj.marathe@mitsde.com');
                                //$mail->AddBCC('teamfeecollections@mitsde.com');
                            




                                //$mail->AddAttachment("sept12120568.pdf");      // attachment
                                //$mail->AddAttachment("images/phpmailer_mini.gif"); // attachment
                            
                                $mail->Send();
                                //------------------------------Aborted Mail END----------------------------------------
                            $emailquery = mysql_query("INSERT INTO email_tracker (id, emailid, pagename, email_status, data_time) VALUES (NULL, '" . $StudentEmailID[1] . "', 'new-admission-form-payment', 'abort', '" . $DT . "')");
                                //---------------------------------------FOR DELETE FORM TEMP TABLE----------------------
                                $deletetemp = mysql_query("DELETE FROM `temp_erp` WHERE T_LeadID='" . $LeadID[1] . "' and tranID='" . $orderID[1] . "'");
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

                            // $Studentcours = explode('=', $decryptValues[26]);
                        
                            // echo '<tr><td>Course :</td><td>' . $Studentcours[1] . '</td></tr>';
                        
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
                                $mail->IsSMTP(); // telling the class to use SMTP
                                // $mail->Mailer = "mail";
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

                                $mail->Subject = "Current Transaction is Failed";

                                $mail->AltBody = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test
                            
                                $mail->MsgHTML($body);
                                $mail->SetLanguage("en", 'includes/phpMailer/language/');
                                $address = $StudentEmailID[1];
                                $mail->AddAddress($address);



                                $mail->AddBCC('sanjay.gaikwad@mitsde.com');
                                $mail->AddBCC('raj.marathe@mitsde.com');
                                //$mail->AddBCC('teamfeecollections@mitsde.com');
                            




                                //$mail->AddAttachment("sept12120568.pdf");      // attachment
                                //$mail->AddAttachment("images/phpmailer_mini.gif"); // attachment
                            
                                $mail->Send();
                                //------------------------------Failure Mail END----------------------------------------
                            $emailquery = mysql_query("INSERT INTO email_tracker (id, emailid, pagename, email_status, data_time) VALUES (NULL, '" . $StudentEmailID[1] . "', 'new-admission-form-payment', 'failure', '" . $DT . "')");
                                //---------------------------------------FOR DELETE FORM TEMP TABLE----------------------
                            
                                $deletetemp = mysql_query("DELETE FROM `temp_erp` WHERE T_LeadID='" . $LeadID[1] . "' and tranID='" . $orderID[1] . "'");
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