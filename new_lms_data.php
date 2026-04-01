<?php 
$conn=mysql_connect("localhost","mitsde_studentda","Custom@123");
	  	if(!$conn)
		{
		     echo "Mysql Connection Error".die(mysql_error);
		}
		
		$db=mysql_select_db('mitsde_studentdata',$conn);
		if(!$db)
		 {
			  echo "Database Not Selected".die(mysql_error);
		 }
?>
<!DOCTYPE html>
<html>
<head>
    

    
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js"></script>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
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

$(document).ready(function() {
    $('#PGCM').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5'
        ]
    } );
} );

$(document).ready(function() {
    $('#PGDM').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5'
        ]
    } );
} );

$(document).ready(function() {
    $('#PGDMEX').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5'
        ]
    } );
} );
$(document).ready(function() {
    $('#PGDBA').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5'
        ]
    } );
} );

$(document).ready(function() {
    $('#PGCM_BA').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5'
        ]
    } );
} );

$(document).ready(function() {
    $('#PGCM_DM').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5'
        ]
    } );
} );
$(document).ready(function() {
    $('#AIDM').DataTable( {
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
<title>New_LMS_Data_<?php echo date('Y-m-d')?></title>
<body>
    <div align="center"><h1>MITSDE - Today`s Enrolled Student</h1></div>

<div class="container">
  <div class="row">
    <div class="col-12">
      <div class="card mt-3 tab-card">
        <div class="card-header tab-card-header">
          <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link" id="one-tab" data-toggle="tab" href="#one" role="tab" aria-controls="One" aria-selected="true">All</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="two-tab" data-toggle="tab" href="#two" role="tab" aria-controls="Two" aria-selected="false">PGCM</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="three-tab" data-toggle="tab" href="#three" role="tab" aria-controls="Three" aria-selected="false">PGDM</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="four-tab" data-toggle="tab" href="#four" role="tab" aria-controls="Four" aria-selected="false">PGDM Executive</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="five-tab" data-toggle="tab" href="#five" role="tab" aria-controls="Five" aria-selected="false">PGDBA</a>
            </li>
            
             <li class="nav-item">
                <a class="nav-link" id="six-tab" data-toggle="tab" href="#six" role="tab" aria-controls="Six" aria-selected="false">PGCM BA</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="seven-tab" data-toggle="tab" href="#seven" role="tab" aria-controls="Seven" aria-selected="false">PGCM DM</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="eight-tab" data-toggle="tab" href="#eight" role="tab" aria-controls="eight" aria-selected="false">CAP</a>
            </li>
          </ul>
        </div>

        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade show active p-3" id="one" role="tabpanel" aria-labelledby="one-tab">
            <h5 class="card-title">Today`s All</h5>
            <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Sno</th>
                <th>Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>Birthday</th>
                <th>Contact Number Dial Code</th>
                <th>Contact Number</th>
                <th>Address</th>
                <th>City</th>
                <th>State</th>
                <th>Pincode</th>
                <th>School</th>
                <th>Contact Number 2 Dial Code</th>
                <th>Contact Number 2</th>
                <th>Parent Name</th>
                <th>Parent Contact Dial Code</th>
                <th>Parent Contact</th>
                <th>Parent Email</th>
                <th>Gender</th>
                <th>Qualification</th>
                <th>Occupation</th>
                <th>Religion</th>
                <th>Standard</th>
                <th>Landline</th>
                <th>Alternate Email</th>
                <th>Residential Address</th>
                <th>Aadhaar Number</th>
                <th>Registration Number</th>
                
            </tr>
        </thead>
        <tbody>
          <?php 
          $i=1;
          $serch=mysql_query("SELECT * FROM `student` where csv1!=1 AND RegNo<>'' ORDER BY `RegNo`");
          
		  while($row=mysql_fetch_array($serch))
		  {
		  ?>           
		   <tr>
		       <td><?php echo $i;?></td>
		       <td><?php echo $row['name']." ".$row['middlename']." ".$row['lastname'];?></td>
                <td><?php echo $row['email'];?></td>
                <td><?php echo $row['RegNo'];?></td>
                <td><?php echo $row['dateofbirth'];?></td>
                <td>91</td>
                <td><?php echo $row['phonenumber'];?></td>
                <td></td>
                <td><?php echo $row['ccity'];?></td>
                <td><?php echo $row['cstate'];?></td>
                <td><?php echo $row['cpincode'];?></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td><?php echo $row['gender'];?></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td><?php echo $row['alternate_email'];?></td>
                <td></td>
                <td></td>
                <td><?php echo $row['RegNo'];?></td>
                
                
            </tr>
            <?php
             $i++;
		  }
		 
			?>
        </tbody>
        <tfoot>
            <tr>
               <th>Sno</th>
                <th>Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>Birthday</th>
                <th>Contact Number Dial Code</th>
                <th>Contact Number</th>
                <th>Address</th>
                <th>City</th>
                <th>State</th>
                <th>Pincode</th>
                <th>School</th>
                <th>Contact Number 2 Dial Code</th>
                <th>Contact Number 2</th>
                <th>Parent Name</th>
                <th>Parent Contact Dial Code</th>
                <th>Parent Contact</th>
                <th>Parent Email</th>
                <th>Gender</th>
                <th>Qualification</th>
                <th>Occupation</th>
                <th>Religion</th>
                <th>Standard</th>
                <th>Landline</th>
                <th>Alternate Email</th>
                <th>Residential Address</th>
                <th>Aadhaar Number</th>
                <th>Registration Number</th>
            </tr>
        </tfoot>
    </table>
            <a href="#" class="btn btn-primary">Go somewhere</a>              
          </div>
          
          
          
          
          <div class="tab-pane fade p-3" id="two" role="tabpanel" aria-labelledby="two-tab">
            <h5 class="card-title">Today`s PGCM Enrolled Data</h5>
            <table id="PGCM" class="display" style="width:100%">
        <thead>
            <tr>
               
                <th>Email</th>
                
                
            </tr>
        </thead>
        <tbody>
          <?php 
          $i=1;
          $serch=mysql_query("SELECT email FROM `student` where csv1!=1 AND RegNo<>'' AND programmesugpg='Post Graduate Certificate in Management' ORDER BY `RegNo`");
          
		  while($row=mysql_fetch_array($serch))
		  {
		  ?>           
		   <tr>
		       
                <td><?php echo $row['email'];?></td>
                
                
                
            </tr>
            <?php
             $i++;
		  }
		 
			?>
        </tbody>
        <tfoot>
            <tr>
               <th>Email</th>
                
            </tr>
        </tfoot>
    </table>
                        
          </div>
          
          

<div class="tab-pane fade p-3" id="three" role="tabpanel" aria-labelledby="three-tab">
            <h5 class="card-title">PGDM</h5>
            <table id="PGDM" class="display" style="width:100%">
        <thead>
            <tr>
               
                <th>Email</th>
                
                
            </tr>
        </thead>
        <tbody>
          <?php 
          $i=1;
          $serch=mysql_query("SELECT email FROM `student` where csv1!=1 AND RegNo<>'' AND (programmesugpg='Post Graduate Diploma in Management' OR programmesugpg='PGDM EMBA') ORDER BY `RegNo`");
          
		  while($row=mysql_fetch_array($serch))
		  {
		  ?>           
		   <tr>
		       
                <td><?php echo $row['email'];?></td>
                
                
                
            </tr>
            <?php
             $i++;
		  }
		 
			?>
        </tbody>
        <tfoot>
            <tr>
               <th>Email</th>
                
            </tr>
        </tfoot>
    </table>              
          </div>
          <div class="tab-pane fade p-3" id="four" role="tabpanel" aria-labelledby="four-tab">
            <h5 class="card-title">PGDM Executive</h5>
            <table id="PGDMEX" class="display" style="width:100%">
        <thead>
            <tr>
               
                <th>Email</th>
                
                
            </tr>
        </thead>
        <tbody>
          <?php 
          $i=1;
          $serch=mysql_query("SELECT email FROM `student` where csv1!=1 AND RegNo<>'' AND (programmesugpg='Executive Post Graduate Diploma in Management' OR programmesugpg='PGDM (Executive) EMBA') ORDER BY `RegNo`");
          
		  while($row=mysql_fetch_array($serch))
		  {
		  ?>           
		   <tr>
		       
                <td><?php echo $row['email'];?></td>
                
                
                
            </tr>
            <?php
             $i++;
		  }
		 
			?>
        </tbody>
        <tfoot>
            <tr>
               <th>Email</th>
                
            </tr>
        </tfoot>
    </table>              
          </div>
          
          <div class="tab-pane fade p-3" id="five" role="tabpanel" aria-labelledby="five-tab">
            <h5 class="card-title">PGDBA</h5>
            <table id="PGDBA" class="display" style="width:100%">
        <thead>
            <tr>
               
                <th>Email</th>
                
                
            </tr>
        </thead>
        <tbody>
          <?php 
          $i=1;
          $serch=mysql_query("SELECT email FROM `student` where csv1!=1 AND RegNo<>'' AND programmesugpg='Post Graduate Diploma in Business Administration' ORDER BY `RegNo`");
          
		  while($row=mysql_fetch_array($serch))
		  {
		  ?>           
		   <tr>
		       
                <td><?php echo $row['email'];?></td>
                
                
                
            </tr>
            <?php
             $i++;
		  }
		 
			?>
        </tbody>
        <tfoot>
            <tr>
               <th>Email</th>
                
            </tr>
        </tfoot>
    </table>              
          </div>

<div class="tab-pane fade p-3" id="six" role="tabpanel" aria-labelledby="six-tab">
            <h5 class="card-title">PGCM BA</h5>
            <table id="PGCM_BA" class="display" style="width:100%">
        <thead>
            <tr>
               
                <th>Email</th>
                
                
            </tr>
        </thead>
        <tbody>
          <?php 
          $i=1;
          $serch=mysql_query("SELECT email FROM `student` where csv1!=1 AND RegNo<>'' AND desciplines='PGCM Business Analytics' ORDER BY `RegNo`");
          
		  while($row=mysql_fetch_array($serch))
		  {
		  ?>           
		   <tr>
		       
                <td><?php echo $row['email'];?></td>
                
                
                
            </tr>
            <?php
             $i++;
		  }
		 
			?>
        </tbody>
        <tfoot>
            <tr>
               <th>Email</th>
                
            </tr>
        </tfoot>
    </table>              
          </div>
          
          <div class="tab-pane fade p-3" id="seven" role="tabpanel" aria-labelledby="seven-tab">
            <h5 class="card-title">PGCM DM</h5>
            <table id="PGCM_DM" class="display" style="width:100%">
        <thead>
            <tr>
               
                <th>Email</th>
                
                
            </tr>
        </thead>
        <tbody>
          <?php 
          $i=1;
          $serch=mysql_query("SELECT email FROM `student` where csv1!=1 AND RegNo<>'' AND desciplines='PGCM Digital Marketing' ORDER BY `RegNo`");
          
		  while($row=mysql_fetch_array($serch))
		  {
		  ?>           
		   <tr>
		       
                <td><?php echo $row['email'];?></td>
                
                
                
            </tr>
            <?php
             $i++;
		  }
		 
			?>
        </tbody>
        <tfoot>
            <tr>
               <th>Email</th>
                
            </tr>
        </tfoot>
    </table>              
          </div>
          
          
          <div class="tab-pane fade p-3" id="eight" role="tabpanel" aria-labelledby="eight-tab">
            <h5 class="card-title">CAP</h5>
            <table id="AIDM" class="display" style="width:100%">
        <thead>
            <tr>
               
                <th>Email</th>
                
                
            </tr>
        </thead>
        <tbody>
          <?php 
          $i=1;
          $serch=mysql_query("SELECT email,desciplines FROM `student` where csv1!=1 AND RegNo<>'' AND (desciplines='AI In Digital Marketing' || desciplines='Project Management Professional Prep'|| desciplines='certified associate in project management'||  desciplines='Advanced certificate in ui-ux') ORDER BY `RegNo`");
          
		  while($row=mysql_fetch_array($serch))
		  {
		      echo $row['desciplines']; 
		  ?>           
		   <tr>
		       
                <td><?php echo $row['email'];?></td>
                
                
                
            </tr>
            <?php
             $i++;
		  }
		 
			?>
        </tbody>
        <tfoot>
            <tr>
               <th>Email</th>
                
            </tr>
        </tfoot>
    </table>              
          </div>





        </div>
      </div>
    </div>
  </div>
</div>
<body>
</html>