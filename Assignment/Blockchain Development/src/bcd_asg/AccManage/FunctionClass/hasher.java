package bcd_asg.AccManage.FunctionClass;

import java.security.MessageDigest;
import java.security.NoSuchAlgorithmException;
import java.security.SecureRandom;
import java.util.logging.Level;
import java.util.logging.Logger;
import org.apache.commons.codec.binary.Hex;


public class hasher {
    
    public static String hash( String data, String algorithm ){
        String hash = "";
        try {
            MessageDigest md = MessageDigest.getInstance( algorithm );
            md.update( data.getBytes() );
            
            hash = Hex.encodeHexString( md.digest() );
                    
        } catch (NoSuchAlgorithmException ex) {
            Logger.getLogger(hasher.class.getName()).log(Level.SEVERE, null, ex);
        }
        return hash;
    }
 
    private static byte[] salt(){
        SecureRandom sr = new SecureRandom();
        byte[] b = new byte[16];
        sr.nextBytes(b);
        return b;
    }
    
}
