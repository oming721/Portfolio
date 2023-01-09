package aplc_asg;

import com.opencsv.*;
import java.io.FileReader;
import java.io.FileWriter;
import java.util.List;

public class ReadFile {
    private List<String[]> allData = null;
    public List<String[]> readcsv(){
        String file = "time_series_covid_19_confirmed.csv";

        try{
            //data = Files.lines(Paths.get(file)).collect(Collectors.toList());
            
            FileReader filereader = new FileReader(file);
            //CSVReader csvReader = new CSVReader(filereader);
            
            CSVReader csvReader = new CSVReaderBuilder(filereader)
                                  .build();
            allData = csvReader.readAll();
        }
        catch(Exception e)   
        {  
            e.printStackTrace();  
        }
        return allData;
    }
    public void print(){
        //print
        try{
            CSVWriter writer = new CSVWriter(new FileWriter("table.csv"));
            writer.writeAll(allData);
            writer.close();
        }catch(Exception e){
            e.printStackTrace();
        }
    }
}
