#ifndef PREPA_H
#define PREPA_H

#include <stdlib.h>
#include <stdio.h>
#include <string.h>
/**
  exo 2

float  ajoutNote(float *tab , int taille) ;

float suppNote(float *tab , int taille ) ;

float calculMoyenne( float *tab , int taille ) ;
*/

typedef float (*Option[3])(float* , int ) ;


Option  ajoutNote(float *tab , int taille) ;

Option suppNote(float *tab , int taille ) ;

Option calculMoyenne( float *tab , int taille ) ;

Option (*routines[3])(float* , int) = { ajoutNote , suppNote , calculMoyenne  };

/**
  exo 2

float (*ajoutNote)(float , int ) = &ajoutNote ;
float (*suppNote)(float  , int) = &suppNote ;
float  (*calculMoyenne)(float, int) = &calculMoyenne ;
*/
typedef struct Etudiant Etudiant ;
struct Etudiant
{
  char *nom ;
  char *prenom ;
  float *notes ;
  int nb_notes ;
  Etudiant *suivant ;
  Option (*routines[])(float* , int)  ;


} ;




typedef struct  ListEtudiants Liste ;
struct ListEtudiants
{
  Etudiant *tete ;
  int *nb_etudiants ;

};


  Option  ajoutNote(float *tab , int taille){



    tab = realloc(tab , sizeof(float)*(taille + 1 )) ;

    if(tab){

    printf("Veuillez saisir la note : ");

    scanf("%f", tab+taille );

  } else{
    printf("Erreur d'allocation mémoire\n");
    return  0.0 ; }


    printf("\n\n");

    return  1.0  ; }



Option suppNote(float *tab , int taille ){

  printf("Veuillez saisir la note : ");

  float val ;

  scanf("%f" , &val);

  printf("\n\n");

  for(int i = 0 ;  i < taille   ; i++){

    if(val == tab[i]){

      for (int k = i; k < taille -1; k++) { tab[k] = tab[k+1] ;   }

      tab = realloc(tab , sizeof(float)*(taille -1)) ;

      if(tab){ return (float) 1.0 ; } else {

        printf("Erreur mémoire\n");

        return   0.0 ; }

    }

  } return  0.0 ;

}


Option calculMoyenne( float *tab , int taille ){

  float val = 0 ;

  for(int i = 0  ; i < taille ; i++){ val +=  ((float)(tab[i])) / taille ; }

  return  val ;

}

/**

  à fnir

void printTab(float *tab , int taille){

  char chaine[] = "-"

  for(int k = 0 ; k < taille+ 1/)

}


*/


void reallocString(char *tab){

sscanf( tab ,"%s", tab )
int  taille = strlen(tab) ;

tab = realloc( tab ,sizeof(char) * taille) ;
}



int question_user(void){

  char val[4] ;
  gets(val) ;
  if(val[0] =='y' || val[0] =='Y' || val[0] =='o' || val[0] =='O'){ return 1 ;   }


  return 0 ;
}

void saisir_etudiant(Etudiant *etudiant){



        printf("Nom de l'étudiant : ? \n(50 charactère max ) ");

        etudiant -> nom = malloc(sizeof(char)*50) ;

        gets(etudiant -> nom);

        printf("\n\n");
        /**
        int taille  = strlen(etudiant -> nom) ;

        etudiant-> nom = realloc(etudiant , sizeof(char)*taille) ;

        */
        printf("Prenom de l'étudiant : ? \n(50 charactère max ) ");

        etudiant -> prenom =  malloc(sizeof(char)*50) ;

        gets(etudiant -> prenom);

        printf("\n\n");

        printf("il y a des notes à saisir ?(y/n)");




        int  continuer = question_user() ;


        while(continuer){



          etudiant->routines[0](etudiant->notes ,etudiant-> nb_notes) ;
          etudiant-> nb_notes ++ ;


          printf("il reste des notes à saisir ?(y/n)");

          continuer = question_user() ;



          }

          //printTab(etudiant -> notes) ;

          printf("Ce sont bien les notes que vous vouliez saisir ?(y/n)");

          if( question_user() == 0 ) {

              etudiant->routines[1](etudiant->notes ,etudiant-> nb_notes) ;
              etudiant-> nb_notes -- ;

          }



        etudiant -> suivant = NULL ;



        }


Liste * initList(){

  Liste *p = (Liste *) malloc(sizeof(Liste)) ;

  if (p) {

    p->tete = NULL ;
    p-> nb_etudiants = 0 ;

    printf("La liste à été créée\n");

    return p ;

  } else {

    printf("Erreur d'allocation mémoire\n");

  }
  return p ;
}

