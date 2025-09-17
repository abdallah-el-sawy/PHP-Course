<?php

/*

== File System Functions

    -> chmod(File[Required] , Mode[Required])
      => Change Mode
    
    -> fileperms(file_name)
      => gets file premissions

    -> clearstatcache()
      => clear cache

- You can search on this if you want more knowledge
  -> you can change owner chown()
  -> you can change Group chgrp()

*/

//mkdir("Y" , 0700);
echo fileperms("Y") . "<br>"; //16895 this number in decimal we will convert it to octal 40777 
chmod("Y" , 0644);
echo fileperms("Y") . "<br>"; 
//important notes

/*
***40777***
-> 4 means that this file is dir
-> 0777 is our mode
*/

/*
as we said windows ignores permissions

if we wanted to change premission it's easy on linux server

we will do this 
chmod("Y" , 0644);

after that
clearstatcache()

after that
echo fileperms("Y") . "<br>"; 
again
*/

?>