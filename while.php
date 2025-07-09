<?php

$secret = "my_secret_value";

$attempts = 0;

$maxAttempts = 5;



while ($attempts < $maxAttempts) {
    $userInput = readline("Enter the secret value: ");

    if ($userInput === $secret) {
        echo "Access granted!\n";
        break;
    } else {
        $attempts++;
        echo "Incorrect value. You have " . ($maxAttempts - $attempts) . " attempts left.\n";
    }
}

// alternative version of user input
// while ($attempts < $maxAttempts) {
//     echo "Guess the secret value: ";
//     $guess = trim(fgets(STDIN));
//     $attempts++;

//     if ($guess == $secret) {
//         echo "Congratulations! You've guessed the secret value.\n";
//         break;
//     } elseif ($attempts == $maxAttempts) {
//         echo "Sorry, you've used all your attempts.\n";
//     } else {
//         echo "Incorrect guess. Try again. Attempts left:" . ($maxAttempts - $attempts) . "\n";
//     }
// }
