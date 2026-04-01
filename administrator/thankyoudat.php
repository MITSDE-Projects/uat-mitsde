<?php include("include/connection.php"); 


if(isset($_GET['email'])){


//echo "UPDATE tbl_dat_result SET confim_avt='1' WHERE email='".$_GET['email']."'"; exit;

if(mysqli_query($conn,"UPDATE tbl_dat_result SET confirm_avt='1' AND timedate = NOW() WHERE email='".$_GET['email']."'")){

header('location:http://www.avantikauniversity.edu.in/dat_result.php?msg=avantika_confirm&email='.$_GET['email']);

}


}




?>









