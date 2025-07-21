<?php

$status = 404;

//Using match expression to handle different status codes
//Match expressions are similar to switch statements but are more concice and rturn a value directly.
//Match is strict in type comparison and does not allow fall-through behavior like switch
$message = match ($status) {
    200 => "Success",
    404, 500, 400 => "Error",
    default => "Unknown Status"
};

echo $message . "\n";
