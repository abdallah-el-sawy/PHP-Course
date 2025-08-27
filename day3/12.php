<?php
/*
== Break, Continue ==

- Break ends execution of (for , foreach , while , do while or switch)
- skip current iteration
*/

$countries = ["EG" , "KSA" , "QA" , "SY" , "USA" , "UK"];

foreach  ($countries as $country)
{ 

  // i want to print all the array till "SY" i don't want to print usa and uk so we put the condition before the print code
  
    if ($country == "USA")
    {
      break;
    }

  echo "$country <br>";

}

echo '<hr>';


foreach  ($countries as $country)
{ 

  // i want to print all countries except USA so we use continue to skip this iteration
    if ($country == "USA")
    {
      continue;
    }

  echo "$country <br>";

}

echo '<hr>';








?>