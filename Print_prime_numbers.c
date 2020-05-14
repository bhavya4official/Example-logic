#include<stdio.h>
int main(){
    int n,i,j,flag;
    printf("Enter any integer number: ");
    scanf("%d",&n);
    printf("Prime number less than %d are:\t",n); //Starting statement in result
    for(i=2;i<n;i++){
        flag=0;
        for(j=2;j<i;j++){
            if(i%j==0){
                flag=1;    //If i is not a prime number then flag is 1
                break;     //Transfer the control to line no. 15
            }
        }
        if(flag==0)
        printf("%d, ",i);
    }
    return 0;
}
