<?php

/*==================== Comparison Operators=================

  -> used to compare values

  ==part 1 
    -> [==] equal
    -> [!=] not equal 
    *note: in those we testing just the value 
    ********************************
    -> [<>] not equal
    -> [===] identical
    -> [!==] not identical
    *note: but here we testing the value and the data type

*/

//testing equal
var_dump(100 == 100); //true
echo '<br>';
echo '<hr>';

var_dump(100 == "100"); // true we testing the value 
echo '<br>';
echo '<hr>';

var_dump(100.0 == "100"); //true
echo '<br>';
echo '<hr>';

var_dump(100.1 == "100"); //false
echo '<br>';
echo '<hr>';

var_dump(100 != 100); // false
echo '<br>';
echo '<hr>';

var_dump(100 <> 10); //true      <> is also not equal 
echo '<br>';
echo '<hr>';


echo '=================================================';
echo '<br>';
//testing identical

var_dump(100 === 100); //true
echo '<br>';
echo '<hr>';

var_dump(100 === "100"); // false the value is the same but the type is different
echo '<br>';
echo '<hr>';

var_dump(100.0 === "100"); //false 
echo '<br>';
echo '<hr>';

var_dump(100.1 === "100"); //false
echo '<br>';
echo '<hr>';

var_dump(100 !== 100); // false
echo '<br>';
echo '<hr>';

var_dump(100 !== 10); //true       
echo '<br>';
echo '<hr>';







?>