
package dpat_asg;


public class UserInfo implements DetailUser{
    InsertAcc a = new InsertAcc();
    public void new_saveintodatabse(String UserID, String UserName)
    {
        String data = String.join(",,", UserID, UserName);
        a.saveintodatabase(data);
    }
}
