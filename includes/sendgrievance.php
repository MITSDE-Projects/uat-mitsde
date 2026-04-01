<?php
include('connection.php'); 
require_once('phpMailer/class.phpmailer.php');
require_once('phpMailer/class.smtp.php');

if(isset($_POST['btnSubmit']))
{
   
echo "</br>role--->".$role = $_POST['role'];
echo "</br>role--->".$code = $_POST['code'];
echo "</br>role--->".$Name = $_POST['form_name'];
echo "</br>role--->".$Email = $_POST['form_email'];
echo "</br>role--->".$Phone = $_POST['form_phone'];
echo "</br>role--->".$message=$_POST['form_message'];




//die;

 if(empty($role) ||  empty($Name) || empty($Email) || empty($Phone) || empty($message))
  {
    echo("</br>You didn't select any Subject for exam form.");
    ?>
    <button onclick="history.back()">Go Back</button>
 <?
  }
  else
  {
         $q = mysql_query('SELECT MAX(id) as id from `GrievanceRedressal`');
             $row2 = mysql_fetch_assoc($q);
              //echo "</br>id-->".$next_auto_inc = $row2['tk_id'];
               $number = $row2['id'] + 1;
	           $Tk_no="TK-".$T_ID;
	           
	           $number = 1;
               $number = sprintf('%04d',$number);
               print date('Y').$number;
	           
	    
	    $result1 = mysql_query("SELECT * FROM GrievanceRedressal WHERE autono = '".$Tk_no."'");
             
		
        if(mysql_num_rows($result1)>0)
        {
			echo "</br>ticketID--D->".$autonumber="TK-".$T_ID."D";
			//echo "</br>ticketID--D->".$ticketID=$T_ID."D";
			 //die;
        }
		else
		{
		echo "</br>ticketID--D->".	$autonumber="TK-".$T_ID;
			//echo "</br>ticketID--T->".$ticketID=$T_ID;
			//die;
		}
		
		
		
		
		$target_dir = "uploads/";
    
    // Image1
     $target_file = $target_dir . basename($_FILES["Attchement1"]["name"]);
    $uploadOk = 1;
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

    if (move_uploaded_file($_FILES["Attchement1"]["tmp_name"], $target_file))
     {
        echo "</br>The file ". basename($_FILES["Attchement1"]["name"]). "has been uploaded.";
         
     } 
    else 
    {
      echo "</br>Sorry, there was an error uploading your file.";
    }

               $image=basename($_FILES["Attchement1"]["name"]); // used to store the filename in a variable
    
     // Image2
         
          $target_file2 = $target_dir . basename($_FILES["Attchement2"]["name"]);
    $uploadOk2 = 1;
    $imageFileType2 = pathinfo($target_file2,PATHINFO_EXTENSION);

    if (move_uploaded_file($_FILES["Attchement2"]["tmp_name"], $target_file2))
    {
        echo "</br>The file ". basename($_FILES["Attchement2"]["name"]). "has been uploaded.";
    } 
    else
    {
        echo "</br>Sorry, there was an error uploading your file.";
    }

              $image2=basename($_FILES["Attchement2"]["name"]); // used to store the filename in a variable
    
    
        // <!-----------------------Image3---------------------->
             
             
             $target_file3 = $target_dir . basename($_FILES["Attchement3"]["name"]);
    $uploadOk3 = 1;
    $imageFileType3 = pathinfo($target_file3,PATHINFO_EXTENSION);

    if (move_uploaded_file($_FILES["Attchement3"]["tmp_name"], $target_file3))
	{
		
        echo "</br>The file ". basename($_FILES["Attchement3"]["name"]). "has been uploaded.";
    } 
	else
	{
       echo "</br>Sorry, there was an error uploading your file.";
    }

          $image3=basename($_FILES["Attchement3"]["name"]); // used to store the filename in a variable
  
   
    date_default_timezone_set('Asia/Calcutta');
             $CurrentDateTime=date('Y-m-d : h:i:s');
                 
   /*echo  "</br>INSERT INTO `GrievanceRedressal` (`id`, `autono`, `role`, `code`, `name`, `email`, `phone`, `complaint`, `attach1`, `attach2`, `attach3`, `DT`) VALUES (NULL, '$autonumber', '$role', '$code', '$Name', '$Email', '$Phone', '$message', '$image', '$image2', '$image3', '$CurrentDateTime')";
    $adddata=mysql_query($conn,"INSERT INTO `GrievanceRedressal` (`id`, `autono`, `role`, `code`, `name`, `email`, `phone`, `complaint`, `attach1`, `attach2`, `attach3`, `DT`) VALUES (NULL, '$autonumber', '$role', '$code', '$Name', '$Email', '$Phone', '$message', '$image', '$image2', '$image3', '$CurrentDateTime')");
	  
      //mysql_error(); exit();    
	      if(!$adddata)
		  {
		        echo "</br>Error In Add Query for flag 1".mysql_error($adddata); exit();	
                echo "</br>eroro-->";
                die;
		  }
		  else
		  {
		      echo "</br>insert flag 1";
		  }*/
		  
		  
		  $insert=mysql_query("INSERT INTO `GrievanceRedressal` (`id`, `autono`, `role`, `code`, `name`, `email`, `phone`, `complaint`, `attach1`, `attach2`, `attach3`, `DT`) VALUES (NULL, '$autonumber', '$role', '$code', '$Name', '$Email', '$Phone', '$message', '$image', '$image2', '$image3', '$CurrentDateTime')");
	
	    if(!$insert)
		 {
		    echo "Error in insert Query".die(); 
		}




//die;
   //------------------------------Success Mail----------------------------------------
		      $mail  = new PHPMailer();
                 ob_start(); //Turn on output buffering
				 ?>
				 <p>Dear <?php echo $StudentName; ?></p>
				 
				 
				 
				 <table width="900px" border="2">
						 <tbody>
						 
						 <tr height="30px">
						 <td width="150px" style="padding-left:5px">
						 <b>Student Name </b> <br></td>
						 <td width="150px" style="padding-left:5px" colspan="4"><?php echo $Name; ?><br></td>
						 </tr>
						 
						 
						        
						 </tbody>
						 </table>
				<br>
				  Regards,<br>
				  <b>Exam</b><br>
				  <b>Team MIT-School of Distance Education</b></p>
				 <?php
		           $body  = ob_get_clean();
                          //$mail->Mailer = "mail";
                          $mail->IsSMTP(); // telling the class to use SMTP
                          //$mail->IsMail(); // telling the class to use SMTP
                          $mail->SMTPDebug  = 2;                     // enables SMTP debug information (for testing) // 1 = errors and messages
                        // $mail->SMTPSecure = "ssl";                 // sets the prefix to the servier                                          // 2 = messages only
                         $mail->SMTPAuth   = true;                  // enable SMTP authentication
                        $mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
                        $mail->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
                        $mail->Port       = 465;                   // set the SMTP port for the GMAIL
                        $mail->Username   = "no-replay@mitsde.com";  // GMAIL username
                        $mail->Password   = "NoReplay@123";            // GMAIL password
                
                       
                        $mail->SetFrom('admissions@mitsde.com', 'MIT School of Distance Education');
                       
                        $mail->AddReplyTo('no-reply@mitsde.com', 'No-Reply');
                       
                        $mail->Subject = "MITSDE Exam Form Summary";
                       
                        $mail->AltBody = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test
                       
                        $mail->MsgHTML($body);
						$mail->SetLanguage("en", 'includes/phpMailer/language/');
						
						$address = $Email;
						$mail->AddAddress($address);
				
						$mail->AddBCC('sanjay.gaikwad@mitsde.com');
						//$mail->AddBCC('exam@mitsde.com');
						$mail->Send();
						print_r($mail);
		  //------------------------------Success Mail END----------------------------------------
		       
		       
		       
            header("Location:../thankyou.php");
           // echo "successfull";
			       //$msgs='Add Successfully';
                  // echo '<script type="text/javascript"> window.location ="open_ticket.php?msg=Add Successfully";</script>';
                   ?>
              
                   <?php
                  // header("Location:../open_ticket.php");

	     	   // header("Location: https://mitsde.com/cms/open_ticket.php?msg=$msgs");
	     	   
      }
		  
}



?>