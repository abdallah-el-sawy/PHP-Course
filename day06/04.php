<?php
/* 
== Array Functions Part 2

-> array_reverse(Array[Required] , Preserve[Optional])
    -> reverse array elements

-> array_flip(Array[Required])
    -> Exchange keys with its values

-> count(Array[Required] , Mode[Optional]) 
    -> conut array elements
    -> mode
        0 => Default => Doesn't Count elements of multidimentional arrays 
        1 => Count elements of multidimentional arrays 

-> in_array(Search[Required] , Array[Required] , Type[optional])
    -> checks if a value exists in an array

-> array_key_exsists(Key[Required] , Array[Required])
    -> Check if the key is exists

 */

//------------------------------------------------------------------------------------

$family = ["Abdallah" , "Mohamed" , "Esmail" , "Elsawy" , ["Hana" , "Mona"]];

//normal print
echo "<pre>";
print_r($family);
echo "</pre>";

//reversed print with changes in indexs
echo "<pre>";
print_r(array_reverse($family));
echo "</pre>";

//Reverse printing while preserving the indexes
echo "<pre>";
print_r(array_reverse($family, True));
echo "</pre>";

//------------------------------------------------------------------------------------

$countries = ["KSA" => "Saudi Arabia" , "EGY" => "Egypt" , "USA" => "United States" ,"Uk" => "United Kingdom"];

// Exchange keys with its values
echo "<pre>";
print_r(array_flip($countries));
echo "</pre>";

//------------------------------------------------------------------------------------

$count = ["A" , "B" , "C" , [1 , 2 , 3]];

//mode here is 0 as a default value does not count the nested array elements
// so it counted the whole nested array as 1 element
echo count($count) . "<br>"; // 4

//it counts the elements of the array first so it's 4 
// it counts the nested array as elements then go inside
// there are 3 elements inside the nested array 
echo count($count , 1) . "<br>"; // 7

//------------------------------------------------------------------------------------

$value_exists = ["1" , 2 , 3 , 4];


// here it will return the true condition rather than the 1 in the array is string
// and the 1 is searched position in int
// here the type is false as default
if(in_array(1 , $value_exists))
{
  echo "The Element is Found" . "<br>"; //The Element is Found
}
else
{
  echo "The Element is not Found" . "<br>";
}

// here it will return the false condition
// now the type is checked
if(in_array(1 , $value_exists ,True))
{
  echo "The Element is Found" . "<br>";
}
else
{
  echo "The Element is not Found" . "<br>"; // The Element is not Found
}

//------------------------------------------------------------------------------------


$courses = [

  "PHP" => "100$" ,
  "Java Script" => "90$",
  "CPP" => "85$",
  "Python" => "80$"

];

if(array_key_exists("PHP" , $courses))
{
  echo "The course is Found and its Price is: " . $courses["PHP"] . "<br>"; //The course is Found and its Price is: 100$
}

else
{
  echo "The course is not Found";
}


if(array_key_exists("Java" , $courses))
{
  echo "The course is Found and its Price is: " . $courses["PHP"] . "<br>";
}

else
{
  echo "The course is not Found"; //The course is not Found
}

//------------------------------------------------------------------------------------


?>