package dpat_asg;
import java.io.File;
import java.io.FileNotFoundException;
import java.util.Scanner;
public class ManageAcc {
    public ManageAcc()
    {
        System.out.println("----------------------------------------------");
        System.out.println("-           TBX Account Management           -");
        System.out.println("----------------------------------------------");
        System.out.println("1. Add Account");
        System.out.println("2. View Account");
        System.out.println("3. Search Account");
    }
    public void Enter_choice()
    {
        Scanner scan = new Scanner(System.in);
        System.out.print("Enter Number Of The Function: ");
        int choice = scan.nextInt();
        String data;
         
        switch (choice) {
            case 1:
                System.out.println("----------------------------------------------");
                System.out.println("-               Add Account                  -");
                System.out.println("----------------------------------------------");
                System.out.print("Enter Account Information (Format: UserID,,User Name): ");
                data = scan.next();      
                InsertAcc user = new InsertAcc();
                user.saveintodatabase(data);
                break;
            case 2:
                System.out.println("----------------------------------------------");
                System.out.println("-                  Result                    -");
                System.out.println("----------------------------------------------");
                try{
                    File file = new File("C:\\Users\\User\\Documents\\NetBeansProjects\\DPAT_ASG\\src\\dpat_asg\\Account_Info.txt");
                    Scanner myReader = new Scanner(file);
                    int i = 0;
                    while (myReader.hasNextLine()) {
                      data = myReader.nextLine();
                      String[] info = data.split(",,");
                      System.out.println((++i) + ".\tUser ID: " + info[0]);
                      System.out.println("\tUser Name: " + info[1] + "\n");
                    }
                    myReader.close();
                }catch(FileNotFoundException e){
                    System.out.println("An error occurred.");
                    e.printStackTrace();
                }
                break;
            case 3:
                System.out.print("Enter User ID: ");
                String userid = scan.next();
                System.out.println("----------------------------------------------");
                System.out.println("-                  Result                    -");
                System.out.println("----------------------------------------------");
                String result = null;
                try{
                    File file = new File("C:\\Users\\User\\Documents\\NetBeansProjects\\DPAT_ASG\\src\\dpat_asg\\Account_Info.txt");
                    Scanner myReader = new Scanner(file);
                    while (myReader.hasNextLine()) {
                        data = myReader.nextLine();
                        String[] info = data.split(",,");
                        if(userid.equals(info[0]))
                        {
                            result = data;
                        }
                    }
                    myReader.close();
                }catch(FileNotFoundException e){
                    System.out.println("An error occurred.");
                    e.printStackTrace();
                }
                if(result == null){
                    System.out.println("Not Founded!!");
                }
                else
                {
                    String[] info = result.split(",,");
                    System.out.println("User ID: " + info[0]);
                    System.out.println("User Name: " + info[1] + "\n");
                }
                break;
            default:
                System.out.println("Invalid Choice");
                break;
        } 
    }
}