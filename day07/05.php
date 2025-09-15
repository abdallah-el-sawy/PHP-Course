<?php
/*

== Filter Functions
    
    -> filter_list()
      -> Return a list of all supported filters

    -> filter_id(Filter_Name[Required])
    
    -> filter_var(Value[Required] , Filter[Optional] , Options[Optional])
      -> Filters a variable with a specified filter


*/

echo "<pre>";
print_r(filter_list());
echo "</pre>";

echo filter_id("boolean") . "<br>"; // 258

$val = True; //     True || 1 || Yes || "on"


//here we can type the filter id instead of the filter so we can replace "FILTER_VALIDATE_BOOL" with 258 
if (filter_var($val , FILTER_VALIDATE_BOOL))
{
  echo "This is True";
}
else
{
  echo "This is false";
}

?>