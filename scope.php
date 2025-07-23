<?php

//Global scope variable
$superhero = "superman";

//To acces the global scope is you need to put the variable name inside of the function
function revealIdentity()
{

    global $superhero; //Accessing the global variable
    $message = "real name is clark kent.\n"; //Local scope variable

    echo "$superhero $message";
}

revealIdentity();

function countVisitors()
{
    static $visitorsCount = 0;
    $visitorsCount++;
    echo "Visitors #$visitorsCount has arrived!\n";
}

countVisitors();
countVisitors();
