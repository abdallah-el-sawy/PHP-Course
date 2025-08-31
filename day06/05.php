<?php
/*
== Array Functions Part 3

-> array_keys(Array[Required] , Value[Optional] , Type[Optional])
    -> return the array keys in array form
    -> type
        -> False => Default => no checking for type
        -> True => Checking for type


-> array_values(Array[Required])
    -> return all the values of An array 

-> array_pad(Array[Required] , Size[Required] , Value[Required])
    -> Pad array to specified length with a value
    -> negative value add elements before original items
    -> if size < array length nothing will be deleted


-> array_product(Array[Required])
    -> calculate the product of values in an array => return int || float
    ->in mathematics , a product is the result of multiplication


-> array_sum(Array[Required])
    ->calculate the sum of values in an array    
*/


//---------------------------------------------------------------------------------------

$friends = ["Abdallah" , "Mohamed" , "Esmail" , "Elsawy" , "Abdallah" , 1 , "1"];

// basic use
echo "<pre>";
print_r(array_keys($friends));
echo "</pre>";

//if we want to check one value key
echo "<pre>";
print_r(array_keys($friends , "Abdallah"));
echo "</pre>";

// here it will return that 1 is found in 2 indexes
// doesn't check the type
// here the type is false as default
echo "<pre>";
print_r(array_keys($friends , 1));
echo "</pre>";


// here it will return just 1 index
// the integer index
echo "<pre>";
print_r(array_keys($friends , 1 , True)); //[0] => 5
echo "</pre>";

//---------------------------------------------------------------------------------------

$countries = ["KSA" => "Saudi Arabia" , "EGY" => "Egypt" , "USA" => "United States" ,"Uk" => "United Kingdom"];

echo "<pre>";
print_r(array_values($countries));
echo "</pre>";

//---------------------------------------------------------------------------------------

$pad = ["A" , "B" , "C" , "D"];

// it will retrun array with 10 elements and the rest of the array is #
echo "<pre>";
print_r(array_pad($pad , 10 , "#"));
echo "</pre>";

// it will put the # in the first before our actuall elements
echo "<pre>";
print_r(array_pad($pad , -10 , "#"));
echo "</pre>";

// if you typed a number that is less than the array length 
// it will return the original array without any deletion
echo "<pre>";
print_r(array_pad($pad , 2 , "#"));
echo "</pre>";

//---------------------------------------------------------------------------------------

$product = [10 , 2 , 5 , 7];
echo "The Multiplication of the array =  " . array_product($product) . "<br>"; // 700

$sum = [10 , 2 , 5 , 7];
echo "The Sum of the array =  " . array_sum($sum) . "<br>"; // 24


//---------------------------------------------------------------------------------------
?>