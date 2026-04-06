<?php include("connection.php");

/*$first_name=$_POST['first_name3'];
$emaiid=$_POST['email3'];
$mobile=$_POST['MobileNumber'];*/
$first_name = htmlspecialchars(trim(stripslashes($_POST['first_name3'])), ENT_QUOTES, 'UTF-8');
$emaiid = filter_var($_POST['email3'], FILTER_SANITIZE_EMAIL);
$mobile = filter_var($_POST['MobileNumber'], FILTER_SANITIZE_NUMBER_INT);

$state=$_POST['state'];
$HQ=$_POST['HQ'];
$Divice=$_POST['Divice'];
$PageName=$_POST['PageName'];

 $ip = $_SERVER['REMOTE_ADDR']; 

	date_default_timezone_set('Asia/Kolkata');
	$curdate = date('Y-m-d');
	$curdateTime = date("Y-m-d h:i:s");

    
	

// Google Maps API Key 
 
// Latitude & Longitude from which the address will be retrieved 
$latitude = $_POST['latitude']; 
$longitude = $_POST['longitude'];
 
// Formatted latitude & longitude string 
$formatted_latlng = trim($latitude).','.trim($longitude); 
 
// Get geo data from Google Maps API by lat lng 
 
// Decode JSON data returned by API 
$apiResponse = json_decode($geocodeFromLatLng); 

 //print_r($apiResponse);
// Retrieve address from API data 
$formatted_address = $apiResponse->results[0]->formatted_address;  

 $formatted_address;

// Loop through the address components to find the city and state
foreach ($apiResponse->results[0]->address_components as $component) {
    if (in_array('locality', $component->types)) {
        $city = $component->long_name;
    }
    if (in_array('administrative_area_level_1', $component->types)) {
        $statemap = $component->long_name;
    }
    if (in_array('administrative_area_level_3', $component->types)) {
        $district = $component->long_name;
    }
    if (in_array('country', $component->types)) {
        $country = $component->long_name;
    }
}
//echo "</br>district: " . $district . "\n";
//echo "</br>City: " . $city . "\n";
//echo "</br>State: " . $state . "\n";
//echo "</br>country: " . $country . "\n";
//die;
	
					echo "</br>INSERT INTO `quickcontact` (`QC_ID`, `FirstName`,  `EmailID`, `MobileNo`, `SourcePath`, `PageName`, `DateTime`, `Date`, `device`, `page_name`, `address`, `district`, `city`, `state`, `country`, `longitude`, `latitude`,`ip`) VALUES (NULL, '".$first_name."', '".$emaiid."', '".$mobile."', '".$state."', '".$HQ."','".$curdateTime."','".$curdate."', '".$Divice."', '".$PageName."', '".$formatted_address."', '".$district."', '".$city."', '".$statemap."', '".$country."', '".$latitude."', '".$longitude."', '".$ip."'";
				die;
	       $insert=mysql_query("INSERT INTO `quickcontact` (`QC_ID`, `FirstName`,  `EmailID`, `MobileNo`, `SourcePath`, `PageName`, `DateTime`, `Date`, `device`, `page_name`, `address`, `district`, `city`, `state`, `country`, `longitude`, `latitude`,`ip`) VALUES (NULL, '".$first_name."', '".$emaiid."', '".$mobile."', '".$state."', '".$HQ."','".$curdateTime."','".$curdate."', '".$Divice."', '".$PageName."', '".$formatted_address."', '".$district."', '".$city."', '".$statemap."', '".$country."', '".$latitude."', '".$longitude."', '".$ip."')");
	
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
    <?php include "header.php" ?>



    
    <!-- Header Nav End --->
    <main class="main-body">
      <section>
        <div class="container contact-box">
          <div class="row con-listing">
            <img src="assets/images/media/common-images-new/remaning-course-page/thankyou.jpg" width="50%" name="thank you">
          </div>
		  <?php 
			        
                    $email3=$_POST['email3'];
	                $mobile=$_POST['MobileNumber'];
	                
			       ?>
			       <form action="#" name="google_mitsde" id="google_mitsde" >
    
    <input type="hidden" id="email3" name="email3" value="<?php echo "$email3"; ?>" />
    <input type="hidden" id="mobile3" name="mobile3" value="<?php echo "+91"."$mobile"; ?>" />
    
    
    
    </form>
        </div>
       
      </section>
    </main>
    <!-- Footer Start -->
    <?php  include "footer.php" ?>
    

    <!-- footer end  --> 
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/bootstrap-select.min.js"></script>
    <script src="assets/js/common.js"></script>
  </body>
</html>