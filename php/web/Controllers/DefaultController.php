<?php

namespace XaviMontero\DressingGrapple\Php\Web\Controllers;

require_once( "http://localhost:8080/JavaBridge/java/Java.inc" );

class DefaultController
{
    public function run()
    {
        $a = 3;
        $b = 4;
        $calculator = new \java( "xavi_montero.dressing_grapple.java.Calculator" );

        echo
        (
"<html>
    <head>
        <title>Java to PHP bridge test consuming custom namespaced classes</title>
    </head>
    <body>
        <h1>XaviMontero\DressingGrapple\Php\Web\Controllers\DefaultController</h1>
        <h2>Explanation:</h2>
        <div>
            <ul>
                <li>This web php demo program calls the Calculator java class and executes the sum() method.</li>
                <li>See the README.md for more information.</li>
            </ul>
        </div>
        <h2>Demo:</h2>
        <div>
            " . $a . " + " . $b . " = " . $calculator->sum( $a, $b ) . "        
        </div>
    </body>
</html>"
        );
    }
}
