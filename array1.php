<?php
$names = ["Lucia", "Trevor", "Megan", "Alice", "John", "Ethan", "Agent 47", "Frankline", "Michael", "Trevor"];

echo "Contents of the array using foreach statement:<br>";
foreach ($names as $name) {
    echo $name . "<br>";
}
sort($names);
echo "<br>Array sorted in ascending order:<br>";
foreach ($names as $name) {
    echo $name . "<br>";
}

echo "<br>Array in reverse order:<br>";
for ($i = count($names) - 1; $i >= 0; $i--) {
    echo $names[$i] . "<br>";
}

$name1 = implode(",", $names);
echo "<br>Array to String: $name1<br>";

$uniqueNames = array_unique(explode(",", $name1));
echo "<br>String To Array:<br>";
print_r($uniqueNames);

$lastElement = array_pop($uniqueNames);
echo "<br>Array after removing last element:<br>";
print_r($uniqueNames);


$position = 4;
$value = "James";
array_splice($names, $position, 0, $value);
echo "<br>Array after inserting '$value' at position $position:<br>";
print_r($names);
?>
