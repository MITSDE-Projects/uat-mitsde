<?php
//Session starts here
session_start();
if(!isset($_GET['memberID']))
{
 	header("location: https://mitsde.com/administrator/index.php");//redirecting to second page
}
else
{
include "php/populate.php";
$memberid= $_GET['memberID'];

$pieces = explode(".", basename($_SERVER['PHP_SELF']));
$segments = explode('/', trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/'));
$pid=$segments[count($segments)-1];
$_SESSION["lastpage"]=$pid;

}


?>
<!DOCTYPE HTML>
<html>
<head>
  <title>MIT SDE 2018-19</title>
    <link rel="shortcut icon" href="../images/favicon.ico" />
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/bootstrapValidator.min.js"></script> 
	<script src="js/jquery.min.js"></script>
	<script src="js/jquery-ui.js"></script>
	<link href="css/style.css" rel="stylesheet" />
	<link href="css/bootstrap.min.css" rel="stylesheet" />
	<script type="text/javascript" src="js/jquery.form.js"></script>
		<link rel="stylesheet" href="css/style.css" />
 		<script src="js/courses.js"></script>
 		<script src="js/common.js"></script>
 		



</head>

    	<body class="bg-pic">
      <div class="wrapper-640">
		
<?


//echo '<pre>'; print_r($_POST); exit; 


if(!empty($_GET['message'])) {
    $message = $_GET['message'];
   ?>
   <div style='text-align:center;'><? echo $message; ?></div>
   
  <? 
}


//this is to get data from students table.

//echo "SELECT * FROM tbl_students_data WHERE student_id='".$memberID."'"; exit; 

$getstudmeatdata = mysqli_fetch_array(mysqli_query($connection,"SELECT * FROM tbl_students_data WHERE student_id='".$_GET['memberID']."'"));


//echo '<pre>'; print_r($getstudmeatdata); exit;



/*if (isset($_POST)){
    if (empty($_POST)){
	 	
		//setting error message
        //$_SESSION['error_page3'] = "Mandatory field(s) are missing, Please fill it again";
        //header("location: page3_form.php");//redirecting to second page
    
	} 
	else 
	{
		//fetching all values posted from second page and storing it in variable
        foreach ($_POST as $key => $value) {
        $_SESSION['post'][$key] = $value;
    }
		 extract($_SESSION['post']);  
							
								//Storing values in database
								
								$locationurl="page3_form.php";
								include "php/db.php";
                           //     $str = "UPDATE student SET `school10status`='$school10status',`school10`='$school10',`examboardname10`='$examboardname10',`yearofpassing10`='$yearofpassing10',`score10`='$score10',`school12`='$school12',`examboardname12`='$examboardname12',`yearofpassing12`='$yearofpassing12',`score12`='$score12',`graduationstatus`='$graduationstatus',`graduation`='$graduation',`examgraduation`='$examgraduation',`yearofpassinggraduation`='$yearofpassinggraduation',`scoregraduation`='$scoregraduation',`postgraduationstatus`='$postgraduationstatus',`postgraduation`='$postgraduation',`exampostgraduation`='$exampostgraduation',`yearofpassingpostgraduation`='$yearofpassingpostgraduation',`scorepostgraduation`='$scorepostgraduation',`otherqualificationstatus`='$otherqualificationstatus',`otherqualification`='$otherqualification',`examotherqualification`='$examotherqualification',`yearofpassingotherqualification`='$yearofpassingotherqualification',`scoreotherqualification`='$scoreotherqualification',`school12status`='$school12status',`isComplete`=0,`,`companyname`='$companyname',`experience`='$experience',`designation`='$designation',`industrysector`='$industrysector', WHERE `memberID`='".$_SESSION['memberID']."'"; 
							
							   //echo $str; exit; 
							
								//$str="UPDATE student SET `examname`='$examname',`examnumber`='$examnumber',`examscore`='$examscore',`examrank`='$examrank',`examyear`='$examyear',`examname2`='$examname2',`examnumber2`='$examnumber2',`examscore2`='$examscore2',`examrank2`='$examrank2',`examyear2`='$examyear2',`englishread`='$englishread',`englishspeak`='$englishspeak',`englishwrite`='$englishwrite',`degree1`='$degree1',degree_status1='".$degree_status1."',`inst1`='$inst1',`university1`='$university1',`yearofpassingd1`='$yearofpassingd1',`scoredegree1`='$scoredegree1',`degree2`='$degree2',`inst2`='$inst2',`university2`='$university2',`yearofpassingd2`='$yearofpassingd2',`scoredegree2`='$scoredegree2', `school10`='$school10',`examboardname10`='$examboardname10',`yearofpassing10`='$yearofpassing10',`score10`='$score10',`school12`='$school12',`examboardname12`='$examboardname12',`yearofpassing12`='$yearofpassing12',`score12`='$score12',school12status='$school12status',`stream12`='$stream12',`isComplete`=0,testcenter='$testcenter',companyname='".$companyname."',experience='".$experience."'  WHERE `memberID`='$memberid'";
							
							
							//echo $str;
						//	exit;
							
						$query = mysqli_query($connection,$str);
						
						if($query){
					    	header('location:page4_insertdata.php');
					    	//exit;
						}
						//exit;
						
						
					

    }
} else {
    if (empty($_SESSION['error_page4'])) {
        header("location: page1_form.php");//redirecting to first page
    }
}*/


//echo $aid; exit;

//	header('location:page4_insertdata.php');

$docsdir=GetStudentFolder($aid,$name,$lastname);
date_default_timezone_set("Asia/Kolkata");
$d=time();
$d="Created on ".date("d M Y h:i:sa", $d);

?>

                
                    
                <span id="error">
                    
                </span>
                
                <div class="content" style="background:#FFF;" >
                <div class="sectionheading"><?php //echo "</br>name-->".$lastname; ?>
                 <label style="color:red;">File size should not be more than 500KB.</label>
                 <label style="color:red;">Photo & signature use only image format in JPG or PNG</label>
					
	            </div>
	            <form action="https://mitsde.com/administrator/list_rejected.php?reject=1" method="post"  style="background:#fff;height:100px;">
                     <div style="margin-top:25px; float:right;">
					   <input  type="submit" value="Back" /  style="background:#606062;color:#FFF;width:99px;font-size: 14px;padding: 5px 10px;">
					   
				    </div>
                 </form>
          
                	<div class="errmsg"></div>
	<form class="uploadform" method="post" enctype="multipart/form-data" action='uploadphoto1.php?dir=<?php echo $docsdir;?>&memberID=<?=$_GET['memberID'];?>&id=<?php echo $aid;?>&n=<?php echo $name."_".$lastname;?>&ft=photo'>
		    <div class="custom_file_upload">
			<div class="file_upload">

				<label class="fileuploadlabel">Passport Size Photo <span style="color:red;">*</span></label>
			    
                            <? if(isset($getstudmeatdata['photo']) && $getstudmeatdata['photo']!=""){ ?>
                            <input type="file" name="imagefile" id="profilephoto" onchange="UploadFile('submitgallarybtn');">
                            <span><img src="http://www.mitsde.com/LSC/<?=$getstudmeatdata['photo']?>" style="height:50px;position:absolute;right:450px;"></span>
                            <? } else { ?>
                            <input type="file" name="imagefile" id="profilephoto" onchange="UploadFile('submitgallarybtn');" required>
                            <? } ?> 
			</div>
		    </div>
			<span id="profilephotoerr" style="color:red;"></span>
		    <input type="submit" value="Submit" name="submiteventimg" id="submitgallarybtn" style="display: none;">
		</form>
		

	
	<br>
	
	<form class="uploadform" method="post" enctype="multipart/form-data" action='uploaddocument1.php?dir=<?php echo $docsdir;?>&memberID=<?=$_GET['memberID'];?>&id=<?php echo $aid;?>&n=<?php echo $name."_".$lastname;?>&ft=ssc'>
		    <div class="custom_file_upload">
			<div class="file_upload">
			             <? if(isset($getstudmeatdata['ssc']) && $getstudmeatdata['ssc']!=""){ ?>
                             <span><img src="http://www.mitsde.com/LSC/<?=$getstudmeatdata['ssc']?>" style="height:50px;position:absolute;right:450px;"></span> 
                         <?php } ?>         
                             
				<label class="fileuploadlabel">01. 10<sup>th</sup> Grade Marksheet/ Certificate <span style="color:red;">*</span></label>
			    <input type="file" name="docfile" required="required" onchange="UploadFile('submitbtn2');">
			</div>
		    </div>
		    <input type="submit" value="Submit" name="submiteventimg" id="submitbtn2" style="display: none;">
		</form>
		
		
		
	<form class="uploadform" method="post" enctype="multipart/form-data" action='uploaddocument1.php?dir=<?php echo $docsdir;?>&memberID=<?=$_GET['memberID'];?>&id=<?php echo $aid;?>&n=<?php echo $name."_".$lastname;?>&ft=hsc'>
		    <div class="custom_file_upload">
			<div class="file_upload">
			            <? if(isset($getstudmeatdata['hsc']) && $getstudmeatdata['hsc']!=""){ ?>
                          <span><img src="http://www.mitsde.com/LSC/<?=$getstudmeatdata['hsc']?>" style="height:50px;position:absolute;right:450px;"></span>  
                        <?php } ?>   
				<label class="fileuploadlabel">02. 12<sup>th</sup> Grade Marksheet/ Certificate <span style="color:red;">*</span></label>
			    <input type="file" name="docfile" required="required" onchange="UploadFile('submitbtn3');">
			</div>
		    </div>
		    <input type="submit" value="Submit" name="submiteventimg" id="submitbtn3" style="display: none;">
		</form>




        <form class="uploadform" method="post" enctype="multipart/form-data" action='uploaddocument1.php?dir=<?php echo $docsdir;?>&memberID=<?=$_GET['memberID'];?>&id=<?php echo $aid;?>&n=<?php echo $name."_".$lastname;?>&ft=graduationcertificate_sem1'>
		    <div class="custom_file_upload">
			<div class="file_upload">
			            <? if(isset($getstudmeatdata['graduationcertificate_sem1']) && $getstudmeatdata['graduationcertificate_sem1']!=""){ ?>
                            <span><img src="https://www.mitsde.com/LSC/<?=$getstudmeatdata['graduationcertificate_sem1']?>" style="height:50px;position:absolute;right:450px;"></span>
                        <? } ?>    
				<label class="fileuploadlabel">03. Graduation Sem 1 Marksheet (If applicable)<span style="font-size:12px;"></span></label>
			    <input type="file" name="docfile" onchange="UploadFile('submitbtn4');">
			</div>
		    </div>
		    <input type="submit" value="Submit" name="submiteventimg" id="submitbtn4" style="display: none;">
		</form>  


         <form class="uploadform" method="post" enctype="multipart/form-data" action='uploaddocument1.php?dir=<?php echo $docsdir;?>&memberID=<?=$_GET['memberID'];?>&id=<?php echo $aid;?>&n=<?php echo $name."_".$lastname;?>&ft=graduationcertificate_sem2'>
		    <div class="custom_file_upload">
			<div class="file_upload">
			            <? if(isset($getstudmeatdata['graduationcertificate_sem2']) && $getstudmeatdata['graduationcertificate_sem2']!=""){ ?>
                            <span><img src="https://www.mitsde.com/LSC/<?=$getstudmeatdata['graduationcertificate_sem2']?>" style="height:50px;position:absolute;right:450px;"></span>
                        <? } ?>    
				<label class="fileuploadlabel">04. Graduation Sem 2 Marksheet (If applicable)<span style="font-size:12px;"></span></label>
			    <input type="file" name="docfile" onchange="UploadFile('submitbtn5');">
			</div>
		    </div>
		    <input type="submit" value="Submit" name="submiteventimg" id="submitbtn5" style="display: none;">
		</form>  

         <form class="uploadform" method="post" enctype="multipart/form-data" action='uploaddocument1.php?dir=<?php echo $docsdir;?>&memberID=<?=$_GET['memberID'];?>&id=<?php echo $aid;?>&n=<?php echo $name."_".$lastname;?>&ft=graduationcertificate_sem3'>
		    <div class="custom_file_upload">
			<div class="file_upload">
			            <? if(isset($getstudmeatdata['graduationcertificate_sem3']) && $getstudmeatdata['graduationcertificate_sem3']!=""){ ?>
                            <span><img src="https://www.mitsde.com/LSC/<?=$getstudmeatdata['graduationcertificate_sem3']?>" style="height:50px;position:absolute;right:450px;"></span>
                        <? } ?>    
				<label class="fileuploadlabel">05. Graduation Sem 3 Marksheet (If applicable)<span style="font-size:12px;"></span></label>
			    <input type="file" name="docfile" onchange="UploadFile('submitbtn6');">
			</div>
		    </div>
		    <input type="submit" value="Submit" name="submiteventimg" id="submitbtn6" style="display: none;">
	 	 </form>  


          <form class="uploadform" method="post" enctype="multipart/form-data" action='uploaddocument1.php?dir=<?php echo $docsdir;?>&memberID=<?=$_GET['memberID'];?>&id=<?php echo $aid;?>&n=<?php echo $name."_".$lastname;?>&ft=graduationcertificate_sem4'>
		    <div class="custom_file_upload">
			<div class="file_upload">
			            <? if(isset($getstudmeatdata['graduationcertificate_sem4']) && $getstudmeatdata['graduationcertificate_sem4']!=""){ ?>
                            <span><img src="https://www.mitsde.com/LSC/<?=$getstudmeatdata['graduationcertificate_sem3']?>" style="height:50px;position:absolute;right:450px;"></span>
                        <? } ?>    
				<label class="fileuploadlabel">06. Graduation Sem 4 Marksheet (If applicable)<span style="font-size:12px;"></span></label>
			    <input type="file" name="docfile" onchange="UploadFile('submitbtn7');">
			</div>
		    </div>
		    <input type="submit" value="Submit" name="submiteventimg" id="submitbtn7" style="display: none;">
	 	 </form> 


         <form class="uploadform" method="post" enctype="multipart/form-data" action='uploaddocument1.php?dir=<?php echo $docsdir;?>&memberID=<?=$_GET['memberID'];?>&id=<?php echo $aid;?>&n=<?php echo $name."_".$lastname;?>&ft=graduationcertificate_sem5'>
		    <div class="custom_file_upload">
			<div class="file_upload">
			            <? if(isset($getstudmeatdata['graduationcertificate_sem5']) && $getstudmeatdata['graduationcertificate_sem5']!=""){ ?>
                            <span><img src="https://www.mitsde.com/LSC/<?=$getstudmeatdata['graduationcertificate_sem5']?>" style="height:50px;position:absolute;right:450px;"></span>
                        <? } ?>    
				<label class="fileuploadlabel">07. Graduation Sem 5 Marksheet (If applicable)<span style="font-size:12px;"></span></label>
			    <input type="file" name="docfile" onchange="UploadFile('submitbtn8');">
			</div>
		    </div>
		    <input type="submit" value="Submit" name="submiteventimg" id="submitbtn8" style="display: none;">
	 	 </form> 

          <form class="uploadform" method="post" enctype="multipart/form-data" action='uploaddocument1.php?dir=<?php echo $docsdir;?>&memberID=<?=$_GET['memberID'];?>&id=<?php echo $aid;?>&n=<?php echo $name."_".$lastname;?>&ft=graduationcertificate_sem6'>
		    <div class="custom_file_upload">
			<div class="file_upload">
			            <? if(isset($getstudmeatdata['graduationcertificate_sem6']) && $getstudmeatdata['graduationcertificate_sem6']!=""){ ?>
                            <span><img src="https://www.mitsde.com/LSC/<?=$getstudmeatdata['graduationcertificate_sem6']?>" style="height:50px;position:absolute;right:450px;"></span>
                        <? } ?>    
				<label class="fileuploadlabel">08. Graduation Sem 6 Marksheet (If applicable)<span style="font-size:12px;"></span></label>
			    <input type="file" name="docfile" onchange="UploadFile('submitbtn9');">
			</div>
		    </div>
		    <input type="submit" value="Submit" name="submiteventimg" id="submitbtn9" style="display: none;">
	 	 </form> 

           <form class="uploadform" method="post" enctype="multipart/form-data" action='uploaddocument1.php?dir=<?php echo $docsdir;?>&memberID=<?=$_GET['memberID'];?>&id=<?php echo $aid;?>&n=<?php echo $name."_".$lastname;?>&ft=graduationcertificate_sem7'>
		    <div class="custom_file_upload">
			<div class="file_upload">
			            <? if(isset($getstudmeatdata['graduationcertificate_sem7']) && $getstudmeatdata['graduationcertificate_sem7']!=""){ ?>
                            <span><img src="https://www.mitsde.com/LSC/<?=$getstudmeatdata['graduationcertificate_sem7']?>" style="height:50px;position:absolute;right:450px;"></span>
                        <? } ?>    
				<label class="fileuploadlabel">09. Graduation Sem 7 Marksheet (If applicable)<span style="font-size:12px;"></span></label>
			    <input type="file" name="docfile" onchange="UploadFile('submitbtn10');">
			</div>
		    </div>
		    <input type="submit" value="Submit" name="submiteventimg" id="submitbtn10" style="display: none;">
	 	   </form> 
   
            <form class="uploadform" method="post" enctype="multipart/form-data" action='uploaddocument1.php?dir=<?php echo $docsdir;?>&memberID=<?=$_GET['memberID'];?>&id=<?php echo $aid;?>&n=<?php echo $name."_".$lastname;?>&ft=graduationcertificate_sem8'>
		    <div class="custom_file_upload">
			<div class="file_upload">
			            <? if(isset($getstudmeatdata['graduationcertificate_sem8']) && $getstudmeatdata['graduationcertificate_sem8']!=""){ ?>
                            <span><img src="https://www.mitsde.com/LSC/<?=$getstudmeatdata['graduationcertificate_sem8']?>" style="height:50px;position:absolute;right:450px;"></span>
                        <? } ?>    
				<label class="fileuploadlabel">10. Graduation Sem 8 Marksheet (If applicable)<span style="font-size:12px;"></span></label>
			    <input type="file" name="docfile" onchange="UploadFile('submitbtn11');">
			</div>
		    </div>
		    <input type="submit" value="Submit" name="submiteventimg" id="submitbtn11" style="display: none;">
	 	   </form> 

           
     	<form class="uploadform" method="post" enctype="multipart/form-data" action='uploaddocument1.php?dir=<?php echo $docsdir;?>&memberID=<?=$_GET['memberID'];?>&id=<?php echo $aid;?>&n=<?php echo $name."_".$lastname;?>&ft=graduationcertificate'>
		    <div class="custom_file_upload">
			<div class="file_upload">
			            <? if(isset($getstudmeatdata['graduationcertificate']) && $getstudmeatdata['graduationcertificate']!=""){ ?>
                            <span><img src="https://www.mitsde.com/LSC/<?=$getstudmeatdata['graduationcertificate']?>" style="height:50px;position:absolute;right:450px;"></span>
                        <? } ?>    
				<label class="fileuploadlabel">11. Graduation Certificate (If applicable)<span style="font-size:12px;"></span></label>
			    <input type="file" name="docfile" onchange="UploadFile('submitbtn12');">
			</div>
		    </div>
		    <input type="submit" value="Submit" name="submiteventimg" id="submitbtn12" style="display: none;">
		</form>
		

		
		<form class="uploadform" method="post" enctype="multipart/form-data" action='uploaddocument1.php?dir=<?php echo $docsdir;?>&memberID=<?=$_GET['memberID'];?>&id=<?php echo $aid;?>&n=<?php echo $name."_".$lastname;?>&ft=identity'>
		    <div class="custom_file_upload">
			<div class="file_upload">
			            <? if(isset($getstudmeatdata['identity']) && $getstudmeatdata['identity']!=""){ ?>
                            <span><img src="https://www.mitsde.com/LSC/<?=$getstudmeatdata['identity']?>" style="height:50px;position:absolute;right:450px;"></span> 
                        <? } ?>    
				<label class="fileuploadlabel">12. Identity Proof<span style="font-size:12px;color:red">*</span></label>
			    <input type="file" name="docfile" onchange="UploadFile('submitbtn13');">
			</div>
		    </div>
		    <input type="submit" value="Submit" name="submiteventimg" id="submitbtn13" style="display: none;">
		</form>
		
		<form class="uploadform" method="post" enctype="multipart/form-data" action='uploaddocument1.php?dir=<?php echo $docsdir;?>&memberID=<?=$_GET['memberID'];?>&id=<?php echo $aid;?>&n=<?php echo $name."_".$lastname;?>&ft=application_form'>
		    <div class="custom_file_upload">
			<div class="file_upload">
			            <? if(isset($getstudmeatdata['application_form']) && $getstudmeatdata['application_form']!=""){ ?>
                            <span><img src="https://www.mitsde.com/LSC/<?=$getstudmeatdata['application_form']?>" style="height:50px;position:absolute;right:450px;"></span> 
                        <? } ?>    
				<label class="fileuploadlabel">13. Application Form<span style="font-size:12px;color:red">*</span></label>
			    <input type="file" name="docfile" onchange="UploadFile('submitbtn14');">
			</div>
		    </div>
		    <input type="submit" value="Submit" name="submiteventimg" id="submitbtn14" style="display: none;">
		</form>
		
		<form class="uploadform" method="post" enctype="multipart/form-data" action='uploaddocument1.php?dir=<?php echo $docsdir;?>&memberID=<?=$_GET['memberID'];?>&id=<?php echo $aid;?>&n=<?php echo $name."_".$lastname;?>&ft=undertaking_form'>
		    <div class="custom_file_upload">
			<div class="file_upload">
			            <? if(isset($getstudmeatdata['undertaking_form']) && $getstudmeatdata['undertaking_form']!=""){ ?>
                            <span><img src="https://www.mitsde.com/LSC/<?=$getstudmeatdata['undertaking_form']?>" style="height:50px;position:absolute;right:450px;"></span> 
                        <? } ?>    
				<label class="fileuploadlabel">14. Undertaking Form</label>
			    <input type="file" name="docfile" onchange="UploadFile('submitbtn14');">
			</div>
		    </div>
		    <input type="submit" value="Submit" name="submiteventimg" id="submitbtn14" style="display: none;">
		</form>
		
		
		<form class="uploadform" method="post" enctype="multipart/form-data" action='uploaddocument1.php?dir=<?php echo $docsdir;?>&memberID=<?=$_GET['memberID'];?>&id=<?php echo $aid;?>&n=<?php echo $name."_".$lastname;?>&ft=signature'>
		    <div class="custom_file_upload">
			<div class="file_upload">
			            <? if(isset($getstudmeatdata['signature']) && $getstudmeatdata['signature']!=""){ ?>
                            <span><img src="https://www.mitsde.com/LSC/<?=$getstudmeatdata['signature']?>" style="height:50px;position:absolute;right:450px;"></span> 
                        <? } ?>    
				<label class="fileuploadlabel">15. Signature <span style="font-size:12px;color:red">*</span></label>
			    <input type="file" name="docfile" onchange="UploadFile('submitbtn15');">
			</div>
		    </div>
		    <input type="submit" value="Submit" name="submiteventimg" id="submitbtn15" style="display: none;">
		</form>
		
		
				 <form action="https://mitsde.com/administrator/list_rejected.php?reject=1" method="post"  style="background:#fff;height:100px;">
                     <div style="margin-top:25px; float:right;">
					   <input  type="submit" value="Back" /  style="background:#606062;color:#FFF;width:99px;font-size: 14px;padding: 5px 10px;">
					   
				    </div>
                 </form>
            </div>

        </div>
		</div>
<script>
	$('#submitgallarybtn').click(function ()
     {
         //alert('hi');
         $("#checkimg").val('');
         $(".uploadform").ajaxForm({
             target: '#checkimg'
         }).submit();
     });
function UploadFile(id)
{
     $("#" + id).trigger("click");
}
function ValidateProfilePhoto()
{
	var v=document.getElementById("profilephoto").value;
	if (!v || v==="" || v.length==0)
	{
	       <? if($getstudmeatdata['photo']=='') { ?>	
                document.getElementById("profilephotoerr").innerHTML="Please upload passport size photo";
                return false;
               <? } ?>
         }
	var fileExt = v.split('.').pop();
	document.getElementById("photo").value=fileExt;
	document.getElementById("profilephotoerr").innerHTML="";
	return true;
}
</script>
<script src="js/common.js"></script>
    </body>
</html>
<?php

function GetStudentFolder($aid,$name,$lastname)
		{
			$stdir="";
			if(strpos($aid,"TYP"))
			$stdir="TYP";
			
                        else if(strpos($aid,"OYD"))
			$stdir="OYD";
			
                        else if(strpos($aid,"OYP"))
			$stdir="OYP";


                       
			
			$studentfolder="studentdocuments/".$name."_".$lastname."_".$aid;
			if (!is_dir($studentfolder))
								{
				mkdir($studentfolder, 0777, true);
			}
				
			return $studentfolder;
		}
		?>