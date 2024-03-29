#include<stdio.h>  
int main()  
{  
    char exp[50]; 
    int x=0, i=0;   
    printf("\nEnter an expression");  
    scanf("%s", exp);  
   
 while(exp[i]!= '\0')  
    {  
         
     if(exp[i]=='(' ||exp[i]=='{'||exp[i]=='[')  
        {  
            x++;       
        }  
          
     else if(exp[i]==')'||exp[i]=='}'||exp[i]==']')  
        {  
            x--;     
            if(x<0)  
            break;  
        }  
    i++;         
    }  
     
    if(x==0)  
    {  
        printf("Expression is balanced");  
    }  
      
    else  
    {  
        printf("Expression is unbalanced");  
    }  
    return 0;  
}  