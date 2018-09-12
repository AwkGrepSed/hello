#include <stdio.h>
#include <stdlib.h>

int main(int argc, char *argv[])
{
  int x;

  if (argc != 2)  {
    printf("usage: %s filename\n",argv[0]);
    exit(1);
  }

  FILE *file = fopen(argv[1], "r");
  if (file == 0)  { 
    printf("error: %s could not be opened\n",argv[1]);
    exit(1);
  }

  while( (x=fgetc(file) ) != EOF )  { printf("%c",x); }
  fclose(file);
}
