import java.io.*;
import java.util.Scanner;
public class Product extends Process
{
    private String position, ID;
    public Product()
    {
        
    }
    public Product(String position, String ID) throws IOException
    {
        this.position = position;
        this.ID = ID;
    }
    public void add()
    {
        Scanner input = new Scanner(System.in);
        String pro, proid, proname;
        double prorate;
        boolean proex;
        System.out.println("\n======================================================================");
        System.out.println("                              Add Product");
        System.out.println("======================================================================");
        try
        {
            do
            {
                proex = false;
                System.out.print("Enter Your Product ID   : ");
                proid = input.nextLine();
                File file = new File("C:\\Users\\User\\Documents\\NetBeansProjects\\APU_JAVA\\src\\Product.txt");
                BufferedReader br = new BufferedReader(new FileReader(file));
                while((pro = br.readLine()) != null)
                {
                    String[] separate = pro.split("\"(,\")?");
                    if(proid.equals(separate[1].trim()))
                    {
                        proex = true;
                        System.out.println("This ID has beed registered!! Please try another ID");
                    }
                }
            }while(proex == true);
            System.out.print("Enter Your Product Name : ");
            proname = input.nextLine();
            System.out.print("Enter Your Product Price : ");
            prorate = input.nextDouble();
            FileWriter write = new FileWriter("C:\\Users\\User\\Documents\\NetBeansProjects\\APU_JAVA\\src\\Product.txt",true);
            PrintWriter print_line = new PrintWriter(write);
            print_line.printf("\"%s\",\"%s\",\"%.2f\"\n",proid, proname, prorate);
            print_line.close();
            Selection s = new Selection();
            s.admin_select(position, ID);
        }
        catch(Exception e)
        {
            System.out.println("Error: " + e.getMessage());
            add();
        }
    }
    public void delete()
    {
        Scanner input = new Scanner(System.in);
        String pro, proid;
        System.out.println("\n======================================================================");
        System.out.println("                              Delete Product");
        System.out.println("======================================================================");
        try
        {
            File file = new File("C:\\Users\\User\\Documents\\NetBeansProjects\\APU_JAVA\\src\\Product.txt");
            BufferedReader br;
            int choice = 0;
            boolean proex = false;
            do
            {
                int i = 0;
                br = new BufferedReader(new FileReader(file));
                if(choice == 2)
                {
                    input.nextLine();
                }
                while((pro = br.readLine()) != null)
                {
                    String[] separate = pro.split("\"(,\")?");
                    System.out.println("\n" + (++i) + ".\tProduct ID   : " + separate[1].trim());
                    System.out.println("\tProduct Name : " + separate[2].trim());
                    System.out.printf("\tProduct Rate : RM %.2f\n", Double.parseDouble(separate[3].trim()));
                }
                System.out.print("\nEnter Product ID You Want to Delete : ");
                proid = input.nextLine();
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
            while((pro = br.readLine()) != null)
            {
                String[] separate = pro.split("\"(,\")?");
                if(proid.equals(separate[1].trim()))
                {
                    proex = true;
                }
            } 
            if(proex == true)
            {
                br = new BufferedReader(new FileReader(file));
                FileWriter write = new FileWriter("C:\\Users\\User\\Documents\\NetBeansProjects\\APU_JAVA\\src\\Process.txt",false);
                PrintWriter print_line = new PrintWriter(write);
                while((pro = br.readLine()) != null)
                {
                    String[] separate = pro.split("\"(,\")?");
                    if(!proid.equals(separate[1].trim()))
                    {
                        print_line.println(pro);
                    }
                }
                print_line.close();
                file = new File("C:\\Users\\User\\Documents\\NetBeansProjects\\APU_JAVA\\src\\Process.txt");
                br = new BufferedReader(new FileReader(file));
                write = new FileWriter("C:\\Users\\User\\Documents\\NetBeansProjects\\APU_JAVA\\src\\Product.txt",false);
                print_line = new PrintWriter(write);
                while((pro = br.readLine()) != null)
                {
                    print_line.println(pro);
                }
                print_line.close();
                System.out.println("\nDelete Done!!");
            }
            else
            {
                System.out.println("\nNo have this ID!!!");
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
        String pro, proid;
        System.out.println("\n======================================================================");
        System.out.println("                              Edit Product");
        System.out.println("======================================================================");
        try
        {
            File file = new File("C:\\Users\\User\\Documents\\NetBeansProjects\\APU_JAVA\\src\\Product.txt");
            BufferedReader br;
            int choice = 0;
            String proname;
            double prorate;
            boolean proex = false;
            do
            {
                if(choice == 2)
                {
                    input.nextLine();
                }
                int i = 0;
                br = new BufferedReader(new FileReader(file));
                while((pro = br.readLine()) != null)
                {
                    String[] separate = pro.split("\"(,\")?");
                    System.out.println("\n" + (++i) + ".\tProduct ID   : " + separate[1].trim());
                    System.out.println("\tProduct Name : " + separate[2].trim());
                    System.out.printf("\tProduct Rate : RM %.2f\n", Double.parseDouble(separate[3].trim()));
                }
                System.out.print("\nEnter Product ID You Want to Edit : ");
                proid = input.nextLine();
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
            while((pro = br.readLine()) != null)
            {
                String[] separate = pro.split("\"(,\")?");
                if(proid.equals(separate[1].trim()))
                {
                    proex = true;
                }
            } 
            if(proex == true)
            {
                input.nextLine();
                System.out.print("Enter Your Product Name : ");
                proname = input.nextLine();
                System.out.print("Enter Your Product Rate : ");
                prorate = input.nextDouble();
                br = new BufferedReader(new FileReader(file));
                FileWriter write = new FileWriter("C:\\Users\\User\\Documents\\NetBeansProjects\\APU_JAVA\\src\\Process.txt",false);
                PrintWriter print_line = new PrintWriter(write);
                while((pro = br.readLine()) != null)
                {
                    String[] separate = pro.split("\"(,\")?");
                    if(!proid.equals(separate[1].trim()))
                    {
                        print_line.println(pro);
                    }
                    else
                    {
                        print_line.printf("\"%s\",\"%s\",\"%.2f\"\n",proid, proname, prorate);
                    }
                }
                print_line.close();
                file = new File("C:\\Users\\User\\Documents\\NetBeansProjects\\APU_JAVA\\src\\Process.txt");
                br = new BufferedReader(new FileReader(file));
                write = new FileWriter("C:\\Users\\User\\Documents\\NetBeansProjects\\APU_JAVA\\src\\Product.txt",false);
                print_line = new PrintWriter(write);
                while((pro = br.readLine()) != null)
                {
                    print_line.println(pro);
                }
                print_line.close();
                System.out.println("\nEdit Done!!");
            }
            else
            {
                System.out.println("\nNo have this ID!!!");
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
        System.out.println("                              View Product");
        System.out.println("======================================================================");
        String pro;
        try
        {
            File file = new File("C:\\Users\\User\\Documents\\NetBeansProjects\\APU_JAVA\\src\\Product.txt");
            BufferedReader br = new BufferedReader(new FileReader(file));
            int i = 0;
            while((pro = br.readLine()) != null)
            {
                String[] separate = pro.split("\"(,\")?");
                System.out.println("\n" + (++i) + ".\tProduct ID   : " + separate[1].trim());
                System.out.println("\tProduct Name : " + separate[2].trim());
                System.out.printf("\tProduct Rate : RM %.2f\n", Double.parseDouble(separate[3].trim()));
            }
            if(i == 0)
            {
                System.out.println("\nNo have Product");
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
        String pro;
        System.out.println("\n======================================================================");
        System.out.println("                             Search Product");
        System.out.println("======================================================================");
        System.out.print("Search By Keyword : ");
        String keyword = input.nextLine();
        try
        {
            File file = new File("C:\\Users\\User\\Documents\\NetBeansProjects\\APU_JAVA\\src\\Product.txt");
            BufferedReader br = new BufferedReader(new FileReader(file));
            int i = 0;
            while((pro = br.readLine()) != null)
            {
                String[] separate = pro.split("\"(,\")?");
                for(int a = 1;a < 4;a ++)
                {
                    if(separate[a].trim().equals(keyword))
                    {
                        System.out.println("\n" + (++i) + ".\tProduct ID   : " + separate[1].trim());
                        System.out.println("\tProduct Name : " + separate[2].trim());
                        System.out.printf("\tProduct Rate : RM %.2f\n", Double.parseDouble(separate[3].trim()));
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