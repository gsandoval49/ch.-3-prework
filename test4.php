<?php

$a = "1000";
$b = "+1000";

if ($a == $b) echo "1"; // should output 1
if ($a === $b) echo "2"; // doesn't output nothing, becuz php can't convert strings to numbers with an identity operator

?>
