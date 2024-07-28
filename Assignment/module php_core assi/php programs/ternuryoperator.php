<?php
$num1 = 10;
$num2 = 20;
$num3 = 15;
//comprasion
$largest = ($num1 > $num2) ? ($num1 > $num3 ? $num1 : $num3) : ($num2 > $num3 ? $num2 : $num3);

echo "Largest Number: $largest";
?>
