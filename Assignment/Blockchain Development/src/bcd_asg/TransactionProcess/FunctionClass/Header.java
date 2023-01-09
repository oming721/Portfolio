package bcd_asg.TransactionProcess.FunctionClass;

import java.io.Serializable;

public class Header implements Serializable {
    
    //Properties of Block header
    private String currentHash, previousHash;
    private long timestamp;
    private String merkleRoof;
    

    @Override
    public String toString() {
        return "Header{" + ", currentHash=" + currentHash + ", previousHash=" + previousHash + ", timestamp=" + timestamp + ", merkleRoof=" + merkleRoof + '}';
    }

    public String getCurrentHash() {
        return currentHash;
    }

    public void setCurrentHash(String currentHash) {
        this.currentHash = currentHash;
    }

    public String getPreviousHash() {
        return previousHash;
    }

    public void setPreviousHash(String previousHash) {
        this.previousHash = previousHash;
    }

    public long getTimestamp() {
        return timestamp;
    }

    public void setTimestamp(long timestamp) {
        this.timestamp = timestamp;
    }

    public String getMerkleRoof() {
        return merkleRoof;
    }

    public void setMerkleRoof(String merkleRoof) {
        this.merkleRoof = merkleRoof;
    }
    
}

