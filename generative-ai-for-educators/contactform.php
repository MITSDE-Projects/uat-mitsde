<?php
// include("../admin/include/config.php");
include("../admin/include/configpdo.php");

function generatetransactionid()
{
    return date('dmyhis');
}

$transactionId = generatetransactionid();

$stmt = $conn->prepare("SELECT 1 FROM ai_transaction WHERE t_process_id = ?");
$stmt->execute([$transactionId]);

if ($stmt->fetch()) {
    $transactionId = generatetransactionid();
}

?>

<script type="text/javascript" src="assets/js/api/validation.js" charset="UTF-8"></script>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>

<script type="text/javascript">
    var ck_name = /^[A-Za-z0-9 ]{3,100}$/;
    var ck_email = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/;
    var ck_username = /^[A-Za-z0-9_]{1,20}$/;
    var ck_password = /^[A-Za-z0-9!@#$%^&*()_]{6,20}$/;
    var ck_mob = /^[\s()+-]*([0-9][\s()+-]*){10}$/;


    function validate(form) {

        var FirstName = form.firstName.value.trim();
        var LastName = form.lastName.value.trim();
        var email = form.billing_email.value.trim();
        var MobileNo = form.delivery_tel.value.trim();
        var Role = form.merchant_param2.value.trim();
        var Institute = form.institute.value.trim();
        var Amount = form.amount.value.trim();


        var errors = [];

        if (!ck_name.test(FirstName)) {
            errors[errors.length] = "Please Enter Your First Name";
        }

        if (!ck_name.test(LastName)) {
            errors[errors.length] = "Please Enter Your Last Name";
        }

        if (!ck_email.test(email)) {
            errors[errors.length] = "You must enter a valid email address.";
        }
        if (!ck_mob.test(MobileNo)) {
            errors[errors.length] = "You must enter a valid Mobile.";
        }

        if (!ck_name.test(Institute)) {
            errors[errors.length] = "Please Enter Your Institution/Organization";
        }

        if (Role == 0) {
            errors[errors.length] = "Select Your Role";
        }

        if (Amount === "" || isNaN(Amount)) {
            errors.push("Please enter a valid Amount.");
        }


        if (errors.length > 0) {
            reportErrors(errors);
            return false;
        }

        return true;
    }

    function reportErrors(errors) {
        var msg = "Please address the following issues before submitting your form:\n\n";
        for (var i = 0; i < errors.length; i++) {
            var numError = i + 1;
            msg += "\n" + numError + ". " + errors[i];
        }
        alert(msg);
    }
</script>

<script>
    function enableSubmitBtn() {
        document.getElementById("mysubmitBtn").disabled = false;  //enable the submit button

    }
</script>

<script>
    window.onload = function () {
        var d = new Date().getTime();
        document.getElementById("tid").value = d;
    };
</script>

<form action="ai-RequestHandler.php" name="AiFeesPayment" id="AiFeesPayment" onsubmit="return validate(this);"
    method="post">


    <input type="hidden" name="tid" id="tid" />
    <!--<input type="hidden" name="merchant_id" id="merchant_id" value="193023"/>-->
    <input type="hidden" name="merchant_id" id="merchant_id" value="236596" />
    <input type="hidden" name="order_id" value="<?php echo htmlspecialchars($transactionId, ENT_QUOTES, 'UTF-8'); ?>" />
    <input type="hidden" name="currency" value="INR" />
    <input type="hidden" name="redirect_url" id="redirect_url" value="https://mitsde.com/generative-ai-for-educators/ai-ResponseHandler.php" />
    <input type="hidden" name="cancel_url" id="cancel_url" value="https://mitsde.com/generative-ai-for-educators/ai-ResponseHandler.php" />
    <input type="hidden" name="language" value="EN" />



    <div class="row ">

        <div class="form-group">
            <input type="text" class="form-control" name="firstName" id="firstName" value="" placeholder="First Name">
            <input type="text" class="form-control" name="lastName" id="lastName" value="" placeholder="Last Name">
        </div>
        <input type="hidden" name="delivery_address" value="Pune" />
    </div>


    <div class="row">
        <div class="form-group">
            <input type="text" class="form-control" name="billing_email" id="EmailID" value="" placeholder="Email ID">
        </div>

        <div class="form-group">
            <input type="text" class="form-control" name="delivery_tel" id="MobileNo" value="" placeholder="Mobile No">
        </div>

        <div class="form-group">
            <input type="text" class="form-control" name="institute" id="institute" value=""
                placeholder="Institution/Organization">
        </div>

        <div class="form-group">

            <select class="form-select form-select-md" name="merchant_param2" id="merchant_param2">
                <option value="" selected disabled>Select your role</option>
                <option value="Teacher/Professor">Teacher/Professor</option>
                <option value="Principal/Director">Principal/Director</option>
                <option value="Curriculum Designer">Curriculum Designer</option>
                <option value="Education Technology Specialist">Education Technology Specialist</option>
                <option value="Student">Student</option>
                <option value="Other">Other</option>
            </select>
        </div>

        <input type="hidden" name="delivery_address" value="" /></td>
        <input type="hidden" name="delivery_city" value="" /></td>
        <input type="hidden" name="delivery_state" value="" /></td>
        <input type="hidden" name="delivery_zip" value="" /></td>
        <input type="hidden" name="delivery_country" value="" /></td>

        <div class="form-group">
            <div id="statediv"><input type="hidden" class="form-control" name="amount" id="exampleInputPassword1"
                    placeholder="Amount" value="499"></div>
        </div>
        <input type="hidden" class="form-control" name="merchant_param3" id="merchant_param3" value="generative-ai-for-educators">

        <div class="d-flex justify-content-center mt-2">
            <div class="g-recaptcha" data-sitekey="6Lf1dR4gAAAAAJXXpTYVhawIuElj2l7XXvd2FRsJ" required=""
                data-callback="enableSubmitBtn">
            </div>
        </div>


        <div class="center mt-2">
            <input name="form_botcheck" class="form-control" type="hidden" value="" />
            <button type="submit" id="mysubmitBtn" disabled="disabled"
                style="background: #f47521;width: 50%;color: #fff;" class="btn btn-primary">Register
                Now</button>
        </div>
</form>