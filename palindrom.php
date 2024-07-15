<?php
$n = 12321;
$r = 0;
$t = $n;
while ($t > 0) 
    $remainder = $t % 10;
    $r = ($r * 10) + $remainder;
    $t = (int)($t / 10);
if ($n == $r) {
    echo "$n is a palindrome";
} else {
    echo "$n is not a palindrome";
}
?>