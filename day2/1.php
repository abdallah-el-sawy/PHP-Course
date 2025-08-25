<?php
/* Assign variable by reference
  -> by default variables are always assigned by value 
  -> assigned by reference make variable alies or point to Another  
*/

$a = "abdallah";
$b = $a;
$b = "Elsawy";

echo $a; // abdallah
echo '<br>'; 

echo $b; // Elsawy
echo '<br>';

/* now we will make them point to each other means when one of them changes the other one aslo changes */

$c = "ahmed";
$d =   & $c ; /* by adding & now  */
$d = "Sawy";

echo $c; // Sawy
echo '<br>'; 

echo $d; // Sawy
echo '<br>';


/* PHP references are just aliases not pointers */







?>