<?php

$numbers = [1, 2, 3, 4, 5];
$multiplier = 2;

//Using traditional anonymous function syntax
//The 'use' keyword is required to capture variables from the parent scope
//This allows the function to access the $multiplier variable
$squared = array_map(function ($n) use ($multiplier) {
    return $n * $multiplier;
}, $numbers);


//Using arrow function syntax
//Arrow functions automatically capture variables from the parent scope
//Without needing the 'use' keyword
$squared2 = array_map(
    fn($n) => $n * $multiplier,
    $numbers
);

var_dump($numbers, $squared, $squared2);
