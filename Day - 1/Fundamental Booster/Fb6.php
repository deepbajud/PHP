<!-- Write a PHP Program to convert Fahrenheit to Celsius (f= (c*1.8)+32) -->

<?php
$a = 100;
function FtoC($fahrenheit) {
    return ($fahrenheit - 32) / 1.8;
}

$tempC = FtoC($a);

echo "Fahrenheit: $a F<br>";
echo "Celsius: $tempC C";


?>
