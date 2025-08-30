<?php
/*
==Arrow Function

-> short syntax for Anonymous Function
-> Automatic use variables from parent scope

-----------

syntax

-> function replaced by fn
-> no need for curly braces
-> Return is omitted and we use =>

*/


//------------------------------------------------------


// Anonymous Function in variable

$say_hello = fn() => "Hello <br>";

echo $say_hello();
echo '<hr>';

//------------------------------------------------------

// Anonymous Function with parameters in variable
$say_hola = fn($someone) => "Hello , $someone<br>";

echo $say_hola("Abdallah");
echo '<hr>';

//------------------------------------------------------

// inherit variable from parent scope


// here i want to use this variable value inside but inside the function is they aren't in the same scope
// we gonna use use() funtion 
$msg = "Hi";
$say_hi = fn($someone)  => "$msg , $someone<br>";


echo $say_hi("Abdallah");
echo '<hr>';

//------------------------------------------------------

//Anonymous Function can be passed to a function => array_map("function" ,array)
$nums = [10 , 20 , 30 , 40 , 50];

function adding_five($item)
{
  return $item + 5;
}

$nums_after_adding_five = array_map("adding_five" ,$nums);

echo "<pre>";
print_r($nums_after_adding_five);
echo "</pre>";

echo '<hr>';

//-----------------------------------


$nums_after_adding_ten = array_map(fn($item) => $item + 10 ,$nums);

echo "<pre>";
print_r($nums_after_adding_ten);
echo "</pre>";

echo '<hr>';

//------------------------------------------------------









?>