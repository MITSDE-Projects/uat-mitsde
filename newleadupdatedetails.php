<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  //CURLOPT_URL => 'https://uat.mitpro.mitsde.com/WebAPI/api/CRM/UpdateLeadDetails',
  CURLOPT_URL => 'https://mitpro.mitsde.com/webapi/api/CRM/UpdateLeadDetails',
  
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS =>'{
    "LeadID":"MIT005",
    "CategoryId":1,
    "SalutaionId":1,
    "InstituteId":1,
    "FirstName":"Pratik",
    "MiddleName":"",
    "LastName":"Kadam",
    "Gender":"M",
    "DateOfBirth":"1996-12-10",
    "MobileNumber":"7553476234",
    "EmailAddress":"pratikkadam853@gmail.com",
    "ProgramId":3,
    "SpecializationID":1,
    "AadhaarNumber":"653498235687",
    "FatherFullName":"Ramesh Kadam",
    "MotherFullName":"Rakhi Kadam",
    "ParentMobile":"9881754756",
    "ParentEmail":"Ramesh@gmail.com",
    "CAddress1":"Lane-6,JK File,MIDC Ratnagiri",
    "CCountryId":1,
    "CStateId":170,
    "CCityId":1523,
    "CPincode":"454545",
    "PAddress1":"Lane-6,JK File,MIDC Ratnagiri",
    "PCountryId":1,
    "PStateId":170,
    "PCityId":1523,
    "PPincode":"454545",
    "ExamName":"HSC",
    "University":"Pune",
    "Marks":"320",
    "PassingYear":2018,
    "className":"SSC",
    "Specialization":"English",
    "CompanyName":"Example Pvt Ltd",
    "Designation":"Service Now developer",
    "CompanyPhone":"9745982355",
    "CallStatusId":"1",
    "IsUndertakingRequired":0,
    "IsDocVerified":0,
    "CourseLastDate":"",
    "DateOfAddmission":""
}',
  CURLOPT_HTTPHEADER => array(
    'Authorization: Bearer uuBjL5CPgi7HqKO6iCM7WF5tOq9dKm3oe9gEpYKo4r1i8LbUjJ_HMfzsGtzVVFKZjxh9atLcDTXCn36fA41gh_z1hlLIK-hgYp_3tHIX7d0C_ZFPzCstu39H4lutjPRcbaK3C_2jJWZOl4bFNPdc7n0-rhDy2HAg3KfHW3PwpMlzrH9MaZaixw5uUcw_VuZfeYQywB482bxYRj7PM6gr_9efEN-PMd47fwYsnjwBoNwGPBSSw8pxu2ObNZUxDaH_ge5OUuGB_RGiqe6CqLaGPHvctdOQpojX63QYAZnc2U180DcAic6XjapIRZOzsfrkqRcRZcQhQEdi-njTTlS6NMHbR4BMfyaEneXLm252KfVyngBE3ZG1K08mkIWDstvJOSLJtSQcCyP5QwlIU1DLXRbys916rs5j06mpS7Bs_vlcT32YARejHELUqbLkuAXDJF7wwv6Gm0wEquG1soRa9W-Cehj9fl3aMl7M1f48G4A',
    'Content-Type: application/json'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;
