/*
 * Author : Rohit Shakya
 * Date   : April-2020
 *
 * Compiler : g++ 5.1.0
 * flags    : -std=c++14
 */
 
#include<bits/stdc++.h>
using namespace std;
int main()
{
	fstream f;
	string filename;
	char ch;
	filename="city21.json";
	f.open(filename.c_str());
	vector<string> v;
	ofstream myfile;
	myfile.open ("city31.json");
	while(f>>ch)
	{
		myfile <<ch;
		if(ch==',') 
		{
			char m='"';
			myfile <<m;
		}
	
		
	}

  
  myfile.close();
	cout<<endl;
        
}

    
