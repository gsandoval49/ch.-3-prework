<?php
/**
 * elseif example - using a complete if...elseif...else construct
 * if: less than 100, take cash and put into $bankBalance
 * elseif: if more than 200, take 100 from $bankBalance
 * and put int savings
 * else: if between 100 and 200, just take 50 from $bankBalance
 * and put into savings
 */

if ($bankBalance < 100)
{
  $money        = 1000;
  $bankBalance += $money;
}
elseif ($bankBalance > 200)
{
  $saving      += 100;
  $bankBalance -= 100;
}
else
{
  $savings     += 50;
  $bankBalance -= 50;
}


?>
