<?php
ob_start();
session_start();

//set timezone
date_default_timezone_set('Asia/Kolkata');



//application address
define('DIR','http://mitsde.com/apply/register/');


define('DBHOST','localhost');
define('DBUSER','mitsde_studentda');
define('DBPASS','Custom@123');
define('DBNAME','mitsde_studentdata');


define('ADMISSIONS MIT-SDE','admissions@mitsde.com');

try {

	//create PDO connection
	$db = new PDO("mysql:host=".DBHOST.";port=3306;dbname=".DBNAME, DBUSER, DBPASS);
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch(PDOException $e) {
	//show error
    echo '<p class="bg-danger">'.$e->getMessage().'</p>';
    exit;
}

//include the user class, pass in the database connection
include('classes/user.php');
//include('classes/phpmailer/mail.php');
$user = new User($db);
?>
