#include <stdio.h>
#include <stdlib.h>
#include "fichier.h"


void charger_rep(Contact *tete){


  FILE *fichier = fopen("Liste.txt" , "a+") ;

  if(fichier != NULL){

    char texte[35] ;

    while((fgets(texte , 34 , fichier)) != NULL){

      struct Contact contact ;

      int k = 0 ;

      for(int  i = 0 ; i < strlen(texte) ; i++){

        if((texte[i]!= '\n') && (texte[i]!= '') && (texte[i] !='\0' )) {

          if (texte[i] != ' ') {


            if(k == 0){

              contact.prenom[i] = texte[i] ;

            }else{

              contact.telephone[i] = texte[i] ;
            }

          } else {

            k = 1 ;
          }
        }
      }

      ins_contact(tete , &contact) ;

    }

    fclose(fichier) ;

    printf("Chargement terminé\n", );

  } else {

    printf("Erreur : impossible de lire le fichier\n" );
  }


}

void sauver_rep(Contact *tete){

  Contact *pp = tete ;

  char texte[35] ;

  int pareil = 0 ;


  if(pp =! NULL){

    while (pp -> suivant != NULL) {
      pareil = 0  ;
      FILE *fichier = fopen("Liste.txt" , "a+" ) ;

      while((fgets(texte , 34 , fichier)) != NULL){

              struct Contact contact ;

              int k = 0 ;

              for(int  i = 0 ; i < strlen(texte) ; i++){

                if((texte[i]!= '\n') && (texte[i]!= '')) {

                  if (texte[i] != ' ') {


                    if(k == 0){

                      contact.prenom[i] = texte[i] ;

                    }else{

                      contact.telephone[i] = texte[i] ;
                    }

                  } else {

                    k = 1 ;
                  }
                }
              }
              if((strcmp(pp->telephone  , contact.telephone) == 0) && (strcmp(pp->prenom , contact.prenom) == 0)){
                pareil = 1 ;
              }
      }

      if(pareil != 1){
        // on écrit la ligne dans le fichier
        // Structure  : "<prenom> <telephone>"

        fprintf(fichier,"%s %s\n", pp-> prenom , pp -> telephone );

      }else{

        printf("Ce contact à déja été enregistré\n");
      }
      fclose(fichier) ;

    }

  } else {

    printf(" Désolé , saugarde impossible : la liste de contact est vide\n" );

  }
}
