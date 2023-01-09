
package bcd_asg.TransactionProcess.FunctionClass;

import java.security.KeyPair;
import java.security.KeyPairGenerator;
import java.security.Signature;
import java.util.Base64;

public class MySignature {
    
    private Signature signature;

    public MySignature() {
        try {
            signature = Signature.getInstance( "SHA256WithRSA" );
            
        } catch (Exception e) {
            e.printStackTrace();
        }
    }
    
    //sign
    public String sign(String data,String hash) throws Exception
    {
        signature.initSign( KeyAccess.privateKey(hash) );
        signature.update( data.getBytes() );
        return Base64.getEncoder().encodeToString( signature.sign() );
    }
    
    public boolean verify( String data, String ds, String hash ) throws Exception
    {
        signature.initVerify( KeyAccess.publicKey(hash) );
        signature.update( data.getBytes() ) ;
        return signature.verify( Base64.getDecoder().decode(ds) );
        
    }
    
    
}
