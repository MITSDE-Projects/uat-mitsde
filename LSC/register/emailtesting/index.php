<?php
require 'class.phpmailer.php'; 
require 'class.smtp.php'; 

                  $mail  = new PHPMailer();
                 ob_start(); //Turn on output buffering
$email = 'vasudev.phulambrikar@avantika.edu.in';



                 ?>

                 <p>Hello <?php echo $firstname; ?>,<br>
                 Congratulations!</p>
                  <p>We would like to take this moment to thank you for successfully submitting your application with DAT.
                     We wish to confirm the receipt of the payment towards the admission process.</p>
                  <p>Your Transaction ID for this transaction is
                  <p>If you have any questions, please contact us at admissions@dat.net.in</p>
                  <p>Your Fee Paid Amount</p> <br />
                  <p>Thank you and see you soon.<br>
                  Regards,<br>
                  <b>Team DAT</b></p>


                 <?php
                   $body  = ob_get_clean();
                          $mail->IsSMTP(); // telling the class to use SMTP
                          $mail->SMTPDebug  = 0;                     // enables SMTP debug information (for testing) // 1 = errors and messages
                        // $mail->SMTPSecure = "ssl";                 // sets the prefix to the servier                                          // 2 = messages only
                         $mail->SMTPAuth   = true;                  // enable SMTP authentication
                        $mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
                        $mail->Host       = "dat.net.in";      // sets GMAIL as the SMTP server
                        $mail->Port       = 465;                   // set the SMTP port for the GMAIL
                        $mail->Username   = "admissions@dat.net.in";  // GMAIL username
                        $mail->Password   = "Dat@2017#";            // GMAIL password
                        //$mail->g_smtp_host = 'smtp.gmail.com:465';
                        //$mail->g_smtp_connection_mode = 'ssl';
                       
                        $mail->SetFrom('admissions@dat.net.in', 'MIT-DAT');
                       
                        $mail->AddReplyTo('admissions@dat.net.in', 'No-Replay');
                       
                        $mail->Subject    = "TEST EMAIL";
                       
                        $mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test
                       
                        $mail->MsgHTML($body);
                       // $mail->SetLanguage("en", 'includes/phpMailer/language/');
                        $address = $email;
                        $mail->AddAddress($address);
                        //$mail->AddCC('anees.shaikh@avantika.edu.in');
                       // $mail->AddBCC('anees.shaikh@mitsde.com');
                       
                        //$mail->AddAttachment("sept12120568.pdf");      // attachment
                        //$mail->AddAttachment("images/phpmailer_mini.gif"); // attachment
                       
                        $mail->Send();

?>