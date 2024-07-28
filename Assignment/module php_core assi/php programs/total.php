<?php
$numbers = [144, 256, 65, 98, 23];
$total = 0;

for ($i = 0; $i < count($numbers); $i++) 
{
    $total += $numbers[$i];
}

echo "Sum of the elements: " . $total;
?>
