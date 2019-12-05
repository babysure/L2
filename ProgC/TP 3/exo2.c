#include <stdio.h>
#include <stdlib.h>

/**
supprTab( int tab[] , x  ){



} */

main(){

  int A[10] = { 2 , 10 , 0 , 5 , 4 , 2 , 0 , 0 , 1 , 1} ;

  int *P1 , *P2 , x , nb_x = 0 ;


  printf("adrress mémoire A = %p \n", A  );

  printf("Veuillez saisir X : ");
  scanf("%d", &x );


  for (P1=A; P1<A+10; P1++){

    if (x == *P1) {
        nb_x ++ ;

        printf(" *P1 = %d\n nb_x = %d \n\n", *P1 , nb_x );

        for (P2 = P1; P2 < A + 10 ; P2++) {

          *P2 = *(P2 + 1) ;
        }
        // au cas où deux occurence de x  ce suivent
        P1 -- ;

    }
   }

   for (int i = 0; i < 10 -nb_x  ; i++) {

     printf("Après trie A[%d] = %d \n", i  , A[i] );

   }

}
