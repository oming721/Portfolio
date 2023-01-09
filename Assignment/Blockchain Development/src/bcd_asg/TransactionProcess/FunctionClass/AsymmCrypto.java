package bcd_asg.TransactionProcess.FunctionClass;

import java.security.*;
import java.util.Base64;
import javax.crypto.Cipher;

public class AsymmCrypto {
    private Cipher cipher;
    
    public AsymmCrypto(){
        try{
            cipher = Cipher.getInstance(Config.ALOGRITHM);
        }catch(Exception e){
            e.printStackTrace();
        }
    }
    
    public String encrypt(String data, PublicKey key) throws Exception{
       String cipherText = null;
       cipher.init(Cipher.ENCRYPT_MODE, key);
       byte[] cipherBytes = cipher.doFinal(data.getBytes());
       cipherText = Base64.getEncoder().encodeToString(cipherBytes);
       return cipherText;
    }
    
    public String decrypt(String cipherText, PrivateKey key) throws Exception{
       cipher.init(Cipher.DECRYPT_MODE, key);
       byte[] dataBytes = cipher.doFinal(Base64.getDecoder().decode(cipherText));
       return new String(dataBytes);
    }
}

