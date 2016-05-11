<?php


/*
$randNum = rand(1, 2);

if ($randNum === 1) {
  echo "Heads, I win!";
} else {
  echo "Tails, you win!";
}
*/

$i = 1;
$heads = 0;
$tails = 0;

while ($i <= 100) {
  $randNum = rand(1, 2);
  if ($randNum === 1) {
    $heads++;
  } else if ($randNum === 2) {
    $tails++;
  }
  $i++;
}
echo "Heads was flipped " . $heads . " times and tails got " . $tails . " flips.";

 ?>
