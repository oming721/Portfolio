package bcd_asg.AccManage.FunctionClass;

import java.io.File;
import java.nio.file.Files;
import java.nio.file.Paths;
import java.nio.file.StandardOpenOption;
import java.security.*;
import java.util.Base64;

public class KeyPairMaker {
    private KeyPairGenerator keygen;
    private KeyPair keyPair;
    
    public KeyPairMaker() throws Exception{
        keygen = KeyPairGenerator.getInstance(Config.ALOGRITHM);
        keygen.initialize(1024);
    }
    
    public static void create(String hash){
        try{
            KeyPairMaker maker = new KeyPairMaker();
            maker.keyPair = maker.keygen.generateKeyPair();
            PublicKey publicKey = maker.keyPair.getPublic();
            PrivateKey privateKey = maker.keyPair.getPrivate();

            String PUBLICKEY_FILE = "acc/" + hash + "/PublicKey";
            String PRIVATEKEY_FILE = "acc/" + hash + "/PrivateKey";;

            put(publicKey.getEncoded(), PUBLICKEY_FILE);
            put(privateKey.getEncoded(), PRIVATEKEY_FILE);
            
             
        }catch (Exception e){
            e.printStackTrace();
        }
    }
    private static void put(byte[] keyBytes, String loc){
        File file = new File(loc);
        file.getParentFile().mkdirs();
        try{
            Files.write(Paths.get(loc), keyBytes, StandardOpenOption.CREATE);
        } catch(Exception e){
           e.printStackTrace();
        }
    }
}

