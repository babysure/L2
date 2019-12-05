#include <stdio.h>
#include <unistd.h>
#include <math.h>

main(){

  int n ;

  printf("n = ?\n" );

  scanf("%d", &n );

  for(int i = 0 ; i< (int)pow(2,n) ; i++ ){


    pid_t pid  =  fork();

    if (pid == 0) {
      pause();
    }

} }
