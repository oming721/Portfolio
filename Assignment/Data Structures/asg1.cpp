#include <iostream>
using namespace std;
struct information
{
		string name,ic,phonum,brw_car,rtn_car,email;
		int num;
};
struct node
{
	information data;
	node *next;
};
class ADTstack
{
	private:
		node *top;
		node *head;
	public:
		ADTstack()
		{
			top = NULL;
		}
		int empty()
		{
			if(top == NULL)
				return 1;
			else
				return 0;
		}
		void push(information i)
		{
			node *temp;
			temp = new node;
			temp->data = i;
			if(top == NULL)
			{
				top = temp;
				temp->next = NULL;
			}
			else
			{
				temp->next = top;
				top = temp;
				head = top;
			}
		}
		information pop()
		{
			information i;
			node *temp;
			if(!empty())
			{
				i = top->data;
				temp = top;
				top = top->next;
				delete temp;
				return i;
			}
		}
		void search(int n)
		{
			node *temp;
			temp = top;
			information i;
			if(temp != NULL)
			{
				i = temp->data;
				while((temp != NULL) && (i.num != n))
				{
					temp = temp->next;
					if(temp != NULL)
					{
						i = temp->data;
					}
				}
				if(temp != NULL)
				{
					cout << "\n" << i.num << ".	Name :" << i.name << endl;
					cout << "	IC : " << i.ic << endl;
					cout << "	Phone number : " << i.phonum << endl;
					cout << "	Email Address : " << i.email << endl;
					cout << "	Date to borrow the car : " << i.brw_car << endl;
					cout << "	Date to return the car : " << i.rtn_car << endl;
				}
				else
				{
					cout << "\nNot Match" << endl;
				}
			}
			else
			{
				cout << "\nThe stack is empty" << endl;
			}
		}
		void dlt(int n,int &s)
		{
			node *temp;
			temp = top;
			node *prev;
			information i,b;
			if(temp != NULL)
			{
				i = temp->data;
				if(i.num != n)
				{
					while(temp != NULL && i.num != n)
					{
						prev = temp;
						temp = temp->next;
						if(temp != NULL)
						{
							i = temp->data;
						}
					}
					if(temp != NULL)
					{
						s --;
						prev->next = temp->next;
						delete temp;
						temp = top;
						b = temp->data;
						while(b.num > i.num)
						{
							b.num--;
							temp->data = b;
							temp = temp->next;
							if(temp != NULL)
							{
								b = temp->data;
							}
						}
					}
					else
					{
						cout << "\nNot Match" << endl;
					}
				}
				else
				{
					s --;
					top = top->next;
					delete temp;
				}
			}
			else
			{
				cout << "\nThe stack is empty" << endl;
			}
		}
		void display()
		{
			node *temp = top;
			information i;
			while(temp != NULL)
			{
				i = temp->data;
				temp = temp->next;
				cout << "\n" << i.num << ".	Name :" << i.name << endl;
				cout << "	IC : " << i.ic << endl;
				cout << "	Phone number : " << i.phonum << endl;
				cout << "	Email Address : " << i.email << endl;
				cout << "	Date to borrow the car : " << i.brw_car << endl;
				cout << "	Date to return the car : " << i.rtn_car << endl;
			}
		}
		void edit(information i,int a,int &s)
		{
			node *temp;
			node *prev;
			node *ins;
			temp = top;
			information b,c;
			if(temp != NULL)
			{
				b = temp->data;
				if(b.num != a)
				{
					while(temp != NULL && b.num != a)
					{
						prev = temp;
						temp = temp->next;
						if(temp != NULL)
						{
							b = temp->data;
						}
					}
					if(temp != NULL)
					{
						s ++;
						ins = new node;
						i.num = a + 1;
						ins->data = i;
						ins->next = temp;
						prev->next = ins;
						temp = top;
						c = temp->data;
						while(c.num != i.num)
						{
							c.num ++;
							temp->data = c;
							temp = temp->next;
							c = temp->data;
						}
						c.num ++;
						temp->data = c;
					}
					else
					{
						cout << "\nNot Match" << endl;
					}
				}
				else
				{
					s ++;
					ins = new node;
					i.num = a + 1;
					ins->data = i;
					ins->next = temp;
					top = ins;
				}
			}
			else
			{
				cout << "\nThe stack is empty" << endl;
			}
		}
};
int main()
{
	ADTstack s;
	int c = 0,num,num1,choice;
	information I;
	do
	{
		cout << "+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++" << endl;
		cout << "+                      CAR RENTAL SYSTEM                            +" << endl;
		cout << "+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++" << endl;
		cout << "---------------------------------------------------------------------" << endl;
		cout << "1. Add information" << endl;
		cout << "2. Display information" << endl;
		cout << "3. Delete information" << endl;
		cout << "4. Search information" << endl;
		cout << "5. Edit information" << endl;
		cout << "\n0. Exit program" << endl;
		cout << "---------------------------------------------------------------------" << endl;
		cout << "Choose a number to continue the program : ";
		cin >> choice;
		while(choice > 5 || choice < 0)
		{
			cout << "Invalid number!!! Please enter again : ";
			cin >> choice;
		}
		fflush(stdin);
		switch(choice)
		{
			case 1:
				I.num = ++ c;
				cout << "\nEnter your name : ";
				getline(cin,I.name);
				cout << "Enter your IC : ";
				getline(cin,I.ic);
				cout << "Enter your phone number : ";
				getline(cin,I.phonum);
				cout << "Enter your email address : ";
				getline(cin,I.email);
				cout << "Enter date you want to borrow the car : ";
				getline(cin,I.brw_car);
				cout << "Enter date you want to return the car : ";
				getline(cin,I.rtn_car);
				s.push(I);
				cout << "\nFinish adding information" << endl << endl;
				break;
			case 2:
				s.display();
				cout << "\nFinish displaying information" << endl << endl;
				break;
			case 3:
				cout << "\nEnter the number you want to delete : ";
				cin >> num;
				s.dlt(num,c);
				cout << "\nFinish deleting information" << endl << endl;
				break;
			case 4:
				cout << "\nEnter the number you want to search : ";
				cin >> num;
				s.search(num);
				cout << "\nFinish searching information" << endl << endl;
				break;
			case 5:
				cout << "\nThe new information should be insert before which number : ";
				cin >> num;
				cout << "\nNew Information : " << endl;
				I.num = 0;
				fflush(stdin);
				cout << "Enter your name : ";
				getline(cin,I.name);
				cout << "Enter your IC : ";
				getline(cin,I.ic);
				cout << "Enter your phone number : ";
				getline(cin,I.phonum);
				cout << "Enter your email address : ";
				getline(cin,I.email);
				cout << "Enter date you want to borrow the car : ";
				getline(cin,I.brw_car);
				cout << "Enter date you want to return the car : ";
				getline(cin,I.rtn_car);
				s.edit(I,num,c);
				cout << "\nFinish edit information" << endl << endl;
				break;
		}
	}while(choice != 0);
	cout << "---------------------------------------------------------------------" << endl;
	cout << "\nThis is the all information :" << endl;
	while(!s.empty())
	{
		I = s.pop();
		cout << "\n" << I.num << ".	Name :" << I.name << endl;
		cout << "	IC : " << I.ic << endl;
		cout << "	Phone number : " << I.phonum << endl;
		cout << "	Email Address : " << I.email << endl;
		cout << "	Date to borrow the car : " << I.brw_car << endl;
		cout << "	Date to return the car : " << I.rtn_car << endl;
	}
}
