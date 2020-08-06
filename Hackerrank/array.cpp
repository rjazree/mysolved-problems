
#include <iostream>
#include <string>
using namespace std;

int main() {
	// Complete the program
    long long a[100000],i,n;
    cin>>n;
    for(i=0;i<n;i++){

        cin>>a[i];
    }

     for(i=n-1;i>=0;i--){

        cout<<a[i]<<" ";
    }

    return 0;
}
