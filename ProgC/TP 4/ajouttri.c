void  ajouttri(float val , float **tab ){



  if(*tab == NULL){

    *tab = (float*) malloc(sizeof(float)) ;

    if (*tab == NULL) {
      printf("Erreur d'allocation :ajouttri\n");
      exit(1);
    }

    **tab = val ;

  //  *tab = val ;
  }else {
    float tmp ;

    int tailletab = sizeof(*tab) / sizeof(float) ;
    printf("tailletab = %d\n", tailletab );
    *tab = (float*)realloc(*tab , sizeof(float*) * (tailletab + 1 )) ;
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
  } }
