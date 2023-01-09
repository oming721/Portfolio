package aplc_asg;

import com.opencsv.CSVWriter;
import java.io.FileWriter;
import java.util.ArrayList;
import java.util.List;
import org.jpl7.Query;


public class task2 {
    public void connect(String plFile)
    {
        String s = "consult('"+ plFile +"')";
        Query q1 = new Query( s );
        System.out.print(plFile+ ": " );
        System.out.println( q1.hasSolution() ? "success" : "failure" );
        
    }
    public void sort_ascending(List<String[]> data)
    {
        try{
            CSVWriter writer = new CSVWriter(new FileWriter("ascending.csv"));
            List<Integer> asc = new ArrayList<Integer>();
            data.stream().skip(1).forEach(x -> {
                asc.add(Integer.parseInt(x[x.length - 1]));
            });
            Query q1 = new Query("insert_sort(" + asc.toString() + ", Result)");

            String save = String.valueOf(q1.oneSolution().get("Result"));
            String[] save1 = save.replace("[", "").replace("]", ",").split(",");
            writer.writeNext(save1);
            
            writer.close();
        }catch(Exception e){
            e.printStackTrace();
        }
    }
    public void sort_descending(List<String[]> data)
    {   
        try{
            CSVWriter writer = new CSVWriter(new FileWriter("descending.csv"));
            List<Integer> asc = new ArrayList<Integer>();
            data.stream().skip(1).forEach(x -> {
                asc.add(Integer.parseInt(x[x.length - 1]));
            });
            Query q1 = new Query("insert_sort(" + asc.toString() + ", Result)");

            Query q2 = new Query("rev(" + q1.oneSolution().get("Result") + ",Result)");
            //System.out.println( q2.oneSolution().get("Result") );
            String save = String.valueOf(q2.oneSolution().get("Result"));
            String[] save1 = save.replace("[", "").replace("]", ",").split(",");
            writer.writeNext(save1);
            
            writer.close();
        }catch(Exception e){
            e.printStackTrace();
        }
    }
}
