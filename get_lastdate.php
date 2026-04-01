<?php
//include_once "administrator/include/connection.php";


$url="https://elibrary.mitsde.com/api_insert.php";
$ch=curl_init();
curl_setopt($ch, CURLOPT_URL,$url);
curl_setopt($curl, CURLOPT_GET, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
$rusult=curl_exec($ch);
curl_close($ch);
$result= json_decode($rusult,true);
//var_dump($rusult);
//echo '<pre>';
//print_r($result);

if ($result['status'] == 1) {
    $data = $result['data'];
    $lastdate = $result['data'][0]['lastdate'];
    $mitsde = $result['data'][0]['mitsde'];
    $admission = $result['data'][0]['admission'];
    $lsc = $result['data'][0]['lsc'];
    /*foreach ($data as $record) {
     
      
      
      
      echo "</br>last_date-->".$record['lastdate'];
      echo "</br>mitsde-->".$record['mitsde'];
      echo "</br>admission-->".$record['admission'];
       echo "</br>lsc-->".$record['lsc'];
      
        
        
        
       
    }*/



    }
 else {
    echo "no data";
}
?>
<!DOCTYPE html>
<html>
<body>

<h1>The img element</h1>

<img src="https://elibrary.mitsde.com/tms/include/internalDoc/<?php echo $mitsde; ?>" alt="Girl in a jacket" width="500" height="600">

</body>
</html>
