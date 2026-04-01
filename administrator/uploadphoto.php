<?php

include("include/connection.php");

$file_formats = array("jpg","png","gif","bmp","svg","bmp","jpeg","JPG","PNG","GIF","BMP","SVG","JPEG","BMP");
$id=$_GET["id"];
$ftype=$_GET["ft"];
$n=$_GET["n"];
$fname=$n;
$filepath =$_GET["dir"];






$filepathupload = "../apply/".$_GET["dir"];

if($_GET['memberID']!='') {

$memberID = $_GET['memberID'];

    
}

//echo '<pre>'; print_r($_POST); exit; 



//if (isset($_POST['submiteventimg']) && $_POST['submiteventimg']=="Submit") {

 $name = $_FILES['imagefile']['name']; // filename to get file's extension
 $size = $_FILES['imagefile']['size'];
 
 if (strlen($name)) {
 	$extension = substr($name, strrpos($name, '.')+1);
 	if (in_array($extension, $file_formats)) { // check it if it's a valid format or not
 		if ($size < (1024 * 1024)) { // check it if it's bigger than 2 mb or no
 		
 		//echo "IN SIZE"; exit; 
 		
 		
 			$filename =$fname."_".$id."_".$ftype.".". $extension;
 			$tmp = $_FILES['imagefile']['tmp_name'];
 				if (move_uploaded_file($tmp, $filepathupload."/".$filename)) {

                    //  echo "IN MOVE";   exit;                
 
                                     mysqli_query($conn,"UPDATE tbl_students_data SET photo='".$filepath.'/'.$filename."' WHERE student_id='".$memberID."'");  
                                     header('location:avt_admin_uploads.php?id='.$memberID.'&msg=uploaded'); 
                                     
				
 				}
 		} else {
 			echo "Your file size is bigger than 2MB.";
 		}
 	} else {
 			echo "Invalid file format.";
 	}
 } else {
 	echo "Please select image..!";
 }
 exit();
//}
 
?>