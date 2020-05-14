#include<stdio.h>
#include<math.h>
int main(){
    int n,i,flag;
    printf("Enter a number: ");
    scanf("%d",&n);
    for(i=2;i<sqrt(n);i++){     //To reduce the number of iterations to half
        if(n%i==0){         //If n is divisible by any number between 2 and n/2, it is not prime
            flag=1; 
            break;
        }
    }
    (flag==1)?printf("%d is not a prime number.",n):printf("%d is a prime number.",n);  //Ternary operator
    return 0;
}
