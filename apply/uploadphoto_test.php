<?php

include("php/db.php");

$file_formats = array("jpg","png","gif","bmp","svg","jpeg","JPG","PNG","GIF","BMP","SVG","JPEG");
$id=$_GET["id"];
$ftype=$_GET["ft"];
$n=$_GET["n"];
$fname=$n;
echo"getpath-->".$filepath =$_GET["dir"];
$memberID = $_GET['memberID'];

die;

if (isset($_POST['submiteventimg']) && $_POST['submiteventimg']=="Submit") {

 $name = $_FILES['imagefile']['name']; // filename to get file's extension
 $size = $_FILES['imagefile']['size'];
 
 if (strlen($name)) {
 	$extension = substr($name, strrpos($name, '.')+1);
 	if (in_array($extension, $file_formats)) { // check it if it's a valid format or not
 		if ($size < (1024 * 1024)) { // check it if it's bigger than 2 mb or no
 			$filename =$fname."_".$id."_".$ftype.".". $extension;
 			$tmp = $_FILES['imagefile']['tmp_name'];
 				if (move_uploaded_file($tmp, $filepath."/".$filename)) {

     //echo "UPDATE tbl_students_data SET $ftype ='".$filepath.'/'.$filename."' WHERE student_id='".$memberID."'"; exit; 
    

     if(mysqli_query($connection,"UPDATE tbl_students_data SET photo='".$filepath.'/'.$filename."' WHERE student_id='".$memberID."'"))
     {

   

//exit;
    header('location:page4_form.php');   

     }  
    
						if($extension!="pdf")
						{
						 echo $filename; //exit;
						}
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
 //exit();
}
 
?>