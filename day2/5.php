<?php

/*
*Arithmetic Operators*

*Operators ->  Used to perform operations on values

*Arithmetic Operators
+      -> addtion
-      -> Subtration
*       -> Multiplication
/      -> division
%      -> modulus
**     -> Exponentiation
+      -> addtion
+ $a   -> Identity
- $a   -> Negation

*/
//---------------------------------------
//addtion


echo 10 + 20; // 30
echo '<br>';
echo gettype( 10 + 20); // integer
echo '<br>';

echo 9.5 + 20.5; // 30
echo '<br>';
echo gettype( 9.5 + 20.5); // double
echo '<br>';

echo '<hr>';
//---------------------------------------
//Subtration

echo 10 - 20; // -10
echo '<br>';
echo gettype( 10 - 20); // integer
echo '<br>';

echo 9.5 - 20.5; // -11
echo '<br>';
echo gettype( 9.5 - 20.5); // double
echo '<br>';

echo '<hr>';

//---------------------------------------
//Multiplication

echo 10 * 20; // -200
echo '<br>';
echo gettype( 10 * 20); // integer
echo '<br>';

echo 9.5 * 20.5; // 194.75
echo '<br>';
echo gettype( 9.5 * 20.5); // double
echo '<br>';

echo '<hr>';

//---------------------------------------
//Division


echo 20 / 10; // 2
echo '<br>';
echo gettype( 20 / 10); // integer
echo '<br>';

echo 20 / 8; // 2.5
echo '<br>';
echo gettype( 20 / 8); // double
echo '<br>';

echo '<hr>';

//---------------------------------------
//Modulus

/* note: the type of the number in the division depends on the output of the division if the number is int so it's integer same to float */

echo 20 % 10; // the modulus is the remaining of the division here it will be 0 20 / 10 is 2 no remaining 
echo '<br>';

echo 22 % 10; // 2 
echo '<br>';

echo '<hr>';

//---------------------------------------
//Exponentiation

echo 2 ** 4; // 2^4 = 16 
echo '<br>';

echo 2 * 2 * 2 * 2; //16   /* same as 2 ** 4 */
echo '<br>';

echo '<hr>';


//----------------------
/*Identity*/

echo "100";
echo '<br>';
echo gettype("100"); // string
echo '<br>';

echo +"100";
echo '<br>';
echo gettype(+"100"); // integer
echo '<br>';

/* note this works only if the string contains numeric values */

echo '<hr>';
//----------------------
/*Negation*/


echo "100";
echo '<br>';
echo gettype("-100"); // string
echo '<br>';

echo -"100";
echo '<br>';
echo gettype(-"-100"); // integer  --> - -100 is 100 the opposite of the number if it's positive makes it negative ...
echo '<br>';


/* note this works only if the string contains numeric values */






?>