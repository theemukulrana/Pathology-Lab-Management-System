#include<iostream>
using namespace std;
#define MAX 100

int stack[MAX];
int top1 = -1;

void push(int number){
    top1++;
    stack[top1] = number;
}

void pop(){
    cout<<stack[top1]<<" ";
    top1--;
}

int main(){

    int number; 
    FILE* in_file = fopen("number.txt", "r");  
         
    if (! in_file ){  
        printf("oops, file can't be read\n"); 
        exit(-1); 
    } 

    while ( fscanf(in_file, "%d", & number ) == 1 ){ 
        if(number<0){
            if(top1+1<5){
                cout<<"Error\n";
            }
            else{
                cout<<"Elements are :\n";
                for(int i=0;i<5;i++){
                    pop();
                }
            }
            cout<<endl;
        }
        else{
            push(number);
        }
    }

    cout<<"Final Remaining Elements are :\n";
    int len = top1+1;
    for(int i=0;i<len;i++){
        pop();
    } 
    cout<<endl;

    return 0;
}