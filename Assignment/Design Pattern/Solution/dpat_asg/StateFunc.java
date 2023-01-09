
package dpat_asg;

public class StateFunc {
    AccFunction sf;
    public AccFunction getState(int choice)
    {
        switch (choice) {
            case 1:
                sf = new AddFunc();
                break;
            case 2:
                sf = new ViewFunc();
                break;
            case 3:
                sf = new SearchFunc();
                break;
            case 4:
                sf = new DeleteFunc();
                break;
            default:
                sf = null;
                break;
        }
        return sf;
    }
}
