<?php
ob_start();
session_start();
include("include/connection.php");
global $conn;
include("include/header.php");
?>


<?


//echo "SELECT * FROM student WHERE memeberID='".$_GET['id']."'"; exit;


$getstuddtata = mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM student WHERE memberID='".$_GET['id']."'"));

//echo '<pre>'; print_r($getstuddtata); exit; 


?>













<?php include("include/footer.php");?>