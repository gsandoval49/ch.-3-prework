<?php
/**
* ex of if..elseif
**/
$page = "Resources";

// if      ($page == "Home")   echo "You selected Home";
// elseif  ($page == "About")  echo "You selected About";
// elseif  ($page == "News")   echo "You selected News";
// elseif  ($page == "Login")  echo "You selected Login";
// elseif  ($page == "Links")  echo "You selected Links";

/**
* or you can use a switch statement
**/

// now we select a page


// $page = 'Home';


switch ($page)
{
  case "Home":
    echo "You selected Home";
    break;
  case "About":
    echo "You selected About";
    break;
  case "News":
    echo "You selected News";
    break;
  case "Login":
    echo "You selected Login";
    break;
  case "Links":
    echo "You selected Links";
    break;

// best practice is to end a  default statement inside switch
  default:
    echo "This is default statement - unrecognized page";
    break;
}

?>
