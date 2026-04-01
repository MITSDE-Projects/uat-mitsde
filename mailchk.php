<?php
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
		 $date = Date('Y-m-d');

 $select = mysql_query("SELECT * FROM `student` where csv3!=1 AND RegNo<>'' LIMIT 05");
 
    
 
 while($row=mysql_fetch_array($select))
 
 {
     
    echo "</br>coursename11-->". $coursename = $row['programmesugpg'];
     
     if($coursename='Executive Post Graduate Diploma in Management')
     {
      echo "</br>Executive Post Graduate Diploma in Management-->".  $coursename1="Executive in PGDM";
     }
       if($coursename='Post Graduate Diploma in Management')
       {
    echo "</br>Post Graduate Diploma in Management-->".   $coursename1="PGDM";
       }
       if($coursename='Post Graduate Diploma in Business Administration')
       {
       echo "</br>Post Graduate Diploma in Business Administration-->". $coursename1="PGDBA";
       }
        if($coursename='Post Graduate Certificate in Management')
        {
      echo "</br>Post Graduate Certificate in Management-->".  $coursename1="PGCM";
        }
	
 }
 


?>