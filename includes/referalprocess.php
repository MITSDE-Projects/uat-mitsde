<?php require_once('phpmailer/class.phpmailer.php');
require_once('phpmailer/class.smtp.php');

include_once "../apply/php/db.php";

if(isset($_POST['submit']))
    {
 extract($_POST); 
    


    echo "</br>leadid-->".$RegistrationNo;
    echo "</br>RName-->".$RName;
    echo "</br>REmail-->".$REmail;
    echo "</br>Refrrelcode-->".$Refrrelcode;
    echo "</br>Refrrel_Name-->".$Refrrel_Name;
    echo "</br>student_email-->".$student_email;
    echo "</br>student_mob-->".$student_mob;
    echo "</br>alternet_student_mob-->".$alternet_student_mob;
	
	
	$setdatacnt = mysqli_fetch_assoc(mysqli_query($connection,"SELECT COUNT(*) AS CNT FROM referral_student WHERE referral_email='".$student_email."'"));
    echo "</br>count-->".$setdatacnt['CNT'];                
   	die;
                  if($setdatacnt['CNT'] <= 0)
                    {
    mysqli_query($connection,"INSERT INTO `referral_student` (`r_id`, `referred_by_id`, `referral_name`, `referral_email`, `referral_mob`, `referral_alternet_no`) VALUES (NULL, '$Refrrelcode', '$Refrrel_Name', '$student_email', '$student_mob', '$alternet_student_mob');");
                    }
                    else
                    {
                        echo "this data is arlready in our database.";
                    }
		
       
}

?>