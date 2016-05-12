<?php

$text = $_POST["string"];

$naughtyWords = ["badWord1", "badWord2", "badWord3", "badWord4"];

foreach ($naughtyWords as $naughtyWord) {
  $text = str_replace($naughtyWord, "!@#$", $text);
}

echo $text;
