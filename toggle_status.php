<?php
$conn = mysql_connect("localhost", "mitsde_onlinepay", "jNq%,6!)0RmK") or die("Connection failed");
mysql_select_db("mitsde_onlinepayment", $conn);

$id = isset($_POST['id']) ? intval($_POST['id']) : 0;
$status = isset($_POST['status']) ? intval($_POST['status']) : -1;

if ($id > 0 && ($status == 0 || $status == 1)) {
    mysql_query("UPDATE tbl_counselor SET active='$status' WHERE id=$id");
    echo "Updated";
} else {
    http_response_code(400);
    echo "Invalid request";
}
?>
