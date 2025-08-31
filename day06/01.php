<?php
/*
==String Functions - Part 8

-> wordwrap(String[Required] , Width[Optional = 75] , Break_Char[Optional = "\n"] , Cut_Long[Optional = False])
-> ord(String[Required])
-> chr(Int[Required])
-> Similar_text(String_One[Required] , String_Two[Required] , Percent[Optional])
    --> returns the number of matching characters

*/
//-------------------------------------------------------------------------------------

$str = "Hello , I'm Abdallah Elsawy Esmail Very_Very_Very_long_word";


// the 8 is the width in each line the default is 75 
// the "br" is the break the default here is "\n" 
// True is cut the very long word based on the width you wrote
echo wordwrap($str , 8 , "<br>" , True);
echo "<br>";
echo "<hr>";

//-------------------------------------------------------------------------------------

// each char has a numeric value in "Ascii code" you can search on it
echo ord('a'); // 97 
echo "<br>";

// also you can give a number a wait for a char , The opposite of above
echo chr(97); //a
echo "<br>";
echo "<hr>";

//-------------------------------------------------------------------------------------

//returns the number of matching chars
//you can save the matching percent between the 2 strings in a variable
echo similar_text("Abdallah" , "Abdallahh" ,$percent); //8 
echo "<br>";
echo "The matching percent between the two strings is: " . $percent; // 94.117647058824
echo "<br>";
echo "<hr>";

//-------------------------------------------------------------------------------------

?>