<?php

/*

== File System Functions

    -> basename(Path[Required] , Suffix[Optional])
      => Returns Trailing Name componant of Path

    -> dirname(Path[Required] , Levels[Optional] = 1 )
      => Returns a Parent Directory's Path
      => Levels => Number of parent Directories To Go Up
    
    -> realpath(Path[Required])
      => Returns Absolute Path

    -> pathinfo(Path[Required] , flags[Optional]) => Returns Array
      => PATHINFO_DIRNAME
      => PATHINFO_BASENAME
      => PATHINFO_EXTENSION
      => PATHINFO_FILENAME

*/


echo basename("04.php") . "<br>"; //04.php
echo basename(__FILE__) . "<br>"; //04.php
echo basename(__FILE__ , ".php") . "<br>"; //04    print the file name without the extension
echo dirname(__FILE__ , 3) . "<br>"; //Returns the level 3 parent
echo realpath(__FILE__) . "<br>"; // Returns the whole path

echo "<pre>";
print_r(pathinfo(__FILE__));
echo "<pre>";

//the output
/*
Array
(
    [dirname] => C:\xampp\htdocs\elzero_php\day08
    [basename] => 04.php
    [extension] => php
    [filename] => 04
)

*/

// we can access on each index by the key or by the flags
echo pathinfo(__FILE__)["dirname"] . "<br>"; //C:\xampp\htdocs\elzero_php\day08
echo pathinfo(__FILE__)["extension"] . "<br>"; //php

//or
echo pathinfo(__FILE__ , PATHINFO_DIRNAME) . "<br>"; //C:\xampp\htdocs\elzero_php\day08
echo pathinfo(__FILE__ , PATHINFO_EXTENSION) . "<br>"; //php


?>