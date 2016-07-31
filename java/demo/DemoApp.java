class DemoApp
{
    public static void main( String[] args )
    {
        Calculator calculator = new Calculator();

        System.out.println( "XaviMontero/DressingGrapple/Java/Demo" );
        System.out.println( "=====================================" );
        System.out.println( "This java demo program calls the Calculator java class and executes the sum() method." );
        System.out.println( "The intention is check that the Calculator class is there, ready to be consumed from PHP." );
        System.out.println( "See the README.md for mor information." );
        System.out.println( "3 + 4 = " + calculator.sum( 3, 4 ) );
    }
}
