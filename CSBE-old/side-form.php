<!DOCTYPE html>

<html lang="en">



<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>



    <style>
        /* Slide-in from right */



        .enquire-now-btn {

            top: 420px;

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

            top: 20%;

            right: 0;

            margin: 0;

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

    <script type="text/javascript">
        var ck_name = /^[A-Za-z0-9 ]{3,100}$/;
        var ck_email = /^([\w.-]+)@([\w-]+\.)+([a-z]{2,6})$/i;
        var ck_mob = /^[6-9][0-9]{9}$/; // starts with 6/7/8/9 and is 10 digits

        function validate(form) {
            // Trim + remove middle spaces
            var yourname = form.yourname.value.trim();
            var cname = form.cname.value.trim();
            var designation = form.designation.value.trim();
            var email = form.email.value.replace(/\s+/g, '').trim();  // Remove all spaces from email
            var MobileNo = form.mobile.value.replace(/\s+/g, '').trim();  // Remove all spaces from mobile

            // Update fields with cleaned values
            form.yourname.value = yourname;
            form.cname.value = cname;
            form.designation.value = designation;
            form.email.value = email;
            form.mobile.value = MobileNo;

            var errors = [];

            if (!ck_name.test(yourname)) {
                errors.push("Please enter your full name");
            }

            if (!ck_name.test(cname)) {
                errors.push("Please enter your company name");
            }

            if (!ck_name.test(designation)) {
                errors.push("Please enter your designation");
            }

            if (!ck_email.test(email)) {
                errors.push("Please enter a valid email address.");
            }

            if (!ck_mob.test(MobileNo)) {
                errors.push("Please enter a valid 10-digit mobile number.");
            }

            // Reject repeated digits (e.g., 1111111111)
            if (/^(\d)\1{9}$/.test(MobileNo)) {
                errors.push("Mobile number cannot be all repeated digits like 1111111111.");
            }

            if (errors.length > 0) {
                reportErrors(errors);
                return false;
            }

            return true;
        }

        function reportErrors(errors) {
            var msg = "Please fix the following:\n\n";
            for (var i = 0; i < errors.length; i++) {
                msg += (i + 1) + ". " + errors[i] + "\n";
            }
            alert(msg);
        }
    </script>

    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <script>
        function enableSubmitBtn() {
            document.getElementById("mysubmitBtn").disabled = false;  //enable the submit button

        }
    </script>

</head>



<body>



    <a href="#" data-bs-toggle="modal" data-bs-target="#rightSideForm" class="btn btn-brand enquire-now-btn">

        Enquire Now

    </a>





    <div class="modal fade" id="rightSideForm" tabindex="-1" aria-labelledby="rightSideFormLabel" aria-hidden="true">

        <div class="modal-dialog modal-dialog-slide modal-dialog-right">

            <div class="modal-content">

                <div class="modal-body">

                    <!-- Your form starts here -->

                    <form action="sendreferfriend.php" class="p-3 row g-1" onsubmit="return validate(this);"
                        method="post" novalidate>

                        <div class="row">

                            <div class="col-md-10">

                                <h4>Get in touch</h4>

                            </div>

                            <div class="col-md-2">

                                <div class="d-flex  justify-content-end">



                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>

                                </div>

                            </div>

                        </div>









                        <div class="col-lg-12">



                            <input type="text" class="form-control" placeholder="Enter Your Name" name="yourname"
                                id="firstName">

                        </div>



                        <!-- <div class="col-lg-12">

                            <select class="form-select " name="gender" id="backgroundid" aria-label="Default select example">

                                <option selected>Gender</option>

                                <option value="male">Male</option>

                                <option value="female">Female</option>

                               

                            </select>

                        </div> -->

                        <div class="col-12">



                            <input type="text" class="form-control" placeholder="Enter Your Company Name" name="cname"
                                id="cname">

                        </div>

                        <div class="col-12">



                            <input type="text" class="form-control" placeholder="Enter Your Designation"
                                name="designation" id="designation">

                        </div>



                        <div class="col-lg-12">



                            <input type="text" class="form-control" placeholder="Enter Your Mobile" name="mobile"
                                id="lastName">
                            <!-- <input type="number" class="form-control" placeholder="Enter Your Mobile" name="mobile" id="lastName"> -->

                        </div>





                        <div class="col-12">



                            <input type="email" class="form-control" placeholder="Enter Your Email" name="email"
                                id="email">

                        </div>

                        <div class="col-12">
                            <div style="transform: scale(0.85); transform-origin: 0 0; -webkit-transform: scale(0.85); -webkit-transform-origin: 0 0; width: fit-content;">
                                <div class="g-recaptcha" data-sitekey="6Lf1dR4gAAAAAJXXpTYVhawIuElj2l7XXvd2FRsJ"
                                    required="" data-callback="enableSubmitBtn">
                                </div>
                            </div>
                        </div>



                        <div class="col-12">

                            <button type="submit" class="btn btn-brand submitbtn" id="mysubmitBtn" disabled="disabled"
                                value="Save">Submit</button>

                        </div>

                    </form>

                    <!-- Your form ends here -->

                </div>

            </div>

        </div>

    </div>







</body>



</html>