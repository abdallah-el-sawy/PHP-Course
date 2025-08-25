<?php

/* concatinate strings 
->      .
->      .=
*/

define("ABDALLAH" , 1);

$a = "Abdallah";
$b = "Elsawy";
$c = "Esmail";

echo "$a $b $c";
echo '<br>';

echo "{$a} {$b} {$c}";
echo '<br>';

echo $a ." ". $b . " " . $c;
echo '<br>';

echo "$a $b $c ABDALLAH"; // Abdallah Elsawy Esmail ABDALLAH 
// it will print abdallah as string not constant so that's why we use the " . "
echo '<br>';

echo $a ." ". $b . " " . $c . " " . ABDALLAH; //Abdallah Elsawy Esmail 1
echo '<br>';
//==================================

$x = "Abdallah ";
$x .= "Elsawy "; // $x = $x . "Elsawy" ==> Abdallah Elsawy
$x .= "Esmail "; // same 

echo $x;
echo '<br>';










?>