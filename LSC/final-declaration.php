<?php 
ob_start();
session_start();
include "php/db.php";


$memberid = $_SESSION['memberID'];
//$memberid=2;
		$query = "SELECT * FROM student WHERE `memberID` ='$memberid'";
		$sql2 = mysqli_query($connection,$query);
		$count = mysqli_num_rows($sql2);
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
		$query = "SELECT discipline FROM studentpreference WHERE `studentid` ='$memberid' order by prefno";
		$sql2 = mysqli_query($connection,$query);
		$count = mysqli_num_rows($sql2);
        if($count>0)
        {
			$discipline="";
			$disciplineprint="";
			$i=0;
            while($row = mysqli_fetch_assoc($sql2))
			{
				$i++;
                                if($row["discipline"]=='Electronics and Communication') { continue; }
                              
				$discipline.="<li>".$row["discipline"]."</li>";
				$disciplineprint.="<div style='height:15px;text-align:center;font-size:10pt;width:15px;border:1px solid #5d5d5d'>".($i)."</div><span>".$row["discipline"]."</span>";
			}
		}
		
			$query = "SELECT * FROM studentsubjects WHERE `studentid` ='$memberid'";
		$sql2 = mysqli_query($connection,$query);
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
		//print_r($subject12);
		/*for($i=$count;$i<14;$i++)
		{
			unset($row);
			$row=array("studentid"=>"","subjectname"=>"","subjectmarksobtained"=>"","subjectmarkstotal"=>"","studentclass"=>"","subjectmodified"=>"");
			array_push($subject,$row);
		}*/






// This is to get enrollment data from enrollment table......


$getenrolldata = mysqli_fetch_assoc(mysqli_query($connection,"SELECT * FROM tbl_enrollment_data WHERE memberID='".$memberid."'"));

//echo '<pre>'; print_r($getenrolldata); exit;


if(isset($_POST['submit'])){

   extract($_POST);



  // echo '<pre>'; print_r($_POST); exit;                        
   
    mysqli_query($connection,"UPDATE student SET category='".$category."', aadhar='".$aadhar."',nationality='".$nationality."',parentemail='".$p_email."',cphonenumber='".$p_contact."', caddress='".$caddress."',ccity='".$ccity."',cstate='".$cstate."',ccountry='".$ccountry."',cpincode='".$cpincode."',pincode='".$pincode."'    WHERE memberID='".$memberid."'");              

// This is to insert additional information in tbl_enrollment form...




if($programmesugpg=='B.Des')
{
 $enrollment = 'AU17A1'; 
}
if($programmesugpg=='M.Des')
{
 $enrollment = 'AU17A2'; 
}
if($programmesugpg=='B.Tech')
{
 $enrollment = 'AU17B1'; 
}






if(mysqli_num_rows(mysqli_query($connection,"SELECT * FROM tbl_enrollment_data WHERE memberID='".$memberid."'"))>0){






mysqli_query($connection,"UPDATE tbl_enrollment_data SET mother_name='".$mother_name."',foundation='".$foundation."', 10_obt='".$ten_obt."',10_outoff='".$ten_outoff."',10_per='".$ten_per."',10_board='".$ten_board."',10_passing='".$ten_passing."',12_obt='".$tw_obt."',12_outoff='".$tw_outoff."',12_per='".$tw_per."',12_board='".$tw_board."',12_passing='".$tw_passing."',pcm_obt='".$pcm_obt."',pcm_outoff='".$pcm_outoff."',pcm_per='".$pcm_per."',pcm_board='".$pcm_board."',pcm_passing='".$pcm_passing."',grd_obt='".$grd_obt."',grd_outoff='".$grd_outoff."',grd_per='".$grd_per."',grd_board='".$grd_board."',grd_passing='".$grd_passing."',e_contact='".$e_contact."',e_address='".$e_address."',tele_number='".$tele_number."',e_mobile='".$e_mobile."' WHERE memberID='$memberid'");



header('location:final-declaration-view.php?msg=dataupd');



}

else {



$enrollment_final = mysqli_fetch_assoc(mysqli_query($connection,"SELECT count(*) as cnt from tbl_enrollment_data WHERE enrollment_num='".$enrollment."'"));

$enrollment_finalcnt = $enrollment_final['cnt'] + 1;



mysqli_query($connection,"INSERT INTO tbl_enrollment_data(memberID,	enrollment_num,enroll_id,foundation,mother_name,10_obt,10_outoff,10_per,10_board,10_passing,12_obt,12_outoff,12_per,12_board,12_passing,pcm_obt,pcm_outoff,pcm_per,pcm_board,pcm_passing,grd_obt,grd_outoff,grd_per,grd_board,grd_passing,e_contact,e_address,tele_number,e_mobile)VALUES('".$memberid."','".$enrollment."','".$enrollment_finalcnt."','".$foundation."','".$mother_name."','".$ten_obt."','".$ten_outoff."','".$ten_per."','".$ten_board."','".$ten_passing."','".$tw_obt."','".$tw_outoff."','".$tw_per."','".$tw_board."','".$tw_passing."','".$pcm_obt."','".$pcm_outoff."','".$pcm_per."','".$pcm_board."','".$pcm_passing."','".$grd_obt."','".$grd_outoff."','".$grd_per."','".$grd_board."','".$grd_passing."','".$e_contact."','".$e_address."','".$tele_number."','".$e_mobile."')");



header('location:final-declaration-view.php?msg=datains');
}








                                                           
}
						
	?>

