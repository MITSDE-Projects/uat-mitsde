<?php

if (isset($_GET['token'])) 
{
//------------------------Mysql Connection-----------------
$host = "localhost";
$username = "mitsde_onlinepay";
$password = "jNq%,6!)0RmK";
$dbname = "mitsde_onlinepayment";
$conn = mysqli_connect($host, $username, $password, $dbname);
//------------------------Mysql Connection END-----------------
   
    $token = $_GET['token'];
    $result = mysqli_query($conn, "SELECT * FROM `opt_verification` WHERE `token`='$token'");
    if (mysqli_num_rows($result) > 0) 
    {
        $row=mysqli_fetch_array($result);
        // Mark email as verified
        $mobileno = $row['mobNo'];
        $name = $row['studentName'];
        $emailID = $row['emailID'];
        $token = $row['token'];
       
       date_default_timezone_set('Asia/Kolkata');
       $currentDT = date('Y-m-d H:i:s'); 
        
        mysqli_query($conn, "UPDATE `opt_verification` SET `e_verificationDT` = '$currentDT',e_verification=1 WHERE token='$token'");
        //echo "</br>Email Verified!";
        
        // Send OTP when the page is loaded
$curl = curl_init();
curl_setopt_array($curl, array(
    CURLOPT_URL => 'http://api.msg91.com/api/sendotp.php',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS => "authkey=332116AkEui6hX85oO5ee1d8d6P1&mobile=$mobileno&message=Dear%20Student%2C%20Your%20OTP%20is%20%23%23OTP%23%23.%20Use%20this%20Passcode%20to%20complete%20your%20Registration.%20Thank%20you.%20-%20MITSDE&sender=MITSDE&otp_expiry=3&DLT_TE_ID=1307172898777148909",
    CURLOPT_HTTPHEADER => array('Content-Type: application/x-www-form-urlencoded'),
));
$response = curl_exec($curl);
curl_close($curl);

$curl1 = curl_init();
$data = array(
    "AuthToken" => "MITSDE-11-06-2020",
    "Source" => "mitsde",
    "FirstName" => $name,
    "MobileNumber" => $mobileno,
    "Email" => $emailID,
    "LeadSource" => "Paid Form E-V",
    "LeadName" => "https://admissions.mitsde.com/pg-applynow/",
    "LeadType" => "Online"
);

curl_setopt_array($curl1, array(
    CURLOPT_URL => 'https://thirdpartyapi.extraaedge.com/api/SaveRequest',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS => json_encode($data),
    CURLOPT_HTTPHEADER => array(
        'Content-Type: application/json',
        'Accept: application/json',
    ),
));

$response1 = curl_exec($curl1);

if (curl_errno($curl1)) {
    //echo 'Curl error: ' . curl_error($curl1);
} else {
   // echo $response1;
}

curl_close($curl1);

    ?>
    
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OTP Verification</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        #spinner {
            display: none;
            margin: 20px auto;
            text-align: center;
        }
    </style>
     <style>
        .header, .footer {
            background-color: #f8f9fa;
            padding: 10px 20px;
        }
        .footer {
            text-align: center;
            font-size: 14px;
        }
        .logo {
            height: 50px;
        }
    </style>
</head>
<body>
    <header class="header d-flex align-items-center justify-content-between">
    <img src="https://mitsde.com/assets/images/new/logo-mit-school-of-distance-education.png" alt="Logo" class="logo">
    
</header>
    <div class="container mt-3">
        <h1 style="color:green;">Email Confirmed! You're in!</h1>
        <h3 class="text-center">Verify OTP</h3>
        <p>Hi <strong><?php echo htmlspecialchars($name); ?></strong>, an OTP has been sent to your mobile number <strong><?php echo htmlspecialchars($mobileno); ?></strong>.</p>
         
        <!-- OTP Input -->
        <form id="otp-form">
            <div class="mb-3">
                
                <label for="otp" class="form-label">Enter OTP</label>
                <input type="text" class="form-control" id="otp" name="otp" placeholder="Enter OTP" required>
            </div>
            <input type="hidden" id="emailID" name="emailID" value="<?php echo htmlspecialchars($emailID); ?>">
            <button type="submit" class="btn btn-primary">Verify OTP</button>
            <button type="button" class="btn btn-secondary" id="resend-otp">Resend OTP</button>
        </form>
        
        <!-- Spinner -->
        <div id="spinner">
            <div class="spinner-border text-primary" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
            <p>Processing your request, please wait...</p>
        </div>

        <!-- Message Section -->
        <div id="message" class="mt-3"></div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        function toggleSpinner(show) {
            $('#spinner').css('display', show ? 'block' : 'none');
        }

        // Handle OTP Verification
        $('#otp-form').submit(function(e) {
    e.preventDefault();
    toggleSpinner(true);
    const otp = $('#otp').val();
    const mobileno = '<?php echo $mobileno; ?>';
    const emailID = $('#emailID').val();
    $.ajax({
        url: 'verify.php',
        method: 'GET',
        data: { otp: otp, mobileno: mobileno, emailID: emailID },
        success: function(response) {
            $('#message').html(response);
            toggleSpinner(false);
        },
        error: function() {
            $('#message').html('<div class="alert alert-danger">An error occurred. Please try again.</div>');
            toggleSpinner(false);
        }
    });
});

        // Resend OTP
        $('#resend-otp').click(function() {
            toggleSpinner(true);
            const mobileno = '<?php echo $mobileno; ?>';
            $.ajax({
                url: 'resend.php',
                method: 'GET',
                data: { mobileno: mobileno },
                success: function(response) {
                    $('#message').html(response);
                    toggleSpinner(false);
                },
                error: function() {
                    $('#message').html('<div class="alert alert-danger">An error occurred. Please try again.</div>');
                    toggleSpinner(false);
                }
            });
        });
    </script>
    <!-- Footer Section -->
<footer class="footer mt-auto">
    <p>&copy; 2024 MIT School Of Distance Education. All rights reserved.</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
    
    
    <?php

    } 
    else 
    {
        echo "Invalid Token.";
    }
}


// Create connection





    
    $query = "UPDATE `opt_verification` SET `e_verificationDT` = '$currentDT',e_verification=1 WHERE `mobNo` = '$mobileno'";

    if (mysqli_query($conn, $query)) {
        //echo "success";
        
    } else {
       // echo "not updated";
    }


?>

