<?php

date_default_timezone_set("AMERICA/DENVER");

//echo date("l jS F Y");

//echo "Today is " . date("l");

//echo date("l d F, Y");

//echo date("Y/m/d");

//echo date("l jS F Y, g:i A");

if (date("L") == 1) {
  echo date("Y") . " is a leap year.";
} else {
  echo date("Y") . " is not a leap year.";
}

 ?>
