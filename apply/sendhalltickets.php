<?php
//GenerateHallTicket(455);
//GenerateHallTicket();
function GenerateHallTicket()
{
//	include("php/phpToPDF.php"); 
$DB_Server = "localhost"; // MySQL Server
$DB_Username = "avantiow_dbuser"; // MySQL Username
$DB_Password = "g_mxP0iGba.("; // MySQL Password
$DB_DBName = "avantiow_avantika_db"; // MySQL Database Name

//$DB_Username = "root"; // MySQL Username
//$DB_Password = ""; // MySQL Password
//$DB_DBName = "avantika_admission"; // MySQL Database Name 

$conn = mysqli_connect($DB_Server, $DB_Username, $DB_Password,$DB_DBName);
      //  $url="http://avantikauniversity.edu.in/apply/printformvalue.php";
			$shorturl="https://goo.gl/XUVGBA";
			
        $query="SELECT memberid,photo_image,applicationid,programmesugpg,name,middlename,lastname,caddress,ccity,cpincode,cstate,ccountry,phonenumber,parentmobilenumber,email,testcenter,parentemail
FROM student where formstatus='payment done' and (programmesugpg='B.Des' or programmesugpg='M.Des') and testcenter is not NULL and created < '2017-03-22 00:00:00' order by memberid limit 52,1";
//and memberid=280";
echo $query;
$sql = mysqli_query($conn,$query);
		$count = mysqli_num_rows($sql);
		echo $count;
        if($count>0)
        {

			
			echo "<br><br><table border=1>";
			$i=1;
			while($applicantdata = mysqli_fetch_assoc($sql))
			{
                ini_set('max_execution_time', 300);
				$rno=6000+$applicantdata["memberid"];
				
				
				echo "<tr><td>".$applicantdata["memberid"]."</td>";
  $ta="SELECT address
FROM testcenteraddress where city='".$applicantdata["testcenter"]."' limit 0,1";

//echo $ta;
$sqlta = mysqli_query($conn,$ta);
		$countta = mysqli_num_rows($sqlta);
        if($countta>0)
        {
           $tac= mysqli_fetch_assoc($sqlta);
        }
		
	
	$query1 = "SELECT discipline FROM studentpreference WHERE `studentid` ='".$applicantdata["memberid"]."' order by prefno";
		$sql21 = mysqli_query($conn,$query1);
		$count1 = mysqli_num_rows($sql21);
        if($count1>0)
        {
			$discipline="";
			$disciplineprint="";
			$j=0;
            while($row = mysqli_fetch_assoc($sql21))
			{
				$j++;
				$discipline.="<li>".$row["discipline"]."</li>";
				
			}
		}
	    $queryupdate = "update student set lastPage='printformvalue.php' where memberid='".$applicantdata["memberid"]."'";
		mysqli_query($conn,$queryupdate);

			
			$msg="Dear ".$applicantdata["name"].",Download your DAT Admit Card-2017:Avantika University on .<p>".$shorturl." - Regards,<br>
Admission Cell,<br>
Team Avantika</p>";

			
			
			
	
	  $body="<br><p>Dear ".$applicantdata["name"].",</p>
		<p>Greetings from Avantika!</p>
		<p>We have received your application for the academic year 2017-18.</p>
		<p>Your Roll No. for examination is <b>".$applicantdata['programmesugpg']." - ".$rno."</b></p>
		<p>The test center selected by you for Design Aptitude test is: <b>".$applicantdata["testcenter"]."</b></p>
		<p>The Design Aptitude test is scheduled on <b>9th April 2017 between 10 AM to 1 PM</b>.</p><p> Kindly login to Avantika portal using below link, download your Admit Card which you have to present during admission process.</p>
		<a href='http://avantikauniversity.edu.in/apply/printformvalue.php' target='_blank'>Download Hall Ticket</a>
		<p>You are requested to report to the test center 15 minutes prior the schedule time.</p>
		  <p ><b>Test Center Details: </b>".$tac['address']."</p>
		<p>*Note: Students should carry drawing, cutting-pasting & coloring material (color pencil), crayons, stapler, scissors & glue stick, fevicol.<br> Please check our website <a href='http://avantikauniversity.edu.in/'>Avantika University</a> prior the Design Aptitude Test for details.</p>
		<p>In case of any query please feel free to contact us on 7447728324/ 7447728332/ 7447728334</p>
		<p>Thank you and see you soon.<br>
Regards,<br>
Admission Cell,<br>
Team Avantika</p>";

echo "<td>".$body."</td></tr>";
		$subject = "DAT Admit card for-2017: Avantika University";
		//SendMailAvantika($email,$body,$subject);
		
		$to=$applicantdata["email"];
		
		$headers = "MIME-Version: 1.0" . "\r\n";
			$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
			$headers .= 'From: Avantika Admissions - 2017 <admissions@avantikauniversity.edu.in>' . "\r\n";
			$headers .= 'To: <'.$to.'>' . "\r\n";
			$headers .= 'bcc: reshma.chavan@avantika.edu.in' ."\r\n";
			$headers .= 'cc: malhar@avantika.edu.in' ."\r\n";
			$headers .= 'cc: <'.$applicantdata['parentemail'].'>' ."\r\n";
			$headers .= 'bcc:jyoti.deshmukh@avantikauniversity.edu.in' ."\r\n";
		
		mail($to,$subject,$body,$headers);
		
		
			//GetSMSUrl($msg,$applicantdata['phonenumber']);
			//GetSMSUrl($msg,$applicantdata['parentmobilenumber']);
					
					
					$ht='<body style="width:1000px;margin: auto;display: block;height: auto;font-family:arial;padding:10px;">
    <div style="padding: 50px;border:3px solid #000;">
    <div style="width:100%;float: right;">
        <div style="float: right;">
        <img src="http://avantikauniversity.edu.in/apply/images/logo.svg" style="width:100px;margin-right: 10px;"/>
        <img src="http://avantikauniversity.edu.in/apply/images/mitid.jpg" style="width:240px;margin-right: 10px;"/>
        <img src="http://avantikauniversity.edu.in/apply/images/mit.png" style="width:100px;margin-right: 10px;"/>
         <br>
    <br>
    <br> 
        </div>
       
    </div>
   <div style="width: 100%;">';

   if(!isset($applicantdata['photo_image']) || $applicantdata['photo_image']=="")
   {
	$ht.=' <img src="http://avantikauniversity.edu.in/apply/'.$applicantdata['photo_image'].'" height=120 alt="" width=120 style="width:120px;border:1px solid;margin-right: 10px;float: right;padding:10px;"/>';
	
	$ht.='<span style="position:absolute;right:90px;width:100px;text-align:center;top:240px;">Affix a recent passport size photograph here</span>';
   }
   else
   {
	$ht.=' <img src="http://avantikauniversity.edu.in/apply/'.$applicantdata['photo_image'].'" height=120 alt="" width=120 style="width:120px;border:1px solid;margin-right: 10px;float: right;padding:10px;"/>';
   }
   
	$ht.='	
        <p style="font-family:arial;padding-top:200px;">
Roll No. &nbsp;&nbsp;&nbsp;&nbsp;<b>'.$applicantdata['programmesugpg']." - ".$rno.'</b>
            </p>
    </div>
    <div style="width: 100%;">
         <br>
                <br>
                <br>
                <br>
        <p><b>Admit Card for Admission Procedure</b></p>
        <div style="height: 2px;width: 100%;background: #000;"></div>
    </div>
    <div style="width: 100%;">
        <br>
        <br>
        <p style="float: left;width: 100%;"><b>Name of the candidate:</b> <span style="text-decoration:underline;font-size:12px;">'.$applicantdata['name'].' '.$applicantdata['middlename'].$applicantdata['lastname'].'</span></p>
    </div>
 <div style="width: 100%;">

        <p style="float: left;width: 100%;"><b>Full Postal Address:</b> <span style="text-decoration:underline;font-size:12px;">'.$applicantdata['caddress'].','.$applicantdata['ccity'].'-'.$applicantdata['cpincode'].','.$applicantdata['cstate'].','.$applicantdata['ccountry'].'</span></p>
    </div>
 <div style="width: 100%;">
        <p style="float: left;width:50%;"><b>Email:</b> <span style="text-decoration:underline;font-size:12px;">'. $applicantdata['email'].'</span></p>
         <p style="float: right;width: 50%;"><b>Tel:</b> <span style="text-decoration:underline;font-size:12px;">'.$applicantdata['phonenumber']." / ".$applicantdata['parentmobilenumber'].'</span></p>
    </div>

 <div style="width: 100%;">
        <p style="float: left;width: 100%;"><b>Test Center:</b> <span style="text-decoration:underline;font-size:12px;">'.$tac['address'].'</span></p>
    </div>
  <div style="width: 100%;">
        <p style="float: left;width: 100%;"><b>Discipline Applied for:</b> <span style="text-decoration:underline;font-size:12px;">'.$applicantdata['programmesugpg'].'</span></p>
    </div>
   <div style="width: 100%;">
	
        <p style="float: left;width: 100%;"><b>Preferences:</b></p>
		<div style="width: 100%;float: left;">
			<ol>'.$discipline.'</ol>
		</div>
    </div>
   <div style="width: 100%;float: right;">
                

        <p>
            <br>
            <br>
             <div style="height: 2px;width: 200px;background: #000;float: right;margin-right:10px;"></div>
             <br>
            <span style="float: right;margin-right:10px;width:200px;text-align: center;"><b>Signature</b></span>
        <br>
        <br>
        <br>
        </p>
    </div>
      <div style="width: 100%;">
        <p><b>Design Aptitude Test (DAT) is on 9th April 2017 between 10am to 1pm</b></p>
      </div>

 <div style="width: 100%;">
     <p><b>Students should carry a valid photo identity at the time of examination along with the ID-card</b></p>
      </div>
    
    
    </div>
   
</body>' ;
//echo $ht;
//date_default_timezone_set("Asia/Kolkata");
//$d=time();
//$d="Created on ".date("d M Y h:i:sa", $d);
//
//// PUT YOUR HTML IN A VARIABLE
//$my_html=$ht."<div>".$d."</div></HTML>";
//
//// SET YOUR PDF OPTIONS
//// FOR ALL AVAILABLE OPTIONS, VISIT HERE:  http://phptopdf.com/documentation/
//$pdf_options = array(
//  "source_type" => 'html',
//  "source" => $my_html,
//  "action" => 'save',
//  "save_directory" => 'halltickets/',
//  "file_name" => $rno.'hallticket.pdf');
//
//// CALL THE phpToPDF FUNCTION WITH THE OPTIONS SET ABOVE
//phptopdf($pdf_options);
//			$i++;
//			$rno++;
			}
}
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
        'pass' => 'av$U17M!',
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
?>