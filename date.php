<?php
date_default_timezone_set('Asia/Kolkata');
$currentDate = getdate();
echo "Current Date: " . $currentDate['mday'] . "-" . $currentDate['mon'] . "-" . $currentDate['year'];
?>