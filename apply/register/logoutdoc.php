<?php require('includes/config.php');

$pid=$_GET["pid"];
$memberid=$_GET["id"];
 include "../php/db.php";

        
//logout
$user->logout(); 

//logged in return to index page
header('Location: http://dat.net.in/register/?do=ow');
exit;
?>