int ajoutEtudiant(Liste *liste){

  if(liste == NULL){

    printf("!!!Il y a aucune liste ou rajouter un étudiant!!!\n Pour résoudre le problème vous pouvez : \n\n\t0 -> Créer une nouvelle liste d'étudiant\n\t7-> Charger la liste d'étudiant") ;

  } else {


      Etudiant *etudiant = (Etudiant *) malloc(sizeof(Etudiant)) ;
      if(etudiant){

        saisir_etudiant(etudiant) ;

        liste-> nb_etudiants ++ ;

        if (liste -> nb_etudiants && liste -> tete){

          Etudiant  *p =  liste -> tete ;

          while (p-> suivant ){

            if((strcmp( etudiant->nom , p->suivant->nom ) == 0) && ( strcmp( etudiant->prenom , p->suivant->prenom ) < 0 ) ){

              etudiant-> suivant = p-> suivant ;
              p-> suivant = etudiant ;

              return 0 ;


              } else if ( strcmp( etudiant->nom , p->suivant->nom ) < 0 ) {

                etudiant-> suivant = p-> suivant ;
                p-> suivant = etudiant ;
                return 0 ; }


                p = p -> suivant ;


              }


            }else{ liste -> tete = etudiant ; }



         printf("L'étudiant à bien été ajouté \n");

      }else { printf("Erreur d'allocation mémoire\n");   }


    }

  }



  void afficheEtudiant( Liste *liste){

    Etudiant *p =  liste -> tete ;

    printf("Liste des étudiants:\n\n");
    for(int i = 0 ; i < (liste -> nb_etudiants) ; i++ ){
      printf("Etudiant %d\n \tnom : %s\n \tprenom : %s\n \t notes :  ", i , p->nom , p-> prenom );
      for(int k = 0 ; k < (p -> nb_notes) ; k++ ){ printf("%f  ", p-> notes[k] ); }

      printf("\n \tnb_notes : %d\n \tmoyenne : %f", p-> nb_notes , p->routines[2](p->notes ,p->nb_notes) );


      p = p -> suivant ;
      printf("\n\n" );

    }



    printf("\n\n\n");

  }




  int suppEtudiant(Liste *liste ){



    printf("Nom de l'étudiant : ? \n(50 charactère max ) ");

    char *nom = malloc(sizeof(char)*50) ;

    gets(nom);

    printf("\n\n") ;




    printf("Prenom de l'étudiant : ? \n(50 charactère max ) ");

    char *prenom = malloc(sizeof(char)*50) ;

    gets(prenom);

    printf("\n\n");


    if( (liste -> tete) && (liste -> nb_etudiants) ){
      Etudiant *p =  liste -> tete ;


      if( (strcmp(nom , p->nom) || strcmp(prenom , p-> prenom)) == 0){

        liste -> tete =  p -> suivant ;
        free(p->nom);;
        free(p->prenom);
        free(p->notes) ;
        free(p) ;
        liste -> nb_etudiants -- ;

        printf("L'étudiant à bien été suprimé \n");
        return 1 ;

      }

        while (p->suivant) {

          if((strcmp(nom , p->suivant->nom) || strcmp(prenom , p->suivant-> prenom) ) == 0 ){


            Etudiant  *tmp = p->suivant ;


            p->suivant = p->suivant->suivant ;
            free(tmp) ;



            liste -> nb_etudiants -- ;
            printf("L'étudiant à bien été suprimé \n");

            free(prenom) ;
            free(nom) ;
            return 1 ;

          }

          p = p-> suivant ;
        }

        printf("Cette étudiant n'est pas présent dans la liste donc il n'a pas pu être suprimer\n");
      }
    }

void viderList(Liste *liste){
  if (liste -> tete ) {

    while (liste -> tete) {

      Etudiant *tmp = liste -> tete ;

      liste -> tete = liste-> tete -> suivant  ;


      free(tmp->notes) ;
      free(tmp->nom) ;
      free(tmp-> prenom) ;
      free(tmp) ;


      liste -> nb_etudiants --  ;

    }

  }
}


// à finir (scanf)