<!DOCTYPE HTML>
<html>
<head>
  <title>Admissions 2017-18</title>
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
</head>

    	<body class="bg-pic">
   <div class="wrapper-640">
	<br>
	<br>
		<div class="mheader">
		<div class="formheading" style="text-align: left;"><h3>MIT Pune Campus at Ujjain | MP</h3><h2>Enrollment Form for Admission - 2017</h2>
		<img src="images/avantika-logo.svg" width=100 height=100 />
		<div class="userloginmsg">
<span id="logout"><a href='register/logout.php?pid=<?php echo $pid;?>&id=<?php echo $memberid;?>'>Logout</a></span>
<span class="welcomeuser">Welcome <?php echo $_SESSION['username'];  $_SESSION['memberID'];?></span>
<!--<div class="userpages"> Go to 
			<a href='page1_form.php'>Page 1 ></a>
			<a href='page2_form.php'>Page 2 ></a>
			<a href='page3_form.php'>Page 3 ></a>
			<a href='sop.php'>Page 4 ></a>
			<a href='page4_form.php'>Page 5 ></a>

		</div>-->
		</div>
		
		</div>
		
		</div>

<script>
function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
</script>
        <div class="container">
            <div class="main">   
				
								
		
  <form method="post" onsubmit="return ValidationSummary();">
			<div id="printableArea"><table class="studentdetails">
					
			<tr><td colspan=2 style="font-size:18px;margin-top:100px;color:red;">Kindly confirm below mentioned details</td></tr>
					
					<tr><td colspan=2><h3>Application ID: <?php echo $aid;?></h3></td></tr>
					<tr><td colspan=2 class="widetd">Applied for</td></tr>
					<tr><td>Program</td><td><?php echo $programmesugpg;?></td></tr>
                                        <?php if($programmesugpg!='B.Tech'){ ?> 
                                        <tr><td>Foundation</td><td><input type="text" name="foundation" value="<?=$getenrolldata['foundation']?>"></td></tr>
                                        <?php } ?>
        
			<?php if(isset($discipline)) {?><tr><td>Discipline</td><td><ol><?php echo $discipline;?></ol></td></tr> <?php } ?>
		      <tr><td colspan=2 class="widetd">Personal Details</td></tr>
		      <tr><td>Name</td><td><?php echo $name." ".$lastname;?></td></tr>
		      <tr><td>Photo</td><td><img src='<?php echo $photoimage;?>' width=150 height=150/></td></tr>
		      <tr><td>Gender</td><td><?php echo $gender;?></td></tr>
                      <tr><td>Category</td><td><select name="category" style="width:97%" required><option>OBC</option><option>Open</option><option>SC</option><option>SBC</option><option>ST</option><option>VJ/NT</option></select></td></tr>
		      <tr><td>Mobile No.</td><td><input type="text" name="phone" value="<?php echo $phonenumber;?>" required></td></tr>
		      <tr><td>Email</td><td><?php echo $_SESSION["email"];?></td></tr>
		      <tr><td>AADHAR No.</td><td><input type="text" value="<?php echo $aadhar;?>" name="aadhar" required></td></tr>
		      <tr><td>Nationality</td><td><input type="text" name="nationality" value="<?php echo $nationality;?>" required></td></tr>
		      <tr><td>Date of Birth</td><td><?php echo $dateofbirth;?></td></tr>
		      <tr><td>Father Name</td><td><?php echo $parentfname." ".$parentlname;?></td></tr>
                      <tr><td>Mother Name</td><td><input type="text" name="mother_name" required value="<?=$getenrolldata['mother_name']?>"></td></tr>
                      <tr><td>Parent's Email</td><td><input type="text" name="p_email" value="<?php echo $parentemail;?>" required></td></tr>
                      <tr><td>Parent's Contact No</td><td><input type="text" name="p_contact" value="<?php echo $parentmobilenumber;?>" required></td></tr>
			<tr><td colspan=2 class="widetd">Contact Details</td></tr>
			<tr><td>Correspondence Address</td><td><input type="text" name="caddress" value="<?php echo $caddress;?>" required></td></tr>
			<tr><td>City</td><td><input type="text" name="ccity" value="<?php echo $ccity;?>" required></td></tr>
			<tr><td>State</td><td><input type="text" name="cstate" value="<?php echo $cstate;?>" required></td></tr>
			<tr><td>Country</td><td><input type="text" value="<?php echo $ccountry;?>" name="ccountry" required></td></tr>
			<tr><td>Pincode</td><td><input type="text" name="cpincode" value="<?php echo $cpincode;?>" required></td></tr>
			<tr><td>Permanent Address</td><td><input type="text" value="<?php echo $address;?>" required></td></tr>
			<tr><td>City</td><td><input type="text" value="<?php echo $pcity;?>"></td></tr>
			<tr><td>State</td><td><input type="text" value="<?php echo $pstate;?>"></td></tr>
			<tr><td>Country</td><td><input type="text" value="<?php echo $pcountry;?>"></td></tr>
			<tr><td>Pincode</td><td><input type="text" value="<?php echo $ppincode;?>" name="pincode" required></td></tr>
                        <tr><td colspan=2 class="widetd">Educational Details</td></tr>

