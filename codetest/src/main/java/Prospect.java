import java.text.DecimalFormat;

public class Prospect
{
    private String name;
    private double loan;
    private double interest;
    private int years;
    private double monthlyPayment;
    private DecimalFormat df2 = new DecimalFormat("#.##");

    public Prospect(String name,double loan, double interest, int years)
    {
        this.name=setName(name);
        this.loan=setLoanAmount(loan);
        this.interest=setInterest(interest);
        this.years=setYears(years);
        this.monthlyPayment=calcMonthlyPayment(loan,interest,years);
    }

    //Calculate monthly payment
    private double calcMonthlyPayment(double loan,double interest,int years)
    {
        int numberOfPayments = years*12;
        double interestdec = interest / 100;
        double monthlyInterest = interestdec/12;

        //E = U[b(1 + b)^p]/[(1 + b)^p - 1]
        double numerator = monthlyInterest*power((1+monthlyInterest),numberOfPayments);
        double denominator = power((1+monthlyInterest),numberOfPayments)-1;
        double monthlyPayment = loan*(numerator/denominator);
        return monthlyPayment;
    }

    private double power(double d, int n)
    {
        double p=1;
        for(int i=0;i<n;i++)
            p=p*d;
        return p;
    }
    //Setters
    private String setName(String name)
    {
        return name;
    }
    private double setLoanAmount(double loan)
    {
        return loan;
    }
    private double setInterest(double interest)
    {
        return interest;
    }
    private int setYears(int years)
    {
        return years;
    }

    //Getters
    public String getName()
    {
        return name;
    }
    public double getLoan()
    {
        return loan;
    }
    public double getInterest()
    {
        return interest;
    }
    public double getYears()
    {
        return years;
    }
    public double getMonthlyPayment() { return monthlyPayment; }

    @Override
    public String toString()
    {
        return name + " wants to borrow: " + loan + " for a period of "+ years + " years, and pay "+df2.format(monthlyPayment)+ " each month";
    }
}
