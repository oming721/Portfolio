package bcd_asg.TransactionProcess.FunctionClass;

import java.nio.file.Files;
import java.nio.file.Paths;
import java.security.*;
import java.security.spec.X509EncodedKeySpec;
import java.security.spec.PKCS8EncodedKeySpec;

public class KeyAccess {
    public static PublicKey publicKey(String hash) throws Exception{
        byte[] keyBytes = Files.readAllBytes(Paths.get("acc/"+hash+"/PublicKey"));
        X509EncodedKeySpec spec = new X509EncodedKeySpec(keyBytes);
        return KeyFactory.getInstance(Config.ALOGRITHM).generatePublic(spec);
    }
    
    public static PrivateKey privateKey(String hash) throws Exception{
        byte[] keyBytes = Files.readAllBytes(Paths.get("acc/"+hash+"/PrivateKey"));
        PKCS8EncodedKeySpec spec = new PKCS8EncodedKeySpec(keyBytes);
        return KeyFactory.getInstance(Config.ALOGRITHM).generatePrivate(spec);
    }
}
