<?php
function BitUrlGen($longUrl)
{
// Get API key from : http://code.google.com/apis/console/
$apiKey = 'AIzaSyBiP7g49DooGCrUbIHFmR_SZyyVDEVzIUE';

$postData = array('longUrl' => $longUrl);
$jsonData = json_encode($postData);

$curlObj = curl_init();

curl_setopt($curlObj, CURLOPT_URL, 'https://www.googleapis.com/urlshortener/v1/url?key='.$apiKey);
curl_setopt($curlObj, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curlObj, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($curlObj, CURLOPT_HEADER, 0);
curl_setopt($curlObj, CURLOPT_HTTPHEADER, array('Content-type:application/json'));
curl_setopt($curlObj, CURLOPT_POST, 1);
curl_setopt($curlObj, CURLOPT_POSTFIELDS, $jsonData);

$response = curl_exec($curlObj);

// Change the response json string to object
$json = json_decode($response);

curl_close($curlObj);

print_r($json);
$shortLink = get_object_vars($json);
return $shortLink['id'];
}

function SendMailAvantika($to,$body,$subject)
{
			
			$headers = "MIME-Version: 1.0" . "\r\n";
			$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
			$headers .= 'From: MITSDE Admissions - 2017<admissions@mitsde.com>' . "\r\n";
			$headers .= 'To: <'.$to.'>' . "\r\n";
			$headers .= 'bcc: sanjay.gaikwad@mitsde.com' ."\r\n";
			$headers .= 'cc: sanjay.gaikwad@mitsde.com' ."\r\n";
			mail($to,$subject,$body,$headers);
}
function GetSMSUrl($msg,$num)
{
	//echo $smscode;
	
	$curl = curl_init();
// Set some options - we are passing in a useragent too here
curl_setopt_array($curl, array(
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_URL => 'http://123.63.33.43/blank/sms/user/urlsms.php',
    CURLOPT_USERAGENT => '',
    CURLOPT_POST => 1,
    CURLOPT_POSTFIELDS => array(
        'username' => 'avntka',
        'pass' => 'r$9In_5H',
         'senderid' => 'MITDAT',
        'dest_mobileno' => $num,
         'message' => $msg,
        'response' => 'Y',
        'msgtype' => 'TXT'
    )
));
// Send the request & save response to $resp
$resp = curl_exec($curl);
// Close request to clear up some resources
curl_close($curl);

}

?>