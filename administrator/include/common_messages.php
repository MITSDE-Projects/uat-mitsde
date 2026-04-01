<?php

if(isset($_GET['msg']) && $_GET['msg']=='profile_updated'){
		echo "<div class='class_err'>Profile updated successfully!...</div>"; 
}


if(isset($_GET['msg']) && $_GET['msg']=='invalid_credentials'){
		echo "<div class='class_err'>Invalid Username / Password,Kindly contact to admin.</div>"; 
}


?>