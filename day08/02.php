<?php

/*
== File System Functions

    -> is_dir(Name)
      => Tells if the filename is a directory

    -> mkdir(Path[Required] , Mode[Oprional] = 0777 , Recursive[Oprional] , Context[Oprional])  
      => Permissions is ignored on windows
      => Permissions is octal number starts with 0
        => Second number is => Owner Permission
        => Third number is => User Group Permission
        => Fourth number is => Others Permissions

    -> rmdir(Name[Required] , Context[Oprional])
      => remove the " Empty " directory
                      *****
    *******************************
    * mode                         *
    * 6 = 4+2 = rw- (read, write)  *
    * 5 = 4+1 = r-x (read, execute)*
    * 4 = 4 = r-- (read only)      *
    *******************************
*/

var_dump(is_dir("abdallah")); //bool(true)
echo "<br>";

mkdir("Test"); // it will make new directory(folder) with name Test
echo "<br>";

mkdir("Upload" , 0700); // only owner can read , write and execute
echo "<br>";

// if we want to make dir inside dir we use recursive
mkdir("Test/Upload/Saved" , 0777 , True);

// rmdir("Test"); // here warning will occure cause Test dir is not empty

rmdir("Test/Upload/Saved"); // Saved dir deleted

// note: when you make the dir make sure to comment the code
// there will be warning always occurs tells you that this dir is already exists

?>