#include <stdio.h>

int main()
{
  // definitions: string to search, length, and counters
  char s[] = "RichardFeynmanOgoyDeedeedom\0";
  int l = 0;
  int cA = 0, cE = 0, cI = 0, cO = 0, cU = 0;

  // increment the relevant counter, if found in string
  while(s[l] != '\0')
  {
    if (s[l] == 'A' || s[l] == 'a')  { cA++; }
    if (s[l] == 'E' || s[l] == 'e')  { cE++; }
    if (s[l] == 'I' || s[l] == 'i')  { cI++; }
    if (s[l] == 'O' || s[l] == 'o')  { cO++; }
    if (s[l] == 'U' || s[l] == 'u')  { cU++; }
    l++;
  }
  
  // output the results
  printf("%d %d %d %d %d\n", cA, cE, cI, cO, cU);

  return 0;
}
