<p align="center">Please Wait Five Minutes</p>
<?php 

$conn=mysql_connect("localhost","mitsde_onlinepay","jNq%,6!)0RmK");
		if(!$conn)
		{
		     echo "Mysql Connection Error".die(mysql_error);
		}
		else
		{
		   // echo "connected";
		}
		
		$db=mysql_select_db('mitsde_onlinepayment',$conn);
		if(!$db)
		 {
			  echo "Database Not Selected".die(mysql_error);
		 }
		 {
		   // echo "connected";
		}

 error_reporting(0);
       
   
	
	        if($_POST['EmailID'] && $_POST['MobileNo']) 
	             {
	  $Email= $_POST['EmailID'];
      $MobileNo= $_POST['MobileNo'];

                       date_default_timezone_set('Asia/Calcutta');
                       $CurrentDateTime=date('Y-m-d : h:i:s');
	
		      //echo "</br>INSERT INTO `whatsapp_unsubscribe` (`id`, `email`,`NO`,`DT`) VALUES (NULL, '".$Email."','".$MobileNo."','".$CurrentDateTime."')";
		     // die;
               $query= mysql_query("INSERT INTO `whatsapp_unsubscribe` (`id`, `email`,`NO`,`DT`) VALUES (NULL, '".$Email."','".$MobileNo."','".$CurrentDateTime."')" , $conn);
              if(!$query)
		  {
		        echo "Error In Insert".mysql_error($conn); exit();	
                
		  }
		  else
		  {
		      //echo "done";
		      //die;
		      
		      echo '<script type="text/javascript"> window.location ="../unsubscribe.php?msg=Unsubscribe Successfully";</script>';
		     
		  }
	             }
