<?php
ob_start();
session_start();
include("include/connection.php");
global $conn;
include("include/header.php");

$memberid = base64_decode($_GET['id']);

$query = "SELECT * FROM student memberID = '".base64_decode($_GET['id'])."'";
		$sql2 = mysqli_query($conn,$query);
		$count = mysql_num_rows($sql2);
        if($count>0)
        {
            $userdata = mysqli_fetch_assoc($sql2);
			
			
            $studentisdcode=$userdata['studentisdcode'];
            $parentisdcode=$userdata['parentisdcode'];

            $programmesugpg=$userdata['programmesugpg'];
$desciplines=$userdata['desciplines'];
$aadhar =$userdata['aadhar'];
$address =$userdata['address'];
$caddress =$userdata['caddress'];
$testcenter =$userdata['testcenter'];
$photoimage =$userdata['photo_image'];

$dddate=$userdata['dddate'];
$ddnumber=$userdata['ddnumber'];
$bankname=$userdata['bankname'];
$branchname=$userdata['branchname'];
$email=$userdata['email'];
$payment=$userdata['isPayment'];
$transaction=$userdata['transactid'];

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




$name=$userdata['name'];
$aid=$userdata['applicationid'];
$middlename=$userdata['middlename'];
$lastname=$userdata['lastname'];
$lastpage=$userdata['lastPage'];
$dateofbirth=$userdata['dateofbirth'];
$gender =$userdata['gender'];
$phonenumber=$userdata['phonenumber'];
$physicallychallenged=$userdata['physicallychallenged'];
$nationality=$userdata['nationality'];
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
        }
		$query = "SELECT discipline FROM studentpreference WHERE `studentid` ='".base64_decode($_GET['id'])."' order by prefno";
		$sql2 = mysqli_query($conn,$query);
		$count = mysqli_num_rows($sql2);
        if($count>0)
        {
			$discipline="";
			$disciplineprint="";
			$i=0;
            while($row = mysqli_fetch_assoc($sql2))
			{
				$i++;
				$discipline.="<li>".$row["discipline"]."</li>";
				$disciplineprint.="<div style='height:15px;text-align:center;font-size:10pt;width:15px;border:1px solid #5d5d5d'>".($i)."</div><span>".$row["discipline"]."</span>";
			}
		}
		
			$query = "SELECT * FROM studentsubjects WHERE `studentid` ='".base64_decode($_GET['id'])."'";
			//echo $query; 
		$sql2 = mysqli_query($conn,$query);
		$count = mysqli_num_rows($sql2);
		$subject10=array();
		$subject12=array();
        if($count>0)
        {
			$subject10=array();
			$subject12=array();
            while($row = mysqli_fetch_assoc($sql2))
			{
				if($row["studentclass"]=="X")
				{
					array_push($subject10,$row);
				}
				else
				{
					array_push($subject12,$row);					
				}
			}
		}
		for($i=count($subject10);$i<14;$i++)
		{
			unset($row);
			$row=array("studentid"=>"","subjectname"=>"","subjectmarksobtained"=>"","subjectmarkstotal"=>"","studentclass"=>"X","subjectmodified"=>"");
			array_push($subject10,$row);
		}
				//print_r($subject10);
		for($j=count($subject12);$j<14;$j++)
		{
			unset($row);
			$row=array("studentid"=>"","subjectname"=>"","subjectmarksobtained"=>"","subjectmarkstotal"=>"","studentclass"=>"XII","subjectmodified"=>"");
			array_push($subject12,$row);
		}






 //echo '<pre>'; print_r($subject10); exit;





//This is to display data...

 $getstuddata = mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM student WHERE memberID='".base64_decode($_GET['id'])."'"));


//echo '<pre>'; print_r($getstuddata); exit;



if(isset($_POST['submit_1']))
{
	extract($_FILES);
	extract($_POST);
	
	
	//echo '<pre>'; print_r($_POST); exit;
	
	if(isset($_GET['id']) && $_GET['id']!=""){
		
		
		
	$getupdatedata = mysqli_query($conn,"UPDATE student SET name='".$name."', lastname='".$lastname."',gender='".$gender."',dateofbirth='".$dateofbirth."',phonenumber='".$phonenumber."',email='".$email."' WHERE memberID='".base64_decode($_GET['id'])."' ");
	header("location:add_edit_application.php?id=".$_GET['id']."&action=basic_data_updated");
	}  else {
		
	$getsubmitdata = mysqli_query($conn,"INSERT INTO student(name,lastname,gender,dateofbirth,phonenumber,email)VALUES('".$name."','".lastname."','".$gender."','".$dateofbirth."','".$phonenumber."','".$email."')");
	$lastinsertid = mysqli_insert_id($conn); 
	header("location:add_edit_application.php?id=".base64_encode($lastinsertid));
	}
	
}

if(isset($_POST['submit_2']))
{
	extract($_POST);
	extract($_FILES);
	
	if(isset($_GET['id']) && $_GET['id']!=""){
	mysqli_query($conn,"UPDATE student SET nationality='".$nationality."',mpdomicileselect='".$mpdomicileselect."',aadhar='".$aadhar."',category='".$category."',physicallychallenged='".$physicallychallenged."' WHERE memberID='".base64_decode($_GET['id'])."' ");
	header("location:add_edit_application.php?id=".$_GET['id']."&action=demographic_data_updated");
	}
	else{
		
		
	}
	
	
}


if(isset($_POST['submit_3']))
{
	extract($_POST);
	extract($_FILES);
	
	//echo '<pre>'; print_r($_POST); exit;
	
	
	if(isset($_GET['id']) && $_GET['id']!=""){
	mysqli_query($conn,"UPDATE student SET  parentfname='".$parentfname."', parentlname='".$parentlname."',relationshipwithapplicant='".$relationshipwithapplicant."',parentisdcode='".$parentisdcode."',parentmobilenumber='".$parentmobilenumber."',parentemail='".$parentemail."',professionoftheparent='".$professionoftheparent."',organizationdetails='".$organizationdetails."' WHERE memberID='".base64_decode($_GET['id'])."' ");
	header("location:add_edit_application.php?id=".$_GET['id']."&action=parent_guardian_updated");
	}
	else {
		
		
	}
	
	
}

