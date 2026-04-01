<?php
session_start();

// Fetch name and mobile from query string
$studentname = isset($_GET['name']) ? htmlspecialchars($_GET['name']) : null;
$mobile = isset($_GET['mobile']) ? htmlspecialchars($_GET['mobile']) : null;

// Store mobile in session to reuse for resend OTP
if ($mobile) {
    $_SESSION['mobile'] = $mobile;
}

// Function to send OTP
function sendOtp($mobile, $authKey, $sender, $studentname)
{
    $messageContent = "Dear $studentname, Your OTP is ##OTP##. Use this to verify your mobile number.";
    $otpExpiry = 3; // OTP expiry in minutes

    $curl = curl_init();
    curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.msg91.com/api/v5/otp',
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
            'sender' => $sender,
            'message' => $messageContent,
            'otp_expiry' => $otpExpiry,
        ]),
        CURLOPT_HTTPHEADER => [
            'Content-Type: application/x-www-form-urlencoded',
        ],
    ));

    $response = curl_exec($curl);
    $error = curl_error($curl);
    curl_close($curl);

    if ($error) {
        return ["success" => false, "message" => "CURL Error: $error"];
    }

    $responseData = json_decode($response, true);
    if (isset($responseData['type']) && $responseData['type'] === 'success') {
        return ["success" => true, "message" => "OTP sent successfully."];
    } else {
        return ["success" => false, "message" => "API Error: " . ($responseData['message'] ?? 'Unknown error')];
    }
}

// If form is submitted (OTP validation)
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $enteredOtp = $_POST['otp'];

    // Validate OTP with Msg91 API
    $authKey = '332116AkEui6hX85oO5ee1d8d6P1';
    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => "https://api.msg91.com/api/v5/otp/verify?authkey=$authKey&mobile=91$mobile&otp=$enteredOtp",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
    ));

    $response = curl_exec($curl);
    $responseData = json_decode($response, true);
    curl_close($curl);

    // Check OTP validation response
    if (isset($responseData['type']) && $responseData['type'] === 'success') {
        $message = "Thank you for verifying your mobile number!";
    } else {
        $error = "Please fill the correct OTP.";
    }
}

// Send OTP when the page is loaded
if (!$message && $mobile) {
    $authKey = '332116AkEui6hX85oO5ee1d8d6P1';
    $sender = 'MITSDE';

    $otpResponse = sendOtp($mobile, $authKey, $sender, $studentname);
    if (!$otpResponse['success']) {
        $error = $otpResponse['message'];
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify Your Mobile Number</title>
</head>

<body>
    <h1>Verify Your Mobile Number</h1>
    <?php if ($mobile): ?>
    <p>Mobile Number: <?php echo $mobile; ?></p>
    <form method="POST" action="">
        <label for="otp">Enter OTP:</label>
        <input type="text" id="otp" name="otp" required>
        <button type="submit">Verify</button>
    </form>
    <a href="resend-otp.php">Resend OTP</a>
    <?php if (isset($error)): ?>
    <p style="color: red;"><?php echo $error; ?></p>
    <?php endif;?>
    <?php else: ?>
    <p style="color: red;">Invalid request. Mobile number is missing.</p>
    <?php endif;?>
    <?php if (isset($message)): ?>
    <p style="color: green;"><?php echo $message; ?></p>
    <?php endif;?>
</body>

</html>