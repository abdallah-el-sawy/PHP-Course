<?php

/*
    -- Session
    --- Advanced Information
    --- Edit
    --- Views Count
*/

//before starting the session we can generate the key
//session_id("dsadasdasdasdasdas");

session_start();

// echo session_id() . "<br>";

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

  // now we have counter if we refresh the page the counter will increase
  // now we will use this session in another page

  echo "<a href= " . "about.php" . ">About Page</a>";
  
?>