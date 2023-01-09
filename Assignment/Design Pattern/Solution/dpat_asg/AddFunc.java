
package dpat_asg;

import java.util.Scanner;

public class AddFunc extends AccFunction{
    UserInfo user = new UserInfo();
    public void process()
    {
        Scanner scan = new Scanner(System.in);
        System.out.println("----------------------------------------------");
        System.out.println("-               Add Account                  -");
        System.out.println("----------------------------------------------");
        System.out.print("Enter User ID: ");
        String userid = scan.nextLine();      
        System.out.print("\nEnter User Name: ");
        String username = scan.next();
        user.new_saveintodatabse(userid, username);
    }
}
