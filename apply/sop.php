<?php include "php/header.php";
if (isset($_POST)){
    if (empty($_POST)){
		
		//setting error message
        //$_SESSION['error_page3'] = "Mandatory field(s) are missing, Please fill it again";
        //header("location: page3_form.php");//redirecting to second page
    
	} else {
		//fetching all values posted from second page and storing it in variable
        foreach ($_POST as $key => $value) {
            $_SESSION['post'][$key] = $value;
        }
		 extract($_SESSION['post']);  
							
								//Storing values in database
								$locationurl="page3_form.php";
								include "php/db.php";
								

								
								
								if(!isset($examyear))
								{
									$examyear=0;
								}
								if(!isset($examyear2))
								{
									$examyear2=0;
								}
								if(!isset($yearofpassingd1))
								{
									$yearofpassingd1=0;
								}
								if(!isset($yearofpassingd2))
								{
									$yearofpassingd2=0;
								}
								if(!isset($yearofpassing12))
								{
									$yearofpassing12=0;
								}
								if(!isset($yearofpassing10))
								{
									$yearofpassing10=0;
								}
								if(!isset($scoredegree2))
								{
									$scoredegree2=0;
								}
								if(!isset($scoredegree1))
								{
									$scoredegree1=0;
								}
								
							$str="UPDATE student SET `examname`='$examname',`examnumber`='$examnumber',`examscore`='$examscore',`examrank`='$examrank',`examyear`='$examyear',`examname2`='$examname2',`examnumber2`='$examnumber2',`examscore2`='$examscore2',`examrank2`='$examrank2',`examyear2`='$examyear2',`englishread`='$englishread',`englishspeak`='$englishspeak',`englishwrite`='$englishwrite',`degree1`='$degree1',`inst1`='$inst1',`university1`='$university1',`yearofpassingd1`='$yearofpassingd1',`scoredegree1`='$scoredegree1',`degree2`='$degree2',`inst2`='$inst2',`university2`='$university2',`yearofpassingd2`='$yearofpassingd2',`scoredegree2`='$scoredegree2', `school10`='$school10',`examboardname10`='$examboardname10',`yearofpassing10`='$yearofpassing10',`score10`='$score10',`school12`='$school12',`examboardname12`='$examboardname12',`yearofpassing12`='$yearofpassing12',`score12`='$score12',`stream12`='$stream12',`isComplete`=0,`lastPage`='$locationurl',formstatus='incomplete form',testcenter='$testcenter',companyname='".$companyname."',experience='".$experience."'  WHERE `memberID`='$memberid'";
							
						$query = mysqli_query($connection,$str);
			                        if($query){
                                                   header('location:page4_form.php');
		                                }

						AddSubjects($subjectname101,$subjectscore101,$subjecttotal101,$connection,"X",$memberid,$subject10[0]["subjectname"],$subject10[0]["subjectmarksobtained"],$subject10[0]["subjectmarkstotal"]);
						AddSubjects($subjectname102,$subjectscore102,$subjecttotal102,$connection,"X",$memberid,$subject10[1]["subjectname"],$subject10[1]["subjectmarksobtained"],$subject10[1]["subjectmarkstotal"]);
						AddSubjects($subjectname103,$subjectscore103,$subjecttotal103,$connection,"X",$memberid,$subject10[2]["subjectname"],$subject10[2]["subjectmarksobtained"],$subject10[2]["subjectmarkstotal"]);
						AddSubjects($subjectname104,$subjectscore104,$subjecttotal104,$connection,"X",$memberid,$subject10[3]["subjectname"],$subject10[3]["subjectmarksobtained"],$subject10[3]["subjectmarkstotal"]);
						AddSubjects($subjectname105,$subjectscore105,$subjecttotal105,$connection,"X",$memberid,$subject10[4]["subjectname"],$subject10[4]["subjectmarksobtained"],$subject10[4]["subjectmarkstotal"]);
						AddSubjects($subjectname106,$subjectscore106,$subjecttotal106,$connection,"X",$memberid,$subject10[5]["subjectname"],$subject10[5]["subjectmarksobtained"],$subject10[5]["subjectmarkstotal"]);
						AddSubjects($subjectname107,$subjectscore107,$subjecttotal107,$connection,"X",$memberid,$subject10[6]["subjectname"],$subject10[6]["subjectmarksobtained"],$subject10[6]["subjectmarkstotal"]);
					
					    AddSubjects($subjectname121,$subjectscore121,$subjecttotal121,$connection,"XII",$memberid,$subject12[0]["subjectname"],$subject12[0]["subjectmarksobtained"],$subject12[0]["subjectmarkstotal"]);
						AddSubjects($subjectname122,$subjectscore122,$subjecttotal122,$connection,"XII",$memberid,$subject12[1]["subjectname"],$subject12[1]["subjectmarksobtained"],$subject12[1]["subjectmarkstotal"]);
						AddSubjects($subjectname123,$subjectscore123,$subjecttotal123,$connection,"XII",$memberid,$subject12[2]["subjectname"],$subject12[2]["subjectmarksobtained"],$subject12[2]["subjectmarkstotal"]);
						AddSubjects($subjectname124,$subjectscore124,$subjecttotal124,$connection,"XII",$memberid,$subject12[3]["subjectname"],$subject12[3]["subjectmarksobtained"],$subject12[3]["subjectmarkstotal"]);
						AddSubjects($subjectname125,$subjectscore125,$subjecttotal125,$connection,"XII",$memberid,$subject12[4]["subjectname"],$subject12[4]["subjectmarksobtained"],$subject12[4]["subjectmarkstotal"]);
						AddSubjects($subjectname126,$subjectscore126,$subjecttotal126,$connection,"XII",$memberid,$subject12[5]["subjectname"],$subject12[5]["subjectmarksobtained"],$subject12[5]["subjectmarkstotal"]);
						AddSubjects($subjectname127,$subjectscore127,$subjecttotal127,$connection,"XII",$memberid,$subject12[6]["subjectname"],$subject12[6]["subjectmarksobtained"],$subject12[6]["subjectmarkstotal"]);
						
    }
} else {
    if (empty($_SESSION['error_page4'])) {
        header("location: page1_form.php");//redirecting to first page
    }
}
function AddSubjects($s,$score,$total,$c,$class,$id,$oname,$omarks,$ototal)
{
	if(isset($s) && $score!=0 && $total!=0)
	{
		$scoreperc=($score*100)/$total;
		$scoreperc=round($scoreperc,2);
		if(strtolower($s)==strtolower($oname) && ($score!=$omarks || $total!=$ototal))
		{
			$str="update
			studentsubjects set `subjectmarksobtained`='$score',`subjectmarkstotal`='$total',`subjectscore`='$scoreperc' where studentid=".$id." and studentclass='$class' and subjectname='$s'";
			$query = mysqli_query($c,$str);
		}
		else
		{
			$str="insert into studentsubjects(`studentid`,`subjectname`,`subjectmarksobtained`,`subjectmarkstotal`,`studentclass`,`subjectscore`) values('$id','$s','$score','$total','$class','$scoreperc');";
			$query = mysqli_query($c,$str);
		}
    }
}
?>

        <div class="container">
            <div >
                                <span id="error">
                    <?php
                    if (!empty($_SESSION['error_page3'])) {
                        echo $_SESSION['error_page3'];
                        unset($_SESSION['error_page3']);
                    }
                    ?>
                </span>
                
                <div class="content" style="background:#FFF;" >
                <div class="sectionheading">
					<span>F. Statement of Purpose</span>
	  </div>
          <br>
