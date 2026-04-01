<?php //include "apply/php/header.php";
include_once "administrator/include/connection.php";
 

   
   
   if(isset($_POST["submit"]))
   {
     echo "</br>name-->". $name=$_POST["username"];
     echo "</br>email-->". $email=$_POST["email"];
     echo "</br>latitude-->". $latitude=$_POST["latitude"];
     echo "</br>longitude-->". $longitude=$_POST["longitude"];
     
    $sql=mysqli_query($conn,"INSERT INTO `get_location` (`id`, `name`, `email`, `latitude`, `longitude`) VALUES (NULL, '$name', '$email', '$latitude', '$longitude')");
    
    echo "<script>
    
    alert('Data stored');
    document.location.href = 'userlocationdata.php';
    </script>";
    
    
     
   }

   
	
 
 ?>   
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get Location</title>
</head>
<body onload="getLocation();">
    <form class="myForm" action="" method="post">
        <label for="username">Name</label>
        <input type="text" name="username" value=""><br>
        
        <label for="email">Email</label>
        <input type="email" name="email" value=""><br>

        <input type="text" name="latitude" value=""><br>
        <input type="text" name="longitude" value=""><br>
       
        <button type="submit" name="submit">Submit</button>
    </form>

    <script type="text/javascript">
        function getLocation() {
            //alert('hi');
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(showPosition,showError);
            }
        }

        function showPosition(Position) {
            document.querySelector('.myForm input[name="latitude"]').value = Position.coords.latitude;
            document.querySelector('.myForm input[name="longitude"]').value = Position.coords.longitude;
        }
        function showError(error){
            switch(error.code){
                case error.PERMISSION_DENIED:
                    alert("ERROR");
                    location.reload();
                    break;
            }
        }
        
    </script>
</body>
</html>

             