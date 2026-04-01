	<form class="uploadform" method="post" enctype="multipart/form-data" action='uploaddocument.php?dir=<?php echo $docsdir;?>&memberID=<?=$_SESSION['memberID'];?>&id=<?php echo $aid;?>&n=<?php echo $name."_".$lastname;?>&ft=transfer'>
		    <div class="custom_file_upload">
 			<div class="file_upload">
 			                <? if(isset($getstudmeatdata['transfer']) && $getstudmeatdata['transfer']!=""){ ?>
                              <span><img src="http://www.mitsde.com/LSC/<?=$getstudmeatdata['transfer']?>" style="height:50px;position:absolute;right:450px;"></span>   
                            <? } ?>  
				<label class="fileuploadlabel">03. Transfer Certificate<span style="font-size:12px;"></span></label>
			    <input type="file" name="docfile" onchange="UploadFile('submitbtn4');">
			</div>
		    </div>
		    <input type="submit" value="Submit" name="submiteventimg" id="submitbtn4" style="display: none;">
	</form>
		
		<form class="uploadform" method="post" enctype="multipart/form-data" action='uploaddocument.php?dir=<?php echo $docsdir;?>&memberID=<?=$_SESSION['memberID'];?>&id=<?php echo $aid;?>&n=<?php echo $name."_".$lastname;?>&ft=nationality'>
		    <div class="custom_file_upload">
			<div class="file_upload">
			            <? if(isset($getstudmeatdata['nationality']) && $getstudmeatdata['nationality']!=""){ ?>
                            <span><img src="http://www.mitsde.com/LSC/<?=$getstudmeatdata['nationality']?>" style="height:50px;position:absolute;right:450px;"></span> 
                        <?} ?>        
                            
				<label class="fileuploadlabel">04. Nationality Certificate<span style="font-size:12px;"></span></label>
			    <input type="file" name="docfile" onchange="UploadFile('submitbtn5');">
			</div>
		    </div>
		    <input type="submit" value="Submit" name="submiteventimg" id="submitbtn5" style="display: none;">
		</form>

                <form class="uploadform" method="post" enctype="multipart/form-data" action='uploaddocument.php?dir=<?php echo $docsdir;?>&memberID=<?=$_SESSION['memberID'];?>&id=<?php echo $aid;?>&n=<?php echo $name."_".$lastname;?>&ft=domicile'>
		    <div class="custom_file_upload">
			<div class="file_upload">
			            <? if(isset($getstudmeatdata['domicile']) && $getstudmeatdata['domicile']!=""){ ?>
                            <span><img src="http://www.mitsde.com/LSC/<?=$getstudmeatdata['domicile']?>" style="height:50px;position:absolute;right:450px;"></span>
                        <? } ?>    
				<label class="fileuploadlabel">05. Domicile Certificate<span style="font-size:12px;"></span></label>
			    <input type="file" name="docfile" onchange="UploadFile('submitbtn121');">
			</div>
		    </div>
		    <input type="submit" value="Submit" name="submiteventimg" id="submitbtn121" style="display: none;">
		</form>


		
	<form class="uploadform" method="post" enctype="multipart/form-data" action='uploaddocument.php?dir=<?php echo $docsdir;?>&memberID=<?=$_SESSION['memberID'];?>&id=<?php echo $aid;?>&n=<?php echo $name."_".$lastname;?>&ft=castecertificate'>
		    <div class="custom_file_upload">
			<div class="file_upload">
			           <? if(isset($getstudmeatdata['castecertificate']) && $getstudmeatdata['castecertificate']!=""){ ?>
                            <span><img src="http://www.mitsde.com/LSC/<?=$getstudmeatdata['castecertificate']?>" style="height:50px;position:absolute;right:450px;"></span>
                       <?} ?>    
				<label class="fileuploadlabel">06. Caste Certificate (If applicable)<span style="font-size:12px;"></span></label>
			    <input type="file" name="docfile" onchange="UploadFile('submitbtn6');">
			</div>
		    </div>
		    <input type="submit" value="Submit" name="submiteventimg" id="submitbtn6" style="display: none;">
		</form>
	         <form class="uploadform" method="post" enctype="multipart/form-data" action='uploaddocument.php?dir=<?php echo $docsdir;?>&memberID=<?=$_SESSION['memberID'];?>&id=<?php echo $aid;?>&n=<?php echo $name."_".$lastname;?>&ft=castevalidity'>
		    <div class="custom_file_upload">
			<div class="file_upload">
			           <? if(isset($getstudmeatdata['castevalidity']) && $getstudmeatdata['castevalidity']!=""){ ?>
                            <span><img src="http://www.mitsde.com/LSC/<?=$getstudmeatdata['castevalidity']?>" style="height:50px;position:absolute;right:450px;"></span>
                       <? } ?>    
				<label class="fileuploadlabel">07. Caste Validity  (If applicable)<span style="font-size:12px;"></span></label>
			    <input type="file" name="docfile" onchange="UploadFile('submitbtn7');">
			</div>
		    </div>
		    <input type="submit" value="Submit" name="submiteventimg" id="submitbtn7" style="display: none;">
		</form>

                <form class="uploadform" method="post" enctype="multipart/form-data" action='uploaddocument.php?dir=<?php echo $docsdir;?>&memberID=<?=$_SESSION['memberID'];?>&id=<?php echo $aid;?>&n=<?php echo $name."_".$lastname;?>&ft=noncreamy'>
		    <div class="custom_file_upload">
			<div class="file_upload">
			           <? if(isset($getstudmeatdata['noncreamy']) && $getstudmeatdata['noncreamy']!=""){ ?>
                            <span><img src="http://www.mitsde.com/LSC/<?=$getstudmeatdata['noncreamy']?>" style="height:50px;position:absolute;right:450px;"></span>
                       <? } ?>    
				<label class="fileuploadlabel">08. Non Creamy Layer  (If applicable)<span style="font-size:12px;"></span></label>
			    <input type="file" name="docfile" onchange="UploadFile('submitbtn122');">
			</div>
		    </div>
		    <input type="submit" value="Submit" name="submiteventimg" id="submitbtn122" style="display: none;">
		</form>
