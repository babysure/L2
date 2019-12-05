#include <stdio.h>
#include <string.h>
#include "fonction.h"


struct Contact
{
  char telephone[11];
  char prenom[20] ;
  Contact *suivant ;

};



Contact saisir_contact(){


    Contact *contact = malloc(sizeof(Contact)) ;

    if(contact != NULL){


      printf("Veuillez saisir le prénom du contact\n");
      scanf("%s", contact->prenom );

      printf("\nVeuillez saisir un numéro de téléphone\n");
      scanf("%s", contact->telephone );
      printf("\n");

      return contact ;

    } else {


      printf("Erreur d'allocation\n" );


    }


}



void afficher_contact(Contact *contact){


  printf("\t Prenom : %s \n \t Téléphone :%s\n", contact->prenom , contact->telephone );

}
