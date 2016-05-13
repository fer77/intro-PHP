<?php

$cities = ["Sydney", "Helsinki", "Beijing", "Dublin", "Rome"];

$lastCity = array_pop($cities);

echo $lastCity;

echo "<br/>";

print_r($cities);

$firstCity = array_shift($cities);

echo $firstCity;

echo "<br>";

print_r($cities);
