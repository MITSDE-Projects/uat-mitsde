<?php 
$url = 'https://test.payumoney.com/_payment?'; 
$data =array('key'=>'eM8ZaP','txnid'=>'4488','amount'=>'500','productinfo'=>'btech','firstname'=>'radha','email'=>'admissions@avantikauniversity.edu.in','phone'=>'','surl'=>'printformvalue.php','furl'=>'page5_form.php','hash'=>'sha512','service_provider'=>'payu_paisa'); 
$options = array( 
  'http' => array( 
    'header' => "Authorization: 0SC8FamYqWnwFzVgYKmiCfSsT96xerU8E+WBUh/KDXc=", 
    'method' => 'POST', 
    'Authorization'=> '0SC8FamYqWnwFzVgYKmiCfSsT96xerU8E+WBUh/KDXc=', 
    'content' => http_build_query($data) 
    ), 
  ); 
$context = stream_context_create($options); 
$result = file_get_contents($url, false, $context); 
if ($result === FALSE) { /* Handle error */ } 
var_dump($result); 
?>