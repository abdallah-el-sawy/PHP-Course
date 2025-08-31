<?php
/*
== Array Functions Part 6

-> array_shift(Array[Required])
    -> shift an element off the beginning of the array
    -> this function will reset => "reset()" the input array pointer

-> array_pop(Array[Required])
    -> pop the element off the end of array
    -> this function will reset => "reset()" the input array pointer

-> array_push(Array[Required] , Values[Optional])
    -> push one or more elements onto the end of an array
    -> you can use $arr[] if you want to push just 1 element it's faster than the push function

-> array_unshift(Array[Required] , Values[Optional])
    -> add one element in the beginning of an array
    -> this function will reset => "reset()" the input array pointer

*/

//------------------------------------------------------------------------

$chars = ["A" , "B" , "C" , "D"];

// normal print
echo "<pre>";
print_r($chars);
echo "</pre>";

// here it will shift the array of the array 
// reindexing the rest of the values
$first = array_shift($chars);
echo "The first element of the array is: " . $first . "<br>";

// it will print b c d without the a in array
echo "<pre>";
print_r($chars);
echo "</pre>";

//-----------------------------------

// same as array_shift
// but shift the last element off the array
$last = array_pop($chars);
echo "The last element of the array is: " . $last . "<br>";

// it will print b c  without the d in array
echo "<pre>";
print_r($chars);
echo "</pre>";

//------------------------------------------------------------------------

// we added the chars at the end of the array
array_push($chars , "X" , "Y" , "Z");
echo "<pre>";
print_r($chars);
echo "</pre>";

//---------------------------

// if you want to just add 1 element 
// you can use this 
// faster than the funtion

$chars [] = "Hello";
echo "<pre>";
print_r($chars);
echo "</pre>";

//------------------------------------------------------------------------

// we added the chars at the Beginning of the array
array_unshift($chars , "One" , "Two" , "Three");
echo "<pre>";
print_r($chars);
echo "</pre>";


//------------------------------------------------------------------------











?>