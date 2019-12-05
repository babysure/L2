#include <stdio.h>
#include <stdlib.h>

void* malloc_protege(unsigned int s){
  void * p;
  if(p=malloc(s)) return p;
  else {perror("erreur allocation\n");exit(EXIT_FAILURE);}
}


typedef struct{
  float **m;
  int L;
  int C;
}Matrice;

void creerMatrice(Matrice *M,int l,int c){
  M->L = l;
  M->C = c;
  M->m = (float **)malloc_protege(sizeof(float*)*M->L);
  for(int i=0;i<M->L;i++){
    M->m[i]=(float *)malloc_protege(sizeof(float)*M->C);
    for(int j=0;j<M->C;j++){
      M->m[i][j] = 0.0;
    }
  }  
}

void remplirMatrice(Matrice M,float x){

  for(int i=0;i<M.L;i++){
    for(int j=0;j<M.C;j++){
      M.m[i][j] = x;
    }
  }  
}

void afficherMatrice(Matrice M){

  for(int i=0;i<M.L;i++){
    for(int j=0;j<M.C;j++){
      printf("%.2f ", M.m[i][j]);
    }
    printf("\n");
  }  

}

void produitMatrice(Matrice M,Matrice N, Matrice *P){
  creerMatrice(P,M.L,N.C);
  
  for(int i=0;i<M.L;i++){
    for(int j=0;j<N.C;j++){
      for(int k=0;k<M.C;k++){
	P->m[i][j] += M.m[i][k]*N.m[k][j];
      }
    }
  }
}

int main(){
  Matrice M,N,P;

  creerMatrice(&M,5,4);
  creerMatrice(&N,4,5);
  afficherMatrice(M);

  remplirMatrice(M,1.0);
  remplirMatrice(N,1.0),

   afficherMatrice(M);

  produitMatrice(M,N,&P);
  
  afficherMatrice(P);
  

  return 0;
}
