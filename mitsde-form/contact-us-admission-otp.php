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
    'w3c ', 'acs-', 'alav', 'alca', 'amoi', 'audi', 'avan', 'benq', 'bird', 'blac',
    'blaz', 'brew', 'cell', 'cldc', 'cmd-', 'dang', 'doco', 'eric', 'hipt', 'inno',
    'ipaq', 'java', 'jigs', 'kddi', 'keji', 'leno', 'lg-c', 'lg-d', 'lg-g', 'lge-',
    'maui', 'maxo', 'midp', 'mits', 'mmef', 'mobi', 'mot-', 'moto', 'mwbp', 'nec-',
    'newt', 'noki', 'palm', 'pana', 'pant', 'phil', 'play', 'port', 'prox', 'qwap',
    'sage', 'sams', 'sany', 'sch-', 'sec-', 'send', 'seri', 'sgh-', 'shar', 'sie-',
    'siem', 'smal', 'smar', 'sony', 'sph-', 'symb', 't-mo', 'teli', 'tim-', 'tosh',
    'tsm-', 'upg1', 'upsi', 'vk-v', 'voda', 'wap-', 'wapa', 'wapi', 'wapp', 'wapr',
    'webc', 'winw', 'winw', 'xda ', 'xda-'
);

if (in_array($mobile_ua, $mobile_agents)) {
    $mobile_browser++;
}

if (strpos(strtolower($_SERVER['HTTP_USER_AGENT']), 'opera mini') > 0) {
    $mobile_browser++;
    $stock_ua = strtolower(isset($_SERVER['HTTP_X_OPERAMINI_PHONE_UA']) ? $_SERVER['HTTP_X_OPERAMINI_PHONE_UA'] : (isset($_SERVER['HTTP_DEVICE_STOCK_UA']) ? $_SERVER['HTTP_DEVICE_STOCK_UA'] : ''));
    if (preg_match('/(tablet|ipad|playbook)|(android(?!.*mobile))/i', $stock_ua)) {
        $tablet_browser++;
    }
}

if ($tablet_browser > 0) {
    $divice = "tablet";
} else if ($mobile_browser > 0) {
    $divice = "mobile";
} else {
    $divice = "desktop";
}

$pagename = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://uat.mitsde.com/assets/css/style.css">
    <script src="https://uat.mitsde.com/assets/js/api/jquery-1.10.2.min.js"></script>
    <script src="https://uat.mitsde.com/mitsde-form/validation.js"></script>

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
                    break;
            }
        }
    </script>

    <style>
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
            color: #000000;
            background: #FDF7F2;
            border-radius: 18px;
            border: 1px solid #CCC;
            padding: 28px;
        }
        .lead-form .form-control {
            border-radius: 999px;
            padding: 5px 15px;
        }
        .lead-form .form-check {
            line-height: 10px;
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

        /* ── OTP styles ── */
        .mobile-otp-wrap {
            position: relative;
        }
        .mobile-otp-wrap #MobileNumber {
            padding-right: 88px;
        }
        #sendOtpBtn {
            position: absolute;
            top: 50%;
            right: 4px;
            transform: translateY(-50%);
            font-size: 11px;
            padding: 3px 10px;
            border-radius: 999px;
            border: 1px solid #fd6500;
            background: #fff;
            color: #fd6500;
            cursor: pointer;
            white-space: nowrap;
            line-height: 1.4;
            z-index: 2;
        }
        #sendOtpBtn:disabled { opacity: .5; cursor: not-allowed; }
        #otpSection { display: none; margin-bottom: 4px; }
        #otpMsg { color: red; font-weight: bold; font-size: 0.85em; margin-top: 2px; }
        #otpMsg.ok  { color: #1a7a1a; }
        #otpMsg.err { color: #ff1900; }
    </style>
</head>

