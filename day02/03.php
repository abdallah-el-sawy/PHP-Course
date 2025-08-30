<?php
/* introduction to constants  */

/**
 * 
 * That value can't change during the execution 
 * Constants always uppercase 
 * 
 */

define("DB_NAME" , "Elsawy" , False); /* here the case_insensitive if we make it true php no longer support that so we making it flase */
define("MAIN_NUMEBR" , 5, False);
// define("MAIN_NUMEBR" , 5, False); /* here i tried to repeat the constant again but there is a warning appears that says MAIN_NUMBER is already defined */
echo DB_NAME; //Elsawy
echo '<br>';

echo MAIN_NUMEBR * 50; // 250
echo '<br>';









?>