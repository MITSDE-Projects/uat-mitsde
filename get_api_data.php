<?php
include_once "administrator/include/connection.php";


$url="https://mitskillsindia.edu.in/apply/senddata.php";
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
     
      
      
      
      
      
        
        
        
       // echo "</br>SELECT * FROM `student` WHERE `email` ='".$record['email']."' AND `phonenumber`= '".$record['phonenumber']."' AND `institute`= 'SDE' ";
       
          $search="SELECT * FROM `student` WHERE `email` ='".$record['email']."' AND `phonenumber`= '".$record['phonenumber']."' AND `API_Response_camu`= 'Skills'";
          
          $result = mysqli_query($conn, $search);
          
          if (mysqli_num_rows($result) > 0) 
          {
              
             /* echo "</br>UPDATE student01 SET alternate_email='".$record['alternate_email']."',parentemail='".$record['parentemail']."',
									 companyname='".$companyname."',
									 middlename='".$record['middlename']."',
									 aadhar='".$record['aadhar']."',
									 alternate_no='".$record['alternate_no']."',
									 name='".$record['name']."',
									 mothername='".$record['mothername']."',
									 lastname='".$record['lastname']."',
									 gender='".$record['gender']."',
									 programmesugpg='".$record['programmesugpg']."',
									 CourseID='".$record['CourseID']."',
									 desciplines='".$record['desciplines']."',
									 SpecializationID='".$record['SpecializationID']."',
									 dateofbirth='".$record['dateofbirth']."',
									 institute='Skills',
									 parentfname='".$record['parentfname']."',
									 parentlname='".$record['parentlname']."',
									 parentmobilenumber='".$record['parentmobilenumber']."',
									 parentemail='".$record['parentemail']."',
									 yearofpassing10='".$record['yearofpassing10']."',
									 year12='".$record['year12']."',
									 school10='".$record['school10']."',
									 school12='".$record['school12']."',
									 score10='".$record['score10']."',
									 examboardname10='".$record['examboardname10']."',
									 examboardname12='".$record['examboardname12']."',
									 yearofpassing12='".$record['yearofpassing12']."',
									 score12='".$record['score12']."',
									 stream12='".$record['stream12']."',
									 graduation='".$record['graduation']."',
									 examgraduation='".$record['examgraduation']."',
									 yearofpassinggraduation='".$record['yearofpassinggraduation']."',
									 scoregraduation='".$record['scoregraduation']."',
									 otherqualification='$otherqualification',
									 examotherqualification='$examotherqualification',
									 yearofpassingotherqualification='".$record['yearofpassingotherqualification']."',
									 scoreotherqualification='".$record['scoreotherqualification']."',
									 otherqualificationstatus='".$record['otherqualificationstatus']."',
									 postgraduation='".$record['postgraduation']."',
									 postgraduationstatus='".$record['postgraduationstatus']."',
									 exampostgraduation='".$record['exampostgraduation']."',
									 yearofpassingpostgraduation='".$record['yearofpassingpostgraduation']."',
									 experience='".$record['experience']."',
									 designation='".$record['designation']."',
									 HRContactNo='".$record['HRContactNo']."',
									 Companywebsite='".$record['Companywebsite']."',
									 scorepostgraduation='".$record['scorepostgraduation']."' 
									 WHERE memberID='".$record['memberID']."'";*/
          
          
           $getsucc = "UPDATE student SET alternate_email='".$record['alternate_email']."',parentemail='".$record['parentemail']."',
									 companyname='".$record['companyname']."',
									 middlename='".$record['middlename']."',
									 aadhar='".$record['aadhar']."',
									 alternate_no='".$record['alternate_no']."',
									 name='".$record['name']."',
									 mothername='".$record['mothername']."',
									 lastname='".$record['lastname']."',
									 gender='".$record['gender']."',
									 amount='".$record['amount']."',
									 transactid='".$record['transactid']."',
									 programmesugpg='".$record['programmesugpg']."',
									 CourseID='".$record['CourseID']."',
									 active='".$record['active']."',
									 desciplines='".$record['desciplines']."',
									 SpecializationID='".$record['SpecializationID']."',
									 dateofbirth='".$record['dateofbirth']."',
									 institute='Skills',
									 address='".$record['address']."',
									 CcityID='".$record['CcityID']."',
									 PcityID='".$record['PcityID']."',
									 PstateID='".$record['PstateID']."',
									 CstateID='".$record['CstateID']."',
									 pincode='".$record['pincode']."',
									 caddress='".$record['caddress']."',
									  ccity='".$record['ccity']."',
									   cstate='".$record['cstate']."',
									    cpincode='".$record['cpincode']."',
									     cphonenumber='".$record['cphonenumber']."',
									      cemail='".$record['cemail']."',
									       parentsname='".$record['parentsname']."',
									       graduationstatus='".$record['graduationstatus']."',
									 lastPage='".$record['lastPage']."',
									 formstatus='".$record['formstatus']."',
									 parentfname='".$record['parentfname']."',
									 parentlname='".$record['parentlname']."',
									 parentmobilenumber='".$record['parentmobilenumber']."',
									 parentemail='".$record['parentemail']."',
									 yearofpassing10='".$record['yearofpassing10']."',
									 year12='".$record['year12']."',
									 school10='".$record['school10']."',
									 school12='".$record['school12']."',
									 score10='".$record['score10']."',
									 examboardname10='".$record['examboardname10']."',
									 examboardname12='".$record['examboardname12']."',
									 yearofpassing12='".$record['yearofpassing12']."',
									 score12='".$record['score12']."',
									 stream12='".$record['stream12']."',
									 graduation='".$record['graduation']."',
									 examgraduation='".$record['examgraduation']."',
									 yearofpassinggraduation='".$record['yearofpassinggraduation']."',
									 scoregraduation='".$record['scoregraduation']."',
									 otherqualification='$otherqualification',
									 examotherqualification='$examotherqualification',
									 yearofpassingotherqualification='".$record['yearofpassingotherqualification']."',
									 scoreotherqualification='".$record['scoreotherqualification']."',
									 otherqualificationstatus='".$record['otherqualificationstatus']."',
									 postgraduation='".$record['postgraduation']."',
									 postgraduationstatus='".$record['postgraduationstatus']."',
									 exampostgraduation='".$record['exampostgraduation']."',
									 yearofpassingpostgraduation='".$record['yearofpassingpostgraduation']."',
									 experience='".$record['experience']."',
									 designation='".$record['designation']."',
									 HRContactNo='".$record['HRContactNo']."',
									 Companywebsite='".$record['Companywebsite']."',
									 scorepostgraduation='".$record['scorepostgraduation']."',
									 pcity='".$record['pcity']."',
									 pcountry='".$record['pcountry']."',
									 officenumber='".$record['officenumber']."',
									 officeemail='".$record['officeemail']."',
									 physicsom10='".$record['physicsom10']."',
									 physicsom12='".$record['physicsom12']."',
									 pstate='".$record['pstate']."',
									 pcountry='".$record['pcountry']."',
									 school12status='".$record['school12status']."',
									 score10='".$record['score10']."',
									 score12='".$record['score12']."',
									 source='".$record['source']."',
									 stream12='".$record['stream12']."',
									 year10='".$record['year10']."',
									 year12='".$record['year12']."',
									 totaloutof10='".$record['totaloutof10']."',
									 totaloutof12='".$record['totaloutof12']."',
									 isComplete='".$record['isComplete']."',
									 paydate='".$record['paydate']."',
									 officenumber='".$record['officenumber']."'
									 WHERE memberID='".$record['memberID']."'";
									 
									 if (mysqli_query($conn, $getsucc)) 
                                           {
                                             
                                            echo "</br>updated successfully---->".$record['memberID'];
                                           
                                           
                                           } 
                                         else 
                                          {
                                           echo "Error:  <br>" . mysqli_error($conn);
                                          }
          }
           else 
          {
              $insert="INSERT INTO `student` (`applicationid`, `memberID`, `ERPLeadID`, `ExtraEdgeID`, `RegNo`, `Referral_ID`,
        `ref_flag`, `is_account_verified`, `utr_number`, `accountverified_date`, `amount`, `transactid`, `email`, `alternate_no`, 
        `alternate_email`, `programmesugpg`, `CourseID`, `username`, `password`, `active`, `resetToken`, `resetComplete`, `desciplines`,
        `SpecializationID`, `DualDegreeSp`, `DualDegreeSpID`, `elective_b1`, `elective_b2`, `aadhar`, `gender`, `marital_status`, `name`,
        `middlename`, `lastname`, `dateofbirth`, `age`, `placeofbirth`, `stateofbirth`, `nationality`, `nationalityselect`, `passport_no`,
        `institute`, `CcountryID`, `PcountryID`, `photo_image`, `address`, `CcityID`, `PcityID`, `PstateID`, `CstateID`, `pincode`, `phonenumber`,
        `international_no`, `caddress`, `ccity`, `cstate`, `cpincode`, `cphonenumber`, `cemail`, `parentsname`, `relationshipwithapplicant`,
        `professionoftheparent`, `annualincome`, `parentmobilenumber`, `parentemail`, `bloodgroup`, `physicallychallenged`, `anymajorillness`,
        `specifyillnes`, `school10status`, `examboardname10`, `percentage10`, `yearofpassing10`, `graduationstatus`, `examboardname12`, `percentage12`,
        `yearofpassing12`, `graduation`, `examgraduation`, `yearofpassinggraduation`, `scoregraduation`, `companyname`, `experience`, `designation`,
        `industrysector`, `HRContactNo`, `Companywebsite`, `colorRadio`, `dddate`, `ddnumber`, `bankname`, `PayMode`, `paymenttype`, `isPayment`, `terms`,
        `Is_Active`, `postgraduationstatus`, `postgraduation`, `ccountry`, `exampostgraduation`, `yearofpassingpostgraduation`, `scorepostgraduation`,
        `otherqualificationstatus`, `otherqualification`, `examotherqualification`, `yearofpassingotherqualification`, `scoreotherqualification`, `examscore`,
        `examyear`, `examname2`, `examnumber2`, `examrank2`, `examscore2`, `examyear2`, `fields`, `mathsam10`, `mathsam12`, `mathsom10`, `mathsom12`,
        `mpdomicile`, `organizationdetails`, `parentfname`, `parentlname`, `mothername`, `pcity`, `pcountry`, `officenumber`, `officeemail`, `physicsom10`,
        `physicsom12`, `ppincode`, `pstate`, `school10`, `school12`, `school12status`, `score10`, `score12`, `source`, `stream12`, `year10`, `year12`,
        `totaloutof10`, `totaloutof12`, `isComplete`, `lastPage`, `formstatus`, `sop`, `degree1`, `degree_status1`, `degree2`, `inst1`, `inst2`,
        `university1`, `university2`, `yearofpassingd1`, `yearofpassingd2`, `scoredegree1`, `scoredegree2`, `branchname`, `examapplicationnumber`,
        `examapplicationnumber2`, `studentisdcode`, `parentisdcode`, `created`, `paydate`, `ow`, `eligible`, `mailed`, `admission_confirm`,
        `offline_paid`, `src`, `counsellor_name`, `enroll_bucket`, `enroll_bucket_by`, `is_reject`, `is_reject_comment`, `Cancellation`,
        `Cancellation_comment`, `enrollment_verified`, `all_verified`, `is_doc_verified`, `pri_enrolled`, `admission_status`, `pri_enrolled_dt`,
        `is_enrolled`, `is_enroll_date`, `enroll_bucket_date`, `is_online`, `S_Flag`, `API_Response`, `F_Flag`, `API_DT`, `S_Flag_camu`,
        `API_Response_camu`, `F_Flag_cam`, `API_DT_cam`, `csv1`, `csv2`, `book_status`, `csv3`, `reg_flag`) 
        VALUES ('".$record['applicationid']."', '".$record['memberID']."', '".$record['ERPLeadID']."', '".$record['ExtraEdgeID']."', '', '', '0', '', '', '0000-00-00', '".$record['amount']."', '".$record['transactid']."', '".$record['email']."', '".$record['alternate_no']."', '".$record['alternate_no']."',
        'MITSKILL', '1', '".$record['username']."', 'skills', '".$record['active']."','".$record['resetToken']."', '', '".$record['desciplines']."', '".$record['SpecializationID']."', '', '', '', '', '".$record['aadhar']."', '".$record['gender']."', '".$record['marital_status']."', '".$record['name']."', '".$record['middlename']."',
        '".$record['lastname']."', '".$record['dateofbirth']."', NULL, NULL, NULL, NULL, '".$record['nationalityselect']."', '', 'Skills', '".$record['CcountryID']."', '".$record['PcountryID']."', '".$record['photo_image']."', '".$record['address']."', '".$record['CcityID']."',
        '".$record['PcityID']."', '".$record['PstateID']."', '".$record['CstateID']."', '".$record['pincode']."', '".$record['phonenumber']."', '".$record['international_no']."', '".$record['caddress']."', '".$record['ccity']."', '".$record['cstate']."', '".$record['cpincode']."', '', '', '".$record['parentsname']."',
        '', '', '0', '".$record['parentmobilenumber']."', '".$record['parentemail']."', '".$record['bloodgroup']."', '', '', '', '".$record['school10status']."', '".$record['examboardname10']."', '', '".$record['yearofpassing10']."', '".$record['graduationstatus']."', 
        '".$record['examboardname12']."', '".$record['percentage12']."', '".$record['yearofpassing12']."', '".$record['graduation']."', '".$record['examgraduation']."', '".$record['yearofpassinggraduation']."', '".$record['scoregraduation']."', '".$record['companyname']."', 
        '".$record['experience']."', '".$record['designation']."', '".$record['industrysector']."', '".$record['HRContactNo']."', '".$record['Companywebsite']."', '".$record['colorRadio']."', '', '', '', '".$record['PayMode']."', '".$record['paymenttype']."', '".$record['isPayment']."', '".$record['terms']."', '".$record['Is_Active']."',
        '".$record['postgraduationstatus']."', '".$record['postgraduation']."', '".$record['ccountry']."', '".$record['exampostgraduation']."', '".$record['yearofpassingpostgraduation']."', '".$record['scorepostgraduation']."', '".$record['otherqualificationstatus']."',
        '".$record['otherqualification']."', '".$record['examotherqualification']."', '".$record['yearofpassingotherqualification']."', '".$record['scoreotherqualification']."', '".$record['examscore']."', '0', '', '', '', '',
        '0', '', '', '', '', '', '', '".$record['organizationdetails']."', '".$record['parentfname']."', '".$record['parentlname']."', '".$record['mothername']."', '".$record['pcity']."', '".$record['pcountry']."', '', '', '', '', '".$record['ppincode']."',
        '".$record['pstate']."', '".$record['school10']."', '".$record['school12']."', '".$record['school12status']."', '".$record['score10']."', '".$record['score12']."', '".$record['source']."', '".$record['stream12']."', '".$record['year10']."', '".$record['year12']."', '0', '0', '0', '".$record['lastPage']."',
        '".$record['formstatus']."', '', '', '', '', '', '', '', '', '0', '0', '0.00', '0.00', '', '', '', '', '', '".$record['created']."', '".$record['paydate']."', '0', 'yes', 'no',
        '', '', '', '".$record['counsellor_name']."', '', '', '', '', '0', '', '', '', '', '0', '', '', '', '', '0000-00-00', '0', '0', '', '1', '', '0', 'Skills', '1', '', '0', '0', '0',
        '0', '0')";
        if (mysqli_query($conn, $insert)) 
        {
         echo "</br>New record created successfully---->".$record['memberID'];
        
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