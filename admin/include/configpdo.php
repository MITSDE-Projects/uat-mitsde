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

$accessToken = "5G8HxJr_XOm8K3misfly4M-ARl3tHTxYEopvwMyV4QGFwoPyvbtedy7W_A-X45Cy19h9oByvVapsDz6VNgOp9bL3vCkL3Jgr8YD-_rev9YWzlkFek_235K6kAXxnnJUUgTOgYpOrMCc15_7ECKpAl-I5GEVVAT2sfYXcRBgV8Ly_d4jmVycgj5OnxEaYzOHA_r7s1R4tJQ5i5mC_R78i7BWqnD2Wk7UDD8FmWQ9grWjnjz_axJkZCte9dGqaDJj64Dd_matiaRrQXZ-UxD8LHWJFUPhQ_bFLHCdw5HFcPNr9uf6v2S2ctSK8AjF27ocHqFU5pw1oh8QU0FNFRFgrP_Z3OW2gQdbRp4tdjOsrB2y3aX0Lyy-QmgfbqD5c4RA7BUe5i9nc1O6eIZfuHodrXPcQSFzIAAW7fEBOiHOAww9jMm48PoDWc1ZeNpMJa61udRzpbSINuec-z4gtItZkblvcqVtJg4cKN8Epvotqh1XeO6AusXKsm0ZknkBexwWj"; // Replace with your actual token
?>