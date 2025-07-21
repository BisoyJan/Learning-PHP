<?php

//Require function arguments
//Functions can take arguments, which are values passed to the function when it is called.
function greet($name)
{
    return "Hello, $name!\n";
}

echo greet("Jan Ramil Intong");

//Optional function arguments
//You can also define default values for function arguments, making them optional.
function greetWithTime($name, $time = "day")
{
    return "Good $time, $name!\n";
}

echo greetWithTime("Bob");
echo greetWithTime("Alice", "evening");



