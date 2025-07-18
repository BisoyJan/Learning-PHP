<?php

do {
    $diceRoll = rand(1, 6);
    echo "You rolled a $diceRoll\n";

    if (6 == $diceRoll) {
        echo "Congratulations! you rolled a six!\n";
    }
    echo "Roll again? (y/n) \n";
    $rollAgain = trim(fgets(STDIN));
} while ('y' == $rollAgain);
