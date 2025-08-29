<?php
/* 
String Functions - Part 3

-> chunk_split(String[Required] , Length[Optional] , End[Optional]) => Split the string according to the length and the dafault separator is space
-> strlen(String[Required]) => remeber
-> str_split(String[Required], Length[Optional]) -> converts the string characters to array of elements
-> strip_tags(String[Required] , Allowed[Optional]) -> remove html tags
-> nl2br(String[Required] , XHTML[Optional]) => remember


*/

//----------------------------------------------------------------------------------

echo chunk_split("Abdallah Elsawy Esmail" , 3) . "<br>"; //Abd all ah Els awy Es mai l
echo chunk_split("Abdallah Elsawy Esmail" , 3 , "/") . "<br>"; //Abd/all/ah /Els/awy/ Es/mai/l/
echo chunk_split("Abdallah Elsawy Esmail" ) . "<br>"; //Abdallah Elsawy Esmail

//----------------------------------------------------------------------------------

echo "<pre>";
print_r(str_split("Abdallah")) . "<br>"; // returns each char as element , we didn't choose the length
echo "</pre>";

echo "<pre>";
print_r(str_split("Abdallah" , 2)) . "<br>"; // now the each index in the array will contain 2 chars 

//----------------------------------------------------------------------------------


echo "<h3> <b>Hello Abdallah Elaswy</b> </h3>";
echo strip_tags("<h3> <b>Hello Abdallah Elaswy</b> </h3>"); // it willremove the h3 and type it normal
echo strip_tags("<h3> <b>Hello Abdallah Elaswy</b> </h3>" , "<h3></h3>"); // now we made exception that says remove every tag but not the h3


//----------------------------------------------------------------------------------

echo nl2br("Abdallah\nElsawy\nEsmail") . '<br>'; // the default here for XHTML is true
echo '-------------------------------------<br>';
echo nl2br("Abdallah\nElsawy\nEsmail" , true) . '<br>'; // here it will add <br> with it's self closing tag
echo '-------------------------------------<br>';
echo nl2br("Abdallah\nElsawy\nEsmail" , false) . '<br>'; // here don't add self closing tag if you want to see the difference just run the file and right click then choose view page source

?>