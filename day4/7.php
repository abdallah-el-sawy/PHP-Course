<?php
/*
== Function
- Variable Function
-- PHP Allow to Use Variable Like Function
-- When You Append Parentheses () To Variable PHP will Look For Function With That Name 

== Function Exists
-- function_exists("Function Name");
*/


function one()
{
  return "one from function<br>";
}

// echo one();

$func1 = "one";

echo $func1();

//--------------------------------------------

function say_hello_to($someone)
{
  return "Hello $someone <br>";
}

// echo say_hello_to("Abdallah");

$func2 = "say_hello_to";

echo $func2("Abdallah");

//--------------------------------------------
echo '<br>';
echo '<hr>';
//Function Exists : check if the function exists before calling it 
if(function_exists("one"))
{
  echo one();
}
else
{
  echo "Function not found";
}

echo '<br>';


if(function_exists("Hello"))
{
  echo one();
}
else
{
  echo "Function not found";
}

//--------------------------------------------







?>