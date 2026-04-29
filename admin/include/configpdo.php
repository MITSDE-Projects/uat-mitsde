<?php

// Fix HTTPS detection behind reverse proxy
if (!empty($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
    $_SERVER['HTTPS'] = 'on';
}

$host = getenv('DB_HOST') ?: 'localhost';
$db   = getenv('DB_DATABASE') ?: 'mitsde_onlinepayment';
$user = getenv('DB_USERNAME') ?: 'root';
$pass = getenv('DB_PASSWORD') ?: '';
$port = getenv('DB_PORT') ?: '3306';

try {
    $conn = new PDO(
        "mysql:host=$host;port=$port;dbname=$db;charset=utf8mb4",
        $user,
        $pass,
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false
        ]
    );
} catch (PDOException $e) {
    die("Database Connection Failed: " . $e->getMessage());
}

$accessToken = "5_8oxfnTSwFdt1qqcdDjfIUHSz7uyyvxe3gUvwNR34QP0lWUTkxwlvgy_9ItZPf14I56rBZUSwxIkGTa6SAX3dopNlBQBZweY4rmVhFrgvONGJS_0IVAiWS6mGrj6uGU2xNcwGyL3MoDu5Rl4WXATgq6RJCLrxrQDWySgYgtR7X3lMxcnKmz2yl8RQYLFxUwDId9qI-xoj47i1lf1YLPPGpDVryPHjXMyizdYtbXHU0mDuYtWZY8svoQBpJLtW2mro2i-uId58p0AippwV-Z0bcFvAKZ5HbqQ6fBrqUjl2kNMxx9XWVe1pHFtddSJAGcUKRgUxDrmutEEys5AMz2x5nVItvTnTksm0hPWBqHHgNOyNjLb1qjCYrw91RnPEeC3WpJOrVWPO2Ta0QS6tbi_I0mEqWOWRzZ9U97x2JNTj8_JO_8ug1sGGDfnroih7Mv5Cn88sGcndkP2Qr8lbWcUM7rl4gsS6m-ys9yi0QHf27TS1i_ZVPTPMRxKF-TA1MW"; // Replace with your actual token
?>