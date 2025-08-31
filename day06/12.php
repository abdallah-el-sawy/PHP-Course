<?php
/*
== Array Functions Part 9

--- Higer order function ---

-> array_reduce(Array[Required] , Callback Function[Required] , Initial_Value[Optional])
    -> Reduce the array to a single value
    -> Carry => The value of the previous iteration || initial value
    -> Item => The value of the the current iteration

*/

//--------------------------------------------------------------------------------------

function sum($Carry , $Item)
{

  echo $Carry . "<br>";
  echo $Item . "<br>";
  echo $Carry + $Item . "<br>";
  echo "-------------------------<br>";

  return $Carry + $Item;
}



$nums = [10 , 20 , 30 , 100 , 5];


// first of allit will print the carry 
// the carry in the first iteration is 100 we typed 
// the item will be the 1st element of the array => 10
// we will print the sum of them in every iteration
// at the end it will give us the sum of the array + 100 ( initial ) 
echo array_reduce($nums , "sum" , 100); //265

//--------------------------------------------------------------------------------------

/*
-- so what is happening here:-
-- first of all we have 100 as initial value
-- that is our array [10 , 20 , 30 , 100 , 5]
-- in the first iteration the function do this
-- 100 + 10 = 120 (new initial value to the next iteration)

-  then our array will be [20 , 30 , 100 , 5]
-  then 120 + 20 = 140 (new initial value to the next iteration)

--  then our array will be [30 , 100 , 5]

--  and so on 
--  do the same on 30 & 100 & 5

--  I hope you understand, thank you :)
*/









?>