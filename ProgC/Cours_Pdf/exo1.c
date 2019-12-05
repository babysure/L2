#include <stdio.h>

void f1(){
  int x; 
  int *p; 
  p = &x; 
  x = 5; 
  *p += 5;

  printf("1) %d\n",x);
}
void f2(){
  printf("2) ");
  int x; 
  //scanf("%d",&x);
  x = 3;
  if (x = 2) { 
    printf("b");
  } 
  else if (x == 4) {
    printf("d");
  } 
  else { 
    printf("z");
  }

  printf("\n");
}
void f3(){
  printf("3) ");
  int *n; 
  n = malloc(sizeof(int)); 
  *n = 5; 
  free(n); 
  n = malloc(sizeof(int)); 
  printf("%u\n", n);	

}
void f4(){
  int x;
  int tab[4]  = {0, 5, 10, 15};
  int *p = tab + 1;
  x = *p + 2;
  printf("4) %d\n",x);
}

typedef struct  { 
int mon_int; 
float mon_float;
 } int_float; 
void f5(){
  printf("5) ");
  int_float trois;
  trois.mon_float = 3.0; 
  printf("%d\n", trois.mon_int);	
}
int main(){
    
  f1();f2();f3();f4();f5();


  return 0;
}
