<?php
/*

== Filter Functions

  filter_input(Type[Required] , Value[Required] , Filter[Optional] , Options[Optional])
    -> INPUT_GET
    -> INPUT_POST
    -> INPUT_COOKIE
    -> INPUT_SERVER
    -> INPUT_ENV

*/


echo filter_input(INPUT_GET , "num" , FILTER_VALIDATE_INT);
?>



<form action="" , method="GET">
  <input type="text" , name = "num">
  <input type="submit" , value = "send">
</form>