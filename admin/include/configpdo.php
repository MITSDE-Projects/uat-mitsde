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

$accessToken = "0OVZ4PvtRayJ6bG_trbEvTLkwA1wcuUBZVj2Q9cv8qnmNjxsNh4eyoYuV8TSog4vmjuqM9SczuFV0Cd9T_fIxCIRsnCIjTMXwfPuJnGFC5ZaCuCJPcP900MuVGTTg2aDbdiuI9cSs77hYo4j7uR5fZJIh_pQpZKJLa5RcWHg4_B4dAcpW7SQAuPLd_tD8ak-ueidDOzMHy9KdPupar1xiKuotM2Ssx5kmEiYXz49TvVG6pSwqhTPVhI1k06IV4r8CP7Lomyl8NnH0fNJdrs1qFV2Lnxe5m3bULeV_zVatq3yZFthG7VHqac6eJ2NJoec7gnNZ9yhN4kS7djomYL1Q3pS2dTnmR2AY6lXA7lcZ6g0lXBWPNa6Am5yK_PaA76igjKg7hO7Pxp83wt24fVUftXd-ADzwGBR3z9TTtMIv2U8W72u4BOEneq2Tm106vsv9KwrMTxCGcU6utiV5Yi7y1mMP4khWeFOa6TreiQsGRl0kBclPz-bJb4gLKmoIU56"; // Replace with your actual token
?>