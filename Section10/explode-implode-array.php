<?php

$string = "Bob, Linda, Tina, Gene, Louise"; //CSV files: comma separated values.

$names = explode(", ", $string); //Delimiter: boundry string where to start splitting.  String: input string.

print_r($names);

$imploded = implode("|", $names); //Glue: join array elements in this case "|".  Pieces: the array of strings to implode.

echo $imploded;
