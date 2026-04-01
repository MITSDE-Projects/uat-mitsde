
<?php
//Session starts here
ob_start();
session_start();
include("include/connection.php");
global $conn;
include("include/header.php");
error_reporting(0);
echo"</br>member id-->".	$memberid= $_GET['id'];
$pieces = explode(".", basename($_SERVER['PHP_SELF']));
$segments = explode('/', trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/'));
$pid=$segments[count($segments)-1];
$_SESSION["lastpage"] = $pid;


		$query = "SELECT * FROM student WHERE `memberID` ='$memberid'";
		$sql2 = mysqli_query($conn,$query);
		$count = mysqli_num_rows($sql2);
        if($count>0)
        {
            $userdata = mysqli_fetch_assoc($sql2);
            
            
           // echo '<pre>'; print_r($userdata); exit; 
            
            
            
            
			
			
            $studentisdcode=$userdata['studentisdcode'];
            $parentisdcode=$userdata['parentisdcode'];

            $programmesugpg=$userdata['programmesugpg'];
$desciplines=$userdata['desciplines'];
$aadhar =$userdata['aadhar'];
$address =$userdata['address'];
$caddress =$userdata['caddress'];
$testcenter =$userdata['testcenter'];
$photoimage =$userdata['photo_image'];
$bloodgroup = $userdata['bloodgroup']; 
$nationalityselect = $userdata['nationalityselect']; 
$placeofbirth = $userdata['placeofbirth']; 
$specifyillnes = $userdata['specifyillnes']; 
$dddate=$userdata['dddate'];
$ddnumber=$userdata['ddnumber'];
$bankname=$userdata['bankname'];
$branchname=$userdata['branchname'];
$email=$userdata['email'];
$payment=$userdata['isPayment'];
$transaction=$userdata['transactid'];
$annualincome = $userdata['annualincome']; 
$degree1=$userdata['degree1'];
$institutedegree1=$userdata['inst1'];
$university1=$userdata['university1'];
$yearofpassingdegree1=$userdata['yearofpassingd1'];
$scoredegree1=$userdata['scoredegree1'];

$degree2=$userdata['degree2'];
$institutedegree2=$userdata['inst2'];
$university2=$userdata['university2'];
$yearofpassingdegree2=$userdata['yearofpassingd2'];
$scoredegree2=$userdata['scoredegree2'];




$name=trim($userdata['name']);
$aid=$userdata['applicationid'];
$middlename=trim($userdata['middlename']);
$lastname=trim($userdata['lastname']);
$lastpage=$userdata['lastPage'];
$dateofbirth=$userdata['dateofbirth'];
$gender =$userdata['gender'];
$phonenumber=$userdata['phonenumber'];
$physicallychallenged=$userdata['physicallychallenged'];
$nationality=$userdata['nationality'];
$passport_no=$userdata['passport_no'];
$category=$userdata['category'];
$mpdomicile=$userdata['mpdomicile'];
$ccity=$userdata['ccity'];
$cstate=$userdata['cstate'];
$ccountry=$userdata['ccountry'];
$cpincode=$userdata['cpincode'];
$sop=$userdata['sop'];
$pcity=$userdata['pcity'];
$pstate=$userdata['pstate'];
$pcountry=$userdata['pcountry'];
$ppincode=$userdata['ppincode'];
$parentfname=$userdata['parentfname'];
$parentmname=$userdata['parentmname'];
$parentlname=$userdata['parentlname'];
$relationshipwithapplicant=$userdata['relationshipwithapplicant'];
$parentmobilenumber=$userdata['parentmobilenumber'];
$parentemail=$userdata['parentemail'];
$professionoftheparent=$userdata['professionoftheparent'];
$organizationdetails=$userdata['organizationdetails'];
$school10=$userdata['school10'];
$examboardname10=$userdata['examboardname10'];
$yearofpassing10=$userdata['yearofpassing10'];
$score10=$userdata['score10'];
$school12=$userdata['school12'];
$examboardname12=$userdata['examboardname12'];
$yearofpassing12=$userdata['yearofpassing12'];
$totaloutof12=$userdata['totaloutof12'];
$totaloutof10=$userdata['totaloutof10'];
$score12=$userdata['score12'];
$stream12=$userdata['stream12'];
$degree_status1 = $userdata['degree_status1'];
$school12status=$userdata['school12status'];

$companyname = $userdata['companyname'];
$experience = $userdata['experience'];

$examname=$userdata['examname'];
$examnumber=$userdata['examnumber'];
$examyear=$userdata['examyear'];
$examscore=$userdata['examscore'];
$examrank=$userdata['examrank'];
$examapplicationnumber=$userdata['examapplicationnumber'];
$examapplicationnumber2=$userdata['examapplicationnumber2'];

$examname2=$userdata['examname2'];
$examnumber2=$userdata['examnumber2'];
$examyear2=$userdata['examyear2'];
$examscore2=$userdata['examscore2'];
$examrank2=$userdata['examrank2'];

$englishread=$userdata['englishread'];
$englishwrite=$userdata['englishwrite'];
$englishspeak=$userdata['englishspeak'];



$source=$userdata['source'];



 // Here we will check if it is exits in Tbl_Student!...
							       
							       
							        $getstudatacnt  = mysqli_fetch_assoc(mysqli_query($conn,"SELECT count(*) as cnt FROM tbl_students_data WHERE student_id='".$_GET['id']."'"));
							        
							         if($getstudatacnt['cnt'] < 1){
							             
							             
							          mysqli_query($conn,"INSERT INTO tbl_students_data(student_id)VALUES('".$_GET['id']."')");
							             
							         }






        }

?>
<script type='text/javascript' src='http://code.jquery.com/jquery-latest.min.js'></script>
<script>
    function fun(id) 
    {
   //alert('incomplete 10th details');"
   document.getElementById(id).innerHTML+="<li>"+"incomplete 10th details";
   document.getElementById("10"+id).style.visibility="hidden";
   return true;
   }
    function funn(id) 
    {
  //alert('incomplete 12th details');
   document.getElementById(id).innerHTML+="<li>"+"incomplete 12th details";
   document.getElementById("12"+id).style.visibility="hidden";
   return true;
   }
  function foo(id) 
  {
   //alert('invalid sop');
   document.getElementById(id).innerHTML+="<li>"+"Invalid SoP";
   document.getElementById("14"+id).style.visibility="hidden";
   return true;
  }
  function fun1(id) 
  {
  // alert('invalid photo');
   document.getElementById(id).innerHTML+="<li>"+"Invalid Photo";
   document.getElementById("16"+id).style.visibility="hidden";
   return true;
  }
  function fun2(id) 
  {
  // alert('invalid 10th documents');
   document.getElementById(id).innerHTML+="<li>"+"Invalid 10th Doc";
   document.getElementById("18"+id).style.visibility="hidden";
   return true;
  }
  function fun3(id) 
  {
   //alert('invalid 12th documents');
   document.getElementById(id).innerHTML+="<li>"+"Invalid 12th Doc";
   document.getElementById("20"+id).style.visibility="hidden";
   return true;
  }
  function fun4(id) 
   {
   document.getElementById(id).innerHTML+="<li>"+"Unacceptable Caste Certificate";
   document.getElementById("22"+id).style.visibility="hidden";
   return true;
   }
   function fun5(id) 
   {
	  
	//Eligiblity
    loadDoc(id);
    
    return true;
   }
   function fun6(id) 
   {
	
	mailupdate(id);
 
    return true;
   }

    function loadDoc(id) {
		
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
     if (this.readyState == 4 && this.status == 200) {
//document.getElementById("demo").innerHTML =this.responseText;
     }
   };
  xhttp.open("GET", "update.php?id="+id, true);
  xhttp.send();
  }

   function mailupdate(id) {
	var mailbody=document.getElementById("mail"+id).innerHTML;
	var to=document.getElementById("to"+id).value;
	var pto=document.getElementById("toparent"+id).value;
	var num=document.getElementById("number"+id).value;
	var pnum=document.getElementById("pnumber"+id).value;
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        //document.getElementById("demo").innerHTML =this.responseText;
    }
  };
    xhttp.open("GET", "mailupdate.php?id="+id+"&mail="+mailbody+"&to="+to+"&pto="+pto+"&num="+num+"&pnum="+pnum, true);

    xhttp.send();
 }




	</script>
	
	<script language="javascript" type="text/javascript">
	
	   function sopsubmit(id,value){
		   var sop_submit = document.getElementById(id).checked;
            if(sop_submit==true){
				  $.ajax({
		          type: "POST",
		          url: "ajax/ajax.php",
		          data:{value:value,process:'sop_update_true'},
		          success: function(result)
					{
					    if(parseInt(result)>0)
						 {
							
						 }
						 else
						 {
							
						 }
					}
				});
				
        }
		
		else {
			
			$.ajax({
		          type: "POST",
		          url: "ajax/ajax.php",
		          data:{value:value,process:'sop_update_false'},
		          success: function(result)
					{
					    if(parseInt(result)>0)
						 {
							
						 }
						 else
						 {
							
						 }
					}
				});
				
		}
		
	   }
	
	  function astsubmit(id,value){
		   var ast_submit = document.getElementById(id).checked;
            if(ast_submit==true){
				  $.ajax({
		          type: "POST",
		          url: "ajax/ajax.php",
		          data:{value:value,process:'ast_update_true'},
		          success: function(result)
					{
					    if(parseInt(result)>0)
						 {
							
						 }
						 else
						 {
							
						 }
					}
				});
				
        }
		
		else {
			
			$.ajax({
		          type: "POST",
		          url: "ajax/ajax.php",
		          data:{value:value,process:'ast_update_false'},
		          success: function(result)
					{
					    if(parseInt(result)>0)
						 {
							
						 }
						 else
						 {
							
						 }
					}
				});
				
		}
		
	   }
	
	
	function videosubmit(id,value){
		   var video_submit = document.getElementById(id).checked;
            if(video_submit==true){
				  $.ajax({
		          type: "POST",
		          url: "ajax/ajax.php",
		          data:{value:value,process:'video_submit_true'},
		          success: function(result)
					{
					    if(parseInt(result)>0)
						 {
							
						 }
						 else
						 {
							
						 }
					}
				});
				
        }
		
		else {
			
			$.ajax({
		          type: "POST",
		          url: "ajax/ajax.php",
		          data:{value:value,process:'video_submit_false'},
		          success: function(result)
					{
					    if(parseInt(result)>0)
						 {
							
						 }
						 else
						 {
							
						 }
					}
				});
				
		}
		
	   }
	
	
	
	 function offersubmit(id,value){
		   var offer_submit = document.getElementById(id).checked;
            if(offer_submit==true){
				  $.ajax({
		          type: "POST",
		          url: "ajax/ajax.php",
		          data:{value:value,process:'offer_submit_true'},
		          success: function(result)
					{
					    if(parseInt(result)>0)
						 {
							
						 }
						 else
						 {
							
						 }
					}
				});
				
        }
		
		else {
			
			$.ajax({
		          type: "POST",
		          url: "ajax/ajax.php",
		          data:{value:value,process:'offer_submit_false'},
		          success: function(result)
					{
					    if(parseInt(result)>0)
						 {
							
						 }
						 else
						 {
							
						 }
					}
				});
				
		}
		
	   }
	
	function confirmsent(id,value){
		   var confirm_sent = document.getElementById(id).checked;
            if(confirm_sent==true){
				  $.ajax({
		          type: "POST",
		          url: "ajax/ajax.php",
		          data:{value:value,process:'confirm_sent_true'},
		          success: function(result)
					{
					    if(parseInt(result)>0)
						 {
							
						 }
						 else
						 {
							
						 }
					}
				});
				
        }
		
		else {
			
			$.ajax({
		          type: "POST",
		          url: "ajax/ajax.php",
		          data:{value:value,process:'confirm_sent_false'},
		          success: function(result)
					{
					    if(parseInt(result)>0)
						 {
							
						 }
						 else
						 {
							
						 }
					}
				});
				
		}
		
	   }
	
	
	
	function admissionconfirm(id,value){
		   var admission_confirm = document.getElementById(id).checked;
            if(admission_confirm==true){
				  $.ajax({
		          type: "POST",
		          url: "ajax/ajax.php",
		          data:{value:value,process:'admission_confirm_true'},
		          success: function(result)
					{
					    if(parseInt(result)>0)
						 {
							
						 }
						 else
						 {
							
						 }
					}
				});
				
        }
		
		else {
			
			$.ajax({
		          type: "POST",
		          url: "ajax/ajax.php",
		          data:{value:value,process:'admission_confirm_false'},
		          success: function(result)
					{
					    if(parseInt(result)>0)
						 {
							
						 }
						 else
						 {
							
						 }
					}
				});
				
		}
		
	   }
	
	
	
	
	</script>
	  
