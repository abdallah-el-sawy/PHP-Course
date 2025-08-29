<?php
/*
== String Functions

-> str_replace(Find[Required] , ReplaceWith[Required] , Data[Required] , Replace Count[Optional])
      - it's case sensitive
-> str_ireplace(Find[Required] , ReplaceWith[Required] , Data[Required] , Replace Count[Optional])

 */

//--------------------------------------------------------------------------------------------------------------------------------

echo str_replace('@' , 'l' , "abda@@ah e@sawy e@bedawy" , $count) . "<br>"; //abdallah elsawy elbedawy

// count is the number of replaces

echo "The number of Replaces is: " . $count . "<br>"; 


//now i want to change many chars at the same time
echo str_replace(["@" , "#"] , 'l' , "e@saw# e@saw# e@saw#") . "<br>"; //elsawl elsawl elsawl

echo str_replace(["@" , "#"] , ["l" , "y"] , "e@saw# e@saw# e@saw#") . "<br>"; //elsawy elsawy elsawy


echo "<pre>";
print_r(str_replace("one" , 1 , ["one", "two" , "three" , "one" , "one"]));
echo "</pre>";

echo "<pre>";
print_r(str_replace(["one" , "two" , "three"] , [1 , 2 , 3] , ["one", "two" , "three" , "one" , "one"]));
echo "</pre>";

// if we searched on elemnt and didn't replace it , it will appear as an empty string
echo "<pre>";
print_r(str_replace(["one" , "two" , "three"] , [1 , 2 ] , ["one", "two" , "three" , "one" , "one"]));
echo "</pre>";

//--------------------------------------------------------------------------------------------------------------------------------

// same but insensitve way

// it will replace all "one" or "ONE"
echo "<pre>";
print_r(str_ireplace("one" , 1 , ["ONE", "two" , "three" , "ONE" , "one"]));
echo "</pre>";


?>