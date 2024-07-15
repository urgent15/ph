<?php
function add($num1, $num2) {
    return $num1 + $num2;
}

function subtract($num1, $num2) {
    return $num1 - $num2;
}

function multiply($num1, $num2) {
    return $num1 * $num2;
}

function divide($num1, $num2) {
    if($num2 != 0) {
        return $num1 / $num2;
    } else {
        return "Error: Division by zero is not allowed.";
    }
}

function calculate($num1, $num2, $operation) {
    switch($operation) {
        case 'add':
            return add($num1, $num2);
        case 'subtract':
            return subtract($num1, $num2);
        case 'multiply':
            return multiply($num1, $num2);
        case 'divide':
            return divide($num1, $num2);
        default:
            return "Error: Invalid operation.";
    }
}

echo calculate(10, 5, 'add');
echo calculate(10, 5, 'subtract');
echo calculate(10, 5, 'multiply');
echo calculate(10, 5, 'divide');
?>