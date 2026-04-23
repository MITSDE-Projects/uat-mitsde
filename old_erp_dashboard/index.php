<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>OLD ERP Student Data — MITSDE</title>

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Syne:wght@400;500;600;700;800&family=DM+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">

<!-- Bootstrap 5 -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Bootstrap Icons -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

<!-- Chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.2/dist/chart.umd.min.js"></script>

<style>
/* ─── DESIGN TOKENS ─────────────────────────────── */
:root {
  --brand-deep:    #0a0f1e;
  --brand-navy:    #0d1b3e;
  --brand-blue:    #1a3a8f;
  --brand-accent:  #f97316;
  --brand-gold:    #f59e0b;
  --brand-teal:    #0ea5e9;
  --brand-green:   #10b981;
  --brand-red:     #ef4444;
  --surface-1:     #0f172a;
  --surface-2:     #1e293b;
  --surface-3:     #273549;
  --surface-card:  #1a2744;
  --text-primary:  #f1f5f9;
  --text-muted:    #94a3b8;
  --text-dim:      #64748b;
  --border-color:  rgba(255,255,255,0.07);
  --glow-blue:     0 0 30px rgba(26,58,143,0.4);
  --glow-accent:   0 0 20px rgba(249,115,22,0.3);
  --radius-card:   16px;
  --sidebar-w:     260px;
}

/* ─── RESET & BASE ──────────────────────────────── */
*, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
html { scroll-behavior: smooth; }
body {
  font-family: 'DM Sans', sans-serif;
  background: var(--brand-deep);
  color: var(--text-primary);
  min-height: 100vh;
  overflow-x: hidden;
}

