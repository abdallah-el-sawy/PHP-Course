<?php

/* Function Introduction And DRY Concept */


echo "Hello, abdallah<br>";
echo "Hello, ahmed<br>";
echo "Hello ,abdelrahman<br>";

echo '<hr>';

// we are repeating this code we will make function that say hello 

function say_hello_to($someone)
{
  echo "Hello , $someone <br>";
}

// to use the function
say_hello_to("Abdallah");
say_hello_to("ahmed");
say_hello_to("abdelrahman");

/* we use function to not repeat code imagine you want to change something in hello sentece if you use echo
then u will change it many times but if you use function you wuill change it just in the function one time*/




?>