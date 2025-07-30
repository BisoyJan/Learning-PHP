<?php
//Generator is making your memory usage more efficient
//because it yields values one at a time instead of returning an entire array
function countDown(int $start): Generator //array<int>
{
    //$result = [];
    for ($i = $start; $i >= 0; $i--) {
        echo "Generating number: $i\n";
        yield random_int(1, 100);
    }
    //return $result;
}

foreach (countDown(5) as $number) {
    echo "Echoing number... \n";
    echo "$number\n";
}
