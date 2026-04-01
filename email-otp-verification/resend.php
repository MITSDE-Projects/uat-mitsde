<?php
if (!isset($_GET['mobileno'])) {
    echo "Mobile number is required.";
    exit;
}

$mobileno = $_GET['mobileno'];

$curl = curl_init();
curl_setopt_array($curl, array(
    CURLOPT_URL => "https://control.msg91.com/api/v5/otp/retry?retrytype=text&mobile=$mobileno&authkey=332116AkEui6hX85oO5ee1d8d6P1",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'GET',
));

$response = curl_exec($curl);
curl_close($curl);

echo "OTP has been resent.";
?>
