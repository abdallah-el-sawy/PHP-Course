<?php
/*
String Functions - Part 1

-> lcfirst(string[Required]) -> make the first letter lower 
-> ucfirst(string[Required]) -> make the first letter upper
-> strtolower(string[Required]) -> make the entire string lower
-> strtoupper(string[Required]) -> make the entire string upper
-> ucwords(string[Required] , Dilimiters[Optional]) -> first character from every word will be capital
-> str_repeat(string[Required] , Count[Required]) -> repeat a string count times

*/

echo lcfirst("Abdallah Elsawy") . "<br>"; //abdallah Elsawy
echo ucfirst("abdallah Elsawy") . "<br>"; //Abdallah Elsawy
echo strtolower("ABDALLAH ELSAWY") . "<br>"; //abdallah elsawy
echo strtoupper("abdallah elsawy") . "<br>"; //ABDALLAH ELSAWY


echo ucwords("abdallah elsawy esmail") . "<br>"; //Abdallah Elsawy Esmail

echo ucwords("abdallah elsawy|esmail" , "|") . "<br>"; //Abdallah elsawy|Esmail

echo str_repeat("Abdallah " , 3); // Abdallah Abdallah Abdallah

?>