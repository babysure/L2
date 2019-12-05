#include <stdio.h>
#include <stdlib.h>

int main(void){

  int tab[16] ;
  srand(1) ;
  for (int i = 0  ; i < 16  ; i++) {
    tab[i] =  ( rand() % 21 ) ;

    printf(" tab[%d] = %d\n", i , tab[i] );
  }




  return 0 ;
}
