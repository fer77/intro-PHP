<?php

$names = ["Bob", "Linda", "Tina", "Gene", "Louise"];

sort($names); //Alphabetical order

rsort($names); //Reverses order

echo "<ol>";

foreach ($names as $name) {
  echo "<li>" . $name . "</li>";
}

echo "</ol>";
