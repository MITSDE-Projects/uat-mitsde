<?php
/* City page hero lead form — include inside .ph-form-col of a city page hero.
   Submits → validation.js (cityHeroForm: CRM lead) → thankyou.php (DB insert, incl. city).
   City is posted to thankyou.php only; it is not sent to the CRM yet. */
$_city_device   = isset($divice)   ? $divice   : 'desktop';
$_city_pagename = isset($pagename) ? $pagename : ((isset($_SERVER['HTTPS']) ? 'https' : 'http') . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]");
?>
<div class="contact-form city-form">
    <h3 class="city-form-title">Fill out your details for free career counseling.</h3>

    <form action="thankyou.php" method="post"
          name="cityHeroForm" id="cityHeroForm"
          novalidate="novalidate" accept-charset="utf-8">

        <input type="hidden" name="csrf_test_name"     value="e678298614a47d7e40efe0ccaf02b49c">
        <input type="hidden" name="product_id3"        value="0">
        <input type="hidden" name="request_type3"      value="Enquiry">
        <input type="hidden" name="submitthirdcontact" value="submitthirdcontact">
        <input type="hidden" name="Divice"   value="<?php echo htmlspecialchars($_city_device); ?>">
        <input type="hidden" name="PageName" value="<?php echo htmlspecialchars($_city_pagename); ?>">
        <input type="hidden" name="latitude"  value="">
        <input type="hidden" name="longitude" value="">
        <!-- Honeypot — bots fill this, server rejects -->
        <input type="text" name="website" tabindex="-1" autocomplete="off"
               style="position:absolute;left:-9999px;opacity:0;pointer-events:none;">

        <input type="text" name="first_name3" class="form-control"
               placeholder="Full Name" validate="Required|Full Name*" autocomplete="off">

        <input type="email" name="email3" class="form-control"
               placeholder="Email" validate="Email|Email*" autocomplete="off">

        <input type="tel" name="MobileNumber" class="form-control"
               placeholder="Mobile Number" maxlength="10"
               oninput="this.value = this.value.replace(/[^0-9]/g, '')"
               validate="Required|Phone|Phone*" autocomplete="off">

        <select name="state" id="cityFormState" class="form-select form-control" validate="Required|State|State*">
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

        <select name="city" id="cityFormCity" class="form-select form-control" validate="Required|City*" disabled>
            <option value="">Select City</option>
        </select>

        <select name="HQ" class="form-select form-control" validate="Required|HQ*">
            <option value="">Qualification</option>
            <option value="graduation">Graduation</option>
            <option value="post graduation">Post Graduation</option>
            <option value="Diploma">Diploma</option>
        </select>

        <div class="city-consent">
            <input type="checkbox" id="cityConsent" checked>
            <label for="cityConsent">I authorize MIT-SDE representative to contact me, this will override DND/NDNC registry.</label>
        </div>

        <button type="button" id="submitbtnCity" class="btn-register"
                onclick="validate('cityHeroForm')">Register Now</button>
    </form>
</div>

<script>
(function () {
    /* State → City dropdown. Every state ends with "Other" so no learner is blocked. */
    var cities = {
        "Andhra Pradesh": ["Visakhapatnam", "Vijayawada", "Guntur", "Nellore", "Tirupati", "Kurnool", "Kakinada", "Rajahmundry"],
        "Andaman and Nicobar Islands": ["Port Blair"],
        "Arunachal Pradesh": ["Itanagar", "Naharlagun", "Pasighat"],
        "Assam": ["Guwahati", "Silchar", "Dibrugarh", "Jorhat", "Tezpur"],
        "Bihar": ["Patna", "Gaya", "Bhagalpur", "Muzaffarpur", "Darbhanga"],
        "Chandigarh": ["Chandigarh"],
        "Chhattisgarh": ["Raipur", "Bhilai", "Bilaspur", "Durg", "Korba"],
        "Dadar and Nagar Haveli": ["Silvassa"],
        "Daman and Diu": ["Daman", "Diu"],
        "Delhi": ["New Delhi", "Delhi"],
        "Lakshadweep": ["Kavaratti"],
        "Puducherry": ["Puducherry", "Karaikal"],
        "Goa": ["Panaji", "Margao", "Vasco da Gama", "Mapusa"],
        "Gujarat": ["Ahmedabad", "Surat", "Vadodara", "Rajkot", "Gandhinagar", "Bhavnagar", "Jamnagar", "Ankleshwar"],
        "Haryana": ["Gurugram", "Faridabad", "Panipat", "Ambala", "Hisar", "Karnal", "Rohtak", "Sonipat"],
        "Himachal Pradesh": ["Shimla", "Dharamshala", "Solan", "Mandi"],
        "Jammu and Kashmir": ["Srinagar", "Jammu", "Anantnag"],
        "Jharkhand": ["Ranchi", "Jamshedpur", "Dhanbad", "Bokaro"],
        "Karnataka": ["Bangalore", "Mysore", "Mangalore", "Hubli", "Belgaum", "Davanagere", "Shimoga"],
        "Kerala": ["Kochi", "Thiruvananthapuram", "Kozhikode", "Thrissur", "Kollam"],
        "Madhya Pradesh": ["Indore", "Bhopal", "Jabalpur", "Gwalior", "Ujjain"],
        "Maharashtra": ["Mumbai", "Pune", "Nagpur", "Nashik", "Thane", "Aurangabad", "Navi Mumbai", "Kolhapur", "Solapur", "Amravati", "Ahmednagar"],
        "Manipur": ["Imphal"],
        "Meghalaya": ["Shillong"],
        "Mizoram": ["Aizawl"],
        "Nagaland": ["Kohima", "Dimapur"],
        "Odisha": ["Bhubaneswar", "Cuttack", "Rourkela", "Sambalpur"],
        "Punjab": ["Ludhiana", "Amritsar", "Jalandhar", "Patiala", "Mohali", "Bathinda"],
        "Rajasthan": ["Jaipur", "Jodhpur", "Udaipur", "Kota", "Ajmer", "Bikaner"],
        "Sikkim": ["Gangtok"],
        "Tamil Nadu": ["Chennai", "Coimbatore", "Madurai", "Tiruchirappalli", "Salem", "Tirunelveli"],
        "Telangana": ["Hyderabad", "Warangal", "Nizamabad", "Karimnagar"],
        "Tripura": ["Agartala"],
        "Uttar Pradesh": ["Lucknow", "Kanpur", "Noida", "Ghaziabad", "Agra", "Varanasi", "Prayagraj", "Meerut"],
        "Uttarakhand": ["Dehradun", "Haridwar", "Haldwani", "Roorkee"],
        "West Bengal": ["Kolkata", "Howrah", "Durgapur", "Siliguri", "Asansol"]
    };

    var form  = document.getElementById('cityHeroForm');
    var state = document.getElementById('cityFormState');
    var city  = document.getElementById('cityFormCity');

    state.addEventListener('change', function () {
        city.innerHTML = '<option value="">Select City</option>';
        (cities[state.value] || []).concat(state.value ? ['Other'] : []).forEach(function (c) {
            var opt = document.createElement('option');
            opt.value = opt.textContent = c;
            city.appendChild(opt);
        });
        city.disabled = !state.value;
    });

    /* Geolocation — set on this form specifically */
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function (pos) {
            form.querySelector('[name="latitude"]').value  = pos.coords.latitude;
            form.querySelector('[name="longitude"]').value = pos.coords.longitude;
        });
    }
}());
</script>
