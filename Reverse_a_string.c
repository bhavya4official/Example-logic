#include<stdio.h>
int main(){
    char s[100],r[100];
    int i,end,count=0;
    printf("Input a string.\n");
    fgets(s,sizeof(s),stdin);
    while(s[count]!='\0')       //Calculating string length strlen(s)
        count++;
    end=count-1;
    for(i=0;i<count;i++){
        r[i]=s[end];
        end--;
    }
    r[i]='\0';
    printf("%s",r);
    return 0;
}
