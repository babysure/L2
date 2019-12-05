#include <stdio.h>

int calcbillet( int somme ){

    int i = 0  ;
    int nb = 0 ;
    int billet[10] = { 500 , 200 , 100 , 50 , 20 , 10 , 5 , 2 , 1  } ;
    char motB[8] = { 'B' , 'i' , 'l' , 'l' , 'e' , 't'  } ;
    char motP[7] = { 'P' , 'i' , 'e' , 'c' ,'e'  } ;

    for( int i = 0 ; i < 9 ; ++i )
        {
          // nb = quotien (division euclidienne) (nb billet)
          nb = somme / billet[i] ;

        	if (( somme > 0 ) && ( nb != 0 ) ) {

            // somme = rest de la division euclidienne (quantité d'argent restant)
						somme %= billet[i] ;

            // si on est au niveau des billet
	          if (i <= 6 ) {
	             if(nb > 1 ){ motB[6] = 's' ; }
	              printf("il y a  %d %s de %d € \n", nb , motB , billet[i]);

            } else {
	              if(nb > 1 ){ motP[5] = 's' ; }
	               printf("il y a  %d %s de %d € \n", nb , motP , billet[i] ); }

                 // on retire les 's'
	                motB[6] = ' ' ; motP[5] = ' ' ;

          }} return 0 ;}

void main(void){  printf("%d\n", calcbillet( 60)); }

// alors vous les avez trouvé comment les maths (^_^)
