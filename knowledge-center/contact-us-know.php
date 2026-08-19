<form action="thankyou.php" method="post"
      name="menuContactknow"
      id="menuContactknow"
      novalidate="novalidate"
      accept-charset="utf-8">

    <input type="hidden" name="csrf_test_name" value="e678298614a47d7e40efe0ccaf02b49c">
    <input type="hidden" id="product_id3" name="product_id3" value="0">
    <input type="hidden" name="request_type3" value="Enquiry">
    <input type="hidden" name="submitthirdcontact" value="submitthirdcontact">

    <input name="Divice" type="hidden" value="<?php echo $divice; ?>">
    <input name="PageName" type="hidden" value="<?php echo $pagename; ?>">
    <input type="hidden" name="latitude" value="">
    <input type="hidden" name="longitude" value="">

    <!-- Honeypot -->
    <input type="text"
           name="website"
           tabindex="-1"
           autocomplete="off"
           style="position:absolute;left:-9999px;opacity:0;pointer-events:none;">

    <!-- Name -->
    <div class="eq-field">
        <i class="fa-solid fa-user eq-icon"></i>
        <input
            type="text"
            name="first_name3"
            class="eq-input"
            placeholder="Full Name *"
            validate="Required|Full Name*"
            autocomplete="off">
    </div>

    <!-- Email -->
    <div class="eq-field">
        <i class="fa-solid fa-envelope eq-icon"></i>
        <input
            type="email"
            name="email3"
            class="eq-input"
            placeholder="Email Address *"
            validate="Email|Email*"
            autocomplete="off">
    </div>

    <!-- Mobile -->
    <div class="eq-field">
        <i class="fa-solid fa-phone eq-icon"></i>
        <input
            type="tel"
            name="MobileNumber"
            class="eq-input"
            placeholder="Mobile Number *"
            maxlength="10"
            validate="Required|Phone|Phone*"
            autocomplete="off">
    </div>

    <!-- State -->
    <div class="eq-field">
        <i class="fa-solid fa-location-dot eq-icon"></i>
        <select
            name="state"
            class="eq-input eq-select"
            validate="Required|State|State*">

            <option value="">Select State *</option>
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

    <!-- Highest Qualification -->
    <div class="eq-field">
        <i class="fa-solid fa-graduation-cap eq-icon"></i>
        <select
            name="HQ"
            id="HQ"
            class="eq-input eq-select"
            validate="Required|HQ*">

            <option value="">Highest Qualification *</option>
            <option value="graduation">Graduation</option>
            <option value="post graduation">Post Graduation</option>
            <option value="Diploma">Diploma</option>
        </select>
    </div>

    <div class="eq-consent">
        <input type="checkbox" id="eqConsent" checked>
        <label for="eqConsent">I authorize MIT-SDE representative to contact me, this will override DND/NDNC registry.</label>
    </div>

    <!-- Submit -->
    <button
        type="button"
        id="submitbtnknow"
        class="eq-submit"
        onclick="validate('menuContactknow')">
        Register Now
    </button>

</form>