<?php
// verify_otp.php
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $mobile = $_POST['mobile'];
    $otp = $_POST['otp'];
    $authkey = "332116AkEui6hX85oO5ee1d8d6P1";

    // API URL
    $url = "https://control.msg91.com/api/v5/otp/verify?mobile=" . urlencode($mobile) . "&otp=" . urlencode($otp);

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
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_HTTPHEADER => array(
            "authkey: " . $authkey
        ),
        CURLOPT_SSL_VERIFYHOST => 0,
        CURLOPT_SSL_VERIFYPEER => 0,
    ));

    // Execute cURL request
    $response = curl_exec($curl);
    $httpCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
    $err = curl_error($curl);
    
    curl_close($curl);

    if ($err) {
        echo json_encode(['status' => 'error', 'message' => $err]);
        exit;
    }

    // Log response for debugging
    error_log("MSG91 Response: " . $response);
    error_log("HTTP Code: " . $httpCode);

    // Decode the MSG91 response
    $msg91_response = json_decode($response, true);

    // Detailed response validation
    if ($httpCode === 200 && 
        isset($msg91_response['type']) && 
        $msg91_response['type'] === 'success' && 
        isset($msg91_response['message']) && 
        stripos($msg91_response['message'], 'OTP verified success') !== false) {
        
        echo json_encode([
            'status' => 'success',
            'message' => 'OTP verified successfully'
        ]);
    } else {
        $errorMessage = 'Invalid OTP';
        
        if (isset($msg91_response['message'])) {
            $errorMessage = $msg91_response['message'];
        } elseif (isset($msg91_response['error'])) {
            $errorMessage = $msg91_response['error'];
        }
        
        echo json_encode([
            'status' => 'error',
            'message' => $errorMessage
        ]);
    }
} else {
    echo json_encode(['status' => 'error', 'message' => 'Invalid request method']);
}
?>