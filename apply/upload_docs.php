<?php
//Session starts here
session_start();
if(!isset($_SESSION['memberID']))
{
 	header("location: http://dat.net.in/register/");//redirecting to second page
}
else
{
	include "php/populate.php";
	$memberid= $_SESSION['memberID'];
$pieces = explode(".", basename($_SERVER['PHP_SELF']));
$segments = explode('/', trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/'));
$pid=$segments[count($segments)-1];
$_SESSION["lastpage"]=$pid;


if((isset($payment) && $payment==1) || isset($transaction))
 {
	 	//header("location: printformvalue.php");
	 	
	 	//header("location: upload_docs.php?do=ow");
 }

 
 
}
?>
<!DOCTYPE HTML>
<html>
<head>
  <title>DAT 2018-19</title>
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
 		<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '300649950136876', {
em: 'insert_email_variable,'
});
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=300649950136876&ev=PageView&noscript=1"
/></noscript>
<!-- DO NOT MODIFY -->
<!-- End Facebook Pixel Code -->


<!--LeadSquared Tracking Code Start-->
<script type="text/javascript" src="http://web.mxradon.com/t/Tracker.js"></script>
<script type="text/javascript">
      pidTracker('11285');
</script>
<!--LeadSquared Tracking Code End--> 

<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '703546286509183');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=703546286509183&ev=PageView&noscript=1"
/></noscript>
<!-- DO NOT MODIFY -->
<!-- End Facebook Pixel Code -->

<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '129099561109815');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=129099561109815&ev=PageView&noscript=1" >
</noscript>
<!--End of code-->



<!-- Google Code for MITID Remarketing Tag -->
<!--------------------------------------------------
Remarketing tags may not be associated with personally identifiable information or placed on pages related to sensitive categories. See more information and instructions on how to setup the tag on: http://google.com/ads/remarketingsetup
--------------------------------------------------->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 826380615;
var google_custom_params = window.google_tag_params;
var google_remarketing_only = true;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/826380615/?guid=ON&amp;script=0"/>
</div>
</noscript>

<!-- Global Site Tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-106906303-1"></script>
<script>
window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments)};
gtag('js', new Date());

gtag('config', 'UA-106906303-1');
</script>
</head>

    	<body class="bg-pic">
   <div class="wrapper-640">
		<div class="mheader">
		<div class="formheading">
<a target="_blank" href="http://mitid.edu.in/"><img src="http://dat.net.in/images/mitadtlogo.jpg" style="float:left;" height="auto"></a><a target="_blank" href="http://avantikauniversity.edu.in/"><img src="http://dat.net.in/register/images/LOGO_ID_AVANTIKA.png" style="width:165px;height:165px;float:right"></a> 

<div style="text-align:center;font-size:14px;position:relative;top:52px;font-weight:bold;clear:both;">"Design Aptitude Test (DAT) is jointly conducted by, MIT Institute of Design (MIT ID), Pune and Avantika University, Ujjain."</div>
		<div class="userloginmsg" style="clear:both;">
<span id="logout"><a href='register/logoutdoc.php?pid=printformvalue.php&id=<?php echo $memberid;?>'>Logout</a></span>
<span class="welcomeuser">Welcome <?php //echo $_SESSION['memberID'];?></span>

		</div>
		
		</div>
		
		</div>



<?php

//this is to get data from students table.

//echo "SELECT * FROM tbl_students_data WHERE student_id='".$memberID."'"; exit; 

$getstudmeatdata = mysqli_fetch_array(mysqli_query($connection,"SELECT * FROM tbl_students_data WHERE student_id='".$_SESSION['memberID']."'"));


//echo '<pre>'; print_r($getstudmeatdata); exit;



