<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form with OTP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .otp-input {
            width: 40px;
            height: 40px;
            text-align: center;
            margin: 0 5px;
        }
        #otpVerificationForm {
            display: none;
        }
        .mobile-input-group {
            position: relative;
        }
        .mobile-input-group .form-control {
            padding-right: 110px;
        }
        .mobile-input-group .btn {
            position: absolute;
            right: 0;
            top: 0;
            border-top-left-radius: 0;
            border-bottom-left-radius: 0;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h4>Contact Form</h4>
                    </div>
                    <div class="card-body">
                        <!-- Contact Form -->
                        <form id="contactForm">
                            <!-- Name Field -->
                            <div class="mb-3">
                                <label for="name" class="form-label">Name*</label>
                                <input type="text" class="form-control" id="name" required>
                            </div>

                            <!-- Email Field -->
                            <div class="mb-3">
                                <label for="email" class="form-label">Email ID*</label>
                                <input type="email" class="form-control" id="email" required>
                            </div>

                            <!-- Mobile Number Field with Send OTP button -->
                            <div class="mb-3">
                                <label for="mobile" class="form-label">Mobile Number*</label>
                                <div class="mobile-input-group">
                                    <input type="text" class="form-control" id="mobile" pattern="[0-9]{10}" required>
                                    <button type="button" class="btn btn-primary" id="sendOtpBtn">Send OTP</button>
                                </div>
                            </div>
<!-- OTP Verification Form -->
                        <div id="otpVerificationForm" class="mt-4">
                            <h5>Enter OTP</h5>
                            <div class="d-flex justify-content-center mb-3">
                                <input type="text" maxlength="1" class="form-control otp-input" data-index="1">
                                <input type="text" maxlength="1" class="form-control otp-input" data-index="2">
                                <input type="text" maxlength="1" class="form-control otp-input" data-index="3">
                                <input type="text" maxlength="1" class="form-control otp-input" data-index="4">
                            </div>
                            <div class="d-flex justify-content-between">
                                <button type="button" class="btn btn-primary" id="verifyOtp">Verify OTP</button>
                                <button type="button" class="btn btn-secondary" id="resendOtp">Resend OTP</button>
                            </div>
                        </div>
                            <!-- State Dropdown -->
                            <div class="mb-3">
                                <label for="state" class="form-label">Select State*</label>
                                <select class="form-select" id="state" required>
                                    <option value="">Select a state</option>
                                    <option value="Maharashtra">Maharashtra</option>
                                    <option value="Delhi">Delhi</option>
                                    <option value="Karnataka">Karnataka</option>
                                    <!-- Add more states as needed -->
                                </select>
                            </div>

                            <!-- Qualification Dropdown -->
                            <div class="mb-3">
                                <label for="qualification" class="form-label">Select Highest Qualification*</label>
                                <select class="form-select" id="qualification" required>
                                    <option value="">Select qualification</option>
                                    <option value="HSC">HSC</option>
                                    <option value="Graduate">Graduate</option>
                                    <option value="Post Graduate">Post Graduate</option>
                                    <option value="PhD">PhD</option>
                                </select>
                            </div>

                            <!-- Authorization Checkbox -->
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="authorize" required>
                                <label class="form-check-label" for="authorize">
                                    I authorize and agree to the terms and conditions*
                                </label>
                            </div>

                            <!-- Submit Button (initially disabled) -->
                            <button type="submit" class="btn btn-primary" id="submitBtn" disabled>Submit</button>
                        </form>

                        
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            let isOtpVerified = false;
            
            // Function to check if all fields are valid
            function checkFormValidity() {
                const form = document.getElementById('contactForm');
                const allInputsFilled = Array.from(form.elements)
                    .filter(element => element.required)
                    .every(element => element.value.trim() !== '');
                
                const emailValid = /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test($('#email').val());
                const mobileValid = /^\d{10}$/.test($('#mobile').val());
                
                $('#submitBtn').prop('disabled', !(allInputsFilled && emailValid && mobileValid && isOtpVerified));
            }

            // Add event listeners for all form fields
            $('#contactForm input, #contactForm select').on('input change', checkFormValidity);

            // Mobile number validation
            $('#mobile').on('input', function() {
                this.value = this.value.replace(/[^0-9]/g, '').substring(0, 10);
            });

            // Send OTP button click
            $('#sendOtpBtn').on('click', function() {
                const mobile = $('#mobile').val();
                if (!/^\d{10}$/.test(mobile)) {
                    alert('Please enter a valid 10-digit mobile number');
                    return;
                }

                $.ajax({
                    url: 'send_otp.php',
                    method: 'POST',
                    data: {
                        mobile: mobile,
                        name: $('#name').val()
                    },
                    success: function(response) {
                        try {
                            const result = typeof response === 'string' ? JSON.parse(response) : response;
                            if (result.status === 'success' || result.type === 'success') {
                                $('#otpVerificationForm').show();
                                alert('OTP has been sent to your mobile number');
                            } else {
                                alert(result.message || 'Failed to send OTP');
                            }
                        } catch (e) {
                            console.error('Error:', e);
                            $('#otpVerificationForm').show();
                            alert('OTP has been sent to your mobile number');
                        }
                    },
                    error: function() {
                        alert('Error sending OTP');
                    }
                });
            });

            // OTP input handling
            $('.otp-input').on('input', function() {
                const maxLength = 1;
                const currentIndex = parseInt($(this).data('index'));
                
                if (this.value.length >= maxLength) {
                    if (currentIndex < 4) {
                        $(`.otp-input[data-index="${currentIndex + 1}"]`).focus();
                    }
                }
            });

            // Verify OTP
            $('#verifyOtp').on('click', function() {
                const otp = Array.from($('.otp-input')).map(input => input.value).join('');
                const mobile = $('#mobile').val();

                if (otp.length !== 4) {
                    alert('Please enter complete OTP');
                    return;
                }

                $.ajax({
                    url: 'verify_otp.php',
                    method: 'POST',
                    data: { mobile, otp },
                    success: function(response) {
                        try {
                            const result = typeof response === 'string' ? JSON.parse(response) : response;
                            if (result.status === 'success') {
                                alert('OTP verified successfully!');
                                isOtpVerified = true;
                                $('#otpVerificationForm').hide();
                                checkFormValidity();
                            } else {
                                $('.otp-input').val('');
                                $('.otp-input[data-index="1"]').focus();
                                alert(result.message || 'Invalid OTP');
                            }
                        } catch (e) {
                            console.error('Error:', e);
                            alert('Error verifying OTP');
                        }
                    },
                    error: function() {
                        alert('Error verifying OTP');
                    }
                });
            });

            // Form submission
            $('#contactForm').on('submit', function(e) {
                e.preventDefault();
                if (!isOtpVerified) {
                    alert('Please verify your mobile number with OTP');
                    return;
                }
                // Add your form submission logic here
                alert('Form submitted successfully!');
            });
        });
    </script>
</body>
</html>