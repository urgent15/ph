<?php
$sum=0;
$num = 123;
while ($num != 0) {
    $rem = $num % 10;
    $sum = $sum + $rem;
    $num = $num / 10;
}
echo "Sum of digits: $sum";
?>