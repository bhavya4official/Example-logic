#include<stdio.h>
int main(){
   int n,r=0,x;
   printf("Enter any number: ");
   scanf("%d",&n);
   int temp=n;
   for(;n>0;)
   {
       if(n>10)
       {
           x=n%10;      //Modulo (%10) gives the last digit
           r=r*10+x;
           n=n/10;      //Division (/10) remove the last digit
       }
       else
       {
           r=r*10+n;
           n=n/10;      //To ensure the value of n become 0, so the condition in line 7 fails 
       }
   }
   printf("Mirror of %d is %d",temp,r);
   return 0;
}
