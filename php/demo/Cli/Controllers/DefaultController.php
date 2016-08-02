<?php

namespace XaviMontero\DressingGrapple\Php\Demo\Cli\Controllers;

require_once( "http://localhost:8080/JavaBridge/java/Java.inc" );
// TODO: Use composer or other tools to make sure we do not need a remote call.
// TODO: Once done, eliminate the tuning of the apache2 and cli settings in the provisioner.

use XaviMontero\DressingGrapple\CalculatorFactory;

class DefaultController
{
//    private $calculatorFactory;

    public function __construct( /* CalculatorFactory $calculatorFactory */ )
    {
        //$this->calculatorFactory = $calculatorFactory;
    }

    //-- Public -----------------------------------------------------------//

    public function run()
    {
        echo( '---------------------------------------------------------------------' . PHP_EOL );
        echo( 'XaviMontero\DressingGrapple\Php\CliDemo\Controllers\DefaultController' . PHP_EOL );
        echo( '---------------------------------------------------------------------' . PHP_EOL );
        echo( PHP_EOL );
        echo( 'Explanation:' . PHP_EOL );
        echo( '    This Cli-PHP demo program calls the Calculator java class and executes the sum() method.' . PHP_EOL );
        echo( '    See the README.md for mor information.' . PHP_EOL );
        echo( PHP_EOL );

        $a = 3;
        $b = 4;
        $calculator = new \Java( "xavi_montero.dressing_grapple.java.Calculator" );

        echo( 'Demo:' . PHP_EOL );
        echo( '    ' . $a . ' + ' . $b . ' = ' . $calculator->sum( $a, $b ) . PHP_EOL );

    }
}
