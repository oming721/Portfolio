package bcd_asg.TransactionProcess.FunctionClass;

import com.google.gson.GsonBuilder;
import java.io.FileInputStream;
import java.io.FileOutputStream;
import java.io.ObjectInputStream;
import java.io.ObjectOutputStream;
import java.nio.file.Files;
import java.nio.file.Paths;
import java.nio.file.StandardOpenOption;
import java.util.LinkedList;

public class Blockchain {

    //data-structure-LinkedList
    private static final LinkedList<Block> db = new LinkedList<>();
    
    //master-binary-file
    private static final String CHAIN_FILE = "master/chain.dat";
    
    //ledger-file
    private static final String LEDGER_FILE = "ledger.txt";
    
    public static void nextBlock( Block newBlock ){
        db.add(newBlock);
        persist();
    }
    
    private static void persist(){
        try(
           FileOutputStream fos = new FileOutputStream( CHAIN_FILE );
           ObjectOutputStream out = new ObjectOutputStream( fos );
        ) {
            out.writeObject( db );
        } catch (Exception e) {
            e.printStackTrace();
        }
    }
    
    public static LinkedList<Block> get(){
        try(
            FileInputStream fis = new FileInputStream( CHAIN_FILE );
            ObjectInputStream in = new ObjectInputStream( fis );
        ) {
            return (LinkedList<Block>)in.readObject(); 
        } catch (Exception e) {
            e.printStackTrace();
            return null;
        }
    }
    
    public static void distribute(String hash){
        try {
            
            String chain = new GsonBuilder().setPrettyPrinting().create().toJson(db);
            System.out.println( chain );
            
            //write to ledger
            Files.write(
                    Paths.get("acc/" + hash + "/" + LEDGER_FILE), 
                    chain.getBytes(), 
                    StandardOpenOption.CREATE);
            
        } catch (Exception e) {
            e.printStackTrace();
        }
    }
    
}
