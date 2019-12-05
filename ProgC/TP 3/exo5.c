#include <stdio.h>


main(){


  char CH[50] , *PCH ;
  int ABC[26] , *PABC , strlen  , i = 0 ;

  char  min[27] = {'a', 'b' , 'c', 'd' , 'e' , 'f' , 'g' , 'h' ,'i' , 'j' , 'k' , 'l' , 'm' , 'n' , 'o' , 'p' ,'q' , 'r' , 's' ,'t' , 'u' ,'v' , 'w' , 'x' , 'y' , 'z' } ;
  char maj[27] =  {'A' , 'B' , 'C' , 'D' , 'E' , 'F' , 'G' , 'H' , 'I','J' , 'K' , 'L' , 'M' , 'N' , 'O' , 'P' , 'Q' , 'R' , 'S' ,'T' , 'U' , 'V' , 'W' , 'X' , 'Y' , 'Z'} ;


  printf("Veuillez saisir une chaine de caractère \n" );

  gets(CH);

  for(PABC = ABC ;  PABC < ABC + 26 ; PABC++){


    *PABC = 0 ;

  }

  //printf("PABC = %p\n ABC = %p\n\n", PABC , ABC );

  PCH = CH ;
  PABC = ABC ;


  //printf("PABC = %p\n ABC = %p\n\n", PABC , ABC );

  while(*PCH != '\0' ){
    PCH++ ;
  }
  // ici PCH = addresse du dernier caractère
    strlen = ( (int)PCH  ) - ( (int)CH ) ;

    // printf("Strlen = %d\n", strlen );
    for(PCH = CH ;  PCH < CH + strlen ; PCH++){

      for (int i = 0; i < 26; i++) {

        if( (*PCH == min[i] ) || ( *PCH == maj[i] )  ){
          //printf("i = %d\nABC[%d] = %d", i, i , ABC[i]  );
          ABC[i]+=1 ;
        }
      }

    }
        PABC = ABC ;
    for (PABC = ABC; PABC < ABC+ 26; PABC++) {
      //printf("Dans la boucle for PABC = %d\n ABC = %p\n\n", (int)PABC , ABC );
      if( *PABC > 0 ){

        //printf("PABC = %p\n ABC = %p\n\n", PABC , ABC );
        int i  =  ( (int)PABC ) - ( (int)ABC ) ;

        //printf("I = %d\n\n", i  );

        //printf("PABC = %d\n ABC = %d\n", (int)PABC , (int)ABC );

        printf("%c = %d\n", min[i] , *PABC );

      }

    }

}
