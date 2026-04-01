<?php		
	session_start();
	$memberid= $_SESSION['memberID'];
if(!isset($memberid))
{
 	header("location: register/index.php");//redirecting to second page
}
?>
		<h2><?php $_SESSION['username']; ?></h2>
		<?php 
			include "php/db.php";	
			$username = $_SESSION['username'];
			$testcenter = $_POST['testcenter'];	
			$dateofbirth = $_POST['dateofbirth'];
			$category = $_POST['category'];	
			$address = $_POST['address'];	
			$city = $_POST['city'];	
			$state = $_POST['state'];	
			$update = $_POST['update'];		
            if ($update == 'update')
            {			
			$query = "UPDATE `student` SET `testcenter` = '$testcenter', `category` = '$category', `dateofbirth` = '$dateofbirth', `address` = '$address', `city` = '$city', `state` = '$state'  WHERE `memberID` ='$memberid'";	
			$sql2 = mysqli_query($connection,$query);
			echo '<script>window.location="printformvalue.php";</script>';	
			}
			
			
		?>
<!DOCTYPE HTML>
<html>
<head>
    <title>MITID Admissions 2015-16</title>
    <link rel="stylesheet" href="css/style.css" /> 
     <link href='https://fonts.googleapis.com/css?family=Roboto:400,500' rel='stylesheet' type='text/css'>
     <link href="jQueryAssets/jquery.ui.core.min.css" rel="stylesheet" type="text/css">
     <link href="jQueryAssets/jquery.ui.theme.min.css" rel="stylesheet" type="text/css">
     <link href="jQueryAssets/jquery.ui.datepicker.min.css" rel="stylesheet" type="text/css">
<script src="jQueryAssets/jquery-1.8.3.min.js" type="text/javascript"></script>
<script src="jQueryAssets/jquery-ui-1.9.2.datepicker.custom.min.js" type="text/javascript"></script>
</head>
    
    <body>
	 <form action="editform.php" method="post">
	  <input type='hidden' value='update' name='update'>
    <div class="container" style=" margin:0 auto;">
   <div class="row">
	<h2> Welcome <?php echo $_SESSION['username']; ?></h2>
				 <?php $_SESSION['memberID']; ?>
				
				<h2> <?php //echo $_SESSION['email']; ?></h2>
      <p><a href='register/logout.php'>Logout</a></p>
				<div class="brd2">
                <table align="center" width="800px" cellpadding="5" cellspacing="5" >
				<tr>
				  <td width="100" valign="top">Date Of Birth</td>
				  <td width="6">&nbsp;</td>
				  <td width="253" valign="top"><input type="text" name="dateofbirth" required id="Datepicker1"/></td>
				  <td width="64" valign="top">Category</td>
				  <td width="295"><select name="category" required id ='category' style="font-size:11px;">
				    <option>----Select---- </option>
			        <option value="None">None</option>
                    <option value="Open">Open </option>
                    <option value="SC" >SC </option>
		            <option value="ST">ST</option>
		            <option value="VJDTNT(A)" >VJDTNT(A) </option>
	                <option value="NT (B)" >NT (B) </option>
	                <option value="NT C">NT C</option>
                    <option value="NT D" >NT D</option>
                    <option value="OBC" >OBC</option>
                  </select>
			      <br>
			      For International Students Select None</td>
				  </tr>
				<tr>
				  <td>Address</td>
				  <td>&nbsp;</td>
				  <td><input name="address" type="text" required id="address" style="height:20px;"></td>
				  <td valign="top">City</td>
				  <td valign="top"><input name="city" type="text" required id="city" style="height:20px;"></td>
				  </tr>
				<tr>
				  <td>State</td>
				  <td>&nbsp;</td>
				  <td valign="top"><input name="state" type="text" required id="state" style="height:20px;"></td>
				  <td valign="top">Test Center</td>
				  <td valign="top"><span class="dp4">
				    <select name="testcenter" required style="font-size:11px;">
				      <option value="">----Select----
				        
			          <option value="Ahmedabad">Ahmedabad
				          
			          <option value="Bengaluru">Bengaluru
				            
		              <option value="Bhopal">Bhopal
				              
		              <option value="Chandigarh">Chandigarh
				                
	                  <option value="Chennai">Chennai
				                  
	                  <option value="Delhi">Delhi
				                    
                      <option value="Goa">Goa
				                      
                      <option value="Hyderabad">Hyderabad
				                        
                      <option value="Jaipur">Jaipur
				                          
                      <option value="Kolkata">Kolkata
				                            
                      <option value="Lucknow">Lucknow
				                              
                      <option value="Mumbai">Mumbai
				                                
                      <option value="Nagpur">Nagpur
				                                  
                      <option value="Pune">Pune
				                                    
                      <option value="Patana">Patana
				                                      
                  </select>
				  </span></td>
				  </tr>
				<tr>
				  <td><p><a href='printformvalue.php'>Cancel</a></p></td>
				  <td>&nbsp;</td>
				  <td><input type="submit" name="submit" id="submit" value="Update"></td>
				  <td>&nbsp;</td>
				  <td>&nbsp;</td>
				  </tr>
				<tr>
				  <td colspan="5">&nbsp;</td>
				  </tr>
				</table>
	  </div>
		</div>
		</div>
		
       <div>
    
      </div>
	

</form>
    <script type="text/javascript">
$(function() {
	$( "#Datepicker1" ).datepicker({
		changeYear:true,
		changeMonth:true,
		changeMonth:true,
		changeYear:true,
		yearRange:"1980:2000",
		showButtonPanel:true
	}); 
});
     </script>
</body>   
</html>