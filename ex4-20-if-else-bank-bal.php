<?php
/**
 *
 */
$bankBalance = 200;
$savings     = 100;

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
