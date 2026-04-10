<?php
// MITSDE ROI Calculator - Leads Dashboard

// Basic auth protection
$valid_user = 'mitsde';
$valid_pass = 'Mitsde@ROI2026';
if (!isset($_SERVER['PHP_AUTH_USER']) ||
    $_SERVER['PHP_AUTH_USER'] !== $valid_user ||
    $_SERVER['PHP_AUTH_PW']   !== $valid_pass) {
    header('WWW-Authenticate: Basic realm="ROI Leads"');
    header('HTTP/1.0 401 Unauthorized');
    echo 'Access Denied'; exit;
}

try {
    $dsn = "mysql:host=" . getenv('DB_HOST') . ";port=" . (getenv('DB_PORT') ?: '3306') . ";dbname=" . getenv('DB_NAME') . ";charset=utf8mb4";
    $pdo = new PDO($dsn, getenv('DB_USER'), getenv('DB_PASSWORD'), array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
} catch (Exception $e) {
    die('<p style="color:red">DB Connection Failed: ' . $e->getMessage() . '</p>');
}

// CSV Download
if (isset($_GET['download']) && $_GET['download'] === 'csv') {
    $stmt = $pdo->query("SELECT id, name, mobile, email, qualification, prof_type, domain, experience, city, current_ctc, goal, program_cat, program_name, fee_mode, fee_amount, hike_pct, post_ctc, gain_3yr, gain_5yr, roi_3yr, roi_5yr, ai_insight, source, created_at FROM roi_leads ORDER BY created_at DESC");
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    header('Content-Type: text/csv; charset=utf-8');
    header('Content-Disposition: attachment; filename="roi_leads_' . date('Y-m-d') . '.csv"');
    $out = fopen('php://output', 'w');
    if (!empty($rows)) {
        fputcsv($out, array_keys($rows[0]));
        foreach ($rows as $row) { fputcsv($out, $row); }
    }
    fclose($out); exit;
}

// Fetch stats
$total      = $pdo->query("SELECT COUNT(*) FROM roi_leads")->fetchColumn();
$today      = $pdo->query("SELECT COUNT(*) FROM roi_leads WHERE DATE(created_at) = CURDATE()")->fetchColumn();
$this_month = $pdo->query("SELECT COUNT(*) FROM roi_leads WHERE MONTH(created_at) = MONTH(NOW()) AND YEAR(created_at) = YEAR(NOW())")->fetchColumn();
$top_prog   = $pdo->query("SELECT program_name, COUNT(*) as cnt FROM roi_leads GROUP BY program_name ORDER BY cnt DESC LIMIT 1")->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>ROI Calculator — Leads Dashboard</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.bootstrap5.min.css">
<style>
  body { background:#f4f6fb; font-family:'Segoe UI',sans-serif; }
  .navbar-brand { font-weight:800; color:#1a2e5a !important; }
  .stat-card { border-radius:12px; border:none; box-shadow:0 2px 12px rgba(0,0,0,.08); }
  .stat-card .icon { font-size:2rem; }
  .table-responsive { border-radius:12px; overflow:hidden; }
  .ai-insight-cell { max-width:280px; white-space:nowrap; overflow:hidden; text-overflow:ellipsis; cursor:pointer; }
  .badge-source { background:#1a2e5a; }
</style>
</head>
<body>

<nav class="navbar navbar-light bg-white shadow-sm mb-4">
  <div class="container-fluid px-4">
    <span class="navbar-brand">🎓 MITSDE — ROI Calculator Leads</span>
    <a href="?download=csv" class="btn btn-success btn-sm">⬇ Download CSV</a>
  </div>
</nav>

<div class="container-fluid px-4">

  <!-- Stats -->
  <div class="row g-3 mb-4">
    <div class="col-6 col-md-3">
      <div class="card stat-card p-3 text-center">
        <div class="icon">📋</div>
        <div class="fs-3 fw-bold text-primary"><?= $total ?></div>
        <div class="text-muted small">Total Leads</div>
      </div>
    </div>
    <div class="col-6 col-md-3">
      <div class="card stat-card p-3 text-center">
        <div class="icon">📅</div>
        <div class="fs-3 fw-bold text-success"><?= $today ?></div>
        <div class="text-muted small">Today</div>
      </div>
    </div>
    <div class="col-6 col-md-3">
      <div class="card stat-card p-3 text-center">
        <div class="icon">📆</div>
        <div class="fs-3 fw-bold text-warning"><?= $this_month ?></div>
        <div class="text-muted small">This Month</div>
      </div>
    </div>
    <div class="col-6 col-md-3">
      <div class="card stat-card p-3 text-center">
        <div class="icon">🏆</div>
        <div class="fs-6 fw-bold text-danger"><?= $top_prog ? htmlspecialchars($top_prog['program_name']) : 'N/A' ?></div>
        <div class="text-muted small">Top Program</div>
      </div>
    </div>
  </div>

  <!-- Table -->
  <div class="card shadow-sm border-0" style="border-radius:12px">
    <div class="card-body p-0">
      <div class="table-responsive">
        <table id="leadsTable" class="table table-hover table-striped mb-0 align-middle" style="font-size:13px">
          <thead class="table-dark">
            <tr>
              <th>#</th>
              <th>Name</th>
              <th>Mobile</th>
              <th>Email</th>
              <th>Program</th>
              <th>Domain</th>
              <th>City</th>
              <th>CTC (L)</th>
              <th>Hike %</th>
              <th>Post CTC (L)</th>
              <th>3yr Gain (L)</th>
              <th>ROI 3yr %</th>
              <th>Fee Mode</th>
              <th>AI Insight</th>
              <th>Date</th>
            </tr>
          </thead>
          <tbody>
<?php
$stmt = $pdo->query("SELECT * FROM roi_leads ORDER BY created_at DESC");
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)):
?>
            <tr>
              <td><?= $row['id'] ?></td>
              <td class="fw-semibold"><?= htmlspecialchars($row['name']) ?></td>
              <td><?= htmlspecialchars($row['mobile']) ?></td>
              <td><?= htmlspecialchars($row['email']) ?></td>
              <td><?= htmlspecialchars($row['program_name'] ?? '') ?></td>
              <td><?= htmlspecialchars($row['domain'] ?? '') ?></td>
              <td><?= htmlspecialchars($row['city'] ?? '') ?></td>
              <td><?= number_format($row['current_ctc'] ?? 0, 1) ?></td>
              <td><span class="badge bg-success"><?= $row['hike_pct'] ?? 0 ?>%</span></td>
              <td class="fw-bold text-primary"><?= number_format($row['post_ctc'] ?? 0, 1) ?></td>
              <td class="text-warning fw-bold"><?= number_format($row['gain_3yr'] ?? 0, 1) ?></td>
              <td><span class="badge bg-info text-dark"><?= $row['roi_3yr'] ?? 0 ?>%</span></td>
              <td><?= htmlspecialchars($row['fee_mode'] ?? '') ?></td>
              <td class="ai-insight-cell" title="<?= htmlspecialchars($row['ai_insight'] ?? '') ?>"><?= htmlspecialchars(mb_strimwidth($row['ai_insight'] ?? '', 0, 60, '...')) ?></td>
              <td><?= date('d M Y, H:i', strtotime($row['created_at'])) ?></td>
            </tr>
<?php endwhile; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<!-- AI Insight Modal -->
<div class="modal fade" id="insightModal" tabindex="-1">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header bg-dark text-white">
        <h6 class="modal-title">✨ AI Insight</h6>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body" id="insightText" style="line-height:1.8"></div>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
<script>
$(document).ready(function(){
  $('#leadsTable').DataTable({
    order: [[14,'desc']],
    pageLength: 25,
    language: { search: "Search leads:" }
  });

  // AI Insight click to expand
  $(document).on('click', '.ai-insight-cell', function(){
    var full = $(this).attr('title');
    if(full){ $('#insightText').html(full.replace(/\*\*(.*?)\*\*/g,'<strong>$1</strong>').replace(/\n/g,'<br>')); new bootstrap.Modal(document.getElementById('insightModal')).show(); }
  });
});
</script>
</body>
</html>
