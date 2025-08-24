<?php
                            /* Array -> DataType */

/*
-> array with key
-> array without keys
-> array with one key 
-> array value override 
*/

/*
to print array details we use: print_r()
 */

echo '<pre>';

print_r(array(

    'A' => 'Abdallah',
    'B' => 'Basem',
    'Carlos', /* here if we wanted to reach this section we use the index now the array starts from index 0 */
    '1' => 'Sawy',
    True => 'kamel', /* now True = 1 this is just an override for index '1' */

    /* Dimensional array */
    /* In the same array we created an array it takes index normally and counted as unit */

    "Friends" => 
    [
    "Abdelrahman" => ["Medhat" , "Nour"] , 
    "Nofal" ,
    "Ahmed"
    ],
    


));

echo "</pre>";

?>