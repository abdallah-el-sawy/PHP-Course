<?php

/* Comparison Operators
  ==Part 2


  [>]   ->  larger than
  [>=]  -> larger than or equal
  [<]   -> smaller than 
  [<=]  -> smaller than or equal
  [<=>] -> spaceship [ less than, equal or greater]


  note: search on how PHP compare Strings with comparison operators 
  PHP will compare alpha strings using the greater than and less than comparison operators based upon alphabetical order.

*/

var_dump(100 > 50); //true
echo '<br>';

var_dump(100 >= 50); //true
echo '<br>';

var_dump(100 < 50); //true
echo '<br>';

var_dump(100 <= 50); //true
echo '<br>';

var_dump(100 <=> 200);  // -1
// if the 100 is greater than 200 it will return 1 , if it's equal it will return 0 and if it's less than 200 it will return -1
echo '<br>';

var_dump(200 <=> 100);  // 1
echo '<br>';

var_dump(100 <=> 100); //0
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';





?>