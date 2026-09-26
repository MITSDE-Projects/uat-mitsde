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

$accessToken = "uvTFERQmgAES0gbq5F-WvVtDuHGaNGjdurXQpZPRAxv9cCqajUMXYY1UnFyZch-zUArroN4DqFWpowejbvNMNLNG86a8uJI__PRP9aCPHm2ktbk2x2ZEJdFG2z2QcdZiQERk-A3NnBFq277fcSyONIYNj_zOlSWgYY9lWGhUPaw--axMWABsRaFj4AS-_v72Lqn5M5u_1YZ7V_aXUwJ3WVBtZdZvLKtK6d_78Tj8V7lD3gxcOyfQm_QkLj0bQu6VpsQhZrCXEyiUPJi7YOkOfVOHAiKrlWvDArTZvrjXkcyXZkIDW13VDcPw0VCOzNY5huIR0mjf-HPMOfqrdec44X7K1M29R2WETyJ3_xR2CY2snCX04Gm5JHlb-z6aVf3BvV9H8gMOjb0-ubgNH7WD4J5LJs3m7ZTQPJs4TJv6PwpfY56cTKn7OfNN9mngpnA2m6n38aOLkh1snTHMZPZCMYnodgVOXIoKbLsIGpqaWl77SHxoNALdLKtSPZTC9Ztg"; // Replace with your actual token
?>