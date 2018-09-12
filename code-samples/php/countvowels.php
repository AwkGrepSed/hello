#!/usr/bin/php
<?php

# known input values
$a = array("Richard","Feynman","Ogoy","Deedeedom");
$v = array("a","e","i","o","u");

# make a string from the input
$s = strtolower(implode($a));

# count them and print them
foreach($v as $j)  { echo substr_count($s,$j) . " ";  }
echo "\n";
?>
