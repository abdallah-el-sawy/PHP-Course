<?php
/*
== String Functions - Part 5 

-> parse_str(String[Required] , Array[Required])
-> quotemeta(String[Required])
-> str_pad(String[Required] , Length[Required] , String[Optional] , Pad Flag[Optional])
  -> STR_PAD_BOTH
  -> STR_PAD_LEFT
  -> STR_PAD_RIGHT
->strtr(String[Required] , From[Required] , To[Required]) || strtr(String[Required] , Array[Required])


*/

//-------------------------------------------------------------------------------------------

parse_str("name=abdallah & email=abdallah@gmail.com & os=windows" , $query);

echo "<pre>";
print_r($query);
echo "</pre>";

echo $query["name"] . "<br>";
echo $query["email"] . "<br>";
echo $query["os"] . "<br>";

//-------------------------------------------------------------------------------------------

echo "Hello [] () * + . <br>"; //Hello [] () * + .
echo quotemeta("Hello [] () * + . <br>"); // Hello \[\] \(\) \* \+ \.     scaping chars

//-------------------------------------------------------------------------------------------

//here if we have numbers like 12 , 122 , 1222 , 12222 i want them all to be the same length we use:

// the default here it will add space   
echo str_pad("12" , 5) . "<br>";
echo str_pad("122" , 5) . "<br>";
echo str_pad("1222" , 5) . "<br>";
echo str_pad("12222" , 5) . "<br>";

echo "<hr>";

echo str_pad("12" , 5 , 0) . "<br>";
echo str_pad("122" , 5 , 0) . "<br>";
echo str_pad("1222" , 5 , 0) . "<br>";
echo str_pad("12222" , 5, 0) . "<br>";

echo "<hr>";

echo str_pad("12" , 5 , 0 ,STR_PAD_BOTH) . "<br>"; // IT WILL add 0 on the left and right 2 left 3 right
echo str_pad("122" , 5 , 0 , STR_PAD_LEFT) . "<br>"; // IT WILL add 0 on the left 
echo str_pad("1222" , 5 , 0 , STR_PAD_RIGHT) . "<br>"; // IT WILL add 0 ON THE right


//-------------------------------------------------------------------------------------------

//translate string chars
echo strtr("abda@@ah e@sawy esmai@" ,"@" , "l") . "<br>"; //abdallah elsawy esmail

//---------------
$translation = [
    "@" => "l",
    "#" => "y"
];

echo strtr("e@saw# e@saw# e@saw#" ,$translation) . "<br>"; // elsawy elsawy elsawy









?>