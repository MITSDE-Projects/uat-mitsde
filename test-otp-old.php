<?php

$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => 'http://api.msg91.com/api/sendotp.php',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS => 'authkey=332116AkEui6hX85oO5ee1d8d6P1&mobile=919271624963&message=Dear%20Student%2C%20Your%20OTP%20is%20%23%23OTP%23%23.%20Use%20this%20Passcode%20to%20complete%20your%20Registration.%20Thank%20you.%20-%20MITSDE&sender=MITSDE&otp_expiry=3&DLT_TE_ID=1307172898777148909',
    CURLOPT_HTTPHEADER => array(
        'Content-Type: application/x-www-form-urlencoded',
        'Cookie: PHPSESSID=38ft0k5dgsvrn127a3cbrdmbv3',
    ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;