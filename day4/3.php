<?php

/*
==Function
-- optional Return & Null
-- End after Return
*/


//suppose that the user will input 2 numbers the sum of these 2 numbers is his prize

$prizes = ["PC" , "PlayStaion" , "XBOX" , "APPLE TV" , "LAPTOP" , "IPAD" , "IPHONE"];

function get_number($num1 , $num2)
{
  return $num1 + $num2;
  // echo 'will not echo anything'; // after return nothing will be printed
}

$prize_number = get_number(2 , 1);
echo $prizes[$prize_number];














?>