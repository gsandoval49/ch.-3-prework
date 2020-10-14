<?php
$num_one = 1;
$num_two = 2;
$num_three = 3;

/*var_dump( $num_one );
var_dump( 1 );
var_dump( "1" );
var_dump( $num_one + $num_two - $num_three);*/

$distance_home = 1.2;
$distance_work = 2.5;

var_dump($distance_home + $distance_work + $num_three + .3);
// float 7


// NEW SET OF ARITHMETIC OPS

$a = 5;
$b = 10;

var_dump($a * $b); // int 50
var_dump($a / $b); // float 0.5

$a = $a +1;
var_dump($a); // int 6
$a++;
var_dump($a); // int 7
$a--;
var_dump($a); // int 6
var_dump($a--); // int 6
var_dump($a); //int 5
var_dump(--$a); // int 4
var_dump($a); // int 4
$a = $a + 5;
var_dump($a); //int 9
$a += 5;
var_dump($a); // int(14);

?>
