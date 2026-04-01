<?php
include_once("commonfunctions.php");
$DB_Server = "localhost"; // MySQL Server
$DB_Username = "mitsde_studentda"; // MySQL Username
$DB_Password = "Custom@123"; // MySQL Password
$DB_DBName = "mitsde_studentdata"; // MySQL Database Name

$connection = mysqli_connect($DB_Server, $DB_Username, $DB_Password,$DB_DBName);


?>