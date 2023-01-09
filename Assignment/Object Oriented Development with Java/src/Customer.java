import java.io.*;
import java.util.Scanner;
public class Customer extends Process
{
    private String position, ID;
    public Customer()
    {
        
    }
    public Customer(String position, String ID) throws IOException
    {
        this.position = position;
        this.ID = ID;
    }
    public void add()
    {
        Scanner input = new Scanner(System.in);
        String cus, cusid, cuspass, cusname, cusadd, cuscon;
        boolean cusex;
        System.out.println("\n======================================================================");
        System.out.println("                              Add Customer");
        System.out.println("======================================================================");
        try
        {
            do
            {
            cusex = false;
            System.out.print("Enter Your ID         : ");
            cusid = input.nextLine();
            File file = new File("C:\\Users\\User\\Documents\\NetBeansProjects\\APU_JAVA\\src\\Acc.txt");
            BufferedReader br = new BufferedReader(new FileReader(file));
            while((cus = br.readLine()) != null)
            {
                String[] separate = cus.split("\"(,\")?");
                if(cusid.equals(separate[1].trim()))
                {
                    cusex = true;
                    System.out.println("This ID has beed registered!! Please try another ID");
                }
            }
            }while(cusex == true);
            System.out.print("Enter Your Password   : ");
            cuspass = input.nextLine();
            System.out.print("Enter Your Name       : ");
            cusname = input.nextLine();
            System.out.print("Enter Your Address    : ");
            cusadd = input.nextLine();
            System.out.print("Enter Your Contact No : ");
            cuscon = input.nextLine();
            FileWriter write = new FileWriter("C:\\Users\\User\\Documents\\NetBeansProjects\\APU_JAVA\\src\\Customer.txt",true);
            PrintWriter print_line = new PrintWriter(write);
            print_line.printf("\"%s\",\"%s\",\"%s\",\"%s\"\n", cusid, cusname, cusadd, cuscon);
            print_line.close();
            FileWriter write1 = new FileWriter("C:\\Users\\User\\Documents\\NetBeansProjects\\APU_JAVA\\src\\Acc.txt",true);
            PrintWriter print_line1 = new PrintWriter(write1);
            print_line1.printf("\"%s\",\"%s\",\"customer\"\n", cusid, cuspass);
            print_line1.close();
            Selection s = new Selection();
            s.admin_select(position, ID);
        }
        catch(Exception e)
        {
            System.out.println("Error: " + e.getMessage());
        }
    }
    public void delete()
    {
        Scanner input = new Scanner(System.in);
        String cus, cusid;
        System.out.println("\n======================================================================");
        System.out.println("                              Delete Customer");
        System.out.println("======================================================================");
        try
        {
            File file = new File("C:\\Users\\User\\Documents\\NetBeansProjects\\APU_JAVA\\src\\Customer.txt");
            BufferedReader br;
            int choice = 0;
            boolean cusex = false;
            do
            {
                int i = 0;
                br = new BufferedReader(new FileReader(file));
                if(choice == 2)
                {
                    input.nextLine();
                }
                while((cus = br.readLine()) != null)
                {
                    String[] separate = cus.split("\"(,\")?");
                    System.out.println("\n" + (++i) + ".\tCustomer ID         : " + separate[1].trim());
                    System.out.println("\tCustomer Name       : " + separate[2].trim());
                    System.out.println("\tCustomer Address    : " + separate[3].trim());
                    System.out.println("\tCustomer Contact No : " + separate[4].trim());
                }
                System.out.print("\nEnter Customer ID You Want to Delete : ");
                cusid = input.nextLine();
                do
                {
                    
                    System.out.println("\n1. Yes");
                    System.out.println("2. No");
                    System.out.print("\nConfirm : ");
                    choice = input.nextInt();
                    if(choice < 1 || choice > 2)
                    {
                       System.out.println("\nInvalid Choice!!"); 
                    }
                }while(choice < 1 || choice > 2);
            }while(choice == 2);
            br = new BufferedReader(new FileReader(file));
            while((cus = br.readLine()) != null)
            {
                String[] separate = cus.split("\"(,\")?");
                if(cusid.equals(separate[1].trim()))
                {
                    cusex = true;
                }
            } 
            if(cusex == true)
            {
                br = new BufferedReader(new FileReader(file));
                FileWriter write = new FileWriter("C:\\Users\\User\\Documents\\NetBeansProjects\\APU_JAVA\\src\\Process.txt",false);
                PrintWriter print_line = new PrintWriter(write);
                while((cus = br.readLine()) != null)
                {
                    String[] separate = cus.split("\"(,\")?");
                    if(!cusid.equals(separate[1].trim()))
                    {
                        print_line.println(cus);
                    }
                }
                print_line.close();
                file = new File("C:\\Users\\User\\Documents\\NetBeansProjects\\APU_JAVA\\src\\Process.txt");
                br = new BufferedReader(new FileReader(file));
                write = new FileWriter("C:\\Users\\User\\Documents\\NetBeansProjects\\APU_JAVA\\src\\Customer.txt",false);
                print_line = new PrintWriter(write);
                while((cus = br.readLine()) != null)
                {
                    print_line.println(cus);
                }
                print_line.close();
                br = new BufferedReader(new FileReader("C:\\Users\\User\\Documents\\NetBeansProjects\\APU_JAVA\\src\\Acc.txt"));
                write = new FileWriter("C:\\Users\\User\\Documents\\NetBeansProjects\\APU_JAVA\\src\\Process.txt",false);
                print_line = new PrintWriter(write);
                while((cus = br.readLine()) != null)
                {
                    String[] separate = cus.split("\"(,\")?");
                    if(!cusid.equals(separate[1].trim()))
                    {
                        print_line.println(cus);
                    }
                }
                print_line.close();
                file = new File("C:\\Users\\User\\Documents\\NetBeansProjects\\APU_JAVA\\src\\Process.txt");
                br = new BufferedReader(new FileReader(file));
                write = new FileWriter("C:\\Users\\User\\Documents\\NetBeansProjects\\APU_JAVA\\src\\Acc.txt",false);
                print_line = new PrintWriter(write);
                while((cus = br.readLine()) != null)
                {
                    print_line.println(cus);
                }
                print_line.close();
                br = new BufferedReader(new FileReader("C:\\Users\\User\\Documents\\NetBeansProjects\\APU_JAVA\\src\\Order.txt"));
                write = new FileWriter("C:\\Users\\User\\Documents\\NetBeansProjects\\APU_JAVA\\src\\Process.txt",false);
                print_line = new PrintWriter(write);
                while((cus = br.readLine()) != null)
                {
                    String[] separate = cus.split("\"(,\")?");
                    if(!cusid.equals(separate[2].trim()))
                    {
                        print_line.println(cus);
                    }
                }
                print_line.close();
                file = new File("C:\\Users\\User\\Documents\\NetBeansProjects\\APU_JAVA\\src\\Process.txt");
                br = new BufferedReader(new FileReader(file));
                write = new FileWriter("C:\\Users\\User\\Documents\\NetBeansProjects\\APU_JAVA\\src\\Order.txt",false);
                print_line = new PrintWriter(write);
                while((cus = br.readLine()) != null)
                {
                    print_line.println(cus);
                }
                print_line.close();
                System.out.println("\nDelete Done!!");
            }
            else
            {
                System.out.println("\nNo have this account!!!");
            }
            Selection s = new Selection();
            s.admin_select(position, ID);
        }
        catch(Exception e)
        {
            System.out.println("Error: " + e.getMessage());
        }
    }
    public void edit()
    {
        Scanner input = new Scanner(System.in);
        String cus, cusid;
        System.out.println("\n======================================================================");
        System.out.println("                              Edit Customer");
        System.out.println("======================================================================");
        try
        {
            File file = new File("C:\\Users\\User\\Documents\\NetBeansProjects\\APU_JAVA\\src\\Customer.txt");
            BufferedReader br;
            int choice = 0;
            String cusname, cusadd, cuscon;
            boolean cusex = false;
            do
            {
                if(choice == 2)
                {
                    input.nextLine();
                }
                int i = 0;
                br = new BufferedReader(new FileReader(file));
                while((cus = br.readLine()) != null)
                {
                    String[] separate = cus.split("\"(,\")?");
                    System.out.println("\n" + (++i) + ".\tCustomer ID         : " + separate[1].trim());
                    System.out.println("\tCustomer Name       : " + separate[2].trim());
                    System.out.println("\tCustomer Address    : " + separate[3].trim());
                    System.out.println("\tCustomer Contact No : " + separate[4].trim());
                }
                System.out.print("\nEnter Customer ID You Want to Edit : ");
                cusid = input.nextLine();
                do
                {
                    System.out.println("\n1. Yes");
                    System.out.println("2. No");
                    System.out.print("\nConfirm : ");
                    choice = input.nextInt();
                    if(choice < 1 || choice > 2)
                    {
                       System.out.println("\nInvalid Choice!!"); 
                    }
                }while(choice < 1 || choice > 2);
            }while(choice == 2);
            br = new BufferedReader(new FileReader(file));
            while((cus = br.readLine()) != null)
            {
                String[] separate = cus.split("\"(,\")?");
                if(cusid.equals(separate[1].trim()))
                {
                    cusex = true;
                }
            } 
            if(cusex == true)
            {
                input.nextLine();
                System.out.print("Enter Your Name       : ");
                cusname = input.nextLine();
                System.out.print("Enter Your Address    : ");
                cusadd = input.nextLine();
                System.out.print("Enter Your Contact No : ");
                cuscon = input.nextLine();
                br = new BufferedReader(new FileReader(file));
                FileWriter write = new FileWriter("C:\\Users\\User\\Documents\\NetBeansProjects\\APU_JAVA\\src\\Process.txt",false);
                PrintWriter print_line = new PrintWriter(write);
                while((cus = br.readLine()) != null)
                {
                    String[] separate = cus.split("\"(,\")?");
                    if(!cusid.equals(separate[1].trim()))
                    {
                        print_line.println(cus);
                    }
                    else
                    {
                        print_line.println("\"" + separate[1].trim() + "\",\"" + cusname + "\",\"" + cusadd + "\",\"" + cuscon + "\"");
                    }
                }
                print_line.close();
                file = new File("C:\\Users\\User\\Documents\\NetBeansProjects\\APU_JAVA\\src\\Process.txt");
                br = new BufferedReader(new FileReader(file));
                write = new FileWriter("C:\\Users\\User\\Documents\\NetBeansProjects\\APU_JAVA\\src\\Customer.txt",false);
                print_line = new PrintWriter(write);
                while((cus = br.readLine()) != null)
                {
                    print_line.println(cus);
                }
                print_line.close();
                System.out.println("\nEdit Done!!");
            }
            else
            {
                System.out.println("\nNo have this account!!!");
            }
            Selection s = new Selection();
            s.admin_select(position, ID);
        }
        catch(Exception e)
        {
            System.out.println("Error: " + e.getMessage());
        }
    }
    public void view()
    {
        System.out.println("\n======================================================================");
        System.out.println("                              View Customer");
        System.out.println("======================================================================");
        String cus;
        try
        {
            File file = new File("C:\\Users\\User\\Documents\\NetBeansProjects\\APU_JAVA\\src\\Customer.txt");
            BufferedReader br = new BufferedReader(new FileReader(file));
            int i = 0;
            while((cus = br.readLine()) != null)
            {
                String[] separate = cus.split("\"(,\")?");
                System.out.println("\n" + (++i) + ".\tCustomer ID         : " + separate[1].trim());
                System.out.println("\tCustomer Name       : " + separate[2].trim());
                System.out.println("\tCustomer Address    : " + separate[3].trim());
                System.out.println("\tCustomer Contact No : " + separate[4].trim());
            }
            if(i == 0)
            {
                System.out.println("\nNo have Customer");
            }
            Selection s = new Selection();
            s.admin_select(position, ID);
        }
        catch(Exception e)
        {
            System.out.println("Error: " + e.getMessage());
        }
    }
    public void search()
    {
        Scanner input = new Scanner(System.in);
        String cus;
        System.out.println("\n======================================================================");
        System.out.println("                             Search Customer");
        System.out.println("======================================================================");
        System.out.print("Search By Keyword : ");
        String keyword = input.nextLine();
        try
        {
            File file = new File("C:\\Users\\User\\Documents\\NetBeansProjects\\APU_JAVA\\src\\Customer.txt");
            BufferedReader br = new BufferedReader(new FileReader(file));
            int i = 0;
            while((cus = br.readLine()) != null)
            {
                String[] separate = cus.split("\"(,\")?");
                for(int a = 1;a < 5;a ++)
                {
                    if(separate[a].trim().equals(keyword))
                    {
                        System.out.println("\n" + (++i) + ".\tCustomer ID         : " + separate[1].trim());
                        System.out.println("\tCustomer Name       : " + separate[2].trim());
                        System.out.println("\tCustomer Address    : " + separate[3].trim());
                        System.out.println("\tCustomer Contact No : " + separate[4].trim());
                        break;
                    }
                }
            }
            System.out.println("\nThere are " + i + " result found !!");
            Selection s = new Selection();
            s.admin_select(position, ID);
        }
        catch(Exception e)
        {
            System.out.println("Error: " + e.getMessage());
        }
    }
}