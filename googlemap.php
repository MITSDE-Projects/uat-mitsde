<?php 
if( ini_get('allow_url_fopen') ) {
    echo "allow_url_fopen is enabled. file_get_contents should work well";
    //die('allow_url_fopen is enabled. file_get_contents should work well');
} else {
  echo "allow_url_fopen is disabled. file_get_contents would not work";
}

?>
<?php 
 
 /*$output= json_decode($geocode);
 echo "</br>lat-->". $lat = $output->results[0]->geometry->location->lat;
 echo "</br>long-->". $long = $output->results[0]->geometry->location->lng; */

// Google Maps API Key 
 
// Latitude & Longitude from which the address will be retrieved 
$latitude = '19.350419'; 
$longitude = '75.2194'; 
 
// Formatted latitude & longitude string 
$formatted_latlng = trim($latitude).','.trim($longitude); 
 
// Get geo data from Google Maps API by lat lng 
 
// Decode JSON data returned by API 
$apiResponse = json_decode($geocodeFromLatLng); 

 //print_r($apiResponse);
// Retrieve address from API data 
$formatted_address = $apiResponse->results[0]->formatted_address;  

 $formatted_address;

// Loop through the address components to find the city and state
foreach ($apiResponse->results[0]->address_components as $component) {
    if (in_array('locality', $component->types)) {
        $city = $component->long_name;
    }
    if (in_array('administrative_area_level_1', $component->types)) {
        $state = $component->long_name;
    }
    if (in_array('administrative_area_level_3', $component->types)) {
        $Distric = $component->long_name;
    }
    if (in_array('country', $component->types)) {
        $country = $component->long_name;
    }
}
echo "</br>Distric: " . $Distric . "\n";
echo "</br>City: " . $city . "\n";
echo "</br>State: " . $state . "\n";
echo "</br>country: " . $country . "\n";
 
?>