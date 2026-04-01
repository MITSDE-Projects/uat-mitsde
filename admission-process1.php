<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>MITSkills</title>
    <link rel="icon" type="image/png" href="assets/images/favicon.ico" />
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/bootstrap-select.min.css" />
    <link rel="stylesheet" href="assets/css/slick.min.css" />
    <link rel="stylesheet" href="assets/css/fonts.css" type="text/css" />
    <link rel="stylesheet" href="assets/css/style.css" type="text/css" />
	<!--API for Queck contact----->
    <script src="assets/js/api/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="assets/js/api/validation.js" charset="UTF-8"></script>
    <!----->
	<?php // include"google_code.html";?>
  </head>
  <body>
    <!-- Header Nav Start -->
    <?php include "header.php" ?>
    <!-- Header Nav End --->
    <main class="main-body">
      <section class="about-banner">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-lg-4 about-heading">
              <h2>About us</h2>
            </div>
            <div class="col-md-12 col-lg-8">
              <div class="about-details">
                <p>With over 2 decades of imparting industry-oriented programs to more than 6000 alumni, we observed, emerging technologies require new-age skills and technical knowledge to fill the burgeoning gaps.</p>
                <p>MIT Skills, a constituent of MIT Pune, was born out of this need to meet the demand for specialized skillsets and niche knowledge. We deliver specially crafted skill-centric programs that impart industry-relevant knowledge to ensure enriching professional advancement and increased employability.</p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="enroll-certification about-sec">
        <div class="container">
          <div class="row">
            <!-- <div class="col-md-12 col-lg-4 fintech-certi aboutMit-skills">
              <h2>Know the <br> leadership and the <br> brain behind the <br> scenes of MIT <br> Skills -</h2>
            </div> -->
            <div class="col-md-12 col-lg-12">
              <div class="about-det">
                <img src="assets/images/about-man.png" class="img-fluid" alt="">
                <div class="drdetails">
                  <h3>Dr. Sunil Karad</h3>
                  <p>Executive Director, Treasurer & Trustee <br> MIT Group of Institutions | Pune | India</p>
                </div>
              </div>
              <div class="be-change">
                <p><strong>“Be the change that you wish to see in the world.” ― Mahatma Gandhi</strong></p>
                <p>Education holds the key to a progressive world and is a crucial tool for solving some of the most complex issues. It hones our youth's developmental potential and eventually shapes humanity's future. Being associated with various knowledge streams across Technology, Science, Social Science, Humanities, Health Science, Design and School Education verticals, I firmly believe that learning is far beyond facts and figures. Ideally, education should foster curiosity and analysis. It should be beyond ensuring literacy and inculcating the realization of one's potential.</p>
                <p>With a liberal approach, we can imbibe a sense of social responsibility and instil intellectual and practical dexterity in the citizens of tomorrow. We must guide these young minds to succeed in a realm full of opportunities.</p>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
    <!-- Footer Start -->
    <?php  include "footer.php" ?>
    

    <!-- footer end  --> 
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/bootstrap-select.min.js"></script>
    <script src="assets/js/slick.min.js"></script>
    <script src="assets/js/common.js"></script>
    <script>
      $( document ).ready(function() {
        $('.certification-carousel').slick({
          dots: false,
          infinite: false,
          speed: 300,
          slidesToShow: 3,
          slidesToScroll: 1,
          responsive: [
            {
              breakpoint: 1024,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
              }
            },
            {
              breakpoint: 768,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1
              }
            }
          ]
        });
      })
    </script>
  </body>
</html>
