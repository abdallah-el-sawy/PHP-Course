<?php
/*

== File System Functions

    -> fopen(FileName[Required] , Mode[Required] , IncludePath[Optional] , Context[Optional])
      => Mode
        -> [r] For Read => Pointer At the beginning 
        -> [r+] For Read & Write => Pointer At the beginning 
        -> [w] For writer => Pointer At the beginning  + Truncate to 0 length => create if not exists
        -> [w+] For Read & Write  => Pointer At the beginning + Truncate to 0 length => create if not exists

        -> [a] For Write  => Pointer At the end + create if not exists
        -> [a+] For Read & Write  => Pointer At the end + create if not exists
        -> [x] Create + Open For Write  => Pointer At the beginning
        -> [x+] Create + Open For Read & Write  => Pointer At the beginning


    -> fwrite(File[Required] , String[Required] , Length[Optional])
      => Write to an open file
      => length -> max number of bytes to write

*/


$handle = fopen("abdallah.txt" , "a+");

fwrite($handle , "\r\nI Love Abdallah Elsawy"); // added the string to the file
fwrite($handle , "\r\nI Love Abdallah Elsawy" , 5); // added the some of the string to the file



















?>