<?php
/**
 * Writesonic AI Analytics forwarder for mitsde.com
 */
$ws_data = [
    "ip"              => $_SERVER['REMOTE_ADDR'] ?? '',
    "x_real_ip"       => $_SERVER['HTTP_X_REAL_IP'] ?? ($_SERVER['REMOTE_ADDR'] ?? ''),
    "ua"              => $_SERVER['HTTP_USER_AGENT'] ?? '',   // visitor's original User-Agent, unmodified
    "referrer"        => $_SERVER['HTTP_REFERER'] ?? '',
    "url"             => ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http')
                         . '://' . ($_SERVER['HTTP_HOST'] ?? '') . ($_SERVER['REQUEST_URI'] ?? ''),
    "method"          => $_SERVER['REQUEST_METHOD'] ?? 'GET',
    "x_forwarded_for" => $_SERVER['HTTP_X_FORWARDED_FOR'] ?? '',
    "response_status" => "200"
];

$ch = curl_init('https://ingestion.writesonic.com/api/v1/analytics/ingest');
curl_setopt_array($ch, [
    CURLOPT_POST              => true,
    CURLOPT_POSTFIELDS        => json_encode($ws_data),
    CURLOPT_HTTPHEADER        => [
        'Content-Type: application/json',
        'x-api-key: 25442548-a5bf-4dc0-968e-9afb4cfbef1d',
    ],
    CURLOPT_RETURNTRANSFER    => true,
    CURLOPT_TIMEOUT_MS        => 2000,
    CURLOPT_CONNECTTIMEOUT_MS => 1000,
]);
curl_exec($ch);
curl_close($ch);

?>