<?php
echo '<h3>Colors Array</h3>';

$colors = ['red', 'blue', 'green', 'yellow']; 

// 1. Sort the array in ascending order
sort($colors);

// 2. Add 'purple' and 'orange' to the end
array_push($colors, 'purple', 'orange');

// 3. Add 'Red Apple' to the beginning
array_unshift($colors, 'Red Apple');

// 4. Replace 'green' with 'Green mango'
// After sorting and unshifting, 'green' is at index 2
$colors[2] = 'Green mango';

print_r($colors);
?>