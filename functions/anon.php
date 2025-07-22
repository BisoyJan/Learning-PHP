<?php

//anonymous function
//The anonymous function is a function without a name.
//They dont exist under a given name - you need to associate them with a variable(like $greet).
$greet = function ($name) {
    return "Hello, $name!\n";
};

echo $greet("David");

$numbers = [1, 2, 3];
$squared = array_map(function ($n) {
    return $n * $n;
}, $numbers);

var_dump($numbers, $squared);


//So the thing with anonymous functions is that they don't have access to the variables defined outside.
//Like the $message variable - you need to call "use" to tell the function to use the variable from the outside.
$message = "Bye";

//To able to change the value of this varaible is to add "use (&$message)" signe to the function
$greet2 = function ($name) use ($message) {

    $message = $message . "!";
    return "$message, $name\n";//Only the modified message will be used if it is used inside the function or returned value
};

echo $greet2("David");//Will print "Bye!, David"
echo $message;//Will still print "Bye"

