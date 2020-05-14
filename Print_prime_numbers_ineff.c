#include <stdio.h>
int main()
{
    int n,i,j,fact;
    printf("Enter the number: ");
    scanf("%d",&n);
    for(i=2;i<=n;i++){
        fact=0;
        for(j=2;j<=n;j++){
            if(i%j==0)
            fact++;         //When the number is divided, fact is increases
        }
        if(fact==1)
        printf("%d, ",i);
    }
    return 0;
}
