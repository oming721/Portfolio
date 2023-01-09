// TAN TIAM MING 1171200617
// ChIEW XIE ZERN 1171200210
#include<iostream>
using namespace std;
class Balloon
{
	private:
		int num[3],avg,total,age,star1,star2,star3;
		string name,status;
	public:
		Balloon()
		{
			fflush(stdin);
			cout << "\nEnter Name       : ";
			getline(cin,name);
			cout << "Enter Age        : ";
			cin >> age;
			cout << "-----------------------------------------" << endl;
			cout << "              Balloon Details" << endl;
			cout << "-----------------------------------------" << endl;
			set_detail();
		}
		void set_detail()
		{
			int a;
			for (a = 0;a < 3;a ++)
			{
				cout << "Enter how many balloons for " << a + 1 << " attempt: ";
				cin >> num[a];
			}
			setdata();
		}
		void setdata()
		{
			int a;
			total = 0;
			for(a = 0;a < 3;a ++)
			{
				total += num[a];
			}
			avg = total / 3;
			get_status();
		}
		void get_status()
		{
			star1 = 0;
			star2 = 0;
			star3 = 0;
			if (avg >= 7)
			{
				status = "Best";
				star1 ++;
			}
			else if (avg >=5  && avg < 7)
			{
				status = "Good";
				star2 ++;
			}
			else
			{
				status = "Nice Try";
				star3 ++;
			}
		}
		int get_star1()
		{
			return star1;
		}
		int get_star2()
		{
			return star2;
		}
		int get_star3()
		{
			return star3;
		}
		friend class Display;
};
class Display:public Balloon
{
	public:
		Display()
		{
			cout << "\n-----------------------------------------" << endl;
			cout << "               Balloon Scores" << endl;
			cout << "-----------------------------------------" << endl;
			cout << "Name               : " << name << endl;
			cout << "Age                : " << age << endl;
			cout << "Total Balloons     : " << total << endl;
			cout << "Total Points       : " << total * 2 << endl;
			cout << "Achievement        : " << status << endl;
		}
};
int main()
{
	int a,b,star1 = 0,star2 = 0,star3 = 0;
	string status;
	cout << "-----------------------------------------" << endl;
	cout << "            Fun Balloon" << endl;
	cout << "-----------------------------------------" << endl;
	cout << "Enter number of participants : ";
	cin >> a;
	Display *D1;
	D1 = new Display[a];
	cout << "\n====================================" << endl;
	cout << "        Summary Results" << endl;
	cout << "======================================" << endl;
	for(b = 0;b < a;b ++)
	{
		star1 += D1[b].get_star1();
		star2 += D1[b].get_star2();
		star3 += D1[b].get_star3(); 
	}
	cout << "Best ";
	for (b = 0;b < star1;b ++)
	{
		cout << "* ";
	}
	cout << "\nGood ";
	for (b = 0;b < star2;b ++)
	{
		cout << "* ";
	}
	cout << "\nNice Try ";
	for (b = 0;b < star3;b ++)
	{
		cout << "* ";
	}
	delete [] D1;
	return 0;
}
