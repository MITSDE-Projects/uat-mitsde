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

$accessToken = "GGqY02s2cjWL5uObMdYMxt2QLOTamQg_ojt-ibT56c-ovru6eMYWhlC9_ONjDgrvL2vt7YqzOqmmhCqn4Q0I89l85x9qKH23n4owO4uSdVuklzCQLwfpoBOtsnzE8gjWYPuH89txHuRph7cITsocFcayIYgJfy68YQMh632y5Nzu2weaPyDWgpqbXsqmXlYSqERK96G3i5dDwqdhef1pt6Gc9PaWfO4xYvxKLGYQJIoYp8kQiLqb7WWHJioVDgRRBNS8ROJ_c9Wwq4i1xW22OjbskKUDypiU7XNv2IaXyiNpvuXNaOyDpwpve3AjKTdvAME49MjKCB7JZfB4D3e0nd093l1LUg-u1nY88ylePPS5I7mpN2T8KncLmNXEqmp8viwL6ZjDB1y1JvvoZy93RXEsJ3QB7_0_bxywV_RAZvnvgI8CARFnnyJm0_e_S7B_jA7lHKq9VusVTwDftxCv-XDvcmabUxyzzVIU2Wj5qckcbqU6-QvmobH71NPlVclf"; // Replace with your actual token
?>