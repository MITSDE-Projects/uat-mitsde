<footer class="footer mt-4">
    <div class="container">
        <div class="row res-row">

            <div class="col-md-12 col-lg-3">
                <div class="logo-img">


                    <a href="https://mitsde.com/index.php">
                        <img src="../assets/images/new/logo-mit-school-of-distance-education.png" width="auto"
                            height="auto" class="img-fluid" alt="logo mit school of distance education"
                            style="margin-left: -28px;" />
                    </a>

                </div>
                <p class="mt-4">MITSDE is a solution-oriented, skill-focused wing of MIT, Pune engaged in imparting
                    high-end
                    technical training.</p>


                <ul class="socials social-footer mt-4">
                    <a class="socials-links" href="https://www.facebook.com/MITPuneDistanceEducationOnline"
                        target="_black"><i class="mtsk-facebook" style="color: #078aed"></i></a>
                    <a class="socials-links" href="https://www.instagram.com/mitdistanceeducation/"
                        style="color: #ce2778" target="_black"><i class="mtsk-instagram"></i></a>
                    <a class="socials-links" href="https://www.linkedin.com/school/mitsde/" style="color: #2967d1;"
                        target="_black"><i class="mtsk-linkedIn"></i>
                    </a>
                    <a class="socials-links" href="https://www.youtube.com/@MITSDEPune" style="color: #2967d1;"
                        target="_black"><i class="#"><i class="fa-brands fa-youtube fa-lg" style="color: red;"></i></i>
                    </a>



                </ul>


                <div class="mt-4">
                    <a href="https://elibrary.mitsde.com/" target="_blank" class="btn btn-primary mit-button"
                        style="background: #F47521 !important; color: #fff !important; padding: 10px !important">ENROLLED
                        STUDENT SUPPORT</a>
                </div>




            </div>
            <div class="col-md-12 col-lg-3 courses-list">

                <div class="row d-flex justify-content-center">

                    <div class="col-md-6 col-6 pink">
                        <h2>Links</h2>
                        <ul>
                            <li><a class="dropdown-item" href="../contact-us.php" target="_blank">Contact</a></li>

                            <li><a class="dropdown-item" href="https://blog.mitsde.com/" target="_blank">Blog</a>
                            </li>
                            <li><a class="dropdown-item" href="../careers.php" target="_blank">Careers</a></li>
                            <li><a class="dropdown-item" href="../application-process.php"
                                    target="_blank">Admissions</a>
                            </li>
                            <li> <a class="dropdown-item" href="../placement.php" target="_blank">Placement</a></li>
                            <li><a class="dropdown-item" href="../recognition-approval.php" target="_blank">Recognition
                                    &
                                    Approval
                                </a></li>
                            <li><a class="dropdown-item" href="../mandatory-disclosure.php" target="_blank">Mandatory
                                    Disclosure</a></li>
                            <li><a class="dropdown-item" href="https://myaccount.mitsde.com/" target="_blank">My
                                    Account</a></li>
                            <li><a class="dropdown-item" href="../refer-friend.php" target="_blank">Refer a
                                    Friend</a>
                            </li>
                            <li><a class="dropdown-item" href="../feedback.php" target="_blank">Feedback</a></li>
                            <li><a class="dropdown-item" href="../read-more.php" target="_blank">Read More</a></li>
                            <li><a class="dropdown-item" href="../about-us.php" target="_blank">About Us</a></li>
                            <li><a class="dropdown-item" href="../hire-from-mitsde" target="_blank">Hire From
                                    Mitsde</a>
                            </li>




                        </ul>

                    </div>


                </div>

            </div>
            <div class="col-md-12 col-lg-3 courses-list">
                <div class="cc-list">
                    <h2>Contact Info</h2>
                    <div class="cc-details mail-details">
                        <span class="mtsk-mail"></span>

                        <a href="mailto:admissions@mitsde.com"
                            style="text-decoration: none; color: black;">admissions@mitsde.com</a>

                    </div>
                    <div class="cc-details mt-3">
                        <span class="mtsk-phone">
                            <a href="tel:+9112207207" style="text-decoration: none; color: black;">9112-207-207</a>


                        </span>




                    </div>
                    <div class="cc-details mt-3">
                        <span class="mtsk-location"></span>
                        <p>MIT Alandi Campus, Moshi-Alandi Road, Opposite to Gajanan Maharaj Sansthan Alandi Pune,
                            Maharashtra 412105</p>
                    </div>
                </div>
                <div class="cc-list time-list">
                    <h2>Opening Hours</h2>
                    <div class="cc-details">
                        <span class="mtsk-time"></span>
                        <p>Mon - Fri : 9.30 am - 05.30 pm</p>
                    </div>
                </div>
            </div>

            <?php

