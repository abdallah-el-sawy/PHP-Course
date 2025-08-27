<?php
/* Alternative syntax to IF , Else , ElseIf */


// normal syntax 
if( 10 > 5 )
{
  echo "yes";
}
else
{
  echo "no";
}
echo '<br>';

// alternative syntax
// if the code is just one line you can type it like that
if(10 > 5)
  echo "yes";
else 
  echo "no";

//normal is better

echo '<br>';




?>

<!-- alternative syntax -->
<?php if(10 > 5) : ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  Hello Abdallah Elsawy
  <br>
</body>
</html>

<?php endif ;?>


<!-- =========================== -->

<?php

if(10 > 5):
{
  echo "first";
}
elseif( 10 < 5):
{
  echo "second";
}
else:
{
  echo "Last";
}
echo '<br>';
endif;


?>