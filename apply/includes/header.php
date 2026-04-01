<?php
session_start();
//echo '<pre>'; print_r($_SERVER); exit;
?>


<!DOCTYPE HTML>
<html>
<head>
<title>DAT</title>
<!-- Bootstrap -->
<link href="datcss/bootstrap.min.css" rel='stylesheet' type='text/css' />
<link href="datcss/bootstrap.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!--[if lt IE 9]>
     <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
     <script src="https://oss.maxcdn.com/libs/respond.datjs/1.4.2/respond.min.js"></script>
<![endif]-->
<link href="datcss/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- start plugins -->
<script type="text/javascript" src="datjs/jquery.min.js"></script>
<script type="text/javascript" src="datjs/bootstrap.js"></script>
<script type="text/javascript" src="datjs/bootstrap.min.js"></script>
<!-- start slider -->
<link href="datcss/slider.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="datjs/modernizr.custom.28468.js"></script>
<script type="text/javascript" src="datjs/jquery.cslider.js"></script>
	<script type="text/javascript">
			$(function() {

				$('#da-slider').cslider({
					autoplay : true,
					bgincrement : 450
				});

			});
		</script>
<!-- Owl Carousel Assets -->
<link href="datcss/owl.carousel.css" rel="stylesheet">
<script src="datjs/owl.carousel.js"></script>
		<script>
			$(document).ready(function() {

				$("#owl-demo").owlCarousel({
					items : 4,
					lazyLoad : true,
					autoPlay : true,
					navigation : true,
					navigationText : ["", ""],
					rewindNav : false,
					scrollPerPage : false,
					pagination : false,
					paginationNumbers : false,
				});

			});
		</script>
		<!-- //Owl Carousel Assets -->
<!----font-Awesome----->
   	<link rel="stylesheet" href="fonts/datcss/font-awesome.min.css">
<!----font-Awesome----->




<!-- Global Site Tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-106906303-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments)};
  gtag('js', new Date());

  gtag('config', 'UA-106906303-1');
</script>






<!-- Smartsupp Live Chat script -->
<script type="text/javascript">
var _smartsupp = _smartsupp || {};
_smartsupp.key = '7359f3a56111dd6c35a5119bca408c150434b8ba';
window.smartsupp||(function(d) {
  var s,c,o=smartsupp=function(){ o._.push(arguments)};o._=[];
  s=d.getElementsByTagName('script')[0];c=d.createElement('script');
  c.type='text/javascript';c.charset='utf-8';c.async=true;
  c.src='//www.smartsuppchat.com/loader.js?';s.parentNode.insertBefore(c,s);
})(document);
</script>





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




</head>
<body>
<div class="header_bg">
<div class="container">
	<div class="row header">
		<div class="logo navbar-left">
			<h2 id="title-heading" ><a href="https://dat.net.in?source=<?=$_GET['source'];?>" style="color:#000 !important;text-decoration:none;"><img src="images/dat-finalized.png" style="height:100px;"></a></h2>
		</div>
		<div class="navbar-right" style="visibility:hidden;position:relative;margin-top:-2% !important;">
			<form>
				<input type="text" class="text" value="Enter text here" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter text here';}">
				<input type="submit" value="search">
			</form>
		</div>
		<div class="clearfix"></div>
	</div>
	<div class="h_search navbar-right" style="margin-top:-2% !important;">
			
				<a href="https://dat.net.in/register/?source=<?=$_GET['source'];?>" style="visibility:hidden;"><div id="button-menu-top" class="button-menu-top"><div style="background-color:rgb(255,84,84);color:#FFF;font-size:13px;height:45px;float:left;width:130px;position:relative;top:-30px;text-transform:uppercase;padding-top:14px;text-align:center;cursor:pointer;">Apply Now</div></a>
				<a href="https://dat.net.in/register/?source=<?=$_GET['source'];?>"><div style="background-color:rgb(167,168,157);color:#FFF;font-size:13px;height:45px;float:right;width:170px;position:relative;top:-30px;text-transform:uppercase;padding-top:14px;text-align:center;cursor:pointer;">Apply Now</div></div></a>
			
		</div>
	
</div>
</div>

<marquee><a style="color:red" href="https://dat.net.in/register/?source=avt"><h3>Click Here to Download DAT 2018 Admit Card</h3></a></marquee>

<div class="container">
	<div class="row h_menu">
		<nav class="navbar navbar-default navbar-left" role="navigation">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		    </div>
		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" style="background-color:#FFF;">
		      <ul class="nav navbar-nav">
		        <li style="margin-left:0px;" class=<?php if($_SERVER['PHP_SELF']=="/index.php") { echo "active"; } ?>><a href="https://dat.net.in?source=<?=$_GET['source'];?>">Home</a></li>
		        <li style="width:220px;" class=<?php if(basename($_SERVER['PHP_SELF'])=="admission-procedure.php") { echo "active"; } ?>><a href="admission-procedure.php?source=<?=$_GET['source'];?>">Admission Procedure</a></li>
		        <li class=<?php if(basename($_SERVER['PHP_SELF'])=="guidelines.php") { echo "active"; } ?>><a href="guidelines.php?source=<?=$_GET['source'];?>">Guidelines</a></li>
		        <li style="width:130px;" class=<?php if(basename($_SERVER['PHP_SELF'])=="registration.php") { echo "active"; } ?>><a href="https://dat.net.in/register?source=<?=$_GET['source'];?>">Registration</a></li>
		        <li class=<?php if(basename($_SERVER['PHP_SELF'])=="dat-centers.php") { echo "active"; } ?>><a href="dat-centers.php?source=<?=$_GET['source'];?>">Test Centres</a></li>
		        <li style="width:176px;"  class=<?php if(basename($_SERVER['PHP_SELF'])=="important-dates.php") { echo "active"; } ?>><a href="important-dates.php?source=<?=$_GET['source'];?>">Important Dates</a></li>
		        <li class=<?php if(basename($_SERVER['PHP_SELF'])=="courses.php") { echo "active"; } ?>><a href="courses.php?source=<?=$_GET['source'];?>">Courses</a></li>
		        <li class=<?php if(basename($_SERVER['PHP_SELF'])=="contact-us.php") { echo "active"; } ?>><a href="contact-us.php?source=<?=$_GET['source'];?>">Contact Us</a></li>
		      </ul>
		    </div><!-- /.navbar-collapse -->
		    <!-- start soc_icons -->
		</nav>
		<div class="soc_icons navbar-right" style="display:none;">
			<ul class="list-unstyled text-center">
				<li><a href="#"><i class="fa fa-twitter"></i></a></li>
				<li><a href="#"><i class="fa fa-facebook"></i></a></li>
				<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
				<li><a href="#"><i class="fa fa-youtube"></i></a></li>
				<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
			</ul>	
		</div>
	</div>
</div>