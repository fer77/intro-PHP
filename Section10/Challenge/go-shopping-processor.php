<?php

if (isset($_POST["submit"])) {

//Take the credit card number from the user input.
  $cardNum = $_POST["cc"];

  $total = 0;
  $i = 1;

  $last4 = substr($cardNum, -4, 4);

  $cardNum = str_split($cardNum);

//Reverse the credit card number.
  $cardNum = array_reverse($cardNum);

//Take each of the even digits and multiply by 2.
  foreach ($cardNum as $num) {
    if ($i % 2 == 0) {
      $num *= 2;
/*  If the resulting answer for each digit is greater than 9 subtract 9 from the answer and
then add the numbers together  */
      if ($num > 9) {
        $num -= 9;
      }
    }
    $total += $num;
    $i++;
  }
  if ($total % 10 == 0) {
    echo "The card number ending in: " . $last4 . " is valid.";
  } else {
    echo "The card number ending in: " . $last4 . " is invalid.";
  }
}