<link href="https://mitsde.com/administrator/bootstrap/css/style.css" rel="stylesheet" />
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            MIT - SDE 
            <small>Documents</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
            <li><a href="#">Details</a></li>
            <li class="active"></li>
          </ol>
        </section>

       

              <div class="box">
               
                <div class="box-body">
                		
                	<?php

//this is to get data from students table.

//echo "SELECT * FROM tbl_students_data WHERE student_id='".$memberID."'"; exit; 

$getstudmeatdata = mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM tbl_students_data WHERE student_id='".$_GET['id']."'"));


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
								
								//$locationurl="page3_form.php";
							include("includes/connect.php");
								
						//$str="UPDATE student SET `examname`='$examname',`examnumber`='$examnumber',`examscore`='$examscore',`examrank`='$examrank',`examyear`='$examyear',`examname2`='$examname2',`examnumber2`='$examnumber2',`examscore2`='$examscore2',`examrank2`='$examrank2',`examyear2`='$examyear2',`englishread`='$englishread',`englishspeak`='$englishspeak',`englishwrite`='$englishwrite',`degree1`='$degree1',degree_status1='".$degree_status1."',`inst1`='$inst1',`university1`='$university1',`yearofpassingd1`='$yearofpassingd1',`scoredegree1`='$scoredegree1',`degree2`='$degree2',`inst2`='$inst2',`university2`='$university2',`yearofpassingd2`='$yearofpassingd2',`scoredegree2`='$scoredegree2', `school10`='$school10',`examboardname10`='$examboardname10',`yearofpassing10`='$yearofpassing10',`score10`='$score10',`school12`='$school12',`examboardname12`='$examboardname12',`yearofpassing12`='$yearofpassing12',`score12`='$score12',school12status='$school12status',`stream12`='$stream12',`isComplete`=0,`lastPage`='$locationurl',formstatus='incomplete form',testcenter='$testcenter',companyname='".$companyname."',experience='".$experience."'  WHERE `memberID`='$memberid'";
						//$query = mysqli_query($connection,$str);
						
						
						
					

    }
} else {
    if (empty($_SESSION['error_page4'])) {
        header("location: avt_admin_uploads.php?id=".$_GET['id']);//redirecting to first page
    }
}


