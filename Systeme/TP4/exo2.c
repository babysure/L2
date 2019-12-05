#include <stdio.h>
#include <unistd.h>
#include <stdlib.h>

int main(void) {

  char *p = getenv("LANG") ;

  printf(" LANG = %s\n" , *p);

  if(putenv("LANG=en_EN.UTF-8")== 0 ){

    printf("affectation réussi\nLANGUAGE = %s", *p );

  }





  return 0;
}
