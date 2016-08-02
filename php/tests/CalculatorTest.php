<?php

namespace XaviMontero\DressingGrapple\Php\Tests;

require_once( "http://localhost:8080/JavaBridge/java/Java.inc" );

class CalculatorTest extends \PHPUnit_Framework_TestCase
{
    public function testCreationIsOfProperClass()
    {
        $sut = new \Java( "xavi_montero.dressing_grapple.java.Calculator" );

        $this->assertInstanceOf( 'Java', $sut );
    }
}
