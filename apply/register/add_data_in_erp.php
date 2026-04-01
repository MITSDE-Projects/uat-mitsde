<?php include"../php/db.php";

$url = "https://vendorwebservice.mitsde.com/restapi/api/lead";



$getprogramdetails=mysqli_query($connection,"SELECT * FROM `student` WHERE (`ERPLeadID` IS NULL OR `ERPLeadID`='') AND `ExtraEdgeID` IS NOT NULL");
              
              echo "</br>count-->".$countrows=mysqli_num_rows($getprogramdetails);
              //die;
             while($row2=mysqli_fetch_array($getprogramdetails))
             {
                 echo "</br>membID-->". $membID=$row2['memberID'];
                 echo "</br>name-->". $name=$row2['name'];
                 echo "</br>lastname-->". $lastname=$row2['lastname'];
                 echo "</br>mobile-->". $mobile=trim($row2['phonenumber']);
                 echo "</br>email-->". $email=$row2['email'];
                 
           
             


//if(isset($mobile))
//{
$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$headers = array(
   "Content-Type: application/json",
);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

$data = <<<DATA
{
"FirstName":"$name",
"LastName":"$lastname",
"Mobile":"$mobile",
"Email":"$email",
"VendorToken":"2$45$209",
"CityName":"pune",
"StateName":"Maharashtra",
"CountryName":"India",
"Custom2":"PHD",
"SourcePath":"Direct",
"Address":"Quick Contact Form",
"Custom1":"on"
}
DATA;

curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
echo "</pri>";
print($data);
//for debug only!
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

$resp = curl_exec($curl);
curl_close($curl);
var_dump($resp);

print_r($resp);

$response = json_decode($resp, true);

echo "</br>error_code-->".$error_code   = $response['ErrorCode'];
echo "</br>error_msg-->".$error_mes   = $response['ErrorDescription'];
echo "</br>lead_id-->".$leadid     = $response['LeadID'];
echo "</br>----------------------------------------------------------------";

if(isset($leadid))
{
     echo "</br>UPDATE student SET ERPLeadID='$leadid' WHERE memberID = '$membID'";
	 //$str="UPDATE student SET ERPLeadID='$leadid', active = 'Yes' WHERE memberID = '$membID'";
	 
     //$query = mysqli_query($connection,$str);
}
else
{
    echo "data not updated";
}
//}
}
?>