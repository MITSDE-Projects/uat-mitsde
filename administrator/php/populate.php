<?php
include "db.php";
$memberid = $_SESSION['memberID'];
//$memberid=2;
		$query = "SELECT * FROM student WHERE `memberID` ='$memberid'";
		$sql2 = mysqli_query($connection,$query);
		$count = mysqli_num_rows($sql2);
        if($count>0)
        {
            $userdata = mysqli_fetch_assoc($sql2);
			
			
			
			//echo '<pre>'; print_r($userdata); exit; 
			
			
			
			
			
            $studentisdcode=$userdata['studentisdcode'];
            $parentisdcode=$userdata['parentisdcode'];
            $transactid = $userdata['transactid'];

            $programmesugpg=$userdata['programmesugpg'];
$desciplines=$userdata['desciplines'];
$elective_b1 = $userdata['elective_b1'];
$elective_b2 = $userdata['elective_b2'];
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
$alternate_no=$userdata['alternate_no'];
$alternate_email=$userdata['alternate_email'];
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
$graduationstatus=$userdata['graduationstatus'];
$graduation=$userdata['graduation'];
$examgraduation=$userdata['examgraduation'];
$yearofpassinggraduation=$userdata['yearofpassinggraduation'];
$scoregraduation=$userdata['scoregraduation'];
$postgraduationstatus=$userdata['postgraduationstatus'];
$postgraduation=$userdata['postgraduation'];
$exampostgraduation=$userdata['exampostgraduation'];
$yearofpassingpostgraduation=$userdata['yearofpassingpostgraduation'];
$scorepostgraduation=$userdata['scorepostgraduation'];
$otherqualificationstatus=$userdata['otherqualificationstatus'];
$otherqualification=$userdata['otherqualification'];
$examotherqualification=$userdata['examotherqualification'];
$yearofpassingotherqualification=$userdata['yearofpassingotherqualification'];
$scoreotherqualification=$userdata['scoreotherqualification'];
$designation=$userdata['designation'];
$industrysector=$userdata['industrysector'];
$mothername=$userdata['mothername'];
$officenumber=$userdata['officenumber'];
$officeemail=$userdata['officeemail'];









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
		
	$getstudmeatdata=mysqli_fetch_array(mysqli_query($connection,"select * from tbl_students_data where student_id='".$memberid."'"));	
?>