if (isset($_POST)){
    if (empty($_POST)){
		
		//setting error message
        //$_SESSION['error_page3'] = "Mandatory field(s) are missing, Please fill it again";
        //header("location: page3_form.php");//redirecting to second page
    
	} else {
		//fetching all values posted from second page and storing it in variable
        foreach ($_POST as $key => $value) {
            $_SESSION['post'][$key] = $value;
        }
		 extract($_SESSION['post']);  
							
								//Storing values in database
								
								$locationurl="page3_form.php";
								include "php/db.php";
								
						//$str="UPDATE student SET `examname`='$examname',`examnumber`='$examnumber',`examscore`='$examscore',`examrank`='$examrank',`examyear`='$examyear',`examname2`='$examname2',`examnumber2`='$examnumber2',`examscore2`='$examscore2',`examrank2`='$examrank2',`examyear2`='$examyear2',`englishread`='$englishread',`englishspeak`='$englishspeak',`englishwrite`='$englishwrite',`degree1`='$degree1',degree_status1='".$degree_status1."',`inst1`='$inst1',`university1`='$university1',`yearofpassingd1`='$yearofpassingd1',`scoredegree1`='$scoredegree1',`degree2`='$degree2',`inst2`='$inst2',`university2`='$university2',`yearofpassingd2`='$yearofpassingd2',`scoredegree2`='$scoredegree2', `school10`='$school10',`examboardname10`='$examboardname10',`yearofpassing10`='$yearofpassing10',`score10`='$score10',`school12`='$school12',`examboardname12`='$examboardname12',`yearofpassing12`='$yearofpassing12',`score12`='$score12',school12status='$school12status',`stream12`='$stream12',`isComplete`=0,`lastPage`='$locationurl',formstatus='incomplete form',testcenter='$testcenter',companyname='".$companyname."',experience='".$experience."'  WHERE `memberID`='$memberid'";
						//$query = mysqli_query($connection,$str);
						
						
						
					

    }
} else {
    if (empty($_SESSION['error_page4'])) {
        header("location: page1_form.php");//redirecting to first page
    }
}


//echo $aid; exit;



$docsdir=GetStudentFolder($aid,$name,$lastname);
 // INCLUDE THE phpToPDF.php FILE
//include("php/phpToPDF.php"); 

date_default_timezone_set("Asia/Kolkata");
$d=time();
$d="Created on ".date("d M Y h:i:sa", $d);



