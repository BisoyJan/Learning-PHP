<?php

$x = 10;

// this type of comparison possible if only 1 statement
// if ($x > 5)
//     echo "x is greater than 5\n";

if ($x > 5) {
    echo "x is greater than 5\n";
}

$score = 80;

if ($score >= 90) {
    echo "Grade A\n";
} elseif ($score >= 80) {
    echo "Grade B\n";
} elseif ($score >= 70) {
    echo "Grade C\n";
} elseif ($score >= 60) {
    echo "Grade D\n";
} else {
    echo "Grade F\n";
}

// nested if statements
$num = -3;

if ($num > 0) {
    if ($num % 2 == 0) {
        echo "\nPositive even number \n";
    } else {
        echo "\nPositive odd number \n";
    }
} else {
    echo "\nNon-positive number \n";
}

//
$username = "admin";
$password = "password123";

if ($username == "admin" && $password == "password123") {
    echo "\nLogin successful!\n";
} else {
    echo "\nLogin failed!\n";
}
