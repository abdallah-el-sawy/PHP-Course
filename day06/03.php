<?php
/*
== Array Functions Part 1

-> array_chunk(Array[Required] , Length[Required] , Preserve_Key[Optional])
    -> split an array into chunks [Return a Multidimentional Indexed Array]
    -> Preserve Key
      -> [False => Default] => Reindex The Array
      -> [True] => Preserve the Array

-> array_change_key_case(Array[Required] , case[Optional])
    -> changes the case of all key in an array
    -> Case
      -> [CASE_LOWER => Default] => Changes The Keys To Lowercase
      -> [CASE_UPPER] => Changes The Keys To Uppercase

-> array_combine(Array_Of_Keys[Required] , Array_Of_Values[Required])

-> array_count_values(Array[Required])
    -> Counts all the values of an array 
*/

//-------------------------------------------------------------------------------------------------------------------

// indexed array
$friends = ["Abdallah" , "Ahmed" , "Mohamed" ,"Sameh" , "Waleed"];

echo "<pre>";
print_r(array_chunk($friends , 2)); // multidimentional array 3 arrays in 1 array
echo "</pre>";

//------------------------------------------

// associative array
$countries = ["KSA" => "Saudi Arabia" , "EGY" => "Egypt" , "USA" => "United States" ,"Uk" => "United Kingdom"];

// here it will returns a new arrays with new indexes
// Preserve_Key[Optional] is false as default
echo "<pre>";
print_r(array_chunk($countries , 2)); // multidimentional array 2 arrays in 1 array
echo "</pre>";

// now it will return the array with our keys
echo "<pre>";
print_r(array_chunk($countries , 2 , True)); // multidimentional array 2 arrays in 1 array
echo "</pre>";

//-------------------------------------------------------------------------------------------------------------------

// return the array with lowercase keys 
// that is the default case
echo "<pre>";
print_r(array_change_key_case($countries)); 
echo "</pre>";

// return the array with Uppercase keys 
echo "<pre>";
print_r(array_change_key_case($countries ,CASE_UPPER)); 
echo "</pre>";

//-------------------------------------------------------------------------------------------------------------------

$keys = ["A" , "B" , "C"];
$values = ["Abdallah" , "Basem" , "Carlos"];

// now we will combine the 2 arrays 
// The 2 arrays must be equal in number of elements.
echo "<pre>";
print_r(array_combine($keys , $values)); 
echo "</pre>";

//-------------------------------------------------------------------------------------------------------------------

$counting = ["A" , "A" , "B" , "B" , "B" , "C"];

//count the number of your values
echo "<pre>";
print_r(array_count_values($counting)); 
echo "</pre>";

//-------------------------------------------------------------------------------------------------------------------
?>