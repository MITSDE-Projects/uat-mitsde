<?php
$DB_Server = "localhost"; // MySQL Server
$DB_Username = "mitsde_studentda"; // MySQL Username
$DB_Password = "Custom@123"; // MySQL Password
$DB_DBName = "mitsde_studentdata"; // MySQL Database Name

$connection = mysqli_connect($DB_Server, $DB_Username, $DB_Password,$DB_DBName);




if(isset($_POST['process']) && $_POST['process']=='getstateid')
{
echo "</br>process-->".$process=$_POST['process'];
echo "</br>Value-->".$value=$_POST['value'];
echo "</br>ID-->".$id=$_POST['id'];
echo "SELECT * FROM tbl_countries ORDER BY country_name ASC"; 
exit;


$getcountry = mysqli_query($conn,"SELECT * FROM tbl_countries ORDER BY country_name ASC");

 echo '<select class="form-control" name="pcountry" id="pcountry" style="width: 100%;position:relative;top:20px" >'; 
 
 while($setcountry = mysqli_fetch_array($getcountry))
  
{
  $country_name =  $setcountry['country_name'];

  echo '<option>'.$country_name.'</option>'; 
 }
 echo '<select>';



}










?>