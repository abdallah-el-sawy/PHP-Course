<?php

// here the counter will be shown here but +1 
// if we were like 4 views after click the link it will be 5
// cause it counts as a view

/*
-- note
--- if we commented the If the counter will be shown as the previous page 
---- and when refresh the counter won't increase 

*/
session_start();

$_SESSION['Name'] = "Abdallah";

if(isset($_SESSION['views']))
  {
      $_SESSION['views']++;
  }
  else
  {
      $_SESSION['views'] = 1;
  }

  echo "Hello " . $_SESSION['Name'] . ", The View Count: " . $_SESSION['views'] . "<br>";


?>