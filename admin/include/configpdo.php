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

$accessToken = "fwMZP0ABOWqW9aM0ZRIbTUzm9ndIooFE-bqNQMC3twfeRBskp5gxKAjTwKNyI4UIx1Si9JMrs4NMPTMr8VJoh97oygoOQYoixT3noUxF2i22VHLARkAWhIuYXD2tHLbI_0mRGS9ct_fyy_HNIJvm2GHRwLKmJ3T5N6bhzrqCOPZTz9qqlYmtBusu5FoCN_UYFJqawxRc4qtx-JLdbOShw1BDnu8m1j0oYINktQPMnipANXjO_mb8vBSMp86qQ1ckso2gGRInKdEO1dcMoOFRN5tdh3xBbhM9GJVozU3irX99V0WCcLTqWl9Ud1BgpbSa6cPnGDhCfT93RnJH5zwWtyxtwv_NeYIYCu-EJKLSXn81hdZQ__4U9_NBunpzWEUpYskEmEbYCuXu2tnaAVgztmI-6Y6cUFWDIrwD3pJIGzgMZ82orUVsFGz6YRd4nMXQb9aPLJq21kF59T34_Fa36dKUEKI2MXfRRtsurVWhlJp8BI_zXH4ztrSRa-96k_zV"; // Replace with your actual token
?>