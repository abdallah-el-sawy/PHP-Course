<?php
/*
== Array Functions Part 5

-> array_merge(Array[Required] , Other_Array/s[Optional])
    -> Merge one or more arrays
    -> later array key with the same name override the value of the previous one 
    -> numeric key will be Renumbered to 0 , 1 , 2 , ...

-> array_replace(Array[Required] , Replacement/s[Optional])
    -> Replaces elements from passed arrays into the first array
    -> same key => value in second array replace same key => in first array
    -> if key in second array is not found in the first array in will be created


-> array_rand(Array[Required] , Num[Optional])
    -> pick one or more keys out of an array


-> shuffle(Array[Required])
    -> suffle an array
*/
//------------------------------------------------------------------------------------

// string keys
$merge_one = ["one" => "PHP" , "Two" => "CSS" , "Three" => "JavaScript"];
$merge_two = ["one" => "HTML" , "Four" => "Python"];

//here if we have the same 2 keys the second value will override the first one
// so here simply HTML will Override PHP
// and Four python it's not found in the 1st array
// so it will be created
// it will print only 4 values PHP will be deleted
echo "<pre>";
print_r(array_merge($merge_one , $merge_two));
echo "</pre>";

//------------------------

//numeric keys
$merge_three = [1 => "PHP" , 2 => "CSS" , 3 => "JavaScript"];
$merge_four = [1 => "HTML" , 4 => "Python"];

//here the keys will be renumbered from 0 to the end of the elements
// so there is no override here
// it will print the five values from 0 to 4 indexes
echo "<pre>";
print_r(array_merge($merge_three , $merge_four));
echo "</pre>";

//------------------------------------------------------------------------------------

$main = ["one" => "PHP" , "Two" => "CSS" , "Three" => "JavaScript"];
$replace = ["one" => "HTML" , "Four" => "Python"];

//here if there is key in the both arrays
// it will replace the value in the 1st array with the 2nd array
echo "<pre>";
print_r(array_replace($main , $replace));
echo "</pre>";

//even if the key is int
// it will replace it also
// and create the new key
echo "<pre>";
print_r(array_replace($merge_three , $merge_four));
echo "</pre>";

//------------------------------------------------------------------------------------

$prizes = ["TV" , "PC" , "PlayStation" , "Iphone"];

//here if we just typed array_rand[$prizez]
// it will return the index of a random value
// so i put it as an index so i can return the value
echo "<pre>";
echo "Congrats! , You Won a " . $prizes[array_rand($prizes)] . "<br>";
echo "</pre>";

// here it will return 2 indexes in array
echo "<pre>";
print_r(array_rand($prizes ,2));
echo "</pre>";

//------------------------------------------------------------------------------------


// it will shuffle the array values
shuffle($prizes);
echo "<pre>";
print_r($prizes);
echo "</pre>";

//------------------------------------------------------------------------------------





?>