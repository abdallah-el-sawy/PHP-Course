<?php

/*
== Passing Arguments By Reference
-> By Default, Function Arguments are passed by Value
-> if the value of the argument inside the function changed it will not change outside
-> to change it outside pass the argument ny reference

== Return Type Declaration

== search
-> PHP Strict Mode
*/

//pass by value
function add_five($number)
{
  $number += 5;
  return $number;
}

$n = 15;

//here it prited 20 because we are dealing just with value not with the variable 
echo add_five($n) . "<br>"; //20

echo $n . "<br>"; // 15
echo '<hr>';
//----------------------------------------------


//pass by reference

function add_two(&$number)
{
  $number += 2;
  return $number;
}

$num = 2;


echo add_two($num) . "<br>"; //20

echo $num . "<br>"; // 20

echo '<hr>';
//----------------------------------------------

// Return Type Declaration

function calculate($num1 , $num2) : int
{
  return $num1 + $num2;
}

echo calculate(10.5 , 9.5); //20

echo '<br>';

echo gettype(calculate(10.5 , 9.5));







?>
