<?php

$letters = ["a", "b", "c", "d", "e", "f", "g", "h"];

//Removes the first five elements and prints the remainding elements.
$result = array_slice($letters, 5);

echo "<pre>";

print_r($result);

//Removes the first five elements and prints those elements.
$result = array_slice($letters, 0, 5);

print_r($result);

//Removes the last five elements of the array.
$result = array_slice($letters, -5, 5);

print_r($result);
