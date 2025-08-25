<?php

/* Array Operators */

/**
 *  + => Union
 *  == => Equal => same key and value
 *  != => not equal
 *  <> => not equal
 * === => identical => same key and value , same order , same Type
 * !== => not identical
 */


$arr1 = [1 => 'A' , 2 => 'B'];
$arr2 = [3 => 'C' , 4 => 'D'];
$arr3 = $arr1 + $arr2;


echo '<pre>';
print_r($arr1 + $arr2);
print_r($arr3);
echo '</pre>';
echo '<br>';

$arr4 = [1 => '10' , 2 => '20'];
$arr5 = [2 => 20 , 1 => 10];

var_dump($arr4 == $arr5); // true
echo '<br>';

var_dump($arr4 != $arr5); // false
echo '<br>';

var_dump($arr4 <> $arr5); // false
echo '<br>';

$arr6 = [ 1 => "100" , 2 => "200" ];
$arr7 = [ 2 => 200 , 1 => 100 ];

var_dump($arr6 === $arr7); // false not same order and not the same type
echo '<br>';

$arr8 = [ 1 => 100 , 2 => 200 ];
$arr9 = [ 1 => 100 , 2 => 200 ];

var_dump($arr8 === $arr9); // true
echo '<br>';






?>