<?php
include "include/connection.php";


$id=$_GET["id"];
$sql = "UPDATE student SET eligible='no' WHERE applicationid='$id'";
mysqli_query($conn,$sql);

?>