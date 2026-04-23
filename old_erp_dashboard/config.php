<?php
// ============================================
// MITSDE - OLD ERP Student Dashboard
// Database Configuration — PDO + ENV vars
// ============================================

// Fix HTTPS detection behind reverse proxy (Coolify)
if (!empty($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
    $_SERVER['HTTPS'] = 'on';
}

function getDB(): PDO {
    $host = getenv('DB_HOST')     ?: 'localhost';
    $db   = getenv('DB_DATABASE') ?: 'mitsde_onlinepayment';
    $user = getenv('DB_USERNAME') ?: 'root';
    $pass = getenv('DB_PASSWORD') ?: '';
    $port = getenv('DB_PORT')     ?: '3306';

    try {
        return new PDO(
            "mysql:host=$host;port=$port;dbname=$db;charset=utf8mb4",
            $user,
            $pass,
            [
                PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES   => false,
            ]
        );
    } catch (PDOException $e) {
        http_response_code(500);
        die(json_encode(['error' => 'Database Connection Failed: ' . $e->getMessage()]));
    }
}
?>
