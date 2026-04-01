<?php
include "php/header.php";
$getstudmeatdata = mysqli_fetch_array(mysqli_query($connection,"SELECT * FROM tbl_students_data WHERE student_id='".$_SESSION['memberID']."'"));
?>

        <div class="container" style="margin-top:100px;">
            <div class="main">   
				<?php			
							
								//Storing values in database
						$photo="";		
						include "php/db.php";
						$locationurl="page4_form.php";
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
        
                      /* echo "</br> school10status". $school10status=mysqli_real_escape_string($school10status);
                       echo "</br> school10". $school10=mysqli_real_escape_string($school10);
                      echo "</br> examboardname10".  $examboardname10=mysqli_real_escape_string($examboardname10);
                      echo "</br> years of pass 10".  $yearofpassing10=mysqli_real_escape_string($yearofpassing10);
                      echo "</br> examboardname12".  $examboardname12=mysqli_real_escape_string($examboardname12);
                      echo "</br> graduation".  $graduation=mysqli_real_escape_string($graduation);
                       echo "</br> examgraduation". $examgraduation=mysqli_real_escape_string($examgraduation);
                       echo "</br> postgraduation". $postgraduation=mysqli_real_escape_string($postgraduation);
                       echo "</br> postgraduationstatus". $postgraduationstatus=mysqli_real_escape_string($postgraduationstatus);*/
		             extract($_SESSION['post']);
	         }
						}
						$folder=GetStudentFolder($aid,$name,$lastname);
						if(isset($photo) && $photo!="")
						{
						    $photom=$folder."/".$name."_".$lastname."_".$aid."_photo.".$photo;
							$s=",`photo_image`='$photom'";
						}
						else
						{
							$s="";	
						}
					//echo 	"</br>UPDATE student SET `isComplete`=1,`lastPage`='page4_insertdata.php'".$s.",formstatus='incomplete form' WHERE `memberID`='$memberid'";
						$str="UPDATE student SET `isComplete`=1,`lastPage`='page4_insertdata.php'".$s.",formstatus='incomplete form' WHERE `memberID`='$memberid'";
							
						$query = mysqli_query($connection,$str);  
								
								if ($query) {
						//echo "UPDATE student SET `school10status`='$school10status',`school10`='$school10',`examboardname10`='$examboardname10',`yearofpassing10`='$yearofpassing10',`score10`='$score10',`school12`='$school12',`examboardname12`='$examboardname12',`yearofpassing12`='$yearofpassing12',`score12`='$score12',`graduationstatus`='$graduationstatus',`graduation`='$graduation',`examgraduation`='$examgraduation',`yearofpassinggraduation`='$yearofpassinggraduation',`scoregraduation`='$scoregraduation',`postgraduationstatus`='$postgraduationstatus',`postgraduation`='$postgraduation',`exampostgraduation`='$exampostgraduation',`yearofpassingpostgraduation`='$yearofpassingpostgraduation',`scorepostgraduation`='$scorepostgraduation',`otherqualificationstatus`='$otherqualificationstatus',`otherqualification`='$otherqualification',`examotherqualification`='$examotherqualification',`yearofpassingotherqualification`='$yearofpassingotherqualification',`scoreotherqualification`='$scoreotherqualification',`school12status`='$school12status',`isComplete`=0,`lastPage`='$locationurl',formstatus='incomplete form',`companyname`='$companyname',`experience`='$experience',`designation`='$designation',`industrysector`='$industrysector',`officenumber`='$officenumber',`officeemail`='$officeemail'  WHERE `memberID`='".$_SESSION['memberID']."'"; 		
						$school10status=mysqli_real_escape_string($connection,$school10status);
						$school10=mysqli_real_escape_string($connection,$school10);
						$examboardname10=mysqli_real_escape_string($connection,$examboardname10);
						$yearofpassing10=mysqli_real_escape_string($connection,$yearofpassing10);
						$score10=mysqli_real_escape_string($connection,$score10);
						$examboardname12=mysqli_real_escape_string($connection,$examboardname12);
						$graduationstatus=mysqli_real_escape_string($connection,$graduationstatus);
						$examgraduation=mysqli_real_escape_string($connection,$examgraduation);
						$postgraduationstatus=mysqli_real_escape_string($connection,$postgraduationstatus);
						$postgraduation=mysqli_real_escape_string($connection,$postgraduation);
					    mysqli_query($connection,"UPDATE student SET `school10status`='$school10status',`school10`='$school10',`examboardname10`='$examboardname10',`yearofpassing10`='$yearofpassing10',`score10`='$score10',`school12`='$school12',`examboardname12`='$examboardname12',`yearofpassing12`='$yearofpassing12',`score12`='$score12',`graduationstatus`='$graduationstatus',`graduation`='$graduation',`examgraduation`='$examgraduation',`yearofpassinggraduation`='$yearofpassinggraduation',`scoregraduation`='$scoregraduation',`postgraduationstatus`='$postgraduationstatus',`postgraduation`='$postgraduation',`exampostgraduation`='$exampostgraduation',`yearofpassingpostgraduation`='$yearofpassingpostgraduation',`scorepostgraduation`='$scorepostgraduation',`otherqualificationstatus`='$otherqualificationstatus',`otherqualification`='$otherqualification',`examotherqualification`='$examotherqualification',`yearofpassingotherqualification`='$yearofpassingotherqualification',`scoreotherqualification`='$scoreotherqualification',`school12status`='$school12status',`isComplete`=0,`lastPage`='$locationurl',formstatus='incomplete form',`companyname`='$companyname',`experience`='$experience',`designation`='$designation',`HRContactNo`='$HRContactNo',`Companywebsite`='$Companywebsite'  WHERE `memberID`='".$_SESSION['memberID']."'"); 
							
	
								?>
								
		<div class="sectionheading">
          
        </div>
  <form action="printformvalue.php" method="post" onsubmit="return ValidationSummary();">
			<table class="studentdetails">
					
					<tr><td colspan=2 style="font-size:18px;margin-top:100px;color:red;">Kindly confirm below mentioned details</td></tr>
					
									<tr><td colspan=2><h3>Application ID: <?php echo $aid;?></h3></td></tr>
									<tr><td colspan=2 class="widetd">Applied for</td></tr>
									<tr><td>Program</td><td><?php echo $programmesugpg;?></td></tr>
									<tr><td>Course</td><td><?php echo $desciplines;?></td></tr>
									
									
									<? if($programmesugpg!='Post Graduate Certificate in Management') { 
									
									if($programmesugpg=='Post Graduate Diploma in Business Administration') { 
									
									?>
									
									<tr><td>Elective Basket 1</td><td><?php echo $elective_b1;?></td></tr>
									<tr><td>Elective Basket 2</td><td><?php echo $elective_b2;?></td></tr>
									
									<? 
									}
									
									if($programmesugpg=='Post Graduate Diploma in Management') { ?>
								 
								 	<tr><td>Elective Basket 1</td><td><?php echo $elective_b1;?></td></tr>
								    <?
								  
								    } 
									}
								 	?>
									
							       
									
									<tr><td colspan=2 class="widetd">Personal Details</td></tr>
									<!--<tr><td>Photo</td><td><img src="http://www.mitsde.com/apply/<?=$getstudmeatdata['photo']?>" style="height:125px;"></td></tr>-->
									<tr><td>Name</td><td><?php echo $name." ".$middlename." ".$lastname;?></td></tr>
									<tr><td>Father's Name</td><td><?php echo $parentfname;?></td></tr>
									<tr><td>Mother's Name</td><td><?php echo $mothername;?></td></tr>
									
									<tr><td>Mobile No.</td><td><?php echo $phonenumber;?></td></tr>
									<tr><td>Email</td><td><?php echo $_SESSION["email"];?></td></tr>
									<tr><td>Date of Birth</td><td><?php echo $dateofbirth;?></td></tr>
									<tr><td>Gender</td><td><?php echo $gender;?></td></tr>
									
									<!--<tr><td>Nationality</td><td><?php echo $nationality;?></td></tr>-->
                                    
								    <tr><td>AADHAR No.</td><td><?php echo $aadhar;?></td></tr>
									<tr><td colspan=2 class="widetd">Educational Information</td></tr>
<tr><td>Class 10 School Name</td><td><?=$school10;?></td></tr>
<tr><td>Class 10 Board Name</td><td><?=$examboardname10;?></td></tr>
<tr><td>Class 10 year of Passing</td><td><?=$yearofpassing10;?></td></tr>
<tr><td>Class 10 score in %</td><td><?=$score10;?></td></tr>

<tr><td>Class 12 School Name</td><td><?=$school12;?></td></tr>
<tr><td>Class 12 Board Name</td><td><?=$examboardname12;?></td></tr>
<tr><td>Class 12 year of Passing</td><td><?=$yearofpassing12;?></td></tr>
<tr><td>Class 12 score in %</td><td><?=$score12;?></td></tr>



<tr><td>Graduation</td><td><?=$graduationstatus?></td></tr>
<tr><td>Institute</td><td><?=$graduation?></td></tr>
<tr><td>University</td><td><?=$examgraduation?></td></tr>
<tr><td>Year of Passing</td><td><?=$yearofpassinggraduation;?></td></tr>
<tr><td>Score in %</td><td><?=$scoregraduation?></td></tr>

<tr><td>Post Graduation</td><td><?=$postgraduationstatus?></td></tr>
<tr><td>Institute</td><td><?=$postgraduation?></td></tr>
<tr><td>University</td><td><?=$exampostgraduation?></td></tr>
<tr><td>Year of Passing</td><td><?=$yearofpassingpostgraduation;?></td></tr>
<tr><td>Score in %</td><td><?=$scorepostgraduation?></td></tr>

<tr><td>Any other Qualification</td><td><?=$otherqualificationstatus;?></td></tr>
<tr><td>Institute</td><td><?=$otherqualification;?></td></tr>
<tr><td>University</td><td><?=$examotherqualification;?></td></tr>
<tr><td>Year of Passing</td><td><?=$yearofpassingotherqualification;?></td></tr>
<tr><td>Score in %</td><td><?=$scoreotherqualification?></td></tr>

                                    <?php if($physicallychallenged=='Yes') { ?><tr><td>Illness</td><td><?php echo $specifyillnes;?></td></tr> <?php } ?>
									<tr><td colspan=2 class="widetd">Contact Details</td></tr>
									<tr><td>Correspondence Address</td><td><?php echo $caddress;?></td></tr>
									<tr><td>City</td><td><?php echo $ccity;?></td></tr>
									<tr><td>State</td><td><?php echo $cstate;?></td></tr>
									<tr><td>Country</td><td><?php echo $ccountry;?></td></tr>
									<tr><td>Pincode</td><td><?php echo $cpincode;?></td></tr>
									<tr><td>Permanent Address</td><td><?php echo $address;?></td></tr>
									<tr><td>City</td><td><?php echo $pcity;?></td></tr>
									<tr><td>State</td><td><?php echo $pstate;?></td></tr>
									<tr><td>Country</td><td><?php echo $pcountry;?></td></tr>
									<tr><td>Pincode</td><td><?php echo $ppincode;?></td></tr>




<tr><td colspan=2 class="widetd">Employment Details</td></tr>
<tr><td>Company Name</td><td><?=$companyname?></td></tr>
<tr><td>Work Experience</td><td><?=$experience?></td></tr>
<tr><td>Designation</td><td><?=$designation?></td></tr>
<tr><td>HR Contact No</td><td><?=$HRContactNo;?></td></tr>
<tr><td>Company Website</td><td><?=$Companywebsite?></td></tr>
<!--<tr><td>Industry Sector </td><td><?//=$industrysector?></td></tr>-->
<!--<tr><td>Office Mobile No. </td><td><?//=$officenumber?></td></tr>-->
<!--<tr><td>Official E-mail </td><td><?//=$officeemail?></td></tr>-->
<tr><td colspan=2><label for="confirmation"><input type="checkbox" name="confirm" id="confirmation" required/> &nbsp; I hereby confirm that the above mentioned details shall be used for all future communication and records.</label>
									<span style="color:red;visibility: hidden;" id="confirmerr">Please select this checkbox to proceed.</span>
				</td></tr>
									<tr><td colspan=2><div style="margin-top:25px; float:right;">
		<input  type="reset" value="Back" onclick="GotoPrevPage('page3_form.php');"/ style="background:#606062;;color:#FFF;width:99px;font-size: 14px;padding: 5px 10px;">					
                    <input  type="submit" value="Submit Form" / style="background:#606062;color:#FFF;width:99px;font-size: 14px;padding: 5px 10px;">
				</div></td></tr>
														</table>
				
								
  </form>
								<?php
								} 
								else{
								echo '<p><span>Form Submission Failed..!!</span></p>';
								}
								//destroying session
								unset($_SESSION['post']);
                ?>
            </div>
		</div>
        <script>
			function GotoPrevPage(v)
			{
    location.href=v;
	}
	function ValidationSummary()
	{
		if ($("#confirmation").prop("checked")===false)
		{
			$("#confirmerr").css("visibility","visible");
            return false;
        }
					$("#confirmerr").css("visibility","hidden");
		return true;
	}
		</script>
    </body>
</html>
<?php function GetStudentFolder($aid,$name,$lastname)
		{
			$stdir="";
			if(strpos($aid,"ARUG"))
			$stdir="architectureug";
			else if(strpos($aid,"ARPG"))
			$stdir="architectureug";
			else if(strpos($aid,"ENUG"))
			$stdir="engineeringug";
			else if(strpos($aid,"ENPG"))
			$stdir="engineeringug";
			else if(strpos($aid,"DEUG"))
			$stdir="designug";
			else if(strpos($aid,"DEPG"))
			$stdir="designpg";
			else if(strpos($aid,"SCUG"))
			$stdir="scienceug";
			else if(strpos($aid,"SCPG"))
			$stdir="sciencepg";
			
			$studentfolder="studentdocuments/".$name."_".$lastname."_".$aid;
			if (!is_dir($studentfolder))
								{
				mkdir($studentfolder, 0777, true);
			}
			return $studentfolder;
		}
		?>