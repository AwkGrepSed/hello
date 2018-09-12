#!/usr/bin/php
<?php
// fizzbuzz.php
// Copyright (C) 2018 Gerald B. Hammack <wizard171@gmail.com>
// ---------------------------------------------------------------------------
// Pgmr:  Gerald B. Hammack
// Desc:  Coding Test
// ---------------------------------------------------------------------------

// For the numbers between 1 and 100, inclusive, where the number is:
// - multiple of both 3 and 5, print "FizzBuzz"
// - multiple of 3, print "Fizz"
// - multiple of 5, print "Buzz"
for ($i = 1; $i <= 100; $i++)
{
  echo "\n $i ";
  switch(true)
  {
    case ($i %15 == 0):  echo " FizzBuzz"; break;  # both 3 and 5
    case ($i %3  == 0):  echo " Fizz"; break;
    case ($i %5  == 0):  echo " Buzz"; break;
  }
}
echo "\n";
?>
