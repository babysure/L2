#include <stdio.h>
main() {
  /* Déclarations */
  int A[10];
  /* tableau */
  int *P;
  /* pointeur dans A */
  /* Saisie des données */
  printf("Introduire 10 entiers : \n");
  for (P=A; P<A+10; P++){
    printf("Elément %d : ", P-A+1);
    scanf("%d", P);
    }
    printf("\n\n\nAprès saisie : \n\n\n");
    for( int i  = 0 ;  i < 10 ; i++){
      printf("Element %d :  %d\n", i + 1 , A[i] );

    }
   }
