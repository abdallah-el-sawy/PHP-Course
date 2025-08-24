<?php
                                      /* Type Casting --> data types */


echo 5 + '5 lessons'; /* the output was 10 and warning to remove the waring we add (int) before the string */
echo '<br>';

echo 5 + (int) '5 lessons'; /* 10  also you can type it (int) or (integer) */
echo '<br>';

echo 10 + 15.5; /* 25.5 float */
echo '<br>';

echo 10 + (integer) 15.5; /* 25 integer */
echo '<br>';

echo gettype(10 + (integer) 15.5); // integer
echo '<br>';

echo 10.5 + 10.5; // 21 datatype: float  
echo '<br>';

echo (int) 10.5 + (int) 10.5; //20 datatype : integer 
echo '<br>';

echo (int) (10.5 + 10.5); // 21 datatype: integer
echo '<br>';
?>