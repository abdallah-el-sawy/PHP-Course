<?php

/*
== File System Functions

    -> fopen(FileName[Required] , Mode[Required] , IncludePath[Optional] , Context[Optional])
      => Mode
        -> [r] For Read => Pointer At the beginning 
        -> [r+] For Read & Write => Pointer At the beginning 
        -> [w] For writer => Pointer At the beginning  + Truncate to 0 length => create if not exists
        -> [w+] For Read & Write  => Pointer At the beginning + Truncate to 0 length => create if not exists

    -> fgets(File[Required] , Length[Optional])
      => Get a line from an open file
      => Length => Number of Bytes To Read || End of line if no length
    
    -> fread(File[Required] , Length[Required])
      => Get a data from an open file
      => Length => max Number of Bytes To Read

    -> fclose(File[Required])
      => close an open file pointer

*/

$handle = fopen("abdallah.txt" , "r+");
// echo fgets($handle) . "<br>"; //abdallah (one line)
// echo fgets($handle , 4) . "<br>";// abdallah
                                                //els

echo fread($handle , 1024) . "<br>";// abdallah elsawy esmail

fclose($handle);









?>