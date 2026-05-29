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

$accessToken = "qo5M_F7Gwoc1naf9BS7hDONkitseRtYGtv65M10fatc1CyyCUujLyxCT6XwyiCgax5p3RL5CGfsevHSgwOL4AnQjNmhl5xW9ONzMOu9aatzl4a7w0J3sh6j-wAn7BpQdpRGsZ3auvEEjDrIWsaU865YBrxs4goeGHulNhQfKBLaIOH1dVoXr_VJjuy3G9h5gEZ8sxhkh2mAd9KsBlCPfTYreVLgDoqbZv7Px7wbwKHES7bAVe2QHhoRA5KSNRL9fZ16Kq4IYQ3NAAazcetFfKNT-ZP-J_jSrxAvDMoIdRq_DipQDUwMnkph1Y8jTeHAR7HTOMTYkWw7zcmtcSbzpIDWtHPvjwgRELpopJFYYbWdc6l_xcbusf55p7FpPrhxYfPMTd0Xc7OzHN_pqEXPOK2fsFtbKgfXjHhwYJJn9bW1ADU6vzr4Ol6V7UxOwtqCN6150lqLXQqW4LxUVj2KraTWj5bx0XA1Y3FfKJqgsS_OIyGi-epnLt0JSiw_UmqgD"; // Replace with your actual token
?>