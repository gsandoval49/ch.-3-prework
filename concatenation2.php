<?php

$firstName = 'Rasmus';
$lastName = 'Lerdorf';

//combine full name
$fullName = "$firstName $lastName";

//display full name with a new line at the end.
$stringOne = "$fullName " . 'was the original creator of PHP.' . "\n";
echo $stringOne;
?>
