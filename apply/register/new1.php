<?php include"../php/db.php";
//require('includes/config.php');

$url1 = "https://erp.mitsde.com/OnlineApplicationAPI/OnlineApplicationAPI.asmx/GetLeadID";

$curl = curl_init($url1);
curl_setopt($curl, CURLOPT_URL, $url1);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$headers = array(
   "Authorization: MITEsd7CqK6enn8aANDTMlNkBBJhPYN31dAIhHDRT01zK3rteZ9t8ffid6XpCUkjX1S85KkYLIHTRRn0TwLGG4S7SqxwlZ2",
   "Content-Type: application/json",
);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

//echo "IN FILES"; exit;

//collect values from the url

if(isset($_GET['x']) && isset($_GET['y']) && $_GET['x']!='' && $_GET['y']!='')
{

 $mobile3=trim($_GET['xz']);

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
$leadid; 
//die;
//----------------------------------------------------API END-----
$memberID = trim($_GET['x']);
$active = trim($_GET['y']);
//if id is number and the active token is not empty carry on

if(is_numeric($memberID) && !empty($active))
{
    
    $ld = trim($leadid);
    $membID = trim($memberID);
    $ReferralCode="R".$ld;
       //echo "</br>2UPDATE student SET memberID='$ld', active = 'Yes' WHERE memberID = '$membID'";
	 //$str="UPDATE student SET memberID='$ld', active = 'Yes' WHERE memberID = '$membID'";
     //$query = mysqli_query($connection,$str);

    if($ld!="T")
    {
       
	 //echo "</br>2UPDATE student SET memberID='$ld', active = 'Yes' WHERE memberID = '$membID'";
	 $str="UPDATE student SET ERPLeadID='$ld', active = 'Yes' WHERE memberID = '$membID'";
	 //$str="UPDATE student SET active = 'Yes' WHERE memberID = '$membID'";
     $query = mysqli_query($connection,$str);
	}
    else
    {
     
     //echo "</br>1UPDATE student SET active = 'Yes' WHERE memberID = '$membID'";
	 $str="UPDATE student SET active = 'Yes' WHERE memberID = '$membID'";
     $query = mysqli_query($connection,$str);
     //die;
     
    }
    $str="UPDATE student SET active = 'Yes' WHERE memberID = '$membID'";
     $query = mysqli_query($connection,$str);

	if(mysqli_query($connection, $query))
	{

		//redirect to login page
		header('Location: http://mitsde.com/apply/register/index.php?action=active&src='.$_GET['src']);
		exit;

	} 
	else
	{
		echo "Your account is active."; 
		?>
		<br>
		<a href="http://mitsde.com/apply/register/index.php">Go To login page</a>
		<?php
	}
	
}

}
?>