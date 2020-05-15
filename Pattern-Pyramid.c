#include<iostream>
#include<string>
int main(){
    int n,j,rows;
    
    printf("Enter the number of rows: ");
    scanf("%d",&n);
    
    for(rows=1;rows<=n;rows++)      // Loop to print rows
    {
        for(j=1;j<=n-rows;j++){     // Loop to print spaces in a row
            printf(" ");
        }
        for(j=1;j<=2*rows-1;j++){   // Loop to print stars in a row
            printf("*");
        }
        printf("\n");
    }
    
    return 0;
}
