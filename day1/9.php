<?php
 /* Heredoc and Nowdoc */

$name = "abdallah elsawy"; // ignore it for now 

//Heredoc --> skip with analyzing 
echo <<< "Here"
Hello PHP
on multiple
lines
\\\\ *********** $$$$$$$$$$ 
my name is : $name
Here;
echo '<br>';

//Nowdoc --> skip without analyzing
echo <<< 'Now'
Hello PHP
on multiple
lines
\\\\ *********** $$$$$$$$$$ 
my name is : $name
Now;
echo '<br>';
?>