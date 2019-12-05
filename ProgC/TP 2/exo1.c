#include <stdio.h>




int main(void){

int tab[17] = { 10 , 2 , 0 , 5 , 4 , 0 , 0 , 7  , 0 , 1  } ;
int j = 0 ;


for( int i = 9 ; i >= 0 ; i-- ){

  if (tab[i] == 0){
    j = i ;
    while ((j != 9 ) ||  (tab[j+1] != 0   ) ) {

        tab[j] = tab[j+1] ;

      j++ ;
    }
    tab[j] = 0 ;


  }


 //  printf("tab[%d] = %d \n", i , tab[i] );
   }

  return 0 ;
}
