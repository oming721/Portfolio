
package bcd_asg.AccManage.FunctionClass;

import java.util.Scanner;


public class StateFunc {
    FuncContent fc;
    public FuncContent selection(int choice)
    {
        switch(choice){
            case 1:
                fc = new FuncLogin();
                break;
            case 2:
                fc = new FuncRegis();
                break;
            default:
                fc = null;
                break;
        }
        return fc;
    }
}
