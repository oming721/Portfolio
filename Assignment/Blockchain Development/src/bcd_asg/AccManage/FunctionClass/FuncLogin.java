package bcd_asg.AccManage.FunctionClass;

import java.util.Scanner;

public class FuncLogin extends FuncContent{
    public void process()
    {
        Scanner s = new Scanner(System.in);
        String userid,password;
        System.out.println("------------------------------");
        System.out.println("-          Login             -");
        System.out.println("------------------------------");
        System.out.print("Enter your user ID: ");
        userid = s.nextLine();
        System.out.print("Enter your Password: ");
        password = s.nextLine();
        Verify_acc va = new Verify_acc();
        if(va.check_acc(userid, password) == true){
            System.out.println("Login!!!");
        }
        else{
            System.out.println("Wrong Password!!!");
        }
    }
}
