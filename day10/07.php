<?php

/*

    -- Header
    --- Send Raw HTTP Header To Client To Manipulate Info Sent By Web Server Before Any Output 

    header(Header[Required] , Replace[Optional] = True , Response_Code[Optional])
*/

//Advanced Use of header not usually Used
// header("HTTP/1.0 404 Not Found");
// header("expires: Sat, 01 Jan 2026 01:00:00");
// header("Cache-control: no-cache, must-revalidate");

// echo "<a href= " . "index.php" . ">Index Page</a>"
// header("Location: index.php");

header("refresh:5; url=index.php");
exit;







?>