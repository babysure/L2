#include <stdio.h>
#include <stdlib.h>
#include "fonction.h"

struct Contact
{
  char telephone[13] ;
  char prenom[20] ;
  Contact *suivant ;


}

typedef struct Contact Contact ;


void interface(){

  int continuer = 1 ;
  int val ;

printf("Bonjour (^_^)\n Avec ce programe tu va pouvoir gérer ta liste de contact\n");
Contact *tete  = NULL ;

  while (continuer){

  printf("Voici tes Posibilités:\n\t0 -> Créer une nouvelle liste de contact\n\t1 -> Ajouter un contact (Par ordre alphabétique)");
  printf("\n\t2-> Suprimer un contact\n\t3-> Affichier la liste de contact\n\t4-> Suprimer la liste de contact\n\t5-> Quiter le programe");
  printf("\n\t6->Sauvgarder la liste de contact\n\t7-> Charger la liste de contact");
  printf("\n\nAlors vous avez choisie quoi ? :  ");



  scanf("%d" , &val);

  switch(val){

    case 0:


      Contact *contact =  saisir_contact()


      ins_dans_vide(tete , contact->telephone , contact->prenom) ;

      break;



    case 1 :

      ins_contact(tete , saisir_contact()) ;

      break ;



    case 2:

      char prenom[20] ;

      printf("Quelle est le prenom du contact à suprimer ? : \n" );

      gets(prenom);

      supp_contact(tete , prenom)

      break ;



    case 3:

      afficher_liste(tete) ;

      break ;



    case 4:

      detruire_liste(tete) ;

      break ;


    case 5 :

      continuer = 0 ;

      break ;

    case 6 :

      sauver_rep(tete) ;

      break ;

    case 7 :

      charger_rep(tete) ;

      break ;





    default :

      printf("Désolé mais j'ai pas compris ce que vous vouliez dire\n");
    break ;
  }

  }


}


/**  J'aurrai bien voulu mettre
le main dans un fichier séparé mais on ne peut pas
déposer assez de fichier */




int main(void) {

  interface() ;

  return 0;
}
