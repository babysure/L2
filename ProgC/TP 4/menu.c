#include <stdio.h>

main(){

  float *tab = NULL ;

  int continuer = 1 ;
  int choix ;
  float val ;
  printf("tab = NULL \n" );

  while (continuer == 1) {

    printf("Que choisissez-vous :\n\n1 <-- ajoutfin()\n2 <-- ajouttri()\n3 <-- suppr()\n4 <-- vider()\ntaper autre chose pour quitter\n\n? : ");
    scanf("%d" , &choix); printf("\n");

    switch (choix) {
      case 1:
        printf("Veuillez saisir une valeur :" );
        scanf("%f",&val );
        ajoutfin(val , &tab);
        break ;

      case 2:
      printf("Veuillez saisir une valeur :" );
      scanf("%f",&val );
      ajouttri(val , &tab);
      break ;

      case 3:
      printf("Veuillez saisir une valeur :" );
      scanf("%f",&val );
      suppr(val , &tab);
      break ;

      case 4:
      vider(&tab) ;

      default :
      continuer = 0 ;
    }


    printf("\n\nAprès opération : \n");

    if(tab == NULL){

      printf("tab = NULL \n" );

    }else{

      int tailletab = (int)(sizeof(tab) / sizeof(float)) ;

      for(int l = 0  ; l < tailletab ; l++ ){

        printf("tab[%d] = %f \n" , l , *(tab +l) );

      }
    }
  } free(tab) ;
}
