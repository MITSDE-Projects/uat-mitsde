<?php 
ob_start();
session_start();
include("include/connection.php");
global $conn;





                 $gettransactiondtls = mysqli_query($conn,"SELECT * FROM temp2");
					       $i=0;       
			           while($settransactiondtls = mysqli_fetch_array($gettransactiondtls))
					   { 
						
						   echo "count-->".$i;
						   echo "<br>Email ID-->".$IDemail=$settransactiondtls['email']; 
						   
						 mysqli_query($conn,"UPDATE student SET is_account_verified='1' WHERE email='".$IDemail."'");  
						   
						  $i++; 
					   }
  //mysqli_query($conn,"UPDATE student SET enrollment_verified='1' WHERE memberID='".$_GET['id']."'");
   // header('location:candidate-details.php?id='.$_GET['id'].'&enrollmentveridone');
		       			?>
		       			



