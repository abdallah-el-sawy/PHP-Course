<?php

/* Data types ->  Type juggling + automatic type conversation */

/* php doesn't need to identify the data type or write it before u choose a variable */


echo 1 + '2'; /* int + string = 3 */
echo '<br>';

echo gettype(1 + '2'); // integer the data type retured is the data type of the OUTPUT '3' 
echo '<br>';

echo True; //1
echo '<br>';

echo True + True; //2 
echo '<br>';

echo gettype(True + True); // integer
echo '<br>';

echo 5 + '5 lessons'; // 10 + warning 
echo '<br>';

echo gettype(5 + '5 lessons'); // integer + warning
echo '<br>';

echo 10 + 15.5; // 25.5
echo '<br>';

echo gettype(10 + 15.5); // float or double
echo '<br>';

echo 10.5 + 10.5; //21
echo '<br>';

echo gettype(10.5 + 10.5); // double

//float + int - > float
// float + float - > float 


?>