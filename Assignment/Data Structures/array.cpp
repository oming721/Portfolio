#include <iostream>
#include <iomanip>
using namespace std;
struct coaches
{
	string name, phone, address, sport_center_name, sport_name;
	double hourly_rate;
	int rating, id, sport_centre_code, sport_code, date_joined, date_terminated;
};
class function
{
	private:
	public:
		int uniqueid(coaches c[], int id, int head, int tail)
		{
			int i;
			for(i = head;i < tail;i ++)
			{
				if(c[i].id == id)
				{
					return 1;
				}
			}
			return 0;
		}
		void display(coaches c[], int head, int tail)
		{
			int i;
			for(i = head;i < tail;i ++)
			{
				cout << "\nCoach ID             : " << c[i].id << endl;
				cout << "Coach Name           : " << c[i].name << endl;
				cout << "Coach Date Joined    : " << c[i].date_joined << endl;
				cout << "Coach Date Terminated: " << c[i].date_terminated << endl;
				cout << "Coach Hourly Rate    : RM " << setprecision (2) << fixed << c[i].hourly_rate << endl;
				cout << "Coach Phone          : " << c[i].phone << endl;
				cout << "Coach Address        : " << c[i].address << endl;
				cout << "Sport Centre Code    : " << c[i].sport_centre_code << endl;
				cout << "Sport Center Name    : " << c[i].sport_center_name << endl;
				cout << "Sport Code           : " << c[i].sport_code << endl;
				cout << "Sport Name           : " << c[i].sport_name << endl;
				cout << "Rating               : " << c[i].rating << endl;
			}
		}
		void searchid(coaches c[], int keyword, int head, int tail)
		{
			int i;
			for(i = head;i < tail;i ++)
			{
				if(c[i].id == keyword)
				{
					cout << "\nCoach ID             : " << c[i].id << endl;
					cout << "Coach Name           : " << c[i].name << endl;
					cout << "Coach Date Joined    : " << c[i].date_joined << endl;
					cout << "Coach Date Terminated: " << c[i].date_terminated << endl;
					cout << "Coach Hourly Rate    : RM " << setprecision (2) << fixed << c[i].hourly_rate << endl;
					cout << "Coach Phone          : " << c[i].phone << endl;
					cout << "Coach Address        : " << c[i].address << endl;
					cout << "Sport Centre Code    : " << c[i].sport_centre_code << endl;
					cout << "Sport Center Name    : " << c[i].sport_center_name << endl;
					cout << "Sport Code           : " << c[i].sport_code << endl;
					cout << "Sport Name           : " << c[i].sport_name << endl;
					cout << "Rating               : " << c[i].rating << endl;
				}
			}
		}
		void searchrating(coaches c[], int keywordr, int head, int tail)
		{
			int i;
			for(i = head;i < tail;i ++)
			{
				if(c[i].rating == keywordr)
				{
					cout << "\nCoach ID             : " << c[i].id << endl;
					cout << "Coach Name           : " << c[i].name << endl;
					cout << "Coach Date Joined    : " << c[i].date_joined << endl;
					cout << "Coach Date Terminated: " << c[i].date_terminated << endl;
					cout << "Coach Hourly Rate    : RM " << setprecision (2) << fixed << c[i].hourly_rate << endl;
					cout << "Coach Phone          : " << c[i].phone << endl;
					cout << "Coach Address        : " << c[i].address << endl;
					cout << "Sport Centre Code    : " << c[i].sport_centre_code << endl;
					cout << "Sport Center Name    : " << c[i].sport_center_name << endl;
					cout << "Sport Code           : " << c[i].sport_code << endl;
					cout << "Sport Name           : " << c[i].sport_name << endl;
					cout << "Rating               : " << c[i].rating << endl;
				}
			}
		}
		void sortid(coaches store[], int head, int tail)
		{
			int i, j;
			coaches temp;
			for(i = head; i < tail - 1; i ++)
			{
				for(j = 0; j < tail - i - 1;j ++)
				{
					if(store[j].id > store[j + 1].id)
					{
						temp = store[j];
						store[j] = store[j + 1];
						store[j + 1] = temp;
					}
				}
			}
		}
		void sorthour(coaches store[], int head, int tail)
		{
			int i, j;
			coaches key;
			for (i = head + 1; i < tail; i ++)
			{
				key = store[i];
				j = i - 1;
				while(j >= head && store[j].hourly_rate > key.hourly_rate)
				{
					store[j + 1] = store[j];
					j --;
				}
				store[j + 1] = key;
			}
		}
		void sortrating(coaches store[], int head, int tail)
		{
			int i, j;
			coaches key;
			for (i = head + 1; i < tail; i ++)
			{
				key = store[i];
				j = i - 1;
				while(j >= head && store[j].rating > key.rating)
				{
					store[j + 1] = store[j];
					j --;
				}
				store[j + 1] = key;
			}
		}
		void modify(coaches store[], coaches key, int head, int tail)
		{
			int i;
			for(i = head; i < tail; i ++)
			{
				if(store[i].id == key.id)
				{
					store[i].phone = key.phone;
					store[i].address = key.address;
				}
			}
		}
		int deleteid(coaches store[], int key, int head, int tail)
		{
			int i, j, l = 0;
			coaches temp[100];
			for(i = head; i < tail; i ++)
			{
				if(store[i].id == key)
				{
					if(store[i].date_terminated - store[i].date_joined >= 6)
					{
						while(j < tail)
						{
							if(i != j)
							{
								temp[l] = store[j];
								l ++;
							}
							j ++;
						}
						tail --;
						store = temp;
					}
					else
					{
						cout << "Not enough 6 month" << endl;
					}
				}
			}
			return tail;
		}
};
int main()
{
	coaches c, store[100];
	int unique, choice, keyword, keywordr, dltid, tail = 0, head = 0;
	function f;
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
					unique = f.uniqueid(store, c.id, head, tail);
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
				store[tail] = c;
				tail ++;
				break;
			case 2:
				f.display(store, head, tail);
				break;
			case 3:
				cout << "Enter Coard ID: ";
				cin >> keyword;
				f.searchid(store, keyword, head, tail);
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
				f.searchrating(store, keywordr, head, tail);
				break;
			case 5:
				f.sortid(store, head, tail);
				break;
			case 6:
				f.sorthour(store, head, tail);
				break;
			case 7:
				f.sortrating(store, head, tail);
				break;
			case 8:
				cout << "Enter Coard ID: ";
				do
				{
					cin >> c.id;
					unique = f.uniqueid(store, c.id, head, tail);
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
				f.modify(store, c, head, tail);
				break;
			case 9:
				cout << "Enter Coard ID: ";
				cin >> dltid;
				tail = f.deleteid(store, dltid, head, tail);
				break;
			case 10:
				cout << "---------------------------------------------------------------------" << endl;
				delete[] store;
				break;
		}
	}while(choice != 10);
}