</table>


<table class="studentdetails">

<tr>
<td colspan="6"></td>
<td>Obtained Marks</td>
<td>Out off Marks</td>
<td>Percentage</td>
<td>Board/University</td>
<td>year of Passing</td>
</tr>

<tr>
<td colspan="6">Class 10th</td>
<td><input type="text" name="ten_obt" style="width:80%" required value="<?=$getenrolldata['10_obt']?>"></td>
<td><input type="text" name="ten_outoff" style="width:80%" required value="<?=$getenrolldata['10_outoff']?>"></td>
<td><input type="text" name="ten_per" style="width:80%" required value="<?=$getenrolldata['10_per']?>"></td>
<td><input type="text" name="ten_board" style="width:80%" required value="<?=$getenrolldata['10_board']?>"></td>
<td><input type="text" name="ten_passing" style="width:80%" required value="<?=$getenrolldata['10_passing']?>"></td>
</tr>

<tr>
<td colspan="6">Class 12th</td>
<td><input type="text" name="tw_obt" style="width:80%" required value="<?=$getenrolldata['12_obt']?>"></td>
<td><input type="text" name="tw_outoff" style="width:80%" required value="<?=$getenrolldata['12_outoff']?>"></td>
<td><input type="text" name="tw_per" style="width:80%" required value="<?=$getenrolldata['12_per']?>"></td>
<td><input type="text" name="tw_board" style="width:80%" required value="<?=$getenrolldata['10_board']?>"></td>
<td><input type="text" name="tw_passing" style="width:80%" required value="<?=$getenrolldata['10_passing']?>"></td>
</tr>

<tr>
<td colspan="6">Class 12th PCM</td>
<td><input type="text" name="pcm_obt" style="width:80%" required value="<?=$getenrolldata['pcm_obt']?>"></td>
<td><input type="text" name="pcm_outoff" style="width:80%" required value="<?=$getenrolldata['pcm_obt']?>"></td>
<td><input type="text" name="pcm_per" style="width:80%" required value="<?=$getenrolldata['pcm_per']?>"></td>
<td><input type="text" name="pcm_board" style="width:80%" required value="<?=$getenrolldata['pcm_board']?>"></td>
<td><input type="text" name="pcm_passing" style="width:80%" required value="<?=$getenrolldata['pcm_passing']?>"></td>
</tr>

