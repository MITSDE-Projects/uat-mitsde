<?php
$conn = mysql_connect("localhost", "root", "");
if (!$conn) {
	echo "Mysql Connection Error" . die(mysql_error);
} else {
	// echo "connected";
}

$db = mysql_select_db('mitsde_onlinepayment', $conn);
if (!$db) {
	echo "Database Not Selected" . die(mysql_error);
} {
	// echo "connected";
}
//$conn = mysqli_connect('localhost', 'mitsde_onlinepay', 'jNq%,6!)0RmK', 'mitsde_onlinepayment');


/*$conn=mysql_connect("localhost","root","vertrigo");
 if(!$conn)
 {
	  echo "Mysql Connection Error".die(mysql_error);
 }

 $db=mysql_select_db('onliepayment',$conn);
 if(!$db)
  {
	   echo "Database Not Selected".die(mysql_error);
  }*/

$accessToken = "75549NEfOw9KRiCE6a3XOsxkaF_wAUsM4ijR3xQzJVwwNdcdTlpQOk5K6BbjH40qhVBlUlvB5lhDidsdplkxtvWYC366oaMKTdMYYToHkM2sc2Al1t48OCX1_91qyfah_XViZLafvVgzPpGaedyiuTvC6-FNifuzW8aJGKrvniINrwRBuwlMrUWrxVpO1bW6FKqdHTPSAvrfKcuGTiYqDD6hTYhOL2A9sG6j9cYDMEmg8W_hyXeDS9EAtXDpbqTGTMjC9xbW8CLO59tBGX9ZX5YZ7YnJF1EHJ91-e-qm_0YQW4kpoYcmWlTEl_As6zl7TfHxX6xeIJfmEXaFgWW5KDz02RIBOtj3vbRKLIzJv21cD-yBlonJ-r8NoQwg3CGIHtyrBaIqMcGzgGFP9hFdZXaBnyKGmkGUoGp7Zp73uItrdOFXCm3lgOrMMeAkDBvjeNA6IYHemLElX_R1VBYVHvAiarmQWRbwXei1uo9IIypQhM2VtICG4W-dw8IUdrYb"; // Replace with your actual token
?>