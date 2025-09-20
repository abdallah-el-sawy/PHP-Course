<?php

/*

  - Date And Time Functions

    - date_diff()
    - strtotime(DateTime , Base)

*/

date_default_timezone_set("Africa/Cairo");

$register = date_create("2023-05-10");
$now = date_create("now");

$diff = date_diff($register , $now);

echo "<pre>";
print_r($diff); // returns array of the diff period details
echo "</pre>";

echo "You Are A Member For " . $diff->days . " Days" . "<br>";

echo date("Y-m-d H:i:s" , strtotime("next friday")) . "<br>";

echo date("Y-m-d H:i:s" , strtotime("+1 year")) . "<br>";

echo date("Y-m-d H:i:s" , strtotime("+1 year +5 months +9 days +3 hours +40 minutes +30 seconds " , strtotime("01-01-2006"))) . "<br>";










?>