if(isset($_POST['submit_4']))
{
	extract($_POST);
	extract($_FILES);
	
	//echo '<pre>'; print_r($_POST); exit;
	
	

	
	if(isset($_GET['id']) && $_GET['id']!=""){
	mysqli_query($conn,"UPDATE student SET caddress='".$caddress."',ccity='".$ccity."',cstate='".$cstate."',ccountry='".$ccountry."',cpincode='".$cpincode."',address='".$paddress."',pcity='".$pcity."',pstate='".$pstate."',pcountry='".$pcountry."',ppincode='".$ppincode."'  WHERE memberID='".base64_decode($_GET['id'])."' ");
	header("location:add_edit_application.php?id=".$_GET['id']."&action=contact_details_updated");
	}
	else {
		
		
	}
	
	
}


if(isset($_POST['submit_5']))
{
	extract($_POST);
	extract($_FILES);
	
	
								if(!isset($examyear))
								{
									$examyear=0;
								}
								if(!isset($examyear2))
								{
									$examyear2=0;
								}
								if(!isset($yearofpassingd1))
								{
									$yearofpassingd1=0;
								}
								if(!isset($yearofpassingd2))
								{
									$yearofpassingd2=0;
								}
								if(!isset($yearofpassing12))
								{
									$yearofpassing12=0;
								}
								if(!isset($yearofpassing10))
								{
									$yearofpassing10=0;
								}
								if(!isset($scoredegree2))
								{
									$scoredegree2=0;
								}
								if(!isset($scoredegree1))
								{
									$scoredegree1=0;
								}
								
							$str="UPDATE student SET examname='$examname',examnumber='$examnumber',examscore='$examscore',examrank='$examrank',examyear='$examyear',examname2='$examname2',examnumber2='$examnumber2',examscore2='$examscore2',examrank2='$examrank2',examyear2='$examyear2',englishread='$englishread',englishspeak='$englishspeak',englishwrite='$englishwrite',degree1='$degree1',inst1='$inst1',university1='$university1',yearofpassingd1='$yearofpassingd1',scoredegree1='$scoredegree1',degree2='$degree2',inst2='$inst2',university2='$university2',yearofpassingd2='$yearofpassingd2',scoredegree2='$scoredegree2', school10='$school10',examboardname10='$examboardname10',yearofpassing10='$yearofpassing10',score10='$score10',school12='$school12',examboardname12='$examboardname12',yearofpassing12='$yearofpassing12',score12='$score12',stream12='$stream12',isComplete=0, formstatus='incomplete form',testcenter='$testcenter' WHERE memberID='".base64_decode($_GET['id'])."'";
							
							//echo $str; exit; 
							
							
							
						    $query = mysqli_query($conn,$str);
			function AddSubjects($s,$score,$total,$c,$class,$id,$oname,$omarks,$ototal)
{
	if(isset($s) && $score!=0 && $total!=0)
	{
		$scoreperc=($score*100)/$total;
		$scoreperc=round($scoreperc,2);
		if(strtolower($s)==strtolower($oname) && ($score!=$omarks || $total!=$ototal))
		{
			$str="update
			studentsubjects set subjectmarksobtained='$score',subjectmarkstotal='$total',subjectscore='$scoreperc' where studentid=".$id." and studentclass='$class' and subjectname='$s'";
			//echo $str; exit;
			
			$query = mysqli_query($c,$str);
		}
		else
		{
			$str="insert into studentsubjects(studentid,subjectname,subjectmarksobtained,subjectmarkstotal,studentclass,subjectscore) values('$id','$s','$score','$total','$class','$scoreperc');";
			//echo $str; exit;
			$query = mysqli_query($c,$str);
		}
    }
}
		

						AddSubjects($subjectname101,$subjectscore101,$subjecttotal101,$conn,"X",$memberid,$subject10[0]["subjectname"],$subject10[0]["subjectmarksobtained"],$subject10[0]["subjectmarkstotal"]);
						AddSubjects($subjectname102,$subjectscore102,$subjecttotal102,$conn,"X",$memberid,$subject10[1]["subjectname"],$subject10[1]["subjectmarksobtained"],$subject10[1]["subjectmarkstotal"]);
						AddSubjects($subjectname103,$subjectscore103,$subjecttotal103,$conn,"X",$memberid,$subject10[2]["subjectname"],$subject10[2]["subjectmarksobtained"],$subject10[2]["subjectmarkstotal"]);
						AddSubjects($subjectname104,$subjectscore104,$subjecttotal104,$conn,"X",$memberid,$subject10[3]["subjectname"],$subject10[3]["subjectmarksobtained"],$subject10[3]["subjectmarkstotal"]);
						AddSubjects($subjectname105,$subjectscore105,$subjecttotal105,$conn,"X",$memberid,$subject10[4]["subjectname"],$subject10[4]["subjectmarksobtained"],$subject10[4]["subjectmarkstotal"]);
						AddSubjects($subjectname106,$subjectscore106,$subjecttotal106,$conn,"X",$memberid,$subject10[5]["subjectname"],$subject10[5]["subjectmarksobtained"],$subject10[5]["subjectmarkstotal"]);
						AddSubjects($subjectname107,$subjectscore107,$subjecttotal107,$conn,"X",$memberid,$subject10[6]["subjectname"],$subject10[6]["subjectmarksobtained"],$subject10[6]["subjectmarkstotal"]);
					
					    AddSubjects($subjectname121,$subjectscore121,$subjecttotal121,$conn,"XII",$memberid,$subject12[0]["subjectname"],$subject12[0]["subjectmarksobtained"],$subject12[0]["subjectmarkstotal"]);
						AddSubjects($subjectname122,$subjectscore122,$subjecttotal122,$conn,"XII",$memberid,$subject12[1]["subjectname"],$subject12[1]["subjectmarksobtained"],$subject12[1]["subjectmarkstotal"]);
						AddSubjects($subjectname123,$subjectscore123,$subjecttotal123,$conn,"XII",$memberid,$subject12[2]["subjectname"],$subject12[2]["subjectmarksobtained"],$subject12[2]["subjectmarkstotal"]);
						AddSubjects($subjectname124,$subjectscore124,$subjecttotal124,$conn,"XII",$memberid,$subject12[3]["subjectname"],$subject12[3]["subjectmarksobtained"],$subject12[3]["subjectmarkstotal"]);
						AddSubjects($subjectname125,$subjectscore125,$subjecttotal125,$conn,"XII",$memberid,$subject12[4]["subjectname"],$subject12[4]["subjectmarksobtained"],$subject12[4]["subjectmarkstotal"]);
						AddSubjects($subjectname126,$subjectscore126,$subjecttotal126,$conn,"XII",$memberid,$subject12[5]["subjectname"],$subject12[5]["subjectmarksobtained"],$subject12[5]["subjectmarkstotal"]);
						AddSubjects($subjectname127,$subjectscore127,$subjecttotal127,$conn,"XII",$memberid,$subject12[6]["subjectname"],$subject12[6]["subjectmarksobtained"],$subject12[6]["subjectmarkstotal"]);

	                    header("location:add_edit_application.php?id=".$_GET['id']."&action=academic_data_updated");
	
	
		
	
}


