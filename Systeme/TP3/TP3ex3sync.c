#include <stdio.h>
#include <unistd.h>
#include <stdlib.h>
#include <signal.h>


void main(){

  FILE *fp = NULL;




  char chaine[100];

  fp = fopen("donnees","r+")  ;


  while (*fp != NULL ) {



    scanf("%c", chaine );

    pid_t pid =  fork();

    if (pid == 0) {

      fputs(chaine, fichier);

      pid_t pid_fils = getpid() ;

      return 0 ;

      wait(NULL) ;

    }


  }



}
