<?php

if (isset($_POST["submit"])) {

  $temperature = $_POST["temp"];

  $deg = $_POST["degree"];

if ($deg == "C") {
  $result = $temperature * 9 / 5 + 32;
} else {
  $result = $temperature - 32 * 5 / 9;
}
echo "The temp is " . $result;

}

 ?>
