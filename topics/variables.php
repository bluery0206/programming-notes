<?php

$name = "Bagpipe";
$health = 100;
$crit_rate = 12.5;

var_dump($name, $health, $crit_rate);
// Outputs:
//      string(7) "Bagpipe" int(100) float(12.5)


// Makes a variable global even if created inside 
// a class
global $name;
// PHP also stores it in $GLOBALS constant throughout
// So, you can also access it by doing
echo $GLOBALS['name'];
// Outputs:
//      Bagpipe


// Static makes a variable persistent
// This is usefull for when we want a variable to still
// be accessible even though were currently done with it.
// without the use of a database
static $name;