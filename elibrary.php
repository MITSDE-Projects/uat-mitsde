<?php  $date = Date('Y-m-d');
     $conn=mysql_connect("localhost","mitsde_studentda","Custom@123");
	  	if(!$conn)
		{
		     echo "Mysql Connection Error".die(mysql_error);
		}
		
		$db=mysql_select_db('mitsde_studentdata',$conn);
		if(!$db)
		 {
			  echo "Database Not Selected".die(mysql_error);
		 }
		 date_default_timezone_set('Asia/Kolkata');
		  $date1 = Date('Y-m-d');
		  $date2 = Date('Y-m-d h-i-s');
		 
//$currentTime = date( 'Y-m-d h:i:s');
//echo $currentTime;
//die;	
//@header("Content-Disposition: attachment; filename=elibrary_MIT202101999.csv");
@header("Content-Disposition: attachment; filename=elibrary_$date2.csv");
 /*$name=$_POST['name'];
 $age=$_POST['age'];
 $country=$_POST['country'];

 for($i=0;$i<count($name);$i++)
 {
  $name_val=$name[$i];
  $age_val=$age[$i];
  $country_val=$country[$i];
  mysql_query("insert into employee_table values('$name_val','$age_val','$country_val')");	
 }
*/
    $fp = fopen('php://output', 'w');
	$header = array("id","studentname","RegID","Password","EmailId","MobileNo","CourseName","CourseID","specialization","SP_ID","Validity","e1","e2","Address","UserType","path","DT");


