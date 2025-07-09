<?php

echo "Rocket launch countdown:\n";

for ($i = 10; $i > 0; $i--) {
    echo $i . "...\n";

    //conditions that you create that it is always safer to compare a value on the left to the variable on the right.
    if(1 == $i){
        echo "Lift off! \n";
    }
    
    //sleep function to pause the execution for 1 second
    sleep(1);
}
