<?php

$url = "https://elibrary.mitsde.com/api_insert.php";
$ch = curl_init();
/*curl_setopt($ch, CURLOPT_URL,$url);
curl_setopt($curl, CURLOPT_GET, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);*/

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);

$rusult = curl_exec($ch);
curl_close($ch);
$result = json_decode($rusult, true);

if ($result['status'] == 1) {
    $data = $result['data'];
    $lastdate = $result['data'][0]['lastdate'];
    $mitsde = $result['data'][0]['mitsde'];
} else {
    echo "no data";
}
?>

<meta name="robots" content="index, follow" />

<!-- dynamic code -->

<nav class="navbar navbar-expand-lg fixed-top navigation">

    <div class="container">
        <a class="navbar-brand" href="index"><img src="assets/images/new/logo-mit-school-of-distance-education.png"
                width="auto" height="auto" title="mit school of distance education logo"
                alt="MIT School of Distance Education Logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto">

                <!-- first start  -->

                <li class="nav-item dropdown firstNav">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">Program</a>
                    <ul class="dropdown-menu dropMenu" id="fixissue">

                        <li class="nav-item dropdown secondnav">
                            <a class="nav-link pe-4 text-nowrap" href="executive-mba" role="button">Executive MBA
                                (EMBA)</a>
                            <a class="dropdown-toggle dropdown-toggle-split nav-link" href="#" data-bs-toggle="dropdown"
                                aria-expanded="false"
                                style="position: absolute; right: 0; top: 0; height: 100%; width: 40px; text-align: center;">
                                <span class="visually-hidden">Toggle Dropdown</span>
                            </a>
                            <ul class="dropdown-menu secondDrop">
                                <li><a class="dropdown-item" href="executive-mba-finance-management"
                                        target="_blank">EMBA in Finance Management</a></li>
                                <li><a class="dropdown-item" href="executive-mba-human-resource-management">EMBA in HR
                                        Management</a></li>

                                <li><a class="dropdown-item" href="executive-mba-marketing">EMBA in Marketing
                                        Management</a></li>
                                <li><a class="dropdown-item" href="executive-mba-in-operations">EMBA in Operations
                                        Management</a></li>
                                <li><a class="dropdown-item" href="executive-mba-in-project-management">EMBA in Project
                                        Management</a></li>
                                <li><a class="dropdown-item" href="executive-mba-in-business-analytics-and-ai">EMBA in
                                        Business Analytics and AI</a></li>


                            </ul>
                        </li>

                        <li class="nav-item dropdown secondnav">
                            <a class="nav-link pe-4 text-nowrap"
                                href="post-graduate-diploma-in-management-executive">Post Graduate
                                Diploma in Management
                                (Executive)</a>
                            <a class="dropdown-toggle dropdown-toggle-split nav-link" href="#" data-bs-toggle="dropdown"
                                aria-expanded="false"
                                style="position: absolute; right: 0; top: 0; height: 100%; width: 40px; text-align: center;">
                                <span class="visually-hidden">Toggle Dropdown</span>
                            </a>
                            <ul class="dropdown-menu secondDrop" style="width: 320px;">
                                <li><a class="dropdown-item" href="digital-marketing-strategist">Chief Digital Marketing
                                        Strategist Program </a></li>
                                <li><a class="dropdown-item" href="pgdm-executive-in-modern-project-management">PGDM
                                        (Ex.) in Modern
                                        Project Management </a></li>
                                <li><a class="dropdown-item"
                                        href="pgdm-executive-in-technology-and-operations-management">PGDM
                                        (Ex.) in Technology & Operations </a></li>
                                <li><a class="dropdown-item" href="pgdm-executive-in-human-capital-management">PGDM
                                        (Ex.)
                                        in Human
                                        Capital Management</a>
                                </li>
                                <li><a class="dropdown-item" href="pgdm-executive-in-banking-financial-services">PGDM
                                        (Ex.)
                                        in Banking & Financial Services</a>
                                </li>
                                <li><a class="dropdown-item" href="pgdm-executive-in-finance-management">PGDM
                                        (Ex.)
                                        in Finance Management</a>
                                </li>

                                <li><a class="dropdown-item"
                                        href="pgdm-executive-in-strategic-marketing-management">PGDM (Ex) in
                                        Strategic Marketing Management</a></li>
                                <li><a class="dropdown-item" href="pgdm-executive-in-material-management">PGDM (Ex) in
                                        Material Management</a></li>
                                <li><a class="dropdown-item"
                                        href="pgdm-executive-in-global-logistics-and-supply-chain-management">PGDM
                                        (Ex.) in Global Logistics & Supply Chain</a></li>

                                <li><a class="dropdown-item"
                                        href="pgdm-executive-in-construction-and-project-management">PGDM (Ex.)
                                        in Construction and Project</a></li>



                            </ul>
                        </li>

                        <li class="nav-item dropdown secondnav">
                            <a class="nav-link pe-4 text-nowrap" href="post-graduate-diploma-in-management">Post
                                Graduate Diploma in
                                Management</a>
                            <a class="dropdown-toggle dropdown-toggle-split nav-link" href="#" data-bs-toggle="dropdown"
                                aria-expanded="false"
                                style="position: absolute; right: 0; top: 0; height: 100%; width: 40px; text-align: center;">
                                <span class="visually-hidden">Toggle Dropdown</span>
                            </a>
                            <ul class="dropdown-menu secondDrop" style="width: 320px;">
                                <li><a class="dropdown-item" href="pg-diploma-in-project-management">PGDM in Project
                                        Management </a>
                                </li>
                                <li><a class="dropdown-item" href="pg-diploma-in-operations-management">PGDM in
                                        Operations
                                        Management</a></li>

                                <li><a class="dropdown-item" href="pg-diploma-in-human-resource-management">PGDM in
                                        Human Resource
                                        Management</a></li>
                                <li><a class="dropdown-item" href="pg-diploma-in-information-technology">PGDM in
                                        Information
                                        Technology</a></li>
                                <li><a class="dropdown-item" href="pg-diploma-in-marketing-management">PGDM in Marketing
                                        Management</a></li>
                                <li><a class="dropdown-item" href="pg-diploma-in-finance-management">PGDM in Finance
                                        Management</a>
                                </li>
                                <li><a class="dropdown-item" href="pg-diploma-in-supply-chain-management">PGDM in
                                        Logistics and Supply
                                        Chain
                                        Management</a></li>
                                <li><a class="dropdown-item" href="pg-diploma-in-material-management">PGDM in Material
                                        Management</a></li>
                                <li><a class="dropdown-item" href="pg-diploma-in-banking-finance">PGDM in Banking &
                                        Financial Services</a></li>
                                <li><a class="dropdown-item"
                                        href="pg-diploma-in-construction-and-project-management">PGDM in
                                        Construction And
                                        Project Management</a></li>

                            </ul>
                        </li>

                        <!-- PGDM -->

                        <li class="nav-item dropdown secondnav">
                            <a class="nav-link pe-4 text-nowrap" href="post-graduate-certificate-in-management">Post
                                Graduate
                                Certificate in
                                Management</a>
                            <a class="dropdown-toggle dropdown-toggle-split nav-link" href="#" data-bs-toggle="dropdown"
                                aria-expanded="false"
                                style="position: absolute; right: 0; top: 0; height: 100%; width: 40px; text-align: center;">
                                <span class="visually-hidden">Toggle Dropdown</span>
                            </a>
                            <ul class="dropdown-menu secondDrop" style="width: 255px;">
                                <li><a class="dropdown-item" href="post-graduate-certificate-in-business-analytics">PGCM
                                        Business
                                        Analytics </a></li>
                                <li><a class="dropdown-item" href="post-graduate-cetificate-in-digital-marketing">PGCM
                                        Digital
                                        Marketing</a></li>



                            </ul>
                        </li>





                        <li class="nav-item dropdown secondnav">
                            <a class="nav-link pe-4 text-nowrap"
                                href="post-graduate-diploma-in-business-administration">Post
                                Graduate Diploma in Business
                                Administration</a>
                            <a class="dropdown-toggle dropdown-toggle-split nav-link" href="#" data-bs-toggle="dropdown"
                                aria-expanded="false"
                                style="position: absolute; right: 0; top: 0; height: 100%; width: 40px; text-align: center;">
                                <span class="visually-hidden">Toggle Dropdown</span>
                            </a>
                            <ul class="dropdown-menu secondDrop" style="width: 320px;">
                                <li><a class="dropdown-item" href="pgdba-in-operations-management">PGDBA in Operations
                                        Management</a></li>
                                <li><a class="dropdown-item" href="pgdba-in-finance">PGDBA in Finance Management</a>
                                </li>

                                <li><a class="dropdown-item" href="pgdba-in-human-resource-management">PGDBA in Human
                                        Resource
                                        Management</a></li>
                                <li><a class="dropdown-item" href="pgdba-in-information-technology">PGDBA in Information
                                        Technology</a></li>
                                <li><a class="dropdown-item" href="pgdba-in-marketing-management">PGDBA in Marketing
                                        Management</a></li>




                            </ul>
                        </li>

                        <!-- cap -->
                        <li class="nav-item dropdown secondnav">
                            <a class="nav-link pe-4 text-nowrap" href="#">Career Accelerator Program</a>
                            <a class="dropdown-toggle dropdown-toggle-split nav-link" href="#" data-bs-toggle="dropdown"
                                aria-expanded="false"
                                style="position: absolute; right: 0; top: 0; height: 100%; width: 40px; text-align: center;">
                                <span class="visually-hidden">Toggle Dropdown</span>
                            </a>
                            <ul class="dropdown-menu secondDrop" style="width: 255px;">
                                <li><a class="dropdown-item" href="power-bi-certification">SQL Power bi certification
                                    </a></li>
                                <li><a class="dropdown-item" href="gen-ai-for-educators">Gen AI for Educators
                                    </a></li>
                                <!-- <li><a class="dropdown-item" href="advanced-certificate-in-ui-ux">Advanced Certificate
                                        In UI
                                        UX</a></li> -->

                                <!-- <li><a class="dropdown-item" href="ai-in-digital-marketing">AI in Digital Marketing</a>
                                </li> -->
                                <!--<li><a class="dropdown-item" href="ai-in-machine-learning">AI and Machine Learning</a>
                                </li>

                                <li><a class="dropdown-item" href="data-science">Data Science</a></li>-->




                            </ul>
                        </li>
                        <!-- cap -->

                        <!-- certifications -->

                        <li class="nav-item dropdown secondnav">
                            <a class="nav-link pe-4 text-nowrap" href="#">Professional Certificate Programs</a>
                            <a class="dropdown-toggle dropdown-toggle-split nav-link" href="#" data-bs-toggle="dropdown"
                                aria-expanded="false"
                                style="position: absolute; right: 0; top: 0; height: 100%; width: 40px; text-align: center;">
                                <span class="visually-hidden">Toggle Dropdown</span>
                            </a>
                            <ul class="dropdown-menu secondDrop" style="width: 320px;">
                                <li><a class="dropdown-item" href="certification-in-project-management">Certification in
                                        Project Management</a></li>
                                <li><a class="dropdown-item" href="certification-in-marketing-management">Certification
                                        in Marketing Management</a></li>
                                <li><a class="dropdown-item"
                                        href="certification-in-human-resource-management">Certification in Human
                                        Resource Management</a>
                                </li>
                                <li><a class="dropdown-item" href="certification-in-operations-management">Certification
                                        in Operations Management</a>
                                </li>

                                <li><a class="dropdown-item" href="certification-in-material-management">Certification
                                        in Material Management</a></li>
                                <li><a class="dropdown-item"
                                        href="certification-in-supply-chain-management">Certification in Logistics
                                        and Supply Chain</a></li>

                                <li><a class="dropdown-item" href="certification-in-finance-management">Certification in
                                        Finance Management</a></li>

                            </ul>
                        </li>
                        <!-- certifications -->



                    </ul>
                </li>

                <!-- first end  -->

                <!-- second nav -->
                <li class="nav-item firstNav">
                    <a class="nav-link" style="width: max-content;" href="pgdm-executive-emba-dual-program">Dual
                        Program</a>
                </li>

                <!-- second nav  end-->

                <!-- second nav -->

                <li class="nav-item dropdown firstNav">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">Application</a>


                    <ul class="dropdown-menu dropMenu">
                        <li class="nav-item dropdown secondnav">
                            <a class="nav-link dropdown-toggle" href="javascript:void(0)" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">Knowledge Center</a>
                            <ul class="dropdown-menu secondDrop">
                                <!-- Newly Added Knowledge Center Pages -->
                                <li><a class="dropdown-item"
                                        href="/knowledge-center/mba-vs-pgdm-which-one-is-better-for-your-career"
                                        target="_blank">MBA vs PGDM</a></li>
                                <li><a class="dropdown-item" href="/knowledge-center/pgdm-for-career-switchers"
                                        target="_blank">Career Switch</a></li>
                                <li><a class="dropdown-item"
                                        href="/knowledge-center/pgdm-a-good-option-for-working-professionals"
                                        target="_blank">Working Professionals</a></li>
                                <li><a class="dropdown-item" href="/knowledge-center/scope-of-pgdm-in-india"
                                        target="_blank">Scope of PGDM</a></li>
                                <li><a class="dropdown-item"
                                        href="/knowledge-center/best-career-opportunities-after-completing-a-finance-course"
                                        target="_blank">Finance Careers</a></li>
                                <li><a class="dropdown-item"
                                        href="/knowledge-center/how-a-pgdm-in-marketing-shapes-your-career-trajectory"
                                        target="_blank">PGDM Marketing</a></li>
                                <li><a class="dropdown-item"
                                        href="/knowledge-center/jobs-after-pgdm-in-operations-management"
                                        target="_blank">PGDM Operations</a></li>
                            </ul>
                        </li>
                        <li><a class="dropdown-item" href="https://blog.mitsde.com/" target="_blank">Blog</a></li>
                        <li><a class="dropdown-item" href="application-process">Admission Process</a></li>

                        <li><a class="dropdown-item" href="faq">FAQs</a></li>
                        <li><a class="dropdown-item" href="refer-friend">Refer a Friend</a></li>
                        <li><a class="dropdown-item" href="download-brochure">Download Brochure</a></li>

                    </ul>

                </li>

                <!-- second nav  end-->

                <!-- third nav -->

                <li class="nav-item dropdown firstNav">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">Learner Assistance</a>
                    <ul class="dropdown-menu dropMenu">
                        <li class="nav-item dropdown secondnav">
                            <a class="nav-link dropdown-toggle" href="javascript:void(0)" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">Placement</a>
                            <ul class="dropdown-menu secondDrop">
                                <li><a class="dropdown-item" href="placement">Placement</a> </li>
                                <li><a class="dropdown-item" href="https://alumni.mitsde.com/"
                                        target="_blank">Alumni</a></li>


                            </ul>
                        </li>


                        <li><a class="dropdown-item" href="academic">Academic</a></li>

                        <li class="nav-item dropdown secondnav">
                            <a class="nav-link dropdown-toggle" href="javascript:void(0)" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">MIT office of career services</a>
                            <ul class="dropdown-menu secondDrop">
                                <li><a class="dropdown-item" href="mit-office-of-career-services">I’m a MITSDE
                                        Student</a> </li>
                                <li><a class="dropdown-item" href="mocs-for-external-learner">I’m a Non-MITSDE
                                        Student</a></li>
                                <li><a class="dropdown-item" href="student-mental-well-being-support">Mental Health
                                        Helpline</a></li>


                            </ul>
                        </li>

                        <!-- <li><a class="dropdown-item" href="mit-office-of-career-services">MIT office of career services
                            </a></li> -->
                        <li><a class="dropdown-item" href="chat-with-support">Student Support</a></li>

                        <li><a class="dropdown-item" href="learner-type-payment">Fee Payment</a></li>


                        <li><a class="dropdown-item" href="sample-certificate">Sample Certificate</a></li>
                        <li><a class="dropdown-item" href="aicte-feedback-facility">AICTE Feedback Facility</a></li>

                    </ul>
                </li>

                <li class="nav-item firstNav">
                    <a class="nav-link" style="width: max-content;" href="corporate-upskilling">Corporate Upskilling</a>
                </li>
                <!-- <li class="nav-item firstNav">
                    <a class="nav-link" style="width: max-content;" href="corporate-upskilling" target="_blank">Corporate Upskilling</a>
                </li> -->



                <!-- third nav  end-->




            </ul>
            <!-- <ul class="socials">
                <a class="socials-links" href="https://www.facebook.com/MITPuneDistanceEducationOnline"
                    target="_black"><i class="mtsk-facebook" style="color: #078aed"></i></a>
                <a class="socials-links" href="https://www.instagram.com/mitdistanceeducation/" style="color: #ce2778"
                    target="_black"><i class="mtsk-instagram"></i></a>
                <a class="socials-links" href="https://www.linkedin.com/school/mitsde/" style="color: #2967d1;"
                    target="_black"><i class="mtsk-linkedIn"></i></a>
                <a class="socials-links" href="https://www.youtube.com/@MITSDEPune" target="_black"
                    style="color: red;"><i class="fa-brands fa-youtube fa-lg"></i> </a>
                <a href="tel:91 9112-2072-07" style="width: max-content; text-decoration: none; color: #000;">
                    <strong>+91
                        9112-2072-07</strong></a>
            </ul> -->
            <!-- ✅ APPLY NOW BUTTON -->
            <button type="button" class="btn btn-primary mit-button btn-ripple" data-bs-toggle="modal"
                data-bs-target="#applyNowModal">
                Apply Now
            </button>

            <!-- ✅ POPUP FORM MODAL -->
            <div class="modal fade" id="applyNowModal" tabindex="-1" aria-labelledby="applyNowModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-md modal-dialog-centered">
                    <div class="modal-content" style="border-radius:10px; overflow:hidden;">
                        <div class="modal-body">

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
                            $mobile_agents = array('w3c ', 'acs-', 'alav', 'alca', 'amoi', 'audi', 'avan', 'benq', 'bird', 'blac', 'blaz', 'brew', 'cell', 'cldc', 'cmd-', 'dang', 'doco', 'eric', 'hipt', 'inno', 'ipaq', 'java', 'jigs', 'kddi', 'keji', 'leno', 'lg-c', 'lg-d', 'lg-g', 'lge-', 'maui', 'maxo', 'midp', 'mits', 'mmef', 'mobi', 'mot-', 'moto', 'mwbp', 'nec-', 'newt', 'noki', 'palm', 'pana', 'pant', 'phil', 'play', 'port', 'prox', 'qwap', 'sage', 'sams', 'sany', 'sch-', 'sec-', 'send', 'seri', 'sgh-', 'shar', 'sie-', 'siem', 'smal', 'smar', 'sony', 'sph-', 'symb', 't-mo', 'teli', 'tim-', 'tosh', 'tsm-', 'upg1', 'upsi', 'vk-v', 'voda', 'wap-', 'wapa', 'wapi', 'wapp', 'wapr', 'webc', 'winw', 'winw', 'xda ', 'xda-');

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

                            if ($tablet_browser > 0)
                                $divice = "tablet";
                            else if ($mobile_browser > 0)
                                $divice = "mobile";
                            else
                                $divice = "desktop";

                            $pagename = basename($_SERVER['PHP_SELF']);
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
                                    if (error.code === error.PERMISSION_DENIED) { }
                                }
                            </script>

                            <style>
                                .form-btn {
                                    color: #000;
                                    font-family: var(--font-family-SB);
                                    font-size: 1rem;
                                    font-weight: 700;
                                    text-transform: uppercase;
                                    border-radius: 5px;
                                    border: none;
                                    background: #fff;
                                    padding: 12px 28px 10px;
                                    transition: 0.2s ease-in-out;
                                    white-space: nowrap;
                                }

                                .form-btn:hover {
                                    color: var(--card-bg) !important;
                                    background: var(--text-color) !important;
                                }
                                .modal-backdrop{
                                    z-index: 1000;
                                }
                            </style>

                            <form action="thankyou.php" method="post" class="reservation-form mt-20 myFormH w-100"
                                style="border-radius: 5px; background:#F47521;  padding: 10px" accept-charset="utf-8"
                                name="menuContactFlotingCity" id="menuContactFlotingCity" novalidate="novalidate">
                                <input type="hidden" name="csrf_test_name" value="e678298614a47d7e40efe0ccaf02b49c" />
                                <input type="hidden" id="product_id3" name="product_id3" value="0" />
                                <input type="hidden" id="product_name3" name="product_name3" value="" />
                                <input type="hidden" name="request_type3" value="Enquiry" />
                                <h6 class="text-white">Get in touch <a href="tel:9112-207-207"
                                        style="text-decoration: none; color: #FFF; font-size: 18px;">+91
                                        9112-2072-07</a></h6>

                                <div class="mb-1">

                                    <input name="first_name3" type="text" class="form-control" value="First Name*"
                                        onBlur="javascript:addDefault(this,'menuContactFlotingCity')"
                                        onFocus="javascript:removeDefault(this)" validate="Required|First Name*" />
                                </div>
                                <div class="mb-1">

                                    <input name="email3" type="text" class="form-control" value="Email*"
                                        onBlur="javascript:addDefault(this,'menuContactFlotingCity')"
                                        onFocus="javascript:removeDefault(this)" validate="Email|Email*" />
                                </div>
                                <div class="mb-1">

                                    <input name="MobileNumber" class="form-control" type="text" pattern="[0-9]"
                                        value="MobileNumber*" onBlur="javascript:addDefault(this,'menuContactFlotingCity')"
                                        onFocus="javascript:removeDefault(this)" validate="Required|Phone|Phone*" />
                                </div>


                                <select name="state" class="form-select form-control   mb-1" id="state"
                                    onBlur="javascript:addDefault(this,'menuContactFlotingCity')"
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

                                <select name="HQ" id="HQ" class="form-select form-control mb-1"
                                    onBlur="javascript:addDefault(this,'menuContactFlotingCity')"
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

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked"
                                        checked>

                                    <small class="text-white" style="font-size: 7px;">I authorize MIT-SDE representative
                                        to contact me,this will override DND/NDNC
                                        registry.</small>
                                </div>

                                <div class="form-group ">
                                    <input type="hidden" name="submitthirdcontact" value="submitthirdcontact" />
                                    <button type="button" id="submitbtnsticky"
                                        class="btn btn-light form-btn mit-footer btn-ripple w-100 "
                                        onClick="validate('menuContactFlotingCity')">
                                        Register Now
                                    </button>


                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>