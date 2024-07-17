<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$fruits = ["apple", "banana", "orange", "mango"];

$randomarry= array_rand($fruits);

$randomFruit = $fruits[$randomarry];

echo "Random fruit: $randomFruit\n";
?>
</body>
</html>