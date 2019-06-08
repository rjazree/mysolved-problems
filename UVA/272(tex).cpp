#include<bits/stdc++.h>

using namespace std;

main(){
    string s;
    int i,p=0;
    getline(cin,s);
    for(i=0;i<s.length();i++){
       {
            if(s[i]=='"')
            {
                p=p+1;
                if(p%2==1)
                printf("``");
                else
                printf("''");
            }
            else
            printf("%c",s[i]);
        }
        //printf("\n");


    }
       //gin(), s.end(), '"','\ '' ); // replace all 'x' to 'y'
   // cout<<s;






}
