package bcd_asg.TransactionProcess.FunctionClass;

import java.io.*;
import java.sql.Timestamp;
import java.util.Base64;
import bcd_asg.AccManage.FunctionClass.hasher;

public class Block implements Serializable{

    private Header header;
    private TransactionData data;
    
    //constructor
    public Block(String prevHash, String data){
        
        header = new Header();
        header.setPreviousHash(prevHash);
        header.setTimestamp( new Timestamp( System.currentTimeMillis() ).getTime() );
        byte[] blockBytes = Block.getBytes(this);
        String currHash = hasher.hash( 
                Base64.getEncoder().encodeToString(blockBytes),
                "SHA-256" ); 
        header.setCurrentHash( currHash );
        
        this.data = new TransactionData( data );
    }
    
    private static byte[] getBytes(Block obj){
        try(
           ByteArrayOutputStream baos = new ByteArrayOutputStream();
           ObjectOutputStream out = new ObjectOutputStream(baos);
        ) {
           out.writeObject(obj);
           return baos.toByteArray();
        } catch (Exception e) {
            e.printStackTrace();
            return null;
        }
        
    }
    

    @Override
    public String toString() {
        return "Block{" + "header=" + header + ", data=" + data + '}';
    }

    public Header getHeader() {
        return header;
    }

    public void setHeader(Header header) {
        this.header = header;
    }

    public TransactionData getData() {
        return data;
    }

    public void setData(TransactionData data) {
        this.data = data;
    }
    
    
}
