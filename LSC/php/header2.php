<?php session_start();
if(!isset($_SESSION['memberID']))
{
    mysqli_query($connection,"UPDATE student SET is_online='0' WHERE memberID='".$_SESSION['memberID']."'");

 	//header("location: https://mitsde.com/LSC/register/index.php");//redirecting to second page
}
else
{
	include "php/populate.php";
	$memberid= $_SESSION['memberID'];
$pieces = explode(".", basename($_SERVER['PHP_SELF']));
$segments = explode('/', trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/'));
$pid=$segments[count($segments)-1];
//$pid="1";
$_SESSION["lastpage"]=$pid='0';

mysqli_query($connection,"UPDATE student SET is_online='1' WHERE memberID='".$_SESSION['memberID']."'");

 
}
?>
<!DOCTYPE HTML>
<html>
<head>
  <title>MIT SDE 2024-25</title>
      <link rel="shortcut icon" href="../images/favicon.ico" />
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/bootstrapValidator.min.js"></script> 
	<script src="js/jquery.min.js"></script>
	<script src="js/jquery-ui.js"></script>
	<link href="css/style.css" rel="stylesheet" />
	<link href="css/bootstrap.min.css" rel="stylesheet" />
	<script type="text/javascript" src="js/jquery.form.js"></script>
		<link rel="stylesheet" href="css/style.css" />
 		<script src="js/courses.js"></script>
 		<script src="js/common.js"></script>
 		<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '300649950136876', {
em: 'insert_email_variable,'
});
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=300649950136876&ev=PageView&noscript=1"
/></noscript>
<!-- DO NOT MODIFY -->
<!-- End Facebook Pixel Code -->


<!--LeadSquared Tracking Code Start-->
<script type="text/javascript" src="http://web.mxradon.com/t/Tracker.js"></script>
<script type="text/javascript">
      pidTracker('11285');
</script>
<!--LeadSquared Tracking Code End--> 

<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '703546286509183');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=703546286509183&ev=PageView&noscript=1"
/></noscript>
<!-- DO NOT MODIFY -->
<!-- End Facebook Pixel Code -->

<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '129099561109815');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=129099561109815&ev=PageView&noscript=1" >
</noscript>
<!--End of code-->



<!-- Google Code for MITID Remarketing Tag -->
<!--------------------------------------------------
Remarketing tags may not be associated with personally identifiable information or placed on pages related to sensitive categories. See more information and instructions on how to setup the tag on: http://google.com/ads/remarketingsetup
--------------------------------------------------->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 826380615;
var google_custom_params = window.google_tag_params;
var google_remarketing_only = true;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/826380615/?guid=ON&amp;script=0"/>
</div>
</noscript>

<!-- Global Site Tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-106906303-1"></script>
<script>
window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments)};
gtag('js', new Date());

gtag('config', 'UA-106906303-1');
</script>
</head>

    	<body class="bg-pic">
   <div class="wrapper-640">
		<div class="mheader">
		<div class="formheading">
		    
<a target="_blank" href="javascript:void(0);"><img src="https://www.mitsde.com/media/Logos/mitsde logo svg-01.svg" style="width:230px;"></a><p style="margin-top:-10px;  margin-bottom:15px;font-size:14px;font-family:'Roboto', sans-serif;">Approved by A I C T E, Govt.of India.</p>
<br><span id="logout" ><a href='register/logout.php?pid=<?php echo $pid;?>&id=<?php echo $memberid;?>' style="color:#606062; font-family:'Roboto Slab', serif;font-size: 24px;">Logout</a></span>
<a href='https://mitsde.com/LSC/page1_form.php' style="color:#606062; font-family:'Roboto Slab', serif;font-size: 24px;">back</a></span>


	<!--	<div class="userloginmsg" style="clear:both;">
          <span id="logout"><a href='register/logout.php?pid=<?php echo $pid;?>&id=<?php echo $memberid;?>'>Logout</a></span>


		</div>-->
		
		</div>
		
		</div>
