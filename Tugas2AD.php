<?php 
$json_string = file_get_contents("http://api.wunderground.com/api/ec4ddf94bcbbe9dd/geolookup/conditions/q/ID/Genuksari.json"); 
$parsed_json = json_decode($json_string); 
$location = $parsed_json->{'location'}->{'city'}; 
$local_time_rfc822 = $parsed_json->{'current_observation'}->{'local_time_rfc822'};
$pressure_mb = $parsed_json->{'current_observation'}->{'pressure_mb'};
$wind_mph = $parsed_json->{'current_observation'}->{'wind_mph'};
$dewpoint_c = $parsed_json->{'current_observation'}->{'dewpoint_c'};
echo "Saat ini Berada di ${location}\n";
echo "<br>";
echo "Waktu Saat Ini : ${local_time_rfc822}\n";
echo "<br>";
echo "Tekanan : ${pressure_mb} mb\n";
echo "<br>";
echo "Kecepatan Angin : ${wind_mph} mph\n";
echo "<br>";
echo "Titik Embun : ${dewpoint_c} celcius\n";
echo "<br>";
?>