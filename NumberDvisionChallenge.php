<?php
 /*Challenge
 
Write a program that prints all the numbers from 1 to 100. 
However, for multiples of 3, instead of the number, print "Linio". For multiples of 5 print "IT".
For numbers which are multiples of both 3 and 5, print "Linianos".
 
Note: But here's the catch: you can use only one `if`. No multiple branches, ternary

operators or `else`. 

# Requirements

* PHP 7

* Maximum of 1 if
* You can't use `else`, `else if` or ternary
* Unit tests
* Feel free to apply your SOLID knowledge
*/

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

//Second Method 
/*for($i=1;$i <=100;$i++)
{
      switch($i)
      {
          case ($i % 5 == 0 && $i % 3==0) : echo "Linianos<br>";break;
          case ($i % 3 == 0) : echo "Linio<br>";break;
          case ($i % 5 == 0) : echo "IT<br>";break;          
          default: echo $i.'<br>';break;
      }
   
}*/
?>
