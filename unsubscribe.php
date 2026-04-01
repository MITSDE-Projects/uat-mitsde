<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<!--<![endif]-->



    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

        <!-- Meta Tags -->
        <meta name="viewport" content="width=device-width,initial-scale=1.0" />

      

        <!-- Page Title -->
        <title>Unsubscribe</title>

        <meta name="robots" content="noindex, nofollow">
    <!-- CANONICAL TAG -->

    <link rel="canonical" href="https://mitsde.com/unsubscribe" />

    <!-- CANONICAL TAG -->

    <?php  include "5-common-seo-tag-1.php" ?>

    <!-- OGP TAG -->

    <meta property="og:title" content="Online Payment | Other Fees Payment By Easebuzz | Pay Online">
    <meta property="og:site_name" content="MIT School of Distance Education">
    <meta property="og:url" content="https://mitsde.com/OtherFeesPaymentByEasebuzz">
    <meta property="og:description"
        content="Earn a Post Graduate Distance Diploma (PGDM) in Project Management which is affordable, industry-relevant and taught by Industry experts in Live sessions.">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://mitsde.com/assets/images/new/logo-mit-school-of-distance-education.png">

    <!-- / OG TAG -->

    <!-- Page Title -->
    <link rel="icon" type="image/png" href="assets/images/favicon-mit.ico" />
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/bootstrap-select.min.css" />
    <link rel="stylesheet" href="assets/css/slick.min.css" />
    <link rel="stylesheet" href="assets/css/fonts.css" type="text/css" />
    <link rel="stylesheet" href="assets/css/style.css" type="text/css" />
    <link rel="stylesheet" href="assets/css/course-common-internal.css" type="text/css" />
    <link rel="stylesheet" href="assets/css//form-new.css" type="text/css" />
    <!--API for Queck contact----->
    


       
    </head>

<body class="header-sticky">
    <div class="boxed">
    <?php include "5-common-seo-tag-2.php" ?>
        <?php include "header.php"; ?>
        
        <section>

            <div class="container-fluid px-1 py-5 mx-auto mt-5">
                <div class="row d-flex justify-content-center">
                    <div class="col-xl-7 col-lg-8 col-md-9 col-11 text-center">

                        <!-- card -->

                        <div class="card">
                            <h3>Whats App Service Unsubscribe</h3>
                            <?php 
                            $_GET['msg'];
                            if($_GET['msg'])
                            {
                                ?>
                                <p class="blue-text"><b><?php echo $_GET['msg']; ?></b> </p>
                                <?
                            }
                            else
                            {
                                ?>
                                <p class="blue-text"><b>Enter Phone number and email id</b> </p>
                                <form action="insertunsubscrib.php" name="Unsubscribe" id="Unsubscribe" method="post">

                               

                              



                                <div class="row justify-content-between text-left mt-2">
                                    <div class="form-group col-sm-6 flex-column d-flex">
                                        <input type="text" class="form-control"  name="EmailID" id="EmailID" value="" placeholder="Email ID"></div>


                                    <div class="form-group col-sm-6 flex-column d-flex">
                                        <div class="form-group">
                     <input type="text" class="form-control"  name="MobileNo" id="MobileNo" value="" placeholder="Mobile No"> </div>
                                    </div>

                                    
                                
                                <div class="center mt-2">

                                    <button type="submit" name="submit" id="submit" class="btn btn-primary mit-button" style="width: 50%;">Unsubscribe</button>
                                </div>

                                
                            </form>
                                <?
                            
                                
                            }
                            ?>
                            

                            
                       
                    </div>
                                </div>




                                <!--<div class="col-sm-6"> <div class="form-group"><select name="Course" id="Course" class="form-control" id="exampleSelect1">
                  <option value="">Select Course</option>
				                       
				   <option value="PGCM in Modern Office Management">PGCM in Modern Office Management</option>
				  
                  
                  
            </select>	</div></div>-->




                                <!--  -->









                                <!-- Job Form Validation-->

                        </div>


                    </div>
                </div>

            </div><!-- /.container -->
        </section>








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