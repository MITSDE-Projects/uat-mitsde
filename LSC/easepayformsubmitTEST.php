<?php

session_start();
     $memberid = $_SESSION['memberID']; 


include_once 'lib/easepay-lib.php';

	 $MERCHANT_KEY="EZJVVQ8RSA";
	 $SALT='SWAR5HSM18';
	 $ENV='test';  // uncomment it for test env.(testpay.easebuzz.in)


//	$MERCHANT_KEY="8LFE1SCTO7";
//	$SALT='VHV44GBVSB';
//	$ENV='prod'; // uncomment it for production env.(pay.easebuzz.in)

    	
    $posted = array();
  
    if(!empty($_POST)) {
    	

      foreach($_POST as $key => $value) {
        $posted[$key] = htmlentities($value, ENT_QUOTES);
        $posted[$key] = trim($value);
      }
    }
    $formError = 0;
    if(sizeof($posted) > 0) {

    	$posted['firstname']= trim($_POST['firstname']);
    	$posted['email']=$_POST['email'];
    	$posted['phone']=$_POST['phone'];
    	$posted['productinfo']=$_POST['productinfo'];
        $posted['amount'] = $_POST['amount'];

     

         $txnid = substr(hash('sha256', mt_rand() . microtime()), 0, 20).$_POST['memberid'];


         


        if(
              empty($amount)
              || empty($posted['firstname'])
              || empty($posted['email'])
              || empty($posted['phone'])
              || empty($posted['productinfo'])
              || empty($posted['surl'])
              || empty($posted['furl'])
        ) {
            $formError = 1;
        }




        easepay_page(array('key' => $MERCHANT_KEY,
        'txnid' => $txnid,
        'amount' => $posted['amount'],
        'firstname' => trim($posted['firstname']),
        'email' => $posted['email'],
        'phone' => $posted['phone'],
        'udf1' => '',
        'udf2' => '',
        'udf3' => '',
        'udf4' => '',
        'udf5' => '',
        'productinfo' =>$_POST['memberid'],
        'surl' => 'https://www.mitsde.com/LSC/easebuzzsuccessTEST.php',
        'furl' => 'https://www.mitsde.com/LSC/page5_form.php'), $SALT, $ENV);
    }


 ?>