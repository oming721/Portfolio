import java.util.Scanner;
import java.io.*;
import java.util.Scanner;
public class Order extends Process
{
    private String position, ID;
    public Order()
    {
        
    }
    public Order(String position, String ID) throws IOException
    {
        this.position = position;
        this.ID = ID;
        int choice4;
        Scanner input = new Scanner(System.in);
        if(position.equals("customer"))
        {
            System.out.println("\n======================================================================");
            System.out.println("                              Customer");
            System.out.println("======================================================================");
        }
        System.out.println("\n1. Add Order");
        System.out.println("2. Delete Order");
        System.out.println("3. Edit Order");
        System.out.println("4. View Order");
        System.out.println("5. Search Order");
        System.out.println("6. Total Amount");
        System.out.println("\n0. Quit");
        System.out.print("\nPlease Enter Your Choice : ");
        choice4 = input.nextInt();
        if(choice4 == 1)
        {
            add();
        }
        else if(choice4 == 2)
        {
            delete();
        }
        else if(choice4 == 3)
        {
            edit();
        }
        else if(choice4 == 4)
        {
            view();
        }
        else if(choice4 == 5)
        {
            search();
        }
        else if(choice4 == 6)
        {
            total();
        }
        else if(choice4 == 0)
        {
            Selection s = new Selection();
            s.quit(position, ID);
        }
        else
        {
            System.out.println("Invalid Choice!!!");
        }
    }
    public void add()
    {
        Scanner input = new Scanner(System.in);
        String ord, pro, proid;
        int ordquan;
        double prorate;
        boolean proex;
        System.out.println("\n======================================================================");
        System.out.println("                              Add Product");
        System.out.println("======================================================================");
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
            do
            {
                proex = false;
                System.out.print("\nEnter Your Product ID   : ");
                proid = input.nextLine();
                try
                {
                    file = new File("C:\\Users\\User\\Documents\\NetBeansProjects\\APU_JAVA\\src\\Product.txt");
                    br = new BufferedReader(new FileReader(file));
                    while((pro = br.readLine()) != null)
                    {
                        String[] separate = pro.split("\"(,\")?");
                        if(proid.equals(separate[1].trim()))
                        {
                            proex = true;
                        }
                    }
                    if(proex == false)
                    {
                        System.out.println("No have this product ID");
                    }
                }
                catch(Exception e)
                {
                    System.out.println("Error: " + e.getMessage());
                }
            }while(proex == false);
            System.out.print("Enter Quantity you want : ");
            ordquan = input.nextInt();
            int ordid = 0;
            file = new File("C:\\Users\\User\\Documents\\NetBeansProjects\\APU_JAVA\\src\\Order.txt");
            br = new BufferedReader(new FileReader(file));
            while((pro = br.readLine()) != null)
            {
                ordid ++;
            }
            FileWriter write = new FileWriter("C:\\Users\\User\\Documents\\NetBeansProjects\\APU_JAVA\\src\\Order.txt",true);
            PrintWriter print_line = new PrintWriter(write);
            print_line.printf("\"%d\",\"%s\",\"%s\",\"%d\"\n",ordid, ID, proid, ordquan);
            print_line.close();
            if(position.equals("admin"))
            {
                Selection s = new Selection();
                s.admin_select(position, ID);
            }
            else
            {
                Order o = new Order(position, ID);
            }
        }
        catch(Exception e)
        {
            System.out.println("Error: " + e.getMessage());
        }
    }
    public void delete()
    {
        Scanner input = new Scanner(System.in);
        String ord, ordid;
        System.out.println("\n======================================================================");
        System.out.println("                              Delete Order");
        System.out.println("======================================================================");
        try
        {
            File file = new File("C:\\Users\\User\\Documents\\NetBeansProjects\\APU_JAVA\\src\\Order.txt");
            BufferedReader br;
            int choice = 0;
            boolean ordex = false;
            do
            {
                int i = 0;
                br = new BufferedReader(new FileReader(file));
                if(choice == 2)
                {
                    input.nextLine();
                }
                while((ord = br.readLine()) != null)
                {
                    String[] separate = ord.split("\"(,\")?");
                    if(separate[2].trim().equals(ID))
                    {
                        System.out.println("\n" + (++i) + ".\tOrder ID       : " + separate[1].trim());
                        System.out.println("\tCustomer ID    : " + separate[2].trim());
                        File file1 = new File("C:\\Users\\User\\Documents\\NetBeansProjects\\APU_JAVA\\src\\Product.txt");
                        BufferedReader br1 = new BufferedReader(new FileReader(file1));
                        String pro;
                        while((pro = br1.readLine()) != null)
                        {
                            String[] separate1 = pro.split("\"(,\")?");
                            if(separate[3].trim().equals(separate1[1].trim()))
                            {
                                System.out.println("\tProduct ID     : " + separate1[1].trim());
                                System.out.println("\tProduct Name   : " + separate1[2].trim());
                                System.out.printf("\tProduct Rate   : RM %.2f\n", Double.parseDouble(separate1[3].trim()));
                            }
                        }
                        System.out.println("\tOrder Quantity : " + Integer.parseInt(separate[4].trim()));
                    }
                }
                System.out.print("\nEnter Order ID You Want to Delete : ");
                ordid = input.nextLine();
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
            while((ord = br.readLine()) != null)
            {
                String[] separate = ord.split("\"(,\")?");
                if(ordid.equals(separate[1].trim()) && separate[2].trim().equals(ID))
                {
                    ordex = true;
                }
            } 
            if(ordex == true)
            {
                br = new BufferedReader(new FileReader(file));
                FileWriter write = new FileWriter("C:\\Users\\User\\Documents\\NetBeansProjects\\APU_JAVA\\src\\Process.txt",false);
                PrintWriter print_line = new PrintWriter(write);
                while((ord = br.readLine()) != null)
                {
                    String[] separate = ord.split("\"(,\")?");
                    if(!ordid.equals(separate[1].trim()))
                    {
                        print_line.println(ord);
                    }
                }
                print_line.close();
                file = new File("C:\\Users\\User\\Documents\\NetBeansProjects\\APU_JAVA\\src\\Process.txt");
                br = new BufferedReader(new FileReader(file));
                write = new FileWriter("C:\\Users\\User\\Documents\\NetBeansProjects\\APU_JAVA\\src\\Order.txt",false);
                print_line = new PrintWriter(write);
                while((ord = br.readLine()) != null)
                {
                    print_line.println(ord);
                }
                print_line.close();
                System.out.println("\nDelete Done!!");
            }
            else
            {
                System.out.println("\nNo have this ID!!!");
            }
            if(position.equals("admin"))
            {
                Selection s = new Selection();
                s.admin_select(position, ID);
            }
            else
            {
                Order o = new Order(position, ID);
            }
        }
        catch(Exception e)
        {
            System.out.println("Error: " + e.getMessage());
        }
    }
    public void edit()
    {
        Scanner input = new Scanner(System.in);
        String ord, ordid;
        System.out.println("\n======================================================================");
        System.out.println("                              Edit Order");
        System.out.println("======================================================================");
        try
        {
            File file = new File("C:\\Users\\User\\Documents\\NetBeansProjects\\APU_JAVA\\src\\Order.txt");
            BufferedReader br;
            int choice = 0, ordquan;
            boolean ordex = false;
            do
            {
                if(choice == 2)
                {
                    input.nextLine();
                }
                int i = 0;
                br = new BufferedReader(new FileReader(file));
                while((ord = br.readLine()) != null)
                {
                    String[] separate = ord.split("\"(,\")?");
                    if(separate[2].trim().equals(ID))
                    {
                        System.out.println("\n" + (++i) + ".\tOrder ID       : " + separate[1].trim());
                        System.out.println("\tCustomer ID    : " + separate[2].trim());
                        File file1 = new File("C:\\Users\\User\\Documents\\NetBeansProjects\\APU_JAVA\\src\\Product.txt");
                        BufferedReader br1 = new BufferedReader(new FileReader(file1));
                        String pro;
                        while((pro = br1.readLine()) != null)
                        {
                            String[] separate1 = pro.split("\"(,\")?");
                            if(separate[3].trim().equals(separate1[1].trim()))
                            {
                                System.out.println("\tProduct ID     : " + separate1[1].trim());
                                System.out.println("\tProduct Name   : " + separate1[2].trim());
                                System.out.printf("\tProduct Rate   : RM %.2f\n", Double.parseDouble(separate1[3].trim()));
                            }
                        }
                        System.out.println("\tOrder Quantity : " + Integer.parseInt(separate[4].trim()));
                    }
                }
                System.out.print("\nEnter Order ID You Want to Edit : ");
                ordid = input.nextLine();
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
            while((ord = br.readLine()) != null)
            {
                String[] separate = ord.split("\"(,\")?");
                if(ordid.equals(separate[1].trim()) && separate[2].trim().equals(ID))
                {
                    ordex = true;
                }
            } 
            if(ordex == true)
            {
                input.nextLine();
                System.out.print("Enter Your Order Quantity : ");
                ordquan = input.nextInt();
                br = new BufferedReader(new FileReader(file));
                FileWriter write = new FileWriter("C:\\Users\\User\\Documents\\NetBeansProjects\\APU_JAVA\\src\\Process.txt",false);
                PrintWriter print_line = new PrintWriter(write);
                while((ord = br.readLine()) != null)
                {
                    String[] separate = ord.split("\"(,\")?");
                    if(!ordid.equals(separate[1].trim()))
                    {
                        print_line.println(ord);
                    }
                    else
                    {
                        print_line.printf("\"%s\",\"%s\",\"%s\",\"%d\"\n",ordid, separate[2].trim(),separate[3].trim(), ordquan);
                    }
                }
                print_line.close();
                file = new File("C:\\Users\\User\\Documents\\NetBeansProjects\\APU_JAVA\\src\\Process.txt");
                br = new BufferedReader(new FileReader(file));
                write = new FileWriter("C:\\Users\\User\\Documents\\NetBeansProjects\\APU_JAVA\\src\\Order.txt",false);
                print_line = new PrintWriter(write);
                while((ord = br.readLine()) != null)
                {
                    print_line.println(ord);
                }
                print_line.close();
                System.out.println("\nEdit Done!!");
            }
            else
            {
                System.out.println("\nNo have this ID!!!");
            }
            if(position.equals("admin"))
            {
                Selection s = new Selection();
                s.admin_select(position, ID);
            }
            else
            {
                Order o = new Order(position, ID);
            }
        }
        catch(Exception e)
        {
            System.out.println("Error: " + e.getMessage());
            edit();
        }
    }
    public void view()
    {
        System.out.println("\n======================================================================");
        System.out.println("                              View Product");
        System.out.println("======================================================================");
        String ord;
        try
        {
            File file = new File("C:\\Users\\User\\Documents\\NetBeansProjects\\APU_JAVA\\src\\Order.txt");
            BufferedReader br = new BufferedReader(new FileReader(file));
            int i = 0;
            while((ord = br.readLine()) != null)
            {
                String[] separate = ord.split("\"(,\")?");
                if(separate[2].trim().equals(ID))
                {
                    System.out.println("\n" + (++i) + ".\tOrder ID       : " + separate[1].trim());
                    System.out.println("\tCustomer ID    : " + separate[2].trim());
                    File file1 = new File("C:\\Users\\User\\Documents\\NetBeansProjects\\APU_JAVA\\src\\Product.txt");
                    BufferedReader br1 = new BufferedReader(new FileReader(file1));
                    String pro;
                    while((pro = br1.readLine()) != null)
                    {
                        String[] separate1 = pro.split("\"(,\")?");
                        if(separate[3].trim().equals(separate1[1].trim()))
                        {
                            System.out.println("\tProduct ID     : " + separate1[1].trim());
                            System.out.println("\tProduct Name   : " + separate1[2].trim());
                            System.out.printf("\tProduct Rate   : RM %.2f\n", Double.parseDouble(separate1[3].trim()));
                        }
                    }
                    System.out.println("\tOrder Quantity : " + Integer.parseInt(separate[4].trim()));
                }
            }
            if(i == 0)
            {
                System.out.println("\nNo have Order");
            }
            if(position.equals("admin"))
            {
                Selection s = new Selection();
                s.admin_select(position, ID);
            }
            else
            {
                Order o = new Order(position, ID);
            }
        }
        catch(Exception e)
        {
            System.out.println("Error: " + e.getMessage());
        }
    }
    public void search()
    {
        Scanner input = new Scanner(System.in);
        String ord;
        System.out.println("\n======================================================================");
        System.out.println("                             Search Order");
        System.out.println("======================================================================");
        System.out.print("Search By Keyword : ");
        String keyword = input.nextLine();
        try
        {
            File file = new File("C:\\Users\\User\\Documents\\NetBeansProjects\\APU_JAVA\\src\\Order.txt");
            BufferedReader br = new BufferedReader(new FileReader(file));
            FileWriter write = new FileWriter("C:\\Users\\User\\Documents\\NetBeansProjects\\APU_JAVA\\src\\Process.txt",false);
            PrintWriter print_line = new PrintWriter(write);
            int i = 0;
            while((ord = br.readLine()) != null)
            {
                String[] separate = ord.split("\"(,\")?");
                if(separate[2].trim().equals(ID))
                {
                    String pro;
                    File file1 = new File("C:\\Users\\User\\Documents\\NetBeansProjects\\APU_JAVA\\src\\Product.txt");
                    BufferedReader br1 = new BufferedReader(new FileReader(file1));
                    while((pro = br1.readLine()) != null)
                    {
                        String[] separate1 = pro.split("\"(,\")?");
                        if(separate[3].trim().equals(separate1[1].trim()))
                        {
                            print_line.printf("\"%s\",\"%s\",%s,\"%s\"\n", separate[1].trim(), separate[2].trim(), pro, separate[4].trim());
                        }
                    }
                }
            }
            print_line.close();
            file = new File("C:\\Users\\User\\Documents\\NetBeansProjects\\APU_JAVA\\src\\Process.txt");
            br = new BufferedReader(new FileReader(file));
            String show;
            while((show = br.readLine()) != null)
            {
                String[] separate = show.split("\"(,\")?");
                for(int a = 1;a < 7;a ++)
                {
                    if(separate[a].trim().equals(keyword))
                    {
                        System.out.println("\n" + (++i) + ".\tOrder ID       : " + separate[1].trim());
                        System.out.println("\tCustomer ID    : " + separate[2].trim());
                        System.out.println("\tProduct ID     : " + separate[3].trim());
                        System.out.println("\tProduct Name   : " + separate[4].trim());
                        System.out.printf("\tProduct Rate   : RM %.2f\n", Double.parseDouble(separate[5].trim()));
                        System.out.println("\tOrder Quantity : " + Integer.parseInt(separate[6].trim()));
                        break;
                    }
                }
            }
            System.out.println("\nThere are " + i + " result found !!");
            if(position.equals("admin"))
            {
                Selection s = new Selection();
                s.admin_select(position, ID);
            }
            else
            {
                Order o = new Order(position, ID);
            }
        }
        catch(Exception e)
        {
            System.out.println("Error: " + e.getMessage());
        }
    }
    public void total()
    {
        System.out.println("\n======================================================================");
        System.out.println("                              View Total");
        System.out.println("======================================================================");
        String ord;
        try
        {
            File file = new File("C:\\Users\\User\\Documents\\NetBeansProjects\\APU_JAVA\\src\\Order.txt");
            BufferedReader br = new BufferedReader(new FileReader(file));
            int i = 0;
            double total_prd = 0,total = 0;
            while((ord = br.readLine()) != null)
            {
                String[] separate = ord.split("\"(,\")?");
                if(separate[2].trim().equals(ID))
                {
                    System.out.println("\n" + (++i) + ".\tOrder ID       : " + separate[1].trim());
                    System.out.println("\tCustomer ID    : " + separate[2].trim());
                    File file1 = new File("C:\\Users\\User\\Documents\\NetBeansProjects\\APU_JAVA\\src\\Product.txt");
                    BufferedReader br1 = new BufferedReader(new FileReader(file1));
                    String pro;
                    while((pro = br1.readLine()) != null)
                    {
                        String[] separate1 = pro.split("\"(,\")?");
                        if(separate[3].trim().equals(separate1[1].trim()))
                        {
                            System.out.println("\tProduct ID     : " + separate1[1].trim());
                            System.out.println("\tProduct Name   : " + separate1[2].trim());
                            System.out.printf("\tProduct Rate   : RM %.2f\n", Double.parseDouble(separate1[3].trim()));
                            total_prd = Double.parseDouble(separate1[3].trim()) * Integer.parseInt(separate[4].trim());
                        }
                    }
                    System.out.println("\tOrder Quantity : " + Integer.parseInt(separate[4].trim()));
                    System.out.println("------------------------------------------------");
                    System.out.printf("\tRM %.2f\n", total_prd);
                    System.out.println("------------------------------------------------");
                    total = total + total_prd;
                }
            }
            if(i == 0)
            {
                System.out.println("\nNo have Order");
            }
            System.out.printf("\nTotal Amount   : RM %.2f\n", total);
            if(position.equals("admin"))
            {
                Selection s = new Selection();
                s.admin_select(position, ID);
            }
            else
            {
                Order o = new Order(position, ID);
            }
        }
        catch(Exception e)
        {
            System.out.println("Error: " + e.getMessage());
        }
    }
}