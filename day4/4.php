<?php
/*
== Function Default Parameter Value
*/

function get_data($country  = "Private Country" , $name  = "Unknown Person" , $age  = "Private" , $address = "Private Address") //$address = "Private Address" we signed a default value if the user didn't enter any thing
{
  $line1 = "Your Country is $country And Your name is $name<br>";
  $line2 = "Your Age is $age And you Live in $address<br>";

  return $line1 . $line2;
}


echo get_data("Egypt" , "Abdallah" ,20 ,"Tanta");

echo '<hr>';
// if i wanted to just add my age just my age
echo get_data(age : 20 );










?>