if(isset($_POST['submit_6']))
{
 extract($_POST);
 extract($_FILES);
 
 
 if(isset($_GET['id']) && $_GET['id']!=""){
	mysqli_query($conn,"UPDATE student SET sop='".$sop."' WHERE memberID='".base64_decode($_GET['id'])."' ");
	
	
	
	
if(isset($_FILES['profilephoto']['name']))
{
$profilephoto = basename($_FILES['profilephoto']['name']);	
$target = 'student_documents/' . basename($_FILES['profilephoto']['name']);
move_uploaded_file($_FILES['profilephoto']['tmp_name'], $target);
}

if(isset($_FILES['entranceexam']['name']))
{
$entranceexam = basename($_FILES['entranceexam']['name']);	
$target = 'student_documents/' . basename($_FILES['entranceexam']['name']);
move_uploaded_file($_FILES['entranceexam']['tmp_name'], $target);
}	
	
if(isset($_FILES['ssccertificate']['name']))
{
$ssccertificate = basename($_FILES['ssccertificate']['name']);	
$target = 'student_documents/' . basename($_FILES['ssccertificate']['name']);
move_uploaded_file($_FILES['ssccertificate']['tmp_name'], $target);
}		

if(isset($_FILES['hsccertificate']['name']))
{
$hsccertificate = basename($_FILES['hsccertificate']['name']);	
$target = 'student_documents/' . basename($_FILES['hsccertificate']['name']);
move_uploaded_file($_FILES['hsccertificate']['tmp_name'], $target);
}			

if(isset($_FILES['transfercertificate']['name']))
{
$transfercertificate = basename($_FILES['transfercertificate']['name']);	
$target = 'student_documents/' . basename($_FILES['transfercertificate']['name']);
move_uploaded_file($_FILES['transfercertificate']['tmp_name'], $target);
}			
	
if(isset($_FILES['nationalitycertificate']['name']))
{
$nationalitycertificate = basename($_FILES['nationalitycertificate']['name']);	
$target = 'student_documents/' . basename($_FILES['nationalitycertificate']['name']);
move_uploaded_file($_FILES['nationalitycertificate']['tmp_name'], $target);
}
	
if(isset($_FILES['castecertificate']['name']))
{
$castecertificate = basename($_FILES['castecertificate']['name']);	
$target = 'student_documents/' . basename($_FILES['castecertificate']['name']);
move_uploaded_file($_FILES['castecertificate']['tmp_name'], $target);
}	

if(isset($_FILES['graduationcerti']['name']))
{
$graduationcerti = basename($_FILES['graduationcerti']['name']);	
$target = 'student_documents/' . basename($_FILES['graduationcerti']['name']);
move_uploaded_file($_FILES['graduationcerti']['tmp_name'], $target);
}	
	
if(isset($_FILES['expcertificate']['name']))
{
$expcertificate = basename($_FILES['expcertificate']['name']);	
$target = 'student_documents/' . basename($_FILES['expcertificate']['name']);
move_uploaded_file($_FILES['expcertificate']['tmp_name'], $target);
}
	
	header("location:add_edit_application.php?id=".$_GET['id']."&action=sop_details_updated");
	}
	else {
		
		
	}
 
 
 
 
}

?>


<style>
/*
.col-sm-6, .col-sm-7{
	display:none;
}
*/
</style>



<script type="text/javascript">

function getshowhide(id){
	
	for(i=1;i<7;i++){
		
	 if(id==i){
		 document.getElementById('form_'+i).style.display="block";
		// $('#form_'+id).show();		 
	 }	
	else {
		document.getElementById('form_'+i).style.display="none";
		//$('#form_'+id).hide();	
	}
	}
	
}

</script>


<?php

