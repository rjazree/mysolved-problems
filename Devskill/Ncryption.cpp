#include<iostream>
#include <vector>
#include<bits/stdc++.h>
using namespace std;
main(){
    int flag=0,ans,r,i,n,j,a[100],temp;
    string s;
    cin>>n;
    for(i=0;i<n;i++){
        cin>>a[i];

    }

    for(i=0;i<n;i++){
        for(j=0;j<n;j++){
            if(a[i]>a[j]){
                temp=a[i];
                a[i]=a[j];
                a[j]=temp;
            }

        }
    }
    int l=a[n-1];
   // for(i=0;i<n;i++){

    for(i=2;i<=l/2;i++){
        //if(a[n-1]%i==0){
        //r=a[n-1]/i;
            for(j=2;j<=sqrt(i);j++){
                if(i%j==0)
                flag++;
            }
            if(flag==0)
            cout<<i<<" ";


        //}

    }
    //}
 //cout<<ans;
//cout<<s;

}
