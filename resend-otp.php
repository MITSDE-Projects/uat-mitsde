<?php
session_start();

// Get mobile from session
$mobile = isset($_SESSION['mobile']) ? $_SESSION['mobile'] : null;

if ($mobile) {
    $authKey = '332116AkEui6hX85oO5ee1d8d6P1';

    $curl = curl_init();
    curl_setopt_array($curl, array(
        CURLOPT_URL => "https://control.msg91.com/api/v5/otp/retry?retrytype=text&mobile=91$mobile&authkey=$authKey",
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

    $responseData = json_decode($response, true);

    if (isset($responseData['type']) && $responseData['type'] === 'success') {
        $message = "OTP has been resent successfully!";
    } else {
        $error = "Failed to resend OTP.";
    }
} else {
    $error = "Mobile number not found in session.";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resend OTP</title>
</head>

<body>
    <h1>Resend OTP</h1>
    <?php if (isset($message)): ?>
    <p style="color: green;"><?php echo $message; ?></p>
    <?php endif;?>
    <?php if (isset($error)): ?>
    <p style="color: red;"><?php echo $error; ?></p>
    <?php endif;?>
    <a href="test-otp.php">Go back to verification</a>
</body>

</html>