function LoadMarks($s)
{
	$t="";
	if(isset($s))
	{
	 $t=$s;
	}
	return $t;
}
?>




      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Registration Form -<?=$getstuddata['name']." ".$getstuddata['lastname'];?>
            <small>Preview</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Forms</a></li>
            <li class="active">General Elements</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <!-- left column -->
            <div class="col-md-12">
              <!-- general form elements -->
              <div class="box box-primary">
               
                <!-- form start -->
               
                  <div class="box-body">
				   
                  <h3 class="box-title" onClick="getshowhide('1');">A. Personal Details</h3>
                   
					<div id="form_1" style="display:none;">
				   <form role="form" enctype="multipart/form-data" method="POST">
                    <div class="form-group">
                      <label for="exampleInputEmail1">First Name</label>
                      <input type="text" name="name" value="<?php echo $getstuddata['name'];?>" class="form-control" id="name" placeholder="First Name">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Last Name</label>
                      <input type="text" name="lastname" class="form-control" value="<?php echo $getstuddata['lastname'];?>" id="lastname" placeholder="Last Name">
                    </div>
					
					<div class="form-group">
                      <label for="exampleInputPassword1">Gender</label>
                      <select name="gender" id="gender" class="form-control">
					  <option value="-1">Select Gender</option>
					  <option value="Male" <?php if($getstuddata['gender']=='Male'){ echo "SELECTED"; }?> >Male</option>
					  <option value="Female" <?php if($getstuddata['gender']=='Female'){ echo "SELECTED"; }?>>Female</option>
					  <option value="Other" <?php if($getstuddata['gender']=='Female'){ echo "SELECTED"; }?>>Other</option>
					  </select>
					</div>
					
					<div class="form-group">
                      <label for="exampleInputPassword1">Date Of Birth</label>
                      <input type="text" name="dateofbirth" value="<?php echo $getstuddata['dateofbirth'];?>" class="form-control" id="dateofbirth" placeholder="01/01/1990">
                    </div>
					
					<div class="form-group">
                      <label for="exampleInputPassword1">Country Code</label>
                      <input type="text" name="studentisdcode" value="<?php echo $getstuddata['studentisdcode'];?>" class="form-control" id="studentisdcode" placeholder="Country Code">
                    </div>
					
					<div class="form-group">
                      <label for="exampleInputPassword1">Mobile No</label>
                      <input type="text" value="<?php echo $getstuddata['phonenumber'];?>" name="phonenumber" class="form-control" id="phonenumber" placeholder="Country Code">
                    </div>
					
					<div class="form-group">
                      <label for="exampleInputPassword1">Email Id</label>
                      <input type="text" value="<?php echo $getstuddata['email'];?>" name="email" class="form-control" id="email" placeholder="Email Address">
                    </div>
					
					 <div class="box-footer">
                    <button type="submit" name="submit_1" class="btn btn-primary">Submit</button>
                     </div>
                </form>
					</div>
					
					
					
					
					<h3 class="box-title" onClick="getshowhide('2');">B. Demographic Details.</h3>
					<div id="form_2" style="display:none;">
				    <form role="form" enctype="multipart/form-data" method="POST">
					
					<div class="form-group">
                      <label for="exampleInputPassword1">Nationality</label>
                      <select name="nationality" id="nationality" class="form-control">
					  <option value="-1">Select Nationality</option>
					  <option value="indian">Indian</option>
					  <option value="other">Other</option>
					  </select>
					</div>
					
					<div class="form-group">
                      <label for="exampleInputPassword1">State of Domicile</label>
                      <select name="mpdomicileselect" id="mpdomicileselect" class="form-control">
					  <option value="-1">State of Domicile</option>
					  <option value="indian">Maharashtra</option>
					  <option value="other">Other</option>
					  </select>
					</div>
					
					<div class="form-group">
                      <label for="exampleInputPassword1">Aadhar Card No</label>
                      <input type="text" value="<?php echo $getstuddata['aadhar'];?>" name="aadhar" class="form-control" id="aadhar" placeholder="Aadhar Card No.">
                    </div>
					
					<div class="form-group">
                      <label for="exampleInputPassword1">Category</label>
                      <select name="category" id="category" class="form-control">
					  <option value="general">General</option>
					  <option value="SC">SC</option>
					  <option value="ST">ST</option>
					  <option value="NT">NT</option>
					  <option value="OBC">OBC</option>
					  <option value="Others">Others</option>
					  </select>
					</div>
					
					<div class="form-group">
                      <label for="exampleInputPassword1">Person with Disability</label>
                      <select name="physicallychallenged" id="physicallychallenged" class="form-control">
					  <option value="-1">Wether Disabled</option>
					  <option value="yes">Yes</option>
					  <option value="no">No</option>
					  </select>
					</div>
					 <div class="box-footer">
                     <button type="submit" name="submit_2" class="btn btn-primary">Submit</button>
                     </div>       
                     </form>
					 </div>
					
					
					
					<h3 class="box-title" onClick="getshowhide('3');">C.  Parent/Guardian Details.</h3>
					<div id="form_3" style="display:none;">
				   <form role="form" enctype="multipart/form-data" method="POST">
					<div class="form-group">
                      <label for="exampleInputEmail1">First Name</label>
                      <input type="text" name="parentfname" value="<?php echo $getstuddata['parentfname']?>" class="form-control" id="parentfname" placeholder="First Name">
                    </div>
					
                    <div class="form-group">
                      <label for="exampleInputPassword1">Last Name</label>
                      <input type="text" name="parentlname" value="<?php echo $getstuddata['parentlname']?>" class="form-control" id="parentlname" placeholder="Last Name">
                    </div>
					
					<div class="form-group">
                      <label for="exampleInputPassword1">Relationship with Applicant</label>
                      <input type="text" name="relationshipwithapplicant" value="<?php echo $getstuddata['relationshipwithapplicant']?>" class="form-control" id="relationshipwithapplicant" placeholder="Father/Guardian">
                    </div>
					
					<div class="form-group">
                      <label for="exampleInputPassword1">Country Code</label>
                      <input type="text" name="parentisdcode" value="<?php echo $getstuddata['parentisdcode']?>" class="form-control" id="parentisdcode" placeholder="Country Code">
                    </div>
					
					<div class="form-group">
                      <label for="exampleInputPassword1">Mobile No</label>
                      <input type="text" name="parentmobilenumber" value="<?php echo $getstuddata['parentmobilenumber']?>" class="form-control" id="parentmobilenumber" placeholder="Mobile No">
                    </div>
					
					<div class="form-group">
                      <label for="exampleInputPassword1">Email Id</label>
                      <input type="text" name="parentemail" value="<?php echo $getstuddata['parentemail']?>" class="form-control" id="parentemail" placeholder="Email Address">
                    </div>
					
					<div class="form-group">
                      <label for="exampleInputPassword1">Current Occupation</label>
                      <select name="professionoftheparent" id="professionoftheparent" class="form-control">
					  <option value="-1">Select occupation</option>
		<option value="Government" <?php if($getstuddata['professionoftheparent']=='Government') { echo "SELECTED='SELECTED'"; } ?> >Government</option>
		<option value="PrivateSector" <?php if($getstuddata['professionoftheparent']=='PrivateSector') { echo "SELECTED='SELECTED'"; } ?>>Private Sector</option>
	    <option value="PublicSector" <?php if($getstuddata['professionoftheparent']=='PublicSector') { echo "SELECTED='SELECTED'"; } ?>>Public Sector</option>
	    <option value="SelfEmployed" <?php if($getstuddata['professionoftheparent']=='SelfEmployed') { echo "SELECTED='SELECTED'"; } ?>>Self Employed</option>
	    <option value="Others" <?php if($getstuddata['professionoftheparent']=='Others') { echo "SELECTED='SELECTED'"; } ?>>Others</option>
					  </select>
					</div>
					
					<div class="form-group">
                      <label for="exampleInputPassword1">Organization Details</label>
                      <input type="text" name="organizationdetails" value="<?php echo $getstuddata['organizationdetails']?>" class="form-control" id="organizationdetails" placeholder="Organization Details">
                    </div>
					 <div class="box-footer">
                     <button type="submit" name="submit_3" class="btn btn-primary">Submit</button>
                     </div>       
                     </form>
					 </div>
					 
					<h3 class="box-title" onClick="getshowhide('4');">D.  Contact Details.</h3>
					<div id="form_4" style="display:none;">
				    <form role="form" enctype="multipart/form-data" method="POST">
					<div class="form-group">
                      <label for="exampleInputPassword1">Correspondence Address</label>
                      <textarea name="caddress" id="caddress" class="form-control"><?php echo $getstuddata['caddress']?></textarea>                      
					  </div>
					
					
					<div class="form-group">
                      <label for="exampleInputPassword1">City</label>
                      <input type="text" name="ccity" value="<?php echo $getstuddata['ccity']?>" class="form-control" id="ccity" placeholder="City">
                    </div>
					
					<div class="form-group">
                      <label for="exampleInputPassword1">State</label>
                      <input type="text" name="cstate" value="<?php echo $getstuddata['cstate']?>" class="form-control" id="cstate" placeholder="State">
                    </div>
					
					<div class="form-group">
                      <label for="exampleInputPassword1">Country</label>
                      <input type="text" name="ccountry" value="<?php echo $getstuddata['ccountry']?>" class="form-control" id="ccountry" placeholder="Country">
                    </div>
					
					<div class="form-group">
                      <label for="exampleInputPassword1">Pincode</label>
                      <input type="text" name="cpincode" value="<?php echo $getstuddata['cpincode']?>" class="form-control" id="cpincode" placeholder="Organization Details">
                    </div>
					
					<input type="checkbox" name="addcheck" id="addcheck"> Same As Above
					
					<div class="form-group">
                      <label for="exampleInputPassword1">Permanent Address (If different from communication address)</label>
                       <textarea name="paddress" id="paddress" class="form-control"><?php echo $getstuddata['address']?></textarea>                      
					  </div>
					
					
					<div class="form-group">
                      <label for="exampleInputPassword1">City</label>
                      <input type="text" name="pcity" value="<?php echo $getstuddata['pcity']?>" class="form-control" id="pcity" placeholder="City">
                    </div>
					
					<div class="form-group">
                      <label for="exampleInputPassword1">State</label>
                      <input type="text" name="pstate" value="<?php echo $getstuddata['pstate']?>" class="form-control" id="pstate" placeholder="State">
                    </div>
					
					<div class="form-group">
                      <label for="exampleInputPassword1">Country</label>
                      <input type="text" name="pcountry" value="<?php echo $getstuddata['pcountry']?>" class="form-control" id="pcountry" placeholder="Country">
                    </div>
					
					<div class="form-group">
                      <label for="exampleInputPassword1">Pincode</label>
                      <input type="text" name="ppincode" value="<?php echo $getstuddata['ppincode']?>" class="form-control" id="ppincode" placeholder="Pincode">
                    </div>
					<div class="box-footer">
                     <button type="submit" name="submit_4" class="btn btn-primary">Submit</button>
                     </div>       
                     </form>
					 </div>
					
					<h3 class="box-title" onClick="getshowhide('5');">E.  Academic Details.</h3>
					<div id="form_5" style="display:none;">
				    <form role="form" enctype="multipart/form-data" method="POST">
					<div class="box">
                    <div class="box-body">
					 <table  class="table table-bordered table-striped">
                        <thead><tr>
                         <th>Class</th>
                        <th>School</th>
                        <th>Board</th>
                        <th>Year of Passing</th>
                        <th>Score in %</th>
                        </thead></tr>
						 <tbody>
                        <tr>
                            <td><span>X</span></td>
                            <td>  <input name="school10"   type="text" placeholder="School" value="<?php echo $getstuddata['school10']?>">
                            </td>
                            <td> <input name="examboardname10"   type="text"  id="address" placeholder="(eg.SSC,CBSE,ICSC,IB)"  value="<?php echo $getstuddata['examboardname10']?>"></td>
                            <td><input name="yearofpassing10"   type="text"  placeholder="Year of Passing"  maxlength="4" value="<?php echo $getstuddata['yearofpassing10']?>"  minlength=4  onkeypress="return isNumberKey(event);" /></td>
                           		
                         <td> <input name="score10" id="total_10"  type="text" maxlength=5 placeholder="Score 10" value="<?php echo $getstuddata['total_10']?>" onkeypress="return isNumberKeyScorePercentage(event);" onkeyup="return ValidatePercentage(this);"></td>
                        </tr>
                        <tr>
                            <td>XII</td>
                            <td><input name="school12" type="text"  placeholder="School" value="<?php echo $getstuddata['school12']?>">
                  </td>
                            <td> <input name="examboardname12" type="text" id="address" placeholder="(eg.SSC,CBSE,ICSC,IB)" value="<?php echo $getstuddata['examboardname12']?>"></td>
                            <td><input name="yearofpassing12"  type="text"  placeholder="Year of Passing"  maxlength="4" value="<?php echo $getstuddata['yearofpassing12']?>"  minlength=4  onkeypress="return isNumberKey(event);"/></td>
									
                            <td> <input name="score12" type="text" id="total_12" maxlength=5  placeholder="Score 12" value="<?php echo $getstuddata['total_12']?>" onkeypress="return isNumberKeyScorePercentage(event);" onkeyup="return ValidatePercentage(this);"></td>
                        </tr>
						 </tbody>
                    </table>
					</div>
					</div>
					<div class="clear:both;"></div>
					<br>
					<br>
					<br>
					<div class="dp2">XII Stream*
					
                  <select name="stream12" class="form-control"  id="stream12">
				<option value="science" <?php if($getstuddata['stream12']=='science'){ echo "SELECTED='SELECTED'"; }?>>Science</option>
			    <option value="arts" <?php if($getstuddata['stream12']=='arts'){ echo "SELECTED='SELECTED'"; }?> >Arts</option>
			    <option value="commerce" <?php if($getstuddata['stream12']=='commerce'){ echo "SELECTED='SELECTED'"; }?> >Commerce</option>
			      </select>
                   </div>
					  
	<div style="clear:both"></div>
	<div>
			<h3>Please mention your individual subject marks of class X and XII</h3>		
		 <div class="box">
                    <div class="box-body">
					 <table  class="table table-bordered table-striped">
                        <thead>
                        <tr>
                        <th colspan=3 style="width:50%;">Class X</th>
						<th colspan=3 style="width:50%;">Class XII</th>
						</tr>
						<tr>
						<th>Subject</th>
                        <th>Marks Obtained</th>
                        <th>Out of</th>
						<th>Subject</th>
						<th>Marks Obtained</th>
                        <th>Out of</th>
                        </tr>
						</thead>
						<tbody>
						<tr>
							<tr>
							<td><input name="subjectname101" tabindex=20 type="text" class="subjectname" placeholder="Subject 1" value='<?php echo LoadMarks($subject10[0]["subjectname"]);?>'/></td>
