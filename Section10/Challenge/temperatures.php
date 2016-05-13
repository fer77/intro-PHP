<?php

$temps = [32.3, 31.3, 28.2, 29.3, 29.7, 29.9, 28.7, 28.4, 30.5, 30.5, 31.7, 30.6, 29.4, 32.0,
36.2, 31.3, 32.8, 33.3, 32.9, 28.8, 30.8, 28.0, 25.9, 30.8, 32.4, 32.0, 31.3, 25.2,
29.1, 28.6, 30.6];

$sum = array_sum($temps);
$count = count($temps);
$avrgTemp = $sum / $count;

echo "The average daily temperature was " . round($avrgTemp, 1);

echo "<br>";

sort($temps); //Remember from lowest => highest.
$lowest5Temp = array_slice($temps, 0, 5);
$lowest5Temp = implode(", ", $lowest5Temp);

$highest5Temp = array_slice($temps, -5, 5);
$highest5Temp = implode(", ", $highest5Temp);

echo "The lowest recorded temperatures were " . $lowest5Temp;

echo "<br>";

echo "The highest recorded temperatures were " . $highest5Temp;
