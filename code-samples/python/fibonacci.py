#!/usr/bin/python3

def fib1(n):
  a, b = 0, 1
  while a < n:
    print(a, end=' ')
    a, b = b, a+b
  print()


def fib2(n):
  res = []
  a, b = 0, 1
  while a < n:
    res.append(a)
    a, b = b, a+b
  return res

# print fibonacci numbers upto 2000
fib1(2000)

# return a list of fibonacci number upto 2000
f = fib2(2000)
print(f)
