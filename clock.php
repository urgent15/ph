<?php
//12.	PHP Program to display digital clock with current time of the Server.
date_default_timezone_set('Asia/Kolkata');
$currentDate = getdate();  
echo "Current Time: " . $currentDate['hours'] . ":" . $currentDate['minutes'] . ":" . $currentDate['seconds'];
?>