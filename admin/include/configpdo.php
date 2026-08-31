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

$accessToken = "9FwLI4FWoUq9JaJAmOJd6k8VaSSqRukx2BZ0bEd0cmn0cClSZssR6x0vzZHeqvvLIPK08i4ZDfl6Cztg3Hahh3GQ5UjPjPxM4fbGEw9O-fgHzZ2LMddRRIBeovII-L-kmceNzXAl5MuyeyUmhmnImr3rTcOYxdUbP2_20gs8gnHQq4Xvzm0lwOPqmmTeAT0qJdHSLVSWvfi86AnVRCxHtmBbpOll1vX-mg5jgac9guaOik-mLxrOoGgdb2FY80tNy_yjWIrQA3DFaGeKvLks294Kdl2bURH0WrtRr5So8LO9VyOhKt7fqCwnYk3RGn0jz9Zi3h3w0Ozoeieno6pvKWOC3zjwUr64joYUHoE522hgKTspYDeIoSOwK6wrNr91hGDD077OLLOJH2S9WIHVeSIqvSPRFIiqOZJ3Hkas4rHJ_scTnF39oT_uaR1s92C4sYI8wAxp-K7jploHuGqNcjYHT59uS3fQIAD0PDdEqiWP0dExPxnFzL-V2N04AS0N"; // Replace with your actual token
?>