<tr>
<td colspan="6">Graduation</td>
<td><input type="text" name="grd_obt" style="width:80%" value="<?=$getenrolldata['grd_obt']?>"></td>
<td><input type="text" name="grd_outoff" style="width:80%" value="<?=$getenrolldata['grd_outoff']?>"></td>
<td><input type="text" name="grd_per" style="width:80%" value="<?=$getenrolldata['grd_per']?>"></td>
<td><input type="text" name="grd_board" style="width:80%" value="<?=$getenrolldata['grd_board']?>"></td>
<td><input type="text" name="grd_passing" style="width:80%" value="<?=$getenrolldata['grd_passing']?>"></td>
</tr>

</table>


<table class="studentdetails">
<!--

<?php

 $getsubjectsdata = mysqli_query($connection,"SELECT * FROM studentsubjects WHERE studentid='".$_SESSION['memberID']."' AND studentclass='X'");
      if(mysqli_num_rows($getsubjectsdata)>0){
      while($setsubjectsdata = mysqli_fetch_array($getsubjectsdata)){  

?>


<tr><td><?=$setsubjectsdata['studentclass']?>-<?=ucfirst($setsubjectsdata['subjectname'])?></td><td><input type="text" value="<?=$setsubjectsdata['subjectmarksobtained']?>" style="width:5%"> / <input type="text" value="<?=$setsubjectsdata['subjectmarkstotal']?>" style="width:5%"></td></tr>
<?php }} ?>

<?php

 $getsubjectsdata12 = mysqli_query($connection,"SELECT * FROM studentsubjects WHERE studentid='".$_SESSION['memberID']."' AND studentclass='XII'");
      if(mysqli_num_rows($getsubjectsdata12)>0){
      while($setsubjectsdata = mysqli_fetch_array($getsubjectsdata12)){  

?>


<tr><td><?=$setsubjectsdata['studentclass']?>-<?=ucfirst($setsubjectsdata['subjectname'])?></td><td><input type="text" value="<?=$setsubjectsdata['subjectmarksobtained']?>" style="width:5%"> / <input type="text" value="<?=$setsubjectsdata['subjectmarkstotal']?>" style="width:5%"></td></tr>
<?php } } else { for($i=1; $i<6; $i++) { ?>


<tr><td>XII-<input type="text" style="width:80%"></td><td><input type="text"style="width:5%"> / <input type="text" style="width:5%"></td></tr>




<? } }?>
-->


<tr><td colspan=2 class="widetd">Whom to contact in emergency</td></tr>
<tr><td>Name</td><td><input type="text" name="e_contact" required value="<?=$getenrolldata['e_contact']?>"></td></tr>
<tr><td>Address</td><td><input type="text" name="e_address" required value="<?=$getenrolldata['e_address']?>"></td></tr>
<tr><td>Telephone Number</td><td><input type="text" name="tele_number" required value="<?=$getenrolldata['tele_number']?>"></td></tr>
<tr><td>Mobile Number</td><td><input type="text" name="e_mobile" required value="<?=$getenrolldata['e_mobile']?>"></td></tr>



    
									<tr><td colspan=2><label for="confirmation" style="text-align:justify;"><div style="text-align:center;">Declaration</div><br/><input type="checkbox" name="confirm" id="confirmation" required/> &nbsp; We, hereby, declare that all the information provided in this form and the documents attached are true and correct to the best of our knowledge. I have read and understood the conditions of eligibility for the program for which we seek admission. In event of any information provided herein is found to be incorrect or misleading, candidature shall be liable to cancellation by the University at any time and we shall not be entitled to refund of any fee paid by we to the University. Further, We shall abide by the rules and regulations of the Avantika University, and we shall not raise any dispute in future over the said rules.</label>
									<span style="color:red;visibility: hidden;" id="confirmerr">Please select this checkbox to proceed.</span>
				</td></tr>
					<tr><td colspan=2><div style="margin-top:25px; float:right;">
									
                    <input name="submit"  type="submit" value="Submit Form" />
				</div></td></tr>
														</table>
				
								
  </form>
								
                
            </div>
		</div>
 
    </body>
</html>
