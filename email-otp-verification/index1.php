<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Send OTP via MSG91</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow p-4">
                    <h4 class="text-center mb-3">Send OTP via MSG91</h4>
                    <div class="mb-3">
                        <label for="mobile" class="form-label">Enter Mobile Number</label>
                        <input type="text" id="mobile" class="form-control" placeholder="Enter 10-digit mobile number" maxlength="10">
                    </div>
                    <button id="sendOtpBtn" class="btn btn-primary w-100">Send OTP</button>
                    <p id="responseMessage" class="mt-3 text-center"></p>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $("#sendOtpBtn").click(function() {
                let mobile = $("#mobile").val();

                if (!/^[6-9]\d{9}$/.test(mobile)) {
                    $("#responseMessage").html('<span class="text-danger">Invalid mobile number!</span>');
                    return;
                }

                $("#sendOtpBtn").prop("disabled", true).text("Sending...");
                
                $.ajax({
                    url: "send_otp.php",
                    type: "POST",
                    data: { mobile: mobile },
                    success: function(response) {
                        let res = JSON.parse(response);
                        $("#responseMessage").html(res.status === "success" ? 
                            '<span class="text-success">' + res.message + '</span>' :
                            '<span class="text-danger">' + res.message + '</span>'
                        );
                    },
                    error: function() {
                        $("#responseMessage").html('<span class="text-danger">Error sending OTP</span>');
                    },
                    complete: function() {
                        $("#sendOtpBtn").prop("disabled", false).text("Send OTP");
                    }
                });
            });
        });
    </script>
</body>
</html>
