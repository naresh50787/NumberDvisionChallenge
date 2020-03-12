<?php
// multipleCheck() function will take number as input and it will return values based on division check.
function multipleCheck($n)
{
    $divCheck = [
        $n % 3 => 'Linio',
        $n % 5 => 'IT',
        $n % 15 => 'Linianos',
        ];    
    
    if (array_key_exists(0, $divCheck)) {
        return $divCheck[0];
    }
    return $n;
}

// looping numbers from 1-100 and calling multiplecheck method.
foreach (range(1, 100) as $n) {
    //Displaying the output
    echo multipleCheck($n) . PHP_EOL;
}

?>