/* ─── SIDEBAR ───────────────────────────────────── */
.sidebar {
  position: fixed;
  top: 0; left: 0;
  width: var(--sidebar-w);
  height: 100vh;
  background: var(--surface-1);
  border-right: 1px solid var(--border-color);
  display: flex;
  flex-direction: column;
  z-index: 1000;
  transition: transform 0.3s ease;
}
.sidebar-logo {
  padding: 24px 20px 20px;
  border-bottom: 1px solid var(--border-color);
}
.sidebar-logo .brand-name {
  font-family: 'Syne', sans-serif;
  font-weight: 800;
  font-size: 20px;
  color: var(--text-primary);
  letter-spacing: -0.5px;
}
.sidebar-logo .brand-sub {
  font-size: 10px;
  color: var(--brand-accent);
  text-transform: uppercase;
  letter-spacing: 2px;
  margin-top: 2px;
  font-weight: 600;
}
.sidebar-badge {
  display: inline-block;
  background: var(--brand-accent);
  color: white;
  font-size: 9px;
  font-weight: 700;
  padding: 2px 8px;
  border-radius: 20px;
  text-transform: uppercase;
  letter-spacing: 1px;
  margin-top: 6px;
}
.sidebar-nav {
  flex: 1;
  padding: 16px 0;
  overflow-y: auto;
}
.nav-section-label {
  font-size: 10px;
  font-weight: 700;
  color: var(--text-dim);
  text-transform: uppercase;
  letter-spacing: 2px;
  padding: 12px 20px 6px;
}
.nav-item {
  display: flex;
  align-items: center;
  gap: 12px;
  padding: 10px 20px;
  cursor: pointer;
  border-radius: 10px;
  margin: 2px 10px;
  font-size: 14px;
  font-weight: 500;
  color: var(--text-muted);
  transition: all 0.2s;
  text-decoration: none;
  border: none;
  background: none;
  width: calc(100% - 20px);
  text-align: left;
}
.nav-item i { font-size: 16px; width: 20px; text-align: center; }
.nav-item:hover { background: var(--surface-2); color: var(--text-primary); }
.nav-item.active { background: linear-gradient(135deg, var(--brand-blue), #1e4fc2); color: white; box-shadow: var(--glow-blue); }
.nav-item.active i { color: var(--brand-teal); }
.sidebar-footer {
  padding: 16px 20px;
  border-top: 1px solid var(--border-color);
  font-size: 12px;
  color: var(--text-dim);
}

/* ─── MAIN CONTENT ──────────────────────────────── */
.main-content {
  margin-left: var(--sidebar-w);
  min-height: 100vh;
  display: flex;
  flex-direction: column;
}

/* ─── TOPBAR ────────────────────────────────────── */
.topbar {
  position: sticky;
  top: 0;
  z-index: 999;
  background: rgba(10,15,30,0.95);
  backdrop-filter: blur(20px);
  border-bottom: 1px solid var(--border-color);
  padding: 14px 28px;
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: 16px;
}
.topbar-title {
  font-family: 'Syne', sans-serif;
  font-size: 18px;
  font-weight: 700;
  color: var(--text-primary);
}
.topbar-title span { color: var(--brand-accent); }
.topbar-right { display: flex; align-items: center; gap: 12px; }
.topbar-stat {
  display: flex;
  align-items: center;
  gap: 8px;
  background: var(--surface-2);
  border: 1px solid var(--border-color);
  border-radius: 10px;
  padding: 6px 14px;
  font-size: 13px;
  font-weight: 600;
}
.topbar-stat i { color: var(--brand-teal); }
.hamburger {
  display: none;
  background: var(--surface-2);
  border: 1px solid var(--border-color);
  color: var(--text-primary);
  border-radius: 8px;
  padding: 6px 10px;
  font-size: 18px;
  cursor: pointer;
}

/* ─── PAGE SECTIONS ─────────────────────────────── */
.page-section { display: none; padding: 28px; }
.page-section.active { display: block; }

/* ─── SECTION HEADER ────────────────────────────── */
.section-header {
  margin-bottom: 28px;
}
.section-header h2 {
  font-family: 'Syne', sans-serif;
  font-size: 24px;
  font-weight: 800;
  color: var(--text-primary);
}
.section-header p {
  color: var(--text-muted);
  font-size: 14px;
  margin-top: 4px;
}

/* ─── STAT CARDS ────────────────────────────────── */
.stats-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
  gap: 16px;
  margin-bottom: 28px;
}
.stat-card {
  background: var(--surface-card);
  border: 1px solid var(--border-color);
  border-radius: var(--radius-card);
  padding: 22px 20px;
  position: relative;
  overflow: hidden;
  transition: transform 0.2s, box-shadow 0.2s;
}
.stat-card:hover { transform: translateY(-3px); box-shadow: 0 12px 40px rgba(0,0,0,0.4); }
.stat-card::before {
  content: '';
  position: absolute;
  top: 0; right: 0;
  width: 80px; height: 80px;
  border-radius: 50%;
  transform: translate(20px, -20px);
  opacity: 0.15;
}
.stat-card.blue::before   { background: var(--brand-teal); }
.stat-card.orange::before { background: var(--brand-accent); }
.stat-card.green::before  { background: var(--brand-green); }
.stat-card.gold::before   { background: var(--brand-gold); }
.stat-card.red::before    { background: var(--brand-red); }
.stat-card.purple::before { background: #8b5cf6; }

.stat-icon {
  width: 44px; height: 44px;
  border-radius: 12px;
  display: flex; align-items: center; justify-content: center;
  font-size: 20px;
  margin-bottom: 14px;
}
.stat-icon.blue   { background: rgba(14,165,233,0.15); color: var(--brand-teal); }
.stat-icon.orange { background: rgba(249,115,22,0.15); color: var(--brand-accent); }
.stat-icon.green  { background: rgba(16,185,129,0.15); color: var(--brand-green); }
.stat-icon.gold   { background: rgba(245,158,11,0.15); color: var(--brand-gold); }
.stat-icon.red    { background: rgba(239,68,68,0.15);  color: var(--brand-red); }
.stat-icon.purple { background: rgba(139,92,246,0.15); color: #a78bfa; }

.stat-value {
  font-family: 'Syne', sans-serif;
  font-size: 32px;
  font-weight: 800;
  line-height: 1;
  color: var(--text-primary);
}
.stat-label {
  font-size: 12px;
  color: var(--text-muted);
  margin-top: 4px;
  font-weight: 500;
  text-transform: uppercase;
  letter-spacing: 0.5px;
}

/* ─── CARDS ─────────────────────────────────────── */
.dash-card {
  background: var(--surface-card);
  border: 1px solid var(--border-color);
  border-radius: var(--radius-card);
  overflow: hidden;
  margin-bottom: 20px;
}
.dash-card-header {
  padding: 16px 20px;
  border-bottom: 1px solid var(--border-color);
  display: flex;
  align-items: center;
  justify-content: space-between;
}
.dash-card-header h5 {
  font-family: 'Syne', sans-serif;
  font-size: 15px;
  font-weight: 700;
  margin: 0;
}
.dash-card-body { padding: 20px; }
.chart-wrap { position: relative; height: 280px; }

/* ─── FILTER BAR ────────────────────────────────── */
.filter-bar {
  background: var(--surface-2);
  border: 1px solid var(--border-color);
  border-radius: var(--radius-card);
  padding: 16px 20px;
  margin-bottom: 20px;
  display: flex;
  flex-wrap: wrap;
  gap: 12px;
  align-items: flex-end;
}
.filter-group { display: flex; flex-direction: column; gap: 4px; flex: 1; min-width: 150px; }
.filter-group label { font-size: 11px; font-weight: 600; color: var(--text-muted); text-transform: uppercase; letter-spacing: 0.5px; }
.filter-group select,
.filter-group input {
  background: var(--surface-3);
  border: 1px solid var(--border-color);
  color: var(--text-primary);
  border-radius: 8px;
  padding: 8px 12px;
  font-size: 13px;
  font-family: 'DM Sans', sans-serif;
  outline: none;
  transition: border-color 0.2s;
}
.filter-group select:focus,
.filter-group input:focus { border-color: var(--brand-teal); }
.filter-group select option { background: var(--surface-3); }
.filter-actions { display: flex; gap: 8px; align-items: flex-end; flex-shrink: 0; }

/* ─── SEARCH BOX ────────────────────────────────── */
.search-box {
  position: relative;
  flex: 2;
  min-width: 220px;
}
.search-box input {
  width: 100%;
  background: var(--surface-3);
  border: 1px solid var(--border-color);
  color: var(--text-primary);
  border-radius: 8px;
  padding: 8px 12px 8px 38px;
  font-size: 13px;
  font-family: 'DM Sans', sans-serif;
  outline: none;
  transition: border-color 0.2s;
}
.search-box input:focus { border-color: var(--brand-teal); }
.search-box i {
  position: absolute;
  left: 12px; top: 50%;
  transform: translateY(-50%);
  color: var(--text-dim);
  font-size: 14px;
}

/* ─── BUTTONS ───────────────────────────────────── */
.btn-brand {
  background: linear-gradient(135deg, var(--brand-blue), #1e4fc2);
  color: white;
  border: none;
  border-radius: 8px;
  padding: 8px 16px;
  font-size: 13px;
  font-weight: 600;
  font-family: 'DM Sans', sans-serif;
  cursor: pointer;
  transition: all 0.2s;
  display: flex; align-items: center; gap: 6px;
}
.btn-brand:hover { opacity: 0.9; transform: translateY(-1px); }
.btn-reset {
  background: var(--surface-3);
  color: var(--text-muted);
  border: 1px solid var(--border-color);
  border-radius: 8px;
  padding: 8px 14px;
  font-size: 13px;
  font-weight: 600;
  font-family: 'DM Sans', sans-serif;
  cursor: pointer;
  transition: all 0.2s;
  display: flex; align-items: center; gap: 6px;
}
.btn-reset:hover { color: var(--text-primary); border-color: var(--text-dim); }

/* ─── TABLE WRAPPER ─────────────────────────────── */
.table-wrapper {
  background: var(--surface-card);
  border: 1px solid var(--border-color);
  border-radius: var(--radius-card);
  overflow: hidden;
}
.table-scroll {
  overflow-x: auto;
  max-height: 520px;
  overflow-y: auto;
}
.dt-table {
  width: 100%;
  border-collapse: collapse;
  font-size: 13px;
  min-width: 1200px;
}
.dt-table thead {
  position: sticky;
  top: 0;
  z-index: 10;
}
.dt-table thead th {
  background: var(--surface-1);
  color: var(--text-muted);
  font-size: 11px;
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 0.5px;
  padding: 12px 14px;
  white-space: nowrap;
  border-bottom: 1px solid var(--border-color);
  cursor: pointer;
  user-select: none;
  transition: color 0.2s;
}
.dt-table thead th:hover { color: var(--brand-teal); }
.dt-table thead th.sort-asc::after  { content: ' ↑'; color: var(--brand-teal); }
.dt-table thead th.sort-desc::after { content: ' ↓'; color: var(--brand-teal); }
.dt-table tbody tr {
  border-bottom: 1px solid var(--border-color);
  transition: background 0.15s;
}
.dt-table tbody tr:hover { background: var(--surface-2); }
.dt-table tbody td {
  padding: 11px 14px;
  color: var(--text-primary);
  white-space: nowrap;
  max-width: 200px;
  overflow: hidden;
  text-overflow: ellipsis;
}
.dt-table tbody td.wrap { white-space: normal; max-width: 180px; }

/* ─── BADGES ─────────────────────────────────────── */
.badge-status {
  display: inline-block;
  padding: 3px 10px;
  border-radius: 20px;
  font-size: 11px;
  font-weight: 600;
  white-space: nowrap;
}
.badge-confirmed { background: rgba(16,185,129,0.15); color: #34d399; border: 1px solid rgba(16,185,129,0.3); }
.badge-pending   { background: rgba(245,158,11,0.15); color: #fbbf24; border: 1px solid rgba(245,158,11,0.3); }
.badge-other     { background: rgba(148,163,184,0.1); color: #94a3b8; border: 1px solid rgba(148,163,184,0.2); }

/* ─── PAGINATION ────────────────────────────────── */
.dt-footer {
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 14px 18px;
  border-top: 1px solid var(--border-color);
  flex-wrap: wrap;
  gap: 10px;
}
.dt-info { font-size: 13px; color: var(--text-muted); }
.dt-pagination { display: flex; gap: 4px; align-items: center; flex-wrap: wrap; }
.page-btn {
  width: 32px; height: 32px;
  display: flex; align-items: center; justify-content: center;
  border-radius: 8px;
  background: var(--surface-2);
  border: 1px solid var(--border-color);
  color: var(--text-muted);
  font-size: 13px;
  cursor: pointer;
  transition: all 0.2s;
  font-family: 'DM Sans', sans-serif;
}
.page-btn:hover { border-color: var(--brand-teal); color: var(--brand-teal); }
.page-btn.active { background: var(--brand-blue); color: white; border-color: var(--brand-blue); }
.page-btn:disabled { opacity: 0.3; cursor: default; }
.per-page-select {
  background: var(--surface-2);
  border: 1px solid var(--border-color);
  color: var(--text-primary);
  border-radius: 8px;
  padding: 5px 10px;
  font-size: 13px;
  outline: none;
  font-family: 'DM Sans', sans-serif;
}
.per-page-select option { background: var(--surface-2); }

/* ─── LOADING ────────────────────────────────────── */
.loading-row td {
  text-align: center;
  padding: 40px !important;
  color: var(--text-dim);
}
.spinner {
  display: inline-block;
  width: 24px; height: 24px;
  border: 3px solid var(--border-color);
  border-top-color: var(--brand-teal);
  border-radius: 50%;
  animation: spin 0.7s linear infinite;
  margin-right: 8px;
  vertical-align: middle;
}
@keyframes spin { to { transform: rotate(360deg); } }

/* ─── MINI TABLE (Analytics) ─────────────────────── */
.mini-table { width: 100%; border-collapse: collapse; font-size: 13px; }
.mini-table thead th {
  color: var(--text-muted);
  font-size: 11px;
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 0.5px;
  padding: 8px 12px;
  border-bottom: 1px solid var(--border-color);
  text-align: left;
}
.mini-table tbody td {
  padding: 9px 12px;
  border-bottom: 1px solid rgba(255,255,255,0.03);
  color: var(--text-primary);
}
.mini-table tbody tr:hover { background: var(--surface-2); }
.rank-bar {
  display: flex;
  align-items: center;
  gap: 8px;
}
.rank-bar-fill {
  height: 6px;
  border-radius: 3px;
  background: linear-gradient(90deg, var(--brand-teal), var(--brand-blue));
  transition: width 0.8s ease;
}

/* ─── SKELETON ───────────────────────────────────── */
.skeleton {
  background: linear-gradient(90deg, var(--surface-2) 25%, var(--surface-3) 50%, var(--surface-2) 75%);
  background-size: 200% 100%;
  animation: shimmer 1.5s infinite;
  border-radius: 6px;
  display: inline-block;
}
@keyframes shimmer { to { background-position: -200% 0; } }

/* ─── RESPONSIVE ─────────────────────────────────── */
@media (max-width: 768px) {
  .sidebar { transform: translateX(-100%); }
  .sidebar.open { transform: translateX(0); }
  .main-content { margin-left: 0; }
  .hamburger { display: flex !important; }
  .page-section { padding: 16px; }
  .stats-grid { grid-template-columns: repeat(2, 1fr); }
  .topbar { padding: 12px 16px; }
  .topbar-stat { display: none; }
  .filter-bar { flex-direction: column; }
  .filter-group { min-width: 100%; }
  .filter-actions { width: 100%; }
}
@media (max-width: 480px) {
  .stats-grid { grid-template-columns: 1fr 1fr; }
  .stat-value { font-size: 24px; }
}

/* ─── OVERLAY ─────────────────────────────────────── */
.sidebar-overlay {
  display: none;
  position: fixed;
  inset: 0;
  background: rgba(0,0,0,0.6);
  z-index: 999;
}
.sidebar-overlay.show { display: block; }

/* ─── EXPORT BTN ─────────────────────────────────── */
.btn-export {
  background: rgba(16,185,129,0.15);
  color: var(--brand-green);
  border: 1px solid rgba(16,185,129,0.3);
  border-radius: 8px;
  padding: 7px 14px;
  font-size: 13px;
  font-weight: 600;
  font-family: 'DM Sans', sans-serif;
  cursor: pointer;
  transition: all 0.2s;
  display: flex; align-items: center; gap: 6px;
  text-decoration: none;
}
.btn-export:hover { background: rgba(16,185,129,0.25); color: var(--brand-green); }

/* ─── SCROLLBAR ──────────────────────────────────── */
::-webkit-scrollbar { width: 6px; height: 6px; }
::-webkit-scrollbar-track { background: transparent; }
::-webkit-scrollbar-thumb { background: var(--surface-3); border-radius: 3px; }
::-webkit-scrollbar-thumb:hover { background: var(--brand-blue); }

/* ─── TOOLTIP ────────────────────────────────────── */
.tt { position: relative; cursor: help; }
.tt::after {
  content: attr(data-tip);
  position: absolute;
  bottom: 100%;
  left: 50%;
  transform: translateX(-50%);
  background: var(--surface-1);
  color: var(--text-primary);
  font-size: 11px;
  padding: 4px 8px;
  border-radius: 6px;
  white-space: nowrap;
  pointer-events: none;
  opacity: 0;
  transition: opacity 0.2s;
  border: 1px solid var(--border-color);
  z-index: 9999;
}
.tt:hover::after { opacity: 1; }
</style>
</head>
<body>

<!-- Sidebar Overlay (mobile) -->
<div class="sidebar-overlay" id="sidebarOverlay" onclick="closeSidebar()"></div>

<!-- ─── SIDEBAR ─────────────────────────────────── -->
<aside class="sidebar" id="sidebar">
  <div class="sidebar-logo">
    <div style="display:flex;align-items:center;gap:10px;">
      <div style="width:36px;height:36px;background:linear-gradient(135deg,#1a3a8f,#f97316);border-radius:10px;display:flex;align-items:center;justify-content:center;font-size:16px;">🎓</div>
      <div>
        <div class="brand-name">MITSDE</div>
        <div class="brand-sub">ERP Dashboard</div>
      </div>
    </div>
    <div class="sidebar-badge">OLD ERP Data</div>
  </div>

  <nav class="sidebar-nav">
    <div class="nav-section-label">Main</div>
    <button class="nav-item active" onclick="showSection('overview')">
      <i class="bi bi-grid-1x2-fill"></i> Overview
    </button>
    <button class="nav-item" onclick="showSection('analytics')">
      <i class="bi bi-bar-chart-fill"></i> Analytics
    </button>
    <button class="nav-item" onclick="showSection('students')">
      <i class="bi bi-people-fill"></i> Student Records
    </button>

    <div class="nav-section-label" style="margin-top:8px;">Reports</div>
    <button class="nav-item" onclick="showSection('program')">
      <i class="bi bi-mortarboard-fill"></i> Program Wise
    </button>
    <button class="nav-item" onclick="showSection('specialization')">
      <i class="bi bi-bookmark-star-fill"></i> Specialization Wise
    </button>
  </nav>

  <div class="sidebar-footer">
    <div style="display:flex;align-items:center;gap:6px;">
      <div style="width:8px;height:8px;background:var(--brand-green);border-radius:50%;animation:pulse 2s infinite;"></div>
      <span>Live Database</span>
    </div>
    <div style="margin-top:4px;color:var(--text-dim);font-size:11px;">mitsde_onlinepayment.old_student</div>
  </div>
</aside>

<!-- ─── MAIN CONTENT ─────────────────────────────── -->
<div class="main-content">

  <!-- Topbar -->
  <div class="topbar">
    <div style="display:flex;align-items:center;gap:12px;">
      <button class="hamburger" id="hamburgerBtn" onclick="toggleSidebar()">
        <i class="bi bi-list"></i>
      </button>
      <div class="topbar-title">OLD ERP <span>Student Data</span></div>
    </div>
    <div class="topbar-right">
      <div class="topbar-stat">
        <i class="bi bi-people-fill"></i>
        <span id="topTotalCount"><span class="skeleton" style="width:50px;height:14px;"></span></span>
      </div>
      <div class="topbar-stat" style="display:none;" id="topDateStat">
        <i class="bi bi-clock"></i>
        <span id="topDate"></span>
      </div>
    </div>
  </div>

  <!-- ═══════════════════════════════════════════ -->
  <!-- SECTION: OVERVIEW                           -->
  <!-- ═══════════════════════════════════════════ -->
  <div class="page-section active" id="section-overview">
    <div class="section-header">
      <h2>📊 Overview Dashboard</h2>
      <p>Summary of all old ERP student records from MITSDE database</p>
    </div>

    <!-- Stat Cards -->
    <div class="stats-grid" id="statsGrid">
      <div class="stat-card blue">
        <div class="stat-icon blue"><i class="bi bi-people-fill"></i></div>
        <div class="stat-value" id="s-total">—</div>
        <div class="stat-label">Total Students</div>
      </div>
      <div class="stat-card green">
        <div class="stat-icon green"><i class="bi bi-patch-check-fill"></i></div>
        <div class="stat-value" id="s-confirmed">—</div>
        <div class="stat-label">Confirmed Enrolled</div>
      </div>
      <div class="stat-card gold">
        <div class="stat-icon gold"><i class="bi bi-mortarboard-fill"></i></div>
        <div class="stat-value" id="s-programs">—</div>
        <div class="stat-label">Programs (Courses)</div>
      </div>
      <div class="stat-card orange">
        <div class="stat-icon orange"><i class="bi bi-bookmark-star-fill"></i></div>
        <div class="stat-value" id="s-specs">—</div>
        <div class="stat-label">Specializations</div>
      </div>
      <div class="stat-card red">
        <div class="stat-icon red"><i class="bi bi-exclamation-triangle-fill"></i></div>
        <div class="stat-value" id="s-dues">—</div>
        <div class="stat-label">With Due Amount</div>
      </div>
      <div class="stat-card purple">
        <div class="stat-icon purple"><i class="bi bi-building"></i></div>
        <div class="stat-value">MITSDE</div>
        <div class="stat-label">University</div>
      </div>
    </div>

    <!-- Charts Row 1 -->
    <div class="row g-4">
      <div class="col-lg-6">
        <div class="dash-card">
          <div class="dash-card-header">
            <h5><i class="bi bi-pie-chart-fill" style="color:var(--brand-teal);margin-right:8px;"></i>Student Status Distribution</h5>
          </div>
          <div class="dash-card-body">
            <div class="chart-wrap"><canvas id="chartStatus"></canvas></div>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="dash-card">
          <div class="dash-card-header">
            <h5><i class="bi bi-bar-chart-fill" style="color:var(--brand-accent);margin-right:8px;"></i>Admissions by Year</h5>
          </div>
          <div class="dash-card-body">
            <div class="chart-wrap"><canvas id="chartYear"></canvas></div>
          </div>
        </div>
      </div>
    </div>

    <!-- Charts Row 2 -->
    <div class="row g-4 mt-1">
      <div class="col-lg-7">
        <div class="dash-card">
          <div class="dash-card-header">
            <h5><i class="bi bi-bar-chart-steps" style="color:var(--brand-gold);margin-right:8px;"></i>Top Programs (Course Wise)</h5>
          </div>
          <div class="dash-card-body">
            <div class="chart-wrap"><canvas id="chartProgram"></canvas></div>
          </div>
        </div>
      </div>
      <div class="col-lg-5">
        <div class="dash-card">
          <div class="dash-card-header">
            <h5><i class="bi bi-currency-rupee" style="color:var(--brand-green);margin-right:8px;"></i>Category Breakdown</h5>
          </div>
          <div class="dash-card-body">
            <div class="chart-wrap"><canvas id="chartCategory"></canvas></div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- ═══════════════════════════════════════════ -->
  <!-- SECTION: ANALYTICS                          -->
  <!-- ═══════════════════════════════════════════ -->
  <div class="page-section" id="section-analytics">
    <div class="section-header">
      <h2>📈 Analytics</h2>
      <p>Detailed charts and breakdowns</p>
    </div>

    <div class="row g-4">
      <div class="col-12">
        <div class="dash-card">
          <div class="dash-card-header">
            <h5><i class="bi bi-bar-chart-fill" style="color:var(--brand-teal);margin-right:8px;"></i>Specialization Wise Student Count (Top 20)</h5>
          </div>
          <div class="dash-card-body">
            <div class="chart-wrap" style="height:380px;"><canvas id="chartSpecFull"></canvas></div>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="dash-card">
          <div class="dash-card-header">
            <h5><i class="bi bi-credit-card-fill" style="color:var(--brand-gold);margin-right:8px;"></i>Payment Mode Split</h5>
          </div>
          <div class="dash-card-body">
            <div class="chart-wrap"><canvas id="chartPayment"></canvas></div>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="dash-card">
          <div class="dash-card-header">
            <h5><i class="bi bi-bar-chart-line-fill" style="color:var(--brand-accent);margin-right:8px;"></i>Program Wise (Bar)</h5>
          </div>
          <div class="dash-card-body">
            <div class="chart-wrap"><canvas id="chartProgramBar"></canvas></div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- ═══════════════════════════════════════════ -->
  <!-- SECTION: STUDENTS (Data Table)              -->
  <!-- ═══════════════════════════════════════════ -->
  <div class="page-section" id="section-students">
    <div class="section-header">
      <div style="display:flex;align-items:center;justify-content:space-between;flex-wrap:wrap;gap:12px;">
        <div>
          <h2>🎓 Student Records</h2>
          <p>Full database with search, filters, and pagination — 8000+ records</p>
        </div>
        <button class="btn-export" onclick="exportCSV()"><i class="bi bi-download"></i> Export CSV</button>
      </div>
    </div>

    <!-- Filter Bar -->
    <div class="filter-bar">
      <div class="search-box">
        <i class="bi bi-search"></i>
        <input type="text" id="searchInput" placeholder="Search by name, reg no, email, specialization…" oninput="debounceSearch()">
      </div>
      <div class="filter-group">
        <label>Program (Course)</label>
        <select id="filterCourse" onchange="applyFilters()">
          <option value="">All Programs</option>
        </select>
      </div>
      <div class="filter-group">
        <label>Specialization</label>
        <select id="filterSpec" onchange="applyFilters()">
          <option value="">All Specializations</option>
        </select>
      </div>
      <div class="filter-group">
        <label>Status</label>
        <select id="filterStatus" onchange="applyFilters()">
          <option value="">All Status</option>
        </select>
      </div>
      <div class="filter-group">
        <label>Category</label>
        <select id="filterCategory" onchange="applyFilters()">
          <option value="">All Categories</option>
        </select>
      </div>
      <div class="filter-group">
        <label>Duration</label>
        <select id="filterDuration" onchange="applyFilters()">
          <option value="">All Durations</option>
        </select>
      </div>
      <div class="filter-group">
        <label>Per Page</label>
        <select class="per-page-select" id="perPageSelect" onchange="changePerPage()">
          <option value="25">25</option>
          <option value="50">50</option>
          <option value="100">100</option>
          <option value="200">200</option>
        </select>
      </div>
      <div class="filter-actions">
        <button class="btn-reset" onclick="resetFilters()"><i class="bi bi-x-circle"></i> Reset</button>
        <button class="btn-brand" onclick="applyFilters()"><i class="bi bi-funnel-fill"></i> Apply</button>
      </div>
    </div>

    <!-- Table -->
    <div class="table-wrapper">
      <div class="table-scroll" id="tableScroll">
        <table class="dt-table" id="mainTable">
          <thead>
            <tr>
              <th onclick="sortTable(0)" data-col="0">#</th>
              <th onclick="sortTable(1)" data-col="1">Reg No</th>
              <th onclick="sortTable(2)" data-col="2">Student Name</th>
              <th onclick="sortTable(3)" data-col="3">Contact</th>
              <th onclick="sortTable(4)" data-col="4">Email</th>
              <th onclick="sortTable(5)" data-col="5">Category</th>
              <th onclick="sortTable(6)" data-col="6">Status</th>
              <th onclick="sortTable(7)" data-col="7">Course</th>
              <th onclick="sortTable(8)" data-col="8">Specialization</th>
              <th onclick="sortTable(9)" data-col="9">Duration</th>
              <th onclick="sortTable(10)" data-col="10">Admission Date</th>
              <th onclick="sortTable(11)" data-col="11">Course Last Date</th>
              <th onclick="sortTable(12)" data-col="12">Payment</th>
              <th onclick="sortTable(13)" data-col="13">Total Fee</th>
              <th onclick="sortTable(14)" data-col="14">Paid</th>
              <th onclick="sortTable(15)" data-col="15">Due Amount</th>
            </tr>
          </thead>
          <tbody id="tableBody">
            <tr class="loading-row">
              <td colspan="16"><span class="spinner"></span> Loading student records…</td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="dt-footer">
        <div class="dt-info" id="dtInfo">Loading…</div>
        <div class="dt-pagination" id="dtPagination"></div>
      </div>
    </div>
  </div>

  <!-- ═══════════════════════════════════════════ -->
  <!-- SECTION: PROGRAM WISE                       -->
  <!-- ═══════════════════════════════════════════ -->
  <div class="page-section" id="section-program">
    <div class="section-header">
      <h2>🎓 Program Wise Report</h2>
      <p>Student count grouped by Course/Program</p>
    </div>
    <div class="dash-card">
      <div class="dash-card-header"><h5>Program Distribution Table</h5></div>
      <div class="dash-card-body" style="padding:0;">
        <div style="max-height:600px;overflow-y:auto;">
          <table class="mini-table" id="programTable">
            <thead>
              <tr>
                <th>#</th>
                <th>Program (Course)</th>
                <th>Students</th>
                <th>Share</th>
                <th>Distribution</th>
              </tr>
            </thead>
            <tbody id="programTableBody">
              <tr><td colspan="5" style="text-align:center;padding:30px;color:var(--text-dim);">
                <span class="spinner"></span> Loading…
              </td></tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

  <!-- ═══════════════════════════════════════════ -->
  <!-- SECTION: SPECIALIZATION WISE                -->
  <!-- ═══════════════════════════════════════════ -->
  <div class="page-section" id="section-specialization">
    <div class="section-header">
      <h2>🔖 Specialization Wise Report</h2>
      <p>Student count grouped by Specialization</p>
    </div>
    <div class="dash-card">
      <div class="dash-card-header"><h5>Specialization Distribution Table</h5></div>
      <div class="dash-card-body" style="padding:0;">
        <div style="max-height:600px;overflow-y:auto;">
          <table class="mini-table" id="specTable">
            <thead>
              <tr>
                <th>#</th>
                <th>Specialization</th>
                <th>Students</th>
                <th>Share</th>
                <th>Distribution</th>
              </tr>
            </thead>
            <tbody id="specTableBody">
              <tr><td colspan="5" style="text-align:center;padding:30px;color:var(--text-dim);">
                <span class="spinner"></span> Loading…
              </td></tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

</div><!-- /main-content -->

<style>
@keyframes pulse {
  0%, 100% { opacity: 1; }
  50% { opacity: 0.4; }
}
</style>

<script>
// ─── STATE ────────────────────────────────────────
const API = 'api.php';
const FILTERS_API = 'filters.php';

let state = {
  currentSection: 'overview',
  table: {
    draw: 0,
    page: 1,
    perPage: 25,
    sortCol: 0,
    sortDir: 'ASC',
    search: '',
    filters: {},
    totalRecords: 0,
    filteredRecords: 0,
  },
  charts: {},
  statsLoaded: false,
  chartsLoaded: {},
  programData: null,
  specData: null,
  allData: [],           // for CSV export
};

let searchTimer = null;

// ─── NAV ──────────────────────────────────────────
function showSection(name) {
  document.querySelectorAll('.page-section').forEach(s => s.classList.remove('active'));
  document.querySelectorAll('.nav-item').forEach(n => n.classList.remove('active'));
  document.getElementById('section-' + name).classList.add('active');
  document.querySelectorAll('.nav-item').forEach(n => {
    if (n.textContent.trim().toLowerCase().includes(
      name === 'overview' ? 'overview' :
      name === 'analytics' ? 'analytics' :
      name === 'students' ? 'student' :
      name === 'program' ? 'program' : 'specialization'
    )) n.classList.add('active');
  });
  state.currentSection = name;
  closeSidebar();

  // Lazy load section data
  if (name === 'students' && state.table.draw === 0) loadTable();
  if (name === 'analytics' && !state.chartsLoaded.analytics) loadAnalyticsCharts();
  if (name === 'program' && !state.programData) loadProgramTable();
  if (name === 'specialization' && !state.specData) loadSpecTable();
}

// ─── SIDEBAR (mobile) ─────────────────────────────
function toggleSidebar() {
  document.getElementById('sidebar').classList.toggle('open');
  document.getElementById('sidebarOverlay').classList.toggle('show');
}
function closeSidebar() {
  document.getElementById('sidebar').classList.remove('open');
  document.getElementById('sidebarOverlay').classList.remove('show');
}

// ─── STATS ────────────────────────────────────────
async function loadStats() {
  try {
    const r = await fetch(`${API}?action=stats`);
    const d = await r.json();

    setVal('s-total',     d.total?.toLocaleString());
    setVal('s-confirmed', d.confirmed?.toLocaleString());
    setVal('s-programs',  d.programs?.toLocaleString());
    setVal('s-specs',     d.specializations?.toLocaleString());
    setVal('s-dues',      d.with_dues?.toLocaleString());
    document.getElementById('topTotalCount').textContent = (d.total || 0).toLocaleString() + ' Students';

    // Status chart
    loadStatusChart();
    loadYearChart();
    loadProgramChart(d);
    loadCategoryChart(d);
    state.statsLoaded = true;
  } catch(e) {
    console.error('Stats error:', e);
  }
}

function setVal(id, val) {
  const el = document.getElementById(id);
  if (el) { el.textContent = val || '—'; }
}

// ─── CHART HELPERS ────────────────────────────────
const COLORS_TEAL   = ['#0ea5e9','#38bdf8','#7dd3fc','#bae6fd','#e0f2fe'];
const COLORS_MULTI  = ['#0ea5e9','#f97316','#10b981','#f59e0b','#8b5cf6','#ef4444','#06b6d4','#ec4899','#84cc16','#6366f1','#f43f5e','#14b8a6','#fb923c','#a3e635','#818cf8'];
const CHART_DEFAULTS = {
  responsive: true,
  maintainAspectRatio: false,
  plugins: { legend: { labels: { color: '#94a3b8', font: { family: 'DM Sans', size: 12 } } } },
};

function chartOpts(extra = {}) {
  return { ...CHART_DEFAULTS, ...extra };
}

// ─── STATUS CHART ─────────────────────────────────
async function loadStatusChart() {
  const r = await fetch(`${API}?action=chart_status`);
  const d = await r.json();
  const ctx = document.getElementById('chartStatus').getContext('2d');
  if (state.charts.status) state.charts.status.destroy();
  state.charts.status = new Chart(ctx, {
    type: 'doughnut',
    data: {
      labels: d.labels,
      datasets: [{ data: d.values, backgroundColor: COLORS_MULTI, borderWidth: 2, borderColor: '#1a2744' }]
    },
    options: chartOpts({ plugins: { legend: { position: 'right', labels: { color: '#94a3b8', padding: 12, font: { size: 12 } } } }, cutout: '60%' })
  });
}

// ─── YEAR CHART ───────────────────────────────────
async function loadYearChart() {
  const r = await fetch(`${API}?action=chart_admission_year`);
  const d = await r.json();
  const ctx = document.getElementById('chartYear').getContext('2d');
  if (state.charts.year) state.charts.year.destroy();
  state.charts.year = new Chart(ctx, {
    type: 'bar',
    data: {
      labels: d.labels,
      datasets: [{
        label: 'Admissions',
        data: d.values,
        backgroundColor: 'rgba(14,165,233,0.7)',
        borderColor: '#0ea5e9',
        borderWidth: 1,
        borderRadius: 6,
      }]
    },
    options: chartOpts({
      scales: {
        x: { ticks: { color: '#94a3b8' }, grid: { color: 'rgba(255,255,255,0.04)' } },
        y: { ticks: { color: '#94a3b8' }, grid: { color: 'rgba(255,255,255,0.04)' } }
      },
      plugins: { legend: { display: false } }
    })
  });
}

// ─── PROGRAM CHART ────────────────────────────────
async function loadProgramChart() {
  const r = await fetch(`${API}?action=chart_program`);
  const d = await r.json();
  state.programData = d;

  const ctx = document.getElementById('chartProgram').getContext('2d');
  if (state.charts.program) state.charts.program.destroy();
  const shortLabels = d.labels.map(l => l.length > 30 ? l.substring(0, 28) + '…' : l);
  state.charts.program = new Chart(ctx, {
    type: 'bar',
    data: {
      labels: shortLabels,
      datasets: [{
        label: 'Students',
        data: d.values,
        backgroundColor: COLORS_MULTI.slice(0, d.values.length),
        borderWidth: 0,
        borderRadius: 5,
      }]
    },
    options: chartOpts({
      indexAxis: 'y',
      scales: {
        x: { ticks: { color: '#94a3b8' }, grid: { color: 'rgba(255,255,255,0.04)' } },
        y: { ticks: { color: '#94a3b8', font: { size: 11 } }, grid: { display: false } }
      },
      plugins: { legend: { display: false } }
    })
  });
}

// ─── CATEGORY CHART ───────────────────────────────
function loadCategoryChart(statsData) {
  const cats = statsData.category || {};
  const labels = Object.keys(cats);
  const values = Object.values(cats);
  const ctx = document.getElementById('chartCategory').getContext('2d');
  if (state.charts.category) state.charts.category.destroy();
  state.charts.category = new Chart(ctx, {
    type: 'pie',
    data: {
      labels,
      datasets: [{ data: values, backgroundColor: ['#0ea5e9','#f97316','#10b981','#f59e0b','#8b5cf6'], borderWidth: 2, borderColor: '#1a2744' }]
    },
    options: chartOpts({ plugins: { legend: { position: 'bottom', labels: { color: '#94a3b8', padding: 10 } } } })
  });
}

// ─── ANALYTICS CHARTS ─────────────────────────────
async function loadAnalyticsCharts() {
  state.chartsLoaded.analytics = true;

  // Spec full chart
  const rs = await fetch(`${API}?action=chart_specialization`);
  const ds = await rs.json();
  state.specData = ds;

  const ctx1 = document.getElementById('chartSpecFull').getContext('2d');
  const shortLabels = ds.labels.map(l => l.length > 35 ? l.substring(0, 33) + '…' : l);
  state.charts.specFull = new Chart(ctx1, {
    type: 'bar',
    data: {
      labels: shortLabels,
      datasets: [{
        label: 'Students',
        data: ds.values,
        backgroundColor: COLORS_MULTI.concat(COLORS_MULTI).slice(0, ds.values.length),
        borderWidth: 0,
        borderRadius: 5,
      }]
    },
    options: chartOpts({
      indexAxis: 'y',
      scales: {
        x: { ticks: { color: '#94a3b8' }, grid: { color: 'rgba(255,255,255,0.04)' } },
        y: { ticks: { color: '#94a3b8', font: { size: 11 } }, grid: { display: false } }
      },
      plugins: { legend: { display: false } }
    })
  });

  // Payment mode
  const rp = await fetch(`${API}?action=stats`);
  const dp = await rp.json();
  const pm = dp.payment_mode || {};
  const ctx2 = document.getElementById('chartPayment').getContext('2d');
  state.charts.payment = new Chart(ctx2, {
    type: 'doughnut',
    data: {
      labels: Object.keys(pm),
      datasets: [{ data: Object.values(pm), backgroundColor: ['#0ea5e9','#f97316','#10b981','#8b5cf6'], borderWidth: 2, borderColor: '#1a2744' }]
    },
    options: chartOpts({ cutout: '65%', plugins: { legend: { position: 'bottom', labels: { color: '#94a3b8' } } } })
  });

  // Program bar (horizontal)
  if (!state.programData) {
    const rpr = await fetch(`${API}?action=chart_program`);
    state.programData = await rpr.json();
  }
  const ctx3 = document.getElementById('chartProgramBar').getContext('2d');
  const sl = state.programData.labels.map(l => l.length > 25 ? l.substring(0, 23) + '…' : l);
  state.charts.programBar = new Chart(ctx3, {
    type: 'bar',
    data: {
      labels: sl,
      datasets: [{
        label: 'Students',
        data: state.programData.values,
        backgroundColor: 'rgba(249,115,22,0.7)',
        borderColor: '#f97316',
        borderWidth: 1,
        borderRadius: 6,
      }]
    },
    options: chartOpts({
      scales: {
        x: { ticks: { color: '#94a3b8', font: { size: 10 }, maxRotation: 45 }, grid: { color: 'rgba(255,255,255,0.04)' } },
        y: { ticks: { color: '#94a3b8' }, grid: { color: 'rgba(255,255,255,0.04)' } }
      },
      plugins: { legend: { display: false } }
    })
  });
}

// ─── PROGRAM TABLE ────────────────────────────────
async function loadProgramTable() {
  if (!state.programData) {
    const r = await fetch(`${API}?action=chart_program`);
    state.programData = await r.json();
  }
  const { labels, values } = state.programData;
  const total = values.reduce((a, b) => a + b, 0);
  const max = Math.max(...values);
  const tbody = document.getElementById('programTableBody');
  tbody.innerHTML = labels.map((l, i) => {
    const pct = ((values[i] / total) * 100).toFixed(1);
    const barW = ((values[i] / max) * 100).toFixed(1);
    return `<tr>
      <td>${i + 1}</td>
      <td>${l}</td>
      <td><strong>${values[i].toLocaleString()}</strong></td>
      <td>${pct}%</td>
      <td class="rank-bar"><div class="rank-bar-fill" style="width:${barW}%;min-width:4px;"></div><span style="font-size:11px;color:var(--text-dim);">${values[i]}</span></td>
    </tr>`;
  }).join('');
}

// ─── SPEC TABLE ───────────────────────────────────
async function loadSpecTable() {
  if (!state.specData) {
    const r = await fetch(`${API}?action=chart_specialization`);
    state.specData = await r.json();
  }
  const { labels, values } = state.specData;
  const total = values.reduce((a, b) => a + b, 0);
  const max = Math.max(...values);
  const tbody = document.getElementById('specTableBody');
  tbody.innerHTML = labels.map((l, i) => {
    const pct = ((values[i] / total) * 100).toFixed(1);
    const barW = ((values[i] / max) * 100).toFixed(1);
    return `<tr>
      <td>${i + 1}</td>
      <td>${l}</td>
      <td><strong>${values[i].toLocaleString()}</strong></td>
      <td>${pct}%</td>
      <td class="rank-bar"><div class="rank-bar-fill" style="width:${barW}%;min-width:4px;"></div><span style="font-size:11px;color:var(--text-dim);">${values[i]}</span></td>
    </tr>`;
  }).join('');
}

// ─── FILTERS LOAD ─────────────────────────────────
async function loadFilters() {
  try {
    const r = await fetch(FILTERS_API);
    const d = await r.json();
    populateSelect('filterCourse',   d.courses,    'All Programs');
    populateSelect('filterSpec',     d.specs,      'All Specializations');
    populateSelect('filterStatus',   d.statuses,   'All Status');
    populateSelect('filterCategory', d.categories, 'All Categories');
    populateSelect('filterDuration', d.durations,  'All Durations');
  } catch(e) { console.error('Filter load error:', e); }
}

function populateSelect(id, options, label) {
  const sel = document.getElementById(id);
  const val = sel.value;
  sel.innerHTML = `<option value="">-- ${label} --</option>` +
    options.map(o => `<option value="${esc(o)}">${o}</option>`).join('');
  if (val) sel.value = val;
}

// ─── TABLE ────────────────────────────────────────
async function loadTable() {
  const s = state.table;
  s.draw++;

  const params = new URLSearchParams({
    action:          'datatable',
    draw:            s.draw,
    start:           (s.page - 1) * s.perPage,
    length:          s.perPage,
    search:          s.search,
    order_col:       s.sortCol,
    order_dir:       s.sortDir,
    filter_course:   s.filters.course   || '',
    filter_spec:     s.filters.spec     || '',
    filter_status:   s.filters.status   || '',
    filter_category: s.filters.category || '',
    filter_duration: s.filters.duration || '',
  });

  const tbody = document.getElementById('tableBody');
  tbody.innerHTML = `<tr class="loading-row"><td colspan="16"><span class="spinner"></span> Loading records…</td></tr>`;
  document.getElementById('dtInfo').textContent = 'Loading…';

  try {
    const r  = await fetch(`${API}?${params}`);
    const d  = await r.json();

    if (d.draw !== s.draw) return; // stale response

    s.totalRecords    = d.recordsTotal;
    s.filteredRecords = d.recordsFiltered;
    state.allData     = d.data;

    renderTable(d.data);
    renderPagination();
    updateInfo();
    updateSortHeaders();
  } catch(e) {
    tbody.innerHTML = `<tr class="loading-row"><td colspan="16" style="color:var(--brand-red);">⚠️ Error loading data. Check API connection.</td></tr>`;
  }
}

function renderTable(rows) {
  const tbody = document.getElementById('tableBody');
  if (!rows || rows.length === 0) {
    tbody.innerHTML = `<tr class="loading-row"><td colspan="16">No records found.</td></tr>`;
    return;
  }

  const start = (state.table.page - 1) * state.table.perPage + 1;
  tbody.innerHTML = rows.map((r, i) => {
    const statusBadge = r.Status
      ? `<span class="badge-status ${r.Status.toLowerCase().includes('confirm') ? 'badge-confirmed' : r.Status.toLowerCase().includes('pend') ? 'badge-pending' : 'badge-other'}">${esc(r.Status)}</span>`
      : '—';
    const dueVal = r.DueAmount && r.DueAmount !== '0' && r.DueAmount !== '0.00'
      ? `<span style="color:var(--brand-red);font-weight:600;">₹${esc(r.DueAmount)}</span>`
      : `<span style="color:var(--brand-green);">₹${esc(r.DueAmount || '0')}</span>`;
    return `<tr>
      <td style="color:var(--text-dim);font-size:12px;">${start + i}</td>
      <td><strong style="font-size:12px;">${esc(r.RegistrationNo || '—')}</strong></td>
      <td class="wrap">${esc(r.StudentName || '—')}</td>
      <td>${esc(r.ContactNo || '—')}</td>
      <td style="font-size:12px;">${esc(r.Email || '—')}</td>
      <td>${esc(r.Category || '—')}</td>
      <td>${statusBadge}</td>
      <td class="wrap">${esc(r.Course || '—')}</td>
      <td class="wrap">${esc(r.Specialization || '—')}</td>
      <td>${esc(r.Duration || '—')}</td>
      <td>${esc(r.DateOfAdmisssion || '—')}</td>
      <td>${esc(r.CourseLastDate || '—')}</td>
      <td><span style="font-size:12px;">${esc(r.LumpsumInstallment || '—')}</span></td>
      <td>₹${esc(r.TotalCourseFee || '0')}</td>
      <td style="color:var(--brand-green);">₹${esc(r.TotalCourseFeePaid || '0')}</td>
      <td>${dueVal}</td>
    </tr>`;
  }).join('');
}

function renderPagination() {
  const s = state.table;
  const totalPages = Math.ceil(s.filteredRecords / s.perPage);
  const pg = document.getElementById('dtPagination');
  if (totalPages <= 1) { pg.innerHTML = ''; return; }

  let html = '';

  // Prev
  html += `<button class="page-btn" ${s.page === 1 ? 'disabled' : ''} onclick="goPage(${s.page - 1})"><i class="bi bi-chevron-left"></i></button>`;

  // Page numbers (smart window)
  const range = pageRange(s.page, totalPages);
  let prev = null;
  for (const p of range) {
    if (prev !== null && p - prev > 1) {
      html += `<button class="page-btn" disabled>…</button>`;
    }
    html += `<button class="page-btn ${p === s.page ? 'active' : ''}" onclick="goPage(${p})">${p}</button>`;
    prev = p;
  }

  // Next
  html += `<button class="page-btn" ${s.page === totalPages ? 'disabled' : ''} onclick="goPage(${s.page + 1})"><i class="bi bi-chevron-right"></i></button>`;

  pg.innerHTML = html;
}

function pageRange(current, total) {
  const delta = 2;
  const pages = new Set();
  pages.add(1);
  pages.add(total);
  for (let i = Math.max(2, current - delta); i <= Math.min(total - 1, current + delta); i++) {
    pages.add(i);
  }
  return [...pages].sort((a, b) => a - b);
}

function goPage(p) {
  const s = state.table;
  const totalPages = Math.ceil(s.filteredRecords / s.perPage);
  if (p < 1 || p > totalPages) return;
  s.page = p;
  loadTable();
  document.getElementById('tableScroll').scrollTop = 0;
}

function updateInfo() {
  const s = state.table;
  const from = (s.page - 1) * s.perPage + 1;
  const to   = Math.min(s.page * s.perPage, s.filteredRecords);
  document.getElementById('dtInfo').textContent =
    `Showing ${from.toLocaleString()}–${to.toLocaleString()} of ${s.filteredRecords.toLocaleString()} records (${s.totalRecords.toLocaleString()} total)`;
}

function updateSortHeaders() {
  document.querySelectorAll('.dt-table thead th').forEach(th => {
    const col = parseInt(th.dataset.col);
    th.classList.remove('sort-asc', 'sort-desc');
    if (col === state.table.sortCol) {
      th.classList.add(state.table.sortDir === 'ASC' ? 'sort-asc' : 'sort-desc');
    }
  });
}

function sortTable(col) {
  const s = state.table;
  if (s.sortCol === col) {
    s.sortDir = s.sortDir === 'ASC' ? 'DESC' : 'ASC';
  } else {
    s.sortCol = col;
    s.sortDir = 'ASC';
  }
  s.page = 1;
  loadTable();
}

// ─── FILTERS ──────────────────────────────────────
function applyFilters() {
  state.table.filters = {
    course:   document.getElementById('filterCourse').value,
    spec:     document.getElementById('filterSpec').value,
    status:   document.getElementById('filterStatus').value,
    category: document.getElementById('filterCategory').value,
    duration: document.getElementById('filterDuration').value,
  };
  state.table.search = document.getElementById('searchInput').value.trim();
  state.table.page = 1;
  loadTable();
}

function resetFilters() {
  document.getElementById('filterCourse').value   = '';
  document.getElementById('filterSpec').value     = '';
  document.getElementById('filterStatus').value   = '';
  document.getElementById('filterCategory').value = '';
  document.getElementById('filterDuration').value = '';
  document.getElementById('searchInput').value    = '';
  state.table.filters = {};
  state.table.search  = '';
  state.table.page    = 1;
  loadTable();
}

function changePerPage() {
  state.table.perPage = parseInt(document.getElementById('perPageSelect').value);
  state.table.page = 1;
  loadTable();
}

function debounceSearch() {
  clearTimeout(searchTimer);
  searchTimer = setTimeout(applyFilters, 400);
}

// ─── EXPORT CSV ───────────────────────────────────
function exportCSV() {
  if (!state.allData || state.allData.length === 0) {
    alert('No data to export. Please load the student records first.');
    return;
  }
  const cols = ['RegistrationNo','StudentName','ContactNo','Email','Category','SubCategory','Status','Course','Specialization','Duration','DateOfAdmisssion','CourseLastDate','LumpsumInstallment','TotalCourseFee','TotalCourseFeePaid','DueAmount'];
  const header = cols.join(',');
  const rows = state.allData.map(r =>
    cols.map(c => '"' + (r[c] || '').toString().replace(/"/g, '""') + '"').join(',')
  );
  const csv = [header, ...rows].join('\n');
  const blob = new Blob([csv], { type: 'text/csv' });
  const a = document.createElement('a');
  a.href = URL.createObjectURL(blob);
  a.download = 'MITSDE_OldERP_Students_' + new Date().toISOString().slice(0,10) + '.csv';
  a.click();
}

// ─── UTILS ────────────────────────────────────────
function esc(str) {
  if (str == null) return '';
  return String(str)
    .replace(/&/g, '&amp;')
    .replace(/</g, '&lt;')
    .replace(/>/g, '&gt;')
    .replace(/"/g, '&quot;');
}

// ─── DATE ─────────────────────────────────────────
function setDate() {
  const now = new Date();
  const opts = { day: '2-digit', month: 'short', year: 'numeric', hour: '2-digit', minute: '2-digit' };
  document.getElementById('topDate').textContent = now.toLocaleDateString('en-IN', opts);
  document.getElementById('topDateStat').style.display = 'flex';
}

// ─── INIT ─────────────────────────────────────────
document.addEventListener('DOMContentLoaded', () => {
  setDate();
  loadStats();
  loadFilters();
});
</script>
</body>
</html>
