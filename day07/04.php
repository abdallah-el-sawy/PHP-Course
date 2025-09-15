<?php

/*

== Math Function

-> sqrt(Number[Required])
  -> Square Root

-> min(array[Required]) || min(Values[Required])
  -> Find the lowest Value

-> max(array[Required]) || max(Values[Required])
  -> Find the Highest Value

*/

//---------------------------------------------

echo sqrt(16) . "<br>"; //4
echo sqrt(25) . "<br>"; //5
echo sqrt(100) . "<br>"; //10

echo "<hr>";
//---------------------------------------------

echo min(10 , 20 , 30 , -40 , -100) . "<br>"; // -100
echo min([10 , 20 , 30 , -40 , -100]) . "<br>"; // -100

// you can compare 2 arrays

// here it will compare 1 = 1 next 2<3 stop
// so it will print array index 0 => 1 index 1 => 3 index 2 => 5
echo "<pre>";
print_r(min([1 , 2 , 5] , [1 , 3 , 6]));
echo "</pre>";

echo "<hr>";

//---------------------------------------------


echo max(10 , 20 , 30 , -40 , -100) . "<br>"; // 30
echo max([10 , 20 , 30 , -40 , -100]). "<br>"; // 30

// you can compare 2 arrays

// here it will compare 1 = 1 next 2<3 stop
// so it will print array index 0 => 1 index 1 => 3 index 2 => 5
echo "<pre>";
print_r(max([1 , 2 , 5] , [1 , 3 , 6]));
echo "</pre>";

//---------------------------------------------

echo "<hr>";





?>