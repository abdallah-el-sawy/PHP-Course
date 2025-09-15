<?php
/*

== Filter Functions

      FILTER_SANITIZE_EMAIL
        -> Remove all but letters + digits + !#$%&'*+-=?^_`{|}~@.[]

      FILTER_SANITIZE_NUMBER_INT
        -> Remove all but degits , + , -

      FILTER_SANITIZE_NUMBER_FLOAT
        -> Remove all but degits , + , -    and optionally [. , eE]
        -> flags => FILTER_FLAG_ALLOW_THOUSAND
        -> flags => FILTER_FLAG_ALLOW_FRACTION

      FILTER_SANITIZE_URL
        -> Remove all but letters + digits + !#$%&'*+-=?^_`{|}~@.[]  

*/

//---------------------------------------------------------------------------------------------

$email = "abdallahelsawy                                   @gmail.com";

var_dump(filter_var($email , FILTER_SANITIZE_EMAIL)); 
echo "<br>";

//---------------------------------------------------------------------------------------------

$int = "100";
$int2 = "100 + !@!##!$@$%@!%%^!#^@^#%@$#%^@^#%^&!#^ 100";

var_dump(filter_var($int , FILTER_SANITIZE_NUMBER_INT)); 
echo "<br>";

var_dump(filter_var($int2 , FILTER_SANITIZE_NUMBER_INT)); //string(7) "100+100"
echo "<br>";


//---------------------------------------------------------------------------------------------

$float = "100.50";
$float2 = "1,950,320,360.6954";

var_dump(filter_var($float , FILTER_SANITIZE_NUMBER_FLOAT)); //string(5) "10050"
echo "<br>";

var_dump(
  filter_var($float2 ,
  FILTER_SANITIZE_NUMBER_FLOAT,
["flags" => FILTER_FLAG_ALLOW_THOUSAND | FILTER_FLAG_ALLOW_FRACTION]
)); //string(5) "10050"
echo "<br>";


//---------------------------------------------------------------------------------------------


$url = "https://github.com/abdallah-el-sawy/PHP-Course";

var_dump(filter_var($url , FILTER_SANITIZE_URL)); 
echo "<br>";

//---------------------------------------------------------------------------------------------




?>