<td><input name="subjectscore101" type="text" class="sum1" tabindex=21 placeholder="" maxlength=3 class="vmarks" onkeypress="return isNumberKey(event);" onkeyup="CalTotal(1)" value="<?php echo LoadMarks($subject10[0]["subjectmarksobtained"]);?>"></td>
<td><input name="subjecttotal101" type="text" class="sum2"  tabindex=22 placeholder="" maxlength=3 class="vmarks" onkeypress="return isNumberKey(event);" onkeyup="CalTotal(2)" value="<?php echo LoadMarks($subject10[0]["subjectmarkstotal"]);?>"></td>
<td><input name="subjectname121" type="text"  tabindex=41 class="subjectname" placeholder="Subject 1" value="<?php echo LoadMarks($subject12[0]["subjectname"]);?>"></td>
<td><input name="subjectscore121" type="text"  tabindex=42 class="sum3" placeholder="" maxlength=3 class="vmarks" onkeypress="return isNumberKey(event);" onkeyup="CalTotal(3)" value="<?php echo LoadMarks($subject12[0]["subjectmarksobtained"]);?>"></td>
<td><input name="subjecttotal121" type="text"  tabindex=43 class="sum4" placeholder="" maxlength=3 class="vmarks" onkeypress="return isNumberKey(event);" onkeyup="CalTotal(4)" value="<?php echo LoadMarks($subject12[0]["subjectmarkstotal"]);?>"></td>
						</tr>
							<tr>
							<td><input name="subjectname102"  tabindex=23  type="text" class="subjectname" placeholder="Subject 2" value='<?php echo LoadMarks($subject10[1]["subjectname"]);?>'/></td>
