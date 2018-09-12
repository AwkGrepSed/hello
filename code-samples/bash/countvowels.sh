#!/bin/bash

# basic math function for a bit more, if needed
math()  { (( "$@" )) || true; }

# string to count vowels in
s="RichardFeynmanOgoyDeedeedom"

# how long is it?
l=${#s}

# initialize some counters
cA=0
cE=0
cI=0
cO=0
cU=0

# for the string length
for ((i = 0 ; $i < $l ; i = $i + 1))
do
  # get the character (0 based substrings)
  chr=${s:$i:1}

  # increment the relevant counter, if found
  case $chr in
    [aA])  ((++cA)) ;;
    [eE])  ((++cE)) ;;
    [iI])  ((++cI)) ;;
    [oO])  ((++cO)) ;;
    [uU])  ((++cU)) ;;
  esac 
done

# output the results
echo "$cA $cE $cI $cO $cU"
