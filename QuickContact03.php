<style>
.popup-btn a {
    top: 400px;
    position: fixed;

    left: -45px;
    z-index: 1000;
    transform: rotate(-90deg);
    background-color: red;
    padding: 10px 20px 35px;
    height: 0px;
    background-color: #f47521;
    color: #fff;
}

.popup-btn a:hover {
    text-decoration: none;
    color: #fff;
}

.modal-header {
    padding: 50px 0px !important;
}

.modal {
    display: none;
    position: fixed;
    z-index: 999999999;
    left: 0;
    top: 0;


    padding-top: 60px;
}

.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto;
    width: 80%;
    padding: 20px;
    border: 3px solid #000 !important;
}

.close1 {
    position: fixed;
    z-index: 1000;
    left: 327px;
    top: 90px;
    font-size: 35px;
    font-weight: bold;
    border-radius: 50%;
    height: 30px;
    width: 30px;
    text-align: center;
}

.close1:hover,
.close1:focus {
    cursor: pointer;
}

.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
    from {
        -webkit-transform: scale(0)
    }

    to {
        -webkit-transform: scale(1)
    }
}

@keyframes animatezoom {
    from {
        transform: scale(0)
    }

    to {
        transform: scale(1)
    }
}

@media screen and (max-width: 768px) {
    .close1 {
        position: absolute;
        z-index: 1000;
        right: 34px;
        top: 154px;

        .modal-header {
            padding: 10px 0px !important;
        }

        .modal {
            display: none;
            position: fixed;
            z-index: 999999999;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgb(0, 0, 0);
            background-color: rgba(0, 0, 0, 0.4);
            padding-top: 60px;
        }

        .modal-content {
            background-color: #fefefe;
            margin: 5% auto 15% auto;
            width: 80%;
            padding: 20px;
            border: 3px solid #000 !important;
        }
    }

    .close1:hover,
    .close1:focus {
        cursor: pointer;
    }
}
</style>

<script>
var modal = document.getElementById('id01');
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>


<div class="col-md-8 box" id="box">

    <h4 class="widget-title" style="color:#FFFFFF; padding-top:15px;">Quick Contact </h4>
    <!-- Appilication Form Start-->
    <form action="thankyou.php" method="post" class="reservation-form mt-20" accept-charset="utf-8" name="QuickContact3"
        id="QuickContact3" novalidate="novalidate">
        <input type="hidden" name="csrf_test_name" value="e678298614a47d7e40efe0ccaf02b49c" />
        <input type="hidden" id="product_id3" name="product_id3" value="0" />
        <input type="hidden" id="product_name3" name="product_name3" value="" />
        <input type="hidden" name="request_type3" value="Enquiry" />
        <div class="row">
            <div class="col-sm-12">
                <div class="form-group mb-5" style="margin-bottom: 5px;">

                    <input name="first_name3" type="text" class="form-control" value="First Name*"
                        onBlur="javascript:addDefault(this,'QuickContact3')" onFocus="javascript:removeDefault(this)"
                        validate="Required|First Name*" />
                </div>
            </div>

            <div class="col-sm-12">
                <div class="form-group mb-5" style="margin-bottom: 5px;">
                    <input name="email3" type="text" class="form-control" value="Email*"
                        onBlur="javascript:addDefault(this,'QuickContact3')" onFocus="javascript:removeDefault(this)"
                        validate="Email|Email*" />
                </div>
            </div>
            <div class="col-sm-12">
                <div class="form-group mb-5" style="margin-bottom: 5px;">
                    <input name="MobileNumber" class="form-control" type="text" pattern="[0-9]" value="MobileNumber*"
                        onBlur="javascript:addDefault(this,'QuickContact3')" onFocus="javascript:removeDefault(this)"
                        validate="Required|Phone|Phone*" />

                </div>
            </div>


            <div class="col-sm-12">
                <div class="form-group mb-5" style="margin-bottom: 5px;">
                    <select name="state" id="state" class="form-control"
                        onBlur="javascript:addDefault(this,'QuickContact3')" onFocus="javascript:removeDefault(this)"
                        validate="Required|state*">
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


                </div>
            </div>
            <div class="col-sm-12">
                <div class="form-group mb-5" style="margin-bottom: 5px;">
                    <select name="HQ" id="HQ" class="form-control" onBlur="javascript:addDefault(this,'QuickContact3')"
                        onFocus="javascript:removeDefault(this)" validate="Required|HQ*">
                        <option value="" readonly>Select Highest Qualification</option>
                        <option value="graduation">Graduation</option>
                        <option value="post graduation">Post Graduation</option>
                        <option value="Diploma">Diploma</option>

                    </select>

                </div>
            </div>


            <div class="col-sm-12">
                <div class="form-group mb-5" style="margin-bottom: 5px;">
                    <input id="check-box" name="Authorize" checked="checked" disabled="disabled" type="checkbox"
                        onBlur="javascript:addDefault(this,'QuickContact3')"
                        onFocus="javascript:removeDefault(this)" /><a style="color:#FFFFFF;"><span
                            style="font-size:9px;">I authorize MIT-SDE representative to contact me,this will override
                            DND/NDNC registry and <b>subscribe to newsletter</b></span></a>

                </div>
            </div>

            <div class="col-sm-4">
                <div class="form-group btn-theme-colored mb-0 mt-5"
                    style="border-radius: 15px;text-align: center;top: 15px;">
                    <input type="hidden" name="submitthirdcontact" value="submitthirdcontact" />
                    <input type="button" id="submitbtnsticky" style="height:31px;padding:1px 3px 3px" name="submitbtn"
                        value="SUBMIT" style="background-color:none;" onClick="validate('QuickContact3')" />

                </div>
            </div>
        </div>
    </form>
    <div class="submitbtn123"></div>
    <!-- Application Form End-->


</div>