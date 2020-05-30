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
	filename="city2.json";
	f.open(filename.c_str());
	ofstream myfile;
	myfile.open ("city21.json");
	while(f>>ch)
	{
		if(ch=='\n') 
		{
			continue;
		}
	
		myfile <<ch;
	}
  myfile.close();
	cout<<endl;
	//remove "" from the output by replace all command
        
}

    
