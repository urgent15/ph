<?php
$android = strpos($_SERVER['HTTP_USER_AGENT'], "Android");
$iphone = strpos($_SERVER['HTTP_USER_AGENT'], "iPhone");
$ipad = strpos($_SERVER['HTTP_USER_AGENT'], "iPad");
$webos = strpos($_SERVER['HTTP_USER_AGENT'], "webOS");
$ip= $_SERVER['REMOTE_ADDR'];
if ($android || $iphone || $ipad || $webos == true) {
    echo "You are using a mobile device";
    echo "<br>";
    echo "Your IP address is: $ip";
} else {
    echo "You are using a desktop device";
    echo "<br>";
    echo "Your IP address is: $ip";
}
?>