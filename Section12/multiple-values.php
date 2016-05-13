<?php

function calculate($number1, $number2)
{
  $add = $number1 + $number2;
  $substract = $number1 - $number2;
  return array($add, $substract);
}

$results = calculate(10, 3);

//echo "<pre>";
//print_r($results);
echo $results[0];
echo "<br>";
echo $results[1];
