<?php

  ini_set('max_execution_time', 300);

  $conn = mysqli_connect("localhost", "avantiow_dbuser", "g_mxP0iGba.(","avantiow_avantika_db");

  function mail_attachment($to, $subject, $message, $files) {
      $headers = "From: admissions@avantika.edu.in";
      $headers .= "bcc: devsdevs14@gmail.com";
      $semi_rand = md5(time()); 
      $mime_boundary = "==Multipart_Boundary_x{$semi_rand}x"; 
      $headers .= "\nMIME-Version: 1.0\n" . "Content-Type: multipart/mixed;\n" . " boundary=\"{$mime_boundary}\""; 
      
      $message = "This is a multi-part message in MIME format.\n\n" . "--{$mime_boundary}\n" . "Content-Type: text/html; charset=\"iso-8859-1\"\n" . "Content-Transfer-Encoding: 7bit\n\n" . $message . "\n\n"; 
      $message .= "--{$mime_boundary}\n";

      foreach ($files as $file) {

        $filename = end(explode("/",$file));  
        $data = file_get_contents($file);

        $data = chunk_split(base64_encode($data));

        $message .= "Content-Type: {\"application/octet-stream\"};\n" . " name=\"$file\"\n" .
          "Content-Disposition: attachment;\n" . " filename=\"$file\"\n" .
          "Content-Transfer-Encoding: base64\n\n" . $data . "\n\n";
        $message .= "--{$mime_boundary}\n";
      }
        echo (@mail($to, $subject, $message, $headers)) ? "<p>Send to $to!</p>" : "<p>Not send toaar $to!</p>"; 
  } // mail-attachment





//Get Dynamic Data from here!....

$table_name='';

if($_GET['table']=='B.Tech') { $table_name = 'tbl_btech_confirmation_email_send'; }

if($_GET['table']=='B.Des' || $_GET['table']=='M.Des') { $table_name = 'tbl_bdes_mdes_confirmation_email_send'; }



if($_GET['table']=='B.Tech') { 
 $getbscdata = mysqli_query($conn,"SELECT * FROM tbl_btech_confirmation_email_send WHERE id = '".$_GET['id']."'");
}

