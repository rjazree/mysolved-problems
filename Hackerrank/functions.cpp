#include <iostream>
#include <cstdio>
using namespace std;

void max_of_four(int a, int b, int c, int d){
    if(a>b&& a>c && a>d)
    cout<<a;

    if(b>a && b>c && b>d)
     cout<<b;

    if(c>b && c>a && c>d)
     cout<<c;

    if(d>a && d>c && d>b)
     cout<<d;
}

int main() {
    int a, b, c, d;
   cin>>a>>b>>c>>d;
   max_of_four(a, b, c, d);

    return 0;
}
