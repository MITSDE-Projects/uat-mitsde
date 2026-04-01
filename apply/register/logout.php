<?php require('includes/config.php');

$pid=$_GET["pid"];
$memberid=$_GET["id"];
 include "../php/db.php";
 include "../php/populate.php";
		$email = $_SESSION['email'];	
		
        mysqli_query($connection,"UPDATE student SET is_online='0' WHERE memberID='".$_SESSION['memberID']."'");
        
//logout
$user->logout(); 

session_destroy(); 

//logged in return to index page
header('Location: http://mitsde.com/apply/register/index.php');
exit;
?>