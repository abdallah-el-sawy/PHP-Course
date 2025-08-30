<?php
/* nested if and Training */


$name = "Abdallah";
$is_student = True;
$is_orphan = True;
$country = "Egypt";
$country_discount = 50;
$price = 100;
$student_discount = 10;
$orphan_discount = 15;

if($country == "Egypt")
{
  if($is_student)
  {
      if($is_orphan)
      {
          echo "Hello $name";
          echo '<br>';
          echo "The course price after discount is: " , ($price - $country_discount - $student_discount - $orphan_discount );
      }
      else
      {
          echo "Hello $name";
          echo '<br>';
          echo "The course price after discount is: " , ($price - $country_discount - $student_discount);
      }
    }
    else
    {
        echo "Hello $name";
          echo '<br>';
          echo "The course price after discount is: " , ($price - $country_discount);
    }
  }


else
{
  echo "Hello $name";
  echo '<br>';
  echo "There is no discount";
  echo '<br>';
  echo "The course price is $price";
}



?>