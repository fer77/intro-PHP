<?php

function add()
{
  global $c;
  $a = 1;
  $b = 2;
  $sum = $a + $c;
  echo $sum;
}

//function declared inside the function only have scope inside their function.
//variables declared outside a function need the "global" term inside the function that will use them.

$c = 5;
add();
