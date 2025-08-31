<?php
/*
== Array Functions Part 8

-> sort(Array[Required] , FLag[Optional])
    -> sort an indexed array in ascending order

-> rsort(Array[Required] , FLag[Optional])
    -> sort an indexed array in descending order

-> asort(Array[Required] , FLag[Optional])  
    -> sort an associative array in ascending order according to the value

-> arsort(Array[Required] , FLag[Optional]) 
    -> sort an associative array in descending order according to the value

-> ksort(Array[Required] , FLag[Optional])
    -> sort an associative array in ascending order according to the key

-> krsort(Array[Required] , FLag[Optional])
    -> sort an associative array in descending order according to the key

-> natsort(Array[Required] , FLag[Optional])
    -> sorting an array by using "Natural Order" Algorithm

-----------------

->Practice
    -> Flags
    -> Our own sorting function

*/
//-------------------------------------------------------------------------------------

$family = ["Mohamed" , "Abdallah" , "Esmail" , "Elsawy" , "Hana" , "Mona"];
sort($family);

// it will order the array from a to z (a-z) ascending
echo "<pre>";
print_r($family);
echo "</pre>";

//--------------------------

rsort($family);

// it will order the array from z to a (z-a) descending
echo "<pre>";
print_r($family);
echo "</pre>";

echo "<hr>";


//-------------------------------------------------------------------------------------

$countries = ["S" => "Saudi Arabia" , "E" => "Egypt" , "U" => "United States"];

asort($countries);

// it will order the array from a to z (a-z)
// according to the values
echo "<pre>";
print_r($countries);
echo "</pre>";

//-------------------------------------------

arsort($countries);

// it will order the array from z to a (z-a) ascending descending
// according to the values
echo "<pre>";
print_r($countries);
echo "</pre>";

echo "<hr>";

//-------------------------------------------------------------------------------------

$codes = ["1" => "Saudi Arabia" , "5" => "Egypt" , "10" => "United States"];


ksort($codes);

// it will order the array from a to z (a-z)
// according to the key
echo "<pre>";
print_r($codes);
echo "</pre>";

//-------------------------------------------

krsort($codes);

// it will order the array from z to a (z-a) ascending descending
// according to the key
echo "<pre>";
print_r($codes);
echo "</pre>";

echo "<hr>";

//-------------------------------------------------------------------------------------

// we will see the difference between the "Natural Order" and the normal sort()

$files = [ "photo1" , "photo20" , "photo3"];

// normal sort
sort($files);

// here it will take 20 as 2 and put it in the index and then it will put 3
echo "<pre>";
print_r($files);
echo "</pre>";

//-------------------------------------------

// the "Natural Order"
natsort($files);

// but here it's like the human reading 
// so 1 , 3 and the 20 comes in the last index
echo "<pre>";
print_r($files);
echo "</pre>";

echo "<hr>";

//-------------------------------------------------------------------------------------










?>