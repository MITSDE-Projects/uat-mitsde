<?php
// ============================================
// MITSDE - Filter Options API — PDO version
// ============================================

header('Content-Type: application/json');
require_once 'config.php';

$db = getDB();

function fetchDistinct(PDO $db, string $col): array {
    return $db->query("SELECT DISTINCT `$col` FROM old_student WHERE `$col` IS NOT NULL AND `$col` != '' ORDER BY `$col` ASC")
              ->fetchAll(PDO::FETCH_COLUMN);
}

echo json_encode([
    'courses'    => fetchDistinct($db, 'Course'),
    'specs'      => fetchDistinct($db, 'Specialization'),
    'statuses'   => fetchDistinct($db, 'Status'),
    'categories' => fetchDistinct($db, 'Category'),
    'durations'  => fetchDistinct($db, 'Duration'),
]);