<td><input name="subjectscore102" type="text" class="sum1" placeholder=""  tabindex=24 maxlength=3 class="vmarks" onkeypress="return isNumberKey(event);" onkeyup="CalTotal(1)" value="<?php echo LoadMarks($subject10[1]["subjectmarksobtained"]);?>"></td>
<td><input name="subjecttotal102" type="text" class="sum2" placeholder=""  tabindex=25 maxlength=3 class="vmarks" onkeypress="return isNumberKey(event);" onkeyup="CalTotal(2)" value="<?php echo LoadMarks($subject10[1]["subjectmarkstotal"]);?>"></td>
<td><input name="subjectname122" type="text"  tabindex=44 class="subjectname" placeholder="Subject 2" value="<?php echo LoadMarks($subject12[1]["subjectname"]);?>"></td>
<td><input name="subjectscore122" type="text" tabindex=45 class="sum3" placeholder="" maxlength=3 class="vmarks" onkeypress="return isNumberKey(event);" onkeyup="CalTotal(3)" value="<?php echo LoadMarks($subject12[1]["subjectmarksobtained"]);?>"></td>
<td><input name="subjecttotal122" type="text" tabindex=46 class="sum4" placeholder="" maxlength=3 class="vmarks" onkeypress="return isNumberKey(event);" onkeyup="CalTotal(4)" value="<?php echo LoadMarks($subject12[1]["subjectmarkstotal"]);?>"></td>
						</tr>
						<tr>
							<td><input name="subjectname103"  tabindex=26 type="text" class="subjectname" placeholder="Subject 3" value='<?php echo LoadMarks($subject10[2]["subjectname"]);?>'/></td>
<td><input name="subjectscore103" type="text" class="sum1" placeholder=""  tabindex=27 maxlength=3 class="vmarks" onkeypress="return isNumberKey(event);" onkeyup="CalTotal(1)" value="<?php echo LoadMarks($subject10[2]["subjectmarksobtained"]);?>"></td>
<td><input name="subjecttotal103" type="text" class="sum2" placeholder=""  tabindex=28 maxlength=3 class="vmarks" onkeypress="return isNumberKey(event);" onkeyup="CalTotal(2)" value="<?php echo LoadMarks($subject10[2]["subjectmarkstotal"]);?>"></td>
<td><input name="subjectname123" type="text"  tabindex=47 class="subjectname" placeholder="Subject 3" value="<?php echo LoadMarks($subject12[2]["subjectname"]);?>"></td>
<td><input name="subjectscore123" type="text" class="sum3" tabindex=48 placeholder="" maxlength=3 class="vmarks" onkeypress="return isNumberKey(event);" onkeyup="CalTotal(3)" value="<?php echo LoadMarks($subject12[2]["subjectmarksobtained"]);?>"></td>
<td><input name="subjecttotal123" type="text" class="sum4" placeholder=""  tabindex=49 maxlength=3 class="vmarks" onkeypress="return isNumberKey(event);" onkeyup="CalTotal(4)" value="<?php echo LoadMarks($subject12[2]["subjectmarkstotal"]);?>"></td>
						</tr>
							<tr>
							<td><input name="subjectname104" type="text"  tabindex=29 class="subjectname" placeholder="Subject 4" value='<?php echo LoadMarks($subject10[3]["subjectname"]);?>'/></td>
<td><input name="subjectscore104" type="text" class="sum1" placeholder=""  tabindex=30 maxlength=3 class="vmarks" onkeypress="return isNumberKey(event);" onkeyup="CalTotal(1)" value="<?php echo LoadMarks($subject10[3]["subjectmarksobtained"]);?>"></td>
<td><input name="subjecttotal104" type="text" class="sum2" placeholder=""  tabindex=31 maxlength=3 class="vmarks" onkeypress="return isNumberKey(event);" onkeyup="CalTotal(2)" value="<?php echo LoadMarks($subject10[3]["subjectmarkstotal"]);?>"></td>
<td><input name="subjectname124" type="text"  tabindex=50 class="subjectname" placeholder="Subject 4" value="<?php echo LoadMarks($subject12[3]["subjectname"]);?>"></td>
<td><input name="subjectscore124" type="text" class="sum3"  tabindex=51 placeholder="" maxlength=3 class="vmarks" onkeypress="return isNumberKey(event);" onkeyup="CalTotal(3)" value="<?php echo LoadMarks($subject12[3]["subjectmarksobtained"]);?>"></td>
<td><input name="subjecttotal124" type="text" class="sum4" placeholder=""  tabindex=52 maxlength=3 class="vmarks" onkeypress="return isNumberKey(event);" onkeyup="CalTotal(4)" value="<?php echo LoadMarks($subject12[3]["subjectmarkstotal"]);?>"></td>
						</tr>	
							
							<tr>
							<td><input name="subjectname105" type="text"  tabindex=32 class="subjectname" placeholder="Subject 5" value='<?php echo LoadMarks($subject10[4]["subjectname"]);?>'/></td>
