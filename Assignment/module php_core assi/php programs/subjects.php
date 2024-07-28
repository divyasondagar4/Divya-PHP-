

<?php
$sub_1 = 95;
$sub_2 = 85;
$sub_3 = 74;
$sub_4 = 64;
$sub_5 = 53;

$total = $sub_1 + $sub_2 + $sub_3 + $sub_4 + $sub_5;
$average = $total / 5.0;
$percentage = ($total / 500.0) * 100;

if ($average >= 90) {
    $grade = "A";
} elseif ($average >= 80 && $average < 90) {
    $grade = "B";
} elseif ($average >= 70 && $average < 80) {
    $grade = "C";
} elseif ($average >= 60 && $average < 70) {
    $grade = "D";
} else {
    $grade = "E";
}

// Print the results
echo "Total marks: $total/500\n"."<br>";
echo "Average marks: $average\n"."<br>";
echo "Percentage: $percentage%\n"."<br>";
echo "Grade: '$grade'\n"."<br>";
?>
