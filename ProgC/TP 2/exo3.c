#include<stdio.h>
#include <stdlib.h>

int main(void){



  int tab[17] ;
  srand(1) ;
  printf("\n\n Avant tri : \n ");
  for (int i = 0  ; i < 16  ; i++) {
    tab[i] =  ( rand() % 21 ) ;
    printf("tab[%d] = %d\n", i , tab[i] ) ;}

    printf("\n\nAprès tri : \n" );


  int j , min , tmp  ;






  for(int  i = 0 ; i < 16  ; i++ ){

    min = i ;

    for( j = i + 1 ;  j  <= 16 ; j++ ){

      if( tab[j] < tab[min] ){

        min = j ;

      }

    }
    if(min != i ){

      tmp = tab[min] ;
      tab[min] = tab[i] ;
      tab[i] = tmp ;
    }

    printf(" tab[%d] = %d\n", i , tab[i] );
  }



  return 0 ;
}
