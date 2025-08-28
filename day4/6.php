<?php

/* 
-> Function Training
-> Unpacking Arguments


==search:-
-> PHP variadic Functions
-> splat operator


note : ... three dots job is unpacking array elements so if we have array ["Abdallah" , "Ahmed" , "Elsawy"]
and we typed it like ...["Abdallah" , "Ahmed" , "Elsawy"] it unpacks the array to "Abdallah" , "Ahmed" , "Elsawy"

*/

//-------------------------------------------------------------------------------------------

function get_data($name , $country = "Private" , ...$skills)
{
echo "Hello $name, Your country is $country <br>";

foreach($skills as $skill):

  echo "-- $skill <br>";

endforeach;  
}
// you can type many skill all will be stored in skills 
get_data("Abdallah" ,"Egypt","html" , "css");

echo '<hr>';

//-------------------------------------------------------------------------------------------


// ... unpacking array 
$group_of_skills = ["HTML" , "CSS" , "JS" , "PHP"];

function un_pack($name , $country = "Private" , ...$skills)
{
echo "Hello $name, Your country is $country <br>";

foreach($skills as $skill):

  echo "-- $skill <br>";

endforeach;  
}
// you can type many skill all will be stored in skills 
un_pack("Abdallah" ,"Egypt" , ...$group_of_skills);
echo '<hr>';
un_pack("Abdallah" ,"Egypt" , ...["HTML" , "CSS" , "JS" , "PHP"]);


//-------------------------------------------------------------------------------------------

?>