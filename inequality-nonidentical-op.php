<?php
$a = "1000";
$b = "+1000";

if ($a != $b) echo "1";
if ($a !== $b) echo "2"; // should be output 2

// using the identity operator, php will ouput 2 becuz it shows that the 2 variables are not the same 

?>
