/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package bcd_asg.AccManage.FunctionClass;

import java.security.Key;
import java.util.Arrays;
import javax.crypto.spec.SecretKeySpec;

public class SecretCharsKeyGen {

    
    private static final String ALGORITHM = "AES";
    
    private final static String SECRET_TEXT = "ezcabsystem";

    //keygen method
    public static Key keygen() {
        return new SecretKeySpec(
                Arrays.copyOf(SECRET_TEXT.getBytes(), 16),
                ALGORITHM);
    }

}
