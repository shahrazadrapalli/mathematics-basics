<?php

$randomNumber = rand(1, 10);
$sum = $randomNumber + 5;
$difference = $randomNumber - 2;
$product = $randomNumber * 2;
$quotient = $randomNumber / 2;
$remainder = $randomNumber % 3;

echo "Random Number: $randomNumber" . PHP_EOL;
echo "Sum: $sum" . PHP_EOL;
echo "Difference: $difference" . PHP_EOL;
echo "Product: $product" . PHP_EOL;
echo "Quotient: $quotient" . PHP_EOL;
echo "Remainder: $remainder" . PHP_EOL;

?>
