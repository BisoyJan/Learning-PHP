<?php 

echo "Hello, World!\n";

//expressions
$name = "Jan Ramil";
echo "My name is $name\n";

//concat
echo "Hello, " . $name . "\n";

//arithmetic expressions
$pizzas = 3;
$slicesPerPizza = 8;

// addition
$totalSlice = $pizzas * $slicesPerPizza;
echo "Total slices: " . $totalSlice . "\n";

// ternary operator
$isHungry = true;
echo "Hungry? ";
echo $isHungry ? "Yes" : "No";
echo "\n";

// other version of ternary operation
echo "Hungry? " . ($isHungry ? "Yes" : "No") . "\n";