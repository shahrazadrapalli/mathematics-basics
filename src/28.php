<?php
// Problem: Summing an arithmetic series from 1 to n with step s

function sumArithmeticSeries(int $n, int $step): int {
    if ($step < 0) {
        throw new Exception("Step must be non-negative.");
    }
    
    return $n * (2 * $n + ($n - 1) * $step) / 2;
}

// Example usage
echo "The sum of the series from 1 to 15 with a step of 3 is: " . 
   sumArithmeticSeries(15, 3);
?>