$tablet_browser = 0;
$mobile_browser = 0;
 
if (preg_match('/(tablet|ipad|playbook)|(android(?!.*(mobi|opera mini)))/i', strtolower($_SERVER['HTTP_USER_AGENT']))) {
    $tablet_browser++;
}
 
if (preg_match('/(up.browser|up.link|mmp|symbian|smartphone|midp|wap|phone|android|iemobile)/i', strtolower($_SERVER['HTTP_USER_AGENT']))) {
    $mobile_browser++;
}
 
if ((strpos(strtolower($_SERVER['HTTP_ACCEPT']),'application/vnd.wap.xhtml+xml') > 0) or ((isset($_SERVER['HTTP_X_WAP_PROFILE']) or isset($_SERVER['HTTP_PROFILE'])))) {
    $mobile_browser++;
}
 
$mobile_ua = strtolower(substr($_SERVER['HTTP_USER_AGENT'], 0, 4));
$mobile_agents = array(
    'w3c ','acs-','alav','alca','amoi','audi','avan','benq','bird','blac',
    'blaz','brew','cell','cldc','cmd-','dang','doco','eric','hipt','inno',
    'ipaq','java','jigs','kddi','keji','leno','lg-c','lg-d','lg-g','lge-',
    'maui','maxo','midp','mits','mmef','mobi','mot-','moto','mwbp','nec-',
    'newt','noki','palm','pana','pant','phil','play','port','prox',
    'qwap','sage','sams','sany','sch-','sec-','send','seri','sgh-','shar',
    'sie-','siem','smal','smar','sony','sph-','symb','t-mo','teli','tim-',
    'tosh','tsm-','upg1','upsi','vk-v','voda','wap-','wapa','wapi','wapp',
    'wapr','webc','winw','winw','xda ','xda-');
 
if (in_array($mobile_ua,$mobile_agents)) {
    $mobile_browser++;
}
 
if (strpos(strtolower($_SERVER['HTTP_USER_AGENT']),'opera mini') > 0) {
    $mobile_browser++;
    //Check for tablets on opera mini alternative headers
    $stock_ua = strtolower(isset($_SERVER['HTTP_X_OPERAMINI_PHONE_UA'])?$_SERVER['HTTP_X_OPERAMINI_PHONE_UA']:(isset($_SERVER['HTTP_DEVICE_STOCK_UA'])?$_SERVER['HTTP_DEVICE_STOCK_UA']:''));
    if (preg_match('/(tablet|ipad|playbook)|(android(?!.*mobile))/i', $stock_ua)) {
      $tablet_browser++;
    }
}

if ($tablet_browser > 0) {
   // do something for tablet devices
  // print 'is tablet';
     $divice="tablet";
}
else if ($mobile_browser > 0) {
   // do something for mobile devices
 //  print 'is mobile';
   
   $divice="mobile";
}
else {
   // do something for everything else
 //  print 'is desktop';
   $divice="desktop";
}   
/* if(isset($_POST['submitbtn']))
 {
    $first_name=$_POST['first_name3'];
	$last_name=$_POST['last_name'];
	$emaiid=$_POST['email3'];
	
 }*/
 $pagename=(isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
?>
<script type="text/javascript">
        
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(showPosition,showError);
            }
        

        function showPosition(Position) {
            document.querySelector('.myFormF input[name="latitude"]').value = Position.coords.latitude;
            document.querySelector('.myFormF input[name="longitude"]').value = Position.coords.longitude;
        }
        function showError(error){
            switch(error.code){
                case error.PERMISSION_DENIED:
                    //alert("ERROR");
                   // location.reload();
                    break;
            }
        }
        
    </script>
