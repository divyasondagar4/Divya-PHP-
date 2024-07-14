<?php
$first_num = 0;  
$second_num = 1;  
$n = 10; // Number of elements you want in the series
echo "Fibonacci Series: $first_num, $second_num";  

for($i = 2; $i < $n; $i++) {  
    $next_num = $first_num + $second_num;  
    echo ", $next_num";  
    $first_num = $second_num;  
    $second_num = $next_num;  
}  
?>