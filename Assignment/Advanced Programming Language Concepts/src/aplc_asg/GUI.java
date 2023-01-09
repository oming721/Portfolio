package aplc_asg;

import java.awt.BorderLayout;
import java.awt.GridLayout;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;
import java.util.List;
import javax.swing.*;

public class GUI extends JFrame implements ActionListener{
    private JLabel label;
    private JLabel label1;
    private JFrame frame;
    private JPanel panel;
    private JButton button;
    private JButton button1;
    private JButton button2;
    private JButton button3;
    private JButton button4;
    private JButton button5;
    private JButton button6;
    private JButton button7;
    public GUI(){
        frame = new JFrame();
        
        button = new JButton("Print Table");
        button1 = new JButton("Total Confirmed Cases For Each Country");
        button2 = new JButton("Monthly Confirmed Cases For Each Country");
        button3 = new JButton("Highest Confirmed Cases For Each Country");
        button4 = new JButton("Lowest Confirmed Cases For Each Country");
        button5 = new JButton("Search The Country For Comfirmed Cases");
        button6 = new JButton("Latest Confirmed Cases Sort By Ascending Order");
        button7 = new JButton("Latest Confirmed Cases Sort By Descending Order");
        button.addActionListener(this);
        button1.addActionListener(this);
        button2.addActionListener(this);
        button3.addActionListener(this);
        button4.addActionListener(this);
        button5.addActionListener(this);
        button6.addActionListener(this);
        button7.addActionListener(this);
        
        
        label = new JLabel("");
        label1 = new JLabel("");
        
        JPanel panel = new JPanel();
        panel.setBorder(BorderFactory.createEmptyBorder(30, 10, 10, 10));
        panel.setLayout(new GridLayout(0, 1));
        panel.add(button);
        panel.add(button1);
        panel.add(button2);
        panel.add(button3);
        panel.add(button4);
        panel.add(button5);
        panel.add(button6);
        panel.add(button7);
        panel.add(label);
        panel.add(label1);
        frame.setSize(500, 500);
        frame.add(panel, BorderLayout.CENTER);
        frame.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
        
        frame.setTitle("DEMO TESTING");
        frame.setVisible(true);   
        
    }
    @Override
    public void actionPerformed(ActionEvent e) {
        task1 tk1 = new task1();
        ReadFile tst = new ReadFile();
        List<String[]> data = tst.readcsv();
        task2 tk2 = new task2();
            String plFile = "asg.pl";
        tk2.connect(plFile);

        if(e.getSource() == button)
        {
            tst.print();
            label.setText("Successful Save To The File");
            label1.setText("Wrote to table.csv file");
        }
        else if(e.getSource() == button1)
        {
            tk1.total(data);
            label.setText("Successful Save To The File");
            label1.setText("Wrote to total.csv file");
        }
        else if(e.getSource() == button2)
        {
            tk1.getgroupby(data);
            label.setText("Successful Save To The File");
            label1.setText("Wrote to monthly.csv file");
        }
        else if(e.getSource() == button3)
        {
            tk1.getmax(data);
            label.setText("Successful Save To The File");
            label1.setText("Wrote to maximum.csv file");
        }
        else if(e.getSource() == button4)
        {
            tk1.getmin(data);
            label.setText("Successful Save To The File");
            label1.setText("Wrote to minimum.csv file");
        }
        else if(e.getSource() == button5)
        {
            tk1.getresult(data, "China");
            label.setText("Successful Save To The File");
            label1.setText("Wrote to search.csv file");
        }
        else if(e.getSource() == button6)
        {
            tk2.sort_ascending(data);
            label.setText("Successful Save To The File");
            label1.setText("Wrote to ascending.csv file");
        }
        else if(e.getSource() == button7)
        {
            tk2.sort_descending(data);
            label.setText("Successful Save To The File");
            label1.setText("Wrote to descending.csv file");
        }
        
    }
}
