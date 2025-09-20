<?php

/*
File System Functions

-- file_get_contents(File[Required], Include_Path[Optional], Context[Optional], Start[Optional], MaxLength[Optional])
--- Reads Entire File Into A String

-- file_put_contents(File[Required], Data[Required], Mode[Optional], Context[Optional])
--- Write Data To File
--- Mode
------ FILE_APPEND => If File Exists Append To It

- Create If Not Exists
- Open And Close
- Return Number Of Bytes

Search
- Get Set Include Path
*/


echo get_include_path() . "<br>";

// here i will get data from abdallah.txt
// i will search in the path from above so it's true
// we will discuss Context later so it's NULL
// Starts after 5 bytes
// and ends after 5 bytes
echo file_get_contents("abdallah.txt" , True , NULL, 5 , 5) . "<br>"; 


// we can also put content on our file

// we can add and override the content inside like:
file_put_contents("abdallah.txt" , "\r\n Hello PHP From Abdallah") . "<br>";

//or we can add content without override by using mode FILE_APPEND
file_put_contents("abdallah.txt" , "\r\n Abdallah Elsawy Esmail Mohamed" , FILE_APPEND) . "<br>";



//-------------------------------

/*
** Note **
- You can Replace A This TXT File with a link and get the data from it
*/
//echo file_get_contents("https://github.com/abdallah-el-sawy") . "<br>";


