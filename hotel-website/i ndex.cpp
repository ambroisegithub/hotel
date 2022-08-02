Name:MUHAYIMANA Ambroise
RegNo: 221017785
School of ICT
CSE
25 July 2022
C++ HANGMAN ASSIGNMENT
#include <iostream>
#include <iostream>
#include<ctime>
#include <string>
#include<vector>
#include<fstream>
using namespace std;
int letterFill (char letter, string display, string &random)
{
int i;
int len=display.length();
for (i = 0; i< len; i++)
{
if (letter == display[i])
{
if(random[i] == display[i]){
cout << letter << " Already taken";
}
else{
random[i] = letter;
}
}
}
return 0;
}
int main ()
{
cout<<"===============================HANGMAN================ifstream in("words_alpha.txt");
string str;
while(getline(in, str))
{
if(str.size())
vtr.push_back(str);
}
srand(time(NULL));
int n=rand()% vtr.size();
string random=vtr.at(n);
string word(random.length(),'-');
while (true)
{
cout << "\n\n" << word;
cout << "\n\nGuess a letter: ";
cin >> letter;
if (letterFill(letter, random, word)==0)
{
cout << endl << "Whoops! That letter isn't in there!" << endl;
}
else
{
cout << endl << "You found a letter!" << endl;
}
if (random==word)
{
cout << << "\n \n" << "The word is: " << random << endl;
cout << "\n \n" << "Yeah! You got it!";
break;
}
}
return 0;
}