//echo $aid; exit;



$docsdir = GetStudentFolder($aid,$name,$lastname);
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
	<form class="uploadform" method="post" enctype="multipart/form-data" action='uploadphoto.php?dir=<?php echo $docsdir;?>&memberID=<?=$_GET['id'];?>&id=<?php echo $aid;?>&n=<?php echo $name."_".$lastname;?>&ft=photo&do=ow'>
		    <div class="custom_file_upload">
			<div class="file_upload">

				<label class="fileuploadlabel">Passport Size Photo <span style="color:red;">*</span></label>
			    
                            <? if(isset($getstudmeatdata['photo']) && $getstudmeatdata['photo']!=""){ ?>
                            <input type="file" name="imagefile" id="profilephoto" onchange="UploadFile('submitgallarybtn');">
                            <span><a href="https://mitsde.com/apply/<?php echo $getstudmeatdata['photo'];?>" target="_blank"><img src="https://mitsde.com/apply/<?php echo $getstudmeatdata['photo'];?>" width="80" height="80" ></a></span>
                            <? } else { ?>
                            <input type="file" name="imagefile" id="profilephoto" onchange="UploadFile('submitgallarybtn');" required>
                            <? } ?> 
			</div>
		    </div>
			<span id="profilephotoerr" style="color:red;"></span>
		    <input type="submit" value="Submit" name="submiteventimg" id="submitgallarybtn" style="display: none;">
		</form>
		
	
	
	<br>
	    <form class="uploadform" method="post" enctype="multipart/form-data" action='uploaddocument.php?dir=<?php echo $docsdir;?>&memberID=<?=$_GET['id'];?>&id=<?php echo $aid;?>&n=<?php echo $name."_".$lastname;?>&ft=ssc&do=ow'>
		    <div class="custom_file_upload">
			<div class="file_upload">
			                     
                             
				<label class="fileuploadlabel">01. 10<sup>th</sup> Grade Marksheet<span style="font-size:12px;color:red;">*</span></label>
			    <input type="file" name="docfile" onchange="UploadFile('submitbtn2');">
				<? if(isset($getstudmeatdata['ssc']) && $getstudmeatdata['ssc']!=""){ ?>
                             <span><a href="https://mitsde.com/apply/<?php echo $getstudmeatdata['scc'];?>" target="_blank"><img src="https://mitsde.com/apply/<?php echo $getstudmeatdata['ssc'];?>" width="80" height="80" ></a></span>
                         <?php } ?> 
			</div>
		    </div>
		    <input type="submit" value="Submit" name="submiteventimg" id="submitbtn2" style="display: none;">
		</form>
		
		<!--<form class="uploadform" method="post" enctype="multipart/form-data" action='uploaddocument.php?dir=<?php echo $docsdir;?>&memberID=<?=$_GET['id'];?>&id=<?php echo $aid;?>&n=<?php echo $name."_".$lastname;?>&ft=ssc_certificate&do=ow'>
		    <div class="custom_file_upload">
			<div class="file_upload">
			                     
                             
				<label class="fileuploadlabel">02. 10<sup>th</sup> Certificate</label>
			    <input type="file" name="docfile" onchange="UploadFile('submitbtn2');">
				<? if(isset($getstudmeatdata['ssc']) && $getstudmeatdata['ssc']!=""){ ?>
                             <span><a href="https://mitsde.com/apply/<?php echo $getstudmeatdata['scc_certificate'];?>" target="_blank"><img src="https://mitsde.com/apply/<?php echo $getstudmeatdata['scc_certificate'];?>" width="80" height="80" ></a></span>
                         <?php } ?> 
			</div>
		    </div>
		    <input type="submit" value="Submit" name="submiteventimg" id="submitbtn2" style="display: none;">
		</form>-->
		
		<form class="uploadform" method="post" enctype="multipart/form-data" action='uploaddocument.php?dir=<?php echo $docsdir;?>&memberID=<?=$_GET['id'];?>&id=<?php echo $aid;?>&n=<?php echo $name."_".$lastname;?>&ft=hsc&do=ow'>
		    <div class="custom_file_upload">
			<div class="file_upload">
			            
				<label class="fileuploadlabel">03. 12<sup>th</sup> Grade Marksheet<span style="font-size:12px;color:red;">*</span></label>
			    <input type="file" name="docfile" onchange="UploadFile('submitbtn3');">
				<? if(isset($getstudmeatdata['hsc']) && $getstudmeatdata['hsc']!=""){ ?>
                          <span><a href="https://mitsde.com/apply/<?php echo $getstudmeatdata['hsc'];?>" target="_blank"><img src="https://mitsde.com/apply/<?php echo $getstudmeatdata['hsc'];?>" width="80" height="80" ></a></span>
                        <?php } ?>   
			</div>
		    </div>
		    <input type="submit" value="Submit" name="submiteventimg" id="submitbtn3" style="display: none;">
		</form>

        <!--<form class="uploadform" method="post" enctype="multipart/form-data" action='uploaddocument.php?dir=<?php echo $docsdir;?>&memberID=<?=$_GET['id'];?>&id=<?php echo $aid;?>&n=<?php echo $name."_".$lastname;?>&ft=hsc_certificate&do=ow'>
		    <div class="custom_file_upload">
			<div class="file_upload">
			            
				<label class="fileuploadlabel">04. 12<sup>th</sup>Certificate<span style="font-size:12px;"></span></label>
			    <input type="file" name="docfile" onchange="UploadFile('submitbtn4');">
				<? if(isset($getstudmeatdata['hsc']) && $getstudmeatdata['hsc']!=""){ ?>
                          <span><a href="https://mitsde.com/apply/<?php echo $getstudmeatdata['hsc_certificate'];?>" target="_blank"><img src="https://mitsde.com/apply/<?php echo $getstudmeatdata['hsc_certificate'];?>" width="80" height="80" ></a></span>
                        <?php } ?>   
			</div>
		    </div>
		    <input type="submit" value="Submit" name="submiteventimg" id="submitbtn4" style="display: none;">
		</form>-->


	
			<form class="uploadform" method="post" enctype="multipart/form-data" action='uploaddocument.php?dir=<?php echo $docsdir;?>&memberID=<?=$_GET['id'];?>&id=<?php echo $aid;?>&n=<?php echo $name."_".$lastname;?>&ft=graduationcertificate_sem1&do=ow'>
		    <div class="custom_file_upload">
			<div class="file_upload">
			              
				<label class="fileuploadlabel">05. Graduation Sem 1 Marksheet<span style="font-size:12px;"></span></label>
			    <input type="file" name="docfile" onchange="UploadFile('submitbtn5');">
				<? if(isset($getstudmeatdata['graduationcertificate_sem1']) && $getstudmeatdata['graduationcertificate_sem1']!=""){ ?>
                            <span><a href="https://mitsde.com/apply/<?php echo $getstudmeatdata['graduationcertificate_sem1'];?>" target="_blank"><img src="https://mitsde.com/apply/<?php echo $getstudmeatdata['graduationcertificate_sem1'];?>" width="80" height="80" ></a></span>
                        <? } ?>  
			</div>
		    </div>
		    <input type="submit" value="Submit" name="submiteventimg" id="submitbtn5" style="display: none;">
		    </form>
		
		
		
		
		
		<form class="uploadform" method="post" enctype="multipart/form-data" action='uploaddocument.php?dir=<?php echo $docsdir;?>&memberID=<?=$_GET['id'];?>&id=<?php echo $aid;?>&n=<?php echo $name."_".$lastname;?>&ft=graduationcertificate_sem2&do=ow'>
		    <div class="custom_file_upload">
			<div class="file_upload">
			              
				<label class="fileuploadlabel">06. Graduation Sem 2 Marksheet<span style="font-size:12px;"></span></label>
			    <input type="file" name="docfile" onchange="UploadFile('submitbtn6');">
				<? if(isset($getstudmeatdata['graduationcertificate_sem2']) && $getstudmeatdata['graduationcertificate_sem2']!=""){ ?>
                            <span><a href="https://mitsde.com/apply/<?php echo $getstudmeatdata['graduationcertificate_sem2'];?>" target="_blank"><img src="https://mitsde.com/apply/<?php echo $getstudmeatdata['graduationcertificate_sem2'];?>" width="80" height="80" ></a></span>
                        <? } ?>  
			</div>
		    </div>
		    <input type="submit" value="Submit" name="submiteventimg" id="submitbtn6" style="display: none;">
		</form>
		
		
		<form class="uploadform" method="post" enctype="multipart/form-data" action='uploaddocument.php?dir=<?php echo $docsdir;?>&memberID=<?=$_GET['id'];?>&id=<?php echo $aid;?>&n=<?php echo $name."_".$lastname;?>&ft=graduationcertificate_sem3&do=ow'>
		    <div class="custom_file_upload">
			<div class="file_upload">
			              
				<label class="fileuploadlabel">07. Graduation Sem 3 Marksheet<span style="font-size:12px;"></span></label>
			    <input type="file" name="docfile" onchange="UploadFile('submitbtn7');">
				<? if(isset($getstudmeatdata['graduationcertificate_sem3']) && $getstudmeatdata['graduationcertificate_sem3']!=""){ ?>
                            <span><a href="https://mitsde.com/apply/<?php echo $getstudmeatdata['graduationcertificate_sem3'];?>" target="_blank"><img src="https://mitsde.com/apply/<?php echo $getstudmeatdata['graduationcertificate_sem3'];?>" width="80" height="80" ></a></span>
                        <? } ?>  
			</div>
		    </div>
		    <input type="submit" value="Submit" name="submiteventimg" id="submitbtn7" style="display: none;">
		</form>
		
		
		<form class="uploadform" method="post" enctype="multipart/form-data" action='uploaddocument.php?dir=<?php echo $docsdir;?>&memberID=<?=$_GET['id'];?>&id=<?php echo $aid;?>&n=<?php echo $name."_".$lastname;?>&ft=graduationcertificate_sem4&do=ow'>
		    <div class="custom_file_upload">
			<div class="file_upload">
			              
				<label class="fileuploadlabel">08. Graduation Sem 4 Marksheet <span style="font-size:12px;"></span></label>
			    <input type="file" name="docfile" onchange="UploadFile('submitbtn8');">
				<? if(isset($getstudmeatdata['graduationcertificate_sem4']) && $getstudmeatdata['graduationcertificate_sem4']!=""){ ?>
                            <span><a href="https://mitsde.com/apply/<?php echo $getstudmeatdata['graduationcertificate_sem4'];?>" target="_blank"><img src="https://mitsde.com/apply/<?php echo $getstudmeatdata['graduationcertificate_sem4'];?>" width="80" height="80" ></a></span>
                        <? } ?>  
			</div>
		    </div>
		    <input type="submit" value="Submit" name="submiteventimg" id="submitbtn8" style="display: none;">
		</form>
		
		
	   <form class="uploadform" method="post" enctype="multipart/form-data" action='uploaddocument.php?dir=<?php echo $docsdir;?>&memberID=<?=$_GET['id'];?>&id=<?php echo $aid;?>&n=<?php echo $name."_".$lastname;?>&ft=graduationcertificate_sem5&do=ow'>
		    <div class="custom_file_upload">
			<div class="file_upload">
			              
				<label class="fileuploadlabel">09. Graduation  Sem 5 Marksheet<span style="font-size:12px;"></span></label>
			    <input type="file" name="docfile" onchange="UploadFile('submitbtn9');">
				<? if(isset($getstudmeatdata['graduationcertificate_sem5']) && $getstudmeatdata['graduationcertificate_sem5']!=""){ ?>
                            <span><a href="https://mitsde.com/apply/<?php echo $getstudmeatdata['graduationcertificate_sem5'];?>" target="_blank"><img src="https://mitsde.com/apply/<?php echo $getstudmeatdata['graduationcertificate_sem5'];?>" width="80" height="80" ></a></span>
                        <? } ?>  
			</div>
		    </div>
		    <input type="submit" value="Submit" name="submiteventimg" id="submitbtn9" style="display: none;">
		</form>
		
		
		<form class="uploadform" method="post" enctype="multipart/form-data" action='uploaddocument.php?dir=<?php echo $docsdir;?>&memberID=<?=$_GET['id'];?>&id=<?php echo $aid;?>&n=<?php echo $name."_".$lastname;?>&ft=graduationcertificate_sem6&do=ow'>
		    <div class="custom_file_upload">
			<div class="file_upload">
			              
				<label class="fileuploadlabel">10. Graduation  Sem 6 Marksheet<span style="font-size:12px;"></span></label>
			    <input type="file" name="docfile" onchange="UploadFile('submitbtn10');">
				<? if(isset($getstudmeatdata['graduationcertificate_sem6']) && $getstudmeatdata['graduationcertificate_sem6']!=""){ ?>
                            <span><a href="https://mitsde.com/apply/<?php echo $getstudmeatdata['graduationcertificate_sem6'];?>" target="_blank"><img src="https://mitsde.com/apply/<?php echo $getstudmeatdata['graduationcertificate_sem6'];?>" width="80" height="80"></a></span>
                        <? } ?>  
			</div>
		    </div>
		    <input type="submit" value="Submit" name="submiteventimg" id="submitbtn10" style="display: none;">
		</form>
		
		
		<form class="uploadform" method="post" enctype="multipart/form-data" action='uploaddocument.php?dir=<?php echo $docsdir;?>&memberID=<?=$_GET['id'];?>&id=<?php echo $aid;?>&n=<?php echo $name."_".$lastname;?>&ft=graduationcertificate_sem7&do=ow'>
		    <div class="custom_file_upload">
			<div class="file_upload">
			              
				<label class="fileuploadlabel">11. Graduation Sem 7 Marksheet (If applicable)<span style="font-size:12px;"></span></label>
			    <input type="file" name="docfile" onchange="UploadFile('submitbtn11');">
				<? if(isset($getstudmeatdata['graduationcertificate_sem7']) && $getstudmeatdata['graduationcertificate_sem7']!=""){ ?>
                            <span><a href="https://mitsde.com/apply/<?php echo $getstudmeatdata['graduationcertificate_sem7'];?>" target="_blank"><img src="https://mitsde.com/apply/<?php echo $getstudmeatdata['graduationcertificate_sem7'];?>" width="80" height="80"></a></span>
                        <? } ?>  
			</div>
		    </div>
		    <input type="submit" value="Submit" name="submiteventimg" id="submitbtn11" style="display: none;">
		</form>
		
		<form class="uploadform" method="post" enctype="multipart/form-data" action='uploaddocument.php?dir=<?php echo $docsdir;?>&memberID=<?=$_GET['id'];?>&id=<?php echo $aid;?>&n=<?php echo $name."_".$lastname;?>&ft=graduationcertificate_sem8&do=ow'>
		    <div class="custom_file_upload">
			<div class="file_upload">
			              
				<label class="fileuploadlabel">12. Graduation Sem 8 Marksheet (If applicable)<span style="font-size:12px;"></span></label>
			    <input type="file" name="docfile" onchange="UploadFile('submitbtn12');">
				<? if(isset($getstudmeatdata['graduationcertificate_sem8']) && $getstudmeatdata['graduationcertificate_sem8']!=""){ ?>
                            <span><a href="https://mitsde.com/apply/<?php echo $getstudmeatdata['graduationcertificate_sem8'];?>" target="_blank"><img src="https://mitsde.com/apply/<?php echo $getstudmeatdata['graduationcertificate_sem8'];?>" width="80" height="80"></a></span>
                        <? } ?>  
			</div>
		    </div>
		    <input type="submit" value="Submit" name="submiteventimg" id="submitbtn12" style="display: none;">
		</form>
		
		
	    <form class="uploadform" method="post" enctype="multipart/form-data" action='uploaddocument.php?dir=<?php echo $docsdir;?>&memberID=<?=$_GET['id'];?>&id=<?php echo $aid;?>&n=<?php echo $name."_".$lastname;?>&ft=graduationcertificate&do=ow'>
		    <div class="custom_file_upload">
			<div class="file_upload">
			              
				<label class="fileuploadlabel">13. Graduation Certificate (If applicable)<span style="font-size:12px;"></span></label>
			    <input type="file" name="docfile" onchange="UploadFile('submitbtn13');">
				<? if(isset($getstudmeatdata['graduationcertificate']) && $getstudmeatdata['graduationcertificate']!=""){ ?>
                            <span><a href="https://mitsde.com/apply/<?php echo $getstudmeatdata['graduationcertificate'];?>" target="_blank"><img src="https://mitsde.com/apply/<?php echo $getstudmeatdata['graduationcertificate'];?>" width="80" height="80" ></a></span>
                        <? } ?>  
			</div>
		    </div>
		    <input type="submit" value="Submit" name="submiteventimg" id="submitbtn13" style="display: none;">
		</form>
		
		
		<form class="uploadform" method="post" enctype="multipart/form-data" action='uploaddocument.php?dir=<?php echo $docsdir;?>&memberID=<?=$_GET['id'];?>&id=<?php echo $aid;?>&n=<?php echo $name."_".$lastname;?>&ft=identity&do=ow'>
		    <div class="custom_file_upload">
			<div class="file_upload">
			              
				<label class="fileuploadlabel">14. Identity Proof<span style="font-size:12px;color:red">*</span></label>
			    <input type="file" name="docfile" onchange="UploadFile('submitbtn14');">
				<? if(isset($getstudmeatdata['identity']) && $getstudmeatdata['identity']!=""){ ?>
                            <span><a href="https://mitsde.com/apply/<?php echo $getstudmeatdata['identity'];?>" target="_blank"><img src="https://mitsde.com/apply/<?php echo $getstudmeatdata['identity'];?>" width="80" height="80" ></a></span>
                        <? } ?>  
			</div>
		    </div>
		    <input type="submit" value="Submit" name="submiteventimg" id="submitbtn14" style="display: none;">
		</form>
		
		<form class="uploadform" method="post" enctype="multipart/form-data" action='uploaddocument.php?dir=<?php echo $docsdir;?>&memberID=<?=$_GET['id'];?>&id=<?php echo $aid;?>&n=<?php echo $name."_".$lastname;?>&ft=application_form&do=ow'>
		    <div class="custom_file_upload">
			<div class="file_upload">
			              
				<label class="fileuploadlabel"> Application Form<span style="font-size:12px;color:red">*</span></label>
			    <input type="file" name="docfile" onchange="UploadFile('submitbtn15');">
				<? if(isset($getstudmeatdata['application_form']) && $getstudmeatdata['application_form']!=""){ ?>
                            <span><a href="https://mitsde.com/apply/<?php echo $getstudmeatdata['application_form'];?>" target="_blank"><img src="https://mitsde.com/apply/<?php echo $getstudmeatdata['application_form'];?>" width="80" height="80" ></a></span>
                        <? } ?>  
			</div>
		    </div>
		    <input type="submit" value="Submit" name="submiteventimg" id="submitbtn15" style="display: none;">
		</form>
		
		
		
		<form class="uploadform" method="post" enctype="multipart/form-data" action='uploaddocument.php?dir=<?php echo $docsdir;?>&memberID=<?=$_GET['id'];?>&id=<?php echo $aid;?>&n=<?php echo $name."_".$lastname;?>&ft=undertaking_form&do=ow'>
		    <div class="custom_file_upload">
			<div class="file_upload">
			              
				<label class="fileuploadlabel"> Undertaking Form<span style="font-size:12px;color:red">*</span></label>
			    <input type="file" name="docfile" onchange="UploadFile('submitbtn16');">
				<? if(isset($getstudmeatdata['undertaking_form']) && $getstudmeatdata['undertaking_form']!=""){ ?>
                            <span><a href="https://mitsde.com/apply/<?php echo $getstudmeatdata['undertaking_form'];?>" target="_blank"><img src="https://mitsde.com/apply/<?php echo $getstudmeatdata['undertaking_form'];?>" width="80" height="80" ></a></span>
                        <? } ?>  
			</div>
		    </div>
		    <input type="submit" value="Submit" name="submiteventimg" id="submitbtn16" style="display: none;">
		</form>
		
		<form class="uploadform" method="post" enctype="multipart/form-data" action='uploaddocument.php?dir=<?php echo $docsdir;?>&memberID=<?=$_GET['id'];?>&id=<?php echo $aid;?>&n=<?php echo $name."_".$lastname;?>&ft=signature'>
		    <div class="custom_file_upload">
			<div class="file_upload">
			            <? if(isset($getstudmeatdata['signature']) && $getstudmeatdata['signature']!=""){ ?>
                            <span><img src="https://www.mitsde.com/apply/<?=$getstudmeatdata['signature']?>" style="height:50px;position:absolute;right:450px;"></span> 
                        <? } ?>    
				<label class="fileuploadlabel">16. Signature <span style="font-size:12px;color:red">*</span></label>
			    <input type="file" name="docfile" onchange="UploadFile('submitbtn17');">
			</div>
		    </div>
		    <input type="submit" value="Submit" name="submiteventimg" id="submitbtn17" style="display: none;">
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
		

                       
			
			$studentfolder="studentdocuments/".$name."_".$lastname."_".$aid;
			if (!is_dir("../apply/".$studentfolder))
								{
				mkdir("../apply/".$studentfolder, 0777, true);
			}
				
			return $studentfolder;
		}
		?>
                          
                		
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <? include("include/footer.php"); ?>

     
      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
      <div class="control-sidebar-bg"></div>
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.4 -->
    <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- DataTables -->
    <script src="plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="plugins/datatables/dataTables.bootstrap.min.js"></script>
    <!-- SlimScroll -->
    <script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/app.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>
    <!-- page script -->
	
	


	
	
    <script>
      $(function () {
        $("#example1").DataTable();
        $('#example2').DataTable({
		  
          "paging": true,
          "lengthChange": true,
          "searching": true,
          "ordering": true,
          "info": true,
		  "scrollX": true,
          "autoWidth": true
		  
		 
        });
      });
    </script>
  </body>
</html>
