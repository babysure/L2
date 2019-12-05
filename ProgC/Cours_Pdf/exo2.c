#include <stdio.h>
#include <stdlib.h>
#include <math.h>

void* malloc_protege(unsigned int s){
  void * p;
  if(p=malloc(s)) return p;
  else {perror("erreur allocation\n");exit(EXIT_FAILURE);}
}


typedef struct{
  unsigned char **im;
  int H;
  int L;
}Image;

void afficherImage(Image *image){
  for(int i=0;i<image->H;i++){
    for(int j=0;j<image->L;j++){
      printf("%3d ",(int)image->im[i][j]);
    }
    printf("\n");
  }
}

Image* creerImage(int h,int l){
  Image *image=(Image*)malloc_protege(sizeof(Image));
  
  image->H = h;
  image->L = l;
  image->im = (unsigned char **)malloc_protege(sizeof(unsigned char*)*image->H);
  for(int i=0;i<image->H;i++){
    image->im[i]=(char *)malloc_protege(sizeof(char)*image->L);
    for(int j=0;j<image->L;j++){
      image->im[i][j] = 0;
    }
  }
  return image;
}

float moyenneImage(Image *image){
  float moy=0;
 
  for(int i=0;i<image->H;i++){
    for(int j=0;j<image->L;j++){
      moy += image->im[i][j];
    }
  }
  return moy/(image->H*image->L);
}
void degradeImage(Image *image){
  float moy=0;
 
  for(int i=0;i<image->H;i++){
    for(int j=0;j<image->L;j++){
      image->im[i][j] = (char)sqrt((float)(i*i+j*j));
    }
  }
}
void seuilImage(Image *image,char s){
  float moy=0;
 
  for(int i=0;i<image->H;i++){
    for(int j=0;j<image->L;j++){
      image->im[i][j] = (image->im[i][j]<=s?0:255) ;
    }
  }
}

void symetriqueImage(Image *image){
  
   for(int i=0;i<image->H;i++){
    for(int j=0;j<=image->L/2;j++){
      int t = image->im[i][j];
      image->im[i][j] = image->im[i][image->L-j-1];
      image->im[i][image->L-j-1] = t;
    }
  }
}

void cercleImage(Image *image,int x, int y, int r){
   for(int i=0;i<image->H;i++){
    for(int j=0;j<=image->L;j++){
      if(sqrt((y-i)*(y-i) + (x-j)*(x-j)) <= r) image->im[i][j] = 255;
    }
  }
}


int main(){
  Image *image;

  image = creerImage(10,15);
  afficherImage(image);
  printf("%f\n",moyenneImage(image));
  degradeImage(image);
  afficherImage(image);
  printf("%f\n",moyenneImage(image));
  seuilImage(image,10);
  afficherImage(image);
  printf("%f\n",moyenneImage(image));
  symetriqueImage(image);
  afficherImage(image);
  printf("%f\n",moyenneImage(image));

  cercleImage(image,7,5,3);
  afficherImage(image);
  printf("%f\n",moyenneImage(image));
  
  
}
