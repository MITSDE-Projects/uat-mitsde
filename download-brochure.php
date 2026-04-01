<?php

$tablet_browser = 0;
$mobile_browser = 0;

if (preg_match('/(tablet|ipad|playbook)|(android(?!.*(mobi|opera mini)))/i', strtolower($_SERVER['HTTP_USER_AGENT']))) {
    $tablet_browser++;
}

if (preg_match('/(up.browser|up.link|mmp|symbian|smartphone|midp|wap|phone|android|iemobile)/i', strtolower($_SERVER['HTTP_USER_AGENT']))) {
    $mobile_browser++;
}

if ((strpos(strtolower($_SERVER['HTTP_ACCEPT']), 'application/vnd.wap.xhtml+xml') > 0) or ((isset($_SERVER['HTTP_X_WAP_PROFILE']) or isset($_SERVER['HTTP_PROFILE'])))) {
    $mobile_browser++;
}

$mobile_ua = strtolower(substr($_SERVER['HTTP_USER_AGENT'], 0, 4));
$mobile_agents = array(
    'w3c ',
    'acs-',
    'alav',
    'alca',
    'amoi',
    'audi',
    'avan',
    'benq',
    'bird',
    'blac',
    'blaz',
    'brew',
    'cell',
    'cldc',
    'cmd-',
    'dang',
    'doco',
    'eric',
    'hipt',
    'inno',
    'ipaq',
    'java',
    'jigs',
    'kddi',
    'keji',
    'leno',
    'lg-c',
    'lg-d',
    'lg-g',
    'lge-',
    'maui',
    'maxo',
    'midp',
    'mits',
    'mmef',
    'mobi',
    'mot-',
    'moto',
    'mwbp',
    'nec-',
    'newt',
    'noki',
    'palm',
    'pana',
    'pant',
    'phil',
    'play',
    'port',
    'prox',
    'qwap',
    'sage',
    'sams',
    'sany',
    'sch-',
    'sec-',
    'send',
    'seri',
    'sgh-',
    'shar',
    'sie-',
    'siem',
    'smal',
    'smar',
    'sony',
    'sph-',
    'symb',
    't-mo',
    'teli',
    'tim-',
    'tosh',
    'tsm-',
    'upg1',
    'upsi',
    'vk-v',
    'voda',
    'wap-',
    'wapa',
    'wapi',
    'wapp',
    'wapr',
    'webc',
    'winw',
    'winw',
    'xda ',
    'xda-'
);

if (in_array($mobile_ua, $mobile_agents)) {
    $mobile_browser++;
}

if (strpos(strtolower($_SERVER['HTTP_USER_AGENT']), 'opera mini') > 0) {
    $mobile_browser++;
    //Check for tablets on opera mini alternative headers
    $stock_ua = strtolower(isset($_SERVER['HTTP_X_OPERAMINI_PHONE_UA']) ? $_SERVER['HTTP_X_OPERAMINI_PHONE_UA'] : (isset($_SERVER['HTTP_DEVICE_STOCK_UA']) ? $_SERVER['HTTP_DEVICE_STOCK_UA'] : ''));
    if (preg_match('/(tablet|ipad|playbook)|(android(?!.*mobile))/i', $stock_ua)) {
        $tablet_browser++;
    }
}

if ($tablet_browser > 0) {
    // do something for tablet devices
    // print 'is tablet';
    $divice = "tablet";
} else if ($mobile_browser > 0) {
    // do something for mobile devices
    //  print 'is mobile';

    $divice = "mobile";
} else {
    // do something for everything else
    //  print 'is desktop';
    $divice = "desktop";
}
/* if(isset($_POST['submitbtn']))
 {
    $first_name=$_POST['first_name3'];
    $last_name=$_POST['last_name'];
    $emaiid=$_POST['email3'];

 }*/
$pagename = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    ?>
<script type="text/javascript">

    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition1, showError);
    }


    function showPosition1(Position) {
        document.querySelector('.myFormH input[name="latitude"]').value = Position.coords.latitude;
        document.querySelector('.myFormH input[name="longitude"]').value = Position.coords.longitude;
    }
    function showError(error) {
        switch (error.code) {
            case error.PERMISSION_DENIED:
                //alert("ERROR");
                // location.reload();
                break;
        }
    }

