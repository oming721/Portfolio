package aplc_asg;

import com.opencsv.CSVWriter;
import java.io.FileWriter;
import java.time.LocalDate;
import java.time.format.DateTimeFormatter;
import java.util.ArrayList;
import java.util.Arrays;
import java.util.Comparator;
import java.util.List;
import java.util.function.Function;
import java.util.function.Predicate;
import java.util.stream.Collectors;

public class task1 {
    public void total(List<String[]> data)
    {
        try{
            CSVWriter writer = new CSVWriter(new FileWriter("total.csv"));
            data.stream().skip(1).forEach(x -> {
                String [] save = {x[0],x[1],x[x.length - 1]};
                writer.writeNext(save);
                //System.out.println(x[0] + ";" + x[1] + ";" + x[x.length - 1]);
            });
            writer.close();
        }catch(Exception e){
            e.printStackTrace();
        }
        /*//testing
        data.forEach(x -> {
            System.out.println(Arrays.toString(x));
        });*/
    }
    public void getmax(List<String[]> data)
    {
        try{
            CSVWriter writer = new CSVWriter(new FileWriter("maximum.csv"));
            data.stream().skip(1).forEach(x -> {
                String [] save = {x[0],x[1],Arrays.asList(x).stream().skip(4).max(Comparator.comparing(Integer::valueOf)).get()};
                writer.writeNext(save); 
                //System.out.println(x[0] + " " + x[1] + " " + Arrays.asList(x).stream().skip(4).max(Comparator.comparing(Integer::valueOf)).get());
            });
            writer.close();
        }catch(Exception e){
            e.printStackTrace();
        }
    }
    public void getmin(List<String[]> data)
    {
        try{
            CSVWriter writer = new CSVWriter(new FileWriter("minimun.csv"));
            data.stream().skip(1).forEach(x -> {
                String [] save = {x[0],x[1],Arrays.asList(x).stream().skip(4).min(Comparator.comparing(Integer::valueOf)).get()};
                writer.writeNext(save); 
                //System.out.println(x[0] + " " + x[1] + " " + Arrays.asList(x).stream().skip(4).min(Comparator.comparing(Integer::valueOf)).get());
            });
            writer.close();
        }catch(Exception e){
            e.printStackTrace();
        }
    }
    public void getresult(List<String[]> data, String country)
    {
        try{
            CSVWriter writer = new CSVWriter(new FileWriter("search.csv"));
            data.stream().skip(1).forEach(x -> {
                Arrays.asList(x).stream().filter(y -> x[1].equals(y) && x[1].equals(country)).forEach(z -> {
                    String [] save = {Arrays.asList(x).stream().limit(1).collect(Collectors.toList()).toString().replace(",", "").replace("[", "").replace("]", ""), z, Arrays.asList(x).stream().skip(4).collect(Collectors.toList()).toString().replace(",", "").replace("[", "").replace("]", "")};
                    writer.writeNext(save); 
                    //System.out.println(Arrays.asList(x).stream().limit(1).collect(Collectors.toList()).toString().replace(",", "").replace("[", "").replace("]", "")+ " " + z + " " + Arrays.asList(x).stream().skip(4).collect(Collectors.toList()).toString().replace(",", "").replace("[", "").replace("]", ""));
                });
            });
            
            writer.close();
        }catch(Exception e){
            e.printStackTrace();
        }
    }
    public void getgroupby(List<String[]> data){
        
        
        try{
            CSVWriter writer = new CSVWriter(new FileWriter("monthly.csv"));
                Predicate<String> lastday = x -> {
                LocalDate lastmonths = LocalDate.parse(x, DateTimeFormatter.ofPattern("M/d/yy"));
                LocalDate convertedDate = lastmonths.withDayOfMonth(lastmonths.getMonth().length(lastmonths.isLeapYear()));
                return (lastmonths.equals(convertedDate))?true:false;
            };

            //testing
            /*boolean result = lastday.test("1/31/20");
            System.out.println(result);*/

            List<Integer> index = new ArrayList<Integer>();
            data.stream().limit(1).forEach(x -> { //first row
                Arrays.asList(x).stream().skip(4).filter(e -> lastday.test(e) == true).forEach(y -> { //skip 4 column
                       index.add(Arrays.asList(x).indexOf(y)); 
                });
            });

            Function<Integer, Function<Integer, Integer>> m2 = i2 -> i1 -> i2 - i1;
            //Function<Integer, Integer> pa = m2.apply(0);
            int temp = 0;



            //index.forEach(System.out::println);
            //List <String> abc = new ArrayList<String>();
            data.stream().skip(1).forEach(v -> {
                List <String> abc = new ArrayList<String>();
                index.stream().forEach(p -> {
                     // i1
                     //i2
                    abc.add(v[p]);
                });
                writer.writeNext(abc.toString().replace("[", "").replace("]", "").split(","));
            });
            
            writer.close();
        }catch(Exception e){
            e.printStackTrace();
        }
        
    }
}
