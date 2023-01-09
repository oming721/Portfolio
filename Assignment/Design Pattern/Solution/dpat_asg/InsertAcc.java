
package dpat_asg;

import java.io.FileWriter;
import java.io.IOException;

public class InsertAcc{

    private String acc_info;
    public InsertAcc()
    {
        acc_info = "";
    }
    public void saveintodatabase(String acc_info)
    {
        this.acc_info = acc_info;
        try {
            FileWriter myWriter = new FileWriter("C:\\Users\\User\\Documents\\NetBeansProjects\\DPAT_ASG\\src\\dpat_asg\\Account_Info.txt",true);
            myWriter.write(acc_info+"\n");
            myWriter.close();
            System.out.println("Successfully wrote to the file.");
          } catch (IOException e) {
            System.out.println("An error occurred.");
            e.printStackTrace();
          }
    }
}
