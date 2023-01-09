package bcd_asg.AccManage.FunctionClass;

import java.security.Key;
import java.util.Scanner;

public class FuncRegis extends FuncContent{
    public void process(){
        Scanner s = new Scanner(System.in);
        String name,userid,password;
        System.out.println("------------------------------");
        System.out.println("-         Register           -");
        System.out.println("------------------------------");
        System.out.print("Enter your user ID: ");
        userid = s.nextLine();
        System.out.print("Enter your Name: ");
        name = s.nextLine();
        System.out.print("Enter your Password: ");
        password = s.nextLine();
        
        Key key = SecretCharsKeyGen.keygen();
        SymmCrypto crypto = new SymmCrypto();
        try{
            String crypted_data = crypto.encrypt(userid, key);
            RecordAcc r = new RecordAcc();
            r.writetofile(userid + ",," + crypted_data + ",," + name + ",," + hasher.hash(password, "SHA-256"));
            KeyPairMaker.create(crypted_data);
        }catch(Exception e){
            e.printStackTrace();
        }
    }
}
