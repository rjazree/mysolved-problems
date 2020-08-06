#include <iostream>
#include <bits/stdc++.h>
using namespace std;

int main() {
    // Complete the code.
    char s[20];
    int i;
    cin>>s;
    cout<<s.length();
    for(i=0;i<s.length();i++){
        if(s[i]==''){
        cout<<"\n";
        s[i]=s[i+1];
        cout<<s[i];
        }
        else
            cout<<s[i];




    }
    return 0;
}
