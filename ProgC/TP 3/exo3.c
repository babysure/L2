#include <stdio.h>
#include <stdlib.h>




main(){

  int A[10] = { 2 , 10 , 0 , 5 , 4 , 2 , 0 , 0 , 1 , 1} ;

  int *P1 , *P2 , x , AIDE , nb_x = 0 ;

  printf("Veuillez saisir X : ");
  scanf("%d", &x );
  printf("\n\n\n");


  for (P1=A; P1<A+10; P1++){

    if (x == *P1) {
        nb_x ++ ;

        for (P2 = P1; P2 < A + 10 ; P2++) {

          *P2 = *(P2 + 1) ;
        }
        // au cas où deux occurences de x  ce suivent (essayez avec x = 0 vous vérrez si je ments )
        P1 -- ;

    }
   }

   if (nb_x == 0) {
     printf("Aucune occurence de x n'a été détecter\n" );
   }

   for (int i = 0; i < 10 -nb_x   ; i++) {

     printf("Après trie A[%d] = %d \n", i  , A[i] );
   }

   //on ajuste P2 pour l'inversion
   P2 = A ;
   P2+= 10 ;
   for (int i = 0; i < nb_x ; i++) {
     P2 -- ;
   }
   P2 -- ;



   // renversement
   for (P1 = A; P1 < A + (int)((10 - nb_x)/2)  ; P1++) {
     AIDE = *P1 ;
     *P1 = *P2 ;
     *P2 = AIDE ;
     P2 -- ;
   }

   printf("\n\n\n");

   for (int i = 0; i < 10 -nb_x   ; i++) {

     printf("Après renversement A[%d] = %d \n", i  , A[i] );
   }
}
