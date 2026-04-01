<?php
/*
  CCAvenue Status API helper (browser version)
  Fill WORKING_KEY, ACCESS_CODE
  Browser GET/POST वर चालणारे
*/
// ==== CONFIG ====
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
function encrypt_status_payload($reference_no, $order_no)
{
    $payload = array();
    if (!empty($reference_no))
        $payload['reference_no'] = $reference_no;
    if (!empty($order_no))
        $payload['order_no'] = $order_no;
    if (empty($payload)) {
        throw new Exception('Provide reference_no or order_no');
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

// ==== HTML Form आणि output ====
// enc_response browser वर submit केला की decrypt होईल
$enc_response_hex = isset($_POST['enc_response']) ? trim($_POST['enc_response']) : '';

if (!empty($enc_response_hex)) {
    $plain = aes_decrypt_hex($enc_response_hex, WORKING_KEY);
    // JSON असेल तर array; नसल्यास raw string
    $json = json_decode($plain, true);
    echo "<h3>Decrypted enc_response</h3>";
    if ($json && json_last_error() === JSON_ERROR_NONE) {
        echo "<pre>";
        print_r($json);
        echo "</pre>";
    } else {
        echo "<pre>" . htmlentities($plain) . "</pre>";
    }
}

// ==== Main (browser) ====
// GET/POST वरून values घ्या
$reference_no = isset($_POST['reference_no']) ? trim($_POST['reference_no']) : (isset($_GET['reference_no']) ? trim($_GET['reference_no']) : '');
$order_no = isset($_POST['order_no']) ? trim($_POST['order_no']) : (isset($_GET['order_no']) ? trim($_GET['order_no']) : '');

// Validation
$output = '';
if (WORKING_KEY !== '277C1DEFA1388ACD68B11FE6A467A577' || ACCESS_CODE !== 'AVYD88GJ48CA97DYAC') {
    $output = "<b>Error:</b> CONFIG मध्ये WORKING_KEY आणि ACCESS_CODE सेट करा.";
} elseif (!empty($reference_no) || !empty($order_no)) {
    try {
        $enc_request = encrypt_status_payload($reference_no, $order_no);
        $request_type = USE_JSON ? 'JSON' : 'XML';
        $response_type = $request_type;

        $output = "<h3>enc_request (HEX)</h3><textarea style='width:100%;height:60px;'>$enc_request</textarea>";
        $output .= "<h3>Postman Body</h3><pre>";
        $output .= "enc_request   = $enc_request\n";
        $output .= "access_code   = " . ACCESS_CODE . "\n";
        $output .= "command       = orderStatusTracker\n";
        $output .= "request_type  = $request_type\n";
        $output .= "response_type = $response_type\n";
        $output .= "version       = " . API_VERSION . "\n";
        $output .= "</pre>";
        $output .= "<h3>Endpoints</h3><pre>Staging: https://apitest.ccavenue.com/apis/servlet/DoWebTrans\nProd: https://api.ccavenue.com/apis/servlet/DoWebTrans</pre>";

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

        // PHP च्या parse_str वापरून string variable मध्ये काढा
        parse_str($response_string, $response_array);

        // आता वेगळे व्हेरिएबल्स
        $status = isset($response_array['status']) ? $response_array['status'] : null;
        $enc_response = isset($response_array['enc_response']) ? trim($response_array['enc_response']) : null;

        $output .= "<h3>enc_response</h3><pre>". $enc_response ."</pre>";
    } catch (Exception $e) {
        $output = "<b>Error:</b> " . htmlentities($e->getMessage());
    }
} else {
    $output = "<b>Order No किंवा Reference No Form मध्ये टाका आणि Submit करा.</b>";
}

// Form
echo "<html><body style='font-family:sans-serif;'><h2>CCAvenue Status API (enc_request generator)</h2>";
echo "<form method='POST'>
  <label>Reference No: <input type='text' name='reference_no' value='" . htmlentities($reference_no) . "' style='width:250px;'></label><br><br>
  <label>Order No: <input type='text' name='order_no' value='" . htmlentities($order_no) . "' style='width:250px;'></label><br><br>
  <input type='submit' value='Generate enc_request'>
</form><hr>";

echo $output;

// enc_response input form दाखवा
echo "<hr><form method='POST'>";
echo "<label>enc_response (HEX):<br>
  <textarea name='enc_response' style='width:100%;height:60px;'>" . htmlentities($enc_response_hex) . "</textarea></label><br><br>";
echo "<input type='submit' value='Decrypt enc_response'>";
echo "</form>";

echo "</body></html>";
?>