import java.io.IOException;
import java.util.Scanner;
public class Selection
{
    public void admin_select(String position, String ID)    throws IOException
    {
        Scanner input = new Scanner(System.in);
        int choice,choice1;
        boolean status = false;
        do
        {
            System.out.println("\n======================================================================");
            System.out.println("                                Admin");
            System.out.println("======================================================================");
            System.out.println("\n1. Customer");
            System.out.println("2. Product");
            System.out.println("3. Order");
            System.out.println("\n0. Quit");
            System.out.print("\nPlease Enter Your Choice : ");
            choice = input.nextInt();
            switch(choice)
            {
                case 0:
                    status = true;
                    quit(position, ID);
                    break;
                case 1:
                    status = true;
                    Customer c = new Customer(position, ID);
                    int choice2;
                    do
                    {
                        System.out.println("\n1. Add Customer");
                        System.out.println("2. Delete Customer");
                        System.out.println("3. Edit Customer");
                        System.out.println("4. View Customer");
                        System.out.println("5. Search Customer");
                        System.out.println("\n0. Quit");
                        System.out.print("\nPlease Enter Your Choice : ");
                        choice2 = input.nextInt();
                        if(choice2 == 1)
                        {
                            c.add();
                        }
                        else if(choice2 == 2)
                        {
                            c.delete();
                        }
                        else if(choice2 == 3)
                        {
                            c.edit();
                        }
                        else if(choice2 == 4)
                        {
                            c.view();
                        }
                        else if(choice2 == 5)
                        {
                            c.search();
                        }
                        else if(choice2 == 0)
                        {
                            quit(position, ID);
                        }
                        else
                        {
                            System.out.println("Invalid Choice!!!");
                        }
                    }while(choice2 < 0 || choice2 > 5);
                    break;
                case 2:
                    status = true;
                    Product p = new Product(position, ID);
                    int choice3;
                    System.out.println("\n1. Add Product");
                    System.out.println("2. Delete Product");
                    System.out.println("3. Edit Product");
                    System.out.println("4. View Product");
                    System.out.println("5. Search Product");
                    System.out.println("\n0. Quit");
                    System.out.print("\nPlease Enter Your Choice : ");
                    choice3 = input.nextInt();
                    if(choice3 == 1)
                    {
                        p.add();
                    }
                    else if(choice3 == 2)
                    {
                        p.delete();
                    }
                    else if(choice3 == 3)
                    {
                        p.edit();
                    }
                    else if(choice3 == 4)
                    {
                        p.view();
                    }
                    else if(choice3 == 5)
                    {
                        p.search();
                    }
                    else if(choice3 == 0)
                    {
                        quit(position, ID);
                    }
                    else
                    {
                        System.out.println("Invalid Choice!!!");
                    }
                    break;
                case 3:
                    status = true;
                    Order o = new Order(position,ID);
                    break;
                default:
                    System.out.println("Invalid Choice!!!");
                    break;
            }
        }while(status == false);
    }
    public void login() throws IOException
    {
        Scanner input = new Scanner(System.in);
        int choice;
        String ID,password;
        boolean status = false;
        do
        {
            System.out.println("\n======================================================================");
            System.out.println("                                Login");
            System.out.println("======================================================================");
            System.out.println("Close the program please enter close at ID and password\n");
            System.out.print("Please Enter Your ID       : ");
            ID = input.nextLine();
            System.out.print("Please Enter Your Password : ");
            password = input.nextLine();
            if(!ID.equals("close") && !password.equals("close"))
            {
                Acc a = new Acc(ID, password);
                status = a.getstatus_acc();

                if(a.getPosition().equals("admin") && a.getstatus_acc() == true)
                {
                    status = true;
                    admin_select(a.getPosition(), a.getID());
                }
                else if(a.getPosition().equals("customer") && a.getstatus_acc() == true)
                {
                    status =true;
                    Order o = new Order(a.getPosition(), a.getID());
                }
                else
                {
                    System.out.println(a.getPosition());
                }
            }
            else
            {
                status = true;
                System.out.println("Thank You");
            }
        }while(status == false);
    }
    public void quit(String position, String ID) throws IOException
    {
        Scanner input = new Scanner(System.in);
        int choice1;
        do
        {
            System.out.println("\n======================================================================");
            System.out.println("                                  Quit");
            System.out.println("======================================================================");
            System.out.println("\n1. Logout");
            System.out.println("2. Close Program");
            System.out.println("3. Back to Home Page");
            System.out.println("\n0. Back");
            System.out.print("\nPlease Enter Your Choice : ");
            choice1 = input.nextInt();
            if(choice1 == 1)
            {
                login();
            }
            else if(choice1 == 2)
            {
                System.out.println("Thank You");
            }
            else if(choice1 == 3)
            {
                if(position.equals("customer"))
                {
                    Order o = new Order(position, ID);
                }
                else
                {
                    admin_select(position, ID);
                }
            }
            else if(choice1 == 0)
            {
                admin_select(position, ID);
            }
            else
            {
                System.out.println("Invalid Choice!!!");
            }
        }while(choice1 < 0 || choice1 > 3);
    }
}