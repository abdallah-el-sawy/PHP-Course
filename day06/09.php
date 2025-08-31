<?php
/*
== Array Functions Part 7

-> array_slice(Array[Required] , Start[Required] , Length[Optional] , Preserve_Keys[Optional])
    -> Extract a slice of the array
    -> Start
        -> 0 From Start
        -> 1 From The last element
    -> Length
        -> Negative => stop slicing untill this index
        -> Not Set => all elements from start position
    -> Preserve Keys
        -> False => Default => Reset Keys
        -> True  => Preserve Keys    
    -> if the array has string keys , it will always preserve the keys


-> array_splice(Array[Required] , Start[Required] , Length[Optional] , Array[Optional])
    -> remove a portion of the array and replace it with something else
    -> Start
        -> 0 From Start
        -> 1 From The last element
    -> Length
        -> Negative => stop removing untill this index
        -> Not Set => remove all elements from start position    

*/


//--------------------------------------------------------------------------------------------------

$chars = ["A" , "B" , "C" , "D" , "E" , "F"];
$chars_with_string_keys = ["A" => "Abdallah" , "B" => "Basem" , "C" => "Carlos" , "D" => "Doaa"];
$chars_with_numeric_keys = [1=> "one" , 2 => "two" , 3 => "Three" , 4 => "Four"];

echo "<pre>";
// we started from index 2
// here we didn't type the length
// it will print from index 2 to the end
print_r(array_slice($chars ,2));

// here we started from index 2
// the length is 3
// so it will print 3 elements
print_r(array_slice($chars ,2 , 3));


//here we used a negative length
// we started from index 2
//negative length is like a forbidden area
// here we typed -2 thats mean the last 2 elements 
// so we will print all of the array but not the last 2
// it will print from C & D only
print_r(array_slice($chars ,2 , -2));


// here we started from index 1
// it will print from index 1 to the end
// it will preserve the string keys (no key chaneges)
print_r(array_slice($chars_with_string_keys ,1));

// here we started from index 1
// it will print from index 1 to the end
// it will reindex the value keys start from index 1
// the index 1 in the first array will be 0 in the second array
print_r(array_slice($chars_with_numeric_keys ,1));

// i wanted to print the array here
// to make sure that there is not any changes happed to it
print_r($chars);

echo "</pre>";
echo "<hr>";

//--------------------------------------------------------------------------------------------------

$nums = [ 10 , 20 , 30 , 40 , 50 , 60 , 70 ];
$nums2 = [ 10 , 20 , 30 , 40 , 50 , 60 , 70 ];
$nums3 = [ 10 , 20 , 30 , 40 , 50 , 60 , 70 ];
$nums4 = [ 10 , 20 , 30 , 40 , 50 , 60 , 70 ];

echo "<pre>";

//here we will start from index 2 and remove the elements
// so it will print the removed array
// it will print from 30 to 70
print_r(array_splice($nums , 2));

// our array is infected here
// our array will be just 10 and 20
// the rest of array is removed
print_r($nums);

// here we will start from index 2
// but this time we will remove just  2 elements
// it will print the removed array
// will print 30 and 40
print_r(array_splice($nums2 , 2 , 2));

//our array is infected
// so it will print 10 and 20 and 50 -> 70
print_r($nums2);

// here the length is negative
// it's like the previous one the array_Slice
// -3 means the last 3 elements
// so the last 3 element are like forbidden area
// we will remove from index 2 to the index before the last 3 element
// so it will print 30 & 40
print_r(array_splice($nums3 , 2 , -3));

//here it will print 10 and 20 and the last three element in the array
print_r($nums3);

//here we will start from index 2 and remove 2 elements
// here i removed 2 elements and put 2 element in their place
// i put here an array of elements
// you can put just value
// even you can also put 1 value 
// here it will print 30 and 40
print_r(array_splice($nums4 , 2 , 2 ,["One" , "Two"]));

// here it will print the rest of the first array
// but it will replace the "30" and "40" with "one" and "two"
print_r($nums4);

echo "<pre>";


//--------------------------------------------------------------------------------------------------







?>