<div class="col-md-12 col-lg-3 bg-dark pt-3 pb-3 rounded " style="height: max-content;">
    <h3 class="text-white">Get in touch </h3>



    <form action="../thankyou.php" method="post" class="reservation-form mt-20 myFormF" accept-charset="utf-8"
        name="menuContactform" id="menuContactform" novalidate="novalidate">
        <input type="hidden" name="csrf_test_name" value="e678298614a47d7e40efe0ccaf02b49c" />
        <input type="hidden" id="product_id3" name="product_id3" value="0" />
        <!-- <input type="hidden" id="product_name3" name="product_name3" value="" /> -->
         <input type="text" name="website" style="display:none">
        <input type="hidden" name="request_type3" value="Enquiry" />

        <div class="mb-3">

            <input name="first_name3" type="text" class="form-control" value="First Name*"
                onBlur="javascript:addDefault(this,'menuContactform')" onFocus="javascript:removeDefault(this)"
                validate="Required|First Name*" />
        </div>
        <div class="mb-3">

            <input name="email3" type="text" class="form-control" value="Email*"
                onBlur="javascript:addDefault(this,'menuContactform')" onFocus="javascript:removeDefault(this)"
                validate="Email|Email*" />
        </div>
        <div class="mb-3">

            <input name="MobileNumber" class="form-control" type="text" pattern="[0-9]" value="MobileNumber*"
                onBlur="javascript:addDefault(this,'menuContactform')" onFocus="javascript:removeDefault(this)"
                validate="Required|Phone|Phone*" />
        </div>


        <select name="state" class="form-select form-control   mb-3" id="state"
            onBlur="javascript:addDefault(this,'menuContactform')" onFocus="javascript:removeDefault(this)"
            validate="Required|State|State*">

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

        <select name="HQ" id="HQ" class="form-select form-control mb-4"
            onBlur="javascript:addDefault(this,'menuContactform')" onFocus="javascript:removeDefault(this)"
            validate="Required|HQ*">

            <option value="" readonly>Select Highest Qualification</option>
            <option value="graduation">Graduation</option>
            <option value="post graduation">Post Graduation</option>
            <option value="Diploma">Diploma</option>
        </select>
                      <input name="Divice" type="hidden" value="<?php echo $divice; ?>"  />
					   <input name="PageName" type="hidden" value="<?php echo $pagename; ?>"  />
                       <input type="hidden" name="latitude" value="">
                       <input type="hidden" name="longitude" value="">
        <!--<input type="hidden" id="online-ui-ux-lacknow" name="online-ui-ux-lacknow" value="online-ui-ux-lacknow" />-->

        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>

            <small class="text-white" style="font-size: 11px; text-align-last: center;">&nbsp;I authorize MIT-SDE
                representative to contact &nbsp;&nbsp;&nbsp;me,this will override DND/NDNC registry.</small>
        </div>

        <div class="form-group ">
            <input type="hidden" name="submitthirdcontact" value="submitthirdcontact" />
            <button type="button" id="submitbtn1" class="btn btn-primary mit-button mit-footer btn-ripple w-100 "
                onClick="validate('menuContactform')">
                Register Now
            </button>
        </div>


    </form>

