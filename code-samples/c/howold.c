#include <stdio.h>
int main()
{
  int age;

  printf("Hello!\n\n");

  printf("Input your age: "); scanf("%d", &age);
  printf("Age: %d\n\n", age);

  if (age <= 10)                {  printf("\nNot old enough yet!\n"); }
  if (age >  10 && age <= 20)   { printf("\nAh, the teen, tween, years!\n"); }
  if (age >  20 && age <= 30)   { printf("\nSo, arrogant much?\n"); }
  if (age >  30 && age <= 40)   { printf("\nOld enough to know better, still doing it!\n"); }
  if (age >  40 && age <= 50)   { printf("\nMight have know better, forgot to ask!\n"); }
  if (age >= 50)                { printf("\nBah, just too damn old, eh?!\n"); }

  printf("\nDone!\n\n");
  getchar();
  return 0;
}