<a href="sop-guidelines.php" target="_blank" style="text-decoration:none;color: #fff;background:#FDC030;padding: 5px;text-transform:uppercase;">How to write the Statement of Purpose (SOP)?</a>
<br>
<br>
<br>
<br>
                	<div class="errmsg"></div>
	<form method="post" action='page4_form.php'>
		  <span>(Please restrict your SOP within 400-500 words)</span>
          <br>
          <br>
          <p>A well written 'Statement of Purpose' (SOP) with your original thoughts in your own words will make a
positive difference to your application.
<br><br>
<b>To assist you in writing it well, we suggest:</b>
<ol>
<li>You tell us about your motivations and inspirations to select this course.</li>
<li>You share with us your skills, capabilities and experiences which will help you do well.</li>
<li>You write about your ambitions, your dreams and also your expectations from this course.</li>
</ol>
          </p>
          <textarea id="soparea" name="sop" contenteditable="true" spellcheck="true" style="width:100%;height: 300px;resize: none;padding: 0px;"><?php echo $sop;?></textarea>
		Total word count: <span id="display_count">0</span> words. Words left: <span id="word_left">500</span>
		<span id="sopareaerr"></span>
       <div style="margin-top:25px; float:right;">
               	    <input  type="reset" value="Back" onclick="GotoPrevPage('page3_form.php');"/>
                    <input  type="submit" value="Next" />
				</div>
       <div style="clear:both"></div>
				  <div class="errmsg"></div>
                </form>
                </div>
 </div>
           
</div>
            
        <!--Google Analysis Start Srikant -->

<script type="text/javascript">

var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");

document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));

</script>

<script type="text/javascript">

try {

var pageTracker = _gat._getTracker("UA-2512242-1");

pageTracker._trackPageview();

} catch(err) {}</script>

<!--Google Analysis End Srikant -->

<!-- Facebook Pixel Code -->

<script>

!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?

n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;

n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;

t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,

document,'script','https://connect.facebook.net/en_US/fbevents.js');

 

fbq('init', '300649950136876');

fbq('track', 'CompleteRegistration');</script>

<noscript><img height="1" width="1" style="display:none"

src="https://www.facebook.com/tr?id=300649950136876&ev=PageView&noscript=1"

/></noscript>

<!-- End Facebook Pixel Code -->

<!-- Remarketing Code Google-->

<script type="text/javascript">

/* <![CDATA[ */

var google_conversion_id = 875560955;

var google_custom_params = window.google_tag_params;

var google_remarketing_only = true;

/* ]]> */
$(document).ready(function(){
$( "#soparea" ).trigger( "keydown" );

	});

  $("#soparea").on('keydown', function() {
        var words = this.value.match(/\S+/g).length;
		if ($("#soparea").val()==="" && words==1)
		{
            words=0;
        }
        if (words > 500) {
            // Split the string on first 200 words and rejoin on spaces
            var trimmed = $(this).val().split(/\s+/, 500).join(" ");
            // Add a space at the end to keep new typing making new words
            $(this).val(trimmed + " ");
        }
     else {
            $('#display_count').text(words);
            $('#word_left').text(500-words);
        }
    });
              

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

<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">

</script>

<noscript>

<div style="display:inline;">

<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/875560955/?value=0&amp;guid=ON&amp;script=0"/>

</div>

</noscript>

<!-- Remarketing Code Google-->
<script src="js/common.js"></script>
<script>
function SOPValidate()
{
	var v=parseInt(document.getElementById("display_count").innerHTML);
   if(isNaN(v) || v==0)
   {
		$("#sopareaerr").css("color","red");
	document.getElementById("sopareaerr").innerHTML="SOP can not be empty.";
   return false;
   }
   	document.getElementById("sopareaerr").innerHTML="";
   return true;
}
</script>
    </body>
</html>