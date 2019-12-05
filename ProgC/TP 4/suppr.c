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
