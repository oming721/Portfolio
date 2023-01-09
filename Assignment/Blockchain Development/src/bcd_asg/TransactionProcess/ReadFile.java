package bcd_asg.TransactionProcess;

import bcd_asg.TransactionProcess.FunctionClass.AsymmCrypto;
import bcd_asg.TransactionProcess.FunctionClass.KeyAccess;
import bcd_asg.TransactionProcess.FunctionClass.MySignature;
import bcd_asg.TransactionProcess.FunctionClass.Transaction;

public class ReadFile {
    public static void main(String[] args) throws Exception{
        
        /*Test with dummy transaction*/
        /*Data can be found at dummy_transaction.txt*/
        Transaction t = new Transaction();
        
        /*Symmetric Data can get from acc/Acc.txt*/
        String hash = "hqIjkJTuc6ShrySmUs3N0w==";/*user ID: testing123*/
        String sign = "Tan";/*SignatureA*/
        
        /*Get From Genies Block of hqIjkJTuc6ShrySmUs3N0w==*/
        String sign_block = "HwDpbglFmfWiC2SvHPd6l1YD8NTZMeZIgBqVA+FNppkiOIhdEJUO/UpLxh7hunrmNC5yYW1+FFUJYwyKKIx9+/aRgx+eRW5gYUif/aPC7z8+AXMC8U3XSAAhDzVXDe5tcjulv2A4wJCKqYwIq9fw8REdk8U5yl3cQEOjwO9yJ2o\u003d";
        
        /*Data From Blockchain of hqIjkJTuc6ShrySmUs3N0w==*/
        String data = "j1ub3zJfctfYgOLYTsox2e1NRE/2Vzn95XWKrMR8mCnlYhSUtGQUCpEvA1Cg0sZ0tbx99Jowt6IIZpewDqRDuiMfOMNGvnw1yjkOgRMPK6AvYIB4PJMxJFQiIsFFTV8GXE+zcV7xp9pD9n4wzgwPecjO6EhG48J4jog4fB3ZKz0\u003d";
        
        
        MySignature ms = new MySignature();
        boolean isValid = ms.verify(sign, sign_block, hash);
        AsymmCrypto crypto = new AsymmCrypto();
        
        if(isValid == true)
        {
            String decrypted = crypto.decrypt(data, KeyAccess.privateKey(hash));
            String[] info = decrypted.split(",,");
            System.out.println("Pick Up Point: " + info[0]);
            System.out.println("Drop off Point: " + info[1]);
            System.out.println("Date: " + info[2]);
            System.out.println("Payment: " + info[3]);
            System.out.println("Amount: " + info[4]);
        }
        else
        {
            System.out.println("Invalid Signature!!!");
        }
    }
}
