#!/usr/bin/php
<?php

function askifok($prompt = "Continue? [Y]es/[N]o", $retries = 4, $remind = "[Y]es or [N]o")
{
  $h = fopen("php://stdin","r");
  while(true)
  {
    echo "\n".$prompt.": ";
    $l = fgets($h);
    $v = substr(strtolower(trim($l)),0,1);
    if ( $v == "y") { return true; }
    if ( $v == "n") { return false; }
    $retries -= 1;
    if ($retries <= 0)  { exit("Invalid Response!\n"); }
    echo $remind."\n";
  }
  fclose($h);
}


# all defaults
if (askifok())           { echo "True\n"; } else { echo "False\n"; }

# only 2 retries
$doit = askifok("Quit?", 2);
if ($doit)               { echo "True\n"; } else { echo "False\n"; }

# test, eh?
$doit = askifok("Quit?", 3, "Come on!  Yes or No");
if ($doit)               { echo "True\n"; } else { echo "False\n"; }

?>