if($_GET['table']=='B.Des' || $_GET['table']=='M.Des') {
 $getbscdata = mysqli_query($conn,"SELECT * FROM tbl_bdes_mdes_confirmation_email_send WHERE id = '".$_GET['id']."'");
}

  while($setbscdata = mysqli_fetch_array($getbscdata)){

   //echo '<pre>'; print_r($setbscdata); exit;






//Create PDF Here




include("phpToPDF.php"); 


// PUT YOUR HTML IN A VARIABLE
$my_html="<HTML>
<img src='http://avantikauniversity.edu.in/administrator/mitcampus_pune.png' style='height:100px;width:200px;float:left;'><img src='http://avantikauniversity.edu.in/administrator/avantika_logo.png' style='height:100px;width:100px;float:right;'><br/><br/>
<div style='text-align:center;clear:both;color:orange'>Statement of Offer</div><br/><div style='text-align:right;'>Date:".Date('Y-m-d')."</div><br>
Dear ".$setbscdata['first_name'].",<br/>		
Greetings from Avantika University!<br/><br/>
Your application for admission to the B.Sc program has been reviewed. We are pleased to inform you that you have been conditionally accepted for the program, commencing in 2017-18.<br/><br/> 
Congratulations!<br/><br/>
Complete details of your conditional admission are outlined below:<br/><br/>
1.	Name of Applicant: ".$setbscdata['first_name']."&nbsp;".$setbscdata['last_name']."<br/><br/>
2.	Application ID: ".$setbscdata['application']."<br/><br/>
3.	Date of Birth: ".$setbscdata['dob']."<br/><br/>
4.	Address: ".$setbscdata['address']."<br/><br/>
5.	Program: ".$setbscdata['program']."(".$setbscdata['discipline'].")<br/><br/>
6.	Mode of Attendance: Full time, residential<br/><br/>
7.	Course Commencement: 5th August 2017<br/><br/>
8.	Duration of Course: 3 years (6 semesters)<br/><br/>
9.	Campus: Avantika University, Ujjain, Madhya Pradesh<br/><br/>
10.	Condition of Admission: ".$setbscdata['condition_admission']."<br/><br/>
11.	Tuition Fees for Academic Year 2017-18  :  Rs. 1,37,000/- <br/><br/>
 (Tuition fees Rs. 1,20,000/-  + Rs. 17,000/- miscellanies) <br/><br/>
12.	Fees for 1st semester Rs.60,000/- + Rs.8,500/- and 1st installment Rs. 34,250/-<br/><br/>
A dynamic student life awaits you at Avantika – India’s first design-centered university. Our programs are an interesting mix of design, technology, humanities, and entrepreneurship; melded with the spirit of Design Thinking. Collaboration across disciplines is the norm here at Avantika, with creativity and innovation being encouraged every step of the way. Be a part of our inaugural batch and join the culture of becoming a Trend Setter and Change Maker with a transformed life.<br/><br/>
Please note that this is a conditional acceptance from Avantika University, and we will require a written confirmation from you, establishing your intent to join the program. You can confirm your admission by filling the Confirmation of Participation form provided alongside within two weeks of receiving this communication. For detailed information on the terms and conditions regarding acceptance, please visit our website. <br/>
Do feel free to contact the Admissions Office for any further information or assistance.<br/>
We look forward to hearing from you soon.<br/><br/>

Yours sincerely,<br/><br/>
<img src='http://avantikauniversity.edu.in/administrator/mp_signature.png' style='height:60px;width:100px;float:left;'><br/>
<div style='clear:both;'></div>
Dr. Manesh Patil<br/>

</HTML>";

// SET YOUR PDF OPTIONS
// FOR ALL AVAILABLE OPTIONS, VISIT HERE:  http://phptopdf.com/documentation/
$pdf_options = array(
  "source_type" => 'html',
  "source" => $my_html,
  "action" => 'save',
  "save_directory" => $docsdir,
  "file_name" => 'statement_of_offer.pdf');

// CALL THE phpToPDF FUNCTION WITH THE OPTIONS SET ABOVE
phptopdf($pdf_options);



// PUT YOUR HTML IN A VARIABLE
$my_html_conf="<HTML>
<img src='http://avantikauniversity.edu.in/administrator/mitcampus_pune.png' style='height:100px;width:200px;float:left;'><img src='http://avantikauniversity.edu.in/administrator/avantika_logo.png' style='height:100px;width:100px;float:right;'><br/><br/>
<div style='text-align:center;clear:both;color:orange'>Confirmation of Participation</div><br/><br>
I Lokesh Dansena with Application ID: ".$setbscdata['application'].", a resident of Raigarh, Chhatisgarh, India, hereby accept the offer and confirm my participation in the ".$setbscdata['program']."(".$setbscdata['discipline'].") Program at Avantika University, Ujjain,   Madhya Pradesh for the academic year 2017-18 starting from August 2017.<br/><br/>
In addition to this, I also understand and accept all terms and conditions mentioned in the letter of admission. I am fully aware that I must meet the set conditions, until which point my admission will remain conditional.<br/><br/>
Date:<br/><br/>
Signature:<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
Note: Please sign and send a scanned copy of this “Confirmation of Participation” document to the Admissions team via email at admissions@avantika.edu.in within two weeks of receiving this communication.<br/>


</HTML>";

// SET YOUR PDF OPTIONS
// FOR ALL AVAILABLE OPTIONS, VISIT HERE:  http://phptopdf.com/documentation/
$pdf_options = array(
  "source_type" => 'html',
  "source" => $my_html_conf,
  "action" => 'save',
  "save_directory" => $docsdir,
  "file_name" => 'confirmation_letter.pdf');

// CALL THE phpToPDF FUNCTION WITH THE OPTIONS SET ABOVE
phptopdf($pdf_options);




// PUT YOUR HTML IN A VARIABLE
$my_html="<HTML>
<img src='http://avantikauniversity.edu.in/administrator/mitcampus_pune.png' style='height:100px;width:200px;float:left;'><img src='http://avantikauniversity.edu.in/administrator/avantika_logo.png' style='height:100px;width:100px;float:right;'><br/><br/>
<div style='text-align:center;clear:both;color:orange'>PREPARING YOURSELF FOR ENROLLMENT AT AVANTIKA</div><br/><div style='text-align:right;'>Date:".Date('Y-m-d')."</div><br>

Dear ".$setbscdata['first_name'].",<br/><br/><br/>
Congratulations on your conditional admission at Avantika University.<br/><br/> 
This guidance document will help you to complete your admission process and enrollment at Avantika. Moreover, it will provide you the necessary information about the campus amenities, accommodation, and other important information on starting your student life at Avantika.
Please make sure you read this guidance document carefully for seamless enrollment at Avantika.<br/><br/>
<b style='color:orange;'>Confirming your Admission</b><br/><br/>
Confirm your admission by sending a scanned copy of the duly signed Confirmation of Participation form provided alongside. You are expected to attach the scan copy of the signed confirmation form and reply to the Conditional Offer E-mail you have received from the Admission Team within two weeks of receipt of the Conditional Offer Letter.<br/><br/> 
Kindly ensure that you meet the eligibility criteria required to complete your admission process at Avantika. (Refer to Admission Section on the website, if required.)<br/><br/>
<b style='color:orange;'>Certified Copies</b><br/><br/>
You are required to submit certified copies of all educational qualification documents before commencing the program.  (A certified copy is copy of your original document. This copy will need to bear an original stamp, signature, and date/place by an authorized institution.)<br/><br/>
<b style='color:orange;'>Tuition Fees</b><br/><br/>
For the first semester, the tuition fee is mentioned on your conditional offer letter. For more information, please visit our website. Our student support team will be able to help you with queries related to fees.<br/><br/>
<b style='color:orange;'>Payment Schedule</b><br/><br/>
<ul>
Once you confirm the participation to the program, you are expected to follow the given fees payment schedule 
<li>Total Tuition Fees for 1st Semester – Rs.60,000/- + Rs.8500 (Miscellaneous Charges)</li> 
<li>Payment of first instalment towards the first semester of Rs.34,250/- to be done on or before  5 June, 2017.</li>
<li>Payment of second instalment towards the first semester of Rs.34,250/- to be done on or before  3 July, 2017 which will be the last date of your admission.</li>
</ul><br/><br/>
<b style='color:orange;'>Payment Mode</b><br/><br/><ul>
The payment option for making payment of your tuition fees are
<li>Net Banking (Details available on website)</li>
<li>Credit Card / Debit Card (Details available on website)</li>
<li>Demand Draft</li> 
<ul><br/>
DD should be drawn on “Avantika University” payable at Ujjain and mailed on the mentioned address :<br/><br/> 
The Project Director (Avantika University)<br/>
C/o Dr.  Sunil Karad, Executive Director Office<br/>
Avanti, 3rd Floor,<br/> 
MIT Pune Campus, Kothrud,<br/> 
Pune-411038, Maharashtra, India.<br/>
Cancellation Policy<br/><br/>
Avantika University will cancel an Admission only if the student fails to meet the Entry Requirements and their complete fees will be refunded within 15 days of cancellation.<br/><br/> 

A student opting to withdraw his/her admission will be entitled to the refund of fees as detailed below:
<br/><br/>
<table style='font-family: arial, sans-serif;border-collapse: collapse;width: 100%;'>
<tr>
<th style='border: 1px solid #dddddd;text-align: left;padding: 8px;'>Sr. No.</th>
<th style='border: 1px solid #dddddd;text-align: left;padding: 8px;'>Refund of Fees paid</th>
<th style='border: 1px solid #dddddd;text-align: left;padding: 8px;'>Point of time when notice of withdrawal is served</th> 
</tr>
<tr>
<td style='border: 1px solid #dddddd;text-align: left;padding: 8px;'>1</td>
<td style='border: 1px solid #dddddd;text-align: left;padding: 8px;'>100 %</td>
<td style='border: 1px solid #dddddd;text-align: left;padding: 8px;'>2 weeks before payment of the 2nd installment</td>
</tr>
<tr>
<td style='border: 1px solid #dddddd;text-align: left;padding: 8px;'>2</td>
<td style='border: 1px solid #dddddd;text-align: left;padding: 8px;'>80 %</td>
<td style='border: 1px solid #dddddd;text-align: left;padding: 8px;'>Within 2 weeks before payment of  2nd installment</td>
</tr>
<tr>
<td style='border: 1px solid #dddddd;text-align: left;padding: 8px;'>3</td>
<td style='border: 1px solid #dddddd;text-align: left;padding: 8px;'>50 %</td>
<td style='border: 1px solid #dddddd;text-align: left;padding: 8px;'>Within 4 weeks of paying the 2nd installment</td>
</tr>
<tr>
<td style='border: 1px solid #dddddd;text-align: left;padding: 8px;'>4</td>
<td style='border: 1px solid #dddddd;text-align: left;padding: 8px;'>0 %</td>
<td style='border: 1px solid #dddddd;text-align: left;padding: 8px;'>After 4 weeks of paying the 2nd installment</td>
</tr>
		
</table>

<ul>
<li>In case of (1) in the table above, 10% of the tuition fees will be deducted as processing charges from the refundable amount.</li>
<li>Fees shall be refunded to the student within fifteen days from the date of receiving a written application from him/her towards cancellation of admission</li> 
</ul>

<br/>
<b style='color:orange;'>Loan Facility</b><br/><br/>

Students Loan facility will be available to the students securing admission to the university. Disbursement of the loan is as per the banks' terms and conditions. Our staff from the Admissions office will help and guide you in this regard.<br/><br/>
<b style='color:orange;'>Accommodation</b><br/><br/>
Programs at Avantika are fully residential, therefore every student is required to stay on campus. Hostel facilities are available on campus at Avantika University. Intended to promote interaction and collaboration, the residential living at Avantika is aimed to foster a sense of community and ownership, and build strong friendships that carry through the academic years and beyond. The facilities include single/double occupancy rooms for students. They have to choose between air-conditioned/non air-conditioned rooms. Hostel rooms are assigned to students on a first-come-first-served basis. The campus cafeteria serves healthy delicacies, inspired from a range of cuisines around the world.<br/><br/> 
Following options are available for accommodation. The student is required to communicate his/her preference for the room after confirmation of your admission.  The fees mentioned below are per semester.<br/><br/>

<table>

<tr>
<th style='border: 1px solid #dddddd;text-align: left;padding: 8px;'>Residence Hostel Fees</th>
<th style='border: 1px solid #dddddd;text-align: left;padding: 8px;'>Room Type</th>
</tr>

<tr>
<td style='border: 1px solid #dddddd;text-align: left;padding: 8px;'>75,000</td>
<td style='border: 1px solid #dddddd;text-align: left;padding: 8px;'>(Single AC)</td>
</tr>

<tr>
<td style='border: 1px solid #dddddd;text-align: left;padding: 8px;'>62,500</td>
<td style='border: 1px solid #dddddd;text-align: left;padding: 8px;'>(Single Non-AC)</td>
</tr>

<tr>
<td style='border: 1px solid #dddddd;text-align: left;padding: 8px;'>50,000</td>
<td style='border: 1px solid #dddddd;text-align: left;padding: 8px;'>(Double AC)</td>
</tr>

<tr>
<td style='border: 1px solid #dddddd;text-align: left;padding: 8px;'>37,500</td>
<td style='border: 1px solid #dddddd;text-align: left;padding: 8px;'>(Double Non-AC)</td>
</tr>


</table>

<br/><br/><br/>
<table>
<tr>
<td style='border: 1px solid #dddddd;text-align: left;padding: 8px;'>
Hostel Security Deposit (Refundable)
</td>
<td style='border: 1px solid #dddddd;text-align: left;padding: 8px;'>2,500</td>
</tr>
<tr>
<td style='border: 1px solid #dddddd;text-align: left;padding: 8px;'>Mess Fees</td>
<td style='border: 1px solid #dddddd;text-align: left;padding: 8px;'>32,500</td>
	
</table>

<br/><br/><br/>

<b style='color:orange;'>Campus Amenities</b><br/><br/>
The learning environment at Avantika offers students with the freedom to think, interact with faculty members without the paucity of classrooms or breakout sessions. Additionally, the diverse reach of university education provides connect with world leaders to stay abreast of professional ecosphere through lectures, seminars, and practical sessions. Research and teaching on this new, future-focused campus will concentrate on the interfaces between disciplines – for example, where business education meets big data, computer science, and digital innovation.<br/><br/>
Central to the vision of the new University campus is a Fabrication Laboratory (Fab Lab). Fab Lab is a place where technologies, policies, practices, business models, and businesses fit for the digitalised society are created – and a 'business school of the future', offering courses in partnership with industry to prepare students for the jobs of tomorrow.<br/><br/>
•	Cafeteria and Refectory<br/>
•	Laundry room with washing machines and dryers<br/>
•	Laundry drying area<br/>
•	Student lounge<br/>
•	Banking and Retail Outlets<br/>
•	Medical and Day Care<br/>
•	Indoor and Outdoor Sports<br/>
•	Amphitheater<br/>
•	Recreational rooms<br/>
•	Study and discussion rooms<br/>
•	LAN point and WIFI<br/>
•	Free shuttle bus facility to Ujjain and Indore Academic Facilities<br/>
•	State-of-the-art computer centers<br/>
•	Design studios<br/>
•	Labs<br/>
•	Lecture theatres<br/>
•	High-speed digital connectivity<br/>
•	Online libraries<br/>
•	Interactive classrooms<br/>
•	Data centers<br/>
<b style='color:orange;'>About Ujjain</b><br/><br/>
You may be acquainted with Ujjain as a pilgrimage town, but it has so much more to offer to anyone who visits, cutting across all age groups.
Indeed, as you step in Ujjain the spiritual vibe is palpable in the air. Going beyond the obvious, this is a city that is a balanced blend of the old and new with stunning ancient architectural monuments and glitzy shopping centers.<br/><br/>
Quite literally the ‘heart of India’, Ujjain boasts of an eclectic mix of cultures when it comes to its cuisine. The food here is a lip-smacking blend of Rajasthani, Gujarati, and Malwa flavors in both, savory and sweet versions.<br/><br/>
Being listed on the Smart Cities Mission, Ujjain is undergoing a massive facelift with improved infrastructural facilities and is en route to becoming an amazing city to live in with fabulous growth potential.<br/><br/>
<b style='color:orange'>How to Reach</b><br/><br/>
•	By Air: The closest airport is Devi Ahilyabai Holkar Domestic Airport at Indore. The busiest airport in Madhya Pradesh, it is well connected to most of major Indian cities. The University is 51 km (32 miles) from the Indore Airport.<br/><br/>
•	By Rail: Direct connectivity with Delhi, Mumbai, and all the major cities from India.<br/><br/>
•	By Bus: Direct travel route for Delhi, Mumbai, Pune, and a variety of cities.<br/><br/>
•	Distance from Railway Station and Bus Station - Ujjain: 7 km (4 miles) to the campus, Indore: 50 km (31 miles) to the campus
Students and parents can avail the shuttle bus service provided by Avantika University (based on prior booking).<br/><br/>
Please feel free to contact us in case of any further queries.<br/><br/>
<br/><br/>

Yours sincerely,<br/><br/>
<img src='http://avantikauniversity.edu.in/administrator/mp_signature.png' style='height:60px;width:100px;float:left;'><br/>
<div style='clear:both;'></div>
Dr. Manesh Patil<br/>

Head Admissions<br/>

</HTML>";

// SET YOUR PDF OPTIONS
// FOR ALL AVAILABLE OPTIONS, VISIT HERE:  http://phptopdf.com/documentation/
$pdf_options = array(
  "source_type" => 'html',
  "source" => $my_html,
  "action" => 'save',
  "save_directory" => $docsdir,
  "file_name" => 'preparation_enrollment.pdf');

// CALL THE phpToPDF FUNCTION WITH THE OPTIONS SET ABOVE
phptopdf($pdf_options);








mail_attachment($setbscdata['email'],"Subject","Here is the body",array("Bsc_offer_files/Why_Avantika.pdf","preparation_enrollment.pdf","statement_of_offer.pdf","confirmation_letter.pdf"));


if(mysqli_query($conn,"UPDATE $table_name SET email_success='1' WHERE id='".$setbscdata['id']."' "))
header('location:student_confirm_email.php?program='.$_GET['table']);
}


?>