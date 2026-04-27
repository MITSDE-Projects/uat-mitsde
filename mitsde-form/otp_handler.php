<?php
/**
 * otp_handler.php
 * Actions : send_otp | verify_otp
 * Table   : opt_verification
 * Gateway : MSG91  sendotp.php (send)  +  verifyRequestOTP.php (verify)
 *
 * IMPORTANT: Both send and verify use the SAME old MSG91 API family.
 * Sending via api.msg91.com/api/sendotp.php and verifying via
 * control.msg91.com/api/v5/otp/verify are DIFFERENT systems and will
 * always fail. We use the matching verify endpoint below.
 */

include("../admin/include/configpdo.php");

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(['success' => false, 'message' => 'Invalid request.']);
    exit;
}

/* ── MSG91 credentials ───────────────────────────────────────────────── */
define('MSG91_AUTHKEY',    '332116AkEui6hX85oO5ee1d8d6P1');         // <-- your Auth Key
define('MSG91_SENDER',     'MITSDE');
define('MSG91_DLT_TE_ID',  '1307172898777148909');        // <-- your DLT Template ID
define('MSG91_MESSAGE',    'Dear Student, Your OTP is ##OTP##. Use this Passcode to complete your Registration. Thank you. - MITSDE');
define('MSG91_OTP_EXPIRY', '3');        // minutes
/* ───────────────────────────────────────────────────────────────────── */

$action = trim($_POST['action'] ?? '');

/* ── Helpers ─────────────────────────────────────────────────────────── */
function j(bool $ok, string $msg, array $extra = []): void {
    echo json_encode(array_merge(['success' => $ok, 'message' => $msg], $extra));
    exit;
}

function cleanMobile(string $m): string {
    return preg_replace('/[^0-9]/', '', $m);
}

function validMobile(string $m): bool {
    return (bool) preg_match('/^[6-9][0-9]{9}$/', $m);
}

/**
 * Send OTP via MSG91 old API (sendotp.php).
 * MSG91 generates the OTP itself using ##OTP## in the message template.
 */
function sendSms(string $mobile): array {
    $mobileWithCC = '91' . $mobile;

    $postFields = http_build_query([
        'authkey'    => MSG91_AUTHKEY,
        'mobile'     => $mobileWithCC,
        'message'    => MSG91_MESSAGE,   // must contain ##OTP## placeholder
        'sender'     => MSG91_SENDER,
        'otp_expiry' => MSG91_OTP_EXPIRY,
        'DLT_TE_ID'  => MSG91_DLT_TE_ID,
    ]);

    $ch = curl_init('http://api.msg91.com/api/sendotp.php');
    curl_setopt_array($ch, [
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_POST           => true,
        CURLOPT_POSTFIELDS     => $postFields,
        CURLOPT_HTTPHEADER     => ['Content-Type: application/x-www-form-urlencoded'],
        CURLOPT_TIMEOUT        => 10,
    ]);
    $res = curl_exec($ch);
    curl_close($ch);

    if (!$res) return ['sent' => false, 'raw' => 'cURL error / no response'];

    $decoded = json_decode($res, true);
    $sent    = isset($decoded['type']) && strtolower($decoded['type']) === 'success';
    return ['sent' => $sent, 'raw' => $res];
}

/**
 * Verify OTP via MSG91 OLD API — verifyRequestOTP.php
 *
 * This is the correct verify endpoint that matches sendotp.php.
 * Using the v5 control.msg91.com endpoint with the old send API will
 * always return failure because they are separate OTP session systems.
 */
function verifyViaMSG91(string $mobile, string $otp): array {
    $mobileWithCC = '91' . $mobile;

    // Correct matching verify endpoint for the old sendotp.php API
    $url = 'http://api.msg91.com/api/verifyRequestOTP.php'
         . '?authkey=' . urlencode(MSG91_AUTHKEY)
         . '&mobile='  . urlencode($mobileWithCC)
         . '&otp='     . urlencode($otp);

    $ch = curl_init($url);
    curl_setopt_array($ch, [
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_HTTPGET        => true,
        CURLOPT_TIMEOUT        => 10,
    ]);
    $res = curl_exec($ch);
    $err = curl_error($ch);
    curl_close($ch);

    if (!$res) return ['verified' => false, 'raw' => 'cURL error: ' . $err];

    // Old API returns JSON: {"type":"success","message":"..."} or {"type":"error","message":"..."}
    $decoded  = json_decode($res, true);
    $verified = isset($decoded['type']) && strtolower($decoded['type']) === 'success';
    return ['verified' => $verified, 'raw' => $res];
}

