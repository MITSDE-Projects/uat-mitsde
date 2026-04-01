<?php
include('Crypto_new.php');
// include("admin/include/config.php");
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
//echo "Order ID= ".$orderID[1]."<br>";

$transationID = explode('=', $decryptValues[1]);
$transationID[1];

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
                            if ($i == 3)
                                $order_status = $information[1];
                        }

                        date_default_timezone_set('Asia/Kolkata');
                        $DT = date('Y-m-d H:i:s');
                        $apidataTime = date("Y-m-d H:i:s");

                        if ($order_status === "Success") {

                            $stmt = $conn->prepare("SELECT * FROM temp_ai_transaction WHERE t_process_id = ?");
                            $stmt->execute(array($orderID[1]));
                            $temp1 = $stmt->fetch(PDO::FETCH_ASSOC);

                            if (!$temp1) {
                                die("Invalid Transaction");
                            }

                            $stmt = $conn->prepare("SELECT COUNT(*) FROM ai_transaction WHERE PayU_ID = ?");
                            $stmt->execute(array($transationID[1]));
                            $trchk = $stmt->fetchColumn();

                            $stmt = $conn->prepare("SELECT COUNT(*) FROM ai_transaction WHERE t_process_id = ?");
                            $stmt->execute(array($orderID[1]));
                            $orchk = $stmt->fetchColumn();

                            if ($orchk > 0 || $trchk > 0) {
                                die("ERROR: Duplicate Entry");
                            }

                            if ($temp1['t_process_id'] != $orderID[1] || $temp1['amount'] != $dotamt[0]) {
                                die("ERROR: Invalid Response");

                            } else {

                                try {
                                    $stmt = $conn->prepare("INSERT INTO ai_transaction
                                    (name,email,phone,institution,pagename,reg_id,experience,amount,PayU_ID,t_process_id,DT,type)
                                    VALUES (?,?,?,?,?,?,?,?,?,?,?,?)");

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
                                        $DT,
                                        "workshop"
                                    ));

                                    $stmt = null; // close PDO statement
                        
                                } catch (PDOException $e) {
                                    die("Insert Failed: " . $e->getMessage());
                                }
                                /*-----------------------update in database------------------------ */

                                echo "<br><h3>Thank You for Payment.</h3>";

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
                                <p>Hello <?php echo $StudentName[1]; ?></p>

                                <p>Thank you for making your payment. It will take two working days to credit your payment into
                                    our system.</p> </br>

                                <p>Your Transaction ID for this payment is <?php echo $transationID[1]; ?>
                                <p>Your Fee Paid Amount is : <?php echo $Fees[1]; ?> </p>

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
                                $mail->Username = "AKIA5OQ6466FQH7J437A";  // GMAIL username
                                $mail->Password = "BNuSqYkuMXY6D9OqA7Gp4ABHK3LSIPUBoII+233SV+kC";            // GMAIL password
                        
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
                                $mail->AddBCC('bhagyashree.p@mitsde.com');
                                $mail->AddBCC('madhura.kulkarni@mitsde.com');
                                $mail->AddBCC('vrushali.bansode@mitsde.com');
                        



                                //$mail->AddAttachment("sept12120568.pdf");      // attachment
                                // //$mail->AddAttachment("images/phpmailer_mini.gif"); // attachment
                        
                                $mail->Send();
                                //------------------------------Success Mail END----------------------------------------
                        
                                $stmt = $conn->prepare("INSERT INTO email_tracker (emailid, pagename, email_status, data_time) VALUES (?, ?, ?, ?)");
                                $email_page = 'faculty-Workshop';
                                $email_stat = 'success';
                                $stmt->execute([
                                    $StudentEmailID[1],
                                    $email_page,
                                    $email_stat,
                                    $DT
                                ]);
                                // --------------------------------------- DELETE FROM TEMP TABLE ----------------------
                                $stmt = $conn->prepare("DELETE FROM temp_ai_transaction WHERE email = ? AND t_process_id = ?");
                                $stmt->execute([
                                    $StudentEmailID[1],
                                    $orderID[1]
                                ]);
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
                                $mail->Username = "AKIA5OQ6466FQH7J437A";  // GMAIL username
                                $mail->Password = "BNuSqYkuMXY6D9OqA7Gp4ABHK3LSIPUBoII+233SV+kC";            // GMAIL password
                            
                                $mail->SetFrom('admissions@mitsde.com', 'MIT-School of Distance Education');

                                $mail->AddReplyTo('admissions@mitsde.com', 'No-Reply');

                                $mail->Subject = "Canceled This Transaction for Paid Workshop";

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
                            
                                $stmt = $conn->prepare("INSERT INTO email_tracker (emailid, pagename, email_status, data_time) VALUES (?, ?, ?, ?)");
                                $email_page = 'faculty-Workshop';
                                $email_stat = 'abort';
                                $stmt->execute([
                                    $StudentEmailID[1],
                                    $email_page,
                                    $email_stat,
                                    $DT
                                ]);
                                // --------------------------------------- DELETE FROM TEMP TABLE ----------------------
                                $stmt = $conn->prepare("DELETE FROM temp_ai_transaction WHERE email = ? AND t_process_id = ?");
                                $stmt->execute([
                                    $StudentEmailID[1],
                                    $orderID[1]
                                ]);
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
                                $mail->Username = "AKIA5OQ6466FQH7J437A";  // GMAIL username
                                $mail->Password = "BNuSqYkuMXY6D9OqA7Gp4ABHK3LSIPUBoII+233SV+kC";            // GMAIL password
                            
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
                            
                                $stmt = $conn->prepare("INSERT INTO email_tracker (emailid, pagename, email_status, data_time) VALUES (?, ?, ?, ?)");
                                $email_page = 'faculty-Workshop';
                                $email_stat = 'failure';
                                $stmt->execute([
                                    $StudentEmailID[1],
                                    $email_page,
                                    $email_stat,
                                    $DT
                                ]);
                                // --------------------------------------- DELETE FROM TEMP TABLE ----------------------
                                $stmt = $conn->prepare("DELETE FROM temp_ai_transaction WHERE email = ? AND t_process_id = ?");
                                $stmt->execute([
                                    $StudentEmailID[1],
                                    $orderID[1]
                                ]);
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
                        echo "<div class='mt-3'><a href='https://mitsde.com' class='btn btn-primary'>Visit our website</a></div>";
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