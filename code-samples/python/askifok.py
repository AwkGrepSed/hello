#!/usr/bin/python3

# ask a silly question, get silly answer
def askifok(prompt, retries=4, reminder='Y or N, Yes or No, or Nope'):
  while True:
    ok = input(prompt)
    if ok in ('y', 'ye', 'yes'):
      return True
    if ok in ('n', 'no', 'nop', 'nope'):
      return False
    retries = retries - 1
    if retries < 0:
      raise ValueError('invalid response')
    print(reminder)


# default number of tries
askifok('Do you really want to quit?')

# only 2 tries
askifok('Do you really want to quit?', 2)

# only 2 tries, and testy reminder
askifok('Do you really want to quit?', 2, 'Oh, come on, yes or no!')
