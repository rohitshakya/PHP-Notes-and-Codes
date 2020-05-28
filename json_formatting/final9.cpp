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
	filename="city20.txt";
	f.open(filename.c_str());
	ofstream myfile;
	myfile.open ("city21.txt");
	int count=0;
	while(f>>ch)
	{
		if(ch==':') 
		{	
		count++;
		}
		if(ch==':'&&count%2==0) 
		{	
			myfile <<",";
			continue;
		}
		myfile <<ch;
	}

  
  myfile.close();
	cout<<endl;
        
}

    
