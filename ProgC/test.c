#include <stdio.h>
#include <stdlib.h>
#include <string.h>

typedef struct point point ;
struct point{

  int x ;
  int y ;
} ;



int main(void) {

  point a ;

  FILE  *coucou =  fopen("test.txt" , "a+") ;

  printf("%d\n", &a  );

  char *p =  malloc(sizeof(char)*10) ;

  //p = "coucou" ;

  //*p =  {'c' , 'f , 'a' ,'f' ,'g' ,'t' ,'t' , 't' , 'o'  } ;

  printf("%d\n", strlen(p));



  char test[20] ;

  sprintf( test  , "%d0 %d", 10 , 8 );


  printf("%s\n", test );

  for(int i = 0 ;  i < strlen(test) ; i ++){

    printf("test[%d] = %c\n" , i , test[i]) ;

  }





  char dada[20] ;
  //int d ;



  //sscanf("chaine 1 coucou" , "%s" , p ) ;
  //printf("p = %s\n", p );


  //sscanf("chaine 1 coucou" , "%s %d %[^\0]" , dada , &d , p ) ;
  //printf(" d=%d\n", d );
  //printf("p = %s\n", p  );

    free(p) ;

  return 0;
}
