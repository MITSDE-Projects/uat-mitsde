<?php 

         $conn=mysqli_connect("localhost","mitsde_onlinepay","JJ#.UoN}f;uA");
		if(!$conn)
		{
		     echo "Mysql Connection Error".die(mysqli_error);
		}
		
		$db=mysqli_select_db('mitsde_onlinepayment',$conn);
		if(!$db)
		 {
			  echo "Database Not Selected".die(mysqli_error);
		 }

      /*$conn=mysql_connect("localhost","mitsde_onlinepay","JJ#.UoN}f;uA");
		if(!$conn)
		{
		     echo "Mysql Connection Error".die(mysql_error);
		}
		
		$db=mysql_select_db('mitsde_onlinepayment',$conn);
		if(!$db)
		 {
			  echo "Database Not Selected".die(mysql_error);
		 }*/

     
?>