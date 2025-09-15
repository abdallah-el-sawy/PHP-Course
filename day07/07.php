<?php
/*

== Filter Functions

    -> filter_var(Value[Required] , Filter[Optional] , Options[Optional])
      -> Validate Filters

    
    -> FILTER_VALIDATE_EMAIL
      => flag -> FILTER_NULL_ON_FAILURE  

    -> FILTER_VALIDATE_INT
      => flag -> FILTER_NULL_ON_FAILURE  
      => options -> min_range
      => options -> max_range
      Convert to int on success

    -> FILTER_VALIDATE_FLOAT
      => flag -> FILTER_NULL_ON_FAILURE  
      => options -> min_range
      => options -> max_range
      Convert to Float on success


*/

//-------------------------------------------------------------------------------------------------------------------------

$email = "abdallahelsawy@gmail.com";

//WE USE THE FILTER - > if it's wrong output null
var_dump(filter_var($email, FILTER_VALIDATE_EMAIL , FILTER_NULL_ON_FAILURE)); //string(24) "abdallahelsawy@gmail.com"

//-------------------------------------------------------------------------------------------------------------------------

echo "<br>";

//-------------------------------------------------------------------------------------------------------------------------

$int = "100";

//WE USE THE FILTER - > if it's wrong output null
var_dump(filter_var($int, FILTER_VALIDATE_INT , FILTER_NULL_ON_FAILURE)); 
echo "<br>";


var_dump(filter_var($int,
              FILTER_VALIDATE_INT ,
    ["flags" => FILTER_NULL_ON_FAILURE , "options" => ["min_range" => 50 , "max_range" => 100]]

));
echo "<br>";




//-------------------------------------------------------------------------------------------------------------------------


$float = "100.6";

//WE USE THE FILTER - > if it's wrong output null
var_dump(filter_var($float, FILTER_VALIDATE_FLOAT , FILTER_NULL_ON_FAILURE)); 
echo "<br>";


var_dump(filter_var($float,
              FILTER_VALIDATE_FLOAT ,
    ["flags" => FILTER_NULL_ON_FAILURE , "options" => ["min_range" => 50.5 , "max_range" => 100.5]]

));



//-------------------------------------------------------------------------------------------------------------------------


?>