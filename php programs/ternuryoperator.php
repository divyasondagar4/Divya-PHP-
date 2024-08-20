<?php
$num1 = 100;
$num2 = 20;
$num3 = 5;

//comprasion
$largest = ($num1 > $num2) ? ($num1 > $num3 ? $num1 : $num3) : ($num2 > $num3 ? $num2 : $num3);

echo "Largest Number: $largest";
?>
