#!/usr/bin/python3

# known input values
a = ["Richard","Feynman","Ogoy","Deedeedom"]

# make string from input
d = ''.join(a)

# print the count of the vowels
print(*map(d.lower().count, "aeiou"))

