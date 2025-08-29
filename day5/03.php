<?php
/*
-- String Functions - Part 2
-> implode(Separator[Optional] , Array[Required]) => join() is Alias  // here we can join all the array in one string and identify the separator you want between them
-> explode(Separator[Required] , String[Required] , Limit[Optional]) // here you give him string returns it as array we use print_r with that
-> str_shuffle(String[Required]) -> suffle the string
-> strrev(String[Required]) -> reverse string
-> trim(String[Required] , Charslist[Optional]) -> remove the spaces
-> trim(String[Required] , Charslist[Optional])
-> ltrim(String[Required] , Charslist[Optional])
-> rtrim(String[Required] , Charslist[Optional])
---------------------------

- space " "
- Tab \t
- New Line \n
- Carriage Return \r
- Vertical Tab "\x08"
- Null "\0"

*/
//-------------------------------------------------------------------------------------------------------------------

$friends = ["Abdallah" , "Nofal" , "Ahmed" , "Abdelrahman" , "Elsawy"];

echo implode(" " , $friends) . "<br>"; // Abdallah Nofal Ahmed Abdelrahman Elsawy
echo implode(" , " , $friends) . "<br>"; // Abdallah , Nofal , Ahmed , Abdelrahman , Elsawy
echo implode("/" , $friends) . "<br>"; // Abdallah/Nofal/Ahmed/Abdelrahman/Elsawy
echo implode($friends) . "<br>"; // AbdallahNofalAhmedAbdelrahmanElsawy

//-------------------------------------------------------------------------------------------------------------------

$str = "Abdallah Elsawy Esmail Mohamed Elbedawy";

echo "<pre>";
print_r(explode(" " , $str));
echo "</pre>";

// now Abdallah Elsawy Esmail this will be the 1st index  and ohamed Elbedawy will be the second index
echo "<pre>";
print_r(explode("M" , $str)); 
echo "</pre>";

// here we will use the limit 
echo "<pre>";
print_r(explode(" " , $str , 0)); // here it will return the whole string as 1 index[0] 
echo "</pre>";

// he dealt with it normally as the space is the default separator
echo "<pre>";
print_r(explode(" " , $str , 2)); 
echo "</pre>";

// here it will remove the last 2 words and only returns the first 3 characters
echo "<pre>";
print_r(explode(" " , $str , -2)); 
echo "</pre>";


//-------------------------------------------------------------------------------------------------------------------

echo str_shuffle("Abdallah") . "<br>";
echo strrev("Abdallah") . "<br>"; // reverse the string

//-------------------------------------------------------------------------------------------------------------------

// trim

echo strlen("   abdallah   ") . "<br>"; // 14
echo strlen(trim("   abdallah   ")) . "<br>"; //8
echo trim("#abdallah###" , "#") . "<br>"; //abdallah , this # is a character list you can type many characters and will be removed
echo trim("@@@@#abdallah###@@@@@@" , "#@") . "<br>"; //abdallah
echo trim("@@@@#abdallah###@@@@@@" , "@") . "<br>"; //#abdallah###
echo trim("@@@@#abdallah###@@@@@@" , "#") . "<br>"; //@@@@#abdallah###@@@@@@ // it won't remove anything because it removes from sides only

// now the right trim and left are the same but from one side

echo ltrim("@@@@#abdallah###@@@@@@" , "#@") . "<br>"; //abdallah###@@@@@@
echo rtrim("@@@@#abdallah###@@@@@@" , "#@") . "<br>"; //@@@@#abdallah

//-------------------------------------------------------------------------------------------------------------------
?>