/* ══════════════════════════════════════════════════════════════════════
   SEND OTP
══════════════════════════════════════════════════════════════════════ */
if ($action === 'send_otp') {

    $mobile = cleanMobile($_POST['mobile'] ?? '');
    if (!validMobile($mobile)) {
        j(false, 'Please enter a valid 10-digit mobile number.');
    }

    // Rate limit: max 3 sends per mobile in 10 minutes
    $rl = $conn->prepare(
        "SELECT COUNT(*) FROM opt_verification
         WHERE mobNo = ? AND mailSend >= NOW() - INTERVAL 10 MINUTE"
    );
    $rl->execute(['91' . $mobile]);
    if ((int) $rl->fetchColumn() >= 3) {
        j(false, 'Too many OTP requests. Please try again after 10 minutes.');
    }

    $studentName   = trim($_POST['first_name'] ?? '');
    $email   = trim($_POST['email3'] ?? '');
    $state         = trim($_POST['state']       ?? '');
    $qualification = trim($_POST['hq']          ?? '');

    // Only a session token is stored — no local OTP generated
    $token = bin2hex(random_bytes(16));

    date_default_timezone_set('Asia/Kolkata');
    $now = date('Y-m-d H:i:s');

    // Invalidate previous unverified records for this mobile
    $conn->prepare(
        "UPDATE opt_verification SET m_verfication = 0
         WHERE mobNo = ? AND m_verfication = 0"
    )->execute([$mobile]);

    // Insert session record
    $ins = $conn->prepare("
        INSERT INTO opt_verification
            (studentName, emailID, mobNo, mailSend, m_verfication, m_verficationDT, token, state, qualification)
        VALUES (?, ?, ?, ?, 0, ?, ?, ?, ?)
    ");
    $ins->execute([
        $studentName,
        $email,
        $mobile,
        $now,
        $now,
        $token,
        $state,
        $qualification,
    ]);

    $recordId = $conn->lastInsertId();

    // Send OTP via MSG91
    $result = sendSms($mobile);

    if (!$result['sent']) {
        $conn->prepare("DELETE FROM opt_verification WHERE id = ?")->execute([$recordId]);
        j(false, 'Failed to send OTP. Please try again. (Detail: ' . $result['raw'] . ')');
    }

    j(true, 'OTP sent to your mobile number.', [
        'record_id' => $recordId,
        'token'     => $token,
    ]);
}

/* ══════════════════════════════════════════════════════════════════════
   VERIFY OTP
══════════════════════════════════════════════════════════════════════ */
if ($action === 'verify_otp') {

    $mobile    = cleanMobile($_POST['mobile']    ?? '');
    $otp       = trim($_POST['otp']              ?? '');
    $record_id = (int) ($_POST['record_id']      ?? 0);
    $token     = trim($_POST['token']            ?? '');

    // OTP must be exactly 4 digits
    if (!validMobile($mobile) || !preg_match('/^[0-9]{4}$/', $otp) || !$record_id || !$token) {
        j(false, 'Invalid input.');
    }

    // Fetch session record
    $fetch = $conn->prepare("
        SELECT id, token, m_verfication
        FROM opt_verification
        WHERE id = ? AND mobNo = ?
        LIMIT 1
    ");
    $fetch->execute([$record_id, $mobile]);
    $row = $fetch->fetch(PDO::FETCH_ASSOC);

    if (!$row) {
        j(false, 'Session not found. Please request a new OTP.');
    }

    if ((int) $row['m_verfication'] === 1) {
        j(false, 'This OTP has already been used.');
    }

    // Check expiry via DB timestamp
    $expiryCheck = $conn->prepare("
        SELECT id FROM opt_verification
        WHERE id = ? AND mailSend >= NOW() - INTERVAL " . (int) MSG91_OTP_EXPIRY . " MINUTE
    ");
    $expiryCheck->execute([$record_id]);
    if (!$expiryCheck->fetch()) {
        j(false, 'OTP has expired. Please request a new one.');
    }

    // Session token must match
    if ($row['token'] !== $token) {
        j(false, 'Invalid session token.');
    }

    // Verify via MSG91 — same API family as send
    $result = verifyViaMSG91($mobile, $otp);

    if (!$result['verified']) {
        // Show raw MSG91 response to help debug if still failing
        j(false, 'Incorrect OTP. Please try again. (MSG91: ' . $result['raw'] . ')');
    }

    // Mark verified in DB
    date_default_timezone_set('Asia/Kolkata');
    $conn->prepare("
        UPDATE opt_verification
        SET m_verfication = 1, m_verficationDT = NOW()
        WHERE id = ?
    ")->execute([$record_id]);

    j(true, 'Mobile verified successfully.', ['verified' => true]);
}

j(false, 'Unknown action.');