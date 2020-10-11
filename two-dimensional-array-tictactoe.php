<?php
  $oxo = array(array('x', ' ', 'o'),    // notice , instead of ;
                array('o', 'o', 'x'),   // this continues the arrays within an array
                array('x', 'o', ' '));  // end of Array

  echo $oxo[1][2];  // This returns the 3rd element in the 2nd row
?>

// returns x
