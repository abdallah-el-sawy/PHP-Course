<?php
/*
== Anonymous Function
-> When we create a function we give it name so we can call it later with that name 
-> sometimes we need to create a function for a specific task <= this is not against DRY

------

-> variable inherit from parent scope
-> variable inherit by reference from parent scope
-> Anonymous Function can be passed to a function
-> Anonymous Function can be return from a function

------

search on : Closure
*/

//------------------------------------------------------

// normal function with parameters (remember)

function say_hello_to($someone)
{
  return "hello , $someone<br>";
}

echo say_hello_to("Abdallah");
echo '<hr>';

//------------------------------------------------------

// Anonymous Function in variable

$say_hello = function() {
  return "Hello<br>";
};

echo $say_hello();
echo '<hr>';

//------------------------------------------------------

// Anonymous Function with parameters in variable
$say_hola = function($someone) {
  return "Hello , $someone<br>";
};

echo $say_hola("Abdallah");
echo '<hr>';

//------------------------------------------------------

// inherit variable from parent scope


// here i want to use this variable value inside but inside the function is they aren't in the same scope
// we gonna use use() funtion 
$msg = "Hi";
$say_hi = function($someone) use($msg) {
  return "$msg , $someone<br>";
};

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


$nums_after_adding_ten = array_map(function($item) {return $item + 10;} ,$nums);

echo "<pre>";
print_r($nums_after_adding_ten);
echo "</pre>";

echo '<hr>';

//------------------------------------------------------



?>
