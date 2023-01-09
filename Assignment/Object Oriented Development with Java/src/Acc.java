import java.io.*;
public class Acc
{
    private String id, password;
    private boolean status_acc = false;
    private String[] customer;
    public Acc(String id, String password)
    {
        this.id = id;
        this.password = password;
    }
    public String getID()
    {
        return id;
    }
    public boolean getstatus_acc()
    {
        return status_acc;
    }
    public String getPosition()
    {
        String acc, position = null;
        try
        {
            File file = new File("C:\\Users\\User\\Documents\\NetBeansProjects\\APU_JAVA\\src\\Acc.txt");
            BufferedReader br = new BufferedReader(new FileReader(file)); 
            while((acc = br.readLine()) != null)
            {
                String[] separate = acc.split("\"(,\")?");
                if(separate[1].trim().equals(id) && separate[2].trim().equals(password))
                {
                    status_acc = true;
                    position = separate[3].trim();
                    break;
                }
            }
            
        }
        catch(Exception e)
        {
            System.out.println("Error: " + e.getMessage());
        }
        finally
        {
            if(status_acc == true)
            {
                return position;
            }
            else
            {
                return "Wrong ID";
            }
        }
    }
}