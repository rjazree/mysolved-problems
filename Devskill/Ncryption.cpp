#include<iostream>
#include <vector>
using namespace std;
main(){
    int flag=1,i,n,j;
    vector<int>myvector;
    cin>>n;
    for(i=2;i<n-1;i++){
        if(n%i==0)
            flag=0;
        else
            myvector.push_back(i);

    }
if(flag!=01)
    cout<<"prime";
else
    cout<<"none";


    print(myvector);








}
