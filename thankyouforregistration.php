<?php include("admin/include/connection.php");

$first_name=$_POST['Name'];
$email3=$_POST['email'];
$mobile=$_POST['mobile'];


 $ip = $_SERVER['REMOTE_ADDR']; 
date_default_timezone_set('Asia/Kolkata');
	
	$curdateTime = date("Y-m-d h:i:s");

				//	echo "</br>INSERT INTO `quickcontact` (`QC_ID`, `FirstName`,  `EmailID`, `MobileNo`, `SourcePath`, `PageName`, `DateTime`, `Date`, `device`, `page_name`, `address`, `district`, `city`, `state`, `country`, `longitude`, `latitude`,`ip`) VALUES (NULL, '".$first_name."', '".$emaiid."', '".$mobile."', '".$state."', '".$HQ."','".$curdateTime."','".$curdate."', '".$Divice."', '".$PageName."', '".$formatted_address."', '".$district."', '".$city."', '".$statemap."', '".$country."', '".$latitude."', '".$longitude."', '".$ip."'";
				//die;
	       $insert=mysql_query("INSERT INTO `careerexpress` (`id`, `name`, `email`, `mobile`, `ip`, `datetime`) VALUES (NULL, '".$first_name."', '".$email3."', '".$mobile."', '". $ip."', '".$curdateTime."')");
	
	    if(!$insert)
		 {
		    echo "Error in insert Query".die(); 
		 }

		 
		 
  
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Thank You</title>
    <meta name="robots" content="noindex, nofollow">
    <link rel="icon" type="image/png" href="assets/images/favicon-mit.ico" />
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/bootstrap-select.min.css" />
    <link rel="stylesheet" href="assets/css/fonts.css" type="text/css" />
   <link rel="stylesheet" href="assets/css/style.css" type="text/css" />
    <link  rel="stylesheet" href="assets/fontawesome/css/all.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/course-common-internal.css" type="text/css" />
    <link rel="stylesheet" href="assets/css/homepage.css" type="text/css" />
	<!--API for Queck contact----->
    <script src="assets/js/api/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="assets/js/api/validation.js" charset="UTF-8"></script>
    <!----->
    <?php  include "5-common-seo-tag-1.php" ?>
	<?php // include"google_code.html";?>
  </head>
  <body>
    <!-- Header Nav Start -->
    <?php //include "header.php" ?>



    
    <!-- Header Nav End --->
    <main class="main-body">
      <section>
        <div class="container contact-box">
          <div class="row con-listing">
            <img src="assets/images/media/common-images-new/remaning-course-page/thankyou.jpg" width="50%" name="thank you">
          </div>
		  <?php 
			        
                   
	                
			       ?>
			       <form action="#" name="google_mitsde" id="google_mitsde" >
    
    <input type="hidden" id="email3" name="email3" value="<?php echo "$email3"; ?>" />
    <input type="hidden" id="mobile3" name="mobile3" value="<?php echo "+91"."$mobile"; ?>" />
    
    
    
    </form>
        </div>
       
      </section>
    </main>
    <!-- Footer Start -->
    <?php  //include "footer.php" ?>
    

    <!-- footer end  --> 
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/bootstrap-select.min.js"></script>
    <script src="assets/js/common.js"></script>
  </body>
</html>