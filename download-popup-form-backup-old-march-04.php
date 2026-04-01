<div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="enquiryModal-download-form">Enquire Now </h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="col-md-12 col-lg-5 modal-img">
                    <img src="assets/images/enquirey.png" class="img-fluid" alt="">
                </div>
                <div class="col-md-12 col-lg-7">
                    <form action="thankyou.php" method="post" name="menuContactform1" id="menuContactform1">

                        <input type="hidden" name="csrf_test_name" value="e678298614a47d7e40efe0ccaf02b49c" />
                        <input type="hidden" id="product_id3" name="product_id3" value="0" />
                        <input type="hidden" id="product_name3" name="product_name3" value="" />
                        <input type="hidden" name="request_type3" value="Enquiry" />

                        <div class="input-group mb-2 con-form">
                            <span class="input-group-text"><i class="mtsk-user"></i></span>
                            <input name="first_name3" type="text" class="form-control" value="First Name*"
                                onBlur="javascript:addDefault(this,'menuContactform1')"
                                onFocus="javascript:removeDefault(this)" validate="Required|First Name*" />
                        </div>



                        <div class="input-group mb-2 con-form">
                            <span class="input-group-text"><i class="mtsk-mail"></i></span>
                            <input name="email3" type="text" class="form-control" value="Email*"
                                onBlur="javascript:addDefault(this,'menuContactform1')"
                                onFocus="javascript:removeDefault(this)" validate="Email|Email*" />
                        </div>

                        <div class="input-group mb-2 con-form">
                            <span class="input-group-text"><i class="mtsk-phone"></i></span>
                            <input name="MobileNumber" class="form-control" type="text" pattern="[0-9]"
                                value="MobileNumber*" onBlur="javascript:addDefault(this,'menuContactform1')"
                                onFocus="javascript:removeDefault(this)" validate="Required|Phone|Phone*" />
                        </div>


                        <div class="input-group mb-2 con-form">
                            <span class="input-group-text"><i class="mtsk-cource"></i></span>
                            <select name="state" class="form-control" aria-label="Default select example" id="state"
                                onBlur="javascript:addDefault(this,'QuickContact3')"
                                onFocus="javascript:removeDefault(this)" validate="Required|state*">
                                <option selected>Select Course</option>
                                <option value="Advanced Certificate In UI UX">Advanced Certificate In UI UX</option>
                                <option value="Fintech">Fintech</option>
                                <option value="AI in Digital Marketing">AI in Digital Marketing</option>
                                <option value="Lean Six Sigma (Green + Black Belt)">Lean Six Sigma (Green + Black Belt)
                                </option>
                                <option value="PMI Certification">PMI Certification</option>

                            </select>
                        </div>
                        <div class="input-group mb-2 con-form">
                            <span class="input-group-text"><i class="mtsk-cource"></i></span>
                            <select name="course" class="form-control" aria-label="Default select example">
                                <option value="Select State">Select State</option>
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

                        <div class="form-group mt-1">
                            <input type="hidden" name="submitthirdcontact" value="submitthirdcontact" />
                            <button type="button" id="submitbtn2"
                                class="btn btn-primary mit-button mit-footer btn-ripple w-100 "
                                onClick="validate('menuContactform1')">
                                Register Now
                            </button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>