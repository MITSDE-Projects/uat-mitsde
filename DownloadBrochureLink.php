<?php
include "admin/include/configpdo.php"; /* ← tu apla DB config path yeth ghalar */

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header("Location: ./", true, 302);
    exit;
}

if (!empty($_POST['website'])) {
    exit("Spam detected");
}

$ip = $_SERVER['REMOTE_ADDR'];

$first_name = isset($_POST['first_name3']) ? trim($_POST['first_name3']) : '';
$emaiid     = isset($_POST['email3'])      ? filter_var($_POST['email3'], FILTER_SANITIZE_EMAIL) : '';
$mobile     = isset($_POST['MobileNumber']) ? preg_replace('/[^0-9]/', '', $_POST['MobileNumber']) : '';
$state      = isset($_POST['state'])    ? $_POST['state']    : '';
$HQ         = isset($_POST['HQ'])       ? $_POST['HQ']       : '';
$Divice     = isset($_POST['Divice'])   ? $_POST['Divice']   : '';
$PageName   = isset($_POST['PageName']) ? $_POST['PageName'] : '';
$latitude   = isset($_POST['latitude'])  ? $_POST['latitude']  : '';
$longitude  = isset($_POST['longitude']) ? $_POST['longitude'] : '';

if (!filter_var($emaiid, FILTER_VALIDATE_EMAIL))        { header("Location: ./"); exit; }
if (!preg_match("/^[a-zA-Z\s]{2,50}$/", $first_name))  { header("Location: ./"); exit; }
if (!preg_match('/^[6-9][0-9]{9}$/', $mobile))         { header("Location: ./"); exit; }
if (preg_match('/http|www|\.com|\.ru|yandex|bitcoin|dating|crypto/i', $first_name)) { header("Location: ./"); exit; }

/* Rate limit: max 5 per IP per minute */
$chk = $conn->prepare("SELECT COUNT(*) FROM quickcontact WHERE ip = ? AND DateTime >= NOW() - INTERVAL 1 MINUTE");
$chk->execute([$ip]);
if ($chk->fetchColumn() >= 5) {
    http_response_code(429);
    exit('Too many requests. Please try again later.');
}

date_default_timezone_set('Asia/Kolkata');
$curdateTime = date("Y-m-d H:i:s");
$curdate     = date("Y-m-d");

$stmt = $conn->prepare("
    INSERT INTO quickcontact
    (FirstName, EmailID, MobileNo, SourcePath, PageName, DateTime, Date,
     device, page_name, address, district, city, state, country, longitude, latitude, ip)
    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)
");
$result = $stmt->execute([
    $first_name, $emaiid, $mobile,
    $state, $HQ,
    $curdateTime, $curdate,
    $Divice, $PageName,
    '', '', '', $state, '',
    $longitude, $latitude, $ip
]);

if (!$result) {
    error_log("quickcontact insert failed");
}

/* ── Page variables needed by header-new.php ── */
$pagename = (isset($_SERVER['HTTPS']) ? 'https' : 'http') . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Download Brochure | MIT School of Distance Education</title>
    <meta name="robots" content="noindex, nofollow">
    <link rel="icon" type="image/png" href="assets-new/images/favicon-mit.ico">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css-new/styles.css">
    <link rel="stylesheet" href="css-new/fonts.css">
<?php include "5-common-seo-tag-1.php" ?>
</head>
<body>
  <?php include "5-common-seo-tag-2.php" ?>
<?php include "header-new.php" ?>

<section style="min-height:60vh; display:flex; align-items:center; justify-content:center; padding:4rem 1rem;">
    <div style="text-align:center; max-width:520px;">
        <svg viewBox="0 0 80 80" fill="none" style="width:80px;height:80px;margin-bottom:1.5rem;">
            <circle cx="40" cy="40" r="38" stroke="#ea580c" stroke-width="3"/>
            <path d="M22 41l12 12 24-24" stroke="#ea580c" stroke-width="3"
                  stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
        <h1 style="font-size:2rem;font-weight:700;color:#000;margin-bottom:.75rem;">
            Thank You!
        </h1>
        <p style="color:#6b7280;font-size:1.05rem;line-height:1.7;margin-bottom:2rem;">
            Your enquiry has been received. Click below to download our brochure.
        </p>
        <a href="assets/images/common-images/MITSDE-Final-Broucher.pdf" download="MITSDE-Final-Broucher.pdf" style="display:inline-flex;align-items:center;gap:.6rem;padding:.75rem 2rem;background:linear-gradient(90deg,#ea580c,#f97316);color:#fff;border-radius:8px;font-weight:700;text-decoration:none;margin-bottom:1rem;">
            <svg viewBox="0 0 24 24" fill="none" style="width:18px;height:18px;">
                <path d="M12 3v12m0 0l-5-5m5 5l5-5M4 21h16" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            Download Brochure
        </a>
        <div>
            <a href="./" style="display:inline-block;padding:.6rem 1.5rem;color:#ea580c;font-weight:600;text-decoration:none;">
                Back to Home
            </a>
        </div>
    </div>
</section>

<?php include "footer-new.php"; ?>
</body>
</html>
