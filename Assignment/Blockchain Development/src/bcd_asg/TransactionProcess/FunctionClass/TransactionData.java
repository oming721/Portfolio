
package bcd_asg.TransactionProcess.FunctionClass;


import java.io.Serializable;

public class TransactionData implements Serializable {
    
    private String data;

    public TransactionData(String data) {
        this.data = data;
    }

    public String getData() {
        return data;
    }

    public void setData(String data) {
        this.data = data;
    }

    @Override
    public String toString() {
        return "TransactionData{" + "data=" + data + '}';
    }
    
    
    
}
