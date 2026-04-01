<?php
include_once "administrator/include/connection.php";


$url="https://mitskillsindia.edu.in/apply/senddoctosde.php";
$ch=curl_init();
curl_setopt($ch, CURLOPT_URL,$url);
curl_setopt($curl, CURLOPT_GET, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
$rusult=curl_exec($ch);
curl_close($ch);



$result= json_decode($rusult,true);
//var_dump($rusult);
//echo '<pre>';
//print_r($result);

if ($result['status'] == 1) {
    $data = $result['data'];
    
    foreach ($data as $record) {
     
      
      
      
      
      
        
        
        
       // echo "</br>SELECT * FROM `tbl_students_data` WHERE `student_id` ='".$record['student_id']."' ";
       
          $search="SELECT * FROM `tbl_students_data` WHERE `student_id` ='".$record['student_id']."' AND `transfer` ='Skills'";
          
          $result = mysqli_query($conn, $search);
          
          if (mysqli_num_rows($result) > 0) 
          {
              
            
           $getsucc = "UPDATE `tbl_students_data` SET `photo` = '".$record['photo']."',`identity` = '".$record['identity']."',`graduationcertificate` = '".$record['graduationcertificate']."',`signature` = '".$record['signature']."',`application_form` = '".$record['application_form']."',`dataTime` = '".$record['dataTime']."' WHERE student_id='".$record['student_id']."'";
									 
									 if (mysqli_query($conn, $getsucc)) 
                                           {
                                             
                                            echo "updated successfully</br>";
                                           
                                           
                                           } 
                                         else 
                                          {
                                           echo "Error:  <br>" . mysqli_error($conn);
                                          }
          }
           else 
          {
              
               $insert="INSERT INTO `tbl_students_data` (`id`, `student_id`, `photo`, `ssc`, `hsc`, `identity`, `transfer`, `nationality`,`domicile`, `castecertificate`, `castevalidity`, `noncreamy`, `graduationcertificate`, `graduationcertificate_sem1`, `graduationcertificate_sem2`, `graduationcertificate_sem3`, `graduationcertificate_sem4`, `graduationcertificate_sem5`, `graduationcertificate_sem6`, `graduationcertificate_sem7`, `graduationcertificate_sem8`, `experience`, `signature`, `application_form`, `undertaking_form`, `diability`, `receipt_no`, `counsellor_id`, `is_paid_sales`, `date_of_payment`, `is_paid_accounts`, `is_receipt_send_emailed`, `is_address_documents_verified`, `is_hall_ticket_generated`, `is_hall_ticket_download`, `is_prospectus_dispatch`, `is_receipt_send_hard_copy`, `dat_roll_no`, `dat_appeared`, `dat_score`, `dat_cleared`, `is_studio_scheduled`, `is_studio_test_cleared`, `is_studio_location`, `is_offer_issued`, `is_confirmed_by_student`, `is_paid_install_1_sales`, `is_paid_install_2_sales`, `is_paid_install_1_accounts`, `is_paid_install_2_accounts`, `is_send_receipt_1`, `is_send_receipt_2`, `approveandactive`, `notes`, `is_pending_doc_email`, `custom_pending_doc_email`, `hsnotes`, `src`, `dataTime`) VALUES (NULL, '".$record['student_id']."', '".$record['photo']."', '', '', '".$record['identity']."', 'Skills', '', '', '', '', '', '".$record['graduationcertificate']."', '', '', '', '', '', '', '', '', '', '".$record['signature']."', '".$record['application_form']."', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '".$record['dataTime']."')";
        if (mysqli_query($conn, $insert)) 
        {
         echo "New record created successfully</br>";
         $membterid=$record['memberID'];
         $status="insert";
         } 
          else 
         {
          echo "Error: " . $insert . "<br>" . mysqli_error($conn);
              
          }
       }
    }
 mysqli_close($conn);


    }
 else {
    echo "Status is not 1. Data may be empty or have an error.";
}
?>