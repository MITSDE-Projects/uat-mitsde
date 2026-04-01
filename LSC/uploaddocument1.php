<?php
include("php/db.php");
$file_formats = array("pdf","jpg","jpeg","png","JPG","PNG", "GIF","BMP","SVG","JPEG","PDF");
$id=$_GET["id"];
$ftype=$_GET["ft"];
$n=$_GET["n"];
$fname=$n;	
$filepath =$_GET["dir"];
$memberID = $_GET['memberID'];

//die;
if (isset($_POST['submiteventimg']) && $_POST['submiteventimg']=="Submit") {

 $name = $_FILES['docfile']['name']; // filename to get file's extension
 $size = $_FILES['docfile']['size'];
 
 if (strlen($name)) {
 	$extension = substr($name, strrpos($name, '.')+1);
 	if (in_array($extension, $file_formats)) { // check it if it's a valid format or not
 		if ($size < (1024 * 1024)) { // check it if it's bigger than 2 mb or no
 			$filename =$fname."_".$id."_".$ftype.".". $extension;
 			$tmp = $_FILES['docfile']['tmp_name'];
 				if (move_uploaded_file($tmp, $filepath."/".$filename)) {
 				    
 				    
 				    
 				    
						//if($extension=="pdf")
 						//echo "UPDATE tbl_students_data SET $ftype ='".$filepath.'/'.$filename."' WHERE student_id='".$memberID."'";
                                              //echo $filepath."/".$filename;  exit;
                                              
          //echo "UPDATE tbl_students_data SET $ftype ='".$filepath.'/'.$filename."' WHERE student_id='".$memberID."'"; exit;                            
                                              
            mysqli_query($connection,"UPDATE tbl_students_data SET $ftype ='".$filepath.'/'.$filename."' WHERE student_id='".$memberID."'");         

                                           
                                if(isset($_GET['do']) && $_GET['do']=='ow')
                                { 
                                    header('Location:upload_docs.php');
                                } 
                                else { 
                                    
                                    
                                    
                                    header('location:page4.php?memberID='.$memberID.'&message=Document Uploaded Successfully');
                                
                                    
                                    
                                }
                                
                                
 				}
					else {
						
 					echo "";
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