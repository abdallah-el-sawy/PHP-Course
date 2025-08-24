<?php
                                                              /* Variables */

/*
-Naming Rules + informaion
1) Starts with dollar sign ($)
2) Starts with a small [a-z] or CAPITAL[A-Z] or Underscore
3) You can use Numbers inside the name
4) no special character Allowed ($ , % , = , ...)
5) Variables are case sensitve 

* The difference between the single quotes and double quotes with variables
*/

/*    *note* 
    you should name the variable valuable name 
    name that we can know what this variable do 
    simply don't use rondom names or x , y etc..
*/

$username = "Abdallah Elsawy"; // this action is called Delare Variable 
echo $username;
echo '<br>';

/* Here what we did is just overriding  */
$username = "elsawy";
echo $username;
echo '<br>';

/* here the single quotes dealt with variable as string but the double dealt with it as variable  */
echo 'my name is $username';
echo '<br>';

echo "my name is $username";
echo '<br>';

?>