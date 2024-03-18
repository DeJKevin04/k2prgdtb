#include <iostream> 
using namespace std;

int number;
int main() {
  cout<<"Hello World"<<endl;
  cout<<"Enter a number: ";
  cin>>number; 

  cout<<&number<<endl;

    int firstvalue, secondvalue;
  int * mypointer;

  mypointer = &firstvalue;
  *mypointer = 10;
  mypointer = &secondvalue;
  *mypointer = 20;
  cout << "firstvalue is " << firstvalue << '\n';
  cout << "secondvalue is " << secondvalue << '\n';
  return 0;
}