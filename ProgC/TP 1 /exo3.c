#include <stdio.h>

int main(void) {

  float val = 0 , moy = 0  ;
  int nb = 0 ;

  while ( val >= 0 ) {

    printf("Veuillez saisir un nombre positif\n" );
    scanf("%f", &val );

    nb++ ;
    moy+= val ;

    printf("la moyenne actuel est de %f\n\n\n" , moy / nb );
  }
    printf("\n\nla moyenne final est de %f\n" , moy / nb );

  return 0;
}
