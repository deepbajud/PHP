<!-- Write a PHP Program to find ans of ((b*b)- (4*a*c))/(2*a) -->
<?php
// Define the coefficients a, b, and c
$a = 2;
$b =5;
$c = -3;

// (b*b)- (4*a*c)   ---first
$first = ($b * $b) - (4 * $a * $c);

// (2*a)   --second
$second = 2 * $a;

// Calculate the result
$answer = $first  / $second;

echo "The ans is: ".$answer;
?>
