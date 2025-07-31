<?php

$simpleArray = [1, 2, 3, 4, 5];
$associativeArray = [
    'name' => 'John',
    'age' => 30,
    'city' => 'New York'
];

// echo $simpleArray[0];
// echo $associativeArray['name'];

$simpleArray[] = 6; //Adding an element
$associativeArray['country'] = 'USA'; //Adding a key-value pair

$matrix = [[1, 2, 3], [4, 5, 6]];

// echo $matrix[1][1]; //Accessing a 2D array element the result is 5

$fruits = ['apple', 'banana', 'orange'];
// var_dump($fruits);
// sort($fruits);
// var_dump($fruits);
// rsort($fruits);
// var_dump($fruits);

// var_dump($associativeArray);
// asort($associativeArray); // Sorts by value, maintaining key association
// var_dump($associativeArray);
// ksort($associativeArray); // Sorts by key
// var_dump($associativeArray);

$numbers = range(1, 5);
//var_dump($numbers);
$squared = array_map(
    fn($n) => $n ** 2,
    $numbers // Squaring each element
);
//var_dump($squared); // Output: [1, 4, 9, 16, 25]

$evenNumbers = array_filter(
    $numbers,
    fn($n) => $n % 2 == 0 // Filtering even numbers
);
//var_dump($evenNumbers); // Output: [2, 4]

$sum = array_reduce(
    $numbers,
    fn($carry, $n) => $carry + $n, // Reducing to sum
    0
);
//ar_dump($sum); // Output: 15

$moreNumbers = [0, ...$numbers, 6];
//var_dump($moreNumbers);

[$first, $second] = $fruits;
//var_dump($first, $second);


$set1 = [1, 2, 3, 4, 5];
$set2 = [3, 4, 5, 6, 7];

// var_dump(
//     array_intersect($set1, $set2),
//     array_intersect($set2, $set1),
//     array_diff($set1, $set2),
//     array_diff($set2, $set1)
// );

//$keys = array_keys($associativeArray);
$keys = array_map(
    fn($key) => ucfirst($key),
    array_keys($associativeArray)
);
$values = array_values($associativeArray);

var_dump($keys, $values);

var_dump(
    array_key_exists('name', $associativeArray),
    in_array('John', $associativeArray)
);

$fruitString = implode(', ', $fruits); // Convert array to string 
$backToArray = explode(', ', $fruitString); // Convert string back to array

var_dump($fruitString, $backToArray);
var_dump(
    array_merge($set1, $set2),
    $associativeArray,
    array_merge($associativeArray, ['country' => 'DE']),
    $set1 + $set2,
    $associativeArray + ['country' => 'DE'],
    [...$set1, ...$set2],
    [...$associativeArray, ...['country' => 'DE']],
);
