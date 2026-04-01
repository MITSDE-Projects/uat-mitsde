<?php
class Security {
	
	private $key = null;
	private $signKey = null;
	public function __construct($key = null, $signKey = null) {
		if(is_null($key)) {
			throw new \Exception('set sccret key please.');
		}
		if(is_null($signKey)) {
			throw new \Exception('set sign key please.');
		}
		$this->key = $key;
		$this->signKey = $signKey;
	}
 
 
 

 
	public function sign($content) {
		
		return strtoupper(hash_hmac('sha256', $content, $this->signKey));
		
	}
 
	public function verify($content, $sign) {
		
		if($sign == $this->sign($content)) {
			return true;
		}
		return false;
		
	}
	 
	public function encrypt($input) {
		
	/*	$size = 16; // Block size for AES-128 in ECB mode is always 16 bytes

$input = $this->pkcs5_pad($input, $size);
$cipher = 'aes-128-ecb'; // OpenSSL cipher name for AES-128 in ECB mode
$iv = '';
$td = openssl_encrypt($input, $cipher, $this->key, OPENSSL_RAW_DATA | OPENSSL_NO_PADDING, $iv);
$data = bin2hex($td);
return $data;

 */
		
		 $size = mcrypt_get_block_size(MCRYPT_RIJNDAEL_128, MCRYPT_MODE_ECB);
		$input = $this->pkcs5_pad($input, $size);
		$td = mcrypt_module_open(MCRYPT_RIJNDAEL_128, '', MCRYPT_MODE_ECB, '');
		$iv = mcrypt_create_iv(mcrypt_enc_get_iv_size($td), MCRYPT_RAND);
		mcrypt_generic_init($td, $this->key, $iv);
		$data = mcrypt_generic($td, $input);
		mcrypt_generic_deinit($td);
		mcrypt_module_close($td);
		$data = bin2hex($data);
		return $data; 
		
	}
 
	private function pkcs5_pad($text, $blocksize) {
		
		$pad = $blocksize - (strlen($text) % $blocksize);
		return $text . str_repeat(chr($pad), $pad);
		
	}
 
	public function decrypt($sStr) {
		$decrypted= mcrypt_decrypt(MCRYPT_RIJNDAEL_128,$this->key,$this->hextobin($sStr), MCRYPT_MODE_ECB);
		$dec_s = strlen($decrypted);
		$padding = ord($decrypted[$dec_s-1]);
		$decrypted = substr($decrypted, 0, -$padding);
		return $decrypted;
	}
 
    private function createLinkString($para, $encode) {
		
    	ksort($para);    
    	$linkString = "";
    	while ( list ( $key, $value ) = each ( $para ) ) {
    		if ($encode) {
    			$value = urlencode ( $value );
    		}
    		$linkString .= $key . "=" . $value . "&";
    	}
     
    	$linkString = substr ( $linkString, 0, count ( $linkString ) - 2 );
    	return $linkString;
		
    }
		 public   function hextobin($hexstr) 
    { 
        $n = strlen($hexstr); 
        $sbin="";   
        $i=0; 
        while($i<$n) 
        {       
            $a =substr($hexstr,$i,2);           
            $c = pack("H*",$a); 
            if ($i==0){$sbin=$c;} 
            else {$sbin.=$c;} 
            $i+=2; 
        } 
        return $sbin; 
    }
	
function generate_checksum($customer_account_number, $start_date, $expiry_date, $debit_amount, $max_amount) {
    // Concatenate parameters with delimiter
    $checksum_string = $customer_account_number . "|" . $start_date . "|" . $expiry_date . "|" . $debit_amount . "|" . $max_amount;

    // Apply SHA-256 hash function
    $sha256_hash = hash('sha256', $checksum_string);

    return $sha256_hash;
}
	
}


?>