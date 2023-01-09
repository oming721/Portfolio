
package bcd_asg.TransactionProcess.FunctionClass;

import java.io.File;
import java.util.Scanner;

public class Transaction {
    private static void configure(String user_hash) throws Exception{
        MySignature ms = new MySignature();
        Scanner s = new Scanner(System.in);
        String hash = user_hash;
        System.out.print("Please Sign Your Transaction: ");
        String data = s.nextLine();
        String signature = ms.sign(data, hash);
        Block genesis = new Block("0", signature);
        Blockchain.nextBlock(genesis);
    }
    public void store(String hash)
    {
        String user_hash = hash;
        Block b;
        AsymmCrypto crypto = new AsymmCrypto();
        try{
            configure(user_hash);
            File myObj = new File("dummy_transaction.txt");
            Scanner myReader = new Scanner(myObj);
            while (myReader.hasNextLine()) {
                String data = myReader.nextLine();
                String encrypted = crypto.encrypt(data, KeyAccess.publicKey(user_hash));
                b = new Block(Blockchain.get().getLast().getHeader().getCurrentHash(), encrypted);
                Blockchain.nextBlock(b);
            }
            Blockchain.distribute(user_hash);
            myReader.close();
        }catch(Exception e){
            e.printStackTrace();
        }
    }
}
