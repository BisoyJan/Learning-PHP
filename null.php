<?php
declare(strict_types=1); //Require to respect the types strictly
$abc = null;
$db = $abc ?? "default";
var_dump(
    null == null,
    null == false,
    null == 0,
    null == '',
    null == [],
    $abc, //if variable doesnt exist php return NULL
    isset($abc),
    is_null($abc), // Returns true if the variable is null
    $db,
    empty($abc) // Returns true if the variable is empty
);

//You can make the parameters to nullable if add question make before the type "?string $name"
function greet(?string $name)
{
    echo "Hello, " . ($name ?? "stranger") . "!\n";
}

greet("Alice");
greet(null);


var_dump(
    array_filter([1, null, "", [], 3])
);
