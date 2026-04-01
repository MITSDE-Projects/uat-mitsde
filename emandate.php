<?php 
 


$post = file_get_contents('php://input');
$string = $post;


// Explode the string into an array of key-value pairs
$pairs = explode('&', $string);

// Initialize an empty array to store the converted variables
$variables = [];

foreach ($pairs as $pair) {
    // Split each pair into key and value
    list($key, $value) = explode('=', $pair);

    // URL decode the value
    $value = urldecode($value);

    // If the value starts with '%7B' and ends with '%7D', it is URL encoded JSON data
    if (substr($value, 0, 3) === "%7B" && substr($value, -3) === "%7D") {
        // URL decode the JSON data
        $value = urldecode($value);

        // Remove the leading and trailing single quotes from the JSON data
        $value = substr($value, 1, -1);

        // Convert the JSON data to an associative array
        $value = json_decode($value, true);
    }

    // Store the key-value pair in the variables array
    $variables[$key] = $value;
}

// Access the converted variables
$CheckSumVal = $variables['CheckSumVal'];
$MandateRespDoc = $variables['MandateRespDoc'];

// Access specific values within MandateRespDoc
$MandateRespDoc = str_replace("'", '"', $MandateRespDoc);
$MandateRespDocArray = json_decode($MandateRespDoc, true);

// Print the output
echo "</br>CheckSumVal: " . $CheckSumVal . "\n";
echo "</br>MandateRespDoc:\n";
echo "</br>Status: " . $Status=$MandateRespDocArray['Status'] . "\n";
echo "</br>MsgId: " . $MsgId=$MandateRespDocArray['MsgId'] . "\n";
echo "</br>RefId: " .$RefID= $MandateRespDocArray['RefId'] . "\n";
echo "</br>Errors:\n";
foreach ($MandateRespDocArray['Errors'] as $error) {
    echo "</br>Error Code: " .$error_code= $error['Error_Code'] . "\n";
    echo "</br>Error Message: " .$error_msg= $error['Error_Message'] . "\n";
}
echo "</br>Filler1: " . $Filler1=trim($MandateRespDocArray['Filler1']) . "\n";
echo "</br>Filler2: " . $MandateRespDocArray['Filler2'] . "\n";
echo "</br>Filler3: " . $MandateRespDocArray['Filler3'] . "\n";
echo "</br>Filler4: " . $MandateRespDocArray['Filler4'] . "\n";
echo "</br>Filler5: " . $MandateRespDocArray['Filler5'] . "\n";
echo "</br>Filler6: " . $MandateRespDocArray['Filler6'] . "\n";
echo "</br>Filler7: " . $MandateRespDocArray['Filler7'] . "\n";
echo "</br>Filler8: " . $MandateRespDocArray['Filler8'] . "\n";
echo "</br>Filler9: " . $Filler9=$MandateRespDocArray['Filler9'] . "\n";
echo "</br>Filler10: " . $Filler10=$MandateRespDocArray['Filler10'] . "\n";



$conn = mysqli_connect("localhost", "mitsde_studentda", "Custom@123","mitsde_studentdata");

$curdate = date('Y-m-d');


echo "</br>UPDATE e_mandate SET `Status`='$Status' where  `extraege_id`='$Filler1'";

$update=mysqli_query($conn,"UPDATE `e_mandate` SET `RefID` = '".$MandateRespDocArray['RefId']."', `Status` = '".$Status."',`Error_code` = '".$error['Error_Code']."',`Error_message` = '".$error['Error_Message']."',`Filler9` = '".$MandateRespDocArray['Filler9']."',`Filler10` = '".$MandateRespDocArray['Filler10']."' WHERE `e_mandate`.`extraege_id` = '".$MandateRespDocArray['Filler1']."'");





?>
<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"><!--<![endif]-->
<head>
<!-- Meta Tags -->
<html dir="ltr" lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<!-- Meta Tags -->
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>

<meta name="description" content="" />
<meta name="keywords" content="" />
<meta name="author" content="" />

<!-- Page Title -->
<title>MITSDE e-mandate</title>

<!-- Favicon and Touch Icons -->
<link href="media/favicon.png" rel="shortcut icon" type="image/png">
<link href="images/apple-touch-icon.png" rel="apple-touch-icon">


    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Bootstrap  -->
    <link rel="stylesheet" type="text/css" href="stylesheets/bootstrap.css" >

    <!-- Theme Style -->
    <link rel="stylesheet" type="text/css" href="stylesheets/style.css">

    <!-- Responsive -->
    <link rel="stylesheet" type="text/css" href="stylesheets/responsive.css">

    <!-- Colors -->
    <link rel="stylesheet" type="text/css" href="stylesheets/colors/color1.css" id="colors">
	


</head> 
<body class="header-sticky">
    <div class="boxed">
        <?php include"header.php"; ?><!-- /.header -->
<script>
	window.onload = function() {
		var d = new Date().getTime();
		document.getElementById("tid").value = d;
	};
</script> 
       
            <section class="flat-row pad-top-100">
			
                <div class="container">
         <div class="row">
           <div class="col-md-6 col-md-push-3">
            <div class="border-5px  p-30 mb-0" style="border-color:#710000;">
              <h3 class="text-theme-colored mt-0 pt-5">MITSDE e-mandate</h3>
			  
              <hr>

              <!-- Job Form Validation-->
              thank you page
            </div>
           
       
      </div>
            </div>
	  
                </div><!-- /.container -->   
            </section>

            


            


       <?php //include"footer.php";?>

        <!-- Javascript -->
    <script type="text/javascript" src="javascript/jquery.min.js"></script>
    <script type="text/javascript" src="javascript/bootstrap.min.js"></script>
    <script type="text/javascript" src="javascript/jquery.easing.js"></script> 
    <script type="text/javascript" src="javascript/jquery-waypoints.js"></script>
    <script type="text/javascript" src="javascript/parallax.js"></script>
    <script type="text/javascript" src="javascript/jquery.cookie.js"></script>
     <script type="text/javascript" src="javascript/main.js"></script>
</body>
</html>