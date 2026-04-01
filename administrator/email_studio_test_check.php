<?php
ob_start();
require 'class.phpmailer.php'; 
require 'class.smtp.php'; 
include("include/connection.php");
function sencustomemail($email,$date,$studentname){
    
            //$email ='vasudev.phulambrikar@avantika.edu.in';  
            //$date = '7th May 2018';
            //$studentname = 'Vasudev'; 
            
            
    /*
            //send email
			$to = $email;
			$subject = "Congratulations! You have been shortlisted for the second round of admissions at Avantika University.";
			$body = "<p>Dear ".$studentname.",</p> 
            <p>Congratulations! You have been shortlisted for the second round of admissions to the Bachelor of Design (B.Des) program at Avantika University.</p>
            <p>The schedule for the second round of admissions to Avantika University has been drawn up. The date for your Studio Test and Personal Interview is ".$date."</p>
            <p>You are expected to reach the university campus – Vishwanathpuram, Lekoda Village, Ujjain – 456 006 – at 9.30 Am on the specified date</p>
              <p>It is mandatory to carry your photo ID proof, hall ticket, and a copy of this email.</p>
              <p>Please make sure to carry the following.</p>
              <ul>
               <li>Poster Colors, Acrylic colors, and Color pencils</li>
               <li>Paint brushes, palette etc.</li>
               <li> Fevicol and Fevikwik/Fevibond</li>
               <li>Cutter<li>Adhesive Tape</li>
               <li>Pair of Scissors</li>
               <li>Geometric set and other drawing material/instruments</li>
               <li>Permanent Markers (minimum 4 colors)</li>
               <li>Stapler</li>
              </ul>
              <p>Please carry your portfolio and work samples along.</p>
              <p>Avantika University has made comfortable travel arrangements for students to reach the campus from Nanakheda Bus Stand, Ujjain. The details regarding the same shall be further communicated.</p>
               <p>Please note that the accommodation arrangements need to be done on an individual basis; no provision will be made by Avantika University in this regard</p> 
               <p>For your convenience, we are listing a few accommodation options available in Ujjain – however, do feel free to explore options on your own.</p>
                <ul>
                <li>Hotel Anjushree Inn</li>
                <li>Hotel Rudraksh</li>
                <li>Hotel Meghdoot</li>
                <li>Hotel Avantika</li>
                <li>Hotel Shanti Palace</li>
                </ul>
                 <p>Please note the Campus Address<br/>
<b>Avantika University, Vishwanathpuram, Lekoda Village, Ujjain – 456006, MP, India.</b>
</p>   
<p>
Reaching Ujjain<br><br/>
<ul>
<li>By Air: The closest airport is Devi Ahilyabai Holkar Domestic Airport at Indore. The busiest airport in Madhya Pradesh, it is well-connected to major Indian cities.<br/>Avantika University is located 51 km (32 miles) from Indore Airport.</li>
<li>By Rail: Direct connectivity with Delhi, Mumbai, and all the major cities of India.</li>
<li>By Bus: Direct travel route for Delhi, Mumbai, Pune, and various other cities.</li>
<li>Distance from Railway Station and Bus Station - Ujjain: 7 km (4 miles) to the campus, Indore: 50 km (31 miles) to the campus.</li></ul></p> 
<p>Please note that the final list of all eligible candidates for the B.Des Program will be displayed on the University website on 20th May 2018 by 12:00 pm.</p>
<p>To confirm your participation in Studio Test <a href='http://avantikauniversity.edu.in/administrator/thankyoudat.php?email=".$email."'>Please click here</a></p>
<p>Please feel free to contact us in case of any further queries.</p>
<p>Hope to see you at Avantika University!</p>
Thank you,
<br/><br/>
Registrar<br/> 
Avantika University";


			$headers = "MIME-Version: 1.0" . "\r\n";
			$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

			// More headers
			$headers .= 'From: Avantika University<admissions@avantikauniversity.edu.in>' . "\r\n";
			$headers .= 'To: <'.$to.'>' . "\r\n";
			$headers .= 'bcc: vasudev.phulambrikar@avantika.edu.in' ."\r\n";
			 if(mail("",$subject,$body,$headers)){ echo "mailed"; }
             else { die("mailed not send");  }   
             
             */
             
             
             
             
             $mail  = new PHPMailer();
           ob_start(); //Turn on output buffering
           $email =  $email;
           
             
             
             
             
?>             
             
           
           
           
             <p><p>Dear <?=$studentname;?>,</p> 
            <p>Congratulations! You have been shortlisted for the second round of admissions to the Bachelor of Design (B.Des) program at Avantika University.</p>
            <p>The schedule for the second round of admissions to Avantika University has been drawn up. The date for your Studio Test and Personal Interview is <?=$date?></p>
            <p>You are expected to reach the university campus – Vishwanathpuram, Lekoda Village, Ujjain – 456 006 – at 9.30 Am on the specified date</p>
              <p>It is mandatory to carry your photo ID proof, hall ticket, and a copy of this email.</p>
              <p>Please make sure to carry the following.</p>
              <ul>
               <li>Poster Colors, Acrylic colors, and Color pencils</li>
               <li>Paint brushes, palette etc.</li>
               <li> Fevicol and Fevikwik/Fevibond</li>
               <li>Cutter<li>Adhesive Tape</li>
               <li>Pair of Scissors</li>
               <li>Geometric set and other drawing material/instruments</li>
               <li>Permanent Markers (minimum 4 colors)</li>
               <li>Stapler</li>
              </ul>
              <p>Please carry your portfolio and work samples along.</p>
              <p>Avantika University has made comfortable travel arrangements for students to reach the campus from Nanakheda Bus Stand, Ujjain. The details regarding the same shall be further communicated.</p>
               <p>Please note that the accommodation arrangements need to be done on an individual basis; no provision will be made by Avantika University in this regard</p> 
               <p>For your convenience, we are listing a few accommodation options available in Ujjain – however, do feel free to explore options on your own.</p>
                <ul>
                <li>Hotel Anjushree Inn</li>
                <li>Hotel Rudraksh</li>
                <li>Hotel Meghdoot</li>
                <li>Hotel Avantika</li>
                <li>Hotel Shanti Palace</li>
                </ul>
                 <p>Please note the Campus Address<br/>
<b>Avantika University, Vishwanathpuram, Lekoda Village, Ujjain – 456006, MP, India.</b>
</p>   
<p>
Reaching Ujjain<br><br/>
<ul>
<li>By Air: The closest airport is Devi Ahilyabai Holkar Domestic Airport at Indore. The busiest airport in Madhya Pradesh, it is well-connected to major Indian cities.<br/>Avantika University is located 51 km (32 miles) from Indore Airport.</li>
<li>By Rail: Direct connectivity with Delhi, Mumbai, and all the major cities of India.</li>
<li>By Bus: Direct travel route for Delhi, Mumbai, Pune, and various other cities.</li>
<li>Distance from Railway Station and Bus Station - Ujjain: 7 km (4 miles) to the campus, Indore: 50 km (31 miles) to the campus.</li></ul></p> 
<p>Please note that the final list of all eligible candidates for the B.Des Program will be displayed on the University website on 20th May 2018 by 12:00 pm.</p>
<p>To confirm your participation in Studio Test <a href='http://avantikauniversity.edu.in/administrator/thankyoudat.php?email=<?=$email?>'>Please click here</a></p>
<p>Please feel free to contact us in case of any further queries.</p>
<p>Hope to see you at Avantika University!</p>
Thank you,
<br/><br/>
Registrar<br/> 
Avantika University</p>
             
             

<?php
                   $body  = ob_get_clean();
                          $mail->IsSMTP(); // telling the class to use SMTP
                          $mail->SMTPDebug  = 0;                     // enables SMTP debug information (for testing) // 1 = errors and messages
                        // $mail->SMTPSecure = "ssl";                 // sets the prefix to the servier                                          // 2 = messages only
                         $mail->SMTPAuth   = true;                  // enable SMTP authentication
                        $mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
                      $mail->Host       = "dat.net.in";      // sets GMAIL as the SMTP server
                        $mail->Port       = 465;                   // set the SMTP port for the GMAIL
                        $mail->Username   = "admissions@dat.net.in";  // GMAIL username
                        $mail->Password   = "Dat@2017#";            // GMAIL password
                        //$mail->g_smtp_host = 'smtp.gmail.com:465';
                        //$mail->g_smtp_connection_mode = 'ssl';
                       
                        $mail->SetFrom('admissions@avantika.edu.in', 'Avantika University');
                       
                        $mail->AddReplyTo('no-reply@avantika.edu.in', 'No-Reply');
                       
                        $mail->Subject = "Congratulations! You have been shortlisted for the second round of admissions at Avantika University.";
                       
                        $mail->AltBody = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test
                       
                        $mail->MsgHTML($body);
                       
                        $address = $email;
                        $mail->AddAddress($address);
                    
                        $mail->AddBCC('vasudev.phulambrikar@avantika.edu.in');
                        
                        $mail->Send();
             
                        header('location:scheduled_list_custom.php?msg=mailed');
             
             
}



