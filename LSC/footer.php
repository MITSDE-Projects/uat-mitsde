<?php
$segments = explode('/', trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/'));
$pageurl=$segments[count($segments)-1];
?>


    <div class="footer">
      <div class="footerGrey">
        <div class="">
          <div class="container" id="footercode">
            <div class="clearfix">
                <?php if (!empty($pageurl) && ($pageurl == "admission-design.php" || $pageurl =="admissions-process.php" || $pageurl =="admissions-fees-payments.php")) { ?>
                <a href="javascript:void(0);" target="_new"> <img class="mentoredBy" src="images/img_Logo.png"></a>
                   <?php 
               } ?>
              <ul class="footerNav pull-left list-unstyled list-inline Responsive">
               <!--<li>
                  <a href="#">
                    Disclaimer
                  </a>
                </li>-->
                <li>
                  <a href="footer-brochure.php">
                    Downloads
                  </a>
                </li>
                <!--<li>
                  <a href="#">
                    Policy Documents
                  </a>
                </li>-->
                 <li>
                  <a href="blogs.php">
                    Blogs
                  </a>
                </li>
                  <li>
                  <a href="download/LOI.pdf" target="_blank">
                    Statutory Permissions
                  </a>
                </li>
 <li>
                  <a href="openings-current.php" target="_blank">
                   Careers
                  </a>
                </li>
            <!--  <li>
                  <a href="http://www.avantikauniversity.edu.in/myAvantika/emp/login.php" style="text-transform:none;color:#e74c3c" target="_blank">
                   myAVANTIKA
                  </a>
                </li>-->
              </ul>
                <ul class="footerNav pull-left list-unstyled list-inline Unresponsive">
                 <!--<li>
                  <a href="#">
                    Disclaimer
                  </a>
                </li>-->
                <li>
                  <a href="footer-brochure.php">
                    Downloads
                  </a>
                </li>
                 <!--<li>
                  <a href="#">
                    Policy Documents
                  </a>
                </li>-->
                 <li>
                  <a href="blogs.php">
                    Blogs
                  </a>
                </li>
                 <li>
                  <a href="statutory-permissions.php" target="_blank">
                    Statutory Permissions
                  </a>
                </li>
                 <li>
                  <a href="openings-current.php" target="_blank">
                   Careers
                  </a>
                </li>
                <!--<li>
                  <a href="http://www.avantikauniversity.edu.in/myAvantika/emp/login.php" style="text-transform:none;color:#e74c3c" target="_blank">
                   myAVANTIKA
                  </a>
                </li>-->
              </ul>
              <div class="pull-right Unresponsive">
                <!-- <div class="footerAddress">
                  <h5>Project Office:</h5>
                  <p>
                    Avanti, 3rd Floor, MIT Campus, Paud Road, Kothrud,Pune - 411 038, India.
                  </p>
                </div> -->
                <div class="footerAddress">
                  <!-- <h5>Campus:</h5> -->
                  <p>
                    Ujjain | Madhya Pradesh | India
                  </p>
                </div>
                <div class="footerAddress">
                  <!-- <h5>Email:</h5> -->
                  <p>
                    <a href="mailto:info@avantika.edu.in">info@avantika.edu.in</a>
                  </p>
                  <!-- <h5 class="footerPhNo">Phone No.:</h5> -->
                </div>
                <div class="footerAddress">
                  <p>
                     <a href="tel:18008332288">1800-833-2288</a>
                  </p>
                </div>
              </div>
                <div class="pull-left-footer  Responsive">
                <!-- <div class="footerAddress">
                  <h5>Project Office:</h5>
                  <p>
                    Avanti, 3rd Floor, MIT Campus, Paud Road, Kothrud,Pune - 411 038, India.
                  </p>
                </div> -->
                <div class="footerAddress">
                  <!-- <h5>Campus:</h5> -->
                  <p>
                    Ujjain | Madhya Pradesh | India
                  </p>
                
                  <!-- <h5>Email:</h5> -->
                  <br />
                    <p>
                     <a href="mailto:info@avantika.edu.in">info@avantika.edu.in</a>
                  </p>
                  <!-- <h5 class="footerPhNo">Phone No.:</h5> -->
                
                  <p>
                    <a href="tel:18008332288">1800-833-2288</a>
                  </p>
                </div>
              </div>        
            </div>
          </div>
        </div>
      </div>
      <div class="footerWhite">
        <div class="container">
          <div class="clearfix">
            <h6 class="copyright pull-left">&copy; <?php echo date('Y');?> Avantika University</h6>
           <ul class="list-inline pull-right list-unstyled socialIcons Responsive">
              <li>
                <a href="https://www.facebook.com/Avantika-University-1097869050236920/?ref=aymt_homepage_panel" target="_blank">
                  <i class="fa fa-facebook"></i>
                </a>
              <li>
                <a href="https://twitter.com/avantikaujjain" target="_blank">
                  <i class="fa fa-twitter"></i>
                </a>
              </li>
               <li>
                <a href="https://www.youtube.com/channel/UCRRg_udNOtNa6bOQPGjhDPg" target="_blank">
                    <i class="fa fa-youtube-play" aria-hidden="true"></i>
                </a>
              </li>
              <li>
                <a href="https://www.linkedin.com/in/avantika-university-a57100114?trk=hp-identity-name" target="_blank">
                  <i class="fa fa-linkedin"></i>
                </a>
              </li>
            </ul>
              
              <ul class="list-inline pull-right list-unstyled socialIcons Unresponsive">
              <li>
                <a href="https://www.facebook.com/Avantika-University-1097869050236920/?ref=aymt_homepage_panel" target="_blank">
                  <i class="fa fa-facebook"></i>
                </a>
              <li>
                <a href="https://twitter.com/avantikaujjain" target="_blank">
                  <i class="fa fa-twitter"></i>
                </a>
              </li>
               <li>
                <a href="https://www.youtube.com/channel/UCRRg_udNOtNa6bOQPGjhDPg" target="_blank">
                    <i class="fa fa-youtube-play" aria-hidden="true"></i>
                </a>
              </li>
              <li>
                <a href="https://www.linkedin.com/in/avantika-university-a57100114?trk=hp-identity-name" target="_blank">
                  <i class="fa fa-linkedin"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
      
      
      <br>