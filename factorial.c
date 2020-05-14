#include<stdio.h>
int main(){
    int n,r=1,i;        //1*n=n
    printf("Enter a integer number: "); //Promt the user
    scanf("%d",&n);     //Store the value
    if(n<0){
        printf("Re-run the code and enter a non-negative integer number.");
    }
    else if(n==0){
        printf("Factorial of 0 is 1");
    }
    else{
        for(;n>0;n--){  //Initialization in line no. 5
            r=r*n;      //Product of all integer less than n
        }
        printf("Factorial of %d is %d",n,r);
    }
    return 0;
}
