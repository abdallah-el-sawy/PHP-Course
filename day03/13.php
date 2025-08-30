<?php
/* Include And Require
== including code from another page

both include and require do the same thing 
the difference between them
-> if we use include and the page is not found or its name is incorrect it continue in exection but require don't just give you a fatal error

->we can use include_once() for including 1 time so we prevent Interference


*/
include("test.php");//$a = 10;

echo "$a <br>"; //10

$a = 20;


include("test.php");

echo "$a <br>"; // 10

echo '<hr>';

include_once("test.php");//$a = 10;

echo "$a <br>"; //10

$a = 20;


include_once("test.php");

echo "$a <br>"; // 20



// fatal error wrong in require

// require("tests.php");//$a = 10;

// echo "$a <br>";
// echo "Continue <br>";











?>