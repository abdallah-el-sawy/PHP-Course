<?php

/*

== File System Functions

    -> fopen(FileName[Required] , Mode[Required] , IncludePath[Optional] , Context[Optional])



    -> rewind(File[Required])
      => Return the pointer to the beginning of the  file

    -> ftell(File[Required])
      => Return the current position of the pointer

    -> fseek(File[Required] , Offset[Required] ,whence[Optional] = SEEK_SET)
      => Go to position
      => Offset in bytes   
      => SEEK_SET => Equal to offset
      => SEEK_CUR => Current + offset
      => SEEK_END => EOF + offset [Accept Negative]

*/

$handle = fopen("elsawy.txt" , "r");

//it will print the whole file cause our file is only 4 lines
// this is because when we output line the pointer moves to next line 
// if we tried to repeat it again it won't print anything cause our file is only 4 lines
echo ftell($handle) . "<br>"; //0

echo fgets($handle) . "<br>"; //abdallah

echo ftell($handle) . "<br>"; // 10

echo fgets($handle) . "<br>"; //elsawy

echo ftell($handle) . "<br>"; //18

// it calculated the number of bytes 
// we can do this by using
echo mb_strlen("abdallah\r\n" , "8bit") . "<br>"; //10
echo mb_strlen("abdallah\r\nelsawy\r\n" , "8bit") . "<br>"; //18

echo "<hr>";


// now the pointer on 18 we want it to print from the beginning 
// using rewind

rewind($handle);

echo fgets($handle) . "<br>"; //abdallah

echo ftell($handle) . "<br>"; //10

echo "<hr>";

//--------------------------------------------------------------------------------------


fseek($handle ,0); // rewind

//now i want to print elsawy esmail i love abdallah elsawy without abdallah 

// well now the pointer is at the beginning 
// so first of all we need to move it to the beginning of elsawy how??
// above we calculated abdallah\r\n => 10
// so will put the pointer after it
fseek($handle , 10);


while(! feof($handle))
  {
      echo fgets($handle) . " " ; //elsawy esmail i love abdallah elsawy
  }



  // and now we can move the pointer free so we can many things.

//--------------------------------------------------------------------------------------


?>