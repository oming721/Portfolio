package bcd_asg.TransactionProcess;

import bcd_asg.TransactionProcess.FunctionClass.Transaction;

public class TEST_TRANSACTION {
    public static void main(String[] args){
        
        /*Test with dummy transaction*/
        /*Data can be found at dummy_transaction.txt*/
        Transaction t = new Transaction();
        
        /*Symmetric Data can get from acc/Acc.txt*/
        String hash = "hqIjkJTuc6ShrySmUs3N0w==";/*user ID: testing123*/
        
        t.store(hash);
    }
}
