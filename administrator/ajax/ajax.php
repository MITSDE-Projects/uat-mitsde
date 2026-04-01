<?php
include("../include/connection.php");
global $conn;

//echo "IN AJAX";

if(isset($_POST['process']) && $_POST['process']=='sop_update_true'){
extract($_POST);

if(mysqli_query($conn,"UPDATE student SET sop_submit='1' WHERE memberID='".$_POST['value']."'")){
	echo "1";
}

}


if(isset($_POST['process']) && $_POST['process']=='sop_update_false'){
extract($_POST);

if(mysqli_query($conn,"UPDATE student SET sop_submit='0' WHERE memberID='".$_POST['value']."'")){
	
	echo "0";

}
		
}


if(isset($_POST['process']) && $_POST['process']=='ast_update_true'){


extract($_POST);

if(mysqli_query($conn,"UPDATE student SET ast_submit='1' WHERE memberID='".$_POST['value']."'")){
	
	echo "1";

}
		
}


if(isset($_POST['process']) && $_POST['process']=='ast_update_false'){

extract($_POST);
if(mysqli_query($conn,"UPDATE student SET ast_submit='0' WHERE memberID='".$_POST['value']."'")){
	echo "0";
}
		
}

if(isset($_POST['process']) && $_POST['process']=='video_submit_true'){


extract($_POST);

if(mysqli_query($conn,"UPDATE student SET video_submit='1' WHERE memberID='".$_POST['value']."'")){
	
	echo "1";

}
		
}


if(isset($_POST['process']) && $_POST['process']=='video_submit_false'){


extract($_POST);

if(mysqli_query($conn,"UPDATE student SET video_submit='0' WHERE memberID='".$_POST['value']."'")){
	echo "0";
}
}



if(isset($_POST['process']) && $_POST['process']=='offer_submit_true'){



extract($_POST);

if(mysqli_query($conn,"UPDATE student SET offer_sent='1' WHERE memberID='".$_POST['value']."'")){
	echo "1";
}
		
}


if(isset($_POST['process']) && $_POST['process']=='offer_submit_false'){


extract($_POST);

if(mysqli_query($conn,"UPDATE student SET offer_sent='0' WHERE memberID='".$_POST['value']."'")){
	echo "0";
}
}

if(isset($_POST['process']) && $_POST['process']=='confirm_sent_true'){


extract($_POST);

if(mysqli_query($conn,"UPDATE student SET confirm_sent='1' WHERE memberID='".$_POST['value']."'")){
	
	echo "1";

}
		
}


if(isset($_POST['process']) && $_POST['process']=='confirm_sent_false'){


extract($_POST);

if(mysqli_query($conn,"UPDATE student SET confirm_sent='0' WHERE memberID='".$_POST['value']."'")){
	echo "0";
}
}




if(isset($_POST['process']) && $_POST['process']=='admission_confirm_true'){
extract($_POST);
if(mysqli_query($conn,"UPDATE student SET admission_confirm='1' WHERE memberID='".$_POST['value']."'")){
		echo "1";
}

}


if(isset($_POST['process']) && $_POST['process']=='admission_confirm_false'){
extract($_POST);

if(mysqli_query($conn,"UPDATE student SET admission_confirm='0' WHERE memberID='".$_POST['value']."'")){
	echo "0";
}
}



?>