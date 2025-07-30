<?php

$name = "Alice";
$age = 30;

printf("%s is %d years old.", $name, $age);

$csv = "apple,banana,cherry";
$fruits = explode(",", $csv);
var_dump($fruits, implode(", ", $fruits)); // Output: array of fruits and a string of fruits

$padded = str_pad("Hello", 11, '-', STR_PAD_BOTH);
echo $padded; // the output will be: ---Hello---

echo "\n";

var_dump(trim("    Hello World!           ")); // Output: "Hello World!" without leading and trailing spaces
