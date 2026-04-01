<?php
header('Content-Type: application/json');

// Configuration
$authkey = "332116AkEui6hX85oO5ee1d8d6P1";
$sender = "MITSDE";
$dlt_te_id = "1307172898777148909";
$otp_expiry = "3"; // OTP expiry in minutes

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $mobile = $_POST['mobile'];
    $name = $_POST['name'];
    
    // Generate random OTP (in real scenario, you might want to store this securely)
    $otp = rand(1000, 9999);
    
    // Custom message format
    $message = "Dear Student,\nYour OTP is {$otp}. Use this Passcode to complete your Registration. Thank you.\nMITSDE";

    // API URL
    $url = "http://api.msg91.com/api/sendotp.php";

    // Prepare data
    $data = array(
        'authkey' => $authkey,
        'mobile' => $mobile,
        'sender' => $sender,
        'message' => $message,
        'otp' => $otp,
        'otp_expiry' => $otp_expiry,
        'DLT_TE_ID' => $dlt_te_id
    );

    // Initialize cURL
    $curl = curl_init();
    
    // Set cURL options
    curl_setopt_array($curl, array(
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => http_build_query($data),
        CURLOPT_SSL_VERIFYHOST => 0,
        CURLOPT_SSL_VERIFYPEER => 0,
    ));

    // Execute cURL request
    $response = curl_exec($curl);
    $err = curl_error($curl);
    
    curl_close($curl);

    if ($err) {
        echo json_encode(['status' => 'error', 'message' => $err]);
    } else {
        echo json_encode(['status' => 'success', 'data' => json_decode($response)]);
    }
} else {
    echo json_encode(['status' => 'error', 'message' => 'Invalid request method']);
}
?>