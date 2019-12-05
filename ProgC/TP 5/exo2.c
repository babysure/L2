#include <stdio.h>
#include <string.h>
#include "fonction.h"

Contact init_liste(void){

  Contact *tete = malloc(sizeof(Contact)) ;


  if (tete != NULL) {

    return tete ;

  }

}


//instancier dans le vide ?
Contact ins_dans_vide(char telephone[] , char prenom[]){

  Contact *tete = init_liste() ;

  Contact *contact = malloc(sizeof(Contact));



  if( (contact != NULL) && (tete != NULL) ){

    contact->telephone  = telephone ;

    contact->prenom = prenom ;

    contact->suivant = NULL ;


  }


  tete = contact ;

  return tete ;

}



 void ins_en_debut( Contact *tete , char telephone[] , char prenom[] ){


   Contact *contact = malloc(sizeof(Contact));

   if((contact!= NULL) && (tete != NULL) ){


     contact->telephone  = telephone ;

     contact->prenom = prenom ;

     contact->suivant = tete ;

     tete = contact;
    }

    if((tete == NULL) && (contact != NULL) ) {

      tete = ins_dans_vide(telephone , prenom) ;

    }
 }




void ins_en_fin(Contact *tete , char telephone[] , char prenom[]){

  Contact *contact = malloc(sizeof(Contact));

  if( (contrat != NULL) && (tete != NULL) ){


    Contact *pp = tete ;


    while(pp -> suivant != NULL){

      pp = pp -> suivant ;
    }


    contact->telephone  = telephone ;

    contact->prenom = prenom ;

    contact->suivant = NULL;

    pp -> suivant  = contact ;


  }
}



void supp_debut(Contact *tete){

  tete = tete -> suivant  ;

}

void afficher_liste( Contact *tete){

  Contact *pp  = tete ;
  int n = 0 ;
  while(pp -> suivant != NULL ){
    n++ ;
    printf("\n\nContact %d  \n " ,n);
    afficher_contact(pp) ;


  }

}


void detruire_liste(Contact *tete){
  Contact  *pp = tete ;
while(tete -> suivant != NULL){

    tete = tete -> suivant ;
    free(pp) ;
    Contact *pp = tete ;

}
free(pp) ;

tete = NULL ;

 printf("La liste à été suprimer \n" );

}
