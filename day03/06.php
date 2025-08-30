<?php
/* Ternary Operator => Short if */

// basic
$a = 10;

if($a > 8)
{
  echo 'good';
}
else
{
  echo 'bad';
}

echo '<br>';

// ternary
// syntax:   Condition ? True : False
echo ($a > 8) ?  'good' : 'bad';
echo '<br>';




?>