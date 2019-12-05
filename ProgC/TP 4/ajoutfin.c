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
