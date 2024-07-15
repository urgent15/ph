<?php
$n = 153;
$sum = 0;
$temp = $n;
while ($temp != 0) {
    $remainder = $temp % 10;
    $sum = $sum + ($remainder * $remainder * $remainder);
    $temp = (int)($temp / 10);
}
if ($n == $sum) {
    echo "$n is an Armstrong number";
} else {
    echo "$n is not an Armstrong number";
}
?>