package xavi_montero.dressing_grapple.java.tests;

import org.junit.Test;
import static org.junit.Assert.assertEquals;
import xavi_montero.dressing_grapple.java.Calculator;

public class CalculatorTest
{
    @Test
    public void testSum()
    {
        int a = 3;
        int b = 4;
        Calculator calculator = new Calculator();

        assertEquals( a + b, calculator.sum( a, b ) );
    }
}
