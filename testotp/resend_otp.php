<?php
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') 
{
    $mobile = $_POST['mobile'];
    
    $authkey = "332116AkEui6hX85oO5ee1d8d6P1";

    // API URL
    $url = "https://control.msg91.com/api/v5/otp/retry?retrytype=text&mobile=" . urlencode($mobile) . "&authkey=" . urlencode($authkey);

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
