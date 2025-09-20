<?php

/*
  - Date And Time Functions

    - date_interval_create_from_date_string()
    - date_add() => add time
    - date_sub() => remove time
    - date_modify()

*/

date_default_timezone_set("Africa/Cairo");

$d = date_create();

// date_add($d ,"2 months");// error

// date_add($d , date_interval_create_from_date_string("2 months"));
// echo date_format($d , "Y/m/d H:i:s A") . "<br>";

// date_sub($d , date_interval_create_from_date_string("2 months"));
// echo date_format($d , "Y/m/d H:i:s A") . "<br>";

date_modify($d , "+2 months");
echo date_format($d , "Y/m/d H:i:s A") . "<br>";


?>