<?php

/*
echo "<pre>";
print_r($_POST);
*/

if (isset($_POST["submit"])) {

  $surname = $_POST["surname"]; //assign the name of the input field in our form to the var.

  $gender = $_POST["gender"];

  echo "Your surname is " . $surname . " and your gender is " . $gender;
  
}

 ?>
