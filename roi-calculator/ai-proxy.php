<?php
// MITSDE ROI Calculator - Anthropic AI Proxy
define('ANTHROPIC_API_KEY', getenv('ANTHROPIC_API_KEY') ?: $_ENV['ANTHROPIC_API_KEY'] ?? $_SERVER['ANTHROPIC_API_KEY'] ?? '');

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: https://mitsde.com');
header('Access-Control-Allow-Methods: POST, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type');

if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(204);
    exit;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(array('error' => 'Method not allowed'));
    exit;
}

$body = file_get_contents('php://input');
$data = json_decode($body, true);

if (!$data || !isset($data['messages'])) {
    http_response_code(400);
    echo json_encode(array('error' => 'Invalid request body'));
    exit;
}

$payload = json_encode(array(
    'model'      => 'claude-haiku-4-5-20251001',
    'max_tokens' => 1000,
    'system'     => isset($data['system']) ? $data['system'] : '',
    'messages'   => $data['messages']
));

$headers = array(
    'Content-Type: application/json',
    'x-api-key: ' . ANTHROPIC_API_KEY,
    'anthropic-version: 2023-06-01',
    'Content-Length: ' . strlen($payload)
);

if (function_exists('curl_init')) {
    $ch = curl_init('https://api.anthropic.com/v1/messages');
    curl_setopt_array($ch, array(
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_POST           => true,
        CURLOPT_POSTFIELDS     => $payload,
        CURLOPT_HTTPHEADER     => $headers,
        CURLOPT_TIMEOUT        => 30,
        CURLOPT_SSL_VERIFYPEER => true
    ));
    $response = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    $curlErr  = curl_error($ch);
    curl_close($ch);

    if ($curlErr) {
        http_response_code(502);
        echo json_encode(array('error' => 'curl error: ' . $curlErr));
        exit;
    }
    http_response_code($httpCode);
    echo $response;

} else {
    $context = stream_context_create(array(
        'http' => array(
            'method'        => 'POST',
            'header'        => implode("\r\n", $headers),
            'content'       => $payload,
            'timeout'       => 30,
            'ignore_errors' => true
        ),
        'ssl' => array('verify_peer' => true)
    ));

    $response = file_get_contents('https://api.anthropic.com/v1/messages', false, $context);

    if ($response === false) {
        http_response_code(502);
        echo json_encode(array('error' => 'file_get_contents failed'));
        exit;
    }

    $statusLine = $http_response_header[0];
    preg_match('/(\d{3})/', $statusLine, $m);
    http_response_code((int)$m[1]);
    echo $response;
}
