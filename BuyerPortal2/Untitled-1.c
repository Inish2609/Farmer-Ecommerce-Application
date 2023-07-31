#include<stdio.h>
#include<string.h>
int main(){
    char a[100];
    char b[100];
    int i,j,flag=0;
    int count_a,count_b;
    gets(a);
    gets(b);
    for(i=65;i<123;i++){
        count_a=0;
        count_b=0;
        for(j=0;j<strlen(a);j++){
            if(a[j]==i){
                count_a = count_a+1;
                printf("Count_a %d %c  ",count_a,i);
            }
            if(b[j]==i){
                count_b = count_b+1;
                printf("Count_b %d %c  ",count_b,i);

            }
        }
        if(count_a==count_b){
            flag=1;
            break;
        }
        else{
            flag =0;
            break;
        }
    }
    if(flag)
        printf("true");
    else
        printf("false");
}