</script>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />

    <title>Distance MBA & PGDM Courses Details, Online MBA Programs Broucher</title>

    <meta name="description"
        content="Get all the details of Distance PG course. Enroll today for 100% placement assistance, dedicated student support and self-paced learning." />
    <meta name="keywords"
        content="online mba courses, distance learning mba, distance learning center, online mba programs, distance PGDM,Online PGDM, Distance Pg Diploma courses, distance pg certificate courses" />

    <!-- CANONICAL TAG -->

    <link rel="canonical" href="https://mitsde.com/download-brochure" />

    <!-- CANONICAL TAG -->
    <?php  include "5-common-seo-tag-1.php" ?>

    <!-- OGP TAG -->

    <meta property="og:title" content="Distance MBA & PGDM Courses Details, Online MBA Programs Broucher">
    <meta property="og:site_name" content="MIT School of Distance Education">
    <meta property="og:url" content="https://mitsde.com/download-brochure">
    <meta property="og:description"
        content="Get all the details of Distance PG course. Enroll today for 100% placement assistance, dedicated student support and self-paced learning.">
    <meta property="og:type" content="website">
    <meta property="og:image"
        content="https://mitsde.com/download-brochure">

    <!-- / OG TAG -->
    <!-- Page Title -->

    <link rel="icon" type="image/png" href="assets/images/favicon-mit.ico" />
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/bootstrap-select.min.css" />
    <link rel="stylesheet" href="assets/css/slick.min.css" />
    <link rel="stylesheet" href="assets/css/fonts.css" type="text/css" />
    <link rel="stylesheet" href="assets/css/style.css" type="text/css" />
    <link rel="stylesheet" href="assets/fontawesome/css/all.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/course-common-internal.css" type="text/css" />
    <link rel="stylesheet" href="assets/css//form-new.css" type="text/css" />


    <!--API for Queck contact----->
    <script src="assets/js/api/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="assets/js/api/validation.js" charset="UTF-8"></script>


</head>

