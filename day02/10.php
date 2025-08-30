<?php

/* 

==Logical Operators :-

-> and => And => Both True
-> && => And =>  Both True ["&&" Has A greater Precedence than "and"] 
-> or => Or => one or both is true
-> || => Or => one or both is true ["||" Has A greater Precedence than "or"] 
-> xor => Xor => one is true but not both 
-> ! -> not => Not True
*/


var_dump(100 > 50 and 100 > 80 and 100 > 90); //True
echo '<br>';

var_dump(100 > 50 && 100 > 80 && 100 > 100); //false
echo '<br>';

var_dump(100 > 50 or 100 > 80 or 100 > 90); //True
echo '<br>';

var_dump(100 > 50 || 100 > 110 || 100 > 100); //True
echo '<br>';

var_dump(100 > 50 or 100 > 110 or 100 > 100); //True
echo '<br>';

var_dump(100 > 50 xor 100 > 110 ); //True
echo '<br>';

var_dump(100 > 50 xor 100 > 80); //false
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';









?>