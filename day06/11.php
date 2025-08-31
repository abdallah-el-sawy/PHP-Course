<?php
/*
== Array Functions Part 8

--- those are called a higher order function ---
  -> higher order function is a function that accept another function as an argument to it .


-> array_map(Callback Function[Required] , Array[Required] , Other Arrays[Optional])
    -> Applies the callback to the elements of the given arrays

-> array_filter(Array[Required] , Callback Function[Required] , Flag[Optional])
    -> Filter Values of an array using a callback function
    -> Flag
        -> ARRAY_FILTER_USE_KEY
        -> ARRAY_FILTER_USE_BOTH
        -> 0 Default => send value as an argument


*/

//-------------------------------------------------------------------------------

// this will be our call back function
function add_title($fname , $lname)
{
  return "Mr/$fname $lname";
}

$fname_arr = ["Abdallah" , "Ali" , "Osama" , "Sameh" , "Saly" , "Leo"];
$lname_arr = ["Elsawy" , "Mohamed" , "Mohamed" , "Ahmed" , "Ramadan" , "Messi"];

echo "<pre>";
// here it will return an array
// contains Mr/ all of the 1st array elements then the 2nd array elements
print_r(array_map("add_title" , $fname_arr , $lname_arr));

//same output
// just made an anonymous function to do the title job
// to remeber
print_r(array_map(fn($f , $l) => "Hello Mr/$f $l" , $fname_arr , $lname_arr));
echo "</pre>";

echo "<hr>";

//-------------------------------------------------------------------------------


$nums = [
  1 => 3,
  3 => 5,
  6 => 8,
  4 => 7
];

function filter($num)
{
  return ($num > 4);
}

function check_num($n1 , $n2)
{
  return ( $n1 > 4 || $n2 > 4 ) ;
}


echo "<pre>";

// here we filterd the array values
// according to the values not the key
// it's the dafalut case when the flag or the mode is 0
print_r(array_filter($nums , "filter"));

// here we filterd the array values
// according to the key
// here we will print the values that have "index > 4"
// so it's just 6
print_r(array_filter($nums , "filter" , ARRAY_FILTER_USE_KEY));

// here we filterd the array values
// according to the key
// here we will print the values that have "index > 4"
// so it's just 6
print_r(array_filter($nums , "filter" , ARRAY_FILTER_USE_KEY));

// here we filterd the array values
// according to the key and values
// here we will print the values that have "index > 4" or "Value > 4"
// so it's (3 => 5) & (6 => 8) & (4 => 7)
print_r(array_filter($nums , "check_num" , ARRAY_FILTER_USE_BOTH));
echo "</pre>";


//-------------------------------------------------------------------------------















?>