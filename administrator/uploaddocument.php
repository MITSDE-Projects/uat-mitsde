<?php
include("include/connection.php");
$file_formats = array("pdf","jpg","jpeg","png","bmp","JPG","PNG","GIF","BMP","SVG","JPEG","PDF","BMP");
$id=$_GET["id"];
$ftype=$_GET["ft"];
$n=$_GET["n"];
$fname=$n;	
$filepath =$_GET["dir"];






$filepathupload = "../apply/".$_GET["dir"];

//echo $filepathupload; 



if($_GET['memberID']!='') {

$memberID = $_GET['memberID'];

}



if (isset($_POST['submiteventimg']) && $_POST['submiteventimg']=="Submit") {

$name = $_FILES['docfile']['name']; // filename to get file's extension
$size = $_FILES['docfile']['size'];
//die;
 if (strlen($name)) 
 {
     
 $extension = substr($name, strrpos($name, '.')+1);
 	if (in_array($extension, $file_formats)) 
 	{ // check it if it's a valid format or not
 		if ($size < (1024 * 1024)) 
 		{ // check it if it's bigger than 2 mb or no
 			$filename =$fname."_".$id."_".$ftype.".". $extension;
 			$tmp = $_FILES['docfile']['tmp_name'];
 				if (move_uploaded_file($tmp, $filepathupload."/".$filename)) {
		                       
		                       //echo "IN IF"; exit; 
                    //echo "</br>UPDATE tbl_students_data SET $ftype ='".$filepath.'/'.$filename."' WHERE student_id='".$memberID."'";                          
               mysqli_query($conn,"UPDATE tbl_students_data SET $ftype ='".$filepath.'/'.$filename."' WHERE student_id='".$memberID."'");         
//die;
                     header('location:avt_admin_uploads.php?id='.$memberID.'&message=Document Uploaded Successfully'); 
 				}
					else {
						
 					echo "Error in Uplaoding Document";
 				}
 		} else {
 			echo "Your file size is bigger than 2MB.";
 		}
 	} else {
 			echo "Invalid file format.";
 	}
 } 
 exit();
}
 
?>