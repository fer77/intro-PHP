<?php

date_default_timezone_set("AMERICA/DENVER");

// echo time();

$date = strtotime("next friday");

// $seconds = $date - time();
// echo $seconds;

$days = ($date - time())/60/60/24;

/*
$minutes = $seconds / 60;
$hours = $minutes / 60;
$days = $hours / 24;
*/

echo ceil($days);

 ?>
