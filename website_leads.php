<?php 
$conn=mysql_connect("localhost","mitsde_onlinepay","jNq%,6!)0RmK");
		if(!$conn)
		{
		     echo "Mysql Connection Error".die(mysql_error);
		}
		else
		{
		   // echo "connected";
		}
		
		$db=mysql_select_db('mitsde_onlinepayment',$conn);
		if(!$db)
		 {
			  echo "Database Not Selected".die(mysql_error);
		 }
		 {
		   // echo "connected";
		}
?>
<!DOCTYPE html>
<html>
<head>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js"></script>

<script>
$(document).ready(function() {
    $('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5'
        ]
    } );
} );
</script>
<link  rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
<link  rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css">
<link type="text/css" rel="shortcut icon" href="media/favicon.ico" type="image/x-icon">
<link type="text/css" rel="icon" href="media/favicon.ico" type="image/x-icon">
</head>
<title>Quick Contact Form Leads</title>
<body>
    <div align="center"><h1>MITSDE - Quick Contact Form Leads</h1></div>
<table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Sr No</th>
                <th>Name</th>
                <th>Email ID</th>
                <th>Phone</th>
                
                <th>State</th>
                <th>High Qualification</th>
                <th>Date & Time</th>
                <th>Device</th>
                <th>page Name</th>
                <th>Address</th>
                 <th>District</th>
                <th>City</th>
                <th>State</th>
                <th>Country</th>
                <th>Longitude</th>
                <th>Latitude</th>
                
                
            </tr>
        </thead>
        <tbody>
          <?php 
          $i=1;
          $serch=mysql_query("SELECT * FROM `quickcontact`  ORDER BY `quickcontact`.`QC_ID` DESC");
          
		  while($row=mysql_fetch_array($serch))
		  {
		  ?>           
		   <tr>
		       <td><?php echo $i;?></td>
		       <td><?php echo $row['FirstName'];?></td>
                <td><?php echo $row['EmailID'];?></td>
                <td><?php echo $row['MobileNo'];?></td>
                <td><?php echo $row['SourcePath'];?></td>
                <td><?php echo $row['PageName'];?></td>
                <td><?php echo $row['DateTime'];?></td>
                <td><?php echo $row['device'];?></td>
                <td><?php echo $row['page_name'];?></td>
                <td><?php echo $row['address'];?></td>
                <td><?php echo $row['district'];?></td>
                <td><?php echo $row['city'];?></td>
                <td><?php echo $row['state'];?></td>
                <td><?php echo $row['country'];?></td>
                <td><?php echo $row['longitude'];?></td>
                <td><?php echo $row['latitude'];?></td>
                
                
            </tr>
            <?php
             $i++;
		  }
		 
			?>
        </tbody>
        <tfoot>
            <tr>
                <th>Sr No</th>
                <th>Name</th>
                <th>Email ID</th>
                <th>Phone</th>
               
                <th>State</th>
                <th>High Qualification</th>
                <th>Data & Time</th>
                
            </tr>
        </tfoot>
    </table>

<body>
</html>