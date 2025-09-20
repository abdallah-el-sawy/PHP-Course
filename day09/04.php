<?php

/*

  - Date And Time Functions

    -- time()
      -> Unix Timestamp => Seconds Since 01 jan 1970

    -- getdate()

    -- date_parse() => output the details of the date and errors if they are Found

*/
date_default_timezone_set("Africa/Cairo");


echo time() . "<br>";

echo time() / 60 . " Minutes<br>";
echo time() / 60 / 60 . " Hours<br>";
echo time() / 60 / 60 / 24 . " Days<br>";
echo time() / 60 / 60 / 24 / 365 . " Years<br>";


echo "<pre>";
print_r(getdate());
echo "</pre>"; 

$t = getdate();
echo $t["weekday"] . "<br>";


echo "<pre>";
print_r(date_parse("1985-2-20 14:25:30"));
echo "</pre>"; 

echo "<pre>";
print_r(date_parse("1985-2-20 145:25:30")); // error here
echo "</pre>"; 

echo "<pre>";
print_r(date_parse("1985-2-20 145:25:30 UTCC")); // error here
echo "</pre>"; 

echo "<pre>";
print_r(date_parse("1985-2-20 5:25:30 UTC")); 
echo "</pre>"; 

?>