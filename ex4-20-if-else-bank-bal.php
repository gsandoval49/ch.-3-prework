<?php
/**
 *
 */
$bankBalance = 10000;
$savings     = 1000;

  if ($bankBalance < 100)
  {
    $money = 1000;
    $bankBalance += $money;
  }
  else
  {
    $savings += 50;
    $bankBalance -= 50;
  }

  echo $bankBalance . "<br>";
  echo $savings     . "<br>";
?>
