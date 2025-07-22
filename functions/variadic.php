<?php

// variadic functions are functions that can accept a variable number of arguments
function sum(int ...$numbers): int
{
    $sum = 0;

    var_dump($numbers);

    foreach ($numbers as $number) {
        $sum += $number;
    }
    return $sum;
}

var_dump(sum());
var_dump(sum(5));
var_dump(sum(5, 10, 15, 20, 25));

$numbers = [1, 2, 3];

var_dump(sum(...$numbers));

function introduceTeam(string $teamname, string ...$members): void
{
    echo "Team: $teamname\n";

    var_dump($members);

    echo "Members: " . implode(", ", $members) . "\n";
}

introduceTeam("Team A", "John", "Jane", "Bob");

$members = ["John", "Jane", "Bob"];

introduceTeam("Team B", ...$members);
