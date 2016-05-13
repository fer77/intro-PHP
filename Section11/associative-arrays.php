<?php
/*
$cities = ["London", "Paris", "Amsterdam", "New York", "Berlin", "Brisbane"];

//To loop through arrays we use a for each loop.
foreach ($cities as $city) {
  echo $city . "<br>";
}
*/

$students = ["Tina" => 14, "Gene" => 12, "Louise" => 10]; //associative arrays have keys and values.

//To loop through values in an associative array, include the key and value.
foreach ($students as $student => $age) {
  echo $student . " is " . $age . " years old";
  echo "<br>";
}
