<?php
/*
== Array Functions Part 4

-> Every array has an internal pointer to its "Current" Element
-> which is initialized to the first element
-> functions returns value of array element that's currently pointed by internal pointer


-> current(Array[Required]) => return the current element in an array
-> next(Array[Required]) => advance the internal pointer
-> prev(Array[Required]) => rewind the internal pointer
-> reset(Array[Required]) => put the internal pointer on the first element
-> end(Array[Required]) => put the internal pointer on the last element

*/

//------------------------------------------------------------------------------

$family = ["Abdallah" , "Mohamed" , "Esmail" , "Elsawy" , "Hana" , "Mona"];

echo current($family) . "<br><br>"; // Abdallah

echo next($family) . "<br><br>"; // Mohamed
echo current($family) . "<br><br>"; // Mohamed

echo next($family) . "<br><br>"; // Esmail
echo current($family) . "<br><br>"; // Esmail

echo prev($family) . "<br><br>"; // Mohamed
echo current($family) . "<br><br>"; // Mohamed

echo reset($family) . "<br><br>"; // Abdallah
echo current($family) . "<br><br>"; // Abdallah

echo end($family) . "<br><br>"; // Mona
echo current($family) . "<br><br>"; // Mona

//------------------------------------------------------------------------------

?>