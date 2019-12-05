#include <stdio.h>
#include <unistd.h>


main(){



  pid_t p1  = fork();

  if (p1 == 0) {

    printf("le pid du procesus père est %d\n",getppid() );
    printf(" le pid du procesus est %d\n", getpid() );
    pause();

  }


   p1  = fork();

  if (p1 == 0) {

    printf("le pid du procesus père est %d\n",getppid() );
    printf(" le pid du procesus est %d\n", getpid() );
    pause();

  }

   p1  = fork();

  if (p1 == 0) {

    printf("le pid du procesus père est %d\n",getppid() );
    printf(" le pid du procesus est %d\n", getpid() );



    pid_t p2 =  fork() ;

    if (p2  == 0) {

      printf("deuxième niveau \n\nle pid du procesus père est %d\n",getppid() );
      printf(" le pid du procesus est %d\n", getpid() );
      pause();

    }

     p2 = fork() ;

    if ( p2 == 0) {

      printf("le pid du procesus père est %d\n",getppid() );
      printf(" le pid du procesus est %d\n", getpid() );
      pause();

    }


  }


}
