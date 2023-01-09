/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package bcd_asg.AccManage.FunctionClass;

import java.security.*;
import java.util.Base64;
import javax.crypto.*;

public class SymmCrypto {

    private final static String ALGORITHM = "AES";
    
    private Cipher cipher;
    
    public SymmCrypto(){
        try {
            cipher = Cipher.getInstance(ALGORITHM);
            
        } catch (Exception e) {
            e.printStackTrace();
        }
    }
    
    public String encrypt( String input, Key key ) throws Exception{
        String cipherText = null;
        cipher.init(Cipher.ENCRYPT_MODE, key);
        byte[] cipherBytes = cipher.doFinal( input.getBytes() );
        cipherText = Base64.getEncoder().encodeToString(cipherBytes);//tostring
        return cipherText;
    }
    
    public String decrypt( String cipherText, Key key ) throws Exception{
        //tell cipher the mode of operation
        cipher.init(Cipher.DECRYPT_MODE, key);
        byte[] cipherBytes = Base64.getDecoder().decode(cipherText);
        byte[] inputBytes = cipher.doFinal( cipherBytes );
        return new String( inputBytes );
    }
    
}
