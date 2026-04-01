<?php
include('smtp/PHPMailerAutoload.php');
$html='Msg';
echo smtp_mailer('sanjaygaikwadinfo@gmail.com','subject',$html);
function smtp_mailer($to,$subject, $msg){
	$mail = new PHPMailer(); 
	$mail->SMTPDebug  = 3;
	$mail->IsSMTP(); 
	$mail->SMTPAuth = true; 
	$mail->SMTPSecure = 'tls'; 
	$mail->Host = "smtp.gmail.com";
	$mail->Port = 587; 
	$mail->IsHTML(true);
	$mail->CharSet = 'UTF-8';
	$mail->Username = 'no-replay@mitsde.com';
	$mail->Password = 'NoReplay@123';
	$mail->SetFrom("no-replay@mitsde.com");
	$mail->Subject = $subject;
	$mail->Body =$msg;
	$mail->AddAddress($to);
	$mail->AddCC('sanjaygaikwad2009@gmail.com');
	$mail->AddCC('sanjay.gaikwad@mitsde.com');
	$mail->AddCC('mohan.patil@mitsde.com');
	$mail->AddCC('pallavi.patil@mitsde.com');
	
	$mail->SMTPOptions=array('ssl'=>array(
		'verify_peer'=>false,
		'verify_peer_name'=>false,
		'allow_self_signed'=>false
	));
	if(!$mail->Send()){
		echo $mail->ErrorInfo;
	}else{
		return 'Sent';
	}
}
?>