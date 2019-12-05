#include <stdio.h>
#include <stdlib.h>

  int dicho(int tab[] , int x){
    int a ,b ,m ;

    a = 0 ;
    b = 15 ;
    m = (a+b)/2 ;

    while( a < b ){

      if (tab[m] == x) {
        return m ;


      }else if (tab[m] > x) {

        b = m-1 ;

      } else {

        a = m + 1 ;

      }
      m = (a+b) / 2 ;
    }

    return a ;

  }




int main(void){

  int x ;

  printf("Quel valeur voulez vous chercher ?\n X = ");
  scanf("%d", &x );



    int tab[17] ;
    srand(1) ;

    for (int i = 0  ; i < 16  ; i++) {
      tab[i] =  ( rand() % 21 ) ;
      }




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

    }

    printf(" %d ce trouve à la position %d\n", x , dicho(tab , x) );


  return 0 ;
}
