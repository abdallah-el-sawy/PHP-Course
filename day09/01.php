<?php

/*

  - Date And Time Functions

    - date_default_timezone_get()

    - date_default_timezone_set(Timezone[Reuqired])

    - date_create(Date/Time[Optional] , Timezone[Optional])
      -> Time/Date String || Current Time If NULL
      -> Timezone: Timezone String || Current Timezone


    - timezone_open(Timezone)
      -> Create New Timezone Object

    - checkdate(M, D , Y) => All Reuqired
      -> Validate A Gregorian Date

-------------------------

- Will Cover Later:-
    - date()
    - date_format()

*/

// Get Timezone
echo date_default_timezone_get() . "<br>"; //Europe/Berlin

// Print Date and Time
// year-month-day hour:minute:second
echo date("Y-m-d H:i:s") ."<br>";

// Change Timezone
date_default_timezone_set("Africa/Cairo");

// Print Date And Time again
echo date("Y-m-d H:i:s") ."<br>";

// Get Timezone again
echo date_default_timezone_get() . "<br>"; //Africa/Cairo

// Create Date Object
$d = date_create("" , timezone_open("Indian/Antananarivo"));
echo "<br>";

// Date Format
echo date_format($d , "Y-m-d h:i:s") . "<br>";

// Check Date
echo var_dump(checkdate(3 , 4 ,1989)) . "<br>"; //bool(true)

echo var_dump(checkdate(20 , 4 ,2000)) . "<br>"; //bool(false)

echo var_dump(checkdate(3 , 32 ,2001)) . "<br>"; //bool(false)

echo var_dump(checkdate(3 , 20 ,-600)) . "<br>"; //bool(false)

?>

