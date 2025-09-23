<?php

/*
    -- Cookies
    --- Modify
    --- Delete
    --- Add Array

*/

// if we want to modify on a cookie simply edit the value here i change the value from dark to light
// if we want to delete a cookie just make it run out time 

setcookie("style[color]" , "red");
setcookie("style[font]" , "Tahoma");
setcookie("style[layout]" , "boxed");


echo "<pre>";
print_r($_COOKIE);
echo "</pre>";

if (isset($_COOKIE["style"])) {
  echo $_COOKIE["style"]["color"] . "<br>"; // red
  echo $_COOKIE["style"]["layout"] . "<br>"; // boxed
}



?>