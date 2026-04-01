<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $mobile = $_POST['mobile'];

    // Validate mobile number
    if (!preg_match('/^[6-9]\d{9}$/', $mobile)) {
        echo json_encode(["status" => "error", "message" => "Invalid mobile number"]);
        exit;
    }

    // MSG91 API Details
    $authKey = "332116AkEui6hX85oO5ee1d8d6P1"; // Replace with your MSG91 auth key
    $senderId = "MITSDE";  // Sender ID (approved by MSG91)
    $otpExpiry = 5;  // OTP expiry time in minutes
    $countryCode = "91"; // India country code

    // API URL
    $apiUrl = "http://api.msg91.com/api/sendotp.php";
    

    // Data to send
    $postData = [
        "authkey" => $authKey,
        "mobile" => $countryCode . $mobile,
        "sender" => $senderId,
        "otp_length" => "6",
        "otp_expiry" => $otpExpiry,
        "message" => "Dear Student, Your OTP is ##OTP##. Use this to complete your registration. - sanjay"
    ];

    // cURL initialization
    $ch = curl_init($apiUrl);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($postData));
    curl_setopt($ch, CURLOPT_HTTPHEADER, ["Content-Type: application/json"]);

    $response = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    // Response handling
    if ($httpCode == 200) {
        echo json_encode(["status" => "success", "message" => "OTP sent successfully"]);
    } else {
        echo json_encode(["status" => "error", "message" => "Failed to send OTP"]);
    }
} else {
    echo json_encode(["status" => "error", "message" => "Invalid request"]);
}
?>