<body>
    <?php include "5-common-seo-tag-2.php" ?>
    <!-- Header Nav Start -->
    <?php include "header.php"?>
    <!-- Header Nav End --->
    <main class="main-body">



        <div class="container-fluid px-1 py-5 mx-auto">
            <div class="row d-flex justify-content-center">
                <div class="col-xl-7 col-lg-8 col-md-9 col-11 text-center">

                    <div class="card " id="card1">
                        <div>
                            <h1 class="text-center mb-4" style="font-size: 1.25rem;">Brochure Request</h1>
                        </div>
                        <form action="DownloadBrochureLink.php" method="post" class="reservation-form mt-20"
                            accept-charset="utf-8" name="menuContactFloting" id="menuContactFloting"
                            novalidate="novalidate">
                            <input type="hidden" name="csrf_test_name" value="e678298614a47d7e40efe0ccaf02b49c" />
                            <input type="hidden" id="product_id3" name="product_id3" value="0" />
                            <input type="hidden" id="product_name3" name="product_name3" value="" />
                            <input type="hidden" name="request_type3" value="Enquiry" />
                            <!-- <p class="text-white"><b>Get In Touch Quickly</b></p> -->
                            <div class="mb-3">

                                <input name="first_name3" type="text" class="form-control" value="First Name*"
                                    onBlur="javascript:addDefault(this,'menuContactFloting')"
                                    onFocus="javascript:removeDefault(this)" validate="Required|First Name*" />
                            </div>
                            <div class="mb-3">

                                <input name="email3" type="text" class="form-control" value="Email*"
                                    onBlur="javascript:addDefault(this,'menuContactFloting')"
                                    onFocus="javascript:removeDefault(this)" validate="Email|Email*" />
                            </div>
                            <div class="mb-3">

                                <input name="MobileNumber" class="form-control" type="text" pattern="[0-9]"
                                    value="MobileNumber*" onBlur="javascript:addDefault(this,'menuContactFloting')"
                                    onFocus="javascript:removeDefault(this)" validate="Required|Phone|Phone*" />
                            </div>


                            <select name="state" class="form-select form-control   mb-3" id="state"
                                onBlur="javascript:addDefault(this,'menuContactFloting')"
                                onFocus="javascript:removeDefault(this)" validate="Required|State|State*">
                                
                                <option value="">Select State</option>
                                <option value="Andhra Pradesh">Andhra Pradesh</option>
                                <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                                <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                <option value="Assam">Assam</option>
                                <option value="Bihar">Bihar</option>
                                <option value="Chandigarh">Chandigarh</option>
                                <option value="Chhattisgarh">Chhattisgarh</option>
                                <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                                <option value="Daman and Diu">Daman and Diu</option>
                                <option value="Delhi">Delhi</option>
                                <option value="Lakshadweep">Lakshadweep</option>
                                <option value="Puducherry">Puducherry</option>
                                <option value="Goa">Goa</option>
                                <option value="Gujarat">Gujarat</option>
                                <option value="Haryana">Haryana</option>
                                <option value="Himachal Pradesh">Himachal Pradesh</option>
                                <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                                <option value="Jharkhand">Jharkhand</option>
                                <option value="Karnataka">Karnataka</option>
                                <option value="Kerala">Kerala</option>
                                <option value="Madhya Pradesh">Madhya Pradesh</option>
                                <option value="Maharashtra">Maharashtra</option>
                                <option value="Manipur">Manipur</option>
                                <option value="Meghalaya">Meghalaya</option>
                                <option value="Mizoram">Mizoram</option>
                                <option value="Nagaland">Nagaland</option>
                                <option value="Odisha">Odisha</option>
                                <option value="Punjab">Punjab</option>
                                <option value="Rajasthan">Rajasthan</option>
                                <option value="Sikkim">Sikkim</option>
                                <option value="Tamil Nadu">Tamil Nadu</option>
                                <option value="Telangana">Telangana</option>
                                <option value="Tripura">Tripura</option>
                                <option value="Uttar Pradesh">Uttar Pradesh</option>
                                <option value="Uttarakhand">Uttarakhand</option>
                                <option value="West Bengal">West Bengal</option>
                            </select>

                            <select name="HQ" id="HQ" class="form-select form-control mb-4"
                                onBlur="javascript:addDefault(this,'menuContactFloting')"
                                onFocus="javascript:removeDefault(this)" validate="Required|HQ*">
                                
                                <option value="" readonly>Select Highest Qualification</option>
                                <option value="graduation">Graduation</option>
                                <option value="post graduation">Post Graduation</option>
                                <option value="Diploma">Diploma</option>
                            </select>
                            <input name="Divice" type="hidden" value="<?php echo $divice; ?>" />
                            <input name="PageName" type="hidden" value="<?php echo $pagename; ?>" />
                            <input type="hidden" name="latitude" value="">
                            <input type="hidden" name="longitude" value="">
                            <!-- <input type="hidden" id="online-ui-ux-lacknow" name="online-ui-ux-lacknow"
                                value="online-ui-ux-lacknow" /> -->

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                <label class="form-check-label" for="flexCheckChecked">
                                    I authorize MIT-SDE representative to contact me,this will override DND/NDNC
                                    registry.
                                </label>
                            </div>

                            <div class="form-group ">
                                <input type="hidden" name="submitthirdcontact" value="submitthirdcontact" />
                                <button type="button" id="submitbtnsticky"
                                    class="btn btn-primary mit-button mit-footer btn-ripple w-100 "
                                    onClick="validate('menuContactFloting')">
                                    Register Now
                                </button>





                           



                        </form>

                        <div class="submitbtn123"></div><!-- /.comment-form -->
                    </div>
                </div>
            </div>
        </div>
















        <?php //  include "learner-support.php" ?>

    </main>
    <!-- Footer Start -->

    <?php include "footer.php"?>


    <!-- footer end  -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/bootstrap-select.min.js"></script>
    <script src="assets/js/slick.min.js"></script>
    <script src="assets/js/common.js"></script>
    <script src="assets/js/course-slider.js"></script>

</body>

</html>