<?php
function calculateSum($numbers) {
    $sum = 0;
    foreach ($numbers as $number) {
        $sum += $number;
    }
    return $sum;
}

$integers = [1, 2, 3, 4];
$result = calculateSum($integers);
echo "The sum of the integers is: " . $result;
?>
