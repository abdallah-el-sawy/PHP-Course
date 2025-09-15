<?php

/*
== Filter Functions

    -> filter_var(Value[Required] , Filter[Optional] , Options[Optional])
      -> Validate Filters


    -> FILTER_VALIDATE_BOOL => True || 1 || Yes || "on"
      -> Flag => FILTER_NULL_ON_FAILURE => False for [False , 0 , No , off , ""]

    -> FILTER_VALIDATE_URL
      -> Flag => FILTER_NULL_ON_FAILURE
      -> Flag => FILTER_FLAG_PATH_REQUIRED
      -> Flag => FILTER_FLAG_QUERY_REQUIRED


    -> FILTER_VALIDATE_IP
      -> Flag => FILTER_NULL_ON_FAILURE
      -> Flag => FILTER_FLAG_IPV4
      -> Flag => FILTER_FLAG_IPV6

    
    -> FILTER_VALIDATE_MAC
      -> Flag => FILTER_NULL_ON_FAILURE

*/
//---------------------------------------------------------------------------------------------------------------------------

$bool = True; // True                   // [True || 1 || Yes || "on"]
$x = False;  // False                   // [False , 0 , No , off , ""]
$y = "Abdallah"; // not true not false 

var_dump(filter_var($bool , FILTER_VALIDATE_BOOL , FILTER_NULL_ON_FAILURE)); // true
echo "<br>";

var_dump(filter_var($x , FILTER_VALIDATE_BOOL , FILTER_NULL_ON_FAILURE)); // false
echo "<br>";

var_dump(filter_var($y , FILTER_VALIDATE_BOOL , FILTER_NULL_ON_FAILURE)); // NULL
echo "<br>";

//---------------------------------------------------------------------------------------------------------------------------

$url = "https://github.com/abdallah-el-sawy";
$ur = "fddasdasdasdas";
$u = "https://github.com/abdallah-el-sawy/?id=100";

var_dump(filter_var($url , FILTER_VALIDATE_URL , FILTER_NULL_ON_FAILURE)); // string(35) "https://github.com/abdallah-el-sawy"
echo "<br>";

var_dump(filter_var($ur , FILTER_VALIDATE_URL , FILTER_NULL_ON_FAILURE)); // NULL
echo "<br>";

var_dump(filter_var($u , FILTER_VALIDATE_URL , 
["flags" => FILTER_NULL_ON_FAILURE | FILTER_FLAG_PATH_REQUIRED | FILTER_FLAG_QUERY_REQUIRED])); // string(43) "https://github.com/abdallah-el-sawy/?id=100"
echo "<br>";

//---------------------------------------------------------------------------------------------------------------------------

$ip = "192.168.2.1";
$ipv4 = "192.168.1.1";
$ipv6 = "2001:db8:3333:4444:5555:6666:7777:8888";
$mac = "00:1A:2B:3C:4D:5E";

// if the ip was wrong the output will be false
var_dump(filter_var($ip , FILTER_VALIDATE_IP)); // string(11) "192.168.2.1"
echo "<br>";

var_dump(filter_var($ipv4 , FILTER_VALIDATE_IP , FILTER_FLAG_IPV4)); // string(11) "192.168.1.1"
echo "<br>";

var_dump(filter_var($ipv6 , FILTER_VALIDATE_IP , FILTER_FLAG_IPV6)); // string(38) "2001:db8:3333:4444:5555:6666:7777:8888"
echo "<br>";

// note: FILTER_FLAG_IPV4 only works on ipv4 , same as ipv6 only for ipv6

var_dump(filter_var($mac, FILTER_VALIDATE_MAC)); // string(38) "2001:db8:3333:4444:5555:6666:7777:8888"
echo "<br>";






?>