/*
// PUT YOUR HTML IN A VARIABLE
$my_html="<HTML>
<img src='http://www.avantikauniversity.edu.in/images/avantika-logo.svg' width=100 height=100/>
<h5 style='text-align:left;'>Student Name:".$name." ".$lastname."<br>Program Selected :".$programmesugpg."<br>Statement of Purpose :".$aid."</h5>
<div style=\"display:block; padding:20px;text-align:justify; border:2pt solid:#FE9A2E; background-color:#f2f2f2; font-family:Arial;\">
".$sop."</div><div>".$d."</div></HTML>";

// SET YOUR PDF OPTIONS
// FOR ALL AVAILABLE OPTIONS, VISIT HERE:  http://phptopdf.com/documentation/
$pdf_options = array(
  "source_type" => 'html',
  "source" => $my_html,
  "action" => 'save',
  "save_directory" => $docsdir,
  "file_name" => $name."_".$lastname."_".$aid.'_sop.pdf');

// CALL THE phpToPDF FUNCTION WITH THE OPTIONS SET ABOVE
phptopdf($pdf_options);

// OPTIONAL - PUT A LINK TO DOWNLOAD THE PDF YOU JUST CREATED
//echo ("<a href='html_01.pdf' target='_blank'>Download Your PDF</a>");

*/
?>

                
                    
                                <span id="error">
                    <?php
                    if (!empty($_SESSION['error_page3'])) {
                        echo $_SESSION['error_page3'];
                        unset($_SESSION['error_page3']);
                    }
                    ?>
                </span>
                
                <div class="content" style="background:#FFF;" >
                <div class="sectionheading">
                 <center style="color:red;">Image(s) size should not be more than 500KB.</center>
					<span>G. Enclosures</span>
	  </div>
          
                	<div class="errmsg"></div>
	<form class="uploadform" method="post" enctype="multipart/form-data" action='uploadphoto.php?dir=<?php echo $docsdir;?>&memberID=<?=$_SESSION['memberID'];?>&id=<?php echo $aid;?>&n=<?php echo $name."_".$lastname;?>&ft=photo&do=ow'>
		    <div class="custom_file_upload">
			<div class="file_upload">

				<label class="fileuploadlabel">Passport Size Photo <span style="color:red;">*</span></label>
			    
                            <? if(isset($getstudmeatdata['photo']) && $getstudmeatdata['photo']!=""){ ?>
                            <input type="file" name="imagefile" id="profilephoto" onchange="UploadFile('submitgallarybtn');">
                            <span><img src="http://dat.net.in/<?=$getstudmeatdata['photo']?>" style="height:50px;position:absolute;right:450px;"></span>
                            <? } else { ?>
                            <input type="file" name="imagefile" id="profilephoto" onchange="UploadFile('submitgallarybtn');" required>
                            <? } ?> 
			</div>
		    </div>
			<span id="profilephotoerr" style="color:red;"></span>
		    <input type="submit" value="Submit" name="submiteventimg" id="submitgallarybtn" style="display: none;">
		</form>
		
	<form class="uploadform" method="post" enctype="multipart/form-data" action='uploaddocument.php?dir=<?php echo $docsdir;?>&memberID=<?=$_SESSION['memberID'];?>&id=<?php echo $aid;?>&n=<?php echo $name."_".$lastname;?>&ft=entrance&do=ow'>
		    <div class="custom_file_upload">
			<div class="file_upload" style="display:none;">
				<label class="fileuploadlabel">01. Entrance Exam Score Card<br>MIT-DAT / NATA / JEE/ Others (If applicable)</label>
			    <input type="file" name="docfile" onchange="UploadFile('submitbtn1');">
			</div>
		    </div>
		    <input type="submit" value="Submit" name="submiteventimg" id="submitbtn1" style="display: none;">
		</form>	
	
	<br>
	<form class="uploadform" method="post" enctype="multipart/form-data" action='uploaddocument.php?dir=<?php echo $docsdir;?>&memberID=<?=$_SESSION['memberID'];?>&id=<?php echo $aid;?>&n=<?php echo $name."_".$lastname;?>&ft=ssc&do=ow'>
		    <div class="custom_file_upload">
			<div class="file_upload">
			             <? if(isset($getstudmeatdata['ssc']) && $getstudmeatdata['ssc']!=""){ ?>
                             <span><img src="http://dat.net.in/<?=$getstudmeatdata['ssc']?>" style="height:50px;position:absolute;right:450px;"></span> 
                         <?php } ?>         
                             
				<label class="fileuploadlabel">01. 10<sup>th</sup> Grade Marksheet/ Certificate</label>
			    <input type="file" name="docfile" onchange="UploadFile('submitbtn2');">
			</div>
		    </div>
		    <input type="submit" value="Submit" name="submiteventimg" id="submitbtn2" style="display: none;">
		</form>
	<form class="uploadform" method="post" enctype="multipart/form-data" action='uploaddocument.php?dir=<?php echo $docsdir;?>&memberID=<?=$_SESSION['memberID'];?>&id=<?php echo $aid;?>&n=<?php echo $name."_".$lastname;?>&ft=hsc&do=ow'>
		    <div class="custom_file_upload">
			<div class="file_upload">
			            <? if(isset($getstudmeatdata['hsc']) && $getstudmeatdata['hsc']!=""){ ?>
                          <span><img src="http://dat.net.in/<?=$getstudmeatdata['hsc']?>" style="height:50px;position:absolute;right:450px;"></span>  
                        <?php } ?>   
				<label class="fileuploadlabel">02. 12<sup>th</sup> Grade Marksheet/ Certificate<span style="font-size:12px;"></span></label>
			    <input type="file" name="docfile" onchange="UploadFile('submitbtn3');">
			</div>
		    </div>
		    <input type="submit" value="Submit" name="submiteventimg" id="submitbtn3" style="display: none;">
		</form>
	<form class="uploadform" method="post" enctype="multipart/form-data" action='uploaddocument.php?dir=<?php echo $docsdir;?>&memberID=<?=$_SESSION['memberID'];?>&id=<?php echo $aid;?>&n=<?php echo $name."_".$lastname;?>&ft=transfer&do=ow'>
		    <div class="custom_file_upload">
 			<div class="file_upload">
 			                <? if(isset($getstudmeatdata['transfer']) && $getstudmeatdata['transfer']!=""){ ?>
                              <span><img src="http://dat.net.in/<?=$getstudmeatdata['transfer']?>" style="height:50px;position:absolute;right:450px;"></span>   
                            <? } ?>  
				<label class="fileuploadlabel">03. Transfer Certificate<span style="font-size:12px;"></span></label>
			    <input type="file" name="docfile" onchange="UploadFile('submitbtn4');">
			</div>
		    </div>
		    <input type="submit" value="Submit" name="submiteventimg" id="submitbtn4" style="display: none;">
		</form>
		
		<form class="uploadform" method="post" enctype="multipart/form-data" action='uploaddocument.php?dir=<?php echo $docsdir;?>&memberID=<?=$_SESSION['memberID'];?>&id=<?php echo $aid;?>&n=<?php echo $name."_".$lastname;?>&ft=nationality&do=ow'>
		    <div class="custom_file_upload">
			<div class="file_upload">
			            <? if(isset($getstudmeatdata['nationality']) && $getstudmeatdata['nationality']!=""){ ?>
                            <span><img src="http://dat.net.in/<?=$getstudmeatdata['nationality']?>" style="height:50px;position:absolute;right:450px;"></span> 
                        <?} ?>        
                            
				<label class="fileuploadlabel">04. Nationality Certificate<span style="font-size:12px;"></span></label>
			    <input type="file" name="docfile" onchange="UploadFile('submitbtn5');">
			</div>
		    </div>
		    <input type="submit" value="Submit" name="submiteventimg" id="submitbtn5" style="display: none;">
		</form>

                <form class="uploadform" method="post" enctype="multipart/form-data" action='uploaddocument.php?dir=<?php echo $docsdir;?>&memberID=<?=$_SESSION['memberID'];?>&id=<?php echo $aid;?>&n=<?php echo $name."_".$lastname;?>&ft=domicile&do=ow'>
		    <div class="custom_file_upload">
			<div class="file_upload">
			            <? if(isset($getstudmeatdata['domicile']) && $getstudmeatdata['domicile']!=""){ ?>
                            <span><img src="http://dat.net.in/<?=$getstudmeatdata['domicile']?>" style="height:50px;position:absolute;right:450px;"></span>
                        <? } ?>    
				<label class="fileuploadlabel">05. Domicile Certificate<span style="font-size:12px;"></span></label>
			    <input type="file" name="docfile" onchange="UploadFile('submitbtn121');">
			</div>
		    </div>
		    <input type="submit" value="Submit" name="submiteventimg" id="submitbtn121" style="display: none;">
		</form>


		
	<form class="uploadform" method="post" enctype="multipart/form-data" action='uploaddocument.php?dir=<?php echo $docsdir;?>&memberID=<?=$_SESSION['memberID'];?>&id=<?php echo $aid;?>&n=<?php echo $name."_".$lastname;?>&ft=castecertificate&do=ow'>
		    <div class="custom_file_upload">
			<div class="file_upload">
			           <? if(isset($getstudmeatdata['castecertificate']) && $getstudmeatdata['castecertificate']!=""){ ?>
                            <span><img src="http://dat.net.in/<?=$getstudmeatdata['castecertificate']?>" style="height:50px;position:absolute;right:450px;"></span>
                       <?} ?>    
				<label class="fileuploadlabel">06. Caste Certificate (If applicable)<span style="font-size:12px;"></span></label>
			    <input type="file" name="docfile" onchange="UploadFile('submitbtn6');">
			</div>
		    </div>
		    <input type="submit" value="Submit" name="submiteventimg" id="submitbtn6" style="display: none;">
		</form>
	         <form class="uploadform" method="post" enctype="multipart/form-data" action='uploaddocument.php?dir=<?php echo $docsdir;?>&memberID=<?=$_SESSION['memberID'];?>&id=<?php echo $aid;?>&n=<?php echo $name."_".$lastname;?>&ft=castevalidity&do=ow'>
		    <div class="custom_file_upload">
			<div class="file_upload">
			           <? if(isset($getstudmeatdata['castevalidity']) && $getstudmeatdata['castevalidity']!=""){ ?>
                            <span><img src="http://dat.net.in/<?=$getstudmeatdata['castevalidity']?>" style="height:50px;position:absolute;right:450px;"></span>
                       <? } ?>    
				<label class="fileuploadlabel">07. Caste Validity  (If applicable)<span style="font-size:12px;"></span></label>
			    <input type="file" name="docfile" onchange="UploadFile('submitbtn7');">
			</div>
		    </div>
		    <input type="submit" value="Submit" name="submiteventimg" id="submitbtn7" style="display: none;">
		</form>

                <form class="uploadform" method="post" enctype="multipart/form-data" action='uploaddocument.php?dir=<?php echo $docsdir;?>&memberID=<?=$_SESSION['memberID'];?>&id=<?php echo $aid;?>&n=<?php echo $name."_".$lastname;?>&ft=noncreamy&do=ow'>
		    <div class="custom_file_upload">
			<div class="file_upload">
			           <? if(isset($getstudmeatdata['noncreamy']) && $getstudmeatdata['noncreamy']!=""){ ?>
                            <span><img src="http://dat.net.in/<?=$getstudmeatdata['noncreamy']?>" style="height:50px;position:absolute;right:450px;"></span>
                       <? } ?>    
				<label class="fileuploadlabel">08. Non Creamy Layer  (If applicable)<span style="font-size:12px;"></span></label>
			    <input type="file" name="docfile" onchange="UploadFile('submitbtn122');">
			</div>
		    </div>
		    <input type="submit" value="Submit" name="submiteventimg" id="submitbtn122" style="display: none;">
		</form>




	
			
		<form class="uploadform" method="post" enctype="multipart/form-data" action='uploaddocument.php?dir=<?php echo $docsdir;?>&memberID=<?=$_SESSION['memberID'];?>&id=<?php echo $aid;?>&n=<?php echo $name."_".$lastname;?>&ft=graduationcertificate&do=ow'>
		    <div class="custom_file_upload">
			<div class="file_upload">
			            <? if(isset($getstudmeatdata['graduationcertificate']) && $getstudmeatdata['graduationcertificate']!=""){ ?>
                            <span><img src="http://dat.net.in/<?=$getstudmeatdata['graduationcertificate']?>" style="height:50px;position:absolute;right:450px;"></span>
                        <? } ?>    
				<label class="fileuploadlabel">09. Graduation Certificate (If applicable)<span style="font-size:12px;"></span></label>
			    <input type="file" name="docfile" onchange="UploadFile('submitbtn8');">
			</div>
		    </div>
		    <input type="submit" value="Submit" name="submiteventimg" id="submitbtn8" style="display: none;">
		</form>
		
		<form class="uploadform" method="post" enctype="multipart/form-data" action='uploaddocument.php?dir=<?php echo $docsdir;?>&memberID=<?=$_SESSION['memberID'];?>&id=<?php echo $aid;?>&n=<?php echo $name."_".$lastname;?>&ft=experience&do=ow'>
		    <div class="custom_file_upload">
			<div class="file_upload">
			            <? if(isset($getstudmeatdata['experience']) && $getstudmeatdata['experience']!=""){ ?>
                            <span><img src="http://dat.net.in/<?=$getstudmeatdata['experience']?>" style="height:50px;position:absolute;right:450px;"></span> 
                        <? } ?>    
				<label class="fileuploadlabel">10. Experience Certificate (If applicable)<span style="font-size:12px;"></span></label>
			    <input type="file" name="docfile" onchange="UploadFile('submitbtn9');">
			</div>
		    </div>
		    <input type="submit" value="Submit" name="submiteventimg" id="submitbtn9" style="display: none;">
		</form>
		
    
				 <form action="upload_docs.php?do=ow" method="post" onsubmit="return ValidateProfilePhoto();" style="background:#fff;height:100px;">
                     <div style="margin-top:25px; float:right;">
				<input  type="reset" value="Back" onclick="GotoPrevPage('page3_form.php');" style="background:#3B3B3B;color:#FFF;width:125px;display:none;">					
                    <input  type="submit" name="" value="Submit"  style="background:#3B3B3B;color:#FFF;width:125px;display:none;">
					<input type="text" style="visibility: hidden;" id="photo" name="photo" style="background:#3B3B3B;color:#FFF;width:125px;">
				</div>
                 </form>
            </div>

        </div>
		</div>
<script>
	$('#submitgallarybtn').click(function ()
     {
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
			if(strpos($aid,"DEUG"))
			$stdir="designug";
			
                        else if(strpos($aid,"DEPG"))
			$stdir="designpg";
			
                        else if(strpos($aid,"DATMBA"))
			$stdir="designpg";


                       
			
			$studentfolder="studentdocuments/".$stdir."/".$name."_".$lastname."_".$aid;
			if (!is_dir($studentfolder))
								{
				mkdir($studentfolder, 0777, true);
			}
				
			return $studentfolder;
		}
		?>