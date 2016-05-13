<?php

$suits = ["clubs", "diamonds", "hearts", "spades"];
$values = ["Ace", 2, 3, 4, 5, 6, 7, 8, 9, 10, "Jack", "Queen", "King"];

$suit = array_rand($suits);
$value = array_rand($values);

echo "Your card is the " . $values[$value] . " of " . $suits[$suit] . ".!";
