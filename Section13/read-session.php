<?php

session_start(); //Checking if a session has already been set.  If it has this restarts it.

echo "NAME: ";
if (isset($_SESSION["name"])) {
  echo $_SESSION["name"];
}

echo "<br>";

echo "AGE: ";
if (isset($_SESSION["age"])) {
  echo $_SESSION["age"];
}