fputcsv($fp, $header);
  //$select = mysql_query("SELECT * FROM `student` where RegNo='MIT202101999'");
 
 $select = mysql_query("SELECT * FROM `student` where csv3!=1 AND RegNo<>'' ORDER BY `RegNo`");
 
    
 
 while($row=mysql_fetch_array($select))
 
 {
     
     $coursename = trim($row['CourseID']);
     $spid = trim($row['SpecializationID']);
     $cname = trim($row['programmesugpga']);
     $enrolldate = trim($row['pri_enrolled_dt']);
     $e1 = trim($row['elective_b1']);
     $e2 = trim($row['elective_b2']);
     $memberID = trim($row['memberID']);
     $memberID = trim($row['memberID']);
     
     $getphoto = mysql_query("SELECT photo FROM `tbl_students_data` where student_id='".$memberID."'");
     $photo=mysql_fetch_array($getphoto);
     $photo['photo'];
  ///die;   
     $currentdata=$enrolldate;
      //$cmd=date("Y-M");
    
    
     if($coursename=="95" || $coursename=="100" || $coursename=="103" || $coursename=="125")
     {
       $coursename1="Executive in PGDM";
        $validityPGDMe= date("Y-M-d", strtotime("+1 years +9 months", strtotime($currentdata))); //PGDM-e
        $validity=$validityPGDMe;
        $studeplanPath="dat_halltickets/studyplan/PGDM_Ex_March_C6.pdf";
     }
     
       if($coursename=="94" || $coursename=="98" || $coursename=="102" || $coursename=="122")
       {
       $coursename1="PGDM";
       $validityPGDM= date("Y-M-d", strtotime("+2 years +3 months", strtotime($currentdata))); //PGDM
        $validity=$validityPGDM;
        $studeplanPath="dat_halltickets/studyplan/PGDM_March_C6.pdf";
       }
       
       
       
       if($coursename=="96" || $coursename=="99" || $coursename=="104" || $coursename=="123")
       {
       $coursename1="PGDBA";
       $validityPGDBA= date("Y-M-d", strtotime("+2 years +6 months", strtotime($currentdata))); //PGDBA
        $validity=$validityPGDBA;
        $studeplanPath="dat_halltickets/studyplan/PGDBA_March_C6.pdf";
       }
       
        if($coursename=="97" || $coursename=="101" || $coursename=="105" || $coursename=="124")
        {
       $coursename1="PGCM";
        $validityPGCM= date("Y-M-d", strtotime("+1 years +6 months", strtotime($currentdata))); //PGCM
        $validity=$validityPGCM;
        $studeplanPath="dat_halltickets/studyplan/PGCM_March_C6.pdf";
        }
        
        if($coursename=="113")
        {
         $coursename1="PGDM EMBA";
        $validityPGCM= date("Y-M-d", strtotime("+27 months", strtotime($currentdata))); //PGCM
        $validity=$validityPGCM;
        //$studeplanPath="dat_halltickets/studyplan/PGCM-JAN-24.pdf";
        }
        if($coursename=="108")
        {
         $coursename1="PGDM (Executive) EMBA";
        $validityPGCM= date("Y-M-d", strtotime("+21 months", strtotime($currentdata))); //PGCM
        $validity=$validityPGCM;
        //$studeplanPath="dat_halltickets/studyplan/PGCM-JAN-24.pdf";
        }
        if($coursename=="109")
        {
         $coursename1="PGDM + Lean Six Sigma";
        $validityPGCM= date("Y-M-d", strtotime("+21 months", strtotime($currentdata))); //PGCM
        $validity=$validityPGCM;
        //$studeplanPath="dat_halltickets/studyplan/PGCM-JAN-24.pdf";
        }
        if($coursename=="110")
        {
         $coursename1="PGDM Executive + Lean Six Sigma";
        $validityPGCM= date("Y-M-d", strtotime("+21 months", strtotime($currentdata))); //PGCM
        $validity=$validityPGCM;
        //$studeplanPath="dat_halltickets/studyplan/PGCM-JAN-24.pdf";
        }
        if($coursename=="111")
        {
         $coursename1="PGDM Project + PMP";
        $validityPGCM= date("Y-M-d", strtotime("+21 months", strtotime($currentdata))); //PGCM
        $validity=$validityPGCM;
        //$studeplanPath="dat_halltickets/studyplan/PGCM-JAN-24.pdf";
        }
        if($coursename=="112")
        {
         $coursename1="PGDM Executive Modern Project + PMP";
        $validityPGCM= date("Y-M-d", strtotime("+21 months", strtotime($currentdata))); //PGCM
        $validity=$validityPGCM;
        //$studeplanPath="dat_halltickets/studyplan/PGCM-JAN-24.pdf";
        }
        if($coursename=="119")
        {
         $coursename1="EMBA Lateral";
        $validityPGCM= date("Y-M-d", strtotime("+21 months", strtotime($currentdata))); //PGCM
        $validity=$validityPGCM;
        //$studeplanPath="dat_halltickets/studyplan/PGCM-JAN-24.pdf";
        }
        if($coursename=="11")
        {
         $coursename1="Executive MBA";
        $validityPGCM= date("Y-M-d", strtotime("+27 months", strtotime($currentdata))); //PGCM
        $validity=$validityPGCM;
        //$studeplanPath="dat_halltickets/studyplan/PGCM-JAN-24.pdf";
        }
	
	      $short_name=$row['name']." ".$row['lastname'];
		  
  @$data.=" ".",";
  @$data.=$short_name.",";
  @$data.=trim($row['RegNo']).",";
  @$data.=trim($row['RegNo']).",";
  @$data.=$row['email'].",";
  @$data.=$row['phonenumber'].",";
  @$data.=$coursename1.",";
  @$data.=$row['CourseID'].",";
  @$data.=$row['desciplines'].",";
  @$data.=$row['SpecializationID'].",";
  @$data.=$validity.","; //Validity
  @$data.=$e1.","; //elective 1
  @$data.=$e2.","; //elective 2
  @$data.="NA".","; // Address
  @$data.="SDE".","; //UserType
  @$data.=$photo['photo'].","; //UserType
  @$data.=$date1."\n"; //DT
  
  
  
  
  
  $getdp=mysql_query("update student set csv3='1',csv1='1' where RegNo='".$row['RegNo']."' AND memberID='".$row['memberID']."'");
  
 
     $query= "INSERT INTO `canvas_data_for_mail` (`cid`, `studentName`, `emailID`, `regno`,`c_id`,`coursename`,`sp_id`,`sp`,`e1`,`e2`,`course_status`,`validity`,`photopath`,`studyplanpath`, `mail_send`, `currentdata`) VALUES (NULL, '".$short_name."', '".$row['email']."', '".$row['RegNo']."','".$coursename."','".$row['programmesugpg']."','".$spid."','".$row['desciplines']."','".$e1."','".$e2."','".$row['admission_status']."','".$validity."','".$photo['photo']."','".$studeplanPath."', '0', '$date')";
              $storeintemp = mysql_query($query) or die(mysql_error);
 }
//$getdp=mysql_query("update student1 set csv1='1' where tk_no='".$row['memberID']."'");
 echo $data;
 exit();

?>