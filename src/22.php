<?php
// Generate a random number between 1 and 100
$randomNumber = rand(1, 100);

// Check if the generated number is even
if ($randomNumber % 2 == 0) {
    echo "The generated number is even.";
} else {
    echo "The generated number is odd.";
}
?>
