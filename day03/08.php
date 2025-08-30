<?php

/*
While Loop And Concept Of Loop

syntax
while(condition)
{
 // if the condition is true run the block of code of while
}

*/

$i = 1;

while($i <= 5)
{

  echo "$i <br>";
  $i++; // for the increment if we didn't do this it will be infinite loop 

}

echo '<hr>';

//another syntax

$a = 1;

while($a <= 5):
  
  echo "$a <br>";
  $a++; // for the increment if we didn't do this it will be infinite loop 

endwhile;




?>