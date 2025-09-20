<?php

/*
  - Date And Time Functions

    - date_format()

    [Year]
    -  Y -> Four Digits
    -  y -> Two Digits
    
    [Month]
    -  m -> 01-12
    -  M -> Text Month => 3 Letters
    -  F -> Full Text
    -  t -> Number Of Days In This Month
    
    [Day]
    -  d -> Day Of The Month 1-31
    -  j -> Day Without Leading Zero
    -  D -> Text Day => 3 Letters
    -  l -> Full Text
    -  z -> Day Of The Year 0-365
    -  S -> st, rd, nth Suffix For Day Of The Month

    [Time]
    -  a -> Small am/pm
    -  A -> Capital AM/PM    

    [Hour]
    -  g -> 1-12
    -  G -> 0-23
    -  h -> 01-12
    -  H -> 00-23

    [Minutes , Seconds , Micro]
    -  i -> 00-59
    -  s -> 00-59
    -  u -> Microseconds

*/

//year
date_default_timezone_set("Africa/Cairo");

// $d = date_create("2025-10-01 15:5:3");
$d = date_create("");

echo date_format($d , "Y") . "<br>"; //2025
echo date_format($d , "y") . "<br>"; //25
echo "<br>";

// month
echo date_format($d , "Y-m") . "<br>"; //2025-09
echo date_format($d , "Y-M") . "<br>"; //2025-Sep
echo date_format($d , "Y-F") . "<br>"; //2025-September
echo date_format($d , "t") . "<br>"; //30
echo "<br>";

//day
echo date_format($d , "Y-m-d") . "<br>"; //2025-09-20 here will be 05
echo date_format($d , "Y-m-j") . "<br>"; //2025-09-20 here if it like we are 5 it will be just 5
echo date_format($d , "Y-m-D") . "<br>"; //2025-09-Sat
echo date_format($d , "Y-m-l") . "<br>"; //2025-09-Saturday
echo date_format($d , "Y-m-z") . "<br>"; //2025-09-262
echo date_format($d , "Y-m-S") . "<br>"; //2025-09-th
echo "<br>";

// Time
echo date_format($d , "Y-m-d g a") . "<br>"; // 2025-10-01 3 pm
echo date_format($d , "Y-m-d g A") . "<br>"; // 2025-10-01 3 PM
echo "<br>";

echo date_format($d , "Y-m-d h a") . "<br>"; // 2025-10-01 03 pm
echo date_format($d , "Y-m-d h A") . "<br>"; // 2025-10-01 03 PM
echo "<br>";

echo date_format($d , "Y-m-d G ") . "<br>"; // 2025-10-01 15 pm
echo date_format($d , "Y-m-d G ") . "<br>"; // 2025-10-01 15 PM
echo "<br>";

echo date_format($d , "Y-m-d H ") . "<br>"; // 2025-10-01 15 pm
echo date_format($d , "Y-m-d H ") . "<br>"; // 2025-10-01 15 PM
echo "<br>";

echo date_format($d , "Y/m/d H:i:s  u ") . "<br>"; // 2025/09/20 10:40:32 547869
echo "<br>";

?>