<?php
/*
== String Access And Update Elements

-- string : Array of Characters
->Access Elements
-> Access Elements By Index "Zero Based Indexing"
-> Negative index are alowed
-> Update Elements
-> Update Current Elements
-> Add New ELements 



-- search on: Single-Byte and Multi-Byte

*/
//------------------------------------------------------------------

$str = "Abdallah";

//we will deal with strings like arrays with index if we want to get the 1st element simply use the index

echo "The First Letter is: " . $str[0] . "<br>"; // The First Letter is: A
echo "The Fourth Letter is: " . $str[4] . "<br>"; // The Fourth Letter is: l
echo "The Last Letter is: " . $str[7] . "<br>"; // The Last Letter is: h


//------------------------------------------------------------------

// we used the fixed way to get the last letter now we will use the dynamic one 

// we have a built in function called strlen() we will use it to get the string lenght


echo "The Number Of Letters: " . strlen($str) . "<br>"; // 8


//------------------------------------------------------------------

// now the index is starting from 0 but the counter here started from 1 so we will use it but we will -1

// to get the last element in dynamic way : 

echo "The Last Letter is: " . $str[strlen($str) - 1] . "<br>"; // The Last Letter is: h

//------------------------------------------------------------------

// there is another way also to get the last letter by using index -1 
echo "The Last Letter is: " . $str[-1] . "<br>"; // The Last Letter is: h

//------------------------------------------------------------------

// updating index

// we updated the first letter 'A' with 'E'
echo $str . "<br>"; // Abdallah

$str[0] = 'E';

echo $str . "<br>"; // Ebdallah

//------------------------------------------------------------------

// add new elements

// if we updated a letter that not found it will add it like that

echo $str . "<br>"; // Ebdallah

$str[8] = 'E';

echo $str . "<br>"; // EbdallahE

//------------------------------------------------------------------




?>