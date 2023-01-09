
package dpat_asg;

import java.io.File;
import java.io.FileNotFoundException;
import java.util.Scanner;

public class SearchFunc extends AccFunction{
    public void process()
    {
        Scanner scan = new Scanner(System.in);
        System.out.print("Enter User ID: ");
        String userid = scan.next();
        System.out.println("----------------------------------------------");
        System.out.println("-                  Result                    -");
        System.out.println("----------------------------------------------");
        String result = null;
        try{
            File file = new File("C:\\Users\\User\\Documents\\NetBeansProjects\\DPAT_ASG\\src\\dpat_asg\\Account_Info.txt");
            Scanner myReader = new Scanner(file);
            while (myReader.hasNextLine()) {
                String data = myReader.nextLine();
                String[] info = data.split(",,");
                if(userid.equals(info[0]))
                {
                    result = data;
                }
            }
            myReader.close();
        }catch(FileNotFoundException e){
            System.out.println("An error occurred.");
            e.printStackTrace();
        }
        if(result == null){
            System.out.println("Not Founded!!");
        }
        else
        {
            String[] info = result.split(",,");
            System.out.println("User ID: " + info[0]);
            System.out.println("User Name: " + info[1] + "\n");
        }
    }
}
