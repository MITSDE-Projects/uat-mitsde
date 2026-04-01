<?php function callAPI($method, $url, $data)
 {
   $curl = curl_init();
  
         switch ($method){
      case "POST":
         curl_setopt($curl, CURLOPT_POST, 1);
         if ($data)
            curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
         break;
      case "PUT":
         curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PUT");
         if ($data)
            curl_setopt($curl, CURLOPT_POSTFIELDS, $data);			 					
         break;
      default:
         if ($data)
            $url = sprintf("%s?%s", $url, http_build_query($data));
   }

   
curl_setopt($curl, CURLOPT_URL, $url);
   curl_setopt($curl, CURLOPT_HTTPHEADER, array(
      'APIKEY: 111111111111111111111',
      'Content-Type: application/json',
   ));
   curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
   curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);


   // EXECUTE:
   $result = curl_exec($curl);
   if(!$result){die("Connection Failure");}
   curl_close($curl);
     //echo "endfunc";
   return $result;
 
}

if(isset($_POST['form_phone']))
{
   $mobile3=$_POST['form_phone'];
   $getsourcepath=$_POST['callbacksourcepath'];
   $vendercode='2$35$137';
  //  extract($_POST);
  $data_array =  array(
  "FirstName" => "Call",
  "LastName" => "Back",
  "Mobile" => $mobile3,
  "Email" => "callback@student.com",
  "VendorToken" => $vendercode,
  "CityName" => "Pune",
  "StateName" => "Maharashtra",
  "CountryName" => "India",
  "Address" => "NoUpdated",
  "Comment" => "CallmeBackPage",
  "SourcePath" => $getsourcepath
  
);
$data1 = $data_array;
//print_r($data1);
$make_call = callAPI('POST', 'https://vendorwebservice.mitsde.com/restapi/api/lead', json_encode($data1));
//$make_call = callAPI('POST', 'http://uat.vendorwebservice.mitsde.com/restapi/api/lead', json_encode($data1));
$response = json_decode($make_call, true);
$error_code   = $response['ErrorCode'];
$error_mes   = $response['ErrorDescription'];
$leadid     = $response['LeadID'];
//print_r($response);
$error_code;
$error_mes ;
$leadid ;

    if($error_mes=="Lead inserted successfully")
    {
       
     echo "<script type='text/javascript'> document.location = 'https://mitsde.com/thankyou'; </script>";
    exit;
    }
    else
    {
    require_once('phpmailer/class.phpmailer.php');
    require_once('phpmailer/class.smtp.php');

$mail = new PHPMailer();


//$mail->SMTPDebug = 3;                               // Enable verbose debug output
$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';                  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'no-replay@mitsde.com';    // SMTP username
$mail->Password = 'NoReplay@123';                         // SMTP password
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                                    // TCP port to connect to

$message = "";
$status = "false";

if( $_SERVER['REQUEST_METHOD'] == 'POST' ) 
{
    if($_POST['form_phone']) 
	{
		
		

        $name = "Call back";
        $email = "callme@student.com";
       
		$phone= $_POST['form_phone'];
		$getsourcepath=$_POST['callbacksourcepath'];
        

        $subject = isset($subject) ? $subject : 'New Message | Call Me Back';

        $botcheck = $_POST['form_botcheck'];

        $toemail = 'sanjay.gaikwad@mitsde.com'; // Receiver Email Address
        $toname = 'Call Me Back';                // Receiver Name

        if( $botcheck == '' ) {

            $mail->SetFrom( $email , $name );
            $mail->AddReplyTo( $email , $name );
            $mail->AddAddress( $toemail , $toname );
            $mail->Subject = $subject;

            
			$phone = isset($phone) ? "<b>Mobile</b>: $phone<br><br>" : '';
			$getsourcepath = isset($getsourcepath) ? "<b>Source Path</b>: $getsourcepath<br><br>" : '';
            

            $referrer = $_SERVER['HTTP_REFERER'] ? '<br><br><br>This Form was submitted from: ' . $_SERVER['HTTP_REFERER'] : '';

            $body = "$phone $getsourcepath $referrer";

            //mail attachment
            if ( isset($_FILES['form_attachment'] ) && $_FILES['form_attachment']['error'] == UPLOAD_ERR_OK ) {
                $mail->IsHTML(true);
                $mail->AddAttachment( $_FILES['form_attachment']['tmp_name'], $_FILES['form_attachment']['name'] );
            }

            $mail->MsgHTML( $body );
            $sendEmail = $mail->Send();

            if( $sendEmail == true ):
                //$message = 'We have <strong>successfully</strong>will get Back to you as soon as possible.';
                //$status = "true";
                echo "<script type='text/javascript'> document.location = 'https://mitsde.com/thankyou'; </script>";
            else:
                $message = 'Email <strong>could not</strong> be sent due to some Unexpected Error. Please Try Again later.<br /><br /><strong>Reason:</strong><br />' . $mail->ErrorInfo . '';
                $status = "false";
            endif;
        } else {
            $message = 'Bot <strong>Detected</strong>.! Clean yourself Botster.!';
            $status = "false";
        }
    } else {
        $message = 'Please <strong>Fill up</strong> all the Fields and Try Again.';
        $status = "false";
    }
} else {
    $message = 'An <strong>unexpected error</strong> occured. Please Try Again later.';
    $status = "false";
}

$status_array = array( 'message' => $message, 'status' => $status);
echo json_encode($status_array);
    }
}



?>