<td><input name="subjectscore105" type="text" class="sum1" placeholder=""  tabindex=33 maxlength=3 class="vmarks" onkeypress="return isNumberKey(event);" onkeyup="CalTotal(1)" value="<?php echo LoadMarks($subject10[4]["subjectmarksobtained"]);?>"></td>
<td><input name="subjecttotal105" type="text" class="sum2" placeholder=""  tabindex=34 maxlength=3 class="vmarks" onkeypress="return isNumberKey(event);" onkeyup="CalTotal(2)" value="<?php echo LoadMarks($subject10[4]["subjectmarkstotal"]);?>"></td>
<td><input name="subjectname125" type="text" class="subjectname" placeholder="Subject 5"  tabindex=53 value="<?php echo LoadMarks($subject12[4]["subjectname"]);?>"></td>
<td><input name="subjectscore125" type="text" class="sum3" placeholder=""  tabindex=54 maxlength=3 class="vmarks" onkeypress="return isNumberKey(event);" onkeyup="CalTotal(3)" value="<?php echo LoadMarks($subject12[4]["subjectmarksobtained"]);?>"></td>
<td><input name="subjecttotal125" type="text" class="sum4" placeholder=""  tabindex=55 maxlength=3 class="vmarks" onkeypress="return isNumberKey(event);" onkeyup="CalTotal(4)" value="<?php echo LoadMarks($subject12[4]["subjectmarkstotal"]);?>"></td>
						</tr>
							<tr>
							<td><input name="subjectname106" type="text"  tabindex=35 class="subjectname" placeholder="Subject 6" value='<?php echo LoadMarks($subject10[5]["subjectname"]);?>'/></td>
<td><input name="subjectscore106" type="text" class="sum1" placeholder=""  tabindex=36 maxlength=3 class="vmarks" onkeypress="return isNumberKey(event);" onkeyup="CalTotal(1)" value="<?php echo LoadMarks($subject10[5]["subjectmarksobtained"]);?>"></td>
<td><input name="subjecttotal106" type="text" class="sum2" placeholder=""  tabindex=37 maxlength=3 class="vmarks" onkeypress="return isNumberKey(event);" onkeyup="CalTotal(2)" value="<?php echo LoadMarks($subject10[5]["subjectmarkstotal"]);?>"></td>
<td><input name="subjectname126" type="text" class="subjectname" placeholder="Subject 6"  tabindex=56 value="<?php echo LoadMarks($subject12[5]["subjectname"]);?>"></td>
<td><input name="subjectscore126" type="text" class="sum3" placeholder=""  tabindex=57 maxlength=3 class="vmarks" onkeypress="return isNumberKey(event);" onkeyup="CalTotal(3)" value="<?php echo LoadMarks($subject12[5]["subjectmarksobtained"]);?>"></td>
<td><input name="subjecttotal126" type="text" class="sum4" placeholder=""  tabindex=58 maxlength=3 class="vmarks" onkeypress="return isNumberKey(event);" onkeyup="CalTotal(4)" value="<?php echo LoadMarks($subject12[5]["subjectmarkstotal"]);?>"></td>
						</tr>
						
							<tr>
							<td><input name="subjectname107" type="text"  tabindex=38 class="subjectname" placeholder="Subject 7" value='<?php echo LoadMarks($subject10[6]["subjectname"]);?>'/></td>
<td><input name="subjectscore107" type="text" class="sum1" placeholder=""  tabindex=39 maxlength=3 class="vmarks" onkeypress="return isNumberKey(event);" onkeyup="CalTotal(1)" value="<?php echo LoadMarks($subject10[6]["subjectmarksobtained"]);?>"></td>
<td><input name="subjecttotal107" type="text" class="sum2" placeholder=""  tabindex=40 maxlength=3 class="vmarks" onkeypress="return isNumberKey(event);" onkeyup="CalTotal(2)" value="<?php echo LoadMarks($subject10[6]["subjectmarkstotal"]);?>"></td>
<td><input name="subjectname127" type="text"  tabindex=59 class="subjectname" placeholder="Subject 7" value="<?php echo LoadMarks($subject12[6]["subjectname"]);?>"></td>
<td><input name="subjectscore127" type="text"  tabindex=60 class="sum3" placeholder="" maxlength=3 class="vmarks" onkeypress="return isNumberKey(event);" onkeyup="CalTotal(3)" value="<?php echo LoadMarks($subject12[6]["subjectmarksobtained"]);?>"></td>
<td><input name="subjecttotal127" type="text" class="sum4"  tabindex=61 placeholder="" maxlength=3 class="vmarks" onkeypress="return isNumberKey(event);" onkeyup="CalTotal(4)" value="<?php echo LoadMarks($subject12[6]["subjectmarkstotal"]);?>"></td>
						</tr>
						
						<tr>
						         <td><label name="physicsam12" type="text" class="subjectname" placeholder="Subject">Total</label></td>
							     <td><label name="physicsam12" type="text" id="total1"></label></td>
							     <td><label name="physicsam12" type="text" id="total2"></label></td>
								 <td><label name="physicsam12" type="text" class="subjectname" placeholder="Subject">Total</label></td>
							     <td><label name="physicsam12" type="text" id="total3"></label></td>
							     <td><label name="physicsam12" type="text" id="total4"></label></td>
						</tr></tbody>
		 </table></div></div>
				</div>
	   <div style="clear:both"></div>
 
				   
 					<br>
					

					<h3>English Language Proficiency *</h3>
	
							<div style="clear:both"></div>
			<span>(Please rate yourself on a scale of 1 to 10, with 10 being the highest)</span>		
              <div class="box">
              <div class="box-body">
		 <table  class="table table-bordered table-striped">
		  <thead>
                        <tr>
                        <th style="width:33.33%;">Read</th>
                        <th style="width:33.33%;">Write</th>
                        <th style="width:33.33%;">Speak</th>
						</tr>
		 </thead>	
           <tbody>		 
			<tr>
				<td> <input name="englishread" type="text"  maxlength=2 placeholder="On the scale of 1 to 10" value="<?php echo $getstuddata['englishread']?>" required onkeypress="return isNumberKey(event);" onkeyup="return ValidateEnglish(this);"></td>
				<td> <input name="englishwrite" type="text"  maxlength=2  placeholder="On the scale of 1 to 10" value="<?php echo $getstuddata['englishwrite']?>"  required   onkeypress="return isNumberKey(event);" onkeyup="return ValidateEnglish(this);"></td>
				<td> <input name="englishspeak" type="text"  maxlength=2  placeholder="On the scale of 1 to 10" value="<?php echo $getstuddata['englishspeak']?>" required   onkeypress="return isNumberKey(event);" onkeyup="return ValidateEnglish(this);"></td>
			</tr>
			</tbody>
		 </table>
		 </div>
		 </div>
	<div style="clear:both"></div>
