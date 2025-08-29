<?php
/*
--String Functions - Part 4

-> strpos(String[Required] , Value[Required] , Start Position[Optional]) Case Sensitve
-> strrpos(String[Required] , Value[Required] , Start Position[Optional]) Case Sensitve
-> stripos(String[Required] , Value[Required] , Start Position[Optional]) Case InSensitve
-> strripos(String[Required] , Value[Required] , Start Position[Optional]) Case InSensitve
-> substr_count(String[Required] , Value[Required] , Start Position[Optional] , Length[Optional]) 


*/

//-------------------------------------------------------------------------------

// We will search for H in the string and we start from the begining as default
var_dump(strpos("Hello Hello" , "H"));  // output is 0
echo "<br>";

//here is started my search from index 3 
var_dump(strpos("Hello Hello" , "H" , 3));  //output here is 6
echo "<br>";

//if we also started from the index we want it will give us the same index
var_dump(strpos("Hello Hello" , "H" , 6));  //output here is also 6
echo "<br>";

//case sensitive
var_dump(strpos("Hello Hello" , "h"));  //false , because we don't have "h" in our string we have "H"
echo "<br>";


var_dump(strpos("Hello Hello" , "H" , -2));  //false , he will start searching from the second "l" in the second "Hello" and goes to the end of the string
echo "<br>";

//-------------------------------------------------------------------------------

// starts from the start of the string (default)
var_dump(strrpos("Hello Hello" , "H"));   // it will get the last "H" it found so the output is 6
echo "<br>";

var_dump(strrpos("Hello Hello" , "H"));   //6
echo "<br>";

var_dump(strrpos("Hello Hello" , "H" , 5));   //6
echo "<br>";

//-------------------------------------------------------------------------------

// now the insensitive-case : same as the sensitive case the differnce here is when u type "h" it will search on "h" or "H" because it's insensitve

var_dump(stripos("Hello Hello" , "h"));   //0
echo "<br>";

var_dump(strripos("Hello Hello" , "h"));   //6
echo "<br>";

//-------------------------------------------------------------------------------

//defalut starts from index 0
var_dump(substr_count("Hello Hello" , "He")); //2
echo "<br>";

//starts from index 1
var_dump(substr_count("Hello Hello" , "He" , 1)); //1
echo "<br>";

//now we can put a range starts from index 1 to index 7
var_dump(substr_count("Hello Hello" , "He" , 1 , 7)); //1
echo "<br>";

//overlap string they are sharing the same char "a" so it will be counted just 1 time 
var_dump(substr_count("abcdabcda" , "abcda")); //1
echo "<br>";

//-------------------------------------------------------------------------------

?>