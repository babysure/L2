#ifndef FONCTION_H
#define FONCTION_H
//Exo1

Contact saisir_contact(void) ;

void afficher_contact(Contact *contact) ;

//Exo2

Contact init_liste(char telephone[] , char prenom[] ) ;

Contact ins_dans_vide(char telephone[] , char prenom[]) ;

void ins_en_debut( Contact *tete , char telephone[] , char prenom[] ) ;

void ins_en_fin(Contact *tete , char telephone[] , char prenom[]) ;

void supp_debut(Contact *tete) ;

void afficher_liste( Contact *tete) ;

void  detruire_liste(Contact *tete) ;

void supp_contact(Contact *tete , char prenom[] ) ;





//Exo3

//ceci est une fonction perso
int ordre_alpha( char ch1[] , char ch2[]) ;

void ins_contact(Contact *tete  , Contact *contact) ;


// Interface

void interface(void) ;


//Exo5

void charger_rep(Contact *tete) ;

void sauver_rep(Contact *tete) ;

#endif
