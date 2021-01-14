<?php

/**
 * checking to see if balance is less than 100, the put 1000 money
 * inside.
 */
$bankBalance = 99;

  if ($bankBalance < 100)
  {
    $money = 1000;
    $bankBalance += $money; // imagine: $bankBalance = $bankBalance + $money
  }

echo $bankBalance;
?>
