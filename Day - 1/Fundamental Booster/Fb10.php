<!-- Write a PHP Program to swap two numbers without using third variable. -->
<?php
$num1 = 7;
$num2 = 14;

echo " num1 = $num1, num2 = $num2<br>";

$num1 = $num1 + $num2;
$num2 = $num1 - $num2;
$num1 = $num1 - $num2;

echo "Swapped: num1 = $num1, num2 = $num2";
?>

