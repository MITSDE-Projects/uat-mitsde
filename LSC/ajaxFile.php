<?php
$DB_Server = "localhost"; // MySQL Server
$DB_Username = "mitsde_studentda"; // MySQL Username
$DB_Password = "Custom@123"; // MySQL Password
$DB_DBName = "mitsde_studentdata"; // MySQL Database Name

$connection = mysqli_connect($DB_Server, $DB_Username, $DB_Password,$DB_DBName);

if(isset($_POST["country_id"]))
{
    //Get all state data
    
	$country_id= $_POST['country_id'];
	
	

	
    $query = "SELECT * FROM state_erp WHERE CountryCode = '$country_id'	ORDER BY StateName ASC";
    $run_query = mysqli_query($connection, $query);
   
    //Count total number of rows
    $count = mysqli_num_rows($run_query);
    
    //Display states list
    if($count > 0)
    {
        echo '<option value="">Select state</option>';
        while($row = mysqli_fetch_array($run_query))
        {
		$state_id=$row['StateCode'];
		
		$state_name=$row['StateName'];
		
        echo "<option value='$state_id'>$state_name</option>";
        }
    }else{
        echo '<option value="">State not available</option>';
    }
}

if(isset($_POST["state_id"]))
{
	$state_id= $_POST['state_id'];
    //Get all city data
    $query = "SELECT * FROM city_erp WHERE S_Code = '$state_id' ORDER BY CityName ASC";
    $run_query = mysqli_query($connection, $query);
    //Count total number of rows
    $count = mysqli_num_rows($run_query);
    
    //Display cities list
    if($count > 0){
        echo '<option value="">Select city</option>';
        while($row = mysqli_fetch_array($run_query)){
		$city_id=$row['CityCode'];
		$city_name=$row['CityName']; 
        echo "<option value='$city_id'>$city_name</option>";
        }
    }else{
        echo '<option value="">City not available</option>';
    }
}
?>