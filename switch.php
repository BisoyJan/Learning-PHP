<?php

$size = "M";

//Switch statement works is given the expression it tries to find a matching case.
//But what happened next is all the other statements were run as well.
//This is a kind of a fallback nature of the switch statement.

//To prevent this, you can use the break statement. on line 14 and 18
switch ($size) {
    case "S":
    case "M":
        echo "Size is either Small or Medium\n";
        break;
    case "L":
    case "XL":
        echo "Size is either Large or Extra Large\n";
        break;
    default:
        echo "Unknown Size\n";
}

// Some conditions and only then you run the code that is under this condition.
// You can't run a couple of those statements from different conditions because they are mutually exclusive
if ("M" == $size || "S" == $size) {
    echo "Size is Small or Medium\n";
} elseif ("L" == $size || "XL" == $size) {
    echo "Size is Large or Extra Large\n";
} else {
    echo "Unknown Size";
}


$badAttemps = 3;

switch ($badAttemps) {
    case 3:
        echo "You have 3 bad attemps \n";
    case 2:
    case 1:
        echo "Bad attempt detected \n";
    // or
    // default:
    // echo "Bad attempt detected \n";
}
