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
	string word,filename;
	char ch;
	filename="city5.txt";
	f.open(filename.c_str());
	vector<string> v;
	ofstream myfile;
	myfile.open ("city7.txt");
	int count=0;
	while(f>>ch)
	{
		if(ch==',') 
		{	
		count++;
		}
		if(count%2==0)
		{
		myfile <<ch;	
		} 
		
	}

  
  myfile.close();
	cout<<endl;
        
}

    
