<?php include"../php/db.php";
//require('includes/config.php');

function callAPI($method, $url, $data)
 {
   $curl = curl_init();
  
         switch ($method){
      case "POST":
         curl_setopt($curl, CURLOPT_POST, 1);
         if ($data)
            curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
         break;
      case "PUT":
         curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PUT");
         if ($data)
            curl_setopt($curl, CURLOPT_POSTFIELDS, $data);			 					
         break;
      default:
         if ($data)
            $url = sprintf("%s?%s", $url, http_build_query($data));
   }

   
curl_setopt($curl, CURLOPT_URL, $url);
   curl_setopt($curl, CURLOPT_HTTPHEADER, array(
      'Authorization: MITEsd7CqK6enn8aANDTMlNkBBJhPYN31dAIhHDRT01zK3rteZ9t8ffid6XpCUkjX1S85KkYLIHTRRn0TwLGG4S7SqxwlZ2',
      'Content-Type: application/json',
   ));
   curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
   curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);


   // EXECUTE:
   $result = curl_exec($curl);
   if(!$result){die("Connection Failure");}
   curl_close($curl);
     //echo "endfunc";
   return $result;
 
}

//echo "IN FILES"; exit;

//collect values from the url

if(isset($_GET['x']) && isset($_GET['y']) && $_GET['x']!='' && $_GET['y']!='')
{

 $mobile3=trim($_GET['xz']);

 $data_array =  array("API_Parameters" => array(
           "MobileNumber" => $mobile3

      ),
    
           
);
  
  

$data1 =  $data_array;
//print_r($data1);
$make_call = callAPI('POST', 'https://erp.mitsde.com/OnlineApplicationAPI/OnlineApplicationAPI.asmx/GetLeadID', json_encode($data1));
$response = json_decode($make_call, true);
$error_code   = $response['ErrorCode'];
$error_mes   = $response['d'];
$leadid     = $response['d']["LeadID"];
//print_r($response);
$error_code;
$error_mes ;
echo "</br>leadid-->".$leadid; 

//----------------------------------------------------API END-----
$memberID = trim($_GET['x']);
$active = trim($_GET['y']);
//if id is number and the active token is not empty carry on

if(is_numeric($memberID) && !empty($active))
{
    
    $ld = trim($leadid);
    $membID = trim($memberID);

  

    if($ld!="T")
    {
       
	 echo "</br>UPDATE student SET memberID='$ld', active = 'Yes' WHERE memberID = '$membID'";
	 //die;
	 //$str="UPDATE student SET memberID='$ld', active = 'Yes' WHERE memberID = '$membID'";
     //$query = mysqli_query($connection,$str);
     //echo("Error description: " . mysqli_error($str));
     
     if (!mysqli_query($connection,"UPDATE student SET memberID='$ld', active = 'Yes' WHERE memberID = '$membID'"))
  {
  echo("Errorcode: " . mysqli_errno($connection));
  }
	}
    else
    {
     
     //echo "</br>UPDATE student SET active = 'Yes' WHERE memberID = '$membID'";
	 $str="UPDATE student SET active = 'Yes' WHERE memberID = '$membID'";
     $query = mysqli_query($connection,$str);
     echo("Error description: " . mysqli_error($str));
     //die;
     
    }
   

	if(mysqli_query($connection, $query))
	{

		//redirect to login page
		header('Location: http://mitsde.com/apply/register/index.php?action=active&src='.$_GET['src']);
		exit;

	} 
	else
	{
		echo "</br>Your account is active."; 
		?>
		<br>
		<a href="http://mitsde.com/apply/register/index.php">Go To login page</a>
		<?php
	}
	
}

}
?>