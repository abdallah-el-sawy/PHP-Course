<?php

/* pre-defined variables */
/* Search on PHP Pre-Defined Variables*/


/*
Superglobals — Built-in variables that are always available in all scopes
$GLOBALS — References all variables available in global scope
$_SERVER — Server and execution environment information
$_GET — HTTP GET variables
$_POST — HTTP POST variables
$_FILES — HTTP File Upload variables
$_REQUEST — HTTP Request variables
$_SESSION — Session variables
$_ENV — Environment variables
$_COOKIE — HTTP Cookies
$php_errormsg — The previous error message
$http_response_header — HTTP response headers
$argc — The number of arguments passed to script
$argv — Array of arguments passed to script
*/

/* note : a warning will occure cause you didn't send the data just type anything and the warning will disapear  */


echo $_POST["username"];

?>


<form action=""  method="post">
<input type="text"   name="username">
<input type="submit" value="Send">
</form>

