#include <stdio.h>
#include <stdlib.h>


/** pour utiliser un Pointeur il faut passer **P en paramètre et pour l'utilier le tableau passer en paramètre (&tab)  */

void  ajoutfin( float val , float **tab ){

  if(*tab == NULL){

    *tab =(float *)malloc(sizeof(float)) ;
    //structure de controle
    if ( *tab == NULL) {
      printf("Erreur d'allocation :ajoutfin\n");
      exit(1);
    }

    **tab = val ;


  }else {

    int tailletab = sizeof(*tab) / sizeof(float) ;
    printf("tailletab = %d\n", tailletab );
    *tab = (float*)realloc(*tab , sizeof(float) * (tailletab)) ;
    if ( *tab == NULL) {
      printf("Erreur d'allocation :ajoutfin\n");
      exit(1);
    }


    for(int l = 0  ; l < tailletab ; l++ ){

      printf("tab[%d] = %f \n" , l , *(tab +l) );

    }
    **(tab +tailletab-1) = val ;

  }



  }


  void  ajouttri(float val , float **tab ){

    float tmp ;

    if(*tab == NULL){

      *tab = (float**) malloc(sizeof(float*)) ;

      if (*tab == NULL) {
        printf("Erreur d'allocation :ajouttri\n");
        exit(1);
      }

      **tab = val ;

    //  *tab = val ;
    }else {

      int tailletab = sizeof(*tab) / sizeof(float) ;
      printf("tailletab = %d\n", tailletab );
      *tab = (float**)realloc(*tab , sizeof(float*) * (tailletab + 1 )) ;
      if (*tab == NULL) {
        printf("Erreur d'allocation :ajouttri\n");
        exit(1);
      }

      **(tab + tailletab) = val ;

      for (int  i = tailletab ; i > 0 ; i--) {
        if( **(tab +i ) >  **(tab +i-1) ){

          tmp = **(tab +i) ;
          **(tab +i) = **(tab +i-1) ;
          **(tab +i) = tmp ;


        }
      }
    }



  }


  void  suppr(float val , float **tab ){

    if (*tab != NULL) {

      int tailletab = sizeof(*tab) / sizeof(float) ;
      printf("tailletab = %d\n", tailletab );
      float tmp ;
      for(int i =  0 ; i < tailletab ;  i++ ){


        //si on a trouver la valeur à suprimer
        if ( **(tab+i) == val) {

          //on tasse le tableau
          for (int k = i; k < tailletab -1 ; k++) {
            tab[k] = tab[k+1] ;

          }

          // on suprime une valleur dans le tableau
          *tab = realloc(*tab , sizeof(float*) * (tailletab - 1));
          if (*tab == NULL) {
            printf("Erreur d'allocation :suppr\n");
            exit(1);
          }

        }
    }

    }

  }

  void  vider(float **tab){

    free(*tab) ;

    *tab = NULL ;

  }


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
