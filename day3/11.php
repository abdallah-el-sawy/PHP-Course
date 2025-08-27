<?php
/*  Loop Foreach 

==used to print array 

foreach($array as $value)
{
}


or if we had an array with key

foreach($array as key => $value)

*/


$countries = ["EG" , "KSA" , "QA" , "SY"];

echo '<pre>';
print_r($countries);
echo '</pre>';

echo '<hr>';

foreach($countries as $country)
{
  echo "$country <br>";
}

echo '<hr>';

$countries_with_discount = ["EG" => 50 , "KSA" => 30 , "QA" => 50 , "SY" => 70];

echo '<pre>';
print_r($countries_with_discount);
echo '</pre>';

echo '<hr>';

foreach($countries_with_discount as $country => $discount)
{
  echo "Country name is $country And Discount for this country is $discount <br>";
}

echo '<hr>';



//alternate syntax

foreach($countries_with_discount as $country => $discount):

  echo "Country name is $country And Discount for this country is $discount <br>";
  
endforeach;

echo '<hr>';


?>