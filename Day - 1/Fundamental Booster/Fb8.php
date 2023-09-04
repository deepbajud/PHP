<!-- Write a PHP Program to convert Foot to Meter (find formula and calculate) 1foot = 0.3048m-->
<?php
function FtoM($feet) {
    $meters = $feet * 0.3048;
    return $meters;
}

$feet = 6;

$meters = FtoM($feet);

echo "$feet feet equal to $meters meters.";
?>
