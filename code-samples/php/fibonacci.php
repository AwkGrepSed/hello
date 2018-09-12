#!/usr/bin/php
<?php

function fib1($n)
{
  $fib     = array();
  $fib[]   = 0;  # first
  $fib[]   = 1;  # second
  $e       = 1;  # last used element in the array
  # while the value in current element is less than needed value
  while(true)
  {
    $nxtv  = ($fib[$e] + $fib[$e-1]);
    if ($nxtv <= $n)  { $fib[] = $nxtv; $e++; continue; }
    break;
  }
  return $fib;
}

# print fibonacci upto given number
foreach(fib1(2000) as $v) { echo "$v "; }
echo "\n";

# obtain an array of fibonacci upto given number
$f = fib1(2000);
print_r($f);
?>
