<?php
// Fetch name and mobile from query string
$studentname = isset($_GET['name']) ? htmlspecialchars($_GET['name']) : null;
$mobile = isset($_GET['mobile']) ? htmlspecialchars($_GET['mobile']) : null;

// Check if mobile is provided
if ($mobile) {
    // Initialize CURL for sending OTP
    $curl = curl_init();

    // Message91 API details
    $authKey = '332116AkEui6hX85oO5ee1d8d6P1'; // Your authKey
    $message = "Dear $studentname, Your OTP is ##OTP##. Use this Passcode to complete your Registration. Thank you. - MITSDE";
    $sender = 'MITSDE'; // Approved sender ID
    $otpExpiry = 3; // OTP expiry in minutes
    $dltTemplateId = '1307172898777148909'; // Approved DLT template ID

    // Set CURL options
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
            'mobile' => "91$mobile", // Include country code
            'message' => $message,
            'sender' => $sender,
            'otp_expiry' => $otpExpiry,
            'DLT_TE_ID' => $dltTemplateId,
        ]),
        CURLOPT_HTTPHEADER => [
            'Content-Type: application/x-www-form-urlencoded',
        ],
    ));

    // Execute CURL and get response
    $response = curl_exec($curl);
    curl_close($curl);

    // Display response
    echo $response;
} else {
    // Error if mobile number is not provided
    echo json_encode([
        'message' => 'Mobile number is missing from the URL.',
        'type' => 'error',
    ]);
}