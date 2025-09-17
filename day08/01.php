<?php

/*
== File System Functions

    -> disk_total_space()
      => get total space in bytes --> then we can get [KB , MB , GB]
    
    -> disk_free_space() || diskfreespace()
      => get free space in bytes --> then we can get [KB , MB , GB]

    -> file_exists(Path)
      => check if a file or a directory exists

    -> filesize(file_name => if it exists in the same folder)
      => get space in bytes

*/

echo round(disk_total_space("C:") / 1024 / 1024 / 1024) . "<br>"; // to return the space in GB

echo round(diskfreespace("C:") / 1024 / 1024 / 1024) . "<br>";

var_dump(file_exists("C:\Users\PC\OneDrive\Desktop\backend.docx")); //bool(true)
echo "<br>";

echo filesize("C:\Users\PC\OneDrive\Desktop\backend.docx") / 1024;

?>