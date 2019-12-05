#include <stdio.h>
#include <stdlib.h>
#include <string.h>

int main(void){
  /**
  FILE *file = fopen("test.txt" , "a+") ;

  fputs("coucou " , file ) ;

  fputs("bibou\n" , file) ;

  fputs("j'espere que tt va bien pr toi (^_^)" , file) ;

  */

  char chaine[50] ;

  sprintf(chaine , "coucou") ;

  sprintf(chaine , "dada") ;

  printf("%s\n", chaine );

  return 0 ;
}
