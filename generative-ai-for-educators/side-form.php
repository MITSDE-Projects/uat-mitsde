<!DOCTYPE html>

<html lang="en">



<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>

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
    $pagename = basename($_SERVER['PHP_SELF'])
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
    <style>
        /* Slide-in from right */



        .enquire-now-btn {

            top: 60%;

            bottom: 0;

            position: fixed;

            right: -40px;

            z-index: 1000;

            transform: rotate(-90deg);

            background-color: red;

            padding: 10px 20px 35px;

            height: 0px;

            background-color: #f47521;

            color: #fff;

        }



        .enquire-now-btn:hover {

            background-color: #000;

            color: white;

        }



        .modal-dialog-right {

            position: fixed;

            top: 25%;

            right: 0;

            margin: 0;
            margin-left: 10px;

            margin-bottom: 10px;



            height: 100%;

            max-width: 300px;

            width: 100%;

        }



        .modal-dialog-slide {

            transform: translateX(100%);

            transition: transform 0.3s ease-out;

        }



        .modal.fade.show .modal-dialog-slide {

            transform: translateX(0);

        }



        /* Remove background click close (optional) */

        .modal-backdrop {

            background-color: rgba(0, 0, 0, 0.5);

        }



        .submitbtn {

            width: 100%;

        }
    </style>

</head>



<body>



    <a href="#" data-bs-toggle="modal" data-bs-target="#rightSideForm" class="btn btn-brand rounded-0 enquire-now-btn">

        Enquire Now

    </a>





    <div class="modal fade" id="rightSideForm" tabindex="-1" aria-labelledby="rightSideFormLabel" aria-hidden="true">

        <div class="modal-dialog modal-dialog-slide modal-dialog-right">

            <div class="modal-content">

                <div class="modal-body">

                    <!-- Your form starts here -->

                    <form action="thankyou.php" method="post" class="reservation-form" accept-charset="utf-8"
                        name="menuContactformSticky" id="menuContactformSticky" novalidate="novalidate">
                        <input type="hidden" name="csrf_test_name" value="e678298614a47d7e40efe0ccaf02b49c" />
                        <input type="hidden" id="product_id3" name="product_id3" value="0" />
                        <input type="hidden" id="product_name3" name="product_name3" value="" />
                        <input type="hidden" name="request_type3" value="Enquiry" />
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group " style="margin-bottom: 5px;">

                                    <input name="first_name3" type="text" class="form-control" value="Name*"
                                        onBlur="javascript:addDefault(this,'menuContactformSticky')"
                                        onFocus="javascript:removeDefault(this)" validate="Required|First Name*" />
                                </div>
                            </div>

                            <!--<div class="col-sm-12">
                                <div class="form-group " style="margin-bottom: 5px;">
                     
                      <input name="last_name" type="text" class="form-control"  value="Last Name*"  onBlur="javascript:addDefault(this,'menuContactformSticky')" onFocus="javascript:removeDefault(this)" validate="Required|Last Name*" />
                    </div>
                        <div class="form-group mb-20">
                          <input name="" type="text" class="form-control"  value="*" onBlur="javascript:addDefault(this,'menuContactformSticky')" onFocus="javascript:removeDefault(this)"  validate="Required|Name*" />
                        </div>
                      </div>-->


                            <div class="col-sm-12">
                                <div class="form-group " style="margin-bottom: 5px;">
                                    <input name="email3" type="text" class="form-control" value="Email*"
                                        onBlur="javascript:addDefault(this,'menuContactformSticky')"
                                        onFocus="javascript:removeDefault(this)" validate="Email|Email*" />
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group " style="margin-bottom: 5px;">
                                    <input name="mobile3" id="mobileInput" class="form-control" type="text"
                                        pattern="[0-9]" value="Mobile*"
                                        onBlur="javascript:addDefault(this,'menuContactformSticky')"
                                        onFocus="javascript:removeDefault(this)" validate="Required|Phone|Phone*" />

                                </div>
                            </div>

                            <div class="col-sm-12">
                                <input type="hidden" name="scourse" class="form-control mb-1" validate="Required"
                                    onChange="javascript:addDefault(this,'menuContactform')"
                                    onFocus="javascript:addDefault(this,'menuContactform')" value="Not Known">
                                <input type="hidden" name="specialization" class="form-control mb-1 "
                                    validate="Required" onChange="javascript:addDefault(this,'menuContactform')"
                                    onFocus="javascript:addDefault(this,'menuContactform')" value="Not Known">


                                <select name="state" id="state" class="form-control"
                                    onBlur="javascript:addDefault(this,'menuContactformSticky')"
                                    onFocus="javascript:removeDefault(this)" validate="Required|state*"
                                    style="margin-bottom: 5px;">
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

                                <select name="Textb1" id="Textb1" class="form-control"
                                    onBlur="javascript:addDefault(this,'menuContactformSticky')"
                                    onFocus="javascript:removeDefault(this)" validate="Required|HQ*">
                                    <option value="" readonly>Select Highest Qualification</option>
                                    <!--<option value="12th">12th</option>-->
                                    <option value="Graduate">Graduate</option>
                                    <option value="post graduate">Post Graduate</option>
                                    <option value="PHD">PHD</option>
                                    <!--<option value="other">Other</option>-->
                                </select>

                            </div>







                            <input name="vendercode" type="hidden" value="Paid - Google (DS)" />
                            <input name="getsourcepath" type="hidden" value="admissiion-mitsde" />
                            <input name="FormName" type="hidden" value="Quick Contact Form" />
                            <input name="Divice" type="hidden" value="<?php echo $divice; ?>" />
                            <input name="PageName" type="hidden" value="<?php echo $pagename; ?>" />
                            <input name="source" type="hidden" value="<?php echo $utm_source; ?>" />

                            <input name="medium" type="hidden" value="<?php echo $utm_medium; ?>" />
                            <input name="campaign" type="hidden" value="<?php echo $utm_campaign; ?>" />
                            <input name="sourcepath" type="hidden" value="<?php echo $url_source_pathe; ?>" />

                            <input type="hidden" name="latitude" id="latitude1" value="">
                            <input type="hidden" name="longitude" id="longitude1" value="">
                            <div class="col-sm-12">
                                <div class="form-group " style="margin-bottom: 5px;">
                                    <input id="check-box" name="Authorize" checked="checked" disabled="disabled"
                                        type="checkbox" onBlur="javascript:addDefault(this,'menuContactformSticky')"
                                        onFocus="javascript:removeDefault(this)" /><a><span
                                            style="font-size:12px; margin-left: 5px;">I authorize MIT-SDE representative
                                            to contact me, this
                                            will override
                                            DND/NDNC registry </span></a>

                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="hidden" name="submitthirdcontact" value="submitthirdcontact" />
                                    <input type="button" id="submitbtnsticky" class="btn register-btn" name="submitbtn"
                                        value="SUBMIT"
                                        onClick="validate('menuContactformSticky'); gtag_report_conversion();"
                                        class="submitbtn btn btn-gray btn-block " />

                                </div>
                            </div>
                        </div>
                    </form>

                    <!-- Your form ends here -->

                </div>

            </div>

        </div>

    </div>







</body>



</html>