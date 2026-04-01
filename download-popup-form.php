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
    'newt', 'noki', 'palm', 'pana', 'pant', 'phil', 'play', 'port', 'prox',
    'qwap', 'sage', 'sams', 'sany', 'sch-', 'sec-', 'send', 'seri', 'sgh-', 'shar',
    'sie-', 'siem', 'smal', 'smar', 'sony', 'sph-', 'symb', 't-mo', 'teli', 'tim-',
    'tosh', 'tsm-', 'upg1', 'upsi', 'vk-v', 'voda', 'wap-', 'wapa', 'wapi', 'wapp',
    'wapr', 'webc', 'winw', 'winw', 'xda ', 'xda-');

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
    navigator.geolocation.getCurrentPosition(showPosition, showError);
}


function showPosition(Position) {
    document.querySelector('.myFormP input[name="latitude"]').value = Position.coords.latitude;
    document.querySelector('.myFormP input[name="longitude"]').value = Position.coords.longitude;
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
<div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
            <h2 class="modal-title fs-5" id="enquiryModal-download-form">Enquire Now <a href="tel:9112-207-207"
                    style="text-decoration: none; color: #F47521">+91
                    9112-2072-07</a></h2>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="col-md-12 col-lg-5 modal-img">
                    <img src="assets/images/enquirey.png" class="img-fluid" title="PGDM Enquire Now" alt="PGDM Enquire Now">
                </div>
                <div class="col-md-12 col-lg-7">
                    <form action="DownloadBrochureLink.php" class="myFormP" method="post" name="menuContactformone"
                        id="menuContactformone">

                        <input type="hidden" name="csrf_test_name" value="e678298614a47d7e40efe0ccaf02b49c" />
                        <input type="hidden" id="product_id3" name="product_id3" value="0" />
                        <!-- <input type="hidden" id="product_name3" name="product_name3" value="" /> -->
                        <input type="text" name="website" style="display:none">
                        <input type="hidden" name="request_type3" value="Enquiry" />

                        <div class="input-group mb-2 ">
                            <span class="input-group-text"><i class="mtsk-user"></i></span>
                            <input name="first_name3" type="text" class="form-control" value="First Name*"
                                onBlur="javascript:addDefault(this,'menuContactformone')"
                                onFocus="javascript:removeDefault(this)" validate="Required|First Name*" />
                        </div>



                        <div class="input-group mb-2 ">
                            <span class="input-group-text"><i class="mtsk-mail"></i></span>
                            <input name="email3" type="text" class="form-control" value="Email*"
                                onBlur="javascript:addDefault(this,'menuContactformone')"
                                onFocus="javascript:removeDefault(this)" validate="Email|Email*" />
                        </div>

                        <div class="input-group mb-2 ">
                            <span class="input-group-text"><i class="mtsk-phone"></i></span>
                            <input name="MobileNumber" class="form-control" type="text" pattern="[0-9]"
                                value="MobileNumber*" onBlur="javascript:addDefault(this,'menuContactformone')"
                                onFocus="javascript:removeDefault(this)" validate="Required|Phone|Phone*" />

                        </div>




                        <div class="input-group mb-2 con-form">
                            <span class="input-group-text"><i class="mtsk-cource"></i></span>

                            <select name="HQ" id="HQ" class="form-select form-control"
                                onBlur="javascript:addDefault(this,'menuContactformone')"
                                onFocus="javascript:removeDefault(this)" validate="Required|HQ|HQ*">

                                <option value="" readonly>Select Highest Qualification</option>
                                <option value="graduation">Graduation</option>
                                <option value="post graduation">Post Graduation</option>
                                <option value="Diploma">Diploma</option>
                            </select>
                        </div>
                        <div class="input-group mb-2 con-form">
                            <span class="input-group-text"><i class="mtsk-cource"></i></span>
                            <select name="state" class="form-select form-control  " id="state"
                                onBlur="javascript:addDefault(this,'menuContactformone')"
                                onFocus="javascript:removeDefault(this)" validate="Required|State|State*">
                                <option value>Select State</option>
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
                        </div>
                        <input name="Divice" type="hidden" value="<?php echo $divice; ?>" />
                        <input name="PageName" type="hidden" value="<?php echo $pagename; ?>" />
                        <input type="hidden" name="latitude" value="">
                        <input type="hidden" name="longitude" value="">
                        <div class="form-group mt-1">
                            <input type="hidden" name="submitthirdcontact" value="submitthirdcontact" />
                            <button type="button" id="submitbtn2"
                                class="btn btn-primary mit-button mit-footer btn-ripple w-100 "
                                onClick="validate('menuContactformone')">
                                Register Now
                            </button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>