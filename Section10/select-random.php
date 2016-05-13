<?php

$cities = ["London", "Paris", "New York", "Dublin", "Berlin"];

//echo $cities[1]; Returns "Paris".

$city = array_rand($cities);

echo $cities[$city];
