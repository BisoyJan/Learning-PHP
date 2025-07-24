<?php

// Pure functions
function add(int $a, int $b): int
{
    return $a + $b; // This function always returns the same result for the same inputs
    // It does not depend on or modify any external state
}

var_dump(add(3, 5), add(3, 5));



//Non pure function
$total = 0;// Dependency on global state
function addToTotal($value)
{
    global $total;
    $total += $value; // shared state is modified dependency on global state
    return $total; // every time this function is called, it modifies the global $total variable
}

var_dump(addToTotal(5), addToTotal(5)); // result will be different each time
// The first call will return 5, the second call will return 10

