<?php
 /* Boolean + Converting to Boolean */


  var_dump((bool) ""); /* anything empty -> false */
  echo '<br>';

  var_dump((bool) array());  //false
  echo '<br>';

  var_dump((bool) []); // false
  echo '<br>';

  var_dump((bool) "Abdallah"); /* any word or any thing but not empty and 0 string is -> true */
  echo '<br>';

  var_dump((bool) "0"); // flase
  echo '<br>';

  var_dump((bool) array("abdallah" , "elsawy")); // true
  echo '<br>';

  var_dump((bool) ["abdallah" , "elsawy"]); // true
  echo '<br>';

  var_dump((bool) 100); // true
  echo '<br>';

  var_dump((bool) -100); // true
  echo '<br>';

  var_dump((bool) 100.5); // true
  echo '<br>';

  var_dump((bool) -100.5); // true

?>