<?php

// type coercion
$isStudent = 1;
var_dump($isStudent, true, $isStudent == true);
var_dump($isStudent, true, $isStudent === true);

// type juggling
$scores = [85, "90", 95.5];
$total = $scores[0] + $scores[1];
var_dump($scores[0] + $scores[1]);
var_dump($scores, $total);
var_dump($scores, +$scores[1] + $scores[2]);

echo "Total: $total \n";
