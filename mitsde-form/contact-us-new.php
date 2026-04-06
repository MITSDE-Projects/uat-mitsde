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
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS (if your project uses it) -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

    <!-- YOUR EXISTING CSS FILE - use absolute URL -->
    <link rel="stylesheet" href="https://mitsde.com/assets/css/style.css">

    <!-- YOUR EXISTING VALIDATION JS - use absolute URL -->
    <script src="https://mitsde.com/assets/js/api/jquery-1.10.2.min.js"></script>
    <script src="https://mitsde.com/mitsde-form/validation.js"></script>

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

    <style>
        /* Remove default body margin so it fits iframe cleanly */
        body {
            margin: 0;
            padding: 0;
            background: transparent;
        }
    </style>
    <style>
        /* form card */
        .lead-form {
            width: 100%;
            /* max-width: 380px; */
            color: #000000;
            background: #FDF7F2;
            border-radius: 18px;
            padding: 28px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
        }

        .lead-form .form-control {
            border-radius: 999px;
            padding: 5px 15px;
        }

        .lead-form .form-select {
            border-radius: 999px;
        }

        .btn-common {
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0px auto 0px;
            width: 316px;
            padding: 7px 10px;
            border-radius: 30px;
            font-weight: 500;
            font-size: 14px;
            text-transform: uppercase;
            letter-spacing: 0.06em;
            border: none;
            cursor: pointer;
            background: linear-gradient(170deg, #fd6500, #993d00);
            color: #fff;
            margin-top: 20px;
            z-index: 1;
        }

        .btn-common:hover {
            transform: scale(0.9);
            transition: 0.2s all;
            color: #fff;
        }
    </style>
</head>

<body>
    <div class="d-flex justify-content-end">
        <div class="lead-form">
            <h6 class="mb-3 fw-bold">Fill in your details here</h6>
            <form action="https://mitsde.com/mitsde-form/thankyou.php" method="post"
                class="reservation-form mt-20 myFormH w-100" accept-charset="utf-8" name="contactform"
                id="contactform" novalidate="novalidate">

                <input type="hidden" name="csrf_test_name" value="e678298614a47d7e40efe0ccaf02b49c" />
                <input type="hidden" id="product_id3" name="product_id3" value="0" />
                <input type="hidden" id="product_name3" name="product_name3" value="" />
                <input type="hidden" name="request_type3" value="Enquiry" />

                <div class="mb-1">
                    <input name="first_name3" type="text" class="form-control" value="First Name*"
                        onBlur="javascript:addDefault(this,'contactform')"
                        onFocus="javascript:removeDefault(this)" validate="Required|First Name*" />
                </div>

                <div class="mb-1">
                    <input name="email3" type="text" class="form-control" value="Email*"
                        onBlur="javascript:addDefault(this,'contactform')"
                        onFocus="javascript:removeDefault(this)" validate="Email|Email*" />
                </div>

                <div class="mb-1">
                    <input name="MobileNumber" class="form-control" type="text" value="MobileNumber*"
                        onBlur="javascript:addDefault(this,'contactform')"
                        onFocus="javascript:removeDefault(this)" validate="Required|Phone|Phone*" />
                </div>

                <select name="state" class="form-select form-control mb-1" id="state" validate="Required|State|State*">
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

                <select name="HQ" id="HQ" class="form-select form-control mb-1" validate="Required|HQ*">
                    <option value="">Select Highest Qualification</option>
                    <option value="graduation">Graduation</option>
                    <option value="post graduation">Post Graduation</option>
                    <option value="Diploma">Diploma</option>
                </select>

                <select name="stream" id="stream" class="form-select form-control mb-1" validate="Required|HQ*">
                    <option value="">Select Stream</option>
                    <option value="Growth & Digital Leadership">Growth & Digital Leadership</option>
                    <option value="Business Finance & Strategy">Business Finance & Strategy</option>
                    <option value="Strategic HR Business Partner">Strategic HR Business Partner</option>
                    <option value="Program & Ops Leadership">Program & Ops Leadership</option>
                </select>

                <input name="Divice" type="hidden" value="<?php echo $divice; ?>" />
                <input name="PageName" type="hidden" value="iframe-link" />
                <input type="hidden" name="latitude" value="">
                <input type="hidden" name="longitude" value="">

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                    <small class="text-dark" style="font-size:7px;">
                        I authorize mitonlineindia representative to contact me, this will override DND/NDNC registry.
                    </small>
                </div>

                <div class="form-group">
                    <input type="hidden" name="submitthirdcontact" value="submitthirdcontact" />
                    <button type="button" id="submitbtnsticky"
                        class="btn-common w-100"
                        onClick="validate('contactform')">
                        Register Now
                    </button>
                </div>

            </form>
        </div>
    </div>

    <!-- Auto resize iframe height on Domain B (WordPress) -->
    <script>
        function sendHeight() {
            var height = document.body.scrollHeight;
            window.parent.postMessage({ iframeHeight: height }, '*');
        }
        window.onload = sendHeight;
        window.onresize = sendHeight;
    </script>

</body>

</html>