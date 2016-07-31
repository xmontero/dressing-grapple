package xavi_montero.dressing_grapple.java.demo;

import xavi_montero.dressing_grapple.java.Calculator;

public class DemoApp
{
    public static void main( String[] args )
    {
        System.out.println( "-----------------------------------------------" );
        System.out.println( "xavi_montero.dressing_grapple.java.demo.DemoApp" );
        System.out.println( "-----------------------------------------------" );
        System.out.println();
        System.out.println( "Explanation:" );
        System.out.println( "    This java demo program calls the Calculator java class and executes the sum() method." );
        System.out.println( "    The intention is check that the Calculator class is there, ready to be consumed from PHP." );
        System.out.println( "    See the README.md for mor information." );
        System.out.println();

        int a = 3;
        int b = 4;
        Calculator calculator = new Calculator();

        System.out.println( "Demo:" );
        System.out.println( "    " + a + " + " + b + " = " + calculator.sum( a, b ) );
    }
}
