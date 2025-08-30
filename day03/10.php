<?php

/* == Loop For

for(init; condition; increment or decrement)
{
  // block of code
}


-Expression one run once at the first of the loop
-in the begining of iteration expression two is checked [if true continue || break]
-at the end of iteration expression three are executed

*/


for($i = 1; $i <= 5; $i++)
{
  echo "$i<br>";
}

echo '<hr>';
//alternate syntax

$index = 1;

for(;;):

  if($index == 6)
  {
    break;
  }

  echo "$index<br>";
  $index++;
endfor;






?>