function GetSMSUrl($msg,$num)
{
	//echo $smscode;
	
	$curl = curl_init();
// Set some options - we are passing in a useragent too here
curl_setopt_array($curl, array(
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_URL => 'http://123.63.33.43/blank/sms/user/urlsms.php',
    CURLOPT_USERAGENT => '',
    CURLOPT_POST => 1,
    CURLOPT_POSTFIELDS => array(
        'username' => 'avntka',
        'pass' => 'Uye0E-9@',
         'senderid' => 'AVNTKA',
        'dest_mobileno' => $num,
         'message' => $msg,
        'response' => 'Y',
        'msgtype' => 'TXT'
    )
));
// Send the request & save response to $resp
$resp = curl_exec($curl);
// Close request to clear up some resources
curl_close($curl);

}





if(isset($_GET['email']) && $_GET['email']!='')
{

$datestd='';

 $getdata = mysqli_query($conn, "SELECT * FROM tbl_dat_result WHERE email='".$_GET['email']."'");
 
 //$getdata = mysqli_query($conn, "SELECT * FROM tbl_dat_result WHERE scheduled_email_again!='1' AND custom_bulk_send!='1'");
 
 
 
   while($setdata = mysqli_fetch_array($getdata)){
       
       
      // echo '<pre>'; print_r($setdata); exit; 


       // here we will fetch email of student 
       
      sencustomemail($setdata['email'],$setdata['studio_date'],$setdata['name']);
      
      $name = $setdata['name'];
      $datestd  =   $setdata['studio_date'];

      $msg = "Dear $name, \n Congratulations! \n You have been shortlisted for the Studio Test at Avantika University. The date for your test and Personal Interview is $datestd. Please check your registered email ID for details"; 
      //GetSMSUrl($msg,$setdata['phone']);
      
          mysqli_query($conn,"UPDATE tbl_dat_result SET custom_bulk_send='1' WHERE id='".$setdata['id']."'");

       
   }
   
   
}







