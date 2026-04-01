<?php

require_once('phpmailer/class.phpmailer.php');
require_once('phpmailer/class.smtp.php');

$mail = new PHPMailer();


//$mail->SMTPDebug = 3;                               // Enable verbose debug output
$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';                  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'no-replay@mitsde.com';    // SMTP username
$mail->Password = 'NoReplay@123';                         // SMTP password
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                                    // TCP port to connect to

$message = "";
$status = "false";

if( $_SERVER['REQUEST_METHOD'] == 'POST' ) 
{
    if($_POST['form_phone'] != '' AND $_POST['callback'] != '') 
	{

        $name = "Call back";
        $email = "callme@student.com";
       
		$phone= $_POST['form_phone'];
		$SourcePath=$_POST['callback'];
        

        $subject = isset($subject) ? $subject : 'New Message | Call Me Back';

        $botcheck = $_POST['form_botcheck'];

        $toemail = 'abhishek.kalyana@mitsde.com'; // Receiver Email Address
        $toname = 'Call Me Back';                // Receiver Name

        if( $botcheck == '' ) {

            $mail->SetFrom( $email , $name );
            $mail->AddReplyTo( $email , $name );
            $mail->AddAddress( $toemail , $toname );
            $mail->Subject = $subject;

            
			$phone = isset($phone) ? "<b>Mobile</b>: $phone <br><br>" : '';
			$SourcePath = isset($SourcePath) ? "<b>Source Path</b>: $SourcePath<br><br>" : '';
            

            $referrer = $_SERVER['HTTP_REFERER'] ? '<br><br><br>This Form was submitted from: ' . $_SERVER['HTTP_REFERER'] : '';

            $body = "$phone $SourcePath $referrer";

            //mail attachment
            if ( isset($_FILES['form_attachment'] ) && $_FILES['form_attachment']['error'] == UPLOAD_ERR_OK ) {
                $mail->IsHTML(true);
                $mail->AddAttachment( $_FILES['form_attachment']['tmp_name'], $_FILES['form_attachment']['name'] );
            }

            $mail->MsgHTML( $body );
            $sendEmail = $mail->Send();

            if( $sendEmail == true ):
                $message = 'We have <strong>successfully</strong>will get Back to you as soon as possible.';
                $status = "true";
            else:
                $message = 'Email <strong>could not</strong> be sent due to some Unexpected Error. Please Try Again later.<br /><br /><strong>Reason:</strong><br />' . $mail->ErrorInfo . '';
                $status = "false";
            endif;
        } else {
            $message = 'Bot <strong>Detected</strong>.! Clean yourself Botster.!';
            $status = "false";
        }
    } else {
        $message = 'Please <strong>Fill up</strong> all the Fields and Try Again.';
        $status = "false";
    }
} else {
    $message = 'An <strong>unexpected error</strong> occured. Please Try Again later.';
    $status = "false";
}

$status_array = array( 'message' => $message, 'status' => $status);
echo json_encode($status_array);
?>