<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />

    <title>MOCS : Freebie Download</title>

    <!-- CANONICAL TAG -->

    <link rel="canonical" href="https://mitsde.com/freebie-form" />

    <!-- CANONICAL TAG -->

    <?php include "5-common-seo-tag-1.php" ?>

    <!-- OGP TAG -->

    <meta property="og:title" content="MOCS : Freebie Download">
    <meta property="og:site_name" content="MIT School of Distance Education">
    <meta property="og:url" content="https://mitsde.com/feedback.php">
    <meta property="og:description" content="">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://mitsde.com/feedback">

    <!-- / OG TAG -->
    <link rel="icon" type="image/png" href="assets/images/favicon-mit.ico" />
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/bootstrap-select.min.css" />
    <link rel="stylesheet" href="assets/css/slick.min.css" />
    <link rel="stylesheet" href="assets/css/fonts.css" type="text/css" />
    <link rel="stylesheet" href="assets/css/style.css" type="text/css" />
    <link rel="stylesheet" href="assets/fontawesome/css/all.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/course-common-internal.css" type="text/css" />
    <link rel="stylesheet" href="assets/css/form-new.css" type="text/css" />

    <style>
        @media (max-width: 480px) {
            .g-recaptcha {
                transform: scale(0.75);
                transform-origin: 0 0;
            }
        }
    </style>

    <!--API for Queck contact----->
    <script src="assets/js/api/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="assets/js/api/validation.js" charset="UTF-8"></script>

    <script>
        function validate(form) {
            var studentname = form.studentname.value.trim();
            var last_institute = form.last_institute.value.trim();
            var Your_Email = form.Your_Email.value.trim();
            var Mobile_no = form.Mobile_no.value.trim();
            var recommendation = form.recommendation.value; // Radio button

            var errors = [];

            // Existing validations
            var ck_name = /^[A-Za-z0-9 ]{3,100}$/;
            var ck_email = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/;
            var ck_mob = /^[\s()+-]*([0-9][\s()+-]*){10}$/;

            if (!ck_name.test(studentname)) {
                errors.push("Please enter a valid Name.");
            }
            if (last_institute.length < 3) {
                errors.push("Please enter a valid Institute Name.");
            }
            if (!ck_email.test(Your_Email)) {
                errors.push("Please enter a valid Email address.");
            }
            if (!ck_mob.test(Mobile_no)) {
                errors.push("Please enter a valid 10-digit Mobile number.");
            }

            // New validation for radio buttons
            var radios = form.recommendation;
            var radioChecked = false;
            for (var i = 0; i < radios.length; i++) {
                if (radios[i].checked) {
                    radioChecked = true;
                    break;
                }
            }
            if (!radioChecked) {
                errors.push("Please select a recommendation (1-10).");
            }

            if (errors.length > 0) {
                reportErrors(errors);
                return false;
            }
            return true;
        }

        function reportErrors(errors) {
            var msg = "Please enter valid data:\n";
            for (var i = 0; i < errors.length; i++) {
                msg += (i + 1) + ". " + errors[i] + "\n";
            }
            alert(msg);
        }
    </script>


    <script src="https://www.google.com/recaptcha/api.js" async defer></script>



</head>

<body>






    <div class="container-fluid px-1 py-5 ">
        <div class="row d-flex justify-content-center">
            <div class="col-xl-7 col-lg-7 col-md-8 col-12">

                <div class="card shadow-lg p-4 rounded-4 border-0" id="card1">
                    <h2 class="text-center mb-4" style="font-size: 1.25rem;">MOCS : Freebie Download</h2>

                    <form class="form-card" id="feedback_form" name="feedback_form"
                        action="includes/sendfreebie-copy-test.php" method="POST"
                        onsubmit="return submitFreebieForm(event);">

                        <div class="mb-3">
                            <input type="text" name="studentname" class="form-control" placeholder="Your Name *" required>
                        </div>

                        <div class="mb-3">
                            <input type="text" name="last_institute" class="form-control" placeholder="Last Attended Educational Institute *" required>
                        </div>

                        <div class="mb-3">
                            <input type="email" name="Your_Email" class="form-control" placeholder="Email ID *" required>
                        </div>

                        <div class="mb-3">
                            <input type="number" name="Mobile_no" class="form-control" placeholder="Contact Number *" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">How likely are you to recommend this Workshop? *</label>
                            <div class="d-flex flex-wrap mt-2">
                                <?php for ($i = 1; $i <= 10; $i++): ?>
                                    <div class="form-check me-2 mb-2 text-center">
                                        <input class="form-check-input" type="radio" name="recommendation" id="rec<?= $i ?>" value="<?= $i ?>" required>
                                        <label class="form-check-label" for="rec<?= $i ?>"><?= $i ?></label>
                                    </div>
                                <?php endfor; ?>
                            </div>
                        </div>

                        <div class="d-flex justify-content-center my-3">
                            <div class="g-recaptcha"
                                data-sitekey="6Lf1dR4gAAAAAJXXpTYVhawIuElj2l7XXvd2FRsJ"
                                data-callback="enableSubmitBtn"
                                style="transform:scale(0.75); transform-origin:0 0;">
                            </div>
                        </div>

                        <div class="form-group mt-3">
                            <button type="submit" id="mysubmitBtn" disabled
                                class="btn w-100 py-2 d-flex align-items-center justify-content-center"
                                style="background:#f47521; color:#fff; border-radius:30px; border:none;">
                                Download
                            </button>
                        </div>
                    </form>

                    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

                    <script>
                        function enableSubmitBtn() {
                            document.getElementById("mysubmitBtn").disabled = false;
                        }

                        function submitFreebieForm(e) {
                            e.preventDefault();

                            let form = $("#feedback_form");
                            let formData = form.serialize();

                            $.ajax({
                                url: "includes/sendfreebie-copy-test.php",
                                type: "POST",
                                data: formData,
                                success: function(response) {

                                    if (response.trim() === "success") {

                                        // ------------- DIRECT PDF DOWNLOAD -------------
                                        var pdfUrl = "Emailers/Webinar-on-Handwriting-Analysis.pdf";
                                        var link = document.createElement('a');
                                        link.href = pdfUrl;
                                        link.setAttribute('download', "Webinar-on-Handwriting-Analysis.pdf");
                                        document.body.appendChild(link);
                                        link.click();
                                        document.body.removeChild(link);

                                        // ------------- RESET FORM -------------
                                        form[0].reset();

                                        // Disable button again
                                        $("#mysubmitBtn").prop("disabled", true);

                                        // ------------- REDIRECT -------------
                                        setTimeout(() => {
                                            window.location.href = "https://mitsde.com/thankyou";
                                        }, 1500);

                                    } else {
                                        alert("Error: " + response);
                                    }
                                }
                            });

                            return false;
                        }
                    </script>







                </div>
            </div>
        </div>
    </div>



    <?php // include "footer.php" 
    ?>


    <!-- footer end  -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/bootstrap-select.min.js"></script>
    <script src="assets/js/slick.min.js"></script>
    <script src="assets/js/common.js"></script>
    <script src="assets/js/course-slider.js"></script>

</body>

</html>