
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
        System.out.println("4. Delete Account");
    }
    public void Enter_choice()
    {
        Scanner scan = new Scanner(System.in);
        System.out.print("Enter Number Of The Function: ");
        int choice = scan.nextInt();
        StateFunc sf = new StateFunc();
        AccFunction asf = sf.getState(choice);
        if(asf == null)
        {
            System.out.println("Invalid Choice");
        }
        else{
            asf.process();
        }
    }
}
