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

// Active nav detection — match current page slug to a nav item
$_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$_slug = preg_replace('/\.php$/', '', basename($_path));
if ($_slug === 'aboutMIT') $nav_active = 'about';
elseif ($_slug === 'pgdm-executive-emba-dual-program') $nav_active = 'dual';
elseif (strpos($_slug, 'executive-mba') !== false) $nav_active = 'growth';
elseif (in_array($_slug, ['application-process','faq','refer-friend','industry-updates','knowledge-center','new-admission-form-payment']) || strpos($_path, '/knowledge-center/') !== false) $nav_active = 'getstarted';
elseif (in_array($_slug, ['placement','academic','chat-with-support','learner-type-payment','sample-certificate','aicte-feedback-facility','mit-office-of-career-services','mocs-for-external-learner','student-mental-well-being-support','mocs-impact'])) $nav_active = 'learner';
else $nav_active = '';
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
                navigator.geolocation.getCurrentPosition(showPosition1,showError);
            }
        

        function showPosition1(Position) {
            document.querySelector('.myFormH input[name="latitude"]').value = Position.coords.latitude;
            document.querySelector('.myFormH input[name="longitude"]').value = Position.coords.longitude;
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
<div class="top-gradient"></div>
<div class="navbar-wrap">
<header class="navbar">
    <div class="logo-container">
        <a href="./">
        <img src="assets-new/images/logo_mitsde.png" alt="MIT School of Distance Education" />
        </a>
    </div>

    <nav class="nav-links">
        <a href="aboutMIT"<?php if ($nav_active === 'about') echo ' class="active"'; ?>>About MIT</a>

        <!-- Growth Programs trigger -->
        <a href="#" class="nav-dd-trigger<?php if ($nav_active === 'growth') echo ' active'; ?>" id="growthTrigger" aria-expanded="false" aria-haspopup="true">
            Growth Programs
            <svg class="nav-dd-chevron" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1 1L5 5L9 1" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
            </svg>
        </a>

        <a href="pgdm-executive-emba-dual-program"<?php if ($nav_active === 'dual') echo ' class="active"'; ?>>Dual Acceleration Tracks</a>
        <!-- Get Started trigger -->
        <a href="#" class="nav-dd-trigger<?php if ($nav_active === 'getstarted') echo ' active'; ?>" id="getStartedTrigger" aria-expanded="false" aria-haspopup="true">
            Get Started
            <svg class="nav-dd-chevron" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1 1L5 5L9 1" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
            </svg>
        </a>

        <!-- Learner Assistance trigger -->
        <a href="#" class="nav-dd-trigger<?php if ($nav_active === 'learner') echo ' active'; ?>" id="learnerTrigger" aria-expanded="false" aria-haspopup="true">
            Learner Assistance
            <svg class="nav-dd-chevron" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1 1L5 5L9 1" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
            </svg>
        </a>

        <!-- <a href="#">Career Support Hub</a>
        <span class="divider">|</span> -->
        <a href="global-exposure"><strong>Global Exposure</strong></a>

        <div class="nav-actions">
            <a href="https://mitpro.mitsde.com/" target="_blank"><button class="btn-outline">Login</button></a>
            <button class="btn-outline" data-bs-toggle="modal" data-bs-target="#eqModal">Apply Now</button>
        </div>
    </nav>

    <button class="hamburger" aria-label="Toggle menu">
        <span></span><span></span><span></span>
    </button>
</header>
</div><!-- /.navbar-wrap -->

<!-- ── Mega dropdown ── -->
<div class="mega-dd" id="megaDD" aria-hidden="true">
    <div class="mega-dd-inner">

        <!-- Left: category list -->
        <div class="mega-left">

            <div class="mega-cat" data-cat="emba">
                <a href="executive-mba"><span class="mega-cat-label">Executive MBA (EMBA)</span></a>
            </div>

            <div class="mega-cat" data-cat="pgdm-exe">
                <a href="post-graduate-diploma-in-management-executive"><span class="mega-cat-label">Post Graduate Diploma Management (Executive)</span></a>
            </div>

            <div class="mega-cat" data-cat="pgdm">
                <a href="post-graduate-diploma-in-management"><span class="mega-cat-label">Post Graduate Diploma Management</span></a>
            </div>

            <div class="mega-cat" data-cat="pgcm">
                <a href="post-graduate-certificate-in-management"><span class="mega-cat-label">Post Graduate Certificate Management</span></a>
            </div>

            <div class="mega-cat" data-cat="pgdba">
                <a href="post-graduate-diploma-in-business-administration"><span class="mega-cat-label">Post Graduate Diploma Business Administration</span></a>
            </div>

            <div class="mega-cat" data-cat="cap">
                <a href="#"><span class="mega-cat-label">Career Accelerator Program</span></a>
            </div>

            <div class="mega-cat" data-cat="pcp">
                <a href="#"><span class="mega-cat-label">Professional Certificate Programs</span></a>
            </div>

        </div>

        <!-- Right: specialization panel -->
        <div class="mega-right">

            <!-- Panel: EMBA -->
            <div class="mega-panel" id="panel-emba">
                <ul class="mega-panel-list">
                    <li><a href="executive-mba-in-international-business"><span>International Business</span><svg class="mega-panel-item-arrow" viewBox="0 0 20 10" fill="none"><path d="M0 5h18M14 1l4 4-4 4" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg></a></li>
                    <li><a href="executive-mba-in-supply-chain-management"><span>Supply Chain Management</span><svg class="mega-panel-item-arrow" viewBox="0 0 20 10" fill="none"><path d="M0 5h18M14 1l4 4-4 4" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg></a></li>
                    <li><a href="executive-mba-finance-management"><span>Finance Management</span><svg class="mega-panel-item-arrow" viewBox="0 0 20 10" fill="none"><path d="M0 5h18M14 1l4 4-4 4" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg></a></li>
                    <li><a href="executive-mba-human-resource-management"><span>HR Management</span><svg class="mega-panel-item-arrow" viewBox="0 0 20 10" fill="none"><path d="M0 5h18M14 1l4 4-4 4" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg></a></li>
                    <li><a href="executive-mba-marketing"><span>Marketing Management</span><svg class="mega-panel-item-arrow" viewBox="0 0 20 10" fill="none"><path d="M0 5h18M14 1l4 4-4 4" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg></a></li>
                    <li><a href="executive-mba-in-operations"><span>Operations Management</span><svg class="mega-panel-item-arrow" viewBox="0 0 20 10" fill="none"><path d="M0 5h18M14 1l4 4-4 4" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg></a></li>
                    <li><a href="executive-mba-in-project-management"><span>Project Management</span><svg class="mega-panel-item-arrow" viewBox="0 0 20 10" fill="none"><path d="M0 5h18M14 1l4 4-4 4" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg></a></li>
                    <li><a href="executive-mba-in-business-analytics-and-ai"><span>Business Analytics And AI</span><svg class="mega-panel-item-arrow" viewBox="0 0 20 10" fill="none"><path d="M0 5h18M14 1l4 4-4 4" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg></a></li>
                </ul>
                <div class="mega-img-card">
                    <!-- User will replace src with actual image -->
                    <img src="assets-new/images/stage-4.jpg" alt="Growth Programs" class="mega-img" />
                </div>
            </div>

            <!-- Panel: PGDM-Exe -->
            <div class="mega-panel" id="panel-pgdm-exe">
                <ul class="mega-panel-list">
                    <li><a href="digital-marketing-strategist"><span>Chief Digital Marketing Strategist Program</span><svg class="mega-panel-item-arrow" viewBox="0 0 20 10" fill="none"><path d="M0 5h18M14 1l4 4-4 4" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg></a></li>
                    <li><a href="pgdm-executive-in-international-business"><span>PGDM (Ex.) in International Business</span><svg class="mega-panel-item-arrow" viewBox="0 0 20 10" fill="none"><path d="M0 5h18M14 1l4 4-4 4" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg></a></li>
                    <li><a href="pgdm-executive-in-sustainability-esg"><span>PGDM (Ex.) in Sustainability & ESG</span><svg class="mega-panel-item-arrow" viewBox="0 0 20 10" fill="none"><path d="M0 5h18M14 1l4 4-4 4" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg></a></li>
                    <li><a href="pgdm-executive-in-digital-marketing"><span>PGDM (Ex.) in Digital Marketing</span><svg class="mega-panel-item-arrow" viewBox="0 0 20 10" fill="none"><path d="M0 5h18M14 1l4 4-4 4" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg></a></li>
                    <li><a href="pgdm-executive-in-business-analytics"><span>PGDM (Ex.) in Business Analytics</span><svg class="mega-panel-item-arrow" viewBox="0 0 20 10" fill="none"><path d="M0 5h18M14 1l4 4-4 4" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg></a></li>
                    <li><a href="pgdm-executive-in-information-technology"><span>PGDM (Ex.) in Information Technology</span><svg class="mega-panel-item-arrow" viewBox="0 0 20 10" fill="none"><path d="M0 5h18M14 1l4 4-4 4" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg></a></li>
                    <li><a href="pgdm-executive-in-modern-project-management"><span>PGDM (Ex.) in Modern Project Management</span><svg class="mega-panel-item-arrow" viewBox="0 0 20 10" fill="none"><path d="M0 5h18M14 1l4 4-4 4" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg></a></li>
                    <li><a href="pgdm-executive-in-technology-and-operations-management"><span>PGDM (Ex.) in Technology & Operations</span><svg class="mega-panel-item-arrow" viewBox="0 0 20 10" fill="none"><path d="M0 5h18M14 1l4 4-4 4" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg></a></li>
                    <li><a href="pgdm-executive-in-human-capital-management"><span>PGDM (Ex.) in Human Capital Management</span><svg class="mega-panel-item-arrow" viewBox="0 0 20 10" fill="none"><path d="M0 5h18M14 1l4 4-4 4" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg></a></li>
                    <li><a href="pgdm-executive-in-banking-financial-services"><span>PGDM (Ex.) in Banking & Financial Services</span><svg class="mega-panel-item-arrow" viewBox="0 0 20 10" fill="none"><path d="M0 5h18M14 1l4 4-4 4" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg></a></li>
                    <li><a href="pgdm-executive-in-finance-management"><span>PGDM (Ex.) in Finance Management</span><svg class="mega-panel-item-arrow" viewBox="0 0 20 10" fill="none"><path d="M0 5h18M14 1l4 4-4 4" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg></a></li>
                    <li><a href="pgdm-executive-in-strategic-marketing-management"><span>PGDM (Ex) in Strategic Marketing Management</span><svg class="mega-panel-item-arrow" viewBox="0 0 20 10" fill="none"><path d="M0 5h18M14 1l4 4-4 4" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg></a></li>
                    <li><a href="pgdm-executive-in-material-management"><span>PGDM (Ex) in Material Management</span><svg class="mega-panel-item-arrow" viewBox="0 0 20 10" fill="none"><path d="M0 5h18M14 1l4 4-4 4" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg></a></li>
                    <li><a href="pgdm-executive-in-global-logistics-and-supply-chain-management"><span>PGDM (Ex.) in Global Logistics & Supply Chain</span><svg class="mega-panel-item-arrow" viewBox="0 0 20 10" fill="none"><path d="M0 5h18M14 1l4 4-4 4" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg></a></li>
                    <li><a href="pgdm-executive-in-construction-and-project-management"><span>PGDM (Ex.) in Construction and Project</span><svg class="mega-panel-item-arrow" viewBox="0 0 20 10" fill="none"><path d="M0 5h18M14 1l4 4-4 4" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg></a></li>
                </ul>
                <div class="mega-img-card">
                    <img src="assets-new/images/stage-3.jpg" alt="PGDM Programs" class="mega-img" />
                </div>
            </div>

            <!-- Panel: PGDM -->
            <div class="mega-panel" id="panel-pgdm">
                <ul class="mega-panel-list">
                    <li><a href="pg-diploma-in-project-management"><span>PGDM in Project Management</span><svg class="mega-panel-item-arrow" viewBox="0 0 20 10" fill="none"><path d="M0 5h18M14 1l4 4-4 4" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg></a></li>
                    <li><a href="pg-diploma-in-operations-management"><span>PGDM in Operations Management</span><svg class="mega-panel-item-arrow" viewBox="0 0 20 10" fill="none"><path d="M0 5h18M14 1l4 4-4 4" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg></a></li>
                    <li><a href="pg-diploma-in-human-resource-management"><span>PGDM in Human Resource Management</span><svg class="mega-panel-item-arrow" viewBox="0 0 20 10" fill="none"><path d="M0 5h18M14 1l4 4-4 4" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg></a></li>
                    <li><a href="pg-diploma-in-information-technology"><span>PGDM in Information Technology</span><svg class="mega-panel-item-arrow" viewBox="0 0 20 10" fill="none"><path d="M0 5h18M14 1l4 4-4 4" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg></a></li>
                    <li><a href="pg-diploma-in-marketing-management"><span>PGDM in Marketing Management</span><svg class="mega-panel-item-arrow" viewBox="0 0 20 10" fill="none"><path d="M0 5h18M14 1l4 4-4 4" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg></a></li>
                    <li><a href="pg-diploma-in-finance-management"><span>PGDM in Finance Management</span><svg class="mega-panel-item-arrow" viewBox="0 0 20 10" fill="none"><path d="M0 5h18M14 1l4 4-4 4" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg></a></li>
                    <li><a href="pg-diploma-in-supply-chain-management"><span>PGDM in Logistics and Supply Chain Management</span><svg class="mega-panel-item-arrow" viewBox="0 0 20 10" fill="none"><path d="M0 5h18M14 1l4 4-4 4" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg></a></li>
                    <li><a href="pg-diploma-in-material-management"><span>PGDM in Material Management</span><svg class="mega-panel-item-arrow" viewBox="0 0 20 10" fill="none"><path d="M0 5h18M14 1l4 4-4 4" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg></a></li>
                    <li><a href="pg-diploma-in-banking-finance"><span>PGDM in Banking & Financial Services</span><svg class="mega-panel-item-arrow" viewBox="0 0 20 10" fill="none"><path d="M0 5h18M14 1l4 4-4 4" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg></a></li>
                    <li><a href="pg-diploma-in-construction-and-project-management"><span>PGDM in Construction And Project Management</span><svg class="mega-panel-item-arrow" viewBox="0 0 20 10" fill="none"><path d="M0 5h18M14 1l4 4-4 4" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg></a></li>
                </ul>
                <div class="mega-img-card">
                    <img src="assets-new/images/stage-3.jpg" alt="PGDM Programs" class="mega-img" />
                </div>
            </div>

            <!-- Panel: Certifications -->
            <div class="mega-panel" id="panel-pgcm">
                <ul class="mega-panel-list">
                    <li><a href="post-graduate-certificate-in-business-analytics"><span>PGCM Business Analytics</span><svg class="mega-panel-item-arrow" viewBox="0 0 20 10" fill="none"><path d="M0 5h18M14 1l4 4-4 4" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg></a></li>
                    <li><a href="post-graduate-certificate-in-digital-marketing"><span>PGCM Digital Marketing</span><svg class="mega-panel-item-arrow" viewBox="0 0 20 10" fill="none"><path d="M0 5h18M14 1l4 4-4 4" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg></a></li>
                </ul>
                <div class="mega-img-card">
                    <img src="assets-new/images/stage-2.jpg" alt="Certifications" class="mega-img" />
                </div>
            </div>

            <!-- Panel: PGDBA -->
            <div class="mega-panel" id="panel-pgdba">
                <ul class="mega-panel-list">
                    <li><a href="pgdba-in-operations-management"><span>PGDBA in Operations Management</span><svg class="mega-panel-item-arrow" viewBox="0 0 20 10" fill="none"><path d="M0 5h18M14 1l4 4-4 4" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg></a></li>
                    <li><a href="pgdba-in-finance"><span>PGDBA in Finance Management</span><svg class="mega-panel-item-arrow" viewBox="0 0 20 10" fill="none"><path d="M0 5h18M14 1l4 4-4 4" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg></a></li>
                    <li><a href="pgdba-in-human-resource-management"><span>PGDBA in Human Resource Management</span><svg class="mega-panel-item-arrow" viewBox="0 0 20 10" fill="none"><path d="M0 5h18M14 1l4 4-4 4" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg></a></li>
                    <li><a href="pgdba-in-information-technology"><span>PGDBA in Information Technology</span><svg class="mega-panel-item-arrow" viewBox="0 0 20 10" fill="none"><path d="M0 5h18M14 1l4 4-4 4" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg></a></li>
                    <li><a href="pgdba-in-marketing-management"><span>PGDBA in Marketing Management</span><svg class="mega-panel-item-arrow" viewBox="0 0 20 10" fill="none"><path d="M0 5h18M14 1l4 4-4 4" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg></a></li>
                </ul>
                <div class="mega-img-card">
                    <img src="assets-new/images/stage-1.jpg" alt="Dual Degree" class="mega-img" />
                </div>
            </div>

            <!-- Panel: Career Accelerator Program -->
            <div class="mega-panel" id="panel-cap">
                <ul class="mega-panel-list">
                    <li><a href="power-bi-certification"><span>SQL Power bi certification</span><svg class="mega-panel-item-arrow" viewBox="0 0 20 10" fill="none"><path d="M0 5h18M14 1l4 4-4 4" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg></a></li>
                    <li><a href="gen-ai-for-educators"><span>Gen AI for Educators</span><svg class="mega-panel-item-arrow" viewBox="0 0 20 10" fill="none"><path d="M0 5h18M14 1l4 4-4 4" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg></a></li>
                    <li><a href="ai-lean-six-sigma-green-belt-certification"><span>AI-Lean Six Sigma Green Belt Certification</span><svg class="mega-panel-item-arrow" viewBox="0 0 20 10" fill="none"><path d="M0 5h18M14 1l4 4-4 4" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg></a></li>
                    <li><a href="lean-six-sigma-black-belt-certification"><span>Lean Six Sigma Black Belt Certification</span><svg class="mega-panel-item-arrow" viewBox="0 0 20 10" fill="none"><path d="M0 5h18M14 1l4 4-4 4" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg></a></li>
                    <li><a href="total-quality-management-certification"><span>Certification in Total Quality Management</span><svg class="mega-panel-item-arrow" viewBox="0 0 20 10" fill="none"><path d="M0 5h18M14 1l4 4-4 4" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg></a></li>
                    <li><a href="diploma-in-total-quality-management"><span>Diploma in Total Quality Management</span><svg class="mega-panel-item-arrow" viewBox="0 0 20 10" fill="none"><path d="M0 5h18M14 1l4 4-4 4" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg></a></li>
                </ul>
                <div class="mega-img-card">
                    <img src="assets-new/images/stage-1.jpg" alt="Dual Degree" class="mega-img" />
                </div>
            </div>

            <!-- Panel: Professional Certificate Programs -->
            <div class="mega-panel" id="panel-pcp">
                <ul class="mega-panel-list">
                    <li><a href="certification-in-digital-marketing"><span>Certification in Digital Marketing</span><svg class="mega-panel-item-arrow" viewBox="0 0 20 10" fill="none"><path d="M0 5h18M14 1l4 4-4 4" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg></a></li>
                    <li><a href="certification-in-business-analytics"><span>Certification in Business Analytics</span><svg class="mega-panel-item-arrow" viewBox="0 0 20 10" fill="none"><path d="M0 5h18M14 1l4 4-4 4" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg></a></li>
                    <li><a href="certification-in-project-management"><span>Certification in Project Management</span><svg class="mega-panel-item-arrow" viewBox="0 0 20 10" fill="none"><path d="M0 5h18M14 1l4 4-4 4" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg></a></li>
                    <li><a href="certification-in-marketing-management"><span>Certification in Marketing Management</span><svg class="mega-panel-item-arrow" viewBox="0 0 20 10" fill="none"><path d="M0 5h18M14 1l4 4-4 4" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg></a></li>
                    <li><a href="certification-in-human-resource-management"><span>Certification in Human Resource Management</span><svg class="mega-panel-item-arrow" viewBox="0 0 20 10" fill="none"><path d="M0 5h18M14 1l4 4-4 4" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg></a></li>
                    <li><a href="certification-in-operations-management"><span>Certification in Operations Management</span><svg class="mega-panel-item-arrow" viewBox="0 0 20 10" fill="none"><path d="M0 5h18M14 1l4 4-4 4" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg></a></li>
                    <li><a href="certification-in-material-management"><span>Certification in Material Management</span><svg class="mega-panel-item-arrow" viewBox="0 0 20 10" fill="none"><path d="M0 5h18M14 1l4 4-4 4" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg></a></li>
                    <li><a href="certification-in-supply-chain-management"><span>Certification in Logistics and Supply Chain</span><svg class="mega-panel-item-arrow" viewBox="0 0 20 10" fill="none"><path d="M0 5h18M14 1l4 4-4 4" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg></a></li>
                    <li><a href="certification-in-finance-management"><span>Certification in Finance Management</span><svg class="mega-panel-item-arrow" viewBox="0 0 20 10" fill="none"><path d="M0 5h18M14 1l4 4-4 4" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg></a></li>
                </ul>
                <div class="mega-img-card">
                    <img src="assets-new/images/stage-1.jpg" alt="Dual Degree" class="mega-img" />
                </div>
            </div>

        </div><!-- /mega-right -->

    </div><!-- /mega-dd-inner -->
</div><!-- /mega-dd -->

<!-- ── Get Started dropdown ── -->
<div class="mega-dd" id="getStartedDD" aria-hidden="true">
    <div class="mega-dd-inner">

        <div class="mega-left">

            <div class="mega-cat" data-cat="gs-knowledge">
                <a href="#"><span class="mega-cat-label">Knowledge Center</span></a>
            </div>
            <div class="mega-cat" data-cat="gs-app">
                <a href="application-process"><span class="mega-cat-label">Application Process</span></a>
            </div>

            <!-- <div class="mega-cat" data-cat="gs-blog">
                <a href="https://blog.mitsde.com/"><span class="mega-cat-label">Blogs</span></a>
            </div> -->

            <div class="mega-cat" data-cat="gs-faq">
                <a href="faq"><span class="mega-cat-label">FAQ</span></a>
            </div>

            <div class="mega-cat" data-cat="gs-refer">
                <a href="refer-friend"><span class="mega-cat-label">Refer a Friend</span></a>
            </div>

            <div class="mega-cat" data-cat="gs-pay">
                <a href="new-admission-form-payment"><span class="mega-cat-label">Pay Now</span></a>
            </div>

            <!-- <div class="mega-cat" data-cat="gs-industry">
                <a href="industry-updates"><span class="mega-cat-label">Industry Updates</span></a>
            </div> -->

        </div><!-- /mega-left -->

        <div class="mega-right">

            <div class="mega-panel" id="panel-gs-knowledge">
                <ul class="mega-panel-list">
                    <li><a href="knowledge-center/mba-vs-pgdm-which-one-is-better-for-your-career"><span>MBA vs PGDM</span><svg class="mega-panel-item-arrow" viewBox="0 0 20 10" fill="none"><path d="M0 5h18M14 1l4 4-4 4" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg></a></li>
                    <li><a href="knowledge-center/pgdm-for-career-switchers"><span>Career Switch</span><svg class="mega-panel-item-arrow" viewBox="0 0 20 10" fill="none"><path d="M0 5h18M14 1l4 4-4 4" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg></a></li>
                    <li><a href="knowledge-center/pgdm-a-good-option-for-working-professionals"><span>Working Professionals</span><svg class="mega-panel-item-arrow" viewBox="0 0 20 10" fill="none"><path d="M0 5h18M14 1l4 4-4 4" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg></a></li>
                    <li><a href="knowledge-center/scope-of-pgdm-in-india"><span>Scope of PGDM</span><svg class="mega-panel-item-arrow" viewBox="0 0 20 10" fill="none"><path d="M0 5h18M14 1l4 4-4 4" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg></a></li>
                    <li><a href="knowledge-center/best-career-opportunities-after-completing-a-finance-course"><span>Finance Careers</span><svg class="mega-panel-item-arrow" viewBox="0 0 20 10" fill="none"><path d="M0 5h18M14 1l4 4-4 4" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg></a></li>
                    <!-- <li><a href="knowledge-center/how-a-pgdm-in-marketing-shapes-your-career-trajectory"><span>PGDM Marketing</span><svg class="mega-panel-item-arrow" viewBox="0 0 20 10" fill="none"><path d="M0 5h18M14 1l4 4-4 4" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg></a></li>
                    <li><a href="knowledge-center/jobs-after-pgdm-in-operations-management"><span>PGDM Operations</span><svg class="mega-panel-item-arrow" viewBox="0 0 20 10" fill="none"><path d="M0 5h18M14 1l4 4-4 4" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg></a></li> -->
                </ul>
            </div>

        </div><!-- /mega-right -->

    </div><!-- /mega-dd-inner -->
</div><!-- /getStartedDD -->

<!-- ── Learner Assistance dropdown ── -->
<div class="mega-dd" id="learnerDD" aria-hidden="true">
    <div class="mega-dd-inner">

        <div class="mega-left">

            <div class="mega-cat" data-cat="la-placement">
                <a><span class="mega-cat-label">Placement</span></a>
            </div>

            <div class="mega-cat" data-cat="la-mocs">
                <a><span class="mega-cat-label">MIT office of career services</span></a>
            </div>

            <div class="mega-cat" data-cat="la-academic">
                <a href="academic"><span class="mega-cat-label">Academic</span></a>
            </div>

            <div class="mega-cat" data-cat="la-support">
                <a href="chat-with-support"><span class="mega-cat-label">Student Support</span></a>
            </div>

            <div class="mega-cat" data-cat="la-fee">
                <a href="learner-type-payment"><span class="mega-cat-label">Fee Payment</span></a>
            </div>

            <div class="mega-cat" data-cat="la-certificate">
                <a href="sample-certificate"><span class="mega-cat-label">Sample Certificate</span></a>
            </div>

            <div class="mega-cat" data-cat="la-aicte">
                <a href="aicte-feedback-facility"><span class="mega-cat-label">AICTE Feedback Facility</span></a>
            </div>

        </div><!-- /mega-left -->

        <div class="mega-right">

            <div class="mega-panel" id="panel-la-placement">
                <ul class="mega-panel-list">
                    <li><a href="placement"><span>Placement</span><svg class="mega-panel-item-arrow" viewBox="0 0 20 10" fill="none"><path d="M0 5h18M14 1l4 4-4 4" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg></a></li>
                    <li><a href="https://alumni.mitsde.com/"><span>Alumni</span><svg class="mega-panel-item-arrow" viewBox="0 0 20 10" fill="none"><path d="M0 5h18M14 1l4 4-4 4" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg></a></li>
                </ul>
            </div>

            <div class="mega-panel" id="panel-la-mocs">
                <ul class="mega-panel-list">
                    <li><a href="mit-office-of-career-services"><span>MOCS</span><svg class="mega-panel-item-arrow" viewBox="0 0 20 10" fill="none"><path d="M0 5h18M14 1l4 4-4 4" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg></a></li>
                    <li><a href="synergysphere"><span>Synergy Sphere</span><svg class="mega-panel-item-arrow" viewBox="0 0 20 10" fill="none"><path d="M0 5h18M14 1l4 4-4 4" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg></a></li>
                    <!-- <li><a href="mocs-for-external-learner"><span>I'm a Non-MITSDE Student</span><svg class="mega-panel-item-arrow" viewBox="0 0 20 10" fill="none"><path d="M0 5h18M14 1l4 4-4 4" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg></a></li>
                    <li><a href="student-mental-well-being-support"><span>Mental Health Helpline</span><svg class="mega-panel-item-arrow" viewBox="0 0 20 10" fill="none"><path d="M0 5h18M14 1l4 4-4 4" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg></a></li>
                    <li><a href="mocs-impact"><span>MOCS Impact</span><svg class="mega-panel-item-arrow" viewBox="0 0 20 10" fill="none"><path d="M0 5h18M14 1l4 4-4 4" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg></a></li> -->
                </ul>
            </div>

        </div><!-- /mega-right -->

    </div><!-- /mega-dd-inner -->
</div><!-- /learnerDD -->

<!-- Blur backdrop -->
<div class="mega-backdrop" id="megaBackdrop"></div>

<!-- Mobile dropdown menu -->
<div class="mobile-menu" id="mobileMenu">
    <a href="aboutMIT"<?php if ($nav_active === 'about') echo ' class="active"'; ?>>About MIT</a>

    <!-- Growth Programs trigger — opens the same #megaDD used on desktop -->
    <a href="#" class="nav-dd-trigger<?php if ($nav_active === 'growth') echo ' active'; ?>" id="mobGrowthTrigger" aria-expanded="false" aria-haspopup="true">
        Growth Programs
        <svg class="nav-dd-chevron" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M1 1L5 5L9 1" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
        </svg>
    </a>

    <a href="pgdm-executive-emba-dual-program"<?php if ($nav_active === 'dual') echo ' class="active"'; ?>>Dual Acceleration Tracks</a>

    <!-- Get Started trigger — opens #getStartedDD -->
    <a href="#" class="nav-dd-trigger<?php if ($nav_active === 'getstarted') echo ' active'; ?>" id="mobGetStartedTrigger" aria-expanded="false" aria-haspopup="true">
        Get Started
        <svg class="nav-dd-chevron" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M1 1L5 5L9 1" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
        </svg>
    </a>

    <!-- Learner Assistance trigger — opens #learnerDD -->
    <a href="#" class="nav-dd-trigger<?php if ($nav_active === 'learner') echo ' active'; ?>" id="mobLearnerTrigger" aria-expanded="false" aria-haspopup="true">
        Learner Assistance
        <svg class="nav-dd-chevron" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M1 1L5 5L9 1" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
        </svg>
    </a>

    <!-- <a href="#">Career Support Hub</a> -->
    <a href="global-exposure"><strong>Global Exposure</strong></a>
    <div class="mobile-menu-actions">
        <a href="https://mitpro.mitsde.com/" target="_blank" class="btn-outline">Login</a>
        <button class="btn-outline" data-bs-toggle="modal" data-bs-target="#eqModal">Apply Now</button>
    </div>
</div>

<script>
(function () {
    var activeClose = null; // currently open dropdown's closeDD — ensures only one open at a time

    function isMobile() { return window.innerWidth <= 991; }

    function initMegaMenu(cfg) {
        var trigger    = document.getElementById(cfg.triggerId);
        var mobTrigger = cfg.mobTriggerId ? document.getElementById(cfg.mobTriggerId) : null;
        var dropdown   = document.getElementById(cfg.dropdownId);
        var backdrop   = document.getElementById('megaBackdrop');
        if (!trigger || !dropdown) return;

        var cats      = dropdown.querySelectorAll('.mega-cat');
        var panels    = dropdown.querySelectorAll('.mega-panel');
        var isOpen    = false;
        var closeTimer = null;

        // Desktop only: anchor the dropdown directly under its own trigger
        // instead of the default viewport-centered position (CSS left:50% +
        // translateX(-50%)). Tablet/mobile keep the centered/full-width CSS
        // behaviour untouched.
        function positionDD() {
            if (isMobile()) { dropdown.style.left = ''; dropdown.style.transform = ''; return; }
            var rect = trigger.getBoundingClientRect();
            var ddWidth = dropdown.offsetWidth;
            var left = rect.left;
            var maxLeft = window.innerWidth - ddWidth - 16;
            if (left > maxLeft) left = maxLeft;
            if (left < 16) left = 16;
            dropdown.style.left = left + 'px';
            dropdown.style.transform = 'none';
        }

        function openDD() {
            if (closeTimer) { clearTimeout(closeTimer); closeTimer = null; }
            // Close any other open dropdown first
            if (activeClose && activeClose !== closeDD) activeClose();
            activeClose = closeDD;
            isOpen = true;
            positionDD();
            dropdown.classList.add('is-open');
            backdrop.classList.add('is-open');
            trigger.classList.add('dd-open');
            if (mobTrigger) mobTrigger.classList.add('dd-open');
            trigger.setAttribute('aria-expanded', 'true');
            if (mobTrigger) mobTrigger.setAttribute('aria-expanded', 'true');
            dropdown.setAttribute('aria-hidden', 'false');
        }

        function closeDD() {
            closeTimer = null;
            if (activeClose === closeDD) activeClose = null;
            isOpen = false;
            dropdown.classList.remove('is-open');
            dropdown.style.left = '';
            dropdown.style.transform = '';
            backdrop.classList.remove('is-open');
            trigger.classList.remove('dd-open');
            if (mobTrigger) mobTrigger.classList.remove('dd-open');
            trigger.setAttribute('aria-expanded', 'false');
            if (mobTrigger) mobTrigger.setAttribute('aria-expanded', 'false');
            dropdown.setAttribute('aria-hidden', 'true');
            dropdown.classList.remove('has-panel');
            cats.forEach(function (c) { c.classList.remove('is-active'); });
            panels.forEach(function (p) { p.classList.remove('is-active'); });
        }

        function scheduleClose() {
            if (closeTimer) clearTimeout(closeTimer);
            closeTimer = setTimeout(closeDD, 150);
        }

        function cancelClose() {
            if (closeTimer) { clearTimeout(closeTimer); closeTimer = null; }
        }

        // ── Desktop: hover trigger → open; mouseleave → delayed close ──
        trigger.addEventListener('mouseenter', function () {
            if (!isMobile()) openDD();
        });
        trigger.addEventListener('mouseleave', function () {
            if (!isMobile()) scheduleClose();
        });
        dropdown.addEventListener('mouseenter', function () {
            if (!isMobile()) cancelClose();
        });
        dropdown.addEventListener('mouseleave', function () {
            if (!isMobile()) scheduleClose();
        });

        // ── Mobile/tablet: click trigger → toggle ──
        [trigger, mobTrigger].forEach(function (t) {
            if (!t) return;
            t.addEventListener('click', function (e) {
                e.preventDefault();
                e.stopPropagation();
                if (isMobile()) { isOpen ? closeDD() : openDD(); }
            });
        });

        backdrop.addEventListener('click', closeDD);
        document.addEventListener('keydown', function (e) { if (e.key === 'Escape') closeDD(); });

        // Activate a category and show its panel (if it has one)
        function activateCat(cat) {
            var panel = dropdown.querySelector('#panel-' + cat.dataset.cat);
            cats.forEach(function (c) { c.classList.remove('is-active'); });
            panels.forEach(function (p) { p.classList.remove('is-active'); });
            cat.classList.add('is-active');
            if (panel) {
                panel.classList.add('is-active');
                dropdown.classList.add('has-panel');
            } else {
                dropdown.classList.remove('has-panel');
            }
            // Re-anchor: the panel column can widen the dropdown well past
            // the width it had when openDD() first positioned it.
            positionDD();
            return !!panel;
        }

        cats.forEach(function (cat) {
            // Desktop: hover over category → show panel immediately
            cat.addEventListener('mouseenter', function () {
                if (!isMobile()) activateCat(cat);
            });

            // Click behaviour differs by device:
            // Desktop — mouseenter already activated the cat; click navigates via <a>
            // Mobile  — 1st tap: show panel if one exists; 2nd tap (is-active): navigate
            //           Categories with no panel navigate on 1st tap
            cat.addEventListener('click', function (e) {
                if (!isMobile()) return; // desktop: let <a> navigate
                if (cat.classList.contains('is-active')) return; // 2nd tap → navigate
                var panel = dropdown.querySelector('#panel-' + cat.dataset.cat);
                if (!panel) return; // no panel → navigate directly on 1st tap
                e.preventDefault();
                activateCat(cat);
            });
        });

        // Panel links — highlight active, navigate normally
        dropdown.querySelectorAll('.mega-panel-list a').forEach(function (link) {
            link.addEventListener('click', function () {
                var siblings = link.closest('.mega-panel-list').querySelectorAll('a');
                siblings.forEach(function (s) { s.classList.remove('is-active'); });
                link.classList.add('is-active');
            });
        });

        // Close on outside click
        document.addEventListener('click', function (e) {
            if (isOpen && !dropdown.contains(e.target) && !trigger.contains(e.target) && (!mobTrigger || !mobTrigger.contains(e.target))) {
                closeDD();
            }
        });
    }

    // Initialise all mega-menu dropdowns
    initMegaMenu({ triggerId: 'growthTrigger',     mobTriggerId: 'mobGrowthTrigger',     dropdownId: 'megaDD' });
    initMegaMenu({ triggerId: 'getStartedTrigger', mobTriggerId: 'mobGetStartedTrigger', dropdownId: 'getStartedDD' });
    initMegaMenu({ triggerId: 'learnerTrigger',    mobTriggerId: 'mobLearnerTrigger',    dropdownId: 'learnerDD' });
})();
</script>
