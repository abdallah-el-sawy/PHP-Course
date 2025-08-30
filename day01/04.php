<?php
                        /* Data types in PHP */

/*
1) bool => boolean (true or false)
2) int => integer numbers
3) float => floating point number or double (decimal numbers) -> 3.3
4) string
5) array
------ 
-> there are other types 

-> there is  a built in function called *** gettype();*** we will need it so save it 
from the name you pass any variable or a value to the function and it returns the type of it .
 */

//boolean
echo gettype(True); 
echo '<br>';

echo gettype(False);
echo '<br>';

//integer
echo gettype(100);
echo '<br>';

echo gettype(-200);
echo '<br>';

echo gettype(0);
echo '<br>';

//float or double
echo gettype(100.5);
echo '<br>';

echo gettype(-200.5);
echo '<br>';

//string
echo gettype('Abdallah Elsawy');
echo '<br>';

echo gettype("Abdallah ELsawy");
echo '<br>';

//array
echo gettype(array("EG" => "Egypt" , "KSA" => "Saudi Arabia"));
echo '<br>';

echo gettype(array("Egypt" , "Saudi Arabia"));
echo '<br>';

echo gettype(["Egypt" , "Saudi Arabia"]);
echo '<br>';





?>