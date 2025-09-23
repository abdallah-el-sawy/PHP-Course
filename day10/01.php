<?php

/*
  -- Cookies

      -- Examples
      --- Popup    
      --- Custom Settings    
      --- Remember me => Login


      -- setcookie(Name[Required] , Value , Expire , Path , Domain , Secure , HTTP_Only)
      --- Name
      --- Value
      --- Expire
      --- Path
      --- Domain
      --- Secure
      --- HTTP_Only

      -- The setcookie() function in PHP is used to store a small piece of information (a cookie) in the user’s browser.
      --- This cookie can be used later to remember the user, save preferences, or track sessions.

      -- Important
      --- Don't Store Sensitve Information
      --- Not Everything Saved TO Cookies

      * search on infinite cookie *

*/

// time() => gives me the current time in seconds so i did some divisions to make it a month
// here if we type just "/" in path that means that cookie will be seen in every dir on my local host
setcookie("style" , "dark" , time() + 60 * 60 * 24 * 30 , "/"); 
setcookie("popup" , "done" , strtotime("+1 month")); 

echo "<pre>";
print_r($_COOKIE);
echo "</pre>";

echo $_COOKIE["style"] . "<br>"; // dark

/* Note 
--- If we Created A New Dir Inside day10 And give it echo $_COOKIE["style"] it will see the cookie
---- cause the cookie can be seen by all sub dir
*/ 

?>