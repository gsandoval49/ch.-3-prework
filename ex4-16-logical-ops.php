<?php
$a = 1; $b = 1;

echo ($a AND $b) . "<br>";
echo ($a or $b)  . "<br>";
echo ($a XOR $b) . "<br>";
echo !$a         . "<br>";

// Remember: NULL--or nothing-- represents a value of FALSE
// AND statement requires both operands to be TRUE if it's going to return a value of TRUE 

// when $a = 1; $b = 10;
// output in terminal is <br>1<br>1<br><br>%
// which means NULL, 1, 1, NULL
// only 2nd and 3rd echo statements evaulate as TRUE

// when $a = 2; $b = 10;
// output: 1,1,NULL,NULL

// WHEN $a = 5; $b = 5;
// OUTPUT: 1,1,NULL, NULL

// when $a = 1; $b = 0;
// output: NULL, 1, 1, NULL

// when $a = 1; $b = 1;
// output: 1, 1, NULL, NULL

?>
