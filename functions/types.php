<?php

// Functions using type declarations
// You can specify the type of arguments a function should accept and the type it should return.
function add(int $a, int $b): int
{
    return $a + $b;
}


echo add(5, 10);
