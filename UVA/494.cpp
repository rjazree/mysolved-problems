
#include<bits/stdc++.h>
using namespace std;

int main()
{
    string a;
    int i,l,cnt;
    while(getline(cin,a))
    {
        l=a.length();
        cnt=0;
        for(i=0;i<l;i++)
        {   //cout<<a[i]<<endl;
            if(isalpha(a[i]) && !isalpha(a[i+1]))
                cnt++;
        }
       cout<<cnt<<endl;
    }
    return 0;
}
