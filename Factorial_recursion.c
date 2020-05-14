#include<stdio.h>
long int multiply(int x){
    if(x>1)
        return x*multiply(x-1);
    else
        return 1;
}
int main(){
    int n;
    printf("Enter a positive interger: ");
    scanf("%d",&n);
    printf("Factorial of %d is %ld",n,multiply(n));
    return 0;
}
