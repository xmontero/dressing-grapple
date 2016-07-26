<?php

namespace XaviMontero\DressingGrapple\Tests;

use XaviMontero\DressingGrapple\CalculatorFactory;

class SudokuFactoryTest extends \PHPUnit_Framework_TestCase
{
    public function testCreationIsOfProperClass()
    {
        $sut = new CalculatorFactory();

        $this->assertInstanceOf( 'XaviMontero\\DressingGrapple\\CalculatorFactory', $sut );
    }
}
