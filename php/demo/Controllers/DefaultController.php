<?php

namespace XaviMontero\DressingGrapple\Php\Demo\Controllers;

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
        echo( "Hello, world!" . PHP_EOL );
    }
}
