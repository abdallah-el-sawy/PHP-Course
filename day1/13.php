<?php
                                /* Variable Variable */
/*  Variable Variable it take the value of the variable and make it a name of  a new variable  */

$name = "abdallah";
echo $name;
echo '<br>';

$$name = "Elsawy"; /* Here what we did i just make value of the $name a name of a new variable by adding $ before it*/
echo $$name; // this variable($$name) is called abdallah 
echo '<br>';
/* and you can also do it again with $$$ etc... */

// echo "Hello $$name" -> wrong if we wanted to print Elsawy
/* if we wrote $$name it won't print Elsawy what we need to do is put the $name inside the $ like that ${$name}  */

echo "Hello ${$name}";

?>