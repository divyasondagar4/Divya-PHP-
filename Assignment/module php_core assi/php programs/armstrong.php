<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
function armstrongCheck($number){
    $sum = 0;  
    $x = $number;  
    while($x != 0)  
    {  
        $rem = $x % 10;  
        $sum = $sum + $rem*$rem*$rem;  
        $x = $x / 10;  
    }  
     
    // if true  armstrong number
    if ($number == $sum)
        return 1;
     
    // no armstrong number    
    return 0;    
}
$number = 59;
$check = armstrongCheck($number);
if ($check == 1)
    echo $number.
   " Yes it is armstrong number";
else
    echo  $number." No it is not armstrong number" ;
?>
</body>
</html>