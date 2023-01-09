
package dpat_asg;

import java.io.File;
import java.io.FileNotFoundException;
import java.util.Scanner;


public class ViewFunc extends AccFunction{
    public ViewFunc()
    {
        System.out.println("----------------------------------------------");
        System.out.println("-                  Result                    -");
        System.out.println("----------------------------------------------");
    }
    public void process()
    {
        try{
            File file = new File("C:\\Users\\User\\Documents\\NetBeansProjects\\DPAT_ASG\\src\\dpat_asg\\Account_Info.txt");
            Scanner myReader = new Scanner(file);
            int i = 0;
            while (myReader.hasNextLine()) {
              String data = myReader.nextLine();
              String[] info = data.split(",,");
              System.out.println((++i) + ".\tUser ID: " + info[0]);
              System.out.println("\tUser Name: " + info[1] + "\n");
            }
            myReader.close();
        }catch(FileNotFoundException e){
            System.out.println("An error occurred.");
            e.printStackTrace();
        }
    }
}