//exit;

/*
$i = "1";
for($i=1; $i<=8; $i++) {


//echo "IN"; exit; 


$datestd='';

 $getdata = mysqli_query($conn, "SELECT * FROM tbl_dat_result WHERE flag_avt='1' AND scheduled_email!='1' LIMIT 30");
   while($setdata = mysqli_fetch_array($getdata)){
       
       
      // echo '<pre>'; print_r($setdata); exit; 


       // here we will fetch email of student 
       
      sencustomemail($setdata['email'],$setdata['studio_date'],$setdata['name']);
      
      $name = $setdata['name'];
      $datestd  =   $setdata['studio_date'];

      $msg = "Dear $name, \n Congratulations! \n You have been shortlisted for the Studio Test at Avantika University. The date for your test and Personal Interview is $datestd. Please check your registered email ID for details"; 
     GetSMSUrl($msg,$setdata['phone']);
      
      mysqli_query($conn,"UPDATE tbl_dat_result SET scheduled_email='1' WHERE id='".$setdata['id']."'");


       
   }
   
   
   
   $getdata = mysqli_query($conn, "SELECT * FROM tbl_dat_result WHERE flag_avt='1' AND scheduled_email!='1' LIMIT 0, 30");
   while($setdata = mysqli_fetch_array($getdata)){
       
            
     // sencustomemail($setdata['email'],$setdata['studio_date'],$setdata['name']);
      
      $name = $setdata['name'];
       $datestd  =   $setdata['studio_date'];
      $msg = "Dear $name, \n Congratulations! \n You have been shortlisted for the Studio Test at Avantika University. The date for your test and Personal Interview is $datestd. Please check your registered email ID for details"; 
     // GetSMSUrl($msg,$setdata['phone']);

    // mysqli_query($conn,"UPDATE tbl_dat_result SET scheduled_email='1' WHERE id='".$setdata['id']."'");
       
   }
   
   
   $getdata = mysqli_query($conn, "SELECT * FROM tbl_dat_result WHERE flag_avt='1'AND scheduled_email!='1' LIMIT 0, 30");
   while($setdata = mysqli_fetch_array($getdata)){
       
             
    //  sencustomemail($setdata['email'],$setdata['studio_date'],$setdata['name']);
      
      $name = $setdata['name'];
      $datestd  =   $setdata['studio_date'];

      $msg = "Dear $name, \n Congratulations! \n You have been shortlisted for the Studio Test at Avantika University. The date for your test and Personal Interview is $datestd. Please check your registered email ID for details"; 
    //  GetSMSUrl($msg,$setdata['phone']);

    //  mysqli_query($conn,"UPDATE tbl_dat_result SET scheduled_email='1' WHERE id='".$setdata['id']."'");
       
   }
   
   $getdata = mysqli_query($conn, "SELECT * FROM tbl_dat_result WHERE flag_avt='1'  AND scheduled_email!='1' LIMIT 0, 30");
   while($setdata = mysqli_fetch_array($getdata)){
       
       
      
    //  sencustomemail($setdata['email'],$setdata['studio_date'],$setdata['name']);
      
      $name = $setdata['name'];
      $datestd  =   $setdata['studio_date'];

      $msg = "Dear $name, \n Congratulations! \n You have been shortlisted for the Studio Test at Avantika University. The date for your test and Personal Interview is $datestd. Please check your registered email ID for details"; 
    //  GetSMSUrl($msg,$setdata['phone']);
    
    //  mysqli_query($conn,"UPDATE tbl_dat_result SET scheduled_email='1' WHERE id='".$setdata['id']."'");
       
   }
   
   
   $getdata = mysqli_query($conn, "SELECT * FROM tbl_dat_result WHERE flag_avt='1'  AND scheduled_email!='1' LIMIT 0, 30");
   while($setdata = mysqli_fetch_array($getdata)){
       
         
    //  sencustomemail($getdata['email'],$setdata['studio_date'],$setdata['name']);
      
      $name = $setdata['name'];
      $datestd  =   $setdata['studio_date'];

      $msg = "Dear $name, \n Congratulations! \n You have been shortlisted for the Studio Test at Avantika University. The date for your test and Personal Interview is $datestd. Please check your registered email ID for details"; 
    //  GetSMSUrl($msg,$setdata['phone']);
 
    //  mysqli_query($conn,"UPDATE tbl_dat_result SET scheduled_email='1' WHERE id='".$setdata['id']."'");
       
   }
   
   
   $getdata = mysqli_query($conn, "SELECT * FROM tbl_dat_result WHERE flag_avt='1' AND scheduled_email!='1' LIMIT 0, 30");
   while($setdata = mysqli_fetch_array($getdata)){
       
       
      

     //  sencustomemail($getdata['email'],$setdata['studio_date'],$setdata['name']);
      
      $name = $setdata['name'];
      $datestd  =   $setdata['studio_date'];

      $msg = "Dear $name \n, Congratulations! \n You have been shortlisted for the Studio Test at Avantika University. The date for your test and Personal Interview is $datestd. Please check your registered email ID for details"; 
   //   GetSMSUrl($msg,$setdata['phone']);

    //  mysqli_query($conn,"UPDATE tbl_dat_result SET scheduled_email='1' WHERE id='".$setdata['id']."'");
       
   }
   
   
   
   

}
*/










?>