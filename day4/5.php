<?php

/* 
== Function Variable Arguments List
-   variable arguments list
  // built in functions
-   func_num_args() // number of arguments
-   func_get_arg(index)     // returns the number in the input index
-   func_get_args() // returns array contains the arguments the user inputed

-> spread syntax

*/



function calculate($num1 , $num2 ,$num3)
{
  echo "The number of arguments is : " . func_num_args() . "<br>";
  echo "Argument index number 3 is : " . func_get_arg(3) . "<br>"; //4
  echo '<pre>';
  print_r(func_get_args()) . "<br>"; // array contain 1 2 3 4 5
  echo '</pre>';

  // now i want to print the sum of the args
  $result = 0;
  foreach(func_get_args() as $arg):
  $result += $arg;
  endforeach;  

  echo "the sum of the inputs is : $result";
}

 calculate(1,2,3, 4, 5); // The number of arguments is :  5

echo '<hr>'; 

// spread syntax : we use it if we don't know how many parameters we have
function nums(...$nums)
{

  echo "Argument index number 3 is : " . $nums[3]  . "<br>"; //4
  echo "The number of Arguments is: " . count($nums);

  echo '<pre>';
  print_r($nums) . "<br>"; // array contain 1 2 3 4 5
  echo '</pre>';



  $result = 0;
  foreach($nums as $num):
  $result += $num;
  endforeach;
  echo "The Sum of your inputs is: $result";
}

nums(1, 2, 3, 4, 5, 6, 7, 8);


// spread syntax is good 

?>