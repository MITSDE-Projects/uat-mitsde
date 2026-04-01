<?php
session_start();

// Fetch name and mobile from query string
$studentname = isset($_GET['name']) ? htmlspecialchars($_GET['name']) : null;
$mobile = isset($_GET['mobile']) ? htmlspecialchars($_GET['mobile']) : null;

// Store mobile in session to reuse for resend OTP
if ($mobile) {
    $_SESSION['mobile'] = $mobile;
}

// Send OTP when the page is loaded
if ($mobile) {
    // Set API parameters
    $authKey = '332116AkEui6hX85oO5ee1d8d6P1';
    $sender = 'MITSDE';
    $message = "Dear $studentname, Your OTP is ##OTP##. Use this Passcode to complete your Registration. Thank you. - MITSDE";
    $otpExpiry = 3;
    $dltTemplateId = '1307172898777148909'; // Replace with your actual DLT template ID

    // Initialize CURL for sending OTP
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
        CURLOPT_POSTFIELDS => http_build_query([
            'authkey' => $authKey,
            'mobile' => "91$mobile",
            'message' => $message,
            'sender' => $sender,
            'otp_expiry' => $otpExpiry,
            'DLT_TE_ID' => $dltTemplateId,
        ]),
        CURLOPT_HTTPHEADER => [
            'Content-Type: application/x-www-form-urlencoded',
            'Cookie: PHPSESSID=38ft0k5dgsvrn127a3cbrdmbv3',
        ],
    ));

    $response = curl_exec($curl);
    curl_close($curl);

    // Log or display the response for debugging (remove in production)
    echo $response;
} else {
    echo "Invalid request. Mobile number is missing.";
}