</div>
</div>
            <?php //  include "footer-common-bottom-form.php" ?>
            <hr>
            <div class="row res-row mt-5 me-auto">
                <div class="col-md-12 col-lg-5 courses-list">
                    <h2>PGDM Specialization</h2>
                    <!-- hero 16  -->
                    <ul class="hero16">
                        <li><a class="dropdown-item" href="../pg-diploma-in-project-management">PGDM in Project
                                Management
                            </a>
                        </li>
                        <li><a class="dropdown-item" href="../pg-diploma-in-operations-management">PGDM in
                                Operations
                                Management</a></li>

                        <li><a class="dropdown-item" href="../pg-diploma-in-human-resource-management">PGDM in Human
                                Resource
                                Management</a></li>
                        <li><a class="dropdown-item" href="../pg-diploma-in-information-technology">PGDM in
                                Information
                                Technology</a></li>
                        <li><a class="dropdown-item" href="../pg-diploma-in-marketing-management">PGDM in Marketing
                                Management</a></li>
                        <li><a class="dropdown-item" href="../pg-diploma-in-finance-management">PGDM in Finance
                                Management</a>
                        </li>
                        <li><a class="dropdown-item" href="../pg-diploma-in-supply-chain-management">PGDM in
                                Logistics
                                and
                                Supply
                                Chain
                                Management</a></li>
                        <li><a class="dropdown-item" href="../pg-diploma-in-material-management">PGDM in Material
                                Management</a></li>
                        <li><a class="dropdown-item" href="../pg-diploma-in-banking-finance">PGDM in Banking &
                                Financial Services</a></li>
                        <li><a class="dropdown-item" href="../pg-diploma-in-construction-and-project-management">PGDM
                                in
                                Construction And
                                Project Management</a></li>
                    </ul>
                    <hr>
                    <div class="cc-list">
                        <h2>PGDM Courses in Lucknow</h2>
                        <ul>

                            <li>

                                <a class="dropdown-item" href="../online-pgdm-colleges-in-lucknow" target="_blank">PGDM
                                    Courses in Lucknow</a>

                            </li>

                            <li>

                                <a class="dropdown-item" href="../online-ui-ux-design-courses-in-lucknow"
                                    target="_blank">UI
                                    UX Course in Lucknow</a>

                            </li>
                            <li>

                                <a class="dropdown-item" href="../online-ai-digital-marketing-courses-in-lucknow"
                                    target="_blank">AI Digital Marketing Courses in Lucknow</a>

                            </li>
                        </ul>


                    </div>
                    <hr>



                </div>


                <div class="col-md-12 col-lg-4  courses-list">
                    <div class="cc-list">
                        <h2>Our Programs</h2>
                        <ul>
                            <!-- <li><a class="dropdown-item" href="pgdm-mba-dual-degree-program">Dual Degree - PGDM And EMBA</a></li> -->
                            <!-- <li><a class="dropdown-item" href="executive-mba">Executive MBA</a></li> -->
                            <li><a class="dropdown-item" href="../post-graduate-certificate-in-management">Post
                                    Graduate
                                    Certificate in
                                    Management</a></li>
                            <li><a class="dropdown-item" href="../post-graduate-diploma-in-management-executive">Post
                                    Graduate Diploma in Management
                                    (Executive)</a></li>
                            <li> <a class="dropdown-item" href="../post-graduate-diploma-in-management">Post
                                    Graduate
                                    Diploma in
                                    Management</a></li>
                            <li><a class="dropdown-item" href="../post-graduate-diploma-in-business-administration">Post
                                    Graduate Diploma in Business
                                    Administration</a></li>
                            <li><a class="dropdown-item" href="#">Career Accelerator
                                    Programs</a></li>

                        </ul>


                    </div>
                    <hr>
                    <div class="cc-list">
                        <h2>PGDM Courses in Bangalore</h2>
                        <ul>

                            <li>

                                <a class="dropdown-item" href="../online-pgdm-colleges-in-bangalore"
                                    target="_blank">PGDM
                                    Courses in Bangalore</a>

                            </li>

                            <li>

                                <a class="dropdown-item" href="../online-ui-ux-design-courses-in-bangalore"
                                    target="_blank">UI
                                    UX Course in Bangalore</a>

                            </li>
                            <li>

                                <a class="dropdown-item" href="../online-ai-digital-marketing-courses-in-bangalore"
                                    target="_blank">AI Digital Marketing Courses in Bangalore</a>

                            </li>
                        </ul>



                    </div>
                    <hr>
                    <div class="cc-list">
                        <h2>PGDM Courses in Kolkata</h2>
                        <ul>

                            <li>

                                <a class="dropdown-item" href="../online-pgdm-colleges-in-kolkata" target="_blank">PGDM
                                    Courses in Kolkata</a>

                            </li>
                            <li>

                                <a class="dropdown-item" href="../online-ui-ux-design-courses-in-kolkata"
                                    target="_blank">UI
                                    UX Course in Kolkata</a>

                            </li>
                            <li>

                                <a class="dropdown-item" href="../online-ai-digital-marketing-courses-in-kolkata"
                                    target="_blank">AI Digital Marketing Courses in Kolkata</a>

                            </li>
                        </ul>


                    </div>
                    <hr>

                </div>
                <div class="col-md-12 col-lg-3 courses-list">
                    <div class="cc-list">
                        <h2>Career Accelerator Programs</h2>
                        <ul>

                            <li><a class="dropdown-item" href="../power-bi-certification">SQL Power Bi
                                    Certification</a></li>
                            <li><a class="dropdown-item" href="../advanced-certificate-in-ui-ux">Advanced
                                    Certificate
                                    In UI
                                    UX</a></li>

                            <li><a class="dropdown-item" href="../ai-in-digital-marketing">AI in Digital
                                    Marketing</a>
                            </li>
                            <!-- <li><a class="dropdown-item" href="ai-in-machine-learning">AI and Machine Learning</a></li> -->
                            <!-- <li><a class="dropdown-item" href="data-science">Data Science</a></li> -->
                        </ul>


                    </div>
                    <hr>
                    <div class="cc-list ">
                        <h2>PGDM in Delhi</h2>
                        <ul>
                            <li>

                                <a class="dropdown-item" href="../online-pgdm-colleges-in-delhi-ncr"
                                    target="_blank">PGDM
                                    Courses in Delhi</a>

                            </li>
                            <li>

                                <a class="dropdown-item" href="../online-ui-ux-design-courses-in-delhi-ncr"
                                    target="_blank">UI
                                    UX Course in Delhi</a>

                            </li>









                            <li>


                                <!-- <a href="https://mitsde.com/findRM" target="_blank">Find RM</a> -->
                                <a class="dropdown-item" href="../online-ai-digital-marketing-courses-in-delhi-ncr"
                                    target="_blank">AI Digital Marketing Courses in Delhi</a>

                            </li>

                        </ul>


                    </div>
                    <hr>
                    <div class="cc-list">
                        <h2>PGDM Courses in Jaipur</h2>
                        <ul>

                            <li>

                                <a class="dropdown-item" href="../online-pgdm-colleges-in-jaipur">PGDM Courses in
                                    Jaipur</a>

                            </li>
                            <li><a class="dropdown-item" href="../online-ui-ux-design-courses-in-jaipur">UI UX
                                    Course
                                    in
                                    Jaipur</a></li>
                            <li><a class="dropdown-item" href="../online-ai-digital-marketing-courses-in-jaipur">AI
                                    Digital
                                    Marketing Courses in Jaipur</a></li>
                        </ul>


                    </div>
                    <hr>

                </div>

            </div>
            <div class="bottom-footer">
                <p class="right-reserved">© Copyright 2025. All Rights Reserved by MIT School of Distance Education
                </p>
                <div class="terms-list">
                    <ul>
                        <li><a href="../privacy-policy.php">Privacy Policy</a></li>
                        <li><a href="../terms-use.php">Terms of Use</a></li>
                        <li><a href="#">Support</a></li>
                    </ul>

                </div>
            </div>
        </div>
</footer>


<a href="tel:9112-207-207" class="float">

    <div class="d-flex justify-content-center align-items-center mt-3 "><span class="mtsk-phone fs-3"></span></div>

</a>





<div class="modal enquiry fade" id="enquiryModal-download-form" tabindex="-1" aria-labelledby="enquiryModalLabel"
    aria-hidden="true">
    
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
                    <img src="../assets/images/enquirey.png" class="img-fluid" title="PGDM Enquire Now" alt="PGDM Enquire Now">
                </div>
                <div class="col-md-12 col-lg-7">
                    <form action="../DownloadBrochureLink.php" class="myFormP" method="post" name="menuContactformone"
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
</div>

<div class="modal enquiry fade" id="enquiryModal" tabindex="-1" aria-labelledby="enquiryModalLabel" aria-hidden="true">
    <?php include "../popup-form.php" ?>
</div>

<?php  //include "common-toll-free-pop-up-image.php" ?>






<!-- popup form end  -->


<!-- popup form end  -->

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 col-sm-12 col-12">
            <button type="button" class="btn btn-primary popup-btn mit-button" data-bs-toggle="modal"
                data-bs-target="#enquiryModal-download-form">Quick Contact
            </button>

        </div>

    </div>
</div>