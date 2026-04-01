<?php
include("phpToPDF.php"); 
// PUT YOUR HTML IN A VARIABLE
$my_html="<HTML>
<img src='http://avantikauniversity.edu.in/administrator/mitcampus_pune.png' style='height:100px;width:200px;float:left;'><img src='http://avantikauniversity.edu.in/administrator/avantika_logo.png' style='height:100px;width:100px;float:right;'><br/><br/>
<div style='text-align:center;clear:both;color:orange'>Statement of Offer</div><br/><div style='text-align:right;'>Date:".Date('Y-m-d')."</div><br>
Dear Manav,<br/>		
Greetings from Avantika University!<br/><br/>
Your application for admission to the B.Sc program has been reviewed. We are pleased to inform you that you have been conditionally accepted for the program, commencing in 2017-18.<br/><br/> 
Congratulations!<br/><br/>
Complete details of your conditional admission are outlined below:<br/><br/>
1.	Name of Applicant: Manav Vohra<br/><br/>
2.	Application ID: AUSCPG1768T149294139<br/><br/>
3.	Date of Birth: 26/04/1999<br/><br/>
4.	Address: A 603,Ism House ,6Th Floor Flr, Thakur Village ,Kandivali East,<br/><br/>
5.	Program: B.Sc (Economics)<br/><br/>
6.	Mode of Attendance: Full time, residential<br/><br/>
7.	Course Commencement: 5th August 2017<br/><br/>
8.	Duration of Course: 3 years (6 semesters)<br/><br/>
9.	Campus: Avantika University, Ujjain, Madhya Pradesh<br/><br/>
10.	Condition of Admission: Submission of SSC certificate, Video, SoP and Secure 60% in HSC<br/><br/>
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

Head Admissions<br/>

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

?>