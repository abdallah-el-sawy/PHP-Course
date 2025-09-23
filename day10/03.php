<?php

/*

    -- Cookies
    --- Practice

*/

if(isset($_COOKIE["background"]))
  {
      echo "<style>body { background-color: " . $_COOKIE["background"]  . "}</style>";
  }

if($_SERVER["REQUEST_METHOD"] == "POST")
  {
    setcookie("background" ,$_POST["bg-color"] , strtotime("+1 month"));
    header("Location: " . $_SERVER["REQUEST_URI"] );
    exit();
  }  


?>


<form method="POST" action="">
  <input type="color" name="bg-color">
  <input type="submit" value="Choose Color">
</form>