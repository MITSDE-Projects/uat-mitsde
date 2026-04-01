<?php 
ob_start();
session_start();
include("include/connection.php");
global $conn;
include("include/header.php");
error_reporting(0);





if(isset($_GET['enrollverified']) && $_GET['enrollverified']=='1'){
    
    //mysqli_query($conn,"UPDATE student SET enrollment_verified='1' WHERE memberID='".$_GET['id']."'");
    
    
    
    
    header('location:candidate-details.php?id='.$_GET['id'].'&enrollmentveridone');
    
}



if(isset($_GET['docverfied']) && $_GET['docverfied']=='1') {
   // echo "UPDATE student SET is_doc_verified='1' AND is_reject='0' WHERE memberID='".$_GET['id']."'";
    //die;
    //mysqli_query($conn,"UPDATE student SET is_doc_verified='1' WHERE memberID='".$_GET['id']."'");
    header('location:candidate-details.php?id='.$_GET['id'].'&docverificationdone');
    
}

if(isset($_GET['sendverified']) && $_GET['sendverified']=='1') {
   // echo "UPDATE student SET is_doc_verified='1' AND is_reject='0' WHERE memberID='".$_GET['id']."'";
    //die;
    //mysqli_query($conn,"UPDATE student SET is_reject='0' WHERE memberID='".$_GET['id']."'");
    header('location:candidate-details.php?id='.$_GET['id'].'&sendtodoc_done');
    
}



