#include <stdio.h>
#include <math.h>

float CalcFonction( float a , float b  ) {

return  ( (a + b) / 2.0 ) - ( sqrt( a * b )  ) ;

}

int main(void){

 printf("%f\n", CalcFonction(2.0 , 4.0) );
  return 0 ;
}
