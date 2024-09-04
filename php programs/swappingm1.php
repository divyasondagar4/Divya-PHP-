<?php
// Initial values
$a = 5;
$b = 10;

// Display original values
echo "Before swapping:<br>";
echo "a = $a<br>";
echo "b = $b<br>";

// Swap the numbers
$temp = $a;
$a = $b;
$b = $temp;

// Display swapped values
echo "After swapping:<br>";
echo "a = $a<br>";
echo "b = $b<br>";
?>

<!-- //2 method -->

<?php
// Initialize the variables
$a = 15;
$b = 10;

// Display the values before swapping
echo "2.method <br> Before swapping:<br>";
echo "a = $a<br>";
echo "b = $b<br>";

// Swap using arithmetic operations
$a = $a + $b;
$b = $a - $b;
$a = $a - $b;

// Display the values after swapping
echo "After swapping:<br>";
echo "a = $a<br>";
echo "b = $b<br>";
?>

<!-- 3 method -->
<?php
// Initialize the variables
$a = 7;
$b = 13;

// Display the values before swapping
echo "Before swapping:<br>";
echo "a = $a<br>";
echo "b = $b<br>";

// Swap using XOR bitwise operation
$a = $a ^ $b; // Step 1: XOR a and b, store in a
$b = $a ^ $b; // Step 2: XOR new a and b to get the original a
$a = $a ^ $b; // Step 3: XOR new b and new a to get the original b

// Display the values after swapping
echo "After swapping:<br>";
echo "a = $a<br>";
echo "b = $b<br>";
?>

