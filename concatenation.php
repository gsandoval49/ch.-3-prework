<?php
$name = 'Tupac';
$stringOne = "Learning to display \"Hello $name!\" to the screen.";
$stringOne = 'Learning to display ';
$stringOne .= '"Hello ';
$stringOne .= $name;
$stringOne .= '!" to the screen.';
$stringOne = $stringOne . "\n";
//prepend to a string
$stringOne = 'I am ' . $stringOne;
echo $stringOne;
?>
