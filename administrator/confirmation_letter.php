<?php


include("phpToPDF.php"); 
// PUT YOUR HTML IN A VARIABLE
$my_html="<HTML><img src='http://avantikauniversity.edu.in/administrator/mitcampus_pune.png' style='height:100px;width:200px;float:left;'><img src='http://avantikauniversity.edu.in/administrator/avantika_logo.png' style='height:100px;width:100px;float:right;'><br/><br/>
<div style='text-align:center;clear:both;color:orange'>Confirmation of Participation</div><br/><br>
I Lokesh Dansena with Application ID: AUSCPG1411T149147400, a resident of Raigarh, Chhatisgarh, India, hereby accept the offer and confirm my participation in the    B.Sc (Economics) Program at Avantika University, Ujjain,   Madhya Pradesh for the academic year 2017-18 starting from August 2017.<br/><br/>
In addition to this, I also understand and accept all terms and conditions mentioned in the letter of admission. I am fully aware that I must meet the set conditions, until which point my admission will remain conditional.<br/><br/><br/><br/><br/>
Date:<br/><br/>
Signature:<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
Note: Please sign and send a scanned copy of this “Confirmation of Participation” document to the Admissions team via email at admissions@avantika.edu.in within two weeks of receiving this communication.<br/>


</HTML>";

// SET YOUR PDF OPTIONS
// FOR ALL AVAILABLE OPTIONS, VISIT HERE:  http://phptopdf.com/documentation/
$pdf_options = array(
  "source_type" => 'html',
  "source" => $my_html,
  "action" => 'save',
  "save_directory" => $docsdir,
  "file_name" => 'confirmation_letter.pdf');

// CALL THE phpToPDF FUNCTION WITH THE OPTIONS SET ABOVE
phptopdf($pdf_options);

?>