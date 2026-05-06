<?php
include("admin/include/configpdo.php");

$id = isset($_POST['id']) ? intval($_POST['id']) : 0;
$status = isset($_POST['status']) ? intval($_POST['status']) : -1;

if ($id > 0 && ($status === 0 || $status === 1)) {

    try {

        $stmt = $conn->prepare("UPDATE tbl_counselor SET active = ? WHERE id = ?");
        $stmt->execute([$status, $id]);

        echo "success"; // important for JS

    } catch (PDOException $e) {

        http_response_code(500);
        echo "error";
    }

} else {

    http_response_code(400);
    echo "invalid";
}
?>
