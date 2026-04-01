<?php session_start(); 
include "php/header2.php";
include_once "php/db.php";


if(isset($_POST['npsRating']))
{

    $leadid=$_POST['leadid'];
    $emailid=$_POST['emailid'];
    $phone=$_POST['phone'];
   $payfees=$_POST['payfees'];
    $crating=$_POST['npsRating'];
   $resion1=$_POST['Communication'];
   $resion2=$_POST['Applicationform'];
   $resion3=$_POST['Paymentoptions'];
   $resion4=$_POST['Counselling'];
   $resion5=$_POST['other'];
   //die; 
   
            date_default_timezone_set('Asia/Calcutta');
            $CurrentDateTime=date('Y-m-d');
           //echo "</br>Greter then 5";
        //echo "</br>Insert into feedback (leadid,emailid,phone,feepayamt,rating,resion1,resion2,resion3,resion4,resion5,datatime) values ('$leadid','$emailid','$phone','$payfees','$crating','$resion1','$resion2','$resion3','$resion4','$resion5','$CurrentDateTime')";
           $sql= "Insert into feedback (leadid,emailid,phone,feepayamt,rating,resion1,resion2,resion3,resion4,resion5,datatime) values ('$leadid','$emailid','$phone','$payfees','$crating','$resion1','$resion2','$resion3','$resion4','$resion5','$CurrentDateTime')";
           
           $rel=mysqli_query($connection,$sql)  or die(mysqli_error());

            if($rel)
             {

                 header("location:thankyouforfeedback.php?tk=feedback&op=success");

                   //echo"</br>Successfull";


             }
             else
               {
                   header("location:thankyouforfeedback.php?tk=feedback&op=error");
                  echo"</br>error";    

               }


   
    }
    



?>

</section>

<!--main content end-->
</section>
<script src="js/bootstrap.js"></script>

<script src="js/scripts.js"></script>
<script src="js/jquery.slimscroll.js"></script>
<script src="js/jquery.nicescroll.js"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="js/jquery.scrollTo.js"></script>
<script src="ckeditor/ckeditor.js"></script>

<script>
  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor1')
    //bootstrap WYSIHTML5 - text editor
    $('.textarea').wysihtml5()
  })
</script>
</body>
</html>