void charger(Liste *liste){


  FILE *fichier = fopen("Liste.txt" , "a+") ;

  if(fichier != NULL){


   char  *text  = malloc(sizeof(char)*256) ;


    while(fgets(text , 255 , fichier) != NULL){

      liste-> nb_etudiants++ ;

      Etudiant *etudiant = (Etudiant *) malloc(sizeof(Etudiant)) ;

      if(etudiant){

        etudiant-> prenom = (char *) malloc(sizeof(char)*50) ;
        etudiant-> nom = (char *) malloc(sizeof(char)*50) ;

        sscanf(text , "%s %s %d" , etudiant->nom ,etudiant->prenom , etudiant->nb_notes ) ;


        etudiant-> notes = (float *) malloc(sizeof(float)*(etudiant->nb_notes)) ;

        int taille = strlen(etudiant->nom) + strlen(etudiant->prenom) ;

        int k = -1 ;
        char nb[3] ;

        for(int i  = 0 ; i < strlen(text) ; i+3){

            if(text[taille + 3 + i] != ('\n' || '\0'  ||  ' ')){
              k++ ;

              nb[0] =  text[taille + 3 + i]  ;

              strcat(nb , text[taille + 4 + i] ) ;
               sscanf(nb , "%f" , etudiant->notes + k )  ; }

               }
          }



          if(liste ==NULL){

            liste = initList() ;


          } else {



              if(etudiant){


                if (liste -> nb_etudiants && liste -> tete){

                  Etudiant  *p =  liste -> tete ;

                  while (p-> suivant ){

                    if((strcmp( etudiant->nom , p->suivant->nom ) == 0) && ( strcmp( etudiant->prenom , p->suivant->prenom ) < 0 ) ){

                      etudiant-> suivant = p-> suivant ;
                      p-> suivant = etudiant ;
                      liste->nb_etudiants ++ ;



                      } else if ( strcmp( etudiant->nom , p->suivant->nom ) < 0 ) {

                        etudiant-> suivant = p-> suivant ;
                        p-> suivant = etudiant ;
                        liste-> nb_etudiants ++ ;


                      }else if( (strcmp( etudiant->nom , p->suivant->nom ) == 0) && ( strcmp( etudiant->prenom , p->suivant->prenom ) == 0 ) ){


                        free(etudiant->notes) ;
                        free(etudiant->nom) ;
                        free(etudiant-> prenom) ;
                        free(etudiant) ;


                      }

                        p = p -> suivant ;


                      }


                    } else{ liste -> tete = etudiant ; }


              }else { printf("Erreur d'allocation mémoire\n");   }


            }

        }


        fclose(fichier) ;

        printf("Chargement terminé\n");

      } else {   printf("Erreur : impossible de lire le fichier\n" ); }


    }



void enregistrer( Liste  *liste){

  FILE *fichier = fopen("Liste.txt" , "a+") ;

  if(fichier != NULL){

    if (liste) {

      Etudiant *p = liste -> tete ;
      char nb[3] ;
      char text[256] = "" ;

      while (p) {


        sprintf(text ,  "%s" , p->nom );

        strcat(text , ' ');
        strcat(text , p->prenom);
        strcat(text , ' ');
        sprintf(nb , "%d" , p->nb_notes);
        strcat(text , nb);
        for(int i = 0 ; i < p-> nb_notes ; i++){
          strcat(text , ' ');
          sprintf(nb , "%d" , p->nb_notes);
          if(p->notes[i] < 10){


            nb[1] = nb[0] ;
            nb[0] = '0' ;

          }

          strcat(text , nb) ;

        }
        strcat(text , '\n') ;
        fputs(text , fichier ) ;
        p = p->suivant ;

      }


    } else {

      printf("ERREUR : la liste d'étudiant n'existe pas \n");
    }

  }


}


void menu(){
  printf("Bonjour (^_^)\n Avec ce programe tu va pouvoir gérer ta liste d'étudiants\n");

  int continuer = 1  ;

  int val ;

  Liste *liste = NULL ;

  while(continuer){

    printf("Voici tes Posibilités:\n\t0 -> Créer une nouvelle liste d'étudiant\n\t1 -> Ajouter un étudiant (Par ordre alphabétique)");
    printf("\n\t2-> Suprimer un étudiant\n\t3-> Affichier la liste d'étudiant\n\t4-> Suprimer la liste de d'étudiant\n\t5-> Quiter le programe");
    printf("\n\t6->Sauvgarder la liste d'étudiant\n\t7-> Charger la liste d'étudiant");
    printf("\n\nAlors vous avez choisie quoi ? :  ");


    switch (val) {

      case 0 :

        liste = initList() ;

        break ;

      case 1 :

          ajoutEtudiant(liste) ;

        break ;


      case 2 :

        suppEtudiant(liste) ;

        break ;


      case 3 :

        afficheEtudiant(liste) ;

        break ;

      case 4 :

        viderList(liste) ;

        break ;

      case 5 :

        continuer = 0 ;

        break;

      case 7 :

        charger(liste) ;

        break ;

      case 6 :

        enregistrer(liste) ;
        break;

      default :

          printf("Désolé mais j'ai pas compris ce que vous vouliez dire\n");
          break ;

    }

  }
  printf("Au revoir (^_^)\n");
  viderList(liste);

}



#endif
