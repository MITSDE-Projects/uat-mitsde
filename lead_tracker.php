<?php
include("admin/include/configpdo.php");
?>

<!DOCTYPE html>
<html>
<head>

<title>MITSDE Quick Contact Leads</title>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">

<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">

<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.1/css/buttons.dataTables.min.css">

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

<script src="https://cdn.datatables.net/buttons/2.4.1/js/dataTables.buttons.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>

<script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.html5.min.js"></script>

<script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.print.min.js"></script>

<style>

body{
background:#f4f6f9;
}

.card{
border-radius:12px;
box-shadow:0 4px 15px rgba(0,0,0,0.08);
}

.dataTables_wrapper .dt-buttons{
margin-bottom:10px;
}

</style>

</head>

<body>

<div class="container-fluid mt-4">

<div class="card">

<div class="card-header bg-primary text-white">

<h4 class="mb-0">MITSDE - Quick Contact Leads</h4>

</div>

<div class="card-body">

<table id="example" class="table table-bordered table-striped" style="width:100%">

<thead>

<tr>

<th>Sr No</th>
<th>Name</th>
<th>Email</th>
<th>Phone</th>
<th>Source Path</th>
<th>Page Name</th>
<th>Date & Time</th>
<th>Device</th>
<th>Address</th>
<th>District</th>
<th>City</th>
<th>State</th>
<th>Country</th>
<th>Longitude</th>
<th>Latitude</th>

</tr>

</thead>

</table>

</div>

</div>

</div>

<script>

$(document).ready(function(){

$('#example').DataTable({

processing:true,

serverSide:true,

ajax:{
    url:"quickcontact_server.php",
    type:"POST"
},

order:[[6,"desc"]],

pageLength:25,

scrollX:true,

dom:'Bfrtip',

buttons:[

'copy',

'excel',

'csv',

'pdf',

'print'

],

columns:[

{data:"srno"},
{data:"FirstName"},
{data:"EmailID"},
{data:"MobileNo"},
{data:"SourcePath"},
{data:"PageName"},
{data:"DateTime"},
{data:"device"},
{data:"address"},
{data:"district"},
{data:"city"},
{data:"state"},
{data:"country"},
{data:"longitude"},
{data:"latitude"}

]

});

});

</script>

</body>
</html>