<?php
/*
== Math Functions

-> abs(Number[Required])
    -> Absolute Value => Non Negative Value

-> mt_rand(min[Optional] , max[Optional]) || rand(min[Optional] , max[Optional])
    -> mt_getrandmax() => show largest possible random value
    -> generate random value via the mersenne twister random number generator algorithm

-> intdiv(dividend[Required] , divisor[Required])
    -> integer division
    -> intdiv vs "/"

-> fmod(dividend[Required] , divisor[Required])
    -> floating point remainder (modulo)
    -> fmod vs "%"


*/
//-------------------------------------------------------------------

//Absolute
echo abs(10) . "<br>";  // 10
echo abs(0) . "<br>";   // 0
echo abs(-10) . "<br>"; // 10

//-------------------------------------------------------------------

//random value

echo rand() . "<br>"; // random value from 0 to mt_getrandmax()

// you can get the max number you can reach from this function by

echo mt_getrandmax() . "<br>"; //2147483647

echo rand(10,30) . "<br>";

//-------------------------------------------------------------------

//integer division
echo 11 / 5 . "<br>"; //2.2
echo gettype(11 / 5) . "<br>"; //double

echo intdiv(11 ,5) . "<br>"; //2
echo gettype(intdiv(11 ,5)) . "<br>"; // integer

//-------------------------------------------------------------------

//floating point remainder (modulo)

echo 11.5 % 5 . "<br>"; // 1
echo gettype(11.5 % 5) . "<br>"; //integer

echo fmod(11.5 , 5) . "<br>"; // 1.5
echo gettype(fmod(11.5 , 5)) . "<br>"; //Float

//-------------------------------------------------------------------




?>