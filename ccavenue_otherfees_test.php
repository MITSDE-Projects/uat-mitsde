<?php

// ---- If "Process" button clicked ----
if (isset($_GET['process_id'])) {
    $oid = intval($_GET['process_id']);
}

define('WORKING_KEY', '277C1DEFA1388ACD68B11FE6A467A577');   // from M.A.R.S
define('ACCESS_CODE', 'AVYD88GJ48CA97DYAC');  // from M.A.R.S
define('USE_JSON', true);
define('API_VERSION', '1.2');

// ==== AES helpers ====
function ccavenue_key_bin($workingKey)
{
    return hex2bin(md5($workingKey));
}
function ccavenue_iv_bin()
{
    $iv = '';
    for ($i = 0; $i < 16; $i++)
        $iv .= chr($i);
    return $iv;
}
function aes_encrypt_hex($plain, $workingKey)
{
    $key = ccavenue_key_bin($workingKey);
    $iv = ccavenue_iv_bin();
    $cipher = openssl_encrypt($plain, 'AES-128-CBC', $key, OPENSSL_RAW_DATA, $iv);
    return strtoupper(bin2hex($cipher));
}
// ==== API payload builder ====
function encrypt_status_payload($order_no)
{
    $payload = array();
    if (!empty($order_no))
        $payload['order_no'] = $order_no;
    if (empty($payload)) {
        throw new Exception('Provide order_no');
    }
    $json = json_encode($payload, JSON_UNESCAPED_SLASHES);
    return aes_encrypt_hex($json, WORKING_KEY);
}
function aes_decrypt_hex($hexCipher, $workingKey)
{
    $key = hex2bin(md5($workingKey));
    $iv = '';
    for ($i = 0; $i < 16; $i++)
        $iv .= chr($i);
    $bin = hex2bin($hexCipher);
    return openssl_decrypt($bin, 'AES-128-CBC', $key, OPENSSL_RAW_DATA, $iv);
}


// start sql
//{ search form temp table for flag 0 and status processing and order id.
// search form otherpaymenttratin with given lead id from temp table
//if lead id not found
//  get record form status api
//else
// skipped 
// check with otherfeetration table lead id



// ==== Main (browser) ====
// GET/POST वरून values घ्या
// $order_no     = isset($_POST['order_no'])     ? trim($_POST['order_no'])     : (isset($_GET['order_no'])     ? trim($_GET['order_no'])     : '');
//$order_no = '140825060356';
$order_no = $oid;

// Validation
if (!empty($order_no)) {
    $enc_request = encrypt_status_payload($order_no);
}

// Correctly prepare POST fields as array
$post_fields = array(
    'enc_request' => $enc_request,
    'access_code' => 'AVYD88GJ48CA97DYAC',
    'command' => 'orderStatusTracker',
    'request_type' => 'JSON',
    'response_type' => 'JSON',
    'version' => '1.2',
);

// Initialize cURL
$curl = curl_init();
curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://api.ccavenue.com/apis/servlet/DoWebTrans',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => http_build_query($post_fields),
    CURLOPT_HTTPHEADER => array(
        'Content-Type: application/x-www-form-urlencoded'
    ),
    // CURLOPT_CAINFO => '/home/mitsde/ssl/cacert.pem',
    // CURLOPT_CAINFO => 'D:/wamp64/bin/php/php8.5.0/extras/ssl/cacert.pem',
));

// Execute and get response
$response = curl_exec($curl);
if (curl_errno($curl)) {
    echo 'cURL error: ' . curl_error($curl);
}
curl_close($curl);
// Output response as is
// echo $response;

$response_string = $response;

parse_str($response_string, $response_array);

$status = isset($response_array['status']) ? $response_array['status'] : null;
$enc_response = isset($response_array['enc_response']) ? trim($response_array['enc_response']) : null;
$enc_response_hex = htmlentities($enc_response);

if (!empty($enc_response_hex)) {

    $plain = aes_decrypt_hex($enc_response_hex, WORKING_KEY);
    $json = json_decode($plain, true);

    echo "<h3>Status</h3>";

    if ($json && json_last_error() === JSON_ERROR_NONE) {

        echo "<pre>";
        print_r($json);
        echo "</pre>";

        // ✅ Check if order_status exists
        if (isset($json['order_status'])) {

            $order_status = $json['order_status'];

            if ($order_status != 'Shipped') {

                echo "Order Status:- " . $order_status;

                // mysqli_query($conn, "UPDATE temp_ai_transaction SET Status='$order_status' WHERE t_process_id=$order_no");

            } else {

                // ✅ Also check required keys before using them
                $reference_no     = $json['reference_no'] ?? '';
                $order_date_time  = $json['order_date_time'] ?? '';

                ?>
                <button id="pushPaymentBtn" class="btn btn-primary"
                    style="padding:10px 20px; border:none; border-radius:5px; background:#007bff; color:#fff; font-size:16px; cursor:pointer;">
                    Push Payment
                </button>

                <script>
                    document.getElementById("pushPaymentBtn").addEventListener("click", function () {
                        if (confirm("Are you sure you want to push the payment?")) {
                            window.location.href = "temp_otherfees_response.php?oid=<?php echo urlencode($order_no); ?>&refno=<?php echo urlencode($reference_no); ?>&odt=<?php echo urlencode($order_date_time); ?>";
                        }
                    });
                </script>
                <?php
            }

        } else {
            echo "order_status key not found in response.";
        }

    } else {
        echo "<pre>" . htmlentities($plain) . "</pre>";
    }
}
//}