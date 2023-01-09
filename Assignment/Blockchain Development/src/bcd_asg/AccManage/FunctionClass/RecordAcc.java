package bcd_asg.AccManage.FunctionClass;

import java.io.File;
import java.io.FileWriter;

public class RecordAcc {
    private static String file_name = "acc/ACC.txt";
    public void writetofile(String record){
        try {
            File myObj = new File(file_name);
            myObj.createNewFile();
            FileWriter myWriter = new FileWriter(file_name,true);
            myWriter.write(record + "\n");
            myWriter.close();
        } catch (Exception e) {
            e.printStackTrace();
        }
    }
}
