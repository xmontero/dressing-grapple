<?php

namespace XaviMontero\DressingGrapple\Php\Tests;

use XaviMontero\DressingGrapple\Php\CalculatorFactory;

class CalculatorFactoryTest extends \PHPUnit_Framework_TestCase
{
    public function testCreationIsOfProperClass()
    {
        $sut = new CalculatorFactory();

        $this->assertInstanceOf( 'XaviMontero\\DressingGrapple\\Php\\CalculatorFactory', $sut );
    }
}
