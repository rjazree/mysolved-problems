#include<bits/stdc++.h>
using namespace std;

main(){

    int n,a,b,c,i;
    cin>>n;
    for(i=0;i<n;i++){
        cin>>a>>b>>c;
            if((a>b && b>c) || (c>b && b>a) )
                cout<<"Case "<<i+1<<": "<<b<<endl;
            if((c>a && a>b) || (b>a && a>c))
                cout<<"Case "<<i+1<<": "<<a<<endl;
            if((a>c && c>b) || (b>c && c>a))
                cout<<"Case "<<i+1<<": "<<c<<endl;

    }
    return 0;



}
