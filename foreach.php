<?php

$basket = [
    "Apple" => 3,
    "Banana" => 2,
    "Orange" => 5
];

$total = 0;

foreach ($basket as $item => $quantity) {
    echo "$item: $quantity\n";
    //$total = $total + $quantity;
    $total += $quantity; // Using shorthand for addition
}

echo "Total items: $total\n";
