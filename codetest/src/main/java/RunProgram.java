import java.sql.*;
import java.util.HashMap;

public class RunProgram
{
    public RunProgram()
    {
        HashMap<Integer,Prospect> prospects=getData();
        for (Integer i : prospects.keySet()) {
            System.out.println("Prospect "+i.toString()+": "+prospects.get(i).toString());
        }
    }
    public HashMap<Integer,Prospect> getData()
    {
        HashMap<Integer,Prospect> prospects=new HashMap<Integer, Prospect>();
        try
        {
            // create mysql database connection
            String myDriver = "com.mysql.cj.jdbc.Driver";
            String myUrl = "jdbc:mysql://localhost:3306/prospects";
            Class.forName(myDriver);
            Connection conn = DriverManager.getConnection(myUrl, "root", "");

            // SQL SELECT query
            String query = "SELECT * FROM prospects";

            // create the java statement
            Statement st = conn.createStatement();

            // execute the query, and get a resultset
            ResultSet rs = st.executeQuery(query);

            // iterate through the java resultset
            while (rs.next())
            {
                int id = rs.getInt("id");
                String firstName = rs.getString("Firstname");
                String lastName = rs.getString("Lastname");
                double amount = rs.getDouble("Loan");
                double interest = rs.getDouble("Interest");
                int years = rs.getInt("Years");

                // create string for fullname
                String fullName=firstName+" "+lastName;
                Prospect p = new Prospect(fullName,amount,interest,years);
                // add prospect to HashMap of prospects use id from database as key
                prospects.put(id,p);
            }
            // close connection
            st.close();
        }
        catch (Exception e)
        {
            System.err.println("Got an exception! ");
            System.err.println(e.getMessage());
            e.printStackTrace();
        }
        return prospects;
    }

}


