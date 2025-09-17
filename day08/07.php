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


        -> [c] 
                => For Write 
                => Create IF not Exists
                => No problem If it's Exists
                => No Truncatation
                => Pointer At the beginning 
        -> [c+] For read & write (Same Characters as [c])


    -> file(File[Required] , Flag[Optional] , Context[Optional])
      => Read Entire File Into Array
    
    -> feof(File[Required]) => end of file
      => Tests For EOF On A File Pointer

*/

// in elsawy there are 4 lines
echo "<pre>";
print_r(file("elsawy.txt"));
echo "</pre>";


// now we will loop on this array and output them 

$handle = fopen("elsawy.txt" , "r");
$line = 1;

while(! feof($handle))
  {
      echo "line $line =>" . fgets($handle) . "<br>";
      $line++;
  } 

  // it won't print anything cause the pointer now at the end of the file after the while loop 
  // if we want it to start justt comment the while loop
for($i = 0; $i < count(file("elsawy.txt")); $i++)
  {
      echo "line $line =>" . fgets($handle) . "<br>";
      $line++;
  }

fclose($handle);



?>