if(isset($_GET['allverfied']) && $_GET['allverfied']=='1') {
    $veried=$_GET['allverfied'];
   // mysqli_query($conn,"UPDATE student SET all_verified='1' WHERE memberID='".$_GET['id']."'");
    
  
    
    header('location:candidate-details.php?id='.$_GET['id'].'&allverificationdone');
    
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




function docverified(id){

var conf  = confirm("Are u sure documents are verified?");
if(conf==true){
window.location.href='candidate-details.php?id='+id+'&docverfied=1';
}

}

function senddocverified(id){

var conf  = confirm("Are u sure send to doc verified?");
if(conf==true){
window.location.href='candidate-details.php?id='+id+'&sendverified=1';
}

}



function enrollverified(id){
    
var conf  = confirm("Are u sure Emrollment verification done ?");

if(conf==true){
 
 window.location.href='candidate-details.php?id='+id+'&enrollverified=1';

}    
    
}


function allverified(id){


var conf  = confirm("Are u sure all verified and check ok?");
if(conf==true){
window.location.href='candidate-details.php?id='+id+'&allverfied=1';
}

}





	</script>
	

	

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            MITSDE 
            <small>Applicant</small>
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
                			$memberid1 = $_GET['id'];
                			
                			//echo $mailid;
                	//	echo "</br>sql-->"."SELECT * FROM student WHERE memberID='".$_GET['id']."'";
                			$getmetadata = mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM student WHERE memberID='".$_GET['id']."'"));
                			$getmetadatadoc = mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM tbl_students_data WHERE student_id='".$_GET['id']."'"));
                		?>
						
               <section class="content">
			   
			   <?php
								if(isset($_POST['update'])) 
								{
									extract($_POST);
									
								
									
							                    $programname=explode(",",$_POST['programmesugpg']);
							                    $sp=explode(",",$_POST['desciplines']);
							                    
							                    $programname[0];
							                    $programname[1];
							                 
							                    $sp[0];
							                    $sp[1];
								
								
							//	die;
							 		 
							 		
							 		
							        $checkappid = mysqli_fetch_assoc(mysqli_query($conn,"SELECT count(*) as cnt FROM student WHERE memberID='".$_GET['id']."'"));
							
							       
			//echo "UPDATE student SET parentemail='".$_POST['parentemail']."',companyname='".$_POST['companyname']."',middlename='".$_POST['middlename']."',aadhar='".$_POST['aadhar']."', name='".$_POST['name']."',mothername='".$_POST['mothername']."', lastname='".$_POST['lastname']."', gender='".$_POST['gender']."',programmesugpg='".$programname[0]."',CourseID='".$programname[1]."',desciplines='".$sp[0]."',SpecializationID='".$sp[1]."', phonenumber='".$_POST['phonenumber']."',dateofbirth='".$_POST['dateofbirth']."'parentfname='".$_POST['parentfname']."',parentlname='".$_POST['parentlname']."',parentmobilenumber='".$_POST['parentmobilenumber']."',parentemail='".$_POST['parentemail']."'  WHERE memberID='".$_GET['id']."'";
		//echo "UPDATE student SET alternate_email='".$_POST['alternate_email']."', email='".strtolower($_POST['email'])."', parentemail='".$_POST['parentemail']."',companyname='".$_POST['companyname']."',middlename='".$_POST['middlename']."',aadhar='".$_POST['aadhar']."', name='".$_POST['name']."',mothername='".$_POST['mothername']."', lastname='".$_POST['lastname']."', gender='".$_POST['gender']."',programmesugpg='".$programname[0]."',CourseID='".$programname[1]."',desciplines='".$sp[0]."',SpecializationID='".$sp[1]."', phonenumber='".$_POST['phonenumber']."',dateofbirth='".$_POST['dateofbirth']."',parentfname='".$_POST['parentfname']."',parentlname='".$_POST['parentlname']."',parentmobilenumber='".$_POST['parentmobilenumber']."',parentemail='".$_POST['parentemail']."'  WHERE memberID='".$_GET['id']."'";
		//die;
										$year12=mysqli_real_escape_string($conn,$_POST['year12']);
										$school10=mysqli_real_escape_string($conn,$_POST['school10']);
										$school12=mysqli_real_escape_string($conn,$_POST['school12']);
										$graduation=mysqli_real_escape_string($conn,$_POST['graduation']);
										$examgraduation=mysqli_real_escape_string($conn,$_POST['examgraduation']);
										$otherqualification=mysqli_real_escape_string($conn,$_POST['otherqualification']);
										$examotherqualification=mysqli_real_escape_string($conn,$_POST['examotherqualification']);
										$postgraduation=mysqli_real_escape_string($conn,$_POST['postgraduation']);
										$otherqualification=mysqli_real_escape_string($conn,$_POST['otherqualification']);
										$examboardname10=mysqli_real_escape_string($conn,$_POST['examboardname10']);
										$examboardname12=mysqli_real_escape_string($conn,$_POST['examboardname12']);
										$yearofpassing12=mysqli_real_escape_string($conn,$_POST['yearofpassing12']);
										$postgraduationstatus=mysqli_real_escape_string($conn,$_POST['postgraduationstatus']);
										
										$companyname=mysqli_real_escape_string($conn,$_POST['companyname']);
										
									 $getsucc = mysqli_query($conn,"UPDATE student SET ExtraEdgeID='".$_POST['ExtraEdgeID']."', alternate_email='".$_POST['alternate_email']."',
									 email='".strtolower($_POST['email'])."',
									 parentemail='".$_POST['parentemail']."',
									 companyname='".$companyname."',
									 middlename='".$_POST['middlename']."',
									 aadhar='".$_POST['aadhar']."',
									 alternate_no='".$_POST['alternate_no']."',
									 name='".$_POST['name']."',
									 mothername='".$_POST['mothername']."',
									 lastname='".$_POST['lastname']."',
									 gender='".$_POST['gender']."',
									 programmesugpg='".$programname[0]."',
									 passport_no='".$_POST['nameasperadharcard']."',
									 CourseID='".$programname[1]."',
									 desciplines='".$sp[0]."',
									 SpecializationID='".$sp[1]."',
									 elective_b1='".$_POST['elective_b1']."',
									 elective_b2='".$_POST['elective_b2']."', 
									 phonenumber='".$_POST['phonenumber']."',
									 dateofbirth='".$_POST['dateofbirth']."',
									 parentfname='".$_POST['parentfname']."',
									 parentlname='".$_POST['parentlname']."',
									 parentmobilenumber='".$_POST['parentmobilenumber']."',
									 parentemail='".$_POST['parentemail']."',
									 yearofpassing10='".$_POST['yearofpassing10']."',
									 year12='$year12',
									 school10='$school10',
									 school12='$school12',
									 score10='".$_POST['score10']."',
									 examboardname10='$examboardname10',
									 examboardname12='$examboardname12',
									 yearofpassing12='$yearofpassing12',
									 score12='".$_POST['score12']."',
									 stream12='".$_POST['stream12']."',
									 graduation='$graduation',
									 examgraduation='$examgraduation',
									 yearofpassinggraduation='".$_POST['yearofpassinggraduation']."',
									 scoregraduation='".$_POST['scoregraduation']."',
									 otherqualification='$otherqualification',
									 examotherqualification='$examotherqualification',
									 yearofpassingotherqualification='".$_POST['yearofpassingotherqualification']."',
									 scoreotherqualification='".$_POST['scoreotherqualification']."',
									 otherqualificationstatus='".$_POST['otherqualificationstatus']."',
									 postgraduation='$postgraduation',
									 postgraduationstatus='$postgraduationstatus',
									 exampostgraduation='".$_POST['exampostgraduation']."',
									 yearofpassingpostgraduation='".$_POST['yearofpassingpostgraduation']."',
									 experience='".$_POST['experience']."',
									 designation='".$_POST['designation']."',
									 HRContactNo='".$_POST['HRContactNo']."',
									 Companywebsite='".$_POST['Companywebsite']."',
									 address='".$_POST['paddress']."',
									 ppincode='".$_POST['ppincode']."',
									 caddress='".$_POST['caddress']."',
									 cpincode='".$_POST['cpincode']."',
									 counsellor_name='".$_POST['counsellor_name']."'
									  WHERE memberID='".$_GET['id']."'");
									 
									 
										
										$getsucc = mysqli_query($conn,"UPDATE tbl_transactions_details SET email='".strtolower($_POST['email'])."'  WHERE memberID='".$_GET['id']."'");
										if($getsucc){
										    
										    header('location:candidate-details.php?msg=Updated&id='.$_GET['id']);
										   
										}
										//echo "</br>SELECT * FROM student WHERE memberID='".$_GET['id']."'";
									$getmetadata = mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM student WHERE memberID='".$_GET['id']."'"));
									
									
									$getmetadatadoc = mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM tbl_students_data WHERE student_id='".$_GET['id']."'"));
									
									
					
							
								}
						
										
                			
                		
                		
                			
                		?>
          <div class="row"> <?php
          $getmetadata['address'];
          ?>
            <!-- left column -->
            <div class="col-md-12">
				<form role="form" action="#" method="POST" enctype="multipart/form-data">
					<div class="col-md-6">
					  <!-- general form elements -->
					  
						<div class="box-header with-border">
						  <h2 class="box-title"><?=ucfirst($getmetadata['name'])."&nbsp;".ucfirst($getmetadata['lastname']);?> Profile</h2>
						  <label style="color:#006600;"><?php if(isset($_GET['msg']))
							                                  {
															  echo $msg=$_GET['msg'];
															  }?></label> 
						</div><!-- /.box-header -->
						<!-- form start -->
						
						  <div class="box-body">
							<div class="form-group">
							  
							<input type="hidden" name="memberID" class="form-control" value="<?=ucfirst($getmetadata['memberID'])?>" >
							</div>
							<div class="form-group">
							  <label for="exampleInputEmail1">EE ID</label>
							<input type="text" name="ExtraEdgeID" class="form-control" value="<?=ucfirst($getmetadata['ExtraEdgeID'])?>" >
							</div>
							<div class="form-group">
							  <label for="exampleInputEmail1">Counsellor Name</label>
							<input type="text" name="counsellor_name" class="form-control" value="<?=ucfirst($getmetadata['counsellor_name'])?>" >
							</div>
							
							<div class="form-group">
							  <label for="exampleInputEmail1">First Name</label>
							<input type="text" name="name" class="form-control" value="<?=ucfirst($getmetadata['name'])?>" >
							</div>
							
							<div class="form-group">
							  <label for="exampleInputPassword1">Last Name </label>
							  <input type="text" class="form-control" name="lastname" value="<?=ucfirst($getmetadata['lastname'])?>">
							</div>
							
								<div class="form-group">
							  <label for="exampleInputEmail1">Father Name</label>
							<input type="text" name="parentfname" class="form-control" value="<?=ucfirst($getmetadata['parentfname'])?>">
							
							</div>				
							
							<div class="form-group">
							     <label for="exampleInputEmail1">Gender</label>
							  <select name="gender" required style="font-size:11px; margin-top:10px;width:100%" class="dp0 form-control" id="item4_select_1" >
                        <option value="">--Select--</options>
                        <option value="Male" <?php if(ucfirst($getmetadata['gender'])=="Male") echo "selected";?>>Male </options>
                        <option value="Female" <?php if(ucfirst($getmetadata['gender'])=="Female") echo "selected";?>>Female</options>
                        <option value="Transgender" <?php if(ucfirst($getmetadata['gender'])=="Transgender") echo "selected";?>>Transgender</options>
                    </select>
							
							</div>
							    
								
								
							<div class="form-group">
							  <label for="exampleInputPassword1">Phone Number </label>
							<input type="text" class="form-control" name="phonenumber" value="<?=ucfirst($getmetadata['phonenumber'])?>">
							</div>
								<div class="form-group">
							  <label for="exampleInputPassword1">alternate phone number </label>
							<input type="text" class="form-control" name="alternate_no" value="<?=ucfirst($getmetadata['alternate_no'])?>">
							
							</div>
								<div class="form-group">
							  <label for="exampleInputPassword1">Adhar number </label>
							<input type="text" class="form-control" name="aadhar" value="<?=ucfirst($getmetadata['aadhar'])?>">
							
							</div>
							<div class="form-group">
							  <label for="exampleInputPassword1">Name As per Adhar card </label>
							<input type="text" class="form-control" name="nameasperadharcard" value="<?=ucfirst($getmetadata['passport_no'])?>">
							
							</div>
							<div class="form-group">
							  <label for="exampleInputPassword1">parent email </label>
							<input type="text" class="form-control" name="parentemail" value="<?=ucfirst($getmetadata['parentemail'])?>">
							
							</div>
							
							<div class="form-group">
							  <label for="exampleInputPassword1">Program </label>
							
							
<select  name="programmesugpg" class="form-control">
<option value="" >--Select--</option>
<?php 
          $getProgram=mysqli_query($conn,"SELECT * FROM `CourseERP`");
             while($Program = mysqli_fetch_array($getProgram)) {           
?>
<option value="<?=$Program['CourseName'].','.$Program['CourseID']?>" <? if($Program['CourseName']==$getmetadata['programmesugpg']) { echo "SELECTED='SELECTED'"; }?>><?=$Program['CourseName']?></option>

<?php
}
?>

<!--<option value="Test Course" <? //if($desciplines=='Test Course') { echo "SELECTED='SELECTED'"; }?>>Test Course</option>-->
</select>
							
							</div>
						
				
							
						  </div><!-- /.box-body -->

						  
					 

					  <!-- Form Element sizes -->
					 
					</div>
										<div class="col-md-6">
					  <!-- general form elements -->
					  
						
						<!-- form start -->
							<br><br><br>
						  <div class="box-body">
						      <div class="form-group">
							  <label for="exampleInputEmail1">Middle Name</label>
							<input type="text" name="middlename" class="form-control" value="<?=ucfirst($getmetadata['middlename'])?>">
							
							</div>
						      
						      
						    <div class="form-group">
							  <label for="exampleInputPassword1">Mother's Name </label>
							  <input type="text" class="form-control" name="mothername" value="<?=ucfirst($getmetadata['mothername'])?>">
							</div>
						      
							
							
							
							<div class="form-group">
							  <label for="exampleInputPassword1">Date of Birth </label>
							<!--<input type="text" class="form-control" name="dateofbirth" value="<?//=ucfirst($getmetadata['dateofbirth'])?>">-->
							<input type="date" class="form-control" id="dateofbirth" value="<?=ucfirst($getmetadata['dateofbirth'])?>" style="width:287px;" name="dateofbirth">
							
							</div>
												
							<div class="form-group">
							  <label for="exampleInputPassword1">E-mail</label>
							<input type="text" class="form-control" name="email" value="<?=ucfirst($getmetadata['email'])?>" >
							
							</div>
							
							<div class="form-group">
							  <label for="exampleInputPassword1">Alternate e-mail</label>
							<input type="text" class="form-control" name="alternate_email" value="<?=ucfirst($getmetadata['alternate_email'])?>">
							
							</div>
							<div class="form-group">
							  <label for="exampleInputPassword1">Company Name</label>
							<input type="text" class="form-control" name="companyname" value="<?=ucfirst($getmetadata['companyname'])?>">
							
							</div>
							
							
							
							<div class="form-group">
							  <label for="exampleInputPassword1">Course Name</label>
						
							
							<select  name="desciplines" class="form-control">
<option value="" >--Select--</option>
<?php 
          $getspecilization=mysqli_query($conn,"SELECT * FROM `SpecializationERP`");
             while($setspecilization = mysqli_fetch_array($getspecilization)) {           
?>
<option value="<?=$setspecilization['SpecializationName'].','.$setspecilization['SpecializationID']?>" <? if($setspecilization['SpecializationName']==$getmetadata['desciplines']) { echo "SELECTED='SELECTED'"; }?>><?=$setspecilization['SpecializationName']?></option>

<?php
}
?>
<!--<option value="Test Course" <? //if($desciplines=='Test Course') { echo "SELECTED='SELECTED'"; }?>>Test Course</option>-->
</select>
							</div>
							
							
							
							
							<div class="form-group">
							  <label for="exampleInputPassword1">elective 1</label>
							<input type="text" class="form-control" name="elective_b1" value="<?=ucfirst($getmetadata['elective_b1'])?>">
							
							</div>
							
							<div class="form-group">
							  <label for="exampleInputPassword1">elective 2</label>
							<input type="text" class="form-control" name="elective_b2" value="<?=ucfirst($getmetadata['elective_b2'])?>">
							
							</div>
							
							
							
							
							
						
							
						
						
							
							
							
							
							
							
							

					  <!-- Form Element sizes -->
					 
					</div>
                       
               

            </div><!--/.col (left) -->
            
           </div>
           
           
			 <h2>Education Details</h2>
           <div class="box-body">
               <div class="row">
               <div class="col-md-6">
                             <div class="form-group">
							  <label for="exampleInputPassword1">Class 10 School Name</label>
							<input type="text" class="form-control" name="school10" value="<?=ucfirst($getmetadata['school10'])?>">
							
							</div>
							
							<div class="form-group">
							  <label for="exampleInputPassword1">Class 10 Board Name</label>
							<input type="text" class="form-control" name="examboardname10" value="<?=ucfirst($getmetadata['examboardname10'])?>">
							
							</div>
							
							<div class="form-group">
							  <label for="exampleInputPassword1">Class 10 year of Passing</label>
							<input type="text" class="form-control" name="yearofpassing10" value="<?=ucfirst($getmetadata['yearofpassing10'])?>">
							
							</div>
							
							<div class="form-group">
							  <label for="exampleInputPassword1">Class 10 score in %</label>
							<input type="text" class="form-control" name="score10" value="<?=ucfirst($getmetadata['score10'])?>">
							
							</div>
							
							<div class="form-group">
							  <label for="exampleInputPassword1">Graduation</label>
							<input type="text" class="form-control" name="graduation" value="<?=ucfirst($getmetadata['graduation'])?>">
							
							</div>
							
							<div class="form-group">
							  <label for="exampleInputPassword1">University</label>
							<input type="text" class="form-control" name="examgraduation" value="<?=ucfirst($getmetadata['examgraduation'])?>">
							
							</div>
							
							<div class="form-group">
							  <label for="exampleInputPassword1">Graduation Year of Passing</label>
							<input type="text" class="form-control" name="yearofpassinggraduation" value="<?=ucfirst($getmetadata['yearofpassinggraduation'])?>">
							
							</div>
							
							<div class="form-group">
							  <label for="exampleInputPassword1">Graduation Score in %</label>
							<input type="text" class="form-control" name="scoregraduation" value="<?=ucfirst($getmetadata['scoregraduation'])?>">
							
							</div>
							
							<div class="form-group">
							  <label for="exampleInputPassword1">other Qualification status</label>
							<input type="text" class="form-control" name="otherqualificationstatus" value="<?=ucfirst($getmetadata['otherqualificationstatus'])?>">
							
							</div>
							
							<div class="form-group">
							  <label for="exampleInputPassword1">other qualification</label>
							<input type="text" class="form-control" name="otherqualification" value="<?=ucfirst($getmetadata['otherqualification'])?>">
							
							</div>
							
							<div class="form-group">
							  <label for="exampleInputPassword1">other University</label>
							<input type="text" class="form-control" name="examotherqualification" value="<?=ucfirst($getmetadata['examotherqualification'])?>">
							
							</div>
							
							<div class="form-group">
							  <label for="exampleInputPassword1">other Year of Passing</label>
							<input type="text" class="form-control" name="yearofpassingotherqualification" value="<?=ucfirst($getmetadata['yearofpassingotherqualification'])?>">
							
							</div>
							
							<div class="form-group">
							  <label for="exampleInputPassword1">other Score in %</label>
							<input type="text" class="form-control" name="scoreotherqualification" value="<?=ucfirst($getmetadata['scoreotherqualification'])?>">
							
							</div>
							
							
            </div>
            <div class="col-md-6">
                
                            <div class="form-group">
							  <label for="exampleInputPassword1">Class 12 School Name</label>
							<input type="text" class="form-control" name="school12" value="<?=ucfirst($getmetadata['school12'])?>">
							
							</div>
							
							<div class="form-group">
							  <label for="exampleInputPassword1">Class 12 Board Name</label>
							<input type="text" class="form-control" name="examboardname12" value="<?=ucfirst($getmetadata['examboardname12'])?>">
							
							</div>
							
							<div class="form-group">
							  <label for="exampleInputPassword1">Class 12 year of Passing</label>
							<input type="text" class="form-control" name="yearofpassing12" value="<?=ucfirst($getmetadata['yearofpassing12'])?>">
							
							</div>
							
							<div class="form-group">
							  <label for="exampleInputPassword1">Class 12 score in %</label>
							  <input type="text" class="form-control" name="score12" value="<?=ucfirst($getmetadata['score12'])?>">
							</div>
							
							<div class="form-group">
							  <label for="exampleInputPassword1">Post Graduation Status</label>
							  <input type="text" class="form-control" name="postgraduationstatus" value="<?=ucfirst($getmetadata['postgraduationstatus'])?>">
							</div>
							
							<div class="form-group">
							  <label for="exampleInputPassword1">Post Graduation</label>
							  <input type="text" class="form-control" name="postgraduation" value="<?=ucfirst($getmetadata['postgraduation'])?>">
							</div>
							
							<div class="form-group">
							  <label for="exampleInputPassword1">Post Graduation Year of Passing</label>
							  <input type="text" class="form-control" name="yearofpassingpostgraduation" value="<?=ucfirst($getmetadata['yearofpassingpostgraduation'])?>">
							</div>
							
							<div class="form-group">
							  <label for="exampleInputPassword1">Post Graduation Score in %</label>
							  <input type="text" class="form-control" name="scorepostgraduation" value="<?=ucfirst($getmetadata['scorepostgraduation'])?>">
							</div>
							
							
							<div class="form-group">
							  <label for="exampleInputPassword1">Company Name</label>
							  <input type="text" class="form-control" name="companyname" value="<?=ucfirst($getmetadata['companyname'])?>">
							</div>
							
								<div class="form-group">
							  <label for="exampleInputPassword1">Work Experience</label>
							  <input type="text" class="form-control" name="experience" value="<?=ucfirst($getmetadata['experience'])?>">
							</div>
							
							<div class="form-group">
							  <label for="exampleInputPassword1">Designation</label>
							  <input type="text" class="form-control" name="designation" value="<?=ucfirst($getmetadata['designation'])?>">
							</div>
							
								<div class="form-group">
							  <label for="exampleInputPassword1">HR Contact No</label>
							  <input type="text" class="form-control" name="HRContactNo" value="<?=ucfirst($getmetadata['HRContactNo'])?>">
							</div>
							
							<div class="form-group">
							  <label for="exampleInputPassword1">Company Website</label>
							  <input type="text" class="form-control" name="Companywebsite" value="<?=ucfirst($getmetadata['Companywebsite'])?>">
							</div>
							
							
			</div>
			
			</div>				
              </div>
		
			<h2>Address Details</h2>
           <div class="box-body">
               <div class="row">
               <div class="col-md-6">
                             <div class="form-group">
							  <label for="exampleInputPassword1">P Address</label>
							<textarea type="text" class="form-control"  name="paddress" value=""> <?=$getmetadata['address']?></textarea>
							
							</div>
							<div class="form-group">
							  <label for="exampleInputPassword1">P PinCode</label>
							<input type="text" class="form-control"  name="ppincode" value="<?=$getmetadata['ppincode']?>"> 
							
							</div>
			</div>
			<div class="col-md-6">
                             <div class="form-group">
							  <label for="exampleInputPassword1">C Address</label>
							<textarea type="text" class="form-control" name="caddress" value=""><?=$getmetadata['caddress']?> </textarea>
							
							</div>
							<div class="form-group">
							  <label for="exampleInputPassword1">C PinCode</label>
							<input type="text" class="form-control"  name="cpincode" value="<?=$getmetadata['cpincode']?>"> 
							
							</div>
			</div>
			</div>
			</div>
			
			<div class="box-footer">
			    
			   
			    
							<input name="update" type="submit" class="btn btn-primary" value="Update">
							
						
						  </div>
						</form>
           
           
            
          </div>   <!-- /.row -->
        </section>
                             
                		
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
