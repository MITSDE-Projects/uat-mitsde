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

$accessToken = "75549NEfOw9KRiCE6a3XOsxkaF_wAUsM4ijR3xQzJVwwNdcdTlpQOk5K6BbjH40qhVBlUlvB5lhDidsdplkxtvWYC366oaMKTdMYYToHkM2sc2Al1t48OCX1_91qyfah_XViZLafvVgzPpGaedyiuTvC6-FNifuzW8aJGKrvniINrwRBuwlMrUWrxVpO1bW6FKqdHTPSAvrfKcuGTiYqDD6hTYhOL2A9sG6j9cYDMEmg8W_hyXeDS9EAtXDpbqTGTMjC9xbW8CLO59tBGX9ZX5YZ7YnJF1EHJ91-e-qm_0YQW4kpoYcmWlTEl_As6zl7TfHxX6xeIJfmEXaFgWW5KDz02RIBOtj3vbRKLIzJv21cD-yBlonJ-r8NoQwg3CGIHtyrBaIqMcGzgGFP9hFdZXaBnyKGmkGUoGp7Zp73uItrdOFXCm3lgOrMMeAkDBvjeNA6IYHemLElX_R1VBYVHvAiarmQWRbwXei1uo9IIypQhM2VtICG4W-dw8IUdrYb"; // Replace with your actual token
?>