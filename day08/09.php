<?php
/*
== File System Functions

    -> glob(Pattern[Required] , Flags[Optional])
      => Find Pathnames matching the pattern and return array

    -> rename(Old[Required] , New[Required]) => Move
      => Renames a file or directory
    
    -> copy(Old[Required] , New[Required] , Context[Optional])
      => Copy a file

    -> unlink(Old[Required] , Context[Optional])
      => Deleter a file


    -> Same Concept
      => opendir()
      => readdir()
      => closedir()

*/

//----------------------------------------------------------------------------------------

echo "<pre>";
print_r(glob("*.*")); // this pattern to return all files in the dir
echo "</pre>";


echo "<pre>";
print_r(glob("Old/*.*")); // this pattern to return all files in the dir
echo "</pre>";

//----------------------------------------------------------------------------------------

//Rename File => Same Place
rename("Old/Elsawy.xlsx" , "Old/Hello.xlsx");


//Rename => Other place => "Cut" || "Move"
rename("Old/Hello.xlsx" , "New/Hello2.xlsx");

//Move To Other place 
rename("Old/Abdallah.accdb" , "New/Abdallah.accdb");

//----------------------------------------------------------------------------------------

//Copy Without Rename
copy("Old/Abdallah_elsawy.txt" , "New/Abdallah_elsawy.txt");

//Copy With Rename
copy("Old/myabdallah.docx" , "New/elsawyabdallah.docx");




?>