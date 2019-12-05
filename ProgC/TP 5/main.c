#include <stdio.h>
#include "fichier.h"

struct Contact
{
  char telephone[13] ;
  char prenom[20] ;
  Contact *suivant ;


}

typedef struct Contact Contact ;

int main(void) {

  interface() ;

  return 0;
}
