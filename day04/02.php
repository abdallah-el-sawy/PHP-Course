<?php
/* functions more examples */


function say_hello_to($someone , $lastname)  //$someone here is called parameter
{
  echo "Hello , $someone $lastname<br>";
}

say_hello_to("Abdallah" , "Elsawy"); // abdallah here is called argument
say_hello_to("Ahmed" , "Elkholy");
echo '<hr>';

function deep_freezer($item)
{
  if($item === "Water")
  {
    echo "Make it Ice<br>";
  }
  elseif($item === "Coca Cola")
  {
    echo "Make It Cold<br>";
  }
  elseif($item === "Fruits")
  {
    echo "Make It Fresh <br>";
  }
  else
  {
    echo "Unknown item<br>";
  }
}

deep_freezer("Water");
deep_freezer("Coca Cola");
deep_freezer("Fruits");
deep_freezer("TV Remote");





?>