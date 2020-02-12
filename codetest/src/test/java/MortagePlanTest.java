import org.junit.Assert;
import org.junit.jupiter.api.Test;

public class MortagePlanTest
{
    @Test
    public void testCalc()
    {
        //Test Prospect
        Prospect p = new Prospect("John Doe",1000,5,1);
        Assert.assertEquals("John Doe",p.getName());
        Assert.assertEquals(85.6,p.getMonthlyPayment(),1);
        Assert.assertEquals(1000,p.getLoan(),1);
        Assert.assertEquals(5,p.getInterest(),1);
        Assert.assertEquals(1,p.getYears(),1);
    }
}