<br>

 					<h3>Entrance Examination</h3>
					
			
	
							<div style="clear:both"></div>

		        <div class="box">
              <div class="box-body">
		 <table class="table table-bordered table-striped">
		  <thead>
                        <tr>
                        <th style="width:20%;">Name of Examination</th>
                        <th style="width:15%;">Application No</th>
                        <th style="width:15%;">Roll No</th>
                        <th style="width:10%;">Year</th>
                        <th style="width:15%;">Score</th>
                        <th style="width:15%;">Rank</th>
						</tr>
						</thead><tbody>
			<tr>
				<td> <input name="examname" type="text" placeholder="Exam Name" value="JEE" tabindex=65 required></td>
				<td> <input name="examapplicationnumber" type="text" placeholder="Exam Appplication No" value="" ></td>
				<td> <input name="examnumber" type="text" placeholder="Exam Number" value="ccccccccccc" ></td>
				<td><label>2017</label></td>
				<td> <input name="examscore" type="text" placeholder="Exam Score" value="33333333333333333" onkeypress="return isNumberKeyScorePercentage(event);"></td>
				<td> <input name="examrank" type="text" placeholder="Exam Rank" value="reeeeeeeeeee" ></td>
			</tr>
			
			<tr>
				<td> <input name="examname2" type="text" placeholder="Exam Name" value="" tabindex=70></td>
					<td> <input name="examapplicationnumber2" type="text" placeholder="Exam Appplication No" value="" ></td>
		    <td><input name="examnumber2" type="text" placeholder="Exam Number" value="" tabindex=72></td>
				<td> <label>2017</label></td>
				<td> <input name="examscore2" type="text" placeholder="Exam Score" value=""  onkeypress="return isNumberKeyScorePercentage(event);"></td>
				<td> <input name="examrank2" type="text" placeholder="Exam Rank" value=""  onkeypress="return isNumberKey(event);"></td>
			</tr>
			<tbody>
			
		 </table></div></div>
					<div class="box-footer">
                     <button type="submit" name="submit_5" class="btn btn-primary">Submit</button>
                     </div>       
                     </form>
					 </div>
					<h3 class="box-title" onclick="getshowhide('6');">F. Statement Of Purpose & Enclosure</h3>
					<div id="form_6" style="display:none;">
				    <form role="form" enctype="multipart/form-data" method="POST">
					<div class="form-group">
                      <label for="exampleInputPassword1">Statement Of Purpose</label>
                      <textarea name="sop" class="form-control" id="sop"><?php echo $getstuddata['sop']; ?></textarea>
                    </div>
					
										
					
                    <div class="form-group">
                      <label for="exampleInputFile">Passport Size Photo</label>
                      <input type="file" name="profilephoto" id="profilephoto" onchange="UploadFile('submitgallarybtn');" required>
                      <p class="help-block">Example block-level help text here.</p>
                    </div>
					
					  <div class="form-group">
                      <label for="exampleInputFile">Entrance Exam Score Card<br>MIT-DAT / NATA / JEE/ Others (If applicable)</label>
                      <input type="file" name="entranceexam"  onchange="UploadFile('submitbtn1');">
                      <p class="help-block">Example block-level help text here.</p>
                      </div>
					
					<div class="form-group">
                      <label for="exampleInputFile">02. SSC Certificate</label>
                      <input type="file" name="ssccertificate" onchange="UploadFile('submitbtn1');">
                      <p class="help-block">Example block-level help text here.</p>
                    </div>
					
					<div class="form-group">
                      <label for="exampleInputFile">03. HSC Certificate</label>
                      <input type="file" name="hsccertificate" onchange="UploadFile('submitbtn1');">
                      <p class="help-block">Example block-level help text here.</p>
                    </div>
					
					<div class="form-group">
                      <label for="exampleInputFile">04. Transfer Certificate</label>
                      <input type="file" name="transfercertificate" onchange="UploadFile('submitbtn1');">
                      <p class="help-block">Example block-level help text here.</p>
                    </div>
					
					<div class="form-group">
                      <label for="exampleInputFile">05. Nationality Certificate</label>
                      <input type="file" name="nationalitycertificate" onchange="UploadFile('submitbtn1');">
                      <p class="help-block">Example block-level help text here.</p>
                    </div>
					
					<div class="form-group">
                      <label for="exampleInputFile">06. Caste Certificate (If applicable)</label>
                      <input type="file" name="castecertificate" onchange="UploadFile('submitbtn1');">
                      <p class="help-block">Example block-level help text here.</p>
                    </div>
					
					<div class="form-group">
                      <label for="exampleInputFile">07. Caste Validity  (If applicable)</label>
                      <input type="file" name="castevalidity" onchange="UploadFile('submitbtn1');">
                      <p class="help-block">Example block-level help text here.</p>
                    </div>
					
					<div class="form-group">
                      <label for="exampleInputFile">08. Graduation Certificate (If applicable)</label>
                      <input type="file" name="graduationcerti" onchange="UploadFile('submitbtn1');">
                      <p class="help-block">Example block-level help text here.</p>
                    </div>
					
					<div class="form-group">
                      <label for="exampleInputFile">09. Experience Certificate (If applicable)</label>
                      <input type="file" name="expcertificate" >
                      <p class="help-block">Example block-level help text here.</p>
                    </div>
					
					
					
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" required="required"> I hereby confirm that the above mentioned details shall be used for all future communication and records.
                      </label>
                    </div>
                

                  <div class="box-footer">
                    <button type="submit" name="submit_6" class="btn btn-primary">Submit</button>
                  </div>
                </form>
              </div><!-- /.box -->

              

             

              

            </div><!--/.col (left) -->
            <!-- right column -->
           
          </div>   <!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
    <?php include("include/footer.php"); ?>
     
      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
      <div class="control-sidebar-bg"></div>
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.4 -->
    <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/app.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>
	
	   <!-- DataTables -->
    <script src="plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="plugins/datatables/dataTables.bootstrap.min.js"></script>
	    <script>
      $(function () {
        $("#example1").DataTable();
        $('#example2').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": false,
          "ordering": true,
          "info": true,
          "autoWidth": false
        });
      });
    </script>
  </body>
</html>
