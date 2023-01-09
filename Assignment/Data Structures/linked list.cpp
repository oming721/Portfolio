#include <iostream>
#include <iomanip>
using namespace std;
struct coaches
{
	string name, phone, address, sport_center_name, sport_name;
	double hourly_rate;
	int rating, id, sport_centre_code, sport_code, date_joined, date_terminated;
};
struct node
{
	coaches data;
	node *next;
};
class ADTstack
{
	private:
		node *head;
		node *tail;
		node *temp;
		node *prev;
		node *fron;
		node *chec;
		node *stor;
	public:
		ADTstack()
		{
			head = NULL;
			tail = NULL;
		}
		int empty()
		{
			if(head == NULL)
			{
				return 1;
			}
			else
				return 0;		
		}
		int empty_temp()
		{
			if(temp == NULL)
			{
				return 1;
			}
			else
				return 0;		
		}
		int empty_chec()
		{
			if(chec == NULL)
			{
				return 1;
			}
			else
				return 0;		
		}
		coaches minid()
		{
			coaches c, temp_c;
			c = chec->data;
			temp = chec->next;
			while(!empty_temp())
			{
				temp_c = temp->data;
				if(temp_c.id < c.id)
				{
					c = temp_c;
				}
				temp = temp->next;
			}
			return c;
		}
		coaches minhour()
		{
			coaches c, temp_c;
			c = chec->data;
			temp = chec->next;
			while(!empty_temp())
			{
				temp_c = temp->data;
				if(temp_c.hourly_rate < c.hourly_rate)
				{
					c = temp_c;
				}
				temp = temp->next;
			}
			return c;
		}
		coaches minrating()
		{
			coaches c, temp_c;
			c = chec->data;
			temp = chec->next;
			while(!empty_temp())
			{
				temp_c = temp->data;
				if(temp_c.rating < c.rating)
				{
					c = temp_c;
				}
				temp = temp->next;
			}
			return c;
		}
		void push(coaches i)
		{
			temp = new node;
			temp->data = i;
			if(head == NULL)
			{
				head = temp;
				tail = temp;
				tail->next=NULL;
			}
			else
			{
				tail->next = temp;
				tail = tail->next;
				tail->next=NULL;
			}
		}
		coaches pop()
		{
			coaches c;
			node *temp;
			if(!empty())
			{
				c = head->data;
				temp = head;
				head = head->next;
				delete temp;
				return c;
			}
		}
		int check_unique(int ID)
		{
			temp = head;
			coaches c;
			while(temp!=NULL)
			{
				c = temp->data;
				if(c.id == ID)
				{
					return 1;
				}
				temp = temp->next;
			}
			if(temp==NULL)
			{
				return 0;
			}
		}
		void display()
		{
			coaches c;
			temp = head;
			while(!empty_temp())
			{
				c = temp->data;
				temp = temp->next;
				cout << "\nCoach ID             : " << c.id << endl;
				cout << "Coach Name           : " << c.name << endl;
				cout << "Coach Date Joined    : " << c.date_joined << endl;
				cout << "Coach Date Terminated: " << c.date_terminated << endl;
				cout << "Coach Hourly Rate    : RM " << setprecision (2) << fixed << c.hourly_rate << endl;
				cout << "Coach Phone          : " << c.phone << endl;
				cout << "Coach Address        : " << c.address << endl;
				cout << "Sport Centre Code    : " << c.sport_centre_code << endl;
				cout << "Sport Center Name    : " << c.sport_center_name << endl;
				cout << "Sport Code           : " << c.sport_code << endl;
				cout << "Sport Name           : " << c.sport_name << endl;
				cout << "Rating               : " << c.rating << endl;
			}
		}
		void searchid(int keyword)
		{
			coaches c;
			temp = head;
			while(!empty_temp())
			{
				c = temp->data;
				if(keyword == c.id)
				{
					cout << "\nCoach ID             : " << c.id << endl;
					cout << "Coach Name           : " << c.name << endl;
					cout << "Coach Date Joined    : " << c.date_joined << endl;
					cout << "Coach Date Terminated: " << c.date_terminated << endl;
					cout << "Coach Hourly Rate    : RM " << setprecision (2) << fixed << c.hourly_rate << endl;
					cout << "Coach Phone          : " << c.phone << endl;
					cout << "Coach Address        : " << c.address << endl;
					cout << "Sport Centre Code    : " << c.sport_centre_code << endl;
					cout << "Sport Center Name    : " << c.sport_center_name << endl;
					cout << "Sport Code           : " << c.sport_code << endl;
					cout << "Sport Name           : " << c.sport_name << endl;
					cout << "Rating               : " << c.rating << endl;
				}
				temp = temp->next;
			}
		}
		void searchrating(int keywordr)
		{
			coaches c;
			temp = head;
			while(!empty_temp())
			{
				c = temp->data;
				if(keywordr == c.rating)
				{
					cout << "\nCoach ID             : " << c.id << endl;
					cout << "Coach Name           : " << c.name << endl;
					cout << "Coach Date Joined    : " << c.date_joined << endl;
					cout << "Coach Date Terminated: " << c.date_terminated << endl;
					cout << "Coach Hourly Rate    : RM " << setprecision (2) << fixed << c.hourly_rate << endl;
					cout << "Coach Phone          : " << c.phone << endl;
					cout << "Coach Address        : " << c.address << endl;
					cout << "Sport Centre Code    : " << c.sport_centre_code << endl;
					cout << "Sport Center Name    : " << c.sport_center_name << endl;
					cout << "Sport Code           : " << c.sport_code << endl;
					cout << "Sport Name           : " << c.sport_name << endl;
					cout << "Rating               : " << c.rating << endl;
				}
				temp = temp->next;
			}
		}
		void sortid()
		{
			coaches min_c, c, chec_c;
			chec = head;
			while(!empty_chec())
			{
				min_c = minid();
				temp = head;
				chec_c = chec->data;
				while(!empty_temp())
				{
					c = temp->data;
					if(c.id == min_c.id)
					{
						if(min_c.id < chec_c.id)
						{
								stor = new node;
								stor->data = temp->data;
								temp->data = chec->data;
								chec->data = stor->data;
						}
					}
					temp = temp->next;
				}
				chec = chec->next;
			}
		}
		void sorthour()
		{
			coaches min_c, c, chec_c;
			chec = head;
			while(!empty_chec())
			{
				min_c = minhour();
				temp = head;
				chec_c = chec->data;
				while(!empty_temp())
				{
					c = temp->data;
					if(c.id == min_c.id)
					{
						if(min_c.hourly_rate < chec_c.hourly_rate)
						{
								stor = new node;
								stor->data = temp->data;
								temp->data = chec->data;
								chec->data = stor->data;
						}
					}
					temp = temp->next;
				}
				chec = chec->next;
			}
		}
		void sortrating()
		{
			coaches min_c, c, chec_c;
			chec = head;
			while(!empty_chec())
			{
				min_c = minrating();
				temp = head;
				chec_c = chec->data;
				while(!empty_temp())
				{
					c = temp->data;
					if(c.id == min_c.id)
					{
						if(min_c.rating < chec_c.rating)
						{
								stor = new node;
								stor->data = temp->data;
								temp->data = chec->data;
								chec->data = stor->data;
						}
					}
					temp = temp->next;
				}
				chec = chec->next;
			}
		}
		void modify(coaches d)
		{
			coaches c;
			temp = head;
			while(!empty_temp())
			{
				c = temp->data;
				if(d.id == c.id)
				{
					c.phone = d.phone;
					c.address = d.address;
					temp->data = c;
				}
				temp = temp->next;
			}
		}
		void deleteid(int dltid)
		{
			coaches c;
			temp = head;
			prev = head;
			while(!empty_temp())
			{
				c = temp->data;
				if(dltid == c.id)
				{
					if(c.date_terminated - c.date_joined >= 6)
					{
						if(temp == head)
						{
							head = head->next;
							delete temp;
						}
						else if(temp == tail)
						{
							tail = prev;
							tail->next = NULL;
							delete temp;
						}
						else
						{
							fron = temp->next;
							prev->next = fron;
							delete temp;
						}
					}
					else
					{
						cout << "Not enough 6 month" << endl;
					}
				}
				prev = temp;
				temp = temp->next;
			}
		}
};
int main()
{
	ADTstack s;
	coaches c;
	int unique, choice, keyword, keywordr, dltid;
	do
	{
		cout << "\n+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++" << endl;
		cout << "+                      SPORT ACADEMY SYSTEM                         +" << endl;
		cout << "+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++" << endl;
		cout << " 1. Add a Coach Record" << endl;
		cout << " 2. Display All Records" << endl;
		cout << " 3. Search a Coach by Coach ID " << endl;
		cout << " 4. Search Coaches by overall performance" << endl;
		cout << " 5. Sort and display by Coaches ID in ascending order" << endl;
		cout << " 6. Sort and display by Coaches Hourly Pay Rate in ascending order" << endl;
		cout << " 7. Sort and display by Coaches Overall Performance in ascending order" << endl;
		cout << " 8. Modify a Coach Record" << endl;
		cout << " 9. Delete a Coach Record" << endl;
		cout << "10. Exit" << endl;
		cout << "---------------------------------------------------------------------" << endl;
		cout << "Choose a number to continue the program : ";
		cin >> choice;
		while(choice > 10 || choice < 1)
		{
			cout << "Invalid number!!! Please enter again : ";
			cin >> choice;
		}
		fflush(stdin);
		switch(choice)
		{
			case 1:
				cout << "Enter Coard ID: ";
				do
				{
					cin >> c.id;
					unique = s.check_unique(c.id);
					if(unique==1)
					{
						cout << "Not Unique ID, Please Enter Coard ID Again: ";
					}
					fflush(stdin);
				}while(unique==1);
				cout << "Enter Coach Name: ";
				getline(cin, c.name);
				fflush(stdin);
				cout << "Enter Coach Month Joined: ";
				do
				{
					cin >> c.date_joined;
					if(c.date_joined > 12 || c.date_joined < 1)
					{
						cout << "Invalid number!!! Please enter again : ";
					}
				}while(c.date_joined > 12 || c.date_joined < 1);
				cout << "Enter Coach Month Terminated: ";
				do
				{
					cin >> c.date_terminated;
					if(c.date_terminated > 12 || c.date_terminated < 1)
					{
						cout << "Invalid number!!! Please enter again : ";
					}
				}while(c.date_terminated > 12 || c.date_terminated < 1);
				fflush(stdin);
				cout << "Enter Coach Phone: ";
				getline(cin, c.phone);
				fflush(stdin);
				cout << "Enter Coach Address: ";
				getline(cin, c.address);
				fflush(stdin);
				cout << "\n+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++" << endl;
				cout << "+        Sport Centre Code          +       Sport Centre Name       +" << endl;
				cout << "+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++" << endl;
				cout << "+                 1                 +       Apple Sport Centre      +" << endl;
				cout << "+                                   +                               +" << endl;
				cout << "+                 2                 +       Banana Sport Centre     +" << endl;
				cout << "+                                   +                               +" << endl;
				cout << "+                 3                 +       Durian Sport Centre     +" << endl;
				cout << "+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++" << endl;
				cout << "Enter Sport Centre Code: ";
				do
				{
					cin >> c.sport_centre_code;
					if(c.sport_centre_code == 1)
					{
						c.sport_center_name = "Apple Sport Centre";
					}
					else if(c.sport_centre_code == 2)
					{
						c.sport_center_name = "Banana Sport Centre";
					}
					else if(c.sport_centre_code == 3)
					{
						c.sport_center_name = "Durian Sport Centre";
					}
					else
					{
						cout << "Invalid number!!! Please enter again : ";
					}
				}while(c.sport_centre_code > 3 || c.sport_centre_code < 1);
				cout << "\n+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++" << endl;
				cout << "+            Sport Code             +           Sport Name          +" << endl;
				cout << "+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++" << endl;
				cout << "+                 1                 +            Swimming           +" << endl;
				cout << "+                                   +                               +" << endl;
				cout << "+                 2                 +            Football           +" << endl;
				cout << "+                                   +                               +" << endl;
				cout << "+                 3                 +            Badminton          +" << endl;
				cout << "+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++" << endl;
				cout << "Enter Sport Code: ";
				do
				{
					cin >> c.sport_code;
					fflush(stdin);
					if(c.sport_code == 1)
					{
						c.sport_name = "Swimming";
						c.hourly_rate = 50;
					}
					else if(c.sport_code == 2)
					{
						c.sport_name = "Football";
						c.hourly_rate = 75;
					}
					else if(c.sport_code == 3)
					{
						c.sport_name = "Badminton";
						c.hourly_rate = 100;
					}
					else
					{
						cout << "Invalid number!!! Please enter again : ";
					}
				}while(c.sport_code > 3 || c.sport_code < 1);
				cout << "Enter Rating [1-5]: ";
				do
				{
					cin >> c.rating;
					if(c.rating > 5 || c.rating < 1)
					{
						cout << "Invalid number!!! Please enter again : ";
					}
				}while(c.rating > 5 || c.rating < 1);
				s.push(c);
				break;
			case 2:
				s.display();
				break;
			case 3:
				cout << "Enter Coard ID: ";
				cin >> keyword;
				s.searchid(keyword);
				break;
			case 4:
				cout << "Enter Rating [1-5]: ";
				do
				{
					cin >> keywordr;
					if(keywordr > 5 || keywordr < 1)
					{
						cout << "Invalid number!!! Please enter again : ";
					}
				}while(keywordr > 5 || keywordr < 1);
				s.searchrating(keywordr);
				break;
			case 5:
				s.sortid();
				break;
			case 6:
				s.sorthour();
				break;
			case 7:
				s.sortrating();
				break;
			case 8:
				cout << "Enter Coard ID: ";
				do
				{
					cin >> c.id;
					unique = s.check_unique(c.id);
					if(unique == 0)
					{
						cout << "Not Existing ID, Please Enter Coard ID Again: ";
					}
					fflush(stdin);
				}while(unique == 0);
				cout << "Enter Coach Phone: ";
				getline(cin, c.phone);
				fflush(stdin);
				cout << "Enter Coach Address: ";
				getline(cin, c.address);
				fflush(stdin);
				s.modify(c);
				break;
			case 9:
				cout << "Enter Coard ID: ";
				cin >> dltid;
				s.deleteid(dltid);
				break;	
			case 10:
				cout << "---------------------------------------------------------------------" << endl;
				while(!s.empty())
				{
					c = s.pop();
				}
				break;
		}
	}while(choice != 10);
}
