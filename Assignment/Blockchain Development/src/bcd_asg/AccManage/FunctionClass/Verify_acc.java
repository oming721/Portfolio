package bcd_asg.AccManage.FunctionClass;

import java.io.File;
import java.util.Scanner;

public class Verify_acc {
    private static String file_name = "acc/ACC.txt";
    String hash;
    public Verify_acc(){
        hash = "";
    }
    public boolean check_acc(String userid,String password){
        boolean status = false;
        try{
            File myObj = new File(file_name);
            Scanner myReader = new Scanner(myObj);
            while (myReader.hasNextLine()) {
                String data = myReader.nextLine();
                String[] info = data.split(",,");
                if(info[0].equals(userid)&&info[3].equals(hasher.hash(password, "SHA-256"))){
                    status = true;
                    hash = info[1];
                }
            }
            myReader.close();
        }catch(Exception e){
            e.printStackTrace();
        }
        return status;
    }
    public String gethash(){
        return hash;
    }
}
