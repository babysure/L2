#include <stdio.h>
#include <string.h>
#include "fonction.h"


int ordre_alpha( char ch1[] , char ch2[]){
  //retourne 0 quand ch1 après ch2  et 1 dans le cas contraire
  // et retoune 1 si les chaines sont identiques

  taille1 = 0 ;

  while(*(ch1 + taille1) != '\0'){
    taille1++ ;
  }

  taille2 = 0 ;

  while(*(ch2 + taille2) != '\0'){
    taille2++ ;
  }



  if (  taille1 >= taille2) {

    min = taille2 ;

  } else {

    min = taille1 ;
  }

    for(int i = 0 ; i < min  ; i++){

      if(ch1[i] != ch2[i]){

        if( ( (int)ch1[i] ) > ( (int)ch2[i] ) )  ){

        return 0; } else { return 1; }

      }

      }

      return 1 ;

    }




void ins_contact(Contact *tete  , Contact *contact){

  if(tete = NULL){

      tete  = ins_dans_vide(contact->telephone , contact -> prenom) ;

      return 0 ;

  }


  Contact *pp  =  tete  ;
  Contact *tmp ;

  while( pp -> suivant != NULL){


    if (   ordre_alpha( contact->prenom  , pp -> suivant -> prenom ) == 1  ) {

        tmp = pp->suivant ;

        pp->suivant = contact ;

        contact->suivant  = tmp ;

        break ;
    }

    pp  = pp -> suivant  ;


  }


if(pp -> suivant == NULL && (tete != NULL) ){

  ins_en_fin(tete ,  contact->telephone , contact->prenom) ;

}

}


void supp_contact(Contact *tete , char prenom[] ){
  int fait = 0 ;

  Contact *pp = tete ;

  //si le premier élément est a supprimer
  while( (strcmp(pp->prenom , prenom)== 0) && (pp == tete) && (pp-> suivant != NULL) ) {

      supp_debut(tete) ;
      pp = tete ;

      fait++ ;
  }


  Contact *precedent =  pp ;
  //si il y a un élément à suprimer dans la liste
  while(pp->suivant != NULL){

    if (strcmp(pp->prenom , prenom)== 0) {

        precedent -> suivant = pp -> suivant ;
        fait++ ;

    }
    precedent = pp ;
    pp = pp-> suivant ;
  }

  //ici pp -> suivant est NULL
  //si il y a un élément à suprimer en fin de liste
  if(strcmp(pp->prenom , prenom)== 0){

    precedent->suivant = NULL ;
    fait++ ;


  }

  //si il y a un seul élément dans la liste
  if((pp == tete)&&(strcmp(pp->prenom , prenom)== 0)){

    tete = NULL ;
    fait++ ;
  }

  if(fait == 0){

    printf("Aucun contact n'a été suprimé\n");

    } else {

          for(int i = 0 ; i < strlen(prenom)  ; i++){ printf("%c", prenom[i] ); }

          printf(" à été suprimer\n");

          ; }


}
