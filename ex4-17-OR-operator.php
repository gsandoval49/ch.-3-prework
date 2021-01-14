<?php
/*
the OR operator can cause unitnetional problems in if statements
because the 2nd operand will not be evaluated if the first is
evaluated as TRUE. In the ex. below the function 'getnext'
will never be called.
*/

 // if ($finished == OR getnext() == 1) exit;

// code above: gave me parse error
// Parse error: syntax error, unexpected 'OR' (T_LOGICAL_OR) in /Users/giles/github/ch3-prework/ex4-17-OR-operator.php on line 9

/*
Here's the rewritten code for get next to be called at each if
statement
*/

$gn = getnext();

if ($finished == 1 OR $gn == 1) exit;

// another solution is to switch the clause so that $gn is first
// in the if statement. 

?>
