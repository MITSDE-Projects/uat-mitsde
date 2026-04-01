<?php include"../php/db.php";
//require('includes/config.php');





$url = "https://erp.mitsde.com/OnlineApplicationAPI/OnlineApplicationAPI.asmx/GetLeadID";




$getprogramdetails=mysqli_query($connection,"SELECT * FROM `student` WHERE (`ERPLeadID` IS NULL OR `ERPLeadID`='') AND `ExtraEdgeID` IS NOT NULL");
              
              echo "</br>count-->".$countrows=mysqli_num_rows($getprogramdetails);
             while($row2=mysqli_fetch_array($getprogramdetails))
             {
                 echo "</br>mobileno-->". $mobile=trim($row2['phonenumber']);
                 echo "</br>member id-->". $memberID=$row2['memberID'];
                 echo "</br>Lead id-->".  $ERPLeadID=$row2['ERPLeadID'];
             


if(isset($mobile))
{


 $mobile3=trim($mobile);
 
 $curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$headers = array(
   "Authorization: MITEsd7CqK6enn8aANDTMlNkBBJhPYN31dAIhHDRT01zK3rteZ9t8ffid6XpCUkjX1S85KkYLIHTRRn0TwLGG4S7SqxwlZ2",
   "Content-Type: application/json",
);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

 $data_array =  <<<DATA
 {"API_Parameters": {"MobileNumber": $mobile3}} 
DATA;
  
  

curl_setopt($curl, CURLOPT_POSTFIELDS, $data_array);

//for debug only!
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

$resp = curl_exec($curl);
curl_close($curl);
//var_dump($resp);
$response = json_decode($resp, true);

$error_code   = $response['ErrorCode'];
$error_mes   = $response['d'];
$leadid     = $response['d']["LeadID"];
//print_r($response);
$error_code;
$error_mes ;
echo "</br>ERP Lead ID-->".$leadid; 

//die;
//----------------------------------------------------API END-----
if(isset($leadid))
{
     echo "</br>UPDATE student SET ERPLeadID='$leadid' WHERE memberID = '$memberID'";
     echo "</br>------------------------------------------------------------";
	 $str="UPDATE student SET ERPLeadID='$leadid', active = 'Yes' WHERE memberID = '$memberID'";
	 
    $query = mysqli_query($connection,$str);
}
else
{
    echo "data not updated";
}

}

  }
?>