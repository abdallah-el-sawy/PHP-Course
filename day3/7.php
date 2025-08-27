<?php
/*
switch

Syntax:

switch(expression)
{
  case1: 
    //block of code
    break;

  case2: 
    //block of code
    break;

  case3: 
    //block of code
    break;


  Default:
    // Default block of code

}
*/

$day = "Friday";

switch ($day) {

  case 'Saturday':
    echo "Hello Today is Saturday , we are open from 8 : 16";
    break;
  case 'Sunday':
    echo "Hello Today is Sunday , we are open from 12 : 18";
    break;
  case 'Monday':
    echo "Hello Today is Monday , we are open from 8 : 12";
    break;
  case 'Tuesday':
    echo "Hello Today is Tuesday , we are open from 7 : 10";
    break;

  case 'Wednesday':
  case 'Thursday':
    echo "Hello Today is Thursday , we are open from 10 : 16"; /*Those 2 cases Wed & Thu have the same output so we mixed them together */
    break;

  case 'Friday':
    echo " We are not here on friday";
    break;

  
  default:
    echo "Unknown day";
    break;
}



?>