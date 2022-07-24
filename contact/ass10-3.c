#include <stdio.h>

int main()
{
   int n,m,t;
   scanf("%d %d %d",&n,&m,&t);
   
   int init[m],direc[m];
   
   
   for(int i=0;i<m;i++){ 
       scanf("%d %d",&init[i],&direc[i]);
        }
        
    while(t--){ 
    
        for(int i=0;i<m;i++)
        {
            for(int j=i+1;j<m;j++){ 
                if((init[i]==init[j]+1||init[j]==init[i]+1)&&(direc[i]+direc[j]==0)){ 
                    int temp=direc[i];
                    direc[i]=direc[j];
                    direc[j]=temp; 
                }
            }
        }


        {
        for(int i=0;i<m;i++){ 
             if(direc[m]==1){
                if(init[m]==n){ init[m]=1;}
                 
                 else init[m]--;
            }
            
            if(direc[m]==-1){
                if(init[m]==1) init[m]=n;
                 else init[m]=init[m]-1;
                
                
            }
            
            
        }
    }
    }        
     for(int i=0;i<m;i++) 
        printf("%d ",init[i]); 

    return 0;
}
