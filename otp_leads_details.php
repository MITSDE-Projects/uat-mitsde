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
<title>OTP Lead Details</title>
<body>
    <div align="center"><h1>OTP Lead Details</h1></div>
<table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Sr No</th>
                <th>studentName</th>
                <th>mobNo</th>
                <th>mobNo</th>
                <th>mailSend</th>
                <th>e_verification</th>
                <th>m_verfication</th>
                <th>e_verificationDT</th>
                <th>m_verficationDT</th>
                 <th>sendEE</th>
                  <th>token</th>
                   <th>state</th>
                    <th>qualification</th>
                     <th>courses</th>
                      <th>specialization</th>
                
                
                
            </tr>
        </thead>
        <tbody>
          <?php 
          $i=1;
          $serch=mysql_query("SELECT * FROM `opt_verification` ORDER BY `opt_verification`.`id` DESC");
          
		  while($row=mysql_fetch_array($serch))
		  {
		  ?>           
		   <tr>
		       <td><?php echo $i;?></td>
		       <td><?php echo $row['studentName'];?></td>
                <td><?php echo $row['emailID'];?></td>
                <td><?php echo $row['mobNo'];?></td>
                <td><?php echo $row['mailSend'];?></td>
                <td><?php echo $row['e_verification'];?></td>
                <td><?php echo $row['m_verfication'];?></td>
                <td><?php echo $row['e_verificationDT'];?></td>
                <td><?php echo $row['m_verficationDT'];?></td>
                <td><?php echo $row['sendEE'];?></td>
                <td><?php echo $row['token'];?></td>
                <td><?php echo $row['state'];?></td>
                <td><?php echo $row['qualification'];?></td>
                <td><?php echo $row['courses'];?></td>
                <td><?php echo $row['specialization'];?></td>
                
            </tr>
            <?php
             $i++;
		  }
		 
			?>
        </tbody>
        <tfoot>
            <tr>
                <th>Sr No</th>
                <th>studentName</th>
                <th>mobNo</th>
                <th>mobNo</th>
                <th>mailSend</th>
                <th>e_verification</th>
                <th>m_verfication</th>
                <th>e_verificationDT</th>
                <th>m_verficationDT</th>
                 <th>sendEE</th>
                  <th>token</th>
                   <th>state</th>
                    <th>qualification</th>
                     <th>courses</th>
                      <th>specialization</th>
                
                
                
            </tr>
        </tfoot>
    </table>

<body>
</html>