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
		 date_default_timezone_set("Asia/Calcutta"); 
		 $t=time();
	echo "</br>date-->".	 $date = Date('Y-m-d H:i:s');
		 //$time = Date('h:i:s');
// data for Edmingle LMS	
die;
//@header("Content-Disposition: attachment; filename=userdata_MIT202101999.csv");
@header("Content-Disposition: attachment; filename=Edmingle_$date.csv");
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
$header = array("Sno","Name","Email","Password","Birthday","Contact Number Dial Code","Contact Number","Address","City","State","Pincode","School","Contact Number 2 Dial Code","Contact Number 2","Parent Name","Parent Contact Dial Code","Parent Contact","Parent Email
","Gender","Qualification","Occupation","Religion","Standard","Landline","Alternate Email","Residential Address","Aadhaar Number","Registration Number","Program","Specialization");


fputcsv($fp, $header);
  //$select = mysql_query("SELECT * FROM `student` where RegNo='MIT202101999'");
 $i=1;
 $select = mysql_query("SELECT * FROM `student` where csv1!=1 AND RegNo<>'' ORDER BY `RegNo`");
 
    
 
 while($row=mysql_fetch_array($select))
 
 {
     
     
	$fullname=$row['name']." ".$row['middlename']." ".$row['lastname'];

	 $sortable_name=$row['lastname']." ".$row['name'];
	 $short_name=$row['name']." ".$row['lastname'];
		  
  @$data.=$i.",";  // sir no
  @$data.=trim($row['name']).","; //Name
  @$data.=trim($row['email']).",";  //Email
  @$data.=trim($row['RegNo']).",";  //Password
  @$data.=trim($row['dateofbirth']).",";   //Birthday
  @$data.="91".","; //Contact Number Dial Code
  @$data.=trim($row['phonenumber']).",";      //Contact Number
  @$data.="".",";  //Address
  @$data.=trim($row['ccity']).",";     //City
  @$data.=trim($row['cstate']).",";   //State
  @$data.=trim($row['cpincode']).",";            //Pincode
  @$data.="".",";      //school
  @$data.="".",";  // contact no code 2
  @$data.="'".",";            // contact no
  @$data.="".",";  // parent name
  @$data.="".",";  // Parent Contact Dial Code
  @$data.="".",";   // Parent Contact
  @$data.="".","; //Parent Email
  @$data.=trim($row['gender']).",";      // Gender
  @$data.="".","; //Qualification
  @$data.="".",";    // Occupation
  @$data.="".",";  //Religion
  @$data.="".",";           //Standard
  @$data.="".",";   //Landline
  @$data.=trim($row['alternate_email']).",";   //Alternate Email
  @$data.="".",";   //Residential Address
  @$data.="".",";  //Aadhaar Number
  @$data.=$row['RegNo'].",";  //Registration Number
  @$data.=$row['programmesugpg'].",";  //Registration Number
  @$data.=$row['desciplines']."\n";  //Registration Number
  
  $getdp=mysql_query("update student set csv1='1' where RegNo='".$row['RegNo']."' AND memberID='".$row['memberID']."'");
  $i++;
 }
 
//$getdp=mysql_query("update student1 set csv1='1' where tk_no='".$row['memberID']."'");
 echo $data;
 exit();

?>