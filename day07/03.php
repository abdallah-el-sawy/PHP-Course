<?php

/*

== Math Function

-> round(Number[Required] , Precision[Optional] , Mode[Optional])
  -> Round Up to Integer 
  -> Mode
    -> PHP_ROUND_HALF_UP
    -> PHP_ROUND_HALF_DOWN
    -> PHP_ROUND_HALF_EVEN -> Round to the nearest even number
    -> PHP_ROUND_HALF_ODD  -> Round to the nearest odd number


-> ceil , floor , round => Return Double


*/

//---------------------------------------------------------

/* default  */
echo round(5.99) . "<br>" ; // 6
echo round(5.50) . "<br>" ; // 6
echo round(5.49) . "<br>" ; // 5
echo round(5.10) . "<br>" ; // 5

echo "<hr>";


//---------------------------------------------------------

/* Precision */

// numbers from 5 to 9 increases
// numbers from 0 to 4 Nothing changes

echo round(5.99 , 1) . "<br>" ; // 6
echo round(5.95 , 1) . "<br>" ; // 6
echo round(5.94 , 1) . "<br>" ; // 5.9
echo round(5.995 , 2) . "<br>" ; // 6
echo round(5.994 , 2) . "<br>" ; // 5.99

echo "<hr>";

//---------------------------------------------------------

/* Mode */
echo "--------------------------- <br>";
echo round(5.99 , 0 , PHP_ROUND_HALF_UP) . "<br>" ; // 6
echo round(5.49 , 0 , PHP_ROUND_HALF_UP) . "<br>" ; // 5

echo "--------------------------- <br>";
//---------------------------
echo round(5.50 , 0 , PHP_ROUND_HALF_DOWN) . "<br>" ; // 5
echo round(5.55 , 0 , PHP_ROUND_HALF_DOWN) . "<br>" ; // 6

echo "--------------------------- <br>";
//---------------------------
echo round(5.50 , 0 , PHP_ROUND_HALF_EVEN) . "<br>" ; // 6
echo round(4.50 , 0 , PHP_ROUND_HALF_EVEN) . "<br>" ; // 4

echo "--------------------------- <br>";
//---------------------------
echo round(5.50 , 0 , PHP_ROUND_HALF_ODD) . "<br>" ; // 5
echo round(4.50 , 0 , PHP_ROUND_HALF_ODD) . "<br>" ; // 5

echo "--------------------------- <br>";
echo "<hr>";

//---------------------------------------------------------

?>