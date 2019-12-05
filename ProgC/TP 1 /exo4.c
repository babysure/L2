#include <stdio.h>

int main(void){
 int x = 0 ,y = 0 ;

 printf(" X*Y    0    1    2    3    4    5    6    7    8    9   10  \n");
 printf(" --------------------------------------------------------------\n" );

  for (int x = 0; x <= 10; x++) {
    //on affiche la première colone
    printf(" %d  ", x );


    for(int y = 0 ; y <= 10 ; y++){

      //si le nombre comporte 2 chiffres on retire un espace
      if (((x*y >= 10) && (x*y < 100)) || x == 10 ) {
        printf("   %d" , x*y);

      } else {
      printf("    %d", x*y ); }
    }
    printf("\n");
  }




 return 0 ;
}
