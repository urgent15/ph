<?php
$cd= __DIR__;
echo "current directory". $cd . "<br>";
$dir= opendir($cd);
while($file=readdir($dir)){
    echo "filename: $file<br>";
}
closedir($dir);
?>