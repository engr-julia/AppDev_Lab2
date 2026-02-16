echo '<h3>Colors Array</h3>';

$colors = ['red', 'blue', 'green', 'yellow'];

// 1. Sort ascending
sort($colors);

// 2. Add purple and orange at the end
array_push($colors, 'purple', 'orange');

// 3. Add 'Red Apple' at the beginning
array_unshift($colors, 'Red Apple');

// 4. Replace green with Green mango
$key = array_search('green', $colors);
if ($key !== false) {
    $colors[$key] = 'Green mango';
}

print_r($colors);
