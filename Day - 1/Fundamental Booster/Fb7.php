<!-- Write a PHP Program to convert Celsius to Fahrenheit (c = (f-32)/1.8) -->
<?php
function CtoF($celsius) {
    $f = ($celsius * 1.8) + 32;
    return $f;
}


$celsius = 43;

$f = CtoF($celsius);

echo "$celsius C = $f F.";
?>
