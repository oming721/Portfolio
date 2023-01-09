
package dpat_asg;

import java.io.File;
import java.io.FileNotFoundException;
import java.io.FileWriter;
import java.io.IOException;
import java.util.Scanner;


public class DeleteFunc extends AccFunction{
    public void process()
    {
        Scanner scan = new Scanner(System.in);
        System.out.print("Enter User ID: ");
        String userid = scan.next();
        String result = null;
        try{
            File file = new File("C:\\Users\\User\\Documents\\NetBeansProjects\\DPAT_ASG\\src\\dpat_asg\\Account_Info.txt");
            File pro_file = new File("C:\\Users\\User\\Documents\\NetBeansProjects\\DPAT_ASG\\src\\dpat_asg\\Process.txt");
            Scanner myReader = new Scanner(file);
            try{
                FileWriter myWriter = new FileWriter(pro_file);
                while (myReader.hasNextLine()) {
                    String data = myReader.nextLine();
                    String[] info = data.split(",,");
                    if(!userid.equals(info[0]))
                    {
                        myWriter.write(data+"\n");
                    }
                }
                myWriter.close();
                
                
                Scanner copy = new Scanner(pro_file);
                FileWriter paste = new FileWriter(file);
                while (copy.hasNextLine()) {
                        String data = copy.nextLine();
                        paste.write(data+"\n");
                }
                paste.close();
                copy.close();
                System.out.println("Successfully deleted from the file.");
            }catch (IOException e) {
                        System.out.println("An error occurred.");
                        e.printStackTrace();
                      }
            myReader.close();
        }catch(FileNotFoundException e){
            System.out.println("An error occurred.");
            e.printStackTrace();
        }
    }
}
