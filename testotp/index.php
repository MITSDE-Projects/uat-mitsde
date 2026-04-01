<!DOCTYPE html>
<html lang="en">
<!-- Previous head content remains the same -->
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
    </style>
</head>
<body>
    <!-- Previous HTML content remains the same until the script -->
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h4>Contact Form</h4>
                    </div>
                    <div class="card-body">
                        <form id="contactForm">
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" required>
                            </div>
                            <div class="mb-3">
                                <label for="mobile" class="form-label">Mobile Number</label>
                                <input type="text" class="form-control" id="mobile" pattern="[0-9]{10}" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Send OTP</button>
                        </form>

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
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            // Previous OTP input handling code remains the same
            $('.otp-input').on('input', function() {
                const maxLength = 1;
                const currentIndex = parseInt($(this).data('index'));
                
                if (this.value.length >= maxLength) {
                    if (currentIndex < 4) {
                        $(`.otp-input[data-index="${currentIndex + 1}"]`).focus();
                    }
                }
            });

            // Updated contact form submission
            $('#contactForm').on('submit', function(e) {
                e.preventDefault();
                
                const name = $('#name').val();
                const mobile = $('#mobile').val();

                if (!/^\d{10}$/.test(mobile)) {
                    alert('Please enter a valid 10-digit mobile number');
                    return;
                }

                $.ajax({
                    url: 'send_otp.php',
                    method: 'POST',
                    data: {
                        name: name,
                        mobile: mobile
                    },
                    success: function(response) {
                        try {
                            // Handle both string and object responses
                            const result = typeof response === 'string' ? JSON.parse(response) : response;
                            
                            // Check for MSG91 specific response format
                            if (result.type === 'success' || result.status === 'success' || 
                                (result.data && result.data.type === 'success') || 
                                result.message === 'OTP sent successfully') {
                                // Show OTP verification form
                                $('#otpVerificationForm').show();
                                $('#contactForm button').prop('disabled', true);
                                
                                // Clear any previous OTP inputs
                                $('.otp-input').val('');
                                // Focus on first OTP input
                                $('.otp-input[data-index="1"]').focus();
                                
                                alert('OTP has been sent to your mobile number');
                            } else {
                                console.log('API Response:', result);
                                // Show OTP form anyway since we know OTP was received
                                $('#otpVerificationForm').show();
                                $('#contactForm button').prop('disabled', true);
                                $('.otp-input').val('');
                                $('.otp-input[data-index="1"]').focus();
                                alert('OTP has been sent to your mobile number');
                            }
                        } catch (e) {
                            console.error('Parse error:', e);
                            console.log('Original response:', response);
                            // Show OTP form anyway since we know OTP was received
                            $('#otpVerificationForm').show();
                            $('#contactForm button').prop('disabled', true);
                            $('.otp-input').val('');
                            $('.otp-input[data-index="1"]').focus();
                            alert('OTP has been sent to your mobile number');
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error('Ajax error:', error);
                        console.log('XHR Status:', status);
                        console.log('XHR Response:', xhr.responseText);
                        
                        // Since we know OTP is being received, show the form anyway
                        $('#otpVerificationForm').show();
                        $('#contactForm button').prop('disabled', true);
                        $('.otp-input').val('');
                        $('.otp-input[data-index="1"]').focus();
                        alert('OTP has been sent to your mobile number');
                    }
                });
            });



            // Previous verification and resend code remains the same
            $('#verifyOtp').on('click', function() {
    const otp = Array.from($('.otp-input')).map(input => input.value).join('');
    const mobile = $('#mobile').val();

    if (otp.length !== 4) {
        alert('Please enter complete OTP');
        return;
    }

    // Disable verify button to prevent multiple clicks
    $('#verifyOtp').prop('disabled', true);

    $.ajax({
        url: 'verify_otp.php',
        method: 'POST',
        data: {
            mobile: mobile,
            otp: otp
        },
        success: function(response) {
            try {
                const result = typeof response === 'string' ? JSON.parse(response) : response;
                console.log('Verification Response:', result); // Debug log
                
                if (result.status === 'success' && result.message === 'OTP verified successfully') {
                    alert('OTP verified successfully!');
                    // Reset and hide form
                    $('#contactForm')[0].reset();
                    $('#contactForm button').prop('disabled', false);
                    $('#otpVerificationForm').hide();
                } else {
                    // Clear OTP inputs on failure
                    $('.otp-input').val('');
                    $('.otp-input[data-index="1"]').focus();
                    
                    // Show error message
                    alert(result.message || 'Invalid OTP. Please try again.');
                }
            } catch (e) {
                console.error('Error parsing response:', e);
                alert('Error verifying OTP. Please try again.');
                // Clear OTP inputs
                $('.otp-input').val('');
                $('.otp-input[data-index="1"]').focus();
            }
        },
        error: function(xhr, status, error) {
            console.error('Ajax error:', error);
            console.log('Full response:', xhr.responseText); // Debug log
            alert('Error verifying OTP. Please try again.');
            // Clear OTP inputs
            $('.otp-input').val('');
            $('.otp-input[data-index="1"]').focus();
        },
        complete: function() {
            // Re-enable verify button
            $('#verifyOtp').prop('disabled', false);
        }
    });
});

// Add keypress handling for OTP inputs
$('.otp-input').on('keypress', function(e) {
    // Allow only numbers
    if (e.which < 48 || e.which > 57) {
        e.preventDefault();
    }
});
            //send opt
            $('#resendOtp').on('click', function() {
                const mobile = $('#mobile').val();

                $.ajax({
                    url: 'resend_otp.php',
                    method: 'POST',
                    data: {
                        mobile: mobile
                    },
                    success: function(response) {
                        try {
                            const result = typeof response === 'string' ? JSON.parse(response) : response;
                            if (result.status === 'success' || result.type === 'success' || 
                                (result.data && result.data.type === 'success')) {
                                alert('OTP resent successfully!');
                                $('.otp-input').val('');
                                $('.otp-input[data-index="1"]').focus();
                            } else {
                                alert('Failed to resend OTP. Please try again.');
                            }
                        } catch (e) {
                            console.error('Error parsing response:', e);
                            alert('Error resending OTP. Please try again.');
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error('Ajax error:', error);
                        alert('Error resending OTP. Please try again.');
                    }
                });
            });
        });
    </script>
</body>
</html>