<?php
$str="php program-the complete SOLUTION for WEB DEVELOPMENT";
echo "The original string is: $str<br>";
echo "The string in uppercase is: ".strtoupper($str)."<br>";
echo "The string in lowercase is: ".strtolower($str)."<br>";
echo "The first character in upper case is: ".ucfirst($str)."<br>";
echo "The first character in each word in upper case is: ".ucwords($str)."<br>";
echo "The last 11 characters are: ".substr($str,-11)."<br>";
echo "The string after replacing 'the' with 'best' is: ".str_replace("the","best",$str)."<br>";
echo "<pre>";
explode(" ",$str);
echo("The second word is: ".explode(" ",$str)[1]);
echo "</pre>";
echo "Insert at specific position: ".substr_replace($str,"hello ",4,0)."<br>";
?> 