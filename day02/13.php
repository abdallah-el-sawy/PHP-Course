<?php

/* 
==Error Control Operator : Control The Erorrs

-> @
-> Variables
-> File
-> Include
*/

//------------------------------------------------------------------------------------------------------------------------

/* Variable */
$a = 10;
$b = @$a or die("Variable Not Found");  // igonre die for now just take it as a message 

echo $b; 
echo '<br>';

echo "Test $b"; // if you tested , This string is not printed cause of die you can't do anything after the die 
echo '<br>';

//------------------------------------------------------------------------------------------------------------------------

/* File i will get from the link the file name is abdallah.php */

$f = @file("abdallah.txt") or die("File Not Found");

echo '<pre>';

print_r($f);

echo '</pre>';

//------------------------------------------------------------------------------------------------------------------------


/* Include */
(@include("abdallah.txt")) or die("The File You Want To Include Is Not Found"); // abdallah elsawy esmail mohamed


?>