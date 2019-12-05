#include <stdio.h>

main(){
  char CH[256] ;
  char *P ;
  printf("Veuillez saisir une chaine de caractère \n" );

  gets(CH);
  P = CH ;
  while(*P != '\0' ){
    P++ ;
  }
  printf("la chaine saisie à une longueur de   %d caractère(s) \n",   ( (int)P  ) - ( (int)CH )  );

}
