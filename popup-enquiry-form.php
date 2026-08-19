<?php
/* Enquiry Popup Modal — Bootstrap 5
   Include once in footer-new.php (after scripts).
   Open: data-bs-toggle="modal" data-bs-target="#eqModal"
      or openEnquiryPopup()  /  openEnquiryPopup({ productId: 5 })
   Form submits → thankyou.php → DB insert → thank you page.
*/
$_eq_device   = isset($divice)   ? $divice   : 'desktop';
$_eq_pagename = isset($pagename) ? $pagename : ((isset($_SERVER['HTTPS']) ? 'https' : 'http') . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]");
?>

<!-- ── Enquiry Popup Modal ── -->
<div class="modal fade" id="eqModal" tabindex="-1"
     role="dialog" aria-labelledby="eqTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered eq-dialog">
        <div class="modal-content eq-card">

            <!-- Close button -->
            <button type="button" class="eq-close"
                    data-bs-dismiss="modal" aria-label="Close"><i class="fa-solid fa-xmark"></i></button>

            <!-- Left branding panel -->
            <div class="eq-left">
                <img src="assets-new/images/logo_mitsde.png"
                     alt="MIT School of Distance Education" class="eq-logo">
                <h2 class="eq-heading">Get in Touch</h2>
                <p class="eq-sub">Our academic advisor will help you find the right program for your career goals.</p>
                <a href="tel:9112207207" class="eq-phone">
                    <svg viewBox="0 0 24 24" fill="currentColor" width="14" height="14">
                        <path d="M6.6 10.8c1.4 2.8 3.8 5.1 6.6 6.6l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.58.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1C10.61 21 3 13.39 3 4c0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.24 1.02L6.6 10.8z"/>
                    </svg>
                    9112207207
                </a>
            </div>

            <!-- Right form panel -->
            <div class="eq-right">
                <h3 class="eq-title" id="eqTitle">Enquire Now</h3>

                <form action="thankyou.php" method="post"
                      name="menuContactFloting" id="menuContactFloting"
                      novalidate="novalidate" accept-charset="utf-8">

                    <input type="hidden" name="csrf_test_name"     value="e678298614a47d7e40efe0ccaf02b49c">
                    <input type="hidden" name="product_id3"        id="eqProductId" value="0">
                    <input type="hidden" name="request_type3"      value="Enquiry">
                    <input type="hidden" name="submitthirdcontact" value="submitthirdcontact">
                    <input type="hidden" name="Divice"   value="<?php echo htmlspecialchars($_eq_device); ?>">
                    <input type="hidden" name="PageName" value="<?php echo htmlspecialchars($_eq_pagename); ?>">
                    <input type="hidden" name="latitude"  value="">
                    <input type="hidden" name="longitude" value="">
                    <!-- Honeypot — bots fill this, server rejects -->
                    <input type="text" name="website" tabindex="-1" autocomplete="off"
                           style="position:absolute;left:-9999px;opacity:0;pointer-events:none;">

                    <div class="eq-field">
                        <i class="fa-solid fa-user eq-icon"></i>
                        <input type="text" name="first_name3" class="eq-input"
                               placeholder="Full Name *"
                               validate="Required|Full Name*"
                               autocomplete="off">
                    </div>

                    <div class="eq-field">
                        <i class="fa-solid fa-envelope eq-icon"></i>
                        <input type="email" name="email3" class="eq-input"
                               placeholder="Email Address *"
                               validate="Email|Email*"
                               autocomplete="off">
                    </div>

                    <div class="eq-field">
                        <i class="fa-solid fa-phone eq-icon"></i>
                        <input type="tel" name="MobileNumber" class="eq-input"
                               placeholder="Mobile Number *" maxlength="10"
                               validate="Required|Phone|Phone*"
                               autocomplete="off">
                    </div>

                    <div class="eq-field">
                        <i class="fa-solid fa-graduation-cap eq-icon"></i>
                        <select name="HQ" class="eq-input eq-select" validate="Required|HQ*">
                            <option value="">Highest Qualification *</option>
                            <option value="graduation">Graduation</option>
                            <option value="post graduation">Post Graduation</option>
                            <option value="Diploma">Diploma</option>
                        </select>
                    </div>

                    <div class="eq-field">
                        <i class="fa-solid fa-location-dot eq-icon"></i>
                        <select name="state" class="eq-input eq-select" validate="Required|State|State*">
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

                    <div class="eq-consent">
                        <input type="checkbox" id="eqConsent" checked>
                        <label for="eqConsent">I authorize MIT-SDE representative to contact me, this will override DND/NDNC registry.</label>
                    </div>

                    <button type="button" id="submitbtnsticky" class="eq-submit"
                            onclick="validate('menuContactFloting')">
                        Register Now
                    </button>

                </form>
            </div>

        </div>
    </div>
</div>

<script>
(function () {
    /* Geolocation — set on this form specifically (by ID, not .myFormH) */
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function (pos) {
            var f = document.getElementById('menuContactFloting');
            if (!f) return;
            f.querySelector('[name="latitude"]').value  = pos.coords.latitude;
            f.querySelector('[name="longitude"]').value = pos.coords.longitude;
        });
    }

    /* openEnquiryPopup — call from any button when productId needs to be set dynamically */
    window.openEnquiryPopup = function (opts) {
        opts = opts || {};
        document.getElementById('eqProductId').value = opts.productId || 0;
        /* Reset submit button (validation.js hides it on submit) */
        var btn = document.getElementById('submitbtnsticky');
        if (btn) btn.style.visibility = 'visible';
        bootstrap.Modal.getOrCreateInstance(document.getElementById('eqModal')).show();
    };

    /* Reset submit button when modal is closed, so next open is clean */
    document.getElementById('eqModal').addEventListener('hidden.bs.modal', function () {
        var btn = document.getElementById('submitbtnsticky');
        if (btn) btn.style.visibility = 'visible';
    });
}());
</script>
