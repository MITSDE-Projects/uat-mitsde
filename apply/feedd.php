<?php session_start(); 
include "php/header2.php";
include_once "php/db.php";


if(isset($_POST['feedback']))
{

    $leadid=$_POST['leadid'];
    $emailid=$_POST['emailid'];
    $phone=$_POST['phone'];
    $payfees=$_POST['payfees'];
    $crating=$_POST['crating'];
   
    
   
    
        if($crating<5)

        {
            //echo "</br>less then 5";

?>

              <!DOCTYPE html>
              <script>
              function generateticketID()
           {
           $transactionId=date('dmyhis');
           return $transactionId;  
           }
            $transactionId=generateticketID();
</script>
<head>
<title>Logged : <?php echo $student_name;  ?> | Generate Ticket | MITSDE</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

<script type="application/x-javascript">addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="css/bootstrap.min.css" >
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/style-responsive.css" rel="stylesheet"/>
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="css/font.css" type="text/css"/>
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>





<script type = "text/JavaScript">
         <!--
            function AutoRefresh( t ) {
               setTimeout("location.reload(true);", t);
            }
         //-->
      </script>


<script>
function myFunction() {
  var checkBox = document.getElementById("myCheck");
  var text = document.getElementById("text");
  if (checkBox.checked == true){
    text.style.display = "block";
  } else {
     text.style.display = "none";
  }
}
</script>
</head>
<body>
<section id="container">
<!--header start-->
<?php include"header.php"; ?>
<!--header end-->
<!--sidebar start-->

<!--sidebar end-->
<!--main content start-->
<section id="main-content">
	<section class="wrapper">
	<div class="form-w3layouts">
        <!-- page start-->
        <!-- page start-->
        <div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                         
									 Feedback 
										
                        </header>
						
                        <div class="panel-body" style="padding-top:25px;">
                            <div class="position-center">
                                
         <form action="fsurvey.php" enctype="multipart/form-data" name="Addemp" method="post" role="form" onSubmit="return validateForm()">
             

                                <div class="form-group  ">
                                <input class="form-check-input " type="checkbox" value="Counsellor did not suggest right course" name="defaultCheck1">
        <label class="form-check-label" for="defaultCheck1">
        Counsellor did not suggest right course
        </label>
        </div>

        <div  class="form-group ">
        <input class="form-check-input" type="checkbox" value="Counsellor did not provide course information properly" name="defaultCheck2">
        <label class="form-check-label" for="defaultCheck1">
       Counsellor did not provide course information properly
        </label>
        </div>

        <div class="form-check form-group ">
        <input class="form-check-input" type="checkbox" value="Counsellor was rude(not welcoming)" name="defaultCheck3">
        <label class="form-check-label" for="defaultCheck1">
        Counsellor was rude(not welcoming)
        </label>
      </div>
      <div class="form-check form-group ">
        <input class="form-check-input" type="checkbox" value="Counsellor did not assist during the admission process" name="defaultCheck4">
        <label class="form-check-label" for="defaultCheck1">
         Counsellor did not assist  during the admission process
        </label>
      </div>
      <div class="form-check form-group ">
        <input class="form-check-input" type="checkbox" value="Faced technical issue(payment, etc.)during admission process" name="defaultCheck5">
        <label class="form-check-label" for="defaultCheck1">
         Faced technical issue( payment, etc.)  during admission process
        </label>
      </div>
      
      </h5>
   
     
                                           
                                           <input type="hidden" name='leadid' value=<?php echo $leadid;  ?>>
                                           <input type="hidden" name='emailid' value=<?php echo $emailid;  ?>>
                                           <input type="hidden" name='phone' value=<?php echo $phone;  ?>>
                                           <input type="hidden" name='payfee' value=<?php echo $payfees;  ?>>
                                           <input type="hidden" name='crating' value=<?php echo $crating;  ?>>
                                                 

      
  <div class="form-check"> 
<input type="checkbox" class="form-check-input form-group " name=chother id="myCheck" onclick="myFunction()">
<label  class="form-check-label" for="myCheck"> My reason is not listed here</label> 

<p id="text" style="display:none"><label>Write your Reason:</label><textarea class="form-check-input form-group "  rows="10" cols="50" name="other"></textarea></p>

<br><input type="submit" name="feed" class="btn btn-info" value="Submit">
   </div>  

</div>
              
							   
                                
                            </form>
                            </div>

                        </div>
						
                    </section>
 
            </div>
            
        </div>
       
        <!-- page end-->
        </div>
</section>


<?php
} else {

  if($crating=='5')
    {$reasion5="Amazing";}
    if($crating=='4')
    {$reasion4="Good";}
    if($crating=='3')
    {$reasion3="Average";}
    if($crating=='2')
    {$reasion2="Not Good";}
            
            date_default_timezone_set('Asia/Calcutta');
            $CurrentDateTime=date('Y-m-d');
           //echo "</br>Greter then 5";
        //echo "</br>Insert into feedback (leadid,emailid,phone,feepayamt,rating) values ('$leadid','$emailid','$phone','$payfees','$crating')";
           $sql= "Insert into feedback (leadid,emailid,phone,feepayamt,rating,resion2,resion3,resion4,resion5,datatime) values ('$leadid','$emailid','$phone','$payfees','$crating','$reasion2','$reasion3','$reasion4','$reasion5','$CurrentDateTime')";
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
