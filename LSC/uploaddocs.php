<html>
<head>
    <style>
		
    </style>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/bootstrapValidator.min.js"></script> 
	<script src="js/jquery.min.js"></script>
	<script src="js/jquery-ui.js"></script>
	<link href="css/style.css" rel="stylesheet" />
	<link href="css/bootstrap.min.css" rel="stylesheet" />
	<script type="text/javascript" src="js/jquery.form.js"></script>
	
</head>

<body>
	</br></br></br></br>
	<div class="errmsg"></div>
	<form class="uploadform" method="post" enctype="multipart/form-data" action='uploadphoto.php?id=2&ft=photo'>
		    <div class="custom_file_upload">
			<div class="file_upload">
				Passport Size Photo:
			    <input type="file" name="imagefile" onchange="UploadFile('submitgallarybtn');">
			</div>
		    </div>
		    <input type="submit" value="Submit" name="submiteventimg" id="submitgallarybtn" style="display: none;">
		</form>
	<form class="uploadform" method="post" enctype="multipart/form-data" action='uploadphoto.php?id=2&ft=transfer'>
		    <div class="custom_file_upload">
			<div class="file_upload">
				Transfer Certificate
			    <input type="file" name="imagefile" onchange="UploadFile('submitbtn2');">
			</div>
		    </div>
		    <input type="submit" value="Submit" name="submiteventimg" id="submitbtn2" style="display: none;">
		</form>
	<form class="uploadform" method="post" enctype="multipart/form-data" action='uploadphoto.php?id=2&ft=castecertificate'>
		    <div class="custom_file_upload">
			<div class="file_upload">
				Caste Certificate
			    <input type="file" name="imagefile" onchange="UploadFile('submitbtn3');">
			</div>
		    </div>
		    <input type="submit" value="Submit" name="submiteventimg" id="submitbtn3" style="display: none;">
		</form>
	<form class="uploadform" method="post" enctype="multipart/form-data" action='uploadphoto.php?id=2&ft=castevalidity'>
		    <div class="custom_file_upload">
			<div class="file_upload">
				Caste Validity
			    <input type="file" name="imagefile" onchange="UploadFile('submitbtn4');">
			</div>
		    </div>
		    <input type="submit" value="Submit" name="submiteventimg" id="submitbtn4" style="display: none;">
		</form>
	<form class="uploadform" method="post" enctype="multipart/form-data" action='uploadphoto.php?id=2&ft=domicile'>
		    <div class="custom_file_upload">
			<div class="file_upload">
				Domicile Certificate
			    <input type="file" name="imagefile" onchange="UploadFile('submitbtn5');">
			</div>
		    </div>
		    <input type="submit" value="Submit" name="submiteventimg" id="submitbtn5" style="display: none;">
		</form>
	<form class="uploadform" method="post" enctype="multipart/form-data" action='uploadphoto.php?id=2&ft=ssc'>
		    <div class="custom_file_upload">
			<div class="file_upload">
				SSC Certificate
			    <input type="file" name="imagefile" onchange="UploadFile('submitbtn6');">
			</div>
		    </div>
		    <input type="submit" value="Submit" name="submiteventimg" id="submitbtn6" style="display: none;">
		</form>
	<form class="uploadform" method="post" enctype="multipart/form-data" action='uploadphoto.php?id=2&ft=hsc'>
		    <div class="custom_file_upload">
			<div class="file_upload">
				HSC Certificate
			    <input type="file" name="imagefile" onchange="UploadFile('submitbtn7');">
			</div>
		    </div>
		    <input type="submit" value="Submit" name="submiteventimg" id="submitbtn7" style="display: none;">
		</form>
	<form class="uploadform" method="post" enctype="multipart/form-data" action='uploadphoto.php?id=2&ft=entrance'>
		    <div class="custom_file_upload">
			<div class="file_upload">
				Entrance Exam Score Card
			    <input type="file" name="imagefile" onchange="UploadFile('submitbtn8');">
			</div>
		    </div>
		    <input type="submit" value="Submit" name="submiteventimg" id="submitbtn8" style="display: none;">
		</form>
</body>
<!---->
<script>
	
	$('#submitgallarybtn,#submitbtn').click(function ()
     {
         $(".errmsg").html('');
         $(".uploadform").ajaxForm({
             target: '.errmsg'
         }).submit();
     });
	
	function UploadFile(id)
 {
     $("#" + id).trigger("click");
     $("#idAdminGallaryImage").html("Add Image:");
 }
</script>