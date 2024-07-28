<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$a = '1';
$b = &$a;
$b = "2$b";

echo "Value of \$a: $a";
echo "Value of \$b: $b";
?>
</body>
</html>