<body>
    <div class="d-flex justify-content-end">
        <div class="lead-form">
            <h6 class="mb-3 fw-bold">Fill out your details for free career counseling</h6>
            <form action="https://uat.mitsde.com/mitsde-form/thankyou.php" method="post"
                class="reservation-form mt-20 myFormH w-100" accept-charset="utf-8" name="contactformAddmissionotp" id="contactformAddmissionotp"
                novalidate="novalidate">

                <input type="hidden" name="csrf_test_name" value="e678298614a47d7e40efe0ccaf02b49c" />
                <input type="hidden" id="product_id3" name="product_id3" value="0" />
                <input type="text" name="website" style="display:none">
                <input type="hidden" name="request_type3" value="Enquiry" />

                <div class="mb-1">
                    <input name="first_name3" type="text" class="form-control" value="First Name*"
                        onBlur="javascript:addDefault(this,'contactformAddmissionotp')" onFocus="javascript:removeDefault(this)"
                        validate="Required|First Name*" />
                </div>

                <div class="mb-1">
                    <input name="email3" type="text" class="form-control" value="Email*"
                        onBlur="javascript:addDefault(this,'contactformAddmissionotp')" onFocus="javascript:removeDefault(this)"
                        validate="Email|Email*" />
                </div>

                <!-- Mobile: Send OTP button inside the pill -->
                <div class="mb-1 mobile-otp-wrap">
                    <input name="MobileNumber" id="MobileNumber" class="form-control" type="tel" value="MobileNumber*"
                        onblur="addDefault(this,'contactformAddmissionotp')" onfocus="removeDefault(this)"
                        oninput="this.value = this.value.replace(/[^0-9]/g, '')" maxlength="10"
                        validate="Required|Phone|Phone*" />
                    <button type="button" id="sendOtpBtn">Send OTP</button>
                </div>

                <!-- OTP input row — hidden until Send OTP clicked -->
                <!-- maxlength="4" because MSG91 sends a 4-digit OTP -->
                <div id="otpSection">
                    <input type="text" id="otpInput" class="form-control" maxlength="4" inputmode="numeric"
                        placeholder="Enter 4-digit OTP" oninput="this.value=this.value.replace(/[^0-9]/g,'')"
                        style="margin-top:4px;" />
                    <div style="display:flex; align-items:center; gap:8px; margin-top:4px; padding-left:4px;">
                        <span id="otpTimer" style="font-size:11px; color:#666;"></span>
                        <span id="resendLink"
                            style="font-size:11px; color:#fd6500; cursor:pointer; text-decoration:underline; display:none;">Resend
                            OTP</span>
                        <button type="button" id="verifyOtpBtn"
                            style="font-size:11px; padding:2px 10px; border-radius:999px; border:1px solid #fd6500; background:#fd6500; color:#fff; cursor:pointer;">
                            Verify
                        </button>
                    </div>
                </div>
                <div id="otpMsg"></div>

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

                <input name="Divice" type="hidden" value="<?php echo $divice; ?>" />
                <input name="PageName" type="hidden" value="iframe-link" />
                <input type="hidden" name="latitude" value="">
                <input type="hidden" name="longitude" value="">

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                    <small class="text-dark" style="font-size:7px;">
                        I authorize MITSDE representative to contact me, this will override DND/NDNC registry.
                    </small>
                </div>

                <div class="form-group">
                    <input type="hidden" name="submitthirdcontact" value="submitthirdcontact" />
                    <button type="button" id="submitbtnsticky" class="btn-common w-100" onClick="submitWithOtpCheck()">
                        Register Now
                    </button>
                </div>

            </form>
        </div>
    </div>

    <!-- Auto resize iframe height -->
    <script>
        function sendHeight() {
            var height = document.body.scrollHeight;
            window.parent.postMessage({ iframeHeight: height }, '*');
        }
        window.onload = sendHeight;
        window.onresize = sendHeight;
    </script>

    <!-- OTP Logic -->
    <script>
        (function () {

            var OTP_HANDLER_URL = 'otp_handler.php';

            var isVerified  = false;
            var recordId    = null;   // opt_verification.id
            var otpToken    = null;   // security token

            var timerHandle = null;

            var $mobile     = document.getElementById('MobileNumber');
            var $sendBtn    = document.getElementById('sendOtpBtn');
            var $otpSection = document.getElementById('otpSection');
            var $otpInput   = document.getElementById('otpInput');
            var $verifyBtn  = document.getElementById('verifyOtpBtn');
            var $otpMsg     = document.getElementById('otpMsg');
            var $timerEl    = document.getElementById('otpTimer');
            var $resend     = document.getElementById('resendLink');

            function msg(text, isErr) {
                $otpMsg.textContent = text;
                $otpMsg.className = isErr ? 'err' : 'ok';
            }

            function startTimer() {
                clearInterval(timerHandle);
                $resend.style.display = 'none';
                var sec = 180; // 3 minutes — matches MSG91_OTP_EXPIRY
                $timerEl.textContent = fmt(sec);
                timerHandle = setInterval(function () {
                    sec--;
                    if (sec <= 0) {
                        clearInterval(timerHandle);
                        $timerEl.textContent = 'OTP expired.';
                        $resend.style.display = 'inline';
                    } else {
                        $timerEl.textContent = fmt(sec);
                    }
                    window.parent.postMessage({ iframeHeight: document.body.scrollHeight }, '*');
                }, 1000);
            }

            function fmt(s) {
                return Math.floor(s / 60) + ':' + ('0' + (s % 60)).slice(-2);
            }

            function doSend() {
                var mobile = $mobile.value.replace(/[^0-9]/g, '');
                if (!/^[6-9][0-9]{9}$/.test(mobile)) {
                    msg('Enter a valid 10-digit mobile number first.', true);
                    return;
                }

                $sendBtn.disabled = true;
                $sendBtn.textContent = '...';
                msg('', false);

                var fd = new FormData();
                fd.append('action',     'send_otp');
                fd.append('mobile',     mobile);
                // Pass form fields so they get stored in opt_verification
                fd.append('first_name', document.querySelector('[name="first_name3"]').value.replace('First Name*', '').trim());
                fd.append('email3', document.querySelector('[name="email3"]').value.replace('Email*', '').trim());
                fd.append('state',      document.getElementById('state').value);
                fd.append('hq',         document.getElementById('HQ').value);

                fetch(OTP_HANDLER_URL, { method: 'POST', body: fd })
                    .then(function (r) { return r.json(); })
                    .then(function (res) {
                        $sendBtn.disabled = false;
                        $sendBtn.textContent = 'Resend';

                        if (res.success) {
                            recordId   = res.record_id;
                            otpToken   = res.token;
                            $otpSection.style.display = 'block';
                            $otpInput.value = '';
                            $otpInput.focus();
                            startTimer();
                            msg('OTP sent to ' + mobile.replace(/(\d{2})\d{6}(\d{2})/, '$1xxxxxx$2') + '.', false);

                            // DEV: auto-fill OTP if returned (only in dev/fallback mode)
                            // Remove this block before going live
                            // if (res.dev_otp) {
                            //     $otpInput.value = res.dev_otp;
                            //     msg('[DEV] OTP auto-filled: ' + res.dev_otp, false);
                            // }

                            window.parent.postMessage({ iframeHeight: document.body.scrollHeight }, '*');
                        } else {
                            msg(res.message, true);
                        }
                    })
                    .catch(function () {
                        $sendBtn.disabled = false;
                        $sendBtn.textContent = 'Send OTP';
                        msg('Network error. Please try again.', true);
                    });
            }

            $sendBtn.addEventListener('click', doSend);
            $resend.addEventListener('click', doSend);

            $verifyBtn.addEventListener('click', function () {
                var otp    = $otpInput.value.trim();
                var mobile = $mobile.value.replace(/[^0-9]/g, '');

                // Validate: must be exactly 4 digits (MSG91 sends 4-digit OTP)
                if (otp.length !== 4) {
                    msg('Enter the 4-digit OTP.', true);
                    return;
                }

                $verifyBtn.disabled = true;
                $verifyBtn.textContent = '...';

                var fd = new FormData();
                fd.append('action',    'verify_otp');
                fd.append('mobile',    mobile);
                fd.append('otp',       otp);
                fd.append('record_id', recordId);
                fd.append('token',     otpToken);

                fetch(OTP_HANDLER_URL, { method: 'POST', body: fd })
                    .then(function (r) { return r.json(); })
                    .then(function (res) {
                        $verifyBtn.disabled = false;
                        $verifyBtn.textContent = 'Verify';

                        if (res.success && res.verified) {
                            isVerified = true;
                            clearInterval(timerHandle);
                            $otpSection.style.display = 'none';
                            $sendBtn.style.display = 'none';
                            $mobile.readOnly = true;
                            msg('✔ Mobile verified!', false);
                            window.parent.postMessage({ iframeHeight: document.body.scrollHeight }, '*');
                        } else {
                            msg(res.message, true);
                        }
                    })
                    .catch(function () {
                        $verifyBtn.disabled = false;
                        $verifyBtn.textContent = 'Verify';
                        msg('Network error. Please try again.', true);
                    });
            });

            window.submitWithOtpCheck = function () {
                if (!isVerified) {
                    msg('Please verify your mobile number via OTP before submitting.', true);
                    return;
                }
                validate('contactformAddmissionotp');
            };

        })();
    </script>

</body>

</html>