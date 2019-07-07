#include<bits/stdc++.h>

using namespace std;

main(){
    int i,j,t,r;


    cin>>t;
    for(j=0;j<t;j++){
           int a,b=-1,c=10000001;
              string s,m,n;
              cin>>r;
        for(i=0;i<r;i++){
            cin>>s>>a;
            if(a>b){
                m=s;
                b=a;
            }
            if(a<c){
                n=s;
                c=a;
            }
        }
        cout<<m<<" "<<n<<endl;
    }

    return 0;
}
