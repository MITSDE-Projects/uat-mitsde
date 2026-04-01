<form action="../thankyou.php" method="post" class="reservation-form mt-20 myFormM" accept-charset="utf-8"
    name="menuContactFloting" id="menuContactFloting" novalidate="novalidate">
    <input type="hidden" name="csrf_test_name" value="e678298614a47d7e40efe0ccaf02b49c" />
    <input type="hidden" id="product_id3" name="product_id3" value="0" />
    <!-- <input type="hidden" id="product_name3" name="product_name3" value="" /> -->
     <input type="text" name="website" style="display:none">
    <input type="hidden" name="request_type3" value="Enquiry" />

    <div class="input-group mb-3">
        <span class="input-group-text" id="userName"><i class="icon-name"></i></span>
        <input name="first_name3" type="text" class="form-control" value="First Name*"
            onBlur="javascript:addDefault(this,'menuContactFloting')" onFocus="javascript:removeDefault(this)"
            validate="Required|First Name*" />
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="userEmail"><i class="icon-email"></i></span>
        <input name="email3" type="text" class="form-control" value="Email*"
            onBlur="javascript:addDefault(this,'menuContactFloting')" onFocus="javascript:removeDefault(this)"
            validate="Email|Email*" />
    </div>
    <div class="input-group country-list mb-3">
        <input type="text" class="form-control country-code" name="MobileNumber" placeholder="Mobile" pattern="[0-9]" value="MobileNumber*"
            aria-label="Mobile" aria-describedby="userMobile" onBlur="javascript:addDefault(this,'menuContactFloting')" onFocus="javascript:removeDefault(this)"
            validate="Required|Phone|Phone*">
    </div>
      

                 
    <div class="input-group select-box lead-s1 mb-3" >
        <span class="input-group-text"  ><i class="icon-cource"></i></span>
        <select name="state"  class="form-select form-control " id="state" onBlur="javascript:addDefault(this,'menuContactFloting')" onFocus="javascript:removeDefault(this)" validate="Required|State|State*">
            <option value="" disabled selected>Select State</option>
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
    <div class="input-group select-box lead-s1 mb-3">
        <span class="input-group-text" id="userCourse"><i class="icon-institution"></i></span>
        <select name="HQ" id="HQ" class="form-select form-control "  onBlur="javascript:addDefault(this,'menuContactFloting')" onFocus="javascript:removeDefault(this)"
        validate="Required|HQ*">
            <option value="" disabled selected>Select Highest Qualification</option>
            <option value="graduation">Graduation</option>
            <option value="post graduation">Post Graduation</option>
            <option value="Diploma">Diploma</option>
        </select>
        <input name="Divice" type="hidden" value="<?php echo $divice; ?>" />
        <input name="PageName" type="hidden" value="<?php echo $pagename; ?>" />
        <input type="hidden" name="latitude" value="">
        <input type="hidden" name="longitude" value="">

    </div>
   
    <div class="d-grid leadgen-btn">
        <input type="hidden" name="submitthirdcontact" value="submitthirdcontact" />
        <button class="btn btn-main" type="button" id="submitbtnsticky" onClick="validate('menuContactFloting')">Register Now</button>
    </div>

</form>