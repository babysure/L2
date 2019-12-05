#include <stdio.h>
#include <stdlib.h>

void* malloc_protege(unsigned int s){
  void * p;
  if(p=malloc(s)) return p;
  else {perror("erreur allocation\n");exit(EXIT_FAILURE);}
}

typedef struct _cell{
	int valeur;
	struct _cell *suivant;
} Cellule;
typedef struct {
	Cellule *tete;
} Liste;

void afficherListe(Liste *l){
  Cellule *c=l->tete;
  while(c) {
    printf("%2d ",c->valeur);
    c = c -> suivant;
  }
  printf("\n");
}

void creerListeEnum(Liste **pl,int a,int b){
  (*pl) = (Liste*)malloc_protege(sizeof(Liste));
  (*pl)->tete = NULL;
  for(int i = b; i >= a; i--){
    Cellule *c = (*pl)->tete;
    (*pl)->tete = (Cellule*)malloc(sizeof(Cellule));
    (*pl)->tete->valeur = i;
    (*pl)->tete->suivant = c;
  }
}


void mapListe(Liste *l,int (*fct)(int)){
   Cellule *c = l->tete;
  while(c){
    c->valeur = fct(c->valeur);
    c = c->suivant;
  }
}

Liste * combine(Liste *l1, Liste *l2){
  Liste *pl = (Liste*)malloc_protege(sizeof(Liste));
  Cellule *c;
  Cellule *c1 = l1->tete;
  Cellule *c2 = l2->tete;
  
  pl->tete = c1;
  if(!pl->tete) {pl->tete = c2;return pl;}
  c1 = c1->suivant;
  c = pl->tete;
  while(c1 && c2) {c->suivant=c2;c2=c2->suivant;c=c->suivant;c->suivant=c1;c=c->suivant;c1=c1->suivant;}
  if(c1) c->suivant = c1;
  if(c2) c->suivant = c2;

  return pl;

}

int prefixe(Liste *l1, Liste *l2){
  Cellule *c1 = l1->tete;
  Cellule *c2 = l2->tete;
  while(c1 && c2){if(c1->valeur != c2->valeur) return 0; c2=c2->suivant; c1=c1->suivant;}
  if(c2) return 0;
  else return 1;
}

int fois2(int n) {return 2*n;}
int moins1(int n) {return n-1;}
    
int main(){
  Liste *l,*l2,*l3,*cpl,*cc,*cc2,*cc3;
  
  creerListeEnum(&l,1,10);
  //afficherListe(l);
  mapListe(l,fois2);
  afficherListe(l);
  creerListeEnum(&l2,1,10);
  //afficherListe(l2);
  mapListe(l2,fois2);
  mapListe(l2,moins1);
  afficherListe(l2);

  cc=combine(l2,l);
  afficherListe(cc);

  creerListeEnum(&l3,10,1);
  afficherListe(l3);

  cc2=combine(cc,l3);
  afficherListe(cc2); 

  afficherListe(l3);
  cc3=combine(l3,cc2);
  afficherListe(cc3);

  creerListeEnum(&l,1,10);
  //afficherListe(l);
  mapListe(l,fois2);
  afficherListe(l);
  creerListeEnum(&l2,1,5);
  //afficherListe(l2);
  mapListe(l2,fois2);
  mapListe(l2,moins1);
  afficherListe(l2);

  cc=combine(l2,l);
  afficherListe(cc);

   
  creerListeEnum(&l,1,5);
  //afficherListe(l);
  mapListe(l,fois2);
  afficherListe(l);
  creerListeEnum(&l2,1,10);
  //afficherListe(l2);
  mapListe(l2,fois2);
  mapListe(l2,moins1);
  afficherListe(l2);

  cc=combine(l2,l);
  afficherListe(cc);
  
  creerListeEnum(&l,1,5);
  printf("%d \n",prefixe(cc,l));
  
  creerListeEnum(&l,1,15);
  printf("%d \n",prefixe(cc,l));
  
  creerListeEnum(&l,1,25);
  printf("%d \n",prefixe(cc,l));
  
  
  creerListeEnum(&l3,10,1);
  printf("%d \n",prefixe(cc,l3));
  printf("%d \n",prefixe(l3,cc));
  printf("%d \n",prefixe(cc,cc));
  printf("%d \n",prefixe(l3,l3));
 
 
 
  
  return 0;
}
