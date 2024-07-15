<?php
$today = date("d/m/Y");
echo "Today's date: " . $today . "<br>";

$dob = '26/09/2000'; 
$dob_parts = explode('/', $dob);
$today_parts = explode('/', $today);


print_r($dob_parts);
print_r($today_parts);
?>