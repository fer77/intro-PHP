<?php

date_default_timezone_set("AMERICA/DENVER");

$christmasDay = strtotime("12/25/2016");

$days = ceil(($christmasDay - time())/60/60/24); //...min/hrs/days

echo $days . " days until Christmas";

 ?>
