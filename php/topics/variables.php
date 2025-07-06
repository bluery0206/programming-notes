<?php

$name 		= "Bagpipe";
$health 	= 100;
$critRate 	= 12.5;
$isAlive	= true;
$modules	= NULL;

// TYPES
//     String
//     Integer
//     Float (or double)
//     Boolean
//     Array
//     Object
//     NULL
//     Resource

// ASSIGNING MULTIPLE VAR IN ONE VALUE
    $a, $b, $c = "VALUE";

// Outputs a detailed view of the passed value
var_dump($name, $health, $crit_rate);

// GLOBAL
	// Makes a variable globally regardless of the scope it was declared
	global $name;

	// PHP also stores it in $GLOBALS constant throughout the server so
	// you can also access it by doing
	echo $GLOBALS['name'];


// STATIC
	// Static makes a variable persistent
	static $name;

	// This is usefull for when we want a variable to be 
	// accessible throughout the server session without the use of a database