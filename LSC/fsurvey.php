<?php include "php/header2.php";
include_once "php/db.php";

if(isset($_POST['feed']))
{

    $leadid=$_POST['leadid'];
    $emailid=$_POST['emailid'];
    $phone=$_POST['phone'];
    $payfee=$_POST['payfee'];
    $crating=$_POST['crating'];
    

      

              if(isset($_POST['defaultCheck1']))
               {
                   $ch1=$_POST['defaultCheck1'];
               }
               else{
                        $ch1="";
                   }
               if(isset($_POST['defaultCheck2']))
                {
                    $ch2=$_POST['defaultCheck2'];
                }
                else{
                       $ch2="";
                    }
                if(isset($_POST['defaultCheck3']))
                {
                       $ch3=$_POST['defaultCheck3'];
                }
                else{
                         $ch3="";
                    }
                 if(isset($_POST['defaultCheck4']))
                  {
                      $ch4=$_POST['defaultCheck4'];
                  }
                  else{
                         $ch4="";
                       }
    
                  if(isset($_POST['chother']))
                   {
                       $other=$_POST['other'];
                   }
     
                  else{
                         $ch5="";
                         $other="";
                      }

             date_default_timezone_set('Asia/Calcutta');
             $CurrentDateTime=date('Y-m-d : h:i:s');
             
             
            $sql= "Insert into feedback (leadid,emailid,phone,feepayamt,rating,resion1,resion2,resion3,resion4,feedbacksurvey) values ('$leadid','$emailid','$phone','$payfee','$crating','$ch1','$ch2','$ch3','$ch4','$other')";
            $rel=mysqli_query($connection,$sql)
            or die(mysqli_error($connection));
     
            if($rel)
            {
              header("location:thankyouforfeedback.php?tk=feedback&op=success");
     
           }
           else
            {
              header("location:thankyouforfeedback.php?tk=feedback&op=error");
            }
     
     }
   
    

?>