<?php
// ex. of personal savings and saving for college
// after your month end balance in checking

$balance      = 3000;
$savings      = 5000;
$collegeFund  = 1000;

if ($balance < 1500) {
  echo "tighten budget next month";
} else {
  echo "great job this month!" . "<br>";

  // take 10% of balance for the total amount
  // that will now be $newSavings
  $newSavings = ($balance * .10) + $savings;

  // take 5% and push toward total $collegeFund
  $newCollegeFund = ($balance * .5) + $collegeFund;

  echo "Increase your savings to this total amount: $newSavings" . "<br>";
  echo "Increase your college fund to this total amount: $newCollegeFund" . "<br>";
}


?>
