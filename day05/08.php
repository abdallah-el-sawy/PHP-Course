<?php
/* 
==String Functions

  -> substr_replace(String[Required] , ReplaceWith Or Insert[Required] , Start[Required] , Length[$])
    -> $ Positive Number => Length Of String To Be Replaced 
    -> $ Negative Number => Characters Left At The End After Replacement
    -> $ 0               => Insert Instead Of Replace

*/
//----------------------------------------------------------------------------------------------

echo substr_replace("One" , 1 ,0) . "<br>"; // 1
echo substr_replace("OneTwo" , 2 ,3) . "<br>"; // one2
echo substr_replace("OneTwo" ,2 ,5) . "<br>"; // OneTw2
echo substr_replace("OneTwo" ,2 ,-1) . "<br>"; // OneTw2

//-----------------------------------------
// length

//here we replaced from "e" to the end of the string with 2
echo substr_replace("OneTwo" ,2 ,2) . "<br>"; // On2

// here i made him just replace 2 chars the "e" and the "T"
echo substr_replace("OneTwo" ,2 ,2 , 2) . "<br>"; // On2wo

echo substr_replace("OneTwo" ,2 ,1 , 4) . "<br>"; // O2o

//-----------------------------------------
echo substr_replace("Abdallah_Elsawy_Esmail" ,"E" ,9, 6) . "<br>"; //Abdallah_E_Esmail 


// now the negative length

// after index 9 here we just count the chars returns if we typed -1 it will return Abdallah_El just the "l" from esmail 
echo substr_replace("Abdallah_Elsawy_Esmail" ,"E" ,9, -1) . "<br>"; //Abdallah_El

// then -2 will returns "i" from esma"i"l
echo substr_replace("Abdallah_Elsawy_Esmail" ,"E" ,9, -2) . "<br>"; //Abdallah_Eil
echo substr_replace("Abdallah_Elsawy_Esmail" ,"E" ,9, -3) . "<br>"; //Abdallah_Eail
echo substr_replace("Abdallah_Elsawy_Esmail" ,"E" ,9, -4) . "<br>"; //Abdallah_Email
echo substr_replace("Abdallah_Elsawy_Esmail" ,"E" ,9, -5) . "<br>"; //Abdallah_Esmail

// and so on

// so it will bring back the replace string E 
echo substr_replace("Abdallah_Elsawy_Esmail" ,"E" ,9, -22) . "<br>"; //Abdallah_EElsawy_Esmail

//-----------------------------------------
// insert

//if we typed "0" in the length position it will actually insert 
// here we will insert @ in index 0 then the whole string will be shifted nothing will be replaced here 
echo substr_replace("Abdallah_Elsawy_Esmail" ,"@" ,0 , 0) . "<br>"; //@Abdallah_Elsawy_Esmail

//-----------------------------------------

echo "<pre>";
print_r (substr_replace(["OneTwo" , "ThreeFour" ], 1 , 0)) . "<br>"; // 
echo "</pre>";

//----------------------------------------------------------------------------------------------















?>