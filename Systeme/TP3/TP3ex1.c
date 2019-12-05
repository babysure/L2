#include <stdio.h>
#include <unistd.h>

main(){

  printf("Combien de procesus fils voulez-vous créer ?" );
  int n ;
   ;
  scanf("%d", &n );


    for(int i = 0 ; i< n ; i++ ){

      pid_t pid    =  fork();


      if (pid == 0) {
        printf("le pid du procesus père est %d\n",getppid() );
        printf(" le pid du procesus est %d\n", getpid() );
        pause();
      }

    }



}
