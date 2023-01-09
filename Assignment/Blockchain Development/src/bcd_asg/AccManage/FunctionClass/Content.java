
package bcd_asg.AccManage.FunctionClass;

import java.util.Scanner;


public class Content {
    private int choice;
    public Content(){
        System.out.println("------------------------------");
        System.out.println("-        EZCAB SYSTEM        -");
        System.out.println("------------------------------");
        System.out.println("1. Login");
        System.out.println("2. Register");
    }
    public void selection()
    {
        Scanner s = new Scanner(System.in);
        System.out.print("Enter your choice: ");
        choice = s.nextInt();
        StateFunc sf = new StateFunc();
        FuncContent fc = sf.selection(choice);
        if(fc == null)
        {
            System.out.println("Invalid Choice");
        }
        else{
            fc.process();
        }
    }
}
