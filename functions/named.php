<?php

function greet(
    string $name,
    string $greeting = "Hello",
    bool $shout = false
): string {
    $message = "$greeting, $name!";
    return $shout ? strtoupper($message) : $message;
}

echo greet("Alice") . "\n";
echo greet("Alice", "Hi") . "\n";
echo greet("Alice", "Hey", true) . "\n";

//Named arguments to avoid confusion with parameter order
echo greet(name: "David", shout: false) . "\n";
