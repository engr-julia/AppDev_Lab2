<?php
echo '<h3> Sum of An Array</h3>';

// 1. Create an array of numbers
$numbers = [1, 2, 3, 4, 5];

// 2. Get the sum of all numbers
$sum = array_sum($numbers);

// 3. Count the number of elements
$quantity = count($numbers);

// 4. Print the formatted string
echo "The sum of the $quantity numbers is: $sum";
?>