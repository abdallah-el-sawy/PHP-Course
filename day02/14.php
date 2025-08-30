<?php
/* 

==Operator Precedence

-> "&&" Has A greater Precedence than "and"
-> "||" Has A greater Precedence than "or"

*/

echo 2 + 4 * 5; //22 multiplcation  Has A greater Precedence than adding
echo '<br>';

echo (2 + 4) * 5; // 30 ()  Has A greater Precedence than  multiplcation
echo '<br>';

echo 10 || False; //1
echo '<br>';  


//test
$a = 10 || false; // $a = (10 || false) -> $a = true -> $a = 1
echo $a; // 1  (true) 
echo '<br>';

$b = 10 or false; // ($b = 10) or false 
echo $b; // 10 
echo '<br>';







?>