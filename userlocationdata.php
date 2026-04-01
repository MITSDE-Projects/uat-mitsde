<?php 
//include "apply/php/header.php";
include_once "administrator/include/connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Location Data</title>
    
</head>
<body>
    <h1>Location Data</h1>
    <table cellspacing=0 cellpadding=10 border=1>
        
   
 
        <tr>
            <td>#</td>
            <td>Name</td>
            <td>Email iD</td>
            <td>Map</td>
        </tr>
        <?php
                    
    $sql=mysqli_query($conn,"SELECT * FROM `get_location`");
    echo "</br>count-->".$count= mysqli_num_rows($sql);
    
    $i=0;
    
    while($row=mysqli_fetch_array($sql))
    {
    ?>
    <tr>
        <td><?php echo $i++; ?></td>
    <td><?php echo $row['name'];?></td>
    <td><?php echo $row['email'];?></td>
    <td style="width:450px; height:450px;"><iframe src="https://www.google.com/maps?q=<?php echo $row['latitude']; ?>,<?php echo $row['longitude']; ?>&hl=en;z=14&amp;output=embed" frameborder="0"></iframe></td>
    </tr>
    <?php 
    }
    
   ?>
    </table>
</body>
</html>