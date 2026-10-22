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

$accessToken = "Bhp1YUmkdnS0W-e4pVtKxr0sfsNtuTFr4a1aYmzOMGWOyTadLpMIra0G-xdWwcIDn3y0691TTwyFY2w75agizDpCUh5g9KRygK9VLyU1MANwV6hhjLwV5dzgSeMFJQmIyVdT6X5iLJCnjWas7Z6z7ec7jujZoB8811P3KWm2KBkHzk8UDKR_89vC6fhBGYlcuwZGu3X0OgIgd2z-PKB1Lg899C-6CYSckRrEt73DjF7QBC1icXv2UojfAH8YKao3qDx2MYLZMqeBNer-zmklOPP-lN5zjP0bN1PB1DC_c9Z_A4nsQB2Xhif93DvF6VoTLhxA2-Vafiz3bmx6CvvmdbznBS-AM3eOzkpQMYtprt7atmI3INcNiBB3H-Riuea-z_nJPfq-PTt8dorFhppfLoimbdkJSYOmTE3Xh98GwyYjnuTyqLd3Rnoupl_wSA21Kt2YXOrqqrLnUni-TWIPcCt1N8aVTAvOYyc-g_zRa5rhnJPBCYAzhljVXNJmG0Jd"; // Replace with your actual token
?>