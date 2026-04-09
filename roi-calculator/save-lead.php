<?php
// MITSDE ROI Calculator - Save Lead to PostgreSQL

define('DB_HOST', getenv('ROI_DB_HOST') ?: '72.60.205.31');
define('DB_PORT', getenv('ROI_DB_PORT') ?: '5432');
define('DB_NAME', getenv('ROI_DB_NAME') ?: 'mitsde_roi');
define('DB_USER', getenv('ROI_DB_USER') ?: '');
define('DB_PASS', getenv('ROI_DB_PASS') ?: '');

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

if (!$data) {
    http_response_code(400);
    echo json_encode(array('error' => 'Invalid request body'));
    exit;
}

try {
    $dsn = "pgsql:host=" . DB_HOST . ";port=" . DB_PORT . ";dbname=" . DB_NAME;
    $pdo = new PDO($dsn, DB_USER, DB_PASS, array(
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ));

    $stmt = $pdo->prepare("
        INSERT INTO roi_leads (
            name, mobile, email, qualification,
            prof_type, domain, experience, city,
            current_ctc, goal, program_cat, program_name,
            fee_mode, fee_amount, hike_pct, post_ctc,
            gain_3yr, gain_5yr, roi_3yr, roi_5yr, source
        ) VALUES (
            :name, :mobile, :email, :qualification,
            :prof_type, :domain, :experience, :city,
            :current_ctc, :goal, :program_cat, :program_name,
            :fee_mode, :fee_amount, :hike_pct, :post_ctc,
            :gain_3yr, :gain_5yr, :roi_3yr, :roi_5yr, 'ROI Calculator'
        )
    ");

    $stmt->execute(array(
        ':name'          => $data['name']         ?? '',
        ':mobile'        => $data['mobile']       ?? '',
        ':email'         => $data['email']        ?? '',
        ':qualification' => $data['qualification'] ?? '',
        ':prof_type'     => $data['prof_type']    ?? '',
        ':domain'        => $data['domain']       ?? '',
        ':experience'    => $data['experience']   ?? '',
        ':city'          => $data['city']         ?? '',
        ':current_ctc'   => $data['current_ctc']  ?? 0,
        ':goal'          => $data['goal']         ?? '',
        ':program_cat'   => $data['program_cat']  ?? '',
        ':program_name'  => $data['program_name'] ?? '',
        ':fee_mode'      => $data['fee_mode']     ?? '',
        ':fee_amount'    => $data['fee_amount']   ?? 0,
        ':hike_pct'      => $data['hike_pct']     ?? 0,
        ':post_ctc'      => $data['post_ctc']     ?? 0,
        ':gain_3yr'      => $data['gain_3yr']     ?? 0,
        ':gain_5yr'      => $data['gain_5yr']     ?? 0,
        ':roi_3yr'       => $data['roi_3yr']      ?? 0,
        ':roi_5yr'       => $data['roi_5yr']      ?? 0
    ));

    echo json_encode(array('success' => true));

} catch (Exception $e) {
    http_response_code(500);
    echo json_encode(array('error' => $e->getMessage()));
}
