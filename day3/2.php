<?php

/* 
==Conditions

more examples
*/


//if
$page = "About";

// iam just searching about 1 page we don't need else here
if($page == "About")
{
  echo 'This Is About page';
}
echo '<br>';
//-----------------------------------------------------------------

// if , Else

$title = "Home";

if($title == "")
{
  echo "Unknown Page";
}
else
{
  echo $title;
}

echo '<br>';
//-----------------------------------------------------------------

// if , ElseIf , Else

$language = "Arabic";

if($language == "Arabic")
{
  echo 'مرحبا ';
}
elseif($language == "English")
{
  echo 'Hello';
}
elseif($language == "Spanish")
{
  echo 'Hola';
}
else
{
  echo 'Unknown Language';
}


?>