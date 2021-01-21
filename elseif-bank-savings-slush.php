<?php
/**
 * ex. of personal savings and using a slush fund
 * after your month end balance in checking.
 *
 * slush fund ex. upcoming snowboard trip
 */

// enter your balances here
$balance = 2500;
$savings = 6000;
$slush   = 100;

// if less than 1000, do nothing
if ($balance < 1000) {
  echo "work on where you can, save more & spend less";

// if btwn 1000 and 1499, only deposit into savings
} elseif ($balance < 1500) {
  echo "good work, but room for improvement" . "<br>";
  // amount of 10% of balance and deposit into savings
  $depositSavings = $balance * .10;
  echo "deposit amt into savings: $depositSavings" . "<br>";

  // this is new savings amount after deposit
  $newSavings = $savings + $depositSavings;
  echo "new savings balance SB: $newSavings" . "<br>";

// if over 1500, deposit into both savings & slush fund
} else {
  echo "great job! increase savings & slush fund this month" . "<br>";
  // 10% of balance into savings
  $depositSavings = $balance * .10;
  echo "deposit amt into savings: $depositSavings" . "<br>";
  // this is new savings amount after deposit
  $newSavings = $savings + $depositSavings;
  echo "new savings balance SB: $newSavings" . "<br>";
  // deposit 5% into slush fund
  $depositSlush = $balance * .05;
  echo "deposit amt into slush fund: $depositSlush" . "<br>";
  $newSlush = $slush + $depositSlush;
  echo "new slush fund amount: $newSlush" . "<br>";
}

?>
