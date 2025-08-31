<?php
/*

== String Functions - Part 9 

-> strstr(String[Required] , Search[Required] , Before_Search[Optional] = False)
    -> Alias [strchr]
    -> Case Sensitive

-> stristr(String[Required] , Search[Required] , Before_Search[Optional] = False )
    -> Case InSensitive

->number_format(Number[Required] , Decimals[Optional] , Decimal_String[Optional] , Separator[Optional])

*/

//---------------------------------------------------------------------------------------------

// strstr function is case sensitive

// here it returns the searched string "needle" and the rest of the string after it
echo strstr("Abdallah" , "d") . "<br>"; // dallah

// The True is before_search here it will returns the whole string before the searched string
echo strstr("Abdallah" , "d" ,True) . "<br>"; // Ab

//---------------------------

// stristr function is case insensitive

// i made the "d" capital "D" in the needle and it returns the same output
echo stristr("Abdallah" , "D") . "<br>"; // dallah
echo stristr("Abdallah" , "D" ,True) . "<br>"; // Ab
echo "<hr>";

//---------------------------------------------------------------------------------------------

//note
// if we are trying to type a many zeros number like 10.000.000 
// there is a syntax called "Syntactic Sugar" you can put underscore "_" and output will be the same

echo 10_000_000 . "<br>"; //10000000

//-----------------------------------

echo number_format(10000000.51676) . "<br>"; // 10,000,000

// here the 3 is the number of decimals number after the dot separator
echo number_format(10000000.51676 , 3) . "<br>"; // 10,000,000.516

// you can change the dot separator if you wanted 
echo number_format(10000000.51676 , 3 , "@") . "<br>"; // 10,000,000@516

//  you also can change the comma "," separator between numbers
echo number_format(10000000.51676 , 3, "." ,"#" ) . "<br>"; // 10#000#000.516

//---------